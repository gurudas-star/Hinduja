<?php
require_once 'config/db.php';

$slug = $_GET['slug'] ?? '';
if (!$slug) {
    header('Location: blog.php');
    exit;
}

$stmt = $pdo->prepare("SELECT p.*, c.name as category_name, c.slug as category_slug FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.slug = ? AND p.status = 'published'");
$stmt->execute([$slug]);
$post = $stmt->fetch();

if ($post) {
    try {
        // Try to increment views
        $stmt = $pdo->prepare("UPDATE posts SET views = views + 1 WHERE id = ?");
        $stmt->execute([$post['id']]);
    } catch (Exception $e) {
        // If it fails, assume column might be missing and try to fix it
        try {
            $pdo->exec("ALTER TABLE posts ADD COLUMN views INT DEFAULT 0");
            // Retry update after fixing schema
            $stmt = $pdo->prepare("UPDATE posts SET views = views + 1 WHERE id = ?");
            $stmt->execute([$post['id']]);
        } catch (Exception $ex) {
            // Still failed? Log it or ignore
        }
    }
}

if (!$post) {
    header('Location: blog.php');
    exit;
}

// Fetch recent posts with categories
$stmt = $pdo->prepare("SELECT p.*, c.name as category_name FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.id != ? AND p.status = 'published' ORDER BY p.created_at DESC LIMIT 3");
$stmt->execute([$post['id']]);
$recent_posts = $stmt->fetchAll();

// SEO Meta Data
$page_title = !empty($post['meta_title']) ? $post['meta_title'] : $post['title'] . ' - PD Hinduja Sindhi Hospital';
$meta_description = !empty($post['meta_description']) ? $post['meta_description'] : substr(strip_tags($post['excerpt'] ?: $post['content']), 0, 160);
$meta_keywords = !empty($post['meta_keywords']) ? $post['meta_keywords'] : '';

// Resolve featured image URL (external vs local)
$featured_img = $post['featured_image'];
if (!empty($featured_img) && strpos($featured_img, 'http') !== 0) {
    $featured_img = ltrim($featured_img, '/');
}
?>
<?php $head_title = $page_title; ?>
<?php $body_class = "custom-cursor" ?>
<?php
$home = true;
?>
<!-- Header Here -->
<?php require_once('parts/header/header-four.php'); ?>

<!-- Reading progress bar -->
<div class="reading-progress" aria-hidden="true">
    <span class="reading-progress__bar" id="progress-bar"></span>
</div>

<!-- Post Hero -->
<section class="post-hero">
    <div class="post-hero__bg">
        <?php if (!empty($featured_img)): ?>
            <img src="<?php echo $featured_img; ?>"
                alt="<?php echo htmlspecialchars($post['image_alt'] ?: $post['title']); ?>">
        <?php endif; ?>
    </div>
    <div class="container">
        <div class="post-hero__content">
            <span class="post-hero__category"><?php echo $post['category_name']; ?></span>
            <h1 class="post-hero__title"><?php echo $post['title']; ?></h1>
            <div class="post-hero__meta">
                <span><i class="icon-time" aria-hidden="true"></i><?php echo date('M d, Y', strtotime($post['created_at'])); ?></span>
                <span><i class="icon-eye" aria-hidden="true"></i><?php echo number_format($post['views'] ?? 0); ?> Views</span>
                <span><i class="icon-user" aria-hidden="true"></i>Admin</span>
            </div>
        </div>
    </div>
</section>

<!-- Content Layout -->
<section class="post-layout">
    <div class="container">
        <div class="row gutter-y-40">

            <!-- Main Content -->
            <div class="col-lg-8">
                <article class="post-article">
                    <!-- Breadcrumbs -->
                    <nav class="post-breadcrumb" aria-label="Breadcrumb">
                        <a href="index.php">Home</a>
                        <span>/</span>
                        <a href="blog.php">Blog</a>
                        <span>/</span>
                        <span class="current"><?php echo $post['title']; ?></span>
                    </nav>

                    <div class="prose">
                        <?php echo $post['content']; ?>
                    </div>

                    <!-- Article Footer -->
                    <div class="post-article__footer">
                        <a href="blog.php" class="post-back-btn">&larr; Back to Blog</a>
                    </div>
                </article>
            </div>

            <!-- Sidebar -->
            <aside class="col-lg-4">
                <div class="post-sidebar">

                    <!-- CTA -->
                    <div class="post-sidebar__box post-sidebar__box--cta">
                        <h3>Need Help?</h3>
                        <p>Have questions about your condition or treatment? Our experts are here to help you. Get in
                            touch with us today.</p>
                        <a href="contact.php" class="post-sidebar__cta-btn">Contact Us</a>
                    </div>

                    <!-- Recent Posts -->
                    <div class="post-sidebar__box" style="margin-top: 30px;">
                        <h3 class="post-sidebar__title">Recent Articles</h3>
                        <?php foreach ($recent_posts as $rp): ?>
                            <?php
                            $rp_img = $rp['featured_image'];
                            if (!empty($rp_img) && strpos($rp_img, 'http') !== 0) {
                                $rp_img = ltrim($rp_img, '/');
                            }
                            ?>
                            <a href="blog/<?php echo $rp['slug']; ?>" class="post-sidebar__item">
                                <div class="post-sidebar__item-thumb">
                                    <?php if (!empty($rp_img)): ?>
                                        <img src="<?php echo $rp_img; ?>" alt="<?php echo htmlspecialchars($rp['title']); ?>">
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <span class="post-sidebar__item-cat"><?php echo $rp['category_name'] ?? 'Healthcare'; ?></span>
                                    <h4 class="post-sidebar__item-title clamp-2"><?php echo $rp['title']; ?></h4>
                                    <p class="post-sidebar__item-date">
                                        <?php echo date('M d, Y', strtotime($rp['created_at'])); ?>
                                    </p>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>

                </div>
            </aside>

        </div>
    </div>
</section>

<script>
    // Reading Progress
    window.addEventListener('scroll', function () {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = height > 0 ? (winScroll / height) * 100 : 0;
        if (scrolled > 100) scrolled = 100;
        var bar = document.getElementById("progress-bar");
        if (bar) bar.style.width = scrolled + "%";
    });
</script>

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>