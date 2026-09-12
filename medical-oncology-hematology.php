
<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Medical Oncology Hematology" ?>
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
                    <h2 class="page-header__title">Medical Oncology & Hematology</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span><a href="specialties.php">Specialties</a></span></li>
                        <li><span>Medical Oncology & Hematology</span></li>
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
                            <img src="assets/images/department/medical-oncology-hematology-bread.png" alt="cardiology">
                        </div><!-- /.service-details__thumbnail -->
                        <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms"
                            data-wow-delay="00ms">
                            <!-- <h1 class="service-details__title">Internal Medicine at P.D. Hinduja Sindhi Hospital, Bengaluru</h2> -->
                            <p class="service-details__text">At P.D. Hinduja Sindhi Hospital in Bengaluru, India, our
                                Medical Oncology & Hematology Department is committed to providing comprehensive,
                                compassionate care for patients battling cancer and blood disorders. Backed by over 60
                                years of trusted healthcare experience, our multidisciplinary team offers advanced
                                diagnostic and treatment options, including chemotherapy, targeted therapies, and
                                supportive care. With a fully equipped medical ICU and a patient-centered approach, we
                                strive to deliver personalized cancer care and blood disease management at the highest
                                standards.</p><!-- /.service-details__text -->
                        </div><!-- /.service-details__content__box -->
                    </div><!-- /.service-details__inner -->
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Best Medical Oncology Treatment in Bangalore</b></h2>
                        <!-- /.service-details__sub-title -->
                        <p>Treating cancer is a daunting one, to achieve this you need the expertise, who understand the
                            history and then provide the best solution. We at P. D. Hinduja Sindhi Hospital offer the
                            best Medical Oncology Treatment in Bangalore supported by oncology specialist and innovative
                            technology. Our sole purpose is to provide personalised care with empathy for each patient
                            and at the same time ensuring treatment journey to be as comfortable as possible.</p>
                        <p>Whether you are looking for Oncology Treatment or advanced cancer treatment, our oncology
                            department is here to assist you every step of the way.

                            Schedule a consultation with our oncology specialist today</p>
                    </div>
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>What is Medical Oncology?</b></h2>
                        <!-- /.service-details__sub-title -->
                        <p>Medical oncology is a treatment that focuses on treating and managing cancer using medical
                            interventions such as chemotherapy, immunotherapy, targeted therapy (uses drugs to
                            specifically target and attack cancer cells, focusing on unique molecular features (like
                            proteins or genes), and more.</p>
                        <p>Oncologists are specialized doctors who work with patients to create customized treatment
                            plans based on the type, stage, and location of cancer. At P.D. Hinduja Sindhi Hospital, our
                            oncology specialists are dedicated to offering advanced treatment options for all types of
                            cancer, ensuring each patient receives the highest level of care.</p>
                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Why Choose us for Oncology Treatment?</b></h2>
                        <p>At P.D. Hinduja Sindhi Hospital, we pride ourselves on offering expert oncology doctors and a
                            patient-centric approach to cancer care.</p>
                        <p>Here’s why you should choose us for your oncology treatment:</p>
                        <ul>
                            <li><b>Experienced Oncology Doctors:</b> Our specialists, like Dr. Varun Kumar, have years
                                of experience and expertise in medical oncology.</li>

                            <li><b>State-of-the-Art Facilities:</b> Our hospital is well equipped with the latest
                                technology for accurate diagnosis, effective treatment, and patient monitoring.</li>
                            <li><b>Personalized Care:</b> We understand that cancer treatment is unique for each
                                individual. Our team designs treatment plans tailored to your specific needs.</li>
                            <li><b>Multidisciplinary Approach:</b> Our team includes oncologists, radiation specialists,
                                nutritionists, and counsellors to ensure complete care throughout your treatment
                                journey.</li>
                        </ul>

                    </div>
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Types of Cancer Treated at Our Oncology Department</b>
                        </h2>
                        <p>We treat a wide range of cancers, including but not limited to:</p>
                        <ul>
                            <li><b>Breast Cancer:</b> We offer both surgical and non-surgical treatment options, along
                                with counselling and rehabilitation.</li>

                            <li><b>Lung Cancer:</b> With advanced diagnostic tools and treatment protocols, we provide
                                targeted therapies and chemotherapy options.</li>

                            <li><b>Colorectal Cancer:</b> Early detection and treatment plans tailored to each stage,
                                including chemotherapy and surgery.</li>

                            <li><b>Prostate Cancer:</b> Targeted treatments and minimally invasive procedures for
                                effective care.</li>

                            <li><b>Leukemia, Lymphoma, and other cancers:</b> Our oncology specialists are skilled in
                                treating all types of blood cancers with advanced therapies and clinical trials.</li>
                        </ul>

                        <p>No matter the type of cancer, our goal is to provide the most effective treatments with the
                            best possible outcomes.</p>

                    </div>
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Our Oncology Treatment Specialities</b></h2>
                        <p>P.D. Hinduja Sindhi Hospital offers a wide range of advanced oncology treatments. Some of our
                            specialties include:</p>
                        <ul>
                            <li><b>Chemotherapy:</b> A common and effective treatment for various cancers, we offer
                                chemotherapy tailored to your specific needs and cancer type. Our oncology specialists
                                use the most up-to-date chemotherapy drugs and delivery methods to minimize side
                                effects.</li>

                            <li><b>Immunotherapy:</b> Immunotherapy uses your body’s immune system to fight cancer. We
                                offer cutting-edge treatments designed to boost immune response and target cancer cells
                                directly.</li>

                            <li><b>Targeted Therapy:</b> Targeted treatments focus on specific molecules within cancer
                                cells. By identifying molecular targets, we can disrupt the cancer’s growth process more
                                precisely.</li>

                            <li><b>Radiation Oncology:</b> Our radiation oncology specialists use the latest technology
                                for precise targeting of cancerous tissues, minimizing damage to surrounding healthy
                                cells and tissues.</li>
                        </ul>

                        <p>Our oncology treatments are personalized, utilizing the latest advancements in the field to
                            provide the most effective care possible.</p>

                    </div>

                    

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Our Oncology Treatment Specialities</b></h2>

                        <div class="doctor-section">

                            <div class="d1">
                                <img src="https://hindujasindhihospital.com/doc-img/Drsampath.jpg" alt="">
                                <h4>Dr. Sampath Kumar M.N.</h4>
                                <p>
                                    Dr. Sampath Kumar M.N is a <b>Specialized Medical Oncologist</b> trained in oncology
                                    treatments, including specialized procedures like stem cell transplantation. With
                                    more than <b>9 years of experience</b> in medical oncology, he is the one-stop
                                    expert for
                                    treating complex cases such as blood cancers, lung cancers, and breast cancers.
                                </p>
                                <button><a href="dr-sampath-kumar-m-n.php">Learn More</a></button>
                            </div>

                            <div class="d1">
                                <img src="assets/images/team/Dr-Anil-Kumar-N.png" alt="">
                                <h4>Dr. Anil Kumar</h4>
                                <p>
                                    Dr. Anil Kumar is an expert in Medical Oncology and Hematology. He specializes in
                                    the diagnosis of blood cancers and administering anticancer treatments for patients.
                                    He has dealt with complex cases such as lymphoma, leukemia, and breast cancers for
                                    many years. Dr. Anil offers advanced care using state-of-the-art technologies and
                                    targeted therapy cancer treatments.
                                </p>
                                <button><a href="dr-anil-kumar.php">Learn More</a></button>
                            </div>

                        </div>
                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Patient-Centered Care: Our Approach to Oncology
                                Treatment</b></h2>
                        <p>At P.D. Hinduja Sindhi Hospital, we understand that cancer treatment goes beyond just medical
                            intervention. Our approach is centered around <b>providing personalized oncology care</b>
                            that includes:</p>
                        <ul>
                            <li><b>Physical Support:</b> From pain management to rehabilitation, we ensure that your
                                physical needs are met during treatment.</li>

                            <li><b>Emotional and Psychological Support:</b> Cancer treatment can be overwhelming, and
                                our team of counselors and support staff are here to help with mental well-being.</li>

                            <li><b>Nutritional Support:</b> Our dieticians work closely with patients to ensure they
                                maintain a healthy diet that supports their treatment and recovery.</li>

                            <li><b>Multidisciplinary Team Care:</b> In addition to your oncology doctor, you will have
                                access to specialists like surgeons, radiologists, and palliative care teams, all
                                working together to provide holistic care.</li>
                        </ul>

                        <p>We believe that every patient deserves comprehensive support throughout their treatment
                            journey, and we are committed to providing that care.
                        </p>

                    </div>
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">

                        <h2 class="service-details__sub-title"><b>Our Oncology Facilities and Technologies</b></h2>

                        <p>We invest in the latest oncology technology to provide accurate diagnoses and the best
                            treatment outcomes. Our hospital is equipped with:</p>

                        <ul>
                            <li><b>Advanced Imaging Technology:</b> for precise diagnosis and monitoring</li>

                            <li><b>State-of-the-Art Radiation Therapy Equipment:</b> for effective, targeted cancer
                                treatment</li>

                            <li><b>Genetic Testing and Targeted Therapy Tools:</b> to help tailor treatment plans</li>

                            <li><b>Chemotherapy Suites:</b> designed for patient comfort and effective drug delivery
                            </li>
                        </ul>

                        <p>These technologies, combined with our experienced team, ensure that you receive the highest
                            standard of care.</p>

                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">

                        <h2 class="service-details__sub-title"><b>How to Get Started with Your Cancer Treatment at P.D.
                                Hinduja Sindhi Hospital?</b></h2>

                        <p>Getting started with your cancer treatment is simple. Here’s how:</p>

                        <ol>
                            <li><b>Book an Appointment:</b> Call us or use our online booking system to schedule a
                                consultation with one of our oncology specialists.</li>

                            <li><b>Consultation:</b> Meet with our oncology doctor to discuss your symptoms, history,
                                and any necessary tests.</li>

                            <li><b>Personalized Treatment Plan:</b> Based on your diagnosis, our team will develop a
                                treatment plan tailored to your needs.</li>

                            <li><b>Start Your Treatment Journey:</b> Begin your treatment with the support of our
                                multidisciplinary team.</li>
                        </ol>

                    </div>
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">

                        <h2 class="service-details__sub-title"><b>Cancer Treatment Cost in Bangalore – Medical
                                Oncology</b></h2>

                        <p>The cost of medical oncology treatment in Bangalore can vary significantly depending on
                            factors such as the type and stage of cancer, the chosen treatment plan, and the healthcare
                            facility. At reputed institutions like P.D. Hinduja Sindhi Hospital, patients have access to
                            comprehensive cancer care that includes chemotherapy, immunotherapy, radiation therapy, and
                            supportive treatments.</p>

                        <p>Chemotherapy is typically administered over multiple cycles—often four or more—based on the
                            oncologist’s recommendations. The hospital offers affordable chemotherapy options that
                            ensure high-quality care without financial strain. Under the expert guidance of leading
                            oncologists like <a href="dr-sampath-kumar-m-n.php">Dr. Sampath Kumar M.N.</a> and <a href="dr-anil-kumar.php">Dr. Anil Kumar</a>,
                            who are well-known for their expertise in treating complex cancers, patients receive
                            individualized treatment plans tailored to their specific medical and financial needs. Their
                            dedication to precision medicine and compassionate care makes them among the best oncology
                            doctors in Bangalore, helping patients navigate their journey toward recovery with
                            confidence.</p>

                    </div>
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">

                        <h2 class="service-details__sub-title"><b>Your Journey to Recovery Starts Here</b></h2>

                        <p>At P.D. Hinduja Sindhi Hospital, we are committed to providing the best medical oncology
                            treatment in Bangalore. With our expert oncology specialists, advanced technologies, and
                            personalized care approach, we are here to guide you through your cancer treatment with
                            compassion and expertise. Don’t wait—take the first step towards your recovery today.</p>
                    </div>

                    <!-- FAQ -->

                    <div class="service-details__faq">
                        <h3 class="service-details__faq__title service-details__sub-title">FAQs about Oncology Treatment
                        </h3>
                        <!-- /.service-details__sub-title -->
                        <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                            <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <div class="accordion-title">
                                    <h4>
                                        What are the treatment options for cancer?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Our oncology specialists provide a wide variety of treatment options,
                                            including chemotherapy, immunotherapy, targeted therapy, and radiation
                                            therapy.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                <div class="accordion-title">
                                    <h4>
                                        How long does chemotherapy take?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p> The duration of chemotherapy varies based on the type of cancer and
                                            treatment plan. Some cycles can take several weeks, while others may last
                                            longer.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        Is immunotherapy safe for cancer patients?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Immunotherapy is a safe and effective treatment for certain cancers, and our
                                            oncology specialists will evaluate if it’s the right choice for you.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        What is the success rate of cancer treatment at your hospital?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p> While the success rate depends on the type and stage of cancer, P.D. Hinduja Sindhi Hospital offers advanced treatment protocols with high success rates, backed by years of expertise.
                                        </p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->

                        </div><!-- /.faq-accordion -->
                    </div><!-- /.service-details__faq -->

                    

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
                                    <td colspan="5" style="text-align:center; padding:20px; color:#777;">
                                        No opd hours information is availble.
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div><!-- /.service-details__content -->
            </div><!-- /.col-md-12 col-lg-8 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-details section-space -->

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>