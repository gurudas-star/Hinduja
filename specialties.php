<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Department" ?>
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
                    <h2 class="page-header__title">Specialties</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span>Specialties</span></li>
                    </ul><!-- /.mediox-breadcrumb list-unstyled -->
                </div><!-- /.page-header__content -->
            </div><!-- /.container -->
        </div><!-- /.page-header__inner -->
    </div><!-- /.container-fluid -->
</section><!-- /.page-header -->

<section class="services-page services-page--two section-space">
    <div class="container">
        <div class="row gutter-y-30">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/internal-medicine.png" alt="immediate care">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <!-- <i class="icon-medicine"></i> -->
                        <i class="fas fa-stethoscope"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <!-- <p class="service-card__total-doctors">30+ doctors</p>/.service-card__total-doctors -->
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="internal-medicine.php">Internal Medicine</a></h3>
                            <!-- /.service-card__title -->
                            <a href="internal-medicine.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/general-surgery.png" alt="Dental Care">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fas fa-cut"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="general-surgery.php">General Surgery</a></h3>
                            <!-- /.service-card__title -->
                            <a href="general-surgery.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/gynecology_outside.png" alt="gynaecology">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fas fa-baby"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <!-- /.service-card__total-doctors -->
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="obstetrics-gynaecology.php">Obstetrics &
                                    Gynaecology</a></h3><!-- /.service-card__title -->
                            <a href="obstetrics-gynaecology.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/family-medicine.png" alt="gynaecologists">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fas fa-users"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <!-- /.service-card__total-doctors -->
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="family-medicine.php">Family Medicine</a></h3>
                            <!-- /.service-card__title -->
                            <a href="family-medicine.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/Pediatric_dept.png" alt="Pediatric">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fas fa-child"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">

                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="general-pediatrics.php">General Pediatric</a></h3>
                            <!-- /.service-card__title -->
                            <a href="general-pediatrics.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/Orthopedic_dept.png" alt="cardiology">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fas fa-bone"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <!-- /.service-card__total-doctors -->
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="orthopaedics.php">Orthopedic</a></h3>
                            <!-- /.service-card__title -->
                            <a href="orthopaedics.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/ent.png" alt="gynaecologists">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fas fa-ear-listen"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <!-- /.service-card__total-doctors -->
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="ent.php">Ear, Nose & Throat (ENT)</a></h3>
                            <!-- /.service-card__title -->
                            <a href="ent.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/Urology.png" alt="orthopaedics">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fas fa-tint"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="urology.php">Urology</a></h3>
                            <!-- /.service-card__title -->
                            <a href="urology.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/dental-care.png" alt="cardiology">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">

                        <i class="fas fa-tooth"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">

                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="dental-surgery.php">Dental Surgery</a></h3>
                            <!-- /.service-card__title -->
                            <a href="dental-surgery.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/emergency_dept.png" alt="Emergency Services">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fas fa-ambulance"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <!-- /.service-card__total-doctors -->
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="emergency-services.php">Emergency Services</a></h3>
                            <!-- /.service-card__title -->
                            <a href="emergency-services.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
        </div><!-- /.row --> <br /><br /><br />

        <h2>Super Specialities</h2>
        <p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        </p>
        <div class="row gutter-y-30">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/medical-oncology-hematology.png" alt="immediate care">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fas fa-dna"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <!-- <p class="service-card__total-doctors">30+ doctors</p>/.service-card__total-doctors -->
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="medical-oncology-hematology.php">Medical Oncology &
                                    Hematology</a></h3><!-- /.service-card__title -->
                            <a href="medical-oncology-hematology.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/neurology.png" alt="Dental Care">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fas fa-brain"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="neurology.php">Neurology</a></h3>
                            <!-- /.service-card__title -->
                            <a href="neurology.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/medical-gastroenterology-dept.png" alt="Neurology Care">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fa-solid fa-user-doctor"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <!-- /.service-card__total-doctors -->
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="medical-gastroenterology.php">Medical
                                    Gastroenterology</a></h3><!-- /.service-card__title -->
                            <a href="medical-gastroenterology.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/neurosurgery-dept.png" alt="gynaecologists">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fa-solid fa-brain"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <!-- /.service-card__total-doctors -->
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="neuro-surgery.php">Neuro Surgery</a></h3>
                            <!-- /.service-card__title -->
                            <a href="neuro-surgery.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/plasticsurgery.png" alt="orthopaedics">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fa-solid fa-scissors"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">

                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="plastic-surgery.php">Plastic Surgery</a></h3>
                            <!-- /.service-card__title -->
                            <a href="plastic-surgery.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/oncology_outside.png" alt="oncology">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fa-solid fa-ribbon"></i> </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="oncology-services.php">Oncology Services</a></h3>
                            <!-- /.service-card__title -->
                            <a href="oncology-services.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/cardiology-new.png" alt="gynaecologists">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <!-- /.service-card__total-doctors -->
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="cardiology.php">Cardiology</a></h3>
                            <!-- /.service-card__title -->
                            <a href="cardiology.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/pulmonology.png" alt="orthopaedics">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fa-solid fa-lungs"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">

                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="pulmonology.php">Pulmonology</a></h3>
                            <!-- /.service-card__title -->
                            <a href="pulmonology.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/nephrology_out.png" alt="nephrology">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fa-solid fa-user-doctor"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="nephrology.php">Nephrology</a></h3>
                            <!-- /.service-card__title -->
                            <a href="nephrology.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/Level_3_ICU_outside.png" alt="icu">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fa-solid fa-hospital"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <!-- /.service-card__total-doctors -->
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="intensive-care-unit.php">Level 3 Intensive Care
                                    Unit</a></h3><!-- /.service-card__title -->
                            <a href="intensive-care-unit.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/ambulance_dept.png" alt="ambulance">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fa-solid fa-truck-medical"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <!-- /.service-card__total-doctors -->
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="emergency-ambulance-services.php">Emergency
                                    Ambulance Services
                                </a></h3><!-- /.service-card__title -->
                            <a href="emergency-ambulance-services.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/CT_scan_out.png" alt="ct scan">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fa-solid fa-x-ray"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <!-- /.service-card__total-doctors -->
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="ct-scan.php">Ct Scan
                                </a></h3><!-- /.service-card__title -->
                            <a href="ct-scan.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/emergency_room_dept.png" alt="emergency_room">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fa-solid fa-house-medical"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <!-- /.service-card__total-doctors -->
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="emergency-room.php">Emergency Room
                                </a></h3><!-- /.service-card__title -->
                            <a href="emergency-room.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/laboratory.png" alt="laboratory">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fa-solid fa-flask-vial"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <!-- /.service-card__total-doctors -->
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="laboratory-services.php">Laboratory Services
                                </a></h3><!-- /.service-card__title -->
                            <a href="laboratory-services.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/doppler.png" alt="doppler">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fa-solid fa-heart-circle-check"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <!-- /.service-card__total-doctors -->
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="doppler.php">Doppler
                                </a></h3><!-- /.service-card__title -->
                            <a href="doppler.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/echocardiography_dept.png" alt="gynaecologists">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fa-solid fa-heartbeat"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <!-- /.service-card__total-doctors -->
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="echocardiography.php">Echocardiography Services
                                </a></h3><!-- /.service-card__title -->
                            <a href="echocardiography.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/physiotherapy.png" alt="physiotherapy">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fa-solid fa-person-walking"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <!-- /.service-card__total-doctors -->
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="physiotherapy.php">Physiotherapy
                                </a></h3><!-- /.service-card__title -->
                            <a href="physiotherapy.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/x_ray_outside.png" alt="X-Ray">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fa-solid fa-x-ray"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <!-- /.service-card__total-doctors -->
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="x-ray.php">X-Ray
                                </a></h3><!-- /.service-card__title -->
                            <a href="x-ray.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/Ultrasound_dept.png" alt="Ultrasound">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fa-solid fa-wave-square"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <!-- /.service-card__total-doctors -->
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="ultrasound.php">Ultrasound
                                </a></h3><!-- /.service-card__title -->
                            <a href="ultrasound.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="service-card">
                    <div class="service-card__image">
                        <img src="assets/images/department/pharmacy_outside.png" alt="Pharmacy">
                    </div><!-- /.service-card__image -->
                    <span class="service-card__icon">
                        <i class="fa-solid fa-pills"></i>
                    </span><!-- /.service-card__icon -->
                    <div class="service-card__content">
                        <!-- /.service-card__total-doctors -->
                        <div class="service-card__content__inner">
                            <h3 class="service-card__title"><a href="pharmacy.php">Pharmacy
                                </a></h3><!-- /.service-card__title -->
                            <a href="pharmacy.php" class="service-card__link">
                                <i class="icon-up-right-arrow"></i>
                            </a><!-- /.service-card__link -->
                        </div><!-- /.service-card__content__inner -->
                    </div><!-- /.service-card__content -->
                </div><!-- /.service-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
        </div>
    </div><!-- /.container -->
</section>

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>