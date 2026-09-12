<?php require_once 'config/db.php';
require_once 'includes/track_view.php';

$search = $_GET['search'] ?? '';
$category = $_GET['category'] ?? '';

$sql = "SELECT p.*, c.name as category_name, c.slug as category_slug FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.status = 'published'";
$params = [];

if ($search) {
    $sql .= " AND (p.title LIKE ? OR p.content LIKE ?)";
    $params[] = "%$search%";
    $params[] = "%$search%";
}

if ($category) {
    $sql .= " AND c.slug = ?";
    $params[] = $category;
}

$sql .= " ORDER BY p.created_at DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$posts = $stmt->fetchAll();

$categories = $pdo->query("SELECT * FROM categories")->fetchAll();
?>
<?php $head_title = "Blog" ?>
<?php $body_class = "custom-cursor" ?>
<?php
$home = true;
?>
<!-- Header Here -->
<?php require_once('parts/header/header-four.php'); ?>

<!-- Page Header (same as rest of the site) -->
<section class="page-header">
    <div class="container-fluid">
        <div class="page-header__inner">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/blog-bg.png);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <div class="page-header__content">
                    <h2 class="page-header__title">Health & Wellness Blog</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span>Blog</span></li>
                    </ul><!-- /.mediox-breadcrumb list-unstyled -->
                </div><!-- /.page-header__content -->
            </div><!-- /.container -->
        </div><!-- /.page-header__inner -->
    </div><!-- /.container-fluid -->
</section><!-- /.page-header -->

<!-- Search & Filter Toolbar -->
<section class="blog-toolbar">
    <div class="container">
        <form method="GET" action="blog.php" class="blog-toolbar__form" role="search">
            <input type="text" name="search" placeholder="Search medical articles..."
                value="<?php echo htmlspecialchars($search); ?>" aria-label="Search articles">
            <select name="category" aria-label="Filter by category">
                <option value="">All Categories</option>
                <?php foreach ($categories as $cat): ?>
                    <option value="<?php echo $cat['slug']; ?>" <?php echo $category === $cat['slug'] ? 'selected' : ''; ?>>
                        <?php echo $cat['name']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <button type="submit">Search</button>
        </form>
    </div>
</section>

<!-- Blog Grid -->
<section class="blog-grid">
    <div class="container">
        <?php if (empty($posts)): ?>
            <!-- No Posts Message -->
            <div class="blog-empty">
                <div class="blog-empty__icon"><i class="icon-search"></i></div>
                <h3 class="blog-empty__title">No Articles Found</h3>
                <p class="blog-empty__text">We couldn't find any blog posts matching your criteria. Try adjusting your
                    search or category filter.</p>
                <a href="blog.php" class="blog-empty__btn">Clear All Filters</a>
            </div>
        <?php else: ?>
            <div class="row gutter-y-30">
                <?php foreach ($posts as $post): ?>
                    <div class="col-md-6 col-lg-4">
                        <article class="blog-card">
                            <a href="blog/<?php echo $post['slug']; ?>" class="blog-card__thumb">
                                <img src="<?php echo $post['featured_image']; ?>"
                                    alt="<?php echo htmlspecialchars($post['image_alt'] ?: $post['title']); ?>">
                                <span class="blog-card__category"><?php echo $post['category_name']; ?></span>
                            </a>
                            <div class="blog-card__body">
                                <div class="blog-card__meta">
                                    <time datetime="<?php echo date('Y-m-d', strtotime($post['created_at'])); ?>">
                                        <?php echo date('M d, Y', strtotime($post['created_at'])); ?>
                                    </time>
                                </div>
                                <h3 class="blog-card__title clamp-2">
                                    <a href="blog/<?php echo $post['slug']; ?>"><?php echo $post['title']; ?></a>
                                </h3>
                                <p class="blog-card__excerpt clamp-3">
                                    <?php
                                    $excerptText = isset($post['excerpt']) ? $post['excerpt'] : '';
                                    $contentText = isset($post['content']) ? $post['content'] : '';
                                    echo $excerptText ?: substr(strip_tags($contentText), 0, 150) . '...';
                                    ?>
                                </p>
                                <a href="blog/<?php echo $post['slug']; ?>" class="blog-card__link">
                                    Read Full Article
                                    <i class="icon-up-right-arrow" aria-hidden="true"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>