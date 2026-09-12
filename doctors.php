<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Our Team || Mediox || Medical & Healthcare PHP Template" ?>
<?php $body_class = "custom-cursor" ?>
<?php
$home = true;
?>

<!-- Header Here -->
<?php require_once('parts/header/header-four.php'); ?>

<section class="page-header">
    <div class="container-fluid">
        <div class="page-header__inner">
            <div class="page-header__bg" style="
                    background-image: url('assets/images/backgrounds/doctor-bread.png');
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-color: transparent;
                    opacity: 1;
                 ">
            </div>
            <div class="container">
                <div class="page-header__content">
                    <h2 class="page-header__title">Our Doctors</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span>Doctors</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team-page section-space" style="background: #fcfdfe;">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-7 mx-auto">
                <div class="doctor-search-box">
                    <input type="text" id="doctorSearch" placeholder="Search doctor by name, specialty, or condition...">
                </div>
            </div>
        </div>

        <!-- 1-Internal Medicine -->
        <div class="department-section">
            <h2 class="department-title">Internal Medicine</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Anita Dias -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr anita dias anita dias internal medicine physician general physician consultant medicine mbbs md internal medicine diabetes fever hypertension thyroid infection adult medicine bengaluru bangalore">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Anita-Dias1.png" alt="Dr. Anita Dias">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name"><a href="dr-anita-dias.php">Dr. Anita Dias</a></h3>
                            <p class="doctor-card__degree">MBBS, M.D, Internal Medicine</p>
                            <div class="doctor-card__actions">
                                <a href="dr-anita-dias.php" class="doctor-card__btn-profile">Read More <i class="fa fa-arrow-right"></i></a>
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Anita Dias', 'MBBS, M.D, Internal Medicine')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Abhishek N. -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr abhishek n abhishek internal medicine physician general physician mbbs md internal medicine">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Abhishek-N.png" alt="Dr. Abhishek N.">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Abhishek N.</h3>
                            <p class="doctor-card__degree">MBBS, MD, Internal Medicine</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Abhishek N.', 'MBBS, MD')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2-General Surgery -->
        <div class="department-section">
            <h2 class="department-title">General Surgery</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Prakash Babu M.N. -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr prakash babu mn prakash babu m n general surgery surgeon general surgeon surgery mbbs ms mn">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Prakash-Babu-MN.png" alt="Dr. Prakash Babu M.N.">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name"><a href="dr-Prakash-babu-MN.php">Dr. Prakash Babu M.N.</a></h3>
                            <p class="doctor-card__degree">MBBS, MN, MS, General Surgery</p>
                            <div class="doctor-card__actions">
                                <a href="dr-Prakash-babu-MN.php" class="doctor-card__btn-profile">Read More <i class="fa fa-arrow-right"></i></a>
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Prakash Babu M.N.', 'MBBS, MN, MS, General Surgery')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Preetham Raj -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr preetham raj preetham raj general surgery surgeon general surgeon laparoscopic surgery colorectal surgery mbbs ms dipmas fmas fiages fals colorectal facrsi fais">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Preetham-Raj-img.png" alt="Dr. Preetham Raj">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name"><a href="dr-Preetham-raj.php">Dr. Preetham Raj</a></h3>
                            <p class="doctor-card__degree">MBBS, M.S, DipMAS, F.MAS, FIAGES, FALS</p>
                            <div class="doctor-card__actions">
                                <a href="dr-Preetham-raj.php" class="doctor-card__btn-profile">Read More <i class="fa fa-arrow-right"></i></a>
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Preetham Raj', 'MBBS, M.S, General Surgery')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3-General Medicine Physician -->
        <div class="department-section">
            <h2 class="department-title">General Medicine</h2>
            <div class="row gutter-y-30">
                <!-- Dr. N. Praveenkumar -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr n praveenkumar dr praveenkumar praveenkumar n praveenkumar medicine internal medicine physician general physician md medicine">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-N-Praveenkumar.png" alt="Dr. N. Praveenkumar">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name"><a href="dr-N-praveenkumar.php">Dr. N. Praveenkumar</a></h3>
                            <p class="doctor-card__degree">Medicine MD, Consultant Physician</p>
                            <div class="doctor-card__actions">
                                <a href="dr-N-praveenkumar.php" class="doctor-card__btn-profile">Read More <i class="fa fa-arrow-right"></i></a>
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. N. Praveenkumar', 'Medicine MD')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4-Obstetrics & Gynaecology -->
        <div class="department-section">
            <h2 class="department-title">Obstetrics & Gynaecology</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Ambuja B.N -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr ambuja bn dr ambuja ambuja b n obstetrics gynecology obstetrics and gynecology obstetrician gynecologist women health pregnancy maternity childbirth mbbs md dgo">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Ambuja-BN.png" alt="Dr. Ambuja B.N">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Ambuja B.N</h3>
                            <p class="doctor-card__degree">MBBS, M.D, D.G.O, Obstetrics & Gynecology</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Ambuja B.N', 'MBBS, M.D, D.G.O')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Sharmila.S -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr sharmila s dr sharmila sharmila s obstetrics gynecology obstetrics and gynecology obstetrician gynecologist women health pregnancy maternity childbirth mbbs md">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Sharmila-S.png" alt="Dr. Sharmila.S">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Sharmila.S</h3>
                            <p class="doctor-card__degree">MBBS, M.D, Obstetrics & Gynecology</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Sharmila.S', 'MBBS, M.D')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5-Family Medicine -->
        <div class="department-section">
            <h2 class="department-title">Family Medicine</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Bhuvaneshwari -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr bhuvaneshwari bhuvaneshwari family medicine family physician general physician primary care family doctor mbbs dnb medicine">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Bhuvaneshwari.png" alt="Dr. Bhuvaneshwari">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Bhuvaneshwari</h3>
                            <p class="doctor-card__degree">MBBS, D.N.B, Family Medicine</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Bhuvaneshwari', 'MBBS, D.N.B, Family Medicine')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6-Pulmonology -->
        <div class="department-section">
            <h2 class="department-title">Pulmonology</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Deepthi Laldayal -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr deepthi laldayal dr deepthi deepthi laldayal pulmonology pulmonologist chest physician respiratory specialist lung specialist asthma copd tuberculosis tb breathing disorders bronchoscopy mbbs md dnb">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Deepthi-Laldayal.png" alt="Dr. Deepthi Laldayal">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Deepthi Laldayal</h3>
                            <p class="doctor-card__degree">MBBS, MD, DNB, Pulmonology</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Deepthi Laldayal', 'MBBS, MD, DNB, Pulmonology')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 7-Ophthalmology -->
        <div class="department-section">
            <h2 class="department-title">Ophthalmology</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Sheila Peter -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr sheila peter dr sheila sheila peter ophthalmology ophthalmologist eye specialist eye surgeon eye care vision cataract glaucoma retina squint refractive errors mbbs doms">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Sheila-Peter.png" alt="Dr. Sheila Peter">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Sheila Peter</h3>
                            <p class="doctor-card__degree">MBBS, DOMS, Eye Specialist</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Sheila Peter', 'MBBS, DOMS')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Annie Joji -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr annie joji dr annie annie joji ophthalmology ophthalmologist eye specialist eye surgeon eye care cataract glaucoma retina squint vision mbbs doms food">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Annie-Joji.png" alt="Dr. Annie Joji">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Annie Joji</h3>
                            <p class="doctor-card__degree">MBBS, DOMS, FOOD</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Annie Joji', 'MBBS, DOMS, FOOD')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 8-Orthopaedics -->
        <div class="department-section">
            <h2 class="department-title">Orthopaedics</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Uday Kumar -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr uday kumar dr uday uday kumar orthopaedics orthopedics orthopaedic surgeon orthopedic surgeon bone specialist joint specialist fracture sports injury knee replacement hip replacement arthritis trauma mbbs ms dnb">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Uday-Kumar.png" alt="Dr. Uday Kumar">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name"><a href="dr-uday-kumar-SB.php">Dr. Uday Kumar</a></h3>
                            <p class="doctor-card__degree">MBBS, M.S, D.N.B, Orthopaedics</p>
                            <div class="doctor-card__actions">
                                <a href="dr-uday-kumar-SB.php" class="doctor-card__btn-profile">Read More <i class="fa fa-arrow-right"></i></a>
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Uday Kumar', 'MBBS, M.S, D.N.B, Orthopaedics')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Manohar.CV -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr manohar cv dr manohar manohar c v orthopaedics orthopedics orthopaedic surgeon orthopedic surgeon bone specialist joint specialist fracture trauma sports injury knee replacement hip replacement arthritis d ortho dnb orthopaedics">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Manohar-CV-img.png" alt="Dr. Manohar.CV">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name"><a href="dr-manohar-cv.php">Dr. Manohar.CV</a></h3>
                            <p class="doctor-card__degree">D.Ortho, D.N.B, Orthopaedics</p>
                            <div class="doctor-card__actions">
                                <a href="dr-manohar-cv.php" class="doctor-card__btn-profile">Read More <i class="fa fa-arrow-right"></i></a>
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Manohar.CV', 'D.Ortho, D.N.B, Orthopaedics')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 9-Ear, Nose & Throat (ENT) -->
        <div class="department-section">
            <h2 class="department-title">ENT</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Vineetha J Malayil -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr vineetha j malayil dr vineetha vineetha j malayil ent ear nose throat mbbs ms">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Vineetha-J-Malayil.png" alt="Dr. Vineetha J Malayil">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Vineetha J Malayil</h3>
                            <p class="doctor-card__degree">MBBS, M.S, ENT Specialist</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Vineetha J Malayil', 'MBBS, M.S')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Conrad J Rasquinha -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr conrad j rasquinha dr conrad conrad j rasquinha ent ear nose throat otolaryngology otolaryngologist ent specialist ear specialist nose specialist throat specialist sinus allergy hearing loss tonsillitis voice disorders mbbs dlo">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Conrad-J-Rasquinha.png" alt="Dr. Conrad J Rasquinha">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Conrad J Rasquinha</h3>
                            <p class="doctor-card__degree">MBBS., D.L.O, ENT</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Conrad J Rasquinha', 'MBBS., D.L.O, ENT')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 10-Urology -->
        <div class="department-section">
            <h2 class="department-title">Urology</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Dhanpal -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr dhanpal dhanpal urology urologist uro surgeon urinary kidney renal bladder prostate ureter urethra urinary tract kidney stone renal stone prostate enlargement bph andrology male infertility vasectomy mbbs ms mch">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Dhanpal.png" alt="Dr. Dhanpal">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Dhanpal</h3>
                            <p class="doctor-card__degree">MBBS, MS, MCH, Urology</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Dhanpal', 'MBBS, MS, MCH, Urology')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Sharath -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr sharath sharath urology urologist uro surgeon urinary kidney renal bladder prostate ureter urethra urinary tract kidney stone renal stone prostate enlargement bph andrology male infertility urinary infection mbbs ms dnb">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Sharath.png" alt="Dr. Sharath">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Sharath</h3>
                            <p class="doctor-card__degree">MBBS, M.S, D.N.B, Urology</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Sharath', 'MBBS, M.S, D.N.B, Urology')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 11-Neurology -->
        <div class="department-section">
            <h2 class="department-title">Neurology</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Varun Manjunath -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr varun manjunath dr varun varun manjunath neurology neurologist brain specialist nerve specialist stroke epilepsy migraine headache parkinson's disease movement disorders seizure neuropathy spine brain stroke rehabilitation mbbs md dm">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Varun-Manjunath.png" alt="Dr. Varun Manjunath">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Varun Manjunath</h3>
                            <p class="doctor-card__degree">MBBS, M.D., D.M, Neurology</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Varun Manjunath', 'MBBS, M.D., D.M, Neurology')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 12-Medical Gastroenterology -->
        <div class="department-section">
            <h2 class="department-title">Medical Gastroenterology</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Preethan. K.N -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr preethan kn dr preethan preethan k n medical gastroenterology gastroenterology gastroenterologist digestive specialist stomach specialist liver specialist intestine specialist gi specialist endoscopy colonoscopy acidity gastritis ulcer ibs inflammatory bowel disease fatty liver hepatitis pancreas gallbladder digestive disorders mbbs ms fsge">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Preethan-KN.png" alt="Dr. Preethan. K.N">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Preethan. K.N</h3>
                            <p class="doctor-card__degree">MBBS, M.S., FSGE, Gastroenterology</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Preethan. K.N', 'MBBS, M.S., FSGE, Medical Gastroenterology')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 13-Neuro Surgery -->
        <div class="department-section">
            <h2 class="department-title">Neuro Surgery</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Ramesh Ranganathan -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr ramesh ranganathan dr ramesh ranganathan neurosurgery neuro surgery neurosurgeon brain surgeon spine surgeon brain specialist spine specialist stroke brain tumor spinal disorders slip disc brain injury head injury epilepsy hydrocephalus nerve compression mbbs dnb">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Ramesh-Ranganathan.png" alt="Dr. Ramesh Ranganathan">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Ramesh Ranganathan</h3>
                            <p class="doctor-card__degree">MBBS., DNB, Neuro Surgery</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Ramesh Ranganathan', 'MBBS., DNB, Neuro Surgery')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 14-Paediatric Surgery -->
        <div class="department-section">
            <h2 class="department-title">Paediatric Surgery</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Jeevak Shetty -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr jeevak shetty dr jeevak jeevak shetty paediatric surgery pediatric surgeon general surgery surgeon gastrointestinal surgery gi surgeon laparoscopic surgery mbbs ms mch">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Jeevak-Shetty.png" alt="Dr. Jeevak Shetty">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Jeevak Shetty</h3>
                            <p class="doctor-card__degree">MBBS, M.S., Mch, Surgeon</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Jeevak Shetty', 'MBBS, M.S., Mch')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 15-Plastic Surgery -->
        <div class="department-section">
            <h2 class="department-title">Plastic Surgery</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Keerthana Devasani -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr keerthana devasani dr keerthana keerthana devasani plastic surgery plastic surgeon cosmetic surgeon reconstructive surgeon aesthetic surgeon burns surgery hand surgery microsurgery facial reconstruction scar revision skin graft breast reconstruction cleft lip cleft palate mbbs ms mch">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Keerthana-Devasani.png" alt="Dr. Keerthana Devasani">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Keerthana Devasani</h3>
                            <p class="doctor-card__degree">MBBS, M.S., Mch, Plastic Surgery</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Keerthana Devasani', 'MBBS, M.S., Mch, Plastic Surgery')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 16-Dental Surgery -->
        <div class="department-section">
            <h2 class="department-title">Dental Surgery</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Raghunandan -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr raghunandan dr raghunandan raghunandan dentist dental dental surgeon oral surgeon dentistry oral medicine tooth teeth dental care root canal rct braces orthodontics wisdom tooth dental implant smile makeover gum treatment periodontics prosthodontics endodontics pediatric dentistry cosmetic dentistry mds">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Raghunandan.png" alt="Dr. Raghunandan">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Raghunandan</h3>
                            <p class="doctor-card__degree">M.D.S, Dental Surgeon</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Raghunandan', 'M.D.S')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dr. Krishnaveni -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr krishnaveni dr krishnaveni krishnaveni dental surgery dentist dental dental surgeon oral surgeon dentistry oral medicine tooth teeth dental care root canal rct braces orthodontics wisdom tooth dental implant smile makeover gum treatment periodontics prosthodontics endodontics pediatric dentistry cosmetic dentistry bds">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Krishnaveni.png" alt="Dr. Krishnaveni">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Krishnaveni</h3>
                            <p class="doctor-card__degree">B.D.S, Dental Surgery</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Krishnaveni', 'B.D.S, Dental Surgery')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 17-Vascular Surgery -->
        <div class="department-section">
            <h2 class="department-title">Vascular Surgery</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Nikhil Dhanpal -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr nikhil dhanpal dr nikhil nikhil dhanpal vascular surgery vascular surgeon blood vessel surgeon vein specialist artery specialist varicose veins peripheral artery disease pad deep vein thrombosis dvt dialysis access aneurysm carotid artery diabetic foot vascular disease mbbs ms mch">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Nikhil-Dhanpal.png" alt="Dr. Nikhil Dhanpal">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Nikhil Dhanpal</h3>
                            <p class="doctor-card__degree">MBBS, M.S. Mch, Vascular Surgery</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Nikhil Dhanpal', 'MBBS, M.S. Mch, Vascular Surgery')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 18-Cardiology -->
        <div class="department-section">
            <h2 class="department-title">Cardiology</h2>
            <div class="row gutter-y-30">
                <!-- Dr. V K Srinivas -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr v k srinivas dr vk srinivas v k srinivas srinivas cardiology cardiologist heart specialist interventional cardiologist heart doctor heart disease chest pain angioplasty angiography coronary artery disease cad heart attack hypertension high blood pressure heart failure arrhythmia pacemaker echocardiography ecg tmt mbbs md dm">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-VK-Srinivas.png" alt="Dr. V K Srinivas">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. V K Srinivas</h3>
                            <p class="doctor-card__degree">MBBS, M.D., D.M, Cardiology</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. V K Srinivas', 'MBBS, M.D., D.M, CARDIOLOGY')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 19-Psychiatry -->
        <div class="department-section">
            <h2 class="department-title">Psychiatry</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Ramakrishna Vignesh. M -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr ramakrishna vignesh m dr ramakrishna dr vignesh ramakrishna vignesh psychiatry psychiatrist mental health mental illness depression anxiety stress panic disorder bipolar disorder schizophrenia ocd adhd insomnia sleep disorder counselling psychological therapy behavioral therapy addiction de addiction emotional wellness mbbs md psychiatry">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Ramakrishna-Vignesh-M.png" alt="Dr. Ramakrishna Vignesh. M">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Ramakrishna Vignesh. M</h3>
                            <p class="doctor-card__degree">MBBS, M.D. Psychiatry</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Ramakrishna Vignesh. M', 'MBBS, M.D. Psychiatry')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 20-Dermatology -->
        <div class="department-section">
            <h2 class="department-title">Dermatology</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Adrian Mario Dsouza -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr adrian mario dsouza dr adrian adrian mario dsouza dermatology dermatologist skin specialist skin doctor cosmetologist hair specialist acne pimples eczema psoriasis vitiligo fungal infection skin allergy pigmentation hair loss dandruff nail disorders skin biopsy cosmetic dermatology laser treatment anti aging mbbs md dermatology">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Adrian-Mario-Dsouza.png" alt="Dr. Adrian Mario Dsouza">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Adrian Mario Dsouza</h3>
                            <p class="doctor-card__degree">MBBS, M.D. Dermatology</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Adrian Mario Dsouza', 'MBBS, M.D. Dermatology')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 21-Radiography/Sonography -->
        <div class="department-section">
            <h2 class="department-title">Radiography / Sonography</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Vishal Kulgod -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr vishal kulgod dr vishal vishal kulgod radiography sonography radiologist internal medicine preventive medicine health checkup mbbs md ffm">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Vishal-Kulgod.png" alt="Dr. Vishal Kulgod">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Vishal Kulgod</h3>
                            <p class="doctor-card__degree">MBBS, M.D., FFM</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Vishal Kulgod', 'MBBS, M.D., FFM')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 22-Nephrology -->
        <div class="department-section">
            <h2 class="department-title">Nephrology</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Umesh -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr umesh dr umesh nephrology nephrologist kidney specialist renal specialist kidney doctor chronic kidney disease ckd kidney failure dialysis hemodialysis peritoneal dialysis hypertension diabetic kidney disease glomerulonephritis nephrotic syndrome kidney stones electrolyte disorders renal transplant mbbs dm dnb">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Umesh.png" alt="Dr. Umesh">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Umesh</h3>
                            <p class="doctor-card__degree">MBBS, D.M., D.N.B, Nephrology</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Umesh', 'MBBS, D.M., D.N.B, Nephrology')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 23-Anaesthisiology -->
        <div class="department-section">
            <h2 class="department-title">Anaesthisiology</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Avinash Sharma -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr avinash sharma dr avinash avinash sharma anaesthisiology anaesthesiologist general physician physician medicine doctor mbbs md">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Avinash-Sharma.png" alt="Dr. Avinash Sharma">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Avinash Sharma</h3>
                            <p class="doctor-card__degree">M.B.B.S, M.D, Anaesthesiologist</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Avinash Sharma', 'M.B.B.S, M.D')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 24-Audiology -->
        <div class="department-section">
            <h2 class="department-title">Audiology</h2>
            <div class="row gutter-y-30">
                <!-- Mr. Mohammed Asfaque Patel -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="mr mohammed asfaque patel mohammed asfaque patel asfaque patel audiology audiologist hearing specialist hearing care hearing loss hearing test pure tone audiometry pta speech audiometry impedance audiometry tympanometry hearing aid cochlear implant tinnitus vertigo balance disorders ear care msc audiology">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Mr-Mohammed-Asfaque-Patel.png" alt="Mr. Mohammed Asfaque Patel">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Mr. Mohammed Asfaque Patel</h3>
                            <p class="doctor-card__degree">M.Sc. Audiology Specialist</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Mr. Mohammed Asfaque Patel', 'M.Sc. Audiology')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 25-Radiation Oncology -->
        <div class="department-section">
            <h2 class="department-title">Radiation Oncology</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Varun Kumar -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr varun kumar dr varun varun kumar radiation oncology radio oncology radiation oncologist cancer specialist oncology cancer doctor radiotherapy radiation therapy chemotherapy tumor breast cancer lung cancer prostate cancer cervical cancer head and neck cancer palliative care cancer treatment dmrt dnb">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Varun-Kumar.png" alt="Dr. Varun Kumar">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Varun Kumar</h3>
                            <p class="doctor-card__degree">D.M.R.T, D.N.B, Radio Oncology</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Varun Kumar', 'D.M.R.T, D.N.B, Radio Oncology')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 26-Dietry -->
        <div class="department-section">
            <h2 class="department-title">Dietary & Nutrition</h2>
            <div class="row gutter-y-30">
                <!-- Ms. Arshiya. B.E -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="ms arshiya be ms arshiya arshiya b e dietitian nutritionist dietary nutrition clinical nutrition therapeutic diet weight loss weight gain diabetes diet heart healthy diet renal diet kidney diet hypertension diet obesity nutrition counselling meal planning healthy eating msc dietary">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Ms-Arshiya-BE.png" alt="Ms. Arshiya. B.E">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Ms. Arshiya. B.E</h3>
                            <p class="doctor-card__degree">M.Sc. Dietary & Clinical Nutrition</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Ms. Arshiya. B.E', 'M.Sc. Dietary')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 27-Rheumatology -->
        <div class="department-section">
            <h2 class="department-title">Rheumatology</h2>
            <div class="row gutter-y-30">
                <!-- Dr. Santhosh Saklecha -->
                <div class="col-lg-4 col-md-6 doctor-item" data-search="dr santhosh saklecha dr santhosh santhosh saklecha rheumatology rheumatologist arthritis joint pain autoimmune diseases rheumatoid arthritis osteoarthritis ankylosing spondylitis lupus sle gout psoriatic arthritis vasculitis osteoporosis fibromyalgia connective tissue disease sjogren syndrome scleroderma musculoskeletal disorders mbbs md rheumatology pg usa">
                    <div class="doctor-card">
                        <div class="doctor-card__image-box">
                            <img src="assets/images/team/Dr-Santhosh-Saklecha.png" alt="Dr. Santhosh Saklecha">
                        </div>
                        <div class="doctor-card__body">
                            <h3 class="doctor-card__name">Dr. Santhosh Saklecha</h3>
                            <p class="doctor-card__degree">MBBS, M.D., F. Rheumatology (USA)</p>
                            <div class="doctor-card__actions">
                                <button class="doctor-card__btn-book" onclick="openAppointment('Dr. Santhosh Saklecha', 'MBBS., M.D., F. Rheumatology (USA)')">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php require_once('parts/shared/appointment-modal.php'); ?>

<script>
    // Dynamic Instant Search
    const searchBox = document.getElementById("doctorSearch");
    searchBox.addEventListener("keyup", function () {
        let value = this.value.toLowerCase().trim();
        let sections = document.querySelectorAll(".department-section");

        sections.forEach(function (section) {
            let doctors = section.querySelectorAll(".doctor-item");
            let hasVisibleDoctor = false;

            doctors.forEach(function (card) {
                let keywords = (card.getAttribute("data-search") || "").toLowerCase();
                if (keywords.includes(value)) {
                    card.style.display = "";
                    hasVisibleDoctor = true;
                } else {
                    card.style.display = "none";
                }
            });

            section.style.display = hasVisibleDoctor ? "" : "none";
        });
    });
</script>

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>