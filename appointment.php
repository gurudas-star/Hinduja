<?php require_once 'config/db.php';
require_once 'includes/track_view.php';
require_once 'includes/doctors-list.php'; 
require_once 'includes/specialties-list.php';?>
<?php $head_title = "Book an Appointment" ?>
<?php $body_class = "custom-cursor" ?>
<?php
$home = true;
?>
<!-- Header Here -->
<?php require_once('parts/header/header-four.php'); ?>

<section class="page-header">
    <div class="container-fluid">
        <div class="page-header__inner">
            <div class="page-header__bg"
                style="background-image: url(assets/images/backgrounds/services-breadcrumb.png);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <div class="page-header__content">
                    <h2 class="page-header__title">Book an appointment</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span>Book an Appointment</span></li>
                    </ul><!-- /.mediox-breadcrumb list-unstyled -->
                </div><!-- /.page-header__content -->
            </div><!-- /.container -->
        </div><!-- /.page-header__inner -->
    </div><!-- /.container-fluid -->
</section><!-- /.page-header -->

<section class="appointment-one appointment-one--page section-space-bottom">
    <div class="appointment-one__bg" style="background-image: url(assets/images/backgrounds/appointment-bg.jpg);">
        <div class="appointment-one__bg__inner"
            style="background-image: url(assets/images/shapes/appointment-shape-bg.png);"></div>
        <div class="appointment-one__bg__shape">
            <div class="appointment-one__bg__shape__1">
                <div class="appointment-one__bg__shape__2"></div><!-- /.appointment-one__bg__shape__2 -->
            </div><!-- /.appointment-one__bg__shape__1 -->
        </div><!-- /.appointment-one__bg__shape -->
    </div><!-- /.appointment-one__bg -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="appointment-one__content">
                    <h3 class="appointment-one__title">Book An Appointment</h3><!-- /.appointment-one__title -->
                    <form action="assets/inc/sendemail.php"
                        class="appointment-one__form contact-form-validated form-one wow fadeInUp"
                        data-wow-duration="1500ms">
                        <div class="form-one__group">
                            <div class="form-one__control">
                                <input type="text" name="name" placeholder="Full Name*">
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control">
                                <input type="email" name="email" placeholder="Email Address">
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control">
                                <input type="tel" name="number" placeholder="Phone Number">
                            </div><!-- /.form-one__control -->
                           
                            <div class="form-one__control">
                                <select class="selectpicker" name="service">

                                    <option value="">Select Speciality</option>

                                    <?php foreach ($specialties as $speciality) { ?>

                                        <option value="<?= htmlspecialchars($speciality); ?>">
                                            <?= htmlspecialchars($speciality); ?>
                                        </option>

                                    <?php } ?>

                                </select>
                            </div><!-- /.form-one__control -->
                          
                            <div class="form-one__control form-one__control--full">
                                <textarea name="message" placeholder="Type Here..."></textarea>
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control form-one__control--full">
                                <button type="submit" class="mediox-btn">
                                    <span>book appointment</span>
                                    <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                                </button><!-- /.mediox-btn -->
                            </div><!-- /.form-one__control -->
                        </div><!-- /.form-one__group -->
                    </form><!-- /.form-one -->
                    <div class="result"></div><!-- /.result -->
                </div><!-- /.appointment-one__content -->
            </div><!-- /.col-xl-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <img src="assets/images/shapes/appointment-shape-1-1.png" alt="shape" class="appointment-one__shape-1">
    <img src="assets/images/shapes/appointment-shape-1-2.png" alt="shape" class="appointment-one__shape-2">
    <img src="assets/images/shapes/appointment-shape-1-3.png" alt="shape" class="appointment-one__shape-3">
</section><!-- /.appointment-one section-space-bottom -->

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>