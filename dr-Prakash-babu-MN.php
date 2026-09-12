<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Team Details" ?>
<?php $body_class="custom-cursor"?>
<?php
  $home = true;
?>
<!-- Header Here -->
<?php require_once('parts/header/header-four.php'); ?>

        <section class="page-header">
            <div class="container-fluid">
                <div class="page-header__inner">
                    <div class="page-header__bg"
     style="
        background-image: url('assets/images/backgrounds/doctor-bread.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-color: transparent;
        height: 300px;
        width: 100%;
     ">
</div>
                    <div class="container">
                        <div class="page-header__content">
                            <h2 class="page-header__title">Dr. Prakash Babu M.N. – The Best General Surgeon in Bangalore</h2>
                            <ul class="mediox-breadcrumb list-unstyled">
                                <li>
                                    <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                                    <a href="index.php">Home</a>
                                </li>
                               <li><a href="doctors.php">Doctors</a></li>
                                <li><span>Dr. Prakash Babu M.N.</span></li>
                            </ul><!-- /.mediox-breadcrumb list-unstyled -->
                        </div><!-- /.page-header__content -->
                    </div><!-- /.container -->
                </div><!-- /.page-header__inner -->
            </div><!-- /.container-fluid -->
        </section><!-- /.page-header -->

        <section class="team-details">
            <div class="container">
                <div class="team-details__inner">
                    <div class="team-details__image wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <img src="assets/images/team/prakash-babu-mn.png" alt="Dr. Prakash Babu M.N.">
                        
                        <div class="team-details__identity">
                            <h3 class="team-details__name">Dr. Prakash Babu M.N.</h3><!-- /.team-details__name -->
                            <p class="team-details__designation">MBBS, MN, MS, General Surgery</p>
                            <!-- /.team-details__designation -->
                        </div><!-- /.team-details__identity -->
                    </div><!-- /.team-details__image -->
                    <div class="team-details__about wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="team-details__about__inner">
                            <h3 class="team-details__about__title">about me</h3><!-- /.team-details__about__title -->
                            <p class="team-details__about__description">If you’re searching for the best general surgeon in Bangalore, look no further than Dr. Prakash Babu M.N. With over 20 years of experience, Dr. Prakash specializes in:
                                <ul>
                                    <li>
                                        Laparoscopic gallbladder surgery (cholecystectomy)
<li>Gastrointestinal surgeries and hernia repairs</li>
<li>Minimally invasive procedures for faster recovery</li>
                                    </li>
                                </ul>
                            </p><!-- /.team-details__about__description -->
                            <p>He practices at P.D. Hinduja Sindhi Hospital, one of the best hospitals for general surgery in Bangalore. His vast experience makes him one of the best general surgeons in the city.</p>
                            <p>Dr. Prakash Babu M.N. specializes in the treatment of gallbladder issues, including gallstones and gallbladder removal surgery (cholecystectomy). Many patients who suffer from persistent abdominal pain, bloating, or nausea often find relief with laparoscopic gallbladder surgery, a minimally invasive procedure that results in less pain, shorter recovery time, and faster healing.</p>
                        </div><!-- /.team-details__about__inner -->
                        <ul class="team-details__contact list-unstyled">
                            <li>
                                <span class="team-details__contact__icon">
                                    <i class="icon-location"></i>
                                </span>
                                <div class="team-details__contact__content">
                                    <h3 class="team-details__contact__title">Address</h3>
                                    <a href="https://www.google.com/maps/place/P+D+Hinduja+Sindhi+Hospital+%7C+Bengaluru,Karnataka/@12.9644866,77.5900629,849m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bae15d8e319913d:0x981f7d1f898b0c96!8m2!3d12.9644866!4d77.5926378!16s%2Fg%2F1tfblrf2?authuser=0&entry=ttu&g_ep=EgoyMDI2MDQxMy4wIKXMDSoASAFQAw%3D%3D" class="team-details__contact__link">P.D. Hinduja Sindhi Hospital<br>Bangalore, India</a>
                                </div>
                            </li><!-- /.item -->
                            <li>
                                <span class="team-details__contact__icon">
                                    <i class="icon-telephone"></i>
                                </span>
                                <div class="team-details__contact__content">
                                    <h3 class="team-details__contact__title">Quick Contact</h3>
                                    <a href="tel:+080 4903 0303" class="team-details__contact__link">080 4903 0303</a>
                                </div>
                            </li><!-- /.item -->
                            <li>
                                <span class="team-details__contact__icon">
                                    <i class="icon-email"></i>
                                </span>
                                <div class="team-details__contact__content">
                                    <h3 class="team-details__contact__title">support email</h3>
                                    <a href="mailto:hindujasindhihospital@gmail.com" class="team-details__contact__link">hindujasindhihospital@gmail.com</a>
                                </div>
                            </li><!-- /.item -->
                        </ul><!-- /.team-details__contact -->
                    </div><!-- /.team-details__about -->
                </div><!-- /.team-details__inner -->
            </div><!-- /.container -->
        </section><!-- /.team-details section-space-top -->

        <section class="team-skills-one">
            <div class="container">
                <div class="team-skills-one__info">
                    <div class="team-skills-one__content">
                        <!-- <h3 class="team-skills-one__title">Why Choose Dr. Prakash Babu M.N.?</h3>/.team-skills-one__title -->
                        <div class="team-skills-one__description wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                            <p class="team-skills-one__text">Having completed his MS in General Surgery from Bangalore Medical College, Dr. Prakash has vast experience treating a wide variety of surgical conditions. Whether you’re dealing with hernia, abdominal trauma, breast surgery, or need a laparoscopic procedure, Dr. Prakash offers personalized care to ensure the best outcomes for each patient.</p><!-- /.team-skills-one__text -->
                            <p class="team-skills-one__text">At P.D. Hinduja Sindhi Hospital, Dr. Prakash’s patients receive complete care from diagnosis through recovery. He uses latest techniques to provide effective treatments with the least amount of discomfort. His focus is not only on surgery but also on the overall well-being of his patients, ensuring a smooth recovery process.</p><!-- /.team-skills-one__text -->
                            <p class="team-skills-one__text">Dr. Prakash Babu M.N. is the best general surgeon in Bangalore. Book your consultation at P.D. Hinduja Sindhi Hospital today for expert treatment in general surgery, gallbladder surgery, and more.</p><!-- /.team-skills-one__text -->
                           
                        </div><!-- /.team-skills-one__description -->
                    </div><!-- /.team-skills-one__content -->
                </div><!-- /.team-skills-one__info -->
                
                <!-- FAQ Section -->
                <div class="team-skills-one__faq">
    <div class="faq-design__title">
        <h3>Frequently Asked Questions</h3>
        
    </div>
    
    <div class="faq-grid" id="faqGrid">
        <!-- FAQ 1 -->
        <div class="faq-card">
            <div class="faq-card__header">
                <div class="faq-card__icon">
                    <i class="fas fa-microscope"></i>
                </div>
                <h4 class="faq-card__question">What is laparoscopic gallbladder surgery?</h4>
                <div class="faq-card__toggle">
                    <i class="fas fa-plus"></i>
                </div>
            </div>
            <div class="faq-card__content">
                <p class="faq-card__answer">Laparoscopic gallbladder surgery is a minimally invasive procedure where small incisions  are made to remove the gallbladder. It results in less pain, faster recovery, and minimal scarring.</p>
            </div>
        </div>
        
        <!-- FAQ 2 -->
        <div class="faq-card">
            <div class="faq-card__header">
                <div class="faq-card__icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h4 class="faq-card__question">How long does it take to recover after gallbladder surgery?</h4>
                <div class="faq-card__toggle">
                    <i class="fas fa-plus"></i>
                </div>
            </div>
            <div class="faq-card__content">
                <p class="faq-card__answer">Most patients recover in 2-4 weeks, with minimal pain due to the laparoscopic approach, allowing you to return to normal activities quickly.</p>
            </div>
        </div>
        
        <!-- FAQ 3 -->
        <div class="faq-card">
            <div class="faq-card__header">
                <div class="faq-card__icon">
                    <i class="fas fa-stethoscope"></i>
                </div>
                <h4 class="faq-card__question">What are the symptoms of gallstones?</h4>
                <div class="faq-card__toggle">
                    <i class="fas fa-plus"></i>
                </div>
            </div>
            <div class="faq-card__content">
                <p class="faq-card__answer">Symptoms include sharp abdominal pain, nausea, bloating, and fever, especially after eating fatty meals.</p>
            </div>
        </div>
        
        <!-- FAQ 4 -->
        <div class="faq-card">
            <div class="faq-card__header">
                <div class="faq-card__icon">
                    <i class="fas fa-user-md"></i>
                </div>
                <h4 class="faq-card__question">Why choose Dr. Prakash Babu M.N. for gallbladder surgery?</h4>
                <div class="faq-card__toggle">
                    <i class="fas fa-plus"></i>
                </div>
            </div>
            <div class="faq-card__content">
                <p class="faq-card__answer">Dr. Prakash Babu has over 20 years of experience in laparoscopic surgery, offering quick recovery and safe, effective treatment for gallstones.</p>
            </div>
        </div>
    </div>
</div>

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<script>
document.addEventListener('DOMContentLoaded', function () {

    const faqGrid = document.getElementById('faqGrid');

    if (!faqGrid) return;

    faqGrid.addEventListener('click', function (event) {

        const header = event.target.closest('.faq-card__header');
        if (!header) return;

        const card = header.closest('.faq-card');
        if (!card) return;

        // If already open → close it
        if (card.classList.contains('active')) {
            card.classList.remove('active');
            return;
        }

        // Close all cards
        document.querySelectorAll('.faq-card').forEach(c => {
            c.classList.remove('active');
        });

        // Open clicked card
        card.classList.add('active');
    });

});
</script>
                
            </div><!-- /.container -->
        </section><!-- /.team-skills-one -->

        <section class="appointment-one section-space-bottom">
            <div class="appointment-one__bg mediox-jarallax" data-jarallax data-speed="0.3s" style="background-image: url(assets/images/backgrounds/app-bg.png);">
                <div class="appointment-one__bg__inner" style="background-image: url(assets/images/shapes/appointment-shape-bg.png);"></div>
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
                            <form action="assets/inc/sendemail.php" class="appointment-one__form contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms">
                                <div class="form-one__group">
                                    <div class="form-one__control">
                                        <input type="text" name="name" placeholder="Full Name*">
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control">
                                        <input type="email" name="email" placeholder="Email Address*">
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control">
                                        <input type="tel" name="number" placeholder="Phone Number">
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control appointment-one__form__date">
                                        <input type="text" name="date" placeholder="Select Date*" id="datepicker" class="mediox-datepicker">
                                        <span class="appointment-one__form__date__arrow">
                                            <i class="icon-caret-down"></i>
                                        </span><!-- /.appointment-one__form__date__arrow -->
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control">
                                        <select class="selectpicker" aria-label="Type of Service">
                                            <option selected>Type of Service</option>
                                            <option value="1">immediate care</option>
                                            <option value="2">dental care</option>
                                            <option value="3">neurology care</option>
                                            <option value="4">gynaecologists</option>
                                            <option value="5">orthopaedics</option>
                                            <option value="6">cardiology</option>
                                        </select>
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control">
                                        <select class="selectpicker" aria-label="Name a Doctor">
                                            <option selected>Name a Doctor</option>
                                            <option value="1">Dr. Anita M. Dias</option>
                                            <option value="2">Dr. Abhishek N.</option>
                                            <option value="3">Dr. Prakash Babu M.N.</option>
                                            <option value="4">Dr. Preetham Raj</option>
                                            <option value="5">Dr. N. Praveenkumar</option>
                                            <option value="6">Dr. Ambuja B.N</option>
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