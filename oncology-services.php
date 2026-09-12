
<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Oncology Services" ?>
<?php $body_class = "custom-cursor" ?>
<?php
$home = true;
?>
<!-- Header Here -->
<?php require_once('parts/header/header-four.php'); ?>

<section class="page-header">
    <div class="container-fluid">
        <div class="page-header__inner">
            <div class="page-header__bg" style="background-image: url(assets/images/department/Breadcrumb1.png);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <div class="page-header__content">
                    <h2 class="page-header__title">Oncology Services</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span><a href="specialties.php">Specialties</a></span></li>
                        <li><span>Oncology Services</span></li>
                    </ul><!-- /.mediox-breadcrumb list-unstyled -->
                </div><!-- /.page-header__content -->
            </div><!-- /.container -->
        </div><!-- /.page-header__inner -->
    </div><!-- /.container-fluid -->
</section><!-- /.page-header -->

<section class="service-details section-space">
    <div class="container">
        <div class="row gutter-y-50">
            <div class="col-md-12 col-lg-4">
                <div class="service-sidebar">
                    <div class="service-sidebar__info service-sidebar__single">
                        <ul class="list-unstyled service-sidebar__nav wow fadeInLeft" data-wow-duration="1500ms">
                                    <li><a href="internal-medicine.php">Internal Medicine</a></li>
                                    <li><a href="general-surgery.php">General Surgery</a></li>
                                    <li><a href="obstetrics-gynaecology.php">Obstetrics & Gynaecology</a></li>
                                    <li><a href="family-medicine.php">Family Medicine</a></li>
                                    <li> <a href="general-pediatrics.php">General Pediatric</a></li>
                                    <li><a href="orthopaedics.php">Orthopedic</a></li>
                                    <li><a href="ent.php">Ear, Nose & Throat (ENT)</a></li>
                                    <li><a href="urology.php">Urology</a></li>
                                    <li><a href="dental-surgery.php">Dental Surgery</a></li>
                                    <li><a href="emergency-services.php">Emergency Services</a></li>
                                    <li><a href="medical-oncology-hematology.php">Medical Oncology & Hematology</a></li>
                                    <li><a href="neurology.php">Neurology</a></li>
                                    <li><a href="medical-gastroenterology.php">Medical Gastroenterology</a></li>
                                    <li><a href="neuro-surgery.php">Neuro Surgery</a></li>
                                    <li><a href="plastic-surgery.php">Plastic Surgery</a></li>
                                    <li><a href="oncology-services.php">Oncology Services</a></li>
                                    <li><a href="cardiology.php">Cardiology</a></li>
                                    <li><a href="pulmonology.php">Pulmonology</a></li>
                                    <li><a href="nephrology.php">Nephrology</a></li>
                                    <li><a href="intensive-care-unit.php">Level 3 Intensive Care Unit</a></li>
                                </ul>
                        <div class="service-sidebar__contact wow fadeInLeft" data-wow-duration="1500ms"
                            data-wow-delay="100ms"
                            style="background-image: url('assets/images/services/doctor-call-image.png');">
                            <div class="service-sidebar__contact__bg">
                                <div class="service-sidebar__contact__bg__inner"
                                    style="background-image: url('assets/images/shapes/service-sidebar-contact-bg-2.png');">
                                </div><!-- /.service-sidebar__contact__bg__inner -->
                            </div><!-- /.service-sidebar__contact__bg -->
                            <div class="service-sidebar__contact__inner">
                                <div class="service-sidebar__contact__icon">
                                    <i class="icon-telephone"></i>
                                </div><!-- /.service-sidebar__contact__icon -->
                                <div class="service-sidebar__contact__content">
                                    <h4 class="service-sidebar__contact__time">MON-SAT 8:00AM-9:00PM</h4>
                                    <!-- /.service-sidebar__contact__time -->
                                    <h4 class="service-sidebar__contact__number">
                                        <a href="tel:+9108049030303">+91 080 4903 0303</a>
                                    </h4><!-- /.service-sidebar__contact__number -->
                                </div><!-- /.service-sidebar__contact__content -->
                            </div><!-- /.service-sidebar__contact__inner -->
                        </div><!-- /.service-sidebar__contact -->
                    </div><!-- /.service-sidebar__info service-sidebar__single -->
                </div><!-- /.sidebar -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <div class="col-md-12 col-lg-8">
                <div class="service-details__content">
                    <div class="service-details__inner">
                        <div class="service-details__thumbnail wow fadeInUp" data-wow-duration="1500ms"
                            data-wow-delay="00ms">
                            <img src="assets/images/department/Oncology_service.png" alt="cardiology">
                        </div><!-- /.service-details__thumbnail -->
                        <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms"
                            data-wow-delay="00ms">
                            <!-- <h1 class="service-details__title">Internal Medicine at P.D. Hinduja Sindhi Hospital, Bengaluru</h2> -->
                            <p class="service-details__text">At P.D. Hinduja Sindhi Hospital in Bangalore, India, we recognize the significant challenges that cancer presents to patients and their families. While cancer is a serious condition, early detection and appropriate treatment can make it manageable. Our Surgical Oncology Department is dedicated to providing advanced treatment options for various forms of cancer, with a focus on compassionate, competent, and affordable care.</p><!-- /.service-details__text -->
                        </div><!-- /.service-details__content__box -->
                    </div><!-- /.service-details__inner -->
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Understanding Surgical Oncology</b></h2>
                        <!-- /.service-details__sub-title -->
<p>Surgical Oncology is a specialized branch of medicine that focuses on the surgical treatment of cancer. This includes the removal of tumors, assessment of cancer spread, and procedures aimed at improving the patient’s quality of life. At P.D. Hinduja Sindhi Hospital, our Surgical Oncology Department combines cutting-edge surgical techniques with a multidisciplinary approach to deliver cancer care tailored to each patient’s unique needs.</p>                    </div>
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Why Choose P.D. Hinduja Sindhi Hospital?</b></h2>
                        <!-- /.service-details__sub-title -->
                         <ul>
    <li><b>Compassionate Care:</b> We emphasize the emotional and psychological well-being of our patients, offering compassionate support throughout their cancer treatment journey.</li>
    <li><b>Advanced Treatments:</b> Our commitment to medical excellence ensures that we provide the latest treatments and techniques, offering our patients the best possible care.</li>
    <li><b>Collaborative Approach:</b> Our multidisciplinary team works together to provide coordinated care, addressing all aspects of a patient’s health for a seamless treatment experience.</li>
    <li><b>Holistic Support:</b> In addition to medical treatment, we offer counseling, nutritional guidance, and rehabilitation services to help patients navigate their cancer journey with strength and confidence.</li>
    <li><b>Patient-Focused Environment:</b> Our hospital is designed to create a supportive atmosphere, helping patients feel comfortable and cared for during their treatment.</li>
</ul>
                        
                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Our Services</b></h2>
                        
                      <ul>
    <li><b>Patient-Centered Care:</b> We focus on enhancing the overall well-being of our patients. Each patient is evaluated by a team of specialists who develop personalized treatment plans tailored to their specific needs and circumstances.</li>

    <li><b>Expert Team:</b> Our team includes leading oncologists, cancer surgeons, and specialists dedicated to fighting cancer with the latest medical advancements. They collaborate closely to ensure the best possible outcomes for each patient.</li>

    <li><b>State-of-the-Art Facilities:</b> Our hospital is equipped with the latest technology, ensuring that patients receive the most advanced and effective cancer treatments available.</li>

    <li><b>Multi-Modality Approach:</b> We recognize that effective cancer treatment often involves a combination of surgery, radiation therapy, and chemotherapy. We tailor our treatment plans to meet the unique needs of each patient, providing an individualized approach to care.</li>

    <li><b>Best-in-Class Services:</b> From screening and diagnosis to treatment, rehabilitation, and aftercare, we offer a full spectrum of oncology services. Our holistic approach ensures support at every stage of the cancer journey.</li>
</ul>

<p>At P.D. Hinduja Sindhi Hospital, our Surgical Oncology Department is dedicated to providing expert, compassionate care to cancer patients. With advanced treatments, a skilled medical team, and a supportive environment, we are committed to helping our patients fight cancer and improve their quality of life while upholding our hospital’s tradition of care, competence, and compassion.</p>

                    </div>

                    <!-- FAQ -->

                    <div class="service-details__faq">
                        <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3>
                        <!-- /.service-details__sub-title -->
                        <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                            <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <div class="accordion-title">
                                    <h4>
What types of cancer do you treat at the Surgical Oncology Department?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
<p>We treat a wide range of cancers, including breast, colorectal, lung, prostate, and head and neck cancers, among others. Our multidisciplinary team is equipped to handle complex cases with a personalized approach.

</p>                                </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                <div class="accordion-title">
                                    <h4>
How do you determine the best treatment plan for a patient?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
<p>Each patient is evaluated by our team of specialists, who consider factors such as the type, stage, and location of the cancer, as well as the patient’s overall health. This collaborative approach ensures a personalized and effective treatment plan.
</p>                                </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
What support services are available for cancer patients?                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
<p>We offer a range of support services, including counseling, nutritional guidance, and rehabilitation, to help patients manage the emotional, physical, and practical challenges of cancer treatment.

</p>                                </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
How do you ensure the safety and effectiveness of the treatments provided?                                      <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
<p>Our hospital is equipped with state-of-the-art technology and follows strict safety protocols. Our experienced team continuously monitors and adjusts treatment plans to ensure the best possible outcomes.

</p>                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
What is the role of surgery in cancer treatment?                                     <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
<p>Surgery is often a key component of cancer treatment, used to remove tumors, reduce symptoms, or assess the spread of cancer. It is typically part of a broader treatment plan that may include chemotherapy and radiation therapy.

</p>                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                           
                    </div><!-- /.service-details__faq -->
                </div><!-- /.service-details__content -->

               

<div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
    data-wow-delay="00ms" style="margin-top: 30px;">

    <h2 class="service-details__sub-title"><b>OPD Hours:</b></h2>

    <table class="opd-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Qualification</th>
                <th>Days</th>
                <th>Time</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Dr. Varun Kumar</td>
                <td>DMRT., DNB</td>
                <td>Mon – Sat</td>
                <td>5 P.M – 7 P.M</td>
                <td>
                                                <a href="javascript:void(0)" 
                                                class="opd-btn"
                                                onclick="openAppointment('Dr. Varun Kumar','DMRT., DNB')">
                                                Book an Appointment
                                                </a>
                                            </td>
            </tr>
        </tbody>
    </table>

</div>

            </div><!-- /.col-md-12 col-lg-8 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-details section-space -->

<!-- MODAL -->

<?php require_once('parts/shared/appointment-modal.php'); ?>


<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>