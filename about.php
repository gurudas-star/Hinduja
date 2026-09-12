<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "About" ?>
<?php $body_class = "custom-cursor" ?>
<?php
$home = true;
?>
<!-- Header Here -->
<?php require_once('parts/header/header-four.php'); ?>

<section class="page-header">
    <div class="container-fluid">
        <div class="page-header__inner">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/About_us.png);">
            </div><!-- /.page-header__bg -->
            <div class="container">
                <div class="page-header__content">
                    <h2 class="page-header__title">About us</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span>About us</span></li>
                    </ul><!-- /.mediox-breadcrumb list-unstyled -->
                </div><!-- /.page-header__content -->
            </div><!-- /.container -->
        </div><!-- /.page-header__inner -->
    </div><!-- /.container-fluid -->
</section><!-- /.page-header -->

<section class="about-one-modern">

    <div class="container">

        <div class="row gutter-y-60">

            <!-- =====================================================
                 CONTENT SIDE (LEFT ON DESKTOP, FIRST ON MOBILE)
                 ===================================================== -->

            <div class="col-lg-6 order-1 order-lg-1">

                <div class="about-modern-content">

                    <!-- ABOUT US -->

                    <div class="about-modern-tag">

                        <img src="assets/images/shapes/sec-title-s-1-1.png"
                             alt="About Us">

                        <span>
                            About Us
                        </span>

                    </div>

                    <!-- MAIN TITLE -->

                    <h2 class="about-modern-title">
                        Excellence in Multi-Specialty
                        Healthcare Since 1962.
                    </h2>

                    <!-- HISTORY -->

                    <div class="about-modern-history">

                        <!-- 1961 -->

                        <p>
                            The story of P.D. Hinduja Sindhi Hospital began in 1962, when eight young members of the
                            Sindhi Youth Association came together with a shared dream of serving the community.
                            Each contributed ₹100 to start a small charitable dispensary in Gandhinagar, Bangalore.
                            This small step became the foundation of a hospital built on the values of Care,
                            Compassion, and Competence.
                        </p>

                        <!-- 1969 -->

                        <p>
                            In 1969, the City Improvement Trust Board (CITB) allotted a 1,000 sq. yd. site in
                            Sampigehalli (now Sampangi Rama Nagara), Bangalore. This helped the organisation expand
                            its healthcare services and serve more people.
                        </p>

                        <!-- 1970 / 1975 -->

                        <p>
                            On 17th August 1970, the foundation stone for the hospital was laid by Shri Ramakrishna
                            Hegde, former Chief Minister of Karnataka. On 15th August 1975, the hospital was officially
                            opened as a 55-bed inpatient hospital by Shri Mohanlal Sukhadia, the then Governor of
                            Karnataka. In the same year, the hospital also started its Operation Theatre (OT) Complex,
                            making advanced surgical care available to patients.
                        </p>

                    </div>

                    <!-- =================================================
                         2024
                         ================================================= -->

                    <div class="about-modern-highlight">

                        <p>
                            In 2024, P.D. Hinduja Sindhi Hospital was recognised among the top 15 multispeciality
                            hospitals in Bangalore by the Times Health Survey. This honour reflects the hospital's
                            continued commitment to quality healthcare and clinical excellence.
                        </p>

                    </div>

                    <!-- =================================================
                         TODAY
                         ================================================= -->

                    <div class="about-modern-today">

                        <p>
                            Today, P.D. Hinduja Sindhi Hospital is a trusted multispeciality hospital that has been caring
                            for generations of families. Built on the values of care, compassion, and competence, the
                            hospital provides quality healthcare through experienced doctors, advanced medical
                            technology, and patient-centred care. The hospital is NABH accredited and is one of only
                            ten hospitals in Bangalore with a Green OT (Green Operation Theatre) certification. These
                            recognitions reflect its commitment to quality healthcare, patient safety, and
                            environmentally responsible practices.
                        </p>

                    </div>

                    <!-- =================================================
                         CERTIFICATIONS
                         ================================================= -->

                    <div class="about-modern-certifications">

                        <!-- NABH -->

                        <div class="about-modern-certification">

                            <img src="assets/images/products/nabh-accreditated-hospital.webp"
                                 alt="NABH Accredited Hospital">

                            <p>
                                N.A.B.H. Accredited Hospital
                            </p>

                        </div>

                        <!-- GREEN OT -->

                        <div class="about-modern-certification">

                            <img src="assets/images/products/Certified-green-operation-theatre.webp"
                                 style="padding-top: 26px;" alt="Certified Green Operation Theatre">

                            <p>
                                Certified Green Operation Theatre
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- =====================================================
                 IMAGE & MILESTONES SIDE (RIGHT ON DESKTOP, SECOND ON MOBILE)
                 ORIGINAL IMAGE DESIGN
                 ===================================================== -->

            <div class="col-lg-6 order-2 order-lg-2">

                <div class="about-modern-left">

                    <div class="about-one__image">

                        <!-- ORIGINAL IMAGE -->

                        <div class="about-one__image__one">

                            <img src="assets/images/about/Index.png"
                                 alt="P.D. Hinduja Sindhi Hospital">

                        </div>

                        <!-- ORIGINAL 62+ EXPERIENCE DESIGN -->

                        <div class="about-one__experience"
                             style="background-image: url(assets/images/about/Hinduja_experience.png);">

                            <div class="about-one__experience__content">

                                <h3 class="about-one__experience__year">
                                    62+
                                </h3>

                                <span class="about-one__experience__text">
                                    Years of <br>
                                    Excellence <br>
                                    in Healthcare
                                </span>

                            </div>

                        </div>

                    </div>

                    <!-- =================================================
                         HOSPITAL MILESTONES
                         ================================================= -->

                    <div class="about-modern-milestones">

                        <h3 class="about-modern-milestones-title">
                            Hospital Milestones
                        </h3>

                        <div class="about-modern-timeline">

                            <!-- 1977 -->

                            <div class="about-modern-timeline-item">

                                <span class="about-modern-timeline-dot"></span>

                                <div class="about-modern-timeline-year">
                                    1977
                                </div>

                                <p class="about-modern-timeline-text">
                                    In 1977, the Hinduja Foundation joined hands with the hospital.
                                    Following this partnership, the hospital was renamed Seth
                                    Parmanand Deepchand Hinduja Sindhi Hospital,
                                    strengthening its mission to provide quality and affordable healthcare.
                                </p>

                            </div>

                            <!-- 1979 -->

                            <div class="about-modern-timeline-item">

                                <span class="about-modern-timeline-dot"></span>

                                <div class="about-modern-timeline-year">
                                    1979
                                </div>

                                <p class="about-modern-timeline-text">
                                    In 1979, the Department of Science &amp; Technology, Government of India,
                                    selected the hospital for an important research project on Juvenile Mitral
                                    Stenosis. The project received a grant of ₹37.50 lakhs, recognising the
                                    hospital's growing contribution to medical research.
                                </p>

                            </div>

                            <!-- 1981 -->

                            <div class="about-modern-timeline-item">

                                <span class="about-modern-timeline-dot"></span>

                                <div class="about-modern-timeline-year">
                                    1981
                                </div>

                                <p class="about-modern-timeline-text">
                                    A proud moment came in 1981, when the first open-heart surgery in Karnataka
                                    was successfully performed at the hospital on a young girl by Dr. Phillip
                                    Alexander and Dr. Ganesh Nayak. This remarkable achievement made the hospital
                                    a pioneer in advanced cardiac care and created a milestone in Karnataka's
                                    medical history.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="leaders-section">
    <div class="container">

        <!-- TITLE -->
        <div class="section-title-center">
            <h3>From The Core: Words That Matter</h3>
        </div>

        <!-- PRESIDENT -->
        <div class="row leader-row">

            <!-- IMAGE -->
            <div class="col-lg-5">
                <div class="leader-photo-box">
                    <img src="assets/images/products/Mr.Harish-S-Asrani.jpg" alt="Dr. Sanjay Kumar Bajaj">
                </div>

                <div class="leader-name">
                    Dr. Sanjay Kumar Bajaj
                </div>
                <span class="leader-role">
                    President, P.D. Hinduja Sindhi Hospital
                </span>
            </div>

            <!-- CONTENT -->
            <div class="col-lg-7">

                <!-- QUOTE -->
                <div class="leader-quote">
                    We at the PD Hinduja Sindhi Hospital are committed to patient care.
                </div>

                <div class="leader-text">
                <p>
                    Our hospital had a humble beginning, starting as a small clinic in Gandhinagar more than 62 years
                    ago. Today, we have grown into a beautiful 110-bed hospital. We are proud to be Green OT and
                    N.A.B.H.
                    accredited, reflecting our dedication to the safety of our doctors, anesthetists, and paramedics.
                </p>

                <p>
                    We offer a full-fledged tertiary-level ICU, a CT scan department, and a hemodialysis department
                    equipped with 14 hemodialysis machines. Recently, we completed 100,000 hemodialysis sessions, which
                    we provide at a highly subsidized price to make it affordable for all.
                </p>

                <p>
                    Our hospital is known for the three C’s: <strong>care, compassion, and competence</strong>. We
                    strive
                    to reduce the suffering of humanity by providing the best possible care at a very affordable cost.
                    Unlike corporate hospitals, we are a trust hospital, focusing on delivering the highest quality care
                    to all our patients.
                </p>

                <p>
                    We have a dedicated team of doctors and are proud to be a multi-specialty hospital. Our lives are
                    dedicated to giving the best care to all who come to us.
                </p>
                </div>

            </div>
        </div>

        <!-- CEO -->
        <div class="row leader-row leader-row--alt">

            <!-- IMAGE -->
            <div class="col-lg-5">
                <div class="leader-photo-box">
                    <img src="assets/images/products/Emmanuel_krishnan.jpeg" alt="Emmanuel Krishnan">
                </div>

                <div class="leader-name">
                    Emmanuel Krishnan
                </div>
                <span class="leader-role">
                    CEO, P.D. Hinduja Sindhi Hospital
                </span>
            </div>

            <!-- CONTENT -->
            <div class="col-lg-7">

                <!-- QUOTE -->
                <div class="leader-quote">
                    As the CEO, of PD Hinduja Sindhi Hospital it is my privilege to lead a professional team dedicated
                    to providing the highest quality healthcare services to our community.
                </div>

                <div class="leader-text">
                <p>
                    Our investment in patient care is unwavering. We strive to create an environment where every patient
                    feels valued, protected, and supported throughout their healthcare journey. We understand the
                    importance of empathy in healing and aim to deliver compassionate care and trust to all our
                    patients.
                </p>

                <p>
                    Affordability and accessibility are core principles that guide our actions. We are committed to
                    ensuring that our services remain affordable without compromising on quality. Additionally, we are
                    constantly working to improve accessibility, making it easier for patients to receive the care they
                    need, when they need it.
                </p>

                <p>
                    Technical innovation plays a crucial role in our commitment to excellence. We are dedicated to
                    staying at the forefront of medical technology, enabling us to provide our patients with the most
                    advanced treatments and care available.
                </p>

                <p>
                    None of this would be possible without our qualified staff and their dedication to excellence. Our
                    team is composed of experienced professionals who are passionate about providing the best possible
                    care to our patients.
                </p>

                <p>
                    I would certainly say that PD Hinduja Sindhi Hospital will provide patient care with a corporate
                    standard but at a very affordable cost. We will also continue to strive to put patient care as our
                    topmost priority, we will fit our services to patient needs and not the other way around.
                </p>

                <p>
                    Thank you for your continued support as we work towards our goal of being the most preferred
                    hospital for every citizen. Together, we can make a difference in the lives of those we serve.
                </p>
                </div>

            </div>
        </div>

    </div>
</section>

<section class="team-two section-space-two">
    <div class="container">
        <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms">
            <div class="sec-title__top">

                <img src="assets/images/shapes/sec-title-s-1-1.png" alt="our expert team" class="sec-title__img">

                <h6 class="sec-title__tagline">our expert team</h6><!-- /.sec-title__tagline -->

            </div><!-- /.sec-title__top -->
            <h3 class="sec-title__title">meet our expert team</h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <div class="team-two__carousel mediox-owl__carousel mediox-owl__carousel--basic-nav owl-carousel owl-theme"
            data-owl-options='{
                        "items": 1,
                        "margin": 10,
                        "loop": false,
                        "smartSpeed": 700,
                        "nav": false,
                        "dots": true,
                        "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
                        "autoplay": true,
                        "responsive": {
                            "0": {
                                "items": 1,
                                "nav": true,
                                "dots": false,
                                "margin": 10
                            },
                            "576": {
                                "items": 2,
                                "margin": 30
                            },
                            "992": {
                                "items": 3,
                                "margin": 30
                            },
                            "1200": {
                                "items": 4,
                                "margin": 30,
                                "dots": false
                            }
                        }
                    }'>

            <div class="item">
                <div class="team-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                    <div class="team-card-two__image">
                        <div class="team-card-two__image__inner">
                            <img src="assets/images/team/Dr-Sravani-M.jpg" alt="Dr. Sravani M">
                        </div><!-- /.team-card-two__image__inner -->
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__identity">
                        <h3 class="team-card-two__name">
                            Dr. Sravani M
                        </h3><!-- /.team-card-two__name -->
                        <p class="team-card-two__designation">MBBS, MD, DNB, FPN Pediatric Nephrology</p>
                        <!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__identity -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="team-card-two team-card-two--top-identity wow fadeInUp" data-wow-duration='1500ms'
                    data-wow-delay='200ms'>
                    <div class="team-card-two__image">
                        <div class="team-card-two__image__inner">
                            <img src="assets/images/team/Dr-Pallavi-Patri.jpg" alt="Dr. Pallavi Patri">
                        </div><!-- /.team-card-two__image__inner -->
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__identity">
                        <h3 class="team-card-two__name">
                            Dr. Pallavi Patri
                        </h3><!-- /.team-card-two__name -->
                        <p class="team-card-two__designation">MD (Nephrology), ABIM (Internal Medicine), ABIM
                            (Nephrology), Hypertension & Transplantation Fellowship</p>
                        <!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__identity -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="team-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                    <div class="team-card-two__image">
                        <div class="team-card-two__image__inner">
                            <img src="assets/images/team/Dr-Karishma-Talwar.jpg" alt="Dr. Karishma Talwar">
                        </div><!-- /.team-card-two__image__inner -->
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__identity">
                        <h3 class="team-card-two__name">
                            Dr. Karishma Talwar
                        </h3><!-- /.team-card-two__name -->
                        <p class="team-card-two__designation">MBBS, MS (OB & G)</p><!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__identity -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
            <!-- Additional Card 5 -->
            <div class="item">
                <div class="team-card-two team-card-two--top-identity wow fadeInUp" data-wow-duration='1500ms'
                    data-wow-delay='400ms'>
                    <div class="team-card-two__image">
                        <div class="team-card-two__image__inner">
                            <img src="assets/images/team/Dr-N-Praveenkumar.png" alt="Dr. N. Praveenkumar">
                        </div><!-- /.team-card-two__image__inner -->
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__identity">
                        <h3 class="team-card-two__name">
                            Dr. N. Praveenkumar
                        </h3><!-- /.team-card-two__name -->
                        <p class="team-card-two__designation">Medicine MD</p><!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__identity -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->

            <!-- Additional Card 7 -->
            <div class="item">
                <div class="team-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                    <div class="team-card-two__image">
                        <div class="team-card-two__image__inner">
                            <img src="assets/images/team/Dr-Raghunandan.png" alt="Dr. Raghunandan">
                        </div><!-- /.team-card-two__image__inner -->
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__identity">
                        <h3 class="team-card-two__name">
                            Dr. Raghunandan
                        </h3><!-- /.team-card-two__name -->
                        <p class="team-card-two__designation">M.D.S</p><!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__identity -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="team-card-two team-card-two--top-identity wow fadeInUp" data-wow-duration='1500ms'
                    data-wow-delay='600ms'>
                    <div class="team-card-two__image">
                        <div class="team-card-two__image__inner">
                            <img src="assets/images/team/Dr-Vineetha-J-Malayil.png" alt="Dr. Vineetha J Malayil">
                        </div><!-- /.team-card-two__image__inner -->
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__identity">
                        <h3 class="team-card-two__name">
                            Dr. Vineetha J Malayil
                        </h3><!-- /.team-card-two__name -->
                        <p class="team-card-two__designation">MBBS, M.S</p><!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__identity -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="team-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                    <div class="team-card-two__image">
                        <div class="team-card-two__image__inner">
                            <img src="assets/images/team/Dr-Sheila-Peter.png" alt="Dr. Sheila Peter">
                        </div><!-- /.team-card-two__image__inner -->
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__identity">
                        <h3 class="team-card-two__name">
                            Dr. Sheila Peter
                        </h3><!-- /.team-card-two__name -->
                        <p class="team-card-two__designation">MBBS, DOMS</p><!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__identity -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="team-card-two team-card-two--top-identity wow fadeInUp" data-wow-duration='1500ms'
                    data-wow-delay='600ms'>
                    <div class="team-card-two__image">
                        <div class="team-card-two__image__inner">
                            <img src="assets/images/team/Dr-Anita-Dias1.png" alt="Dr. Anita Dias">
                        </div><!-- /.team-card-two__image__inner -->
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__identity">
                        <h3 class="team-card-two__name">
                            Dr. Anita Dias
                        </h3><!-- /.team-card-two__name -->
                        <p class="team-card-two__designation">MBBS, M.D, Internal Medicine</p>
                        <!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__identity -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="team-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                    <div class="team-card-two__image">
                        <div class="team-card-two__image__inner">
                            <img src="assets/images/team/Dr-Abhishek-N.png" alt="Dr. Abhishek N.">
                        </div><!-- /.team-card-two__image__inner -->
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__identity">
                        <h3 class="team-card-two__name">
                            Dr. Abhishek N.
                        </h3><!-- /.team-card-two__name -->
                        <p class="team-card-two__designation">MBBS, MD</p><!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__identity -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="team-card-two team-card-two--top-identity wow fadeInUp" data-wow-duration='1500ms'
                    data-wow-delay='600ms'>
                    <div class="team-card-two__image">
                        <div class="team-card-two__image__inner">
                            <img src="assets/images/team/Dr-Prakash-Babu-MN.png" alt="Dr. Prakash Babu M.N.">
                        </div><!-- /.team-card-two__image__inner -->
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__identity">
                        <h3 class="team-card-two__name">
                            Dr. Prakash Babu M.N.
                        </h3><!-- /.team-card-two__name -->
                        <p class="team-card-two__designation">MBBS, MN, MS, General Surgery</p>
                        <!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__identity -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="team-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                    <div class="team-card-two__image">
                        <div class="team-card-two__image__inner">
                            <img src="assets/images/team/Dr-Preetham-Raj-img.png" alt="Dr. Preetham Raj">
                        </div><!-- /.team-card-two__image__inner -->
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__identity">
                        <h3 class="team-card-two__name">
                            Dr. Preetham Raj
                        </h3><!-- /.team-card-two__name -->
                        <p class="team-card-two__designation">MBBS, M.S, DipMAS, F.MAS, FIAGES, FALS(Colorectal),
                            F.ACRSI, F.AIS, General Surgery</p><!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__identity -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
            <!-- Additional Card 6 -->
            <div class="item">
                <div class="team-card-two team-card-two--top-identity wow fadeInUp" data-wow-duration='1500ms'
                    data-wow-delay='500ms'>
                    <div class="team-card-two__image">
                        <div class="team-card-two__image__inner">
                            <img src="assets/images/team/Dr-Nikhil-Dhanpal.png" alt="Dr. Nikhil Dhanpal">
                        </div><!-- /.team-card-two__image__inner -->
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__identity">
                        <h3 class="team-card-two__name">
                            Dr. Nikhil Dhanpal
                        </h3><!-- /.team-card-two__name -->
                        <p class="team-card-two__designation">MBBS, M.S. Mch, Vascular Surgery</p>
                        <!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__identity -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
        </div><!-- /.team-two__carousel -->
    </div><!-- /.container -->
</section><!-- /.team-two section-space-two -->

<section class="history-section">
    <div class="container">

        <!-- TITLE -->
        <div class="section-title-center">
            <h3>Our History</h3>
        </div>

        <!-- GRID -->
        <div class="history-grid">

            <div class="history-item"><img src="assets/images/history/img1.jpg" onclick="openImage(0)"
                    alt="Hospital history 1"></div>
            <div class="history-item"><img src="assets/images/history/img2.jpg" onclick="openImage(1)"
                    alt="Hospital history 2"></div>
            <div class="history-item"><img src="assets/images/history/img3.jpg" onclick="openImage(2)"
                    alt="Hospital history 3"></div>
            <div class="history-item"><img src="assets/images/history/img4.jpg" onclick="openImage(3)"
                    alt="Hospital history 4"></div>

            <div class="history-item"><img src="assets/images/history/img5.jpg" onclick="openImage(4)"
                    alt="Hospital history 5"></div>
            <div class="history-item"><img src="assets/images/history/img6.jpg" onclick="openImage(5)"
                    alt="Hospital history 6"></div>
            <div class="history-item"><img src="assets/images/history/img7.jpg" onclick="openImage(6)"
                    alt="Hospital history 7"></div>
            <div class="history-item"><img src="assets/images/history/img8.jpg" onclick="openImage(7)"
                    alt="Hospital history 8"></div>

            <div class="history-item"><img src="assets/images/history/img9.jpg" onclick="openImage(8)"
                    alt="Hospital history 9"></div>
            <div class="history-item"><img src="assets/images/history/img10.png" onclick="openImage(9)"
                    alt="Hospital history 10"></div>

        </div>

    </div>
</section>

<!-- LIGHTBOX -->
<div id="lightbox" class="lightbox-modal">
    <div class="lightbox-content-box">

        <!-- CLOSE BUTTON -->
        <span class="lightbox-close-btn" onclick="closeImage()" role="button" aria-label="Close">&times;</span>

        <!-- PREVIOUS BUTTON -->
        <button class="lightbox-nav-btn lightbox-prev-btn" onclick="prevHistoryImage(event)"
            aria-label="Previous image">&#10094;</button>

        <!-- IMAGE -->
        <img id="lightbox-img" alt="Hospital history">

        <!-- NEXT BUTTON -->
        <button class="lightbox-nav-btn lightbox-next-btn" onclick="nextHistoryImage(event)"
            aria-label="Next image">&#10095;</button>

    </div>
</div>

<!-- SCRIPT -->
<script>
    const historyImageList = [
        "assets/images/history/img1.jpg",
        "assets/images/history/img2.jpg",
        "assets/images/history/img3.jpg",
        "assets/images/history/img4.jpg",
        "assets/images/history/img5.jpg",
        "assets/images/history/img6.jpg",
        "assets/images/history/img7.jpg",
        "assets/images/history/img8.jpg",
        "assets/images/history/img9.jpg",
        "assets/images/history/img10.png"
    ];

    let currentHistoryIndex = 0;

    function openImage(indexOrSrc) {
        if (typeof indexOrSrc === "number") {
            currentHistoryIndex = indexOrSrc;
        } else {
            const foundIndex = historyImageList.findIndex(src => indexOrSrc.includes(src));
            currentHistoryIndex = foundIndex !== -1 ? foundIndex : 0;
        }
        document.getElementById('lightbox').style.display = 'flex';
        renderHistoryImage();
    }

    function renderHistoryImage() {
        const img = document.getElementById('lightbox-img');
        img.style.opacity = '0';
        setTimeout(() => {
            img.src = historyImageList[currentHistoryIndex];
            img.style.opacity = '1';
        }, 100);
    }

    function prevHistoryImage(e) {
        if (e) e.stopPropagation();
        currentHistoryIndex = (currentHistoryIndex - 1 + historyImageList.length) % historyImageList.length;
        renderHistoryImage();
    }

    function nextHistoryImage(e) {
        if (e) e.stopPropagation();
        currentHistoryIndex = (currentHistoryIndex + 1) % historyImageList.length;
        renderHistoryImage();
    }

    function closeImage() {
        document.getElementById('lightbox').style.display = 'none';
    }

    // CLOSE ONLY WHEN CLICKING OUTSIDE IMAGE
    document.getElementById('lightbox').addEventListener('click', function (e) {
        if (e.target === lightbox) {
            closeImage();
        }
    });

    // Keyboard Arrow navigation & Escape to close
    document.addEventListener('keydown', function (e) {
        const lightbox = document.getElementById('lightbox');
        if (lightbox && lightbox.style.display === 'flex') {
            if (e.key === 'Escape') {
                closeImage();
            } else if (e.key === 'ArrowLeft') {
                prevHistoryImage();
            } else if (e.key === 'ArrowRight') {
                nextHistoryImage();
            }
        }
    });
</script>

<section class="vm-section">
    <div class="container">

        <!-- TITLE -->
        <div class="section-title-center">
            <h3>Our Vision & Mission</h3>
        </div>

        <div class="vm-section__inner">

            <!-- LEFT CONTENT -->
            <div class="vm-section__content">

                <!-- VISION CARD -->
                <div class="vm-card">
                    <h4>Our Vision</h4>
                    <p>
                        Our vision is to be leaders in providing quality healthcare by ensuring safety to all concerned
                        covering both curative and preventive, with a human touch, to all the sections of the community
                        at affordable cost.
                    </p>
                </div>

                <!-- MISSION CARD -->
                <div class="vm-card vm-card--accent">
                    <h4>Our Mission</h4>
                    <p>
                        Our mission is to provide a compassionate and patient-friendly environment regardless of race,
                        caste, religion, language, or economic status. We will strive towards excellence by bringing
                        quality healthcare within the reach of the common man.
                    </p>
                    <p>
                        To this end, we will constantly incorporate the latest in medical equipment and services to keep
                        up the pace with modern scientific developments in healthcare.
                    </p>
                </div>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="vm-section__image">
                <img src="assets/images/about/home_2.webp" alt="P.D. Hinduja Sindhi Hospital">
            </div>

        </div>

    </div>
</section>

<section class="values-section">
    <div class="container">

        <!-- TITLE -->
        <div class="section-title-center">
            <h3>Our Values</h3>
            <p>
                The core values that the PD Hinduja Sindhi Hospital strives to achieve in its quality policy are as
                follows
            </p>
        </div>

        <!-- GRID -->
        <div class="values-grid">

            <!-- CARD -->
            <div class="values-card">
                <div class="values-card__icon"><i class="fas fa-balance-scale"></i></div>
                <h4>Ethical approach in all its activities</h4>
            </div>

            <!-- CARD -->
            <div class="values-card">
                <div class="values-card__icon"><i class="fas fa-hand-holding-heart"></i></div>
                <h4>Sensitive to the needs of the patient and their attendants</h4>
            </div>

            <!-- CARD -->
            <div class="values-card">
                <div class="values-card__icon"><i class="fas fa-users"></i></div>
                <h4>Congenial work environment to its employees</h4>
            </div>

            <!-- CARD -->
            <div class="values-card">
                <div class="values-card__icon"><i class="fas fa-handshake"></i></div>
                <h4>Mutually beneficial supplier relationship</h4>
            </div>

            <!-- BIG CARD -->
            <div class="values-card values-card--wide">
                <div class="values-card__icon"><i class="fas fa-shield-alt"></i></div>
                <h4>A safe environment for patients, visitors, employees, and neighbours</h4>
            </div>

        </div>

    </div>
</section>

<section class="cta-banner">

    <div class="container">

        <div class="cta-banner__inner">

            <!-- LEFT CONTENT -->
            <div class="cta-banner__left">

                <!-- ICON -->
                <div class="cta-banner__icon">+</div>

                <!-- TEXT -->
                <div class="cta-banner__text">
                    <h3>
                        Secure your health with us today!
                    </h3>
                    <p>
                        Book a call with our expert team for personalized treatment plan.
                    </p>
                </div>

            </div>

            <!-- BUTTON -->
            <div>
                <a href="appointment.php" class="cta-banner__btn">
                    Make An Appointment
                </a>
            </div>

        </div>

    </div>

</section>

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>