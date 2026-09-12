<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Contact Us" ?>
<?php $body_class = "custom-cursor" ?>
<?php
$home = true;
?>
<!-- Header Here -->
<?php require_once('parts/header/header-four.php'); ?>

<section class="page-header">
    <div class="container-fluid">
        <div class="page-header__inner">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/contact.png);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <div class="page-header__content">
                    <h2 class="page-header__title">Contact</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span>Contact</span></li>
                    </ul><!-- /.mediox-breadcrumb list-unstyled -->
                </div><!-- /.page-header__content -->
            </div><!-- /.container -->
        </div><!-- /.page-header__inner -->
    </div><!-- /.container-fluid -->
</section><!-- /.page-header -->

<section class="contact-page section-space-top">
    <div class="contact-page__inner section-space">
        <div class="container">
            <h3 class="sec-title__title text-center">Need Assistance? <span>Connect With Us</span></h3>
            <!-- /.sec-title__title -->
            <p class="text-center">Connect with us effortlessly! For inquiries, assistance, or appointment bookings,
                reach out to P.D. Hinduja Sindhi Hospital.</p>
            <div class="row gutter-y-40 align-items-center">
                <div class="col-xl-7 col-lg-6 order-1 order-lg-0 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="contact-page__form">

                        <form action="https://api.web3forms.com/submit" method="POST" class="form-one">

                            <!-- Web3Forms Access Key -->
                            <input type="hidden" name="access_key" value="0df3342a-07a0-4c4b-bc26-a0e3769ed2f6">

                            <!-- Optional Subject -->
                            <input type="hidden" name="subject" value="New Contact Form Submission">

                            <!-- Disable Captcha -->
                            <input type="hidden" name="botcheck" style="display:none;">

                            <div class="form-one__group">

                                <div class="form-one__control form-one__control--full">
                                    <input type="text" name="name" placeholder="Full Name *" required>
                                </div>

                                <div class="form-one__control form-one__control--full">
                                    <input type="email" name="email" placeholder="Email Address (Optional)">
                                </div>

                                <div class="form-one__control form-one__control--full">
                                    <input type="tel" name="number" placeholder="Phone Number *" required>
                                </div>

                                <div class="form-one__control form-one__control--full">
                                    <textarea name="message" placeholder="Write Message (Optional)"></textarea>
                                </div>

                                <div class="form-one__control form-one__control--full">
                                    <button type="submit" class="mediox-btn">
                                        <span>Send Message</span>
                                        <span class="mediox-btn__icon">
                                            <i class="icon-up-right-arrow"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div id="result"></div>

                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 order-0 order-lg-1">
                    <div class="contact-page__info">
                        <div class="sec-title @@extraClassName wow fadeInUp" data-wow-duration="1500ms">
                            <div class="sec-title__top">

                                <img src="assets/images/shapes/sec-title-s-1-1.png" alt="contact us"
                                    class="sec-title__img">


                                <h6 class="sec-title__tagline">General Information</h6><!-- /.sec-title__tagline -->

                            </div><!-- /.sec-title__top -->
                        </div><!-- /.sec-title -->
                        <div class="contact-page__info__inner wow fadeInUp" data-wow-duration="1500ms">
                            <div class="contact-page__info__item">
                                <span class="contact-page__info__icon">
                                    <i class="icon-telephone-2"></i>
                                </span><!-- /.contact-page__info__icon -->
                                <div class="contact-page__info__content">
                                    <!-- /.contact-page__info__title -->
                                    <a href="tel:+9108049030303" class="contact-page__info__link">+91 08049030303</a>


                                    <a href="https://wa.me/919886730303" target="_blank" class="whatsapp-row">
                                        <i class="fab fa-whatsapp"
                                            style="color:#25D366; font-size:45px; margin-right:8px;"></i>

                                        <span class="contact-page__info__link"
                                            style="margin:7px; font-size:28px;color: #e91e63;font-weight: 800;">
                                            +91 98867 30303
                                        </span>
                                    </a>
                                    <!-- /.contact-page__info__link -->
                                </div><!-- /.contact-page__info__content -->
                            </div><!-- /.contact-page__info__item -->
                            <div class="contact-page__info__item">
                                <span class="contact-page__info__icon">
                                    <i class="icon-paper-plane"></i>
                                </span><!-- /.contact-page__info__icon -->
                                <div class="contact-page__info__content">
                                    <!-- /.contact-page__info__title -->
                                    <a href="mailto:hindujasindhihospital@gmail.com"
                                        class="contact-page__info__link">hindujasindhihospital@gmail.com</a>
                                    <!-- /.contact-page__info__link -->
                                </div><!-- /.contact-page__info__content -->
                            </div><!-- /.contact-page__info__item -->
                            <div class="contact-page__info__item">
                                <span class="contact-page__info__icon">
                                    <i class="icon-location"></i>
                                </span><!-- /.contact-page__info__icon -->
                                <div class="contact-page__info__content">
                                    <!-- /.contact-page__info__title -->
                                    <a href="https://www.google.com/maps/place/P+D+Hinduja+Sindhi+Hospital+%7C+Bengaluru,Karnataka/@12.9644866,77.5900629,849m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bae15d8e319913d:0x981f7d1f898b0c96!8m2!3d12.9644866!4d77.5926378!16s%2Fg%2F1tfblrf2?authuser=0&entry=ttu&g_ep=EgoyMDI2MDQxMy4wIKXMDSoASAFQAw%3D%3D"
                                        class="contact-page__info__link">15/2, 12th Cross Rd, Sampangiramnagar,
                                        Bengaluru - 560 027</a><!-- /.contact-page__info__link -->
                                </div><!-- /.contact-page__info__content -->
                            </div><!-- /.contact-page__info__item -->
                        </div><!-- /.contact-page__info__inner -->
                        <!-- <div class="contact-page__client wow fadeInUp" data-wow-duration="1500ms">
                            <div class="contact-page__client__image">
                                <img src="assets/images/resources/Female_1.png" alt="happy client">
                                <img src="assets/images/resources/Female_2.png" alt="happy client">
                                <img src="assets/images/resources/Male_1.png" alt="happy client">
                                <img src="assets/images/resources/Male_2.png" alt="happy client">
                            </div>
                            <p class="contact-page__client__text">1.5k Happy Patients</p>
                        </div> -->
                    </div><!-- /.contact-page__info -->
                </div><!-- /.col-xl-5 col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <img src="assets/images/shapes/contact-shape-1-1.png" alt="shape" class="contact-page__shape">
    </div><!-- /.contact-page__inner section-space -->
</section><!-- /.contact-page section-space-top -->

<section class="contact-map">
    <div class="container-fluid">
        <div class="google-map google-map__contact">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.1150906647954!2d77.59263779999999!3d12.9644866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15d8e319913d%3A0x981f7d1f898b0c96!2sP%20D%20Hinduja%20Sindhi%20Hospital%20%7C%20Bengaluru%2CKarnataka!5e0!3m2!1sen!2sin!4v1776331941675!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- /.google-map -->
    </div><!-- /.container-fluid -->
    <!-- <div class="contact-map__inner">
                <div class="contact-map__item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="contact-map__item__inner">
                        <button type="button" class="contact-map__btn mediox-btn"><span>newyork office</span></button>
                        <div class="contact-map__office">
                            <img src="assets/images/resources/contact-map-1-2.jpg" alt="office" class="contact-map__office__image">
                            <address class="contact-map__office__address">85 Ketch Harbour Road Bensal
                                PA 19020</address>
                            <ul class="contact-map__office__contact list-unstyled">
                                <li>
                                    <span class="contact-map__office__contact__icon">
                                        <i class="icon-paper-plane"></i>
                                    </span>
                                    <a href="mailto:iinfo.company@mail.com">info.company@mail.com</a>
                                </li>
                                <li>
                                    <span class="contact-map__office__contact__icon">
                                        <i class="icon-telephone-2"></i>
                                    </span>
                                    <a href="tel:+9156980036420">+91 5698 0036 420</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="contact-map__item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="contact-map__item__inner">
                        <button type="button" class="contact-map__btn mediox-btn"><span>united kingdom office</span></button>
                        <div class="contact-map__office">
                            <img src="assets/images/resources/contact-map-1-2.jpg" alt="office" class="contact-map__office__image">
                            <address class="contact-map__office__address">85 Ketch Harbour Road Bensal
                                PA 19020</address>
                            <ul class="contact-map__office__contact list-unstyled">
                                <li>
                                    <span class="contact-map__office__contact__icon">
                                        <i class="icon-paper-plane"></i>
                                    </span>
                                    <a href="mailto:iinfo.company@mail.com">info.company@mail.com</a>
                                </li>
                                <li>
                                    <span class="contact-map__office__contact__icon">
                                        <i class="icon-telephone-2"></i>
                                    </span>
                                    <a href="tel:+9156980036420">+91 5698 0036 420</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="contact-map__item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="contact-map__item__inner">
                        <button type="button" class="contact-map__btn mediox-btn"><span>germany office</span></button>
                        <div class="contact-map__office">
                            <img src="assets/images/resources/contact-map-1-2.jpg" alt="office" class="contact-map__office__image">
                            <address class="contact-map__office__address">85 Ketch Harbour Road Bensal
                                PA 19020</address>
                            <ul class="contact-map__office__contact list-unstyled">
                                <li>
                                    <span class="contact-map__office__contact__icon">
                                        <i class="icon-paper-plane"></i>
                                    </span>
                                    <a href="mailto:iinfo.company@mail.com">info.company@mail.com</a>
                                </li>
                                <li>
                                    <span class="contact-map__office__contact__icon">
                                        <i class="icon-telephone-2"></i>
                                    </span>
                                    <a href="tel:+9156980036420">+91 5698 0036 420</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
</section>

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>