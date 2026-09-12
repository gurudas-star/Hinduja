<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Laboratory Service" ?>
<?php $body_class = "custom-cursor" ?>
<?php
$home = true;
?>
<!-- Header Here -->
<?php require_once('parts/header/header-four.php'); ?>

<section class="page-header">
    <div class="container-fluid">
        <div class="page-header__inner">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/services-breadcrumb.png);"></div><!-- /.page-header__bg -->
            <div class="container">
                <div class="page-header__content">
                    <h2 class="page-header__title">Laboratory Services</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span><a href="specialties.php">Specialties</a></span></li>
                        <li><span>Laboratory Services</span></li>
                    </ul><!-- /.mediox-breadcrumb list-unstyled -->
                </div><!-- /.page-header__content -->
            </div><!-- /.container -->
        </div><!-- /.page-header__inner -->
    </div><!-- /.container-fluid -->
</section><!-- /.page-header -->

<section class="service-details section-space">
    <div class="container">
        <div class="row gutter-y-50">
            <?php require_once('parts/app/service-sider.php'); ?>
            <div class="col-md-12 col-lg-8">
                <div class="service-details__content">
                    <div class="service-details__inner">
                        <div class="service-details__thumbnail wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                            <img src="assets/images/services/laboratory-services-readmore.png" alt="Laboratory Services">
                        </div><!-- /.service-details__thumbnail -->
                        <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                            <h1 class="service-details__title">Laboratory Services at P.D. Hinduja Sindhi Hospital, Bengaluru</h1><!-- /.service-details__title -->
                            <p class="service-details__text">At P.D. Hinduja Sindhi Hospital in Bengaluru, our Laboratory Services are dedicated to delivering accurate and reliable diagnostic results, which are crucial for effective patient care. With state-of-the-art equipment and a Team of highly qualified Pathologists and Lab Technicians, we ensure that every test is conducted with the highest standards of precision and efficiency. Our laboratory services are a cornerstone of our Healthcare offerings.</p><!-- /.service-details__text -->
                        </div><!-- /.service-details__content__box -->
                    </div><!-- /.service-details__inner -->
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <h3 class="service-details__sub-title">Understanding Laboratory Services</h3><!-- /.service-details__sub-title -->
                        <p class="service-details__text">Laboratory services involve a wide range of tests that analyze samples such as blood, urine, tissue, and other bodily fluids. These tests are essential for diagnosing diseases, monitoring health conditions, and guiding treatment decisions. From routine blood tests to specialized investigations, our Laboratory Services play a critical role in your healthcare journey.</p><!-- /.service-details__text -->
                    </div>
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <h3 class="service-details__sub-title">How should I prepare for my laboratory test?</h3><!-- /.service-details__sub-title -->
                        <p class="service-details__text">Preparation for a laboratory test may vary depending on the type of test. You may be asked to follow specific instructions, such as fasting or avoiding certain medications. Our team will provide all necessary pre-test guidelines to ensure accurate results.</p><!-- /.service-details__text -->
                    </div>
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <h3 class="service-details__sub-title">Post-Test Care</h3><!-- /.service-details__sub-title -->
                        <p class="service-details__text">After your test, you can resume normal activities unless instructed otherwise. If you have any concerns or questions regarding your test results, our Healthcare Team is available to provide support and guidance. We also recommend follow-up consultations to discuss your results and any further steps in your care plan.</p><!-- /.service-details__text -->
                    </div>
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <h3 class="service-details__sub-title">Laboratory Services We have</h3>
                    </div>
                    <div class="service-details__info">
                        <div class="lab-search">
                            <input type="text" id="searchLab" placeholder="Search Test Name...">
                        </div>

                        <div class="lab-grid" id="labList">

                            <div class="lab-item"><i class="icon-check"></i> Hematology</div>
                            <div class="lab-item"><i class="icon-check"></i> Reticulocyte Count</div>
                            <div class="lab-item"><i class="icon-check"></i> Haemoglobin</div>
                            <div class="lab-item"><i class="icon-check"></i> PCV</div>
                            <div class="lab-item"><i class="icon-check"></i> RBC Count</div>
                            <div class="lab-item"><i class="icon-check"></i> MCV</div>
                            <div class="lab-item"><i class="icon-check"></i> MCH</div>
                            <div class="lab-item"><i class="icon-check"></i> MCHC</div>
                            <div class="lab-item"><i class="icon-check"></i> R.D.W</div>
                            <div class="lab-item"><i class="icon-check"></i> Corrected TLC</div>
                            <div class="lab-item"><i class="icon-check"></i> Neutrophils</div>
                            <div class="lab-item"><i class="icon-check"></i> Lymphocytes</div>
                            <div class="lab-item"><i class="icon-check"></i> Eosinophils</div>
                            <div class="lab-item"><i class="icon-check"></i> Monocytes</div>
                            <div class="lab-item"><i class="icon-check"></i> Platelet Count</div>
                            <div class="lab-item"><i class="icon-check"></i> ESR</div>
                            <div class="lab-item"><i class="icon-check"></i> Peripheral Smear</div>
                            <div class="lab-item"><i class="icon-check"></i> Malarial Parasite</div>
                            <div class="lab-item"><i class="icon-check"></i> Basophils</div>
                            <div class="lab-item"><i class="icon-check"></i> Blasts</div>
                            <div class="lab-item"><i class="icon-check"></i> Pro-myelocytes</div>
                            <div class="lab-item"><i class="icon-check"></i> Myelocytes</div>
                            <div class="lab-item"><i class="icon-check"></i> Meta-Myelocytes</div>
                            <div class="lab-item"><i class="icon-check"></i> Bands</div>
                            <div class="lab-item"><i class="icon-check"></i> Pro-Lymphocytes</div>
                            <div class="lab-item"><i class="icon-check"></i> Atypical Cells</div>                            
                            <div class="lab-item"><i class="icon-check"></i> Total Leucocyte Count</div>
                            <div class="lab-item"><i class="icon-check"></i> Absolute Leucocyte Count</div>
                            <div class="lab-item"><i class="icon-check"></i> Neutrophil Lymphocyte Ratio</div>                                                       
                            <div class="lab-item"><i class="icon-check"></i> Complete Blood Count</div>
                            <div class="lab-item"><i class="icon-check"></i> Absolute Leucocytes Count</div>
                            <div class="lab-item"><i class="icon-check"></i> Prothrombin Time (PT)</div>
                            <div class="lab-item"><i class="icon-check"></i> Neutrophil Lymphocytes Ratio</div>
                            <div class="lab-item"><i class="icon-check"></i> Activated Partial Thromboplastin Time (APTT)</div>                            
                            <div class="lab-item"><i class="icon-check"></i> Blood Grouping - Forward & Reverse Grouping</div>

                        </div>
                        <script>
                            document.getElementById("searchLab").addEventListener("keyup", function() {
                                let value = this.value.toLowerCase();
                                let items = document.querySelectorAll(".lab-item");

                                items.forEach(function(item) {
                                    item.style.display = item.innerText.toLowerCase().includes(value) ? "block" : "none";
                                });
                            });
                        </script>
                    </div><!-- /.service-details__info -->
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <h3 class="service-details__sub-title">Why Choose P.D. Hinduja Sindhi Hospital for Your Laboratory Services?</h3><!-- /.service-details__sub-title -->
                        <p class="service-details__text"><strong>Patient-Centered Care:</strong> At P.D. Hinduja Sindhi Hospital, we prioritize the comfort and convenience of our patients. Our lab processes are designed to be efficient, minimizing wait time and ensuring a seamless experience from sample collection to result delivery.</p><!-- /.service-details__text -->
                        <p class="service-details__text"><strong>Advanced Technology:</strong> Our laboratory is equipped with the latest diagnostic instruments, allowing us to perform a wide spectrum of tests with high accuracy and efficiency. This advanced technology supports timely and precise diagnoses, ensuring your Consultant Doctors have the essential information needed for informed decision-making.</p><!-- /.service-details__text -->
                        <p class="service-details__text"><strong>Expert Team:</strong> Our Laboratory Staff includes experienced Pathologists, Biochemists, and Skilled Technicians who are experts in their respective fields. Their dedication to maintaining the highest quality standards ensures that every test result is accurate and dependable.</p><!-- /.service-details__text -->
                        <p class="service-details__text"><strong>Quality Testing Services:</strong> We offer an extensive range of laboratory tests, including hematology, biochemistry, microbiology, serology, and pathology. Whether it’s routine health screenings or complex diagnostic tests, our services are tailored to meet the diverse needs of our patients.</p>
                        <p class="service-details__text"><strong>Quality Assurance:</strong> Our laboratory follows rigorous quality control protocols to guarantee the accuracy and reliability of every test. We are committed to upholding the highest standards of laboratory practice, ensuring consistent and trustworthy results.</p>
                    </div>

                    <div class="service-details__faq">
                        <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3><!-- /.service-details__sub-title -->
                        <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                            <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <div class="accordion-title">
                                    <h4>
                                        Are laboratory tests safe?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Yes, laboratory tests are safe. Our Skilled Technicians use sterile equipment and follow strict protocols to ensure your safety during sample collection.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                <div class="accordion-title">
                                    <h4>
                                        What if I have questions about my test result?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>If you have any questions or concerns about your test results, our Healthcare Team is here to assist. We encourage you to discuss your results with your Consultant Doctors, who will provide detailed explanations and recommendations.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        What is the process for sample collection?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Our skilled Phlebotomists and Lab Technicians will collect the required samples with the utmost care and professionalism, ensuring your comfort throughout the process.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        What happens after my samples are collected?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Once the samples are collected, they are processed and analyzed using advanced laboratory equipment. Our Team of Experts carefully reviews the results to ensure accuracy before reporting them.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        How will I receive my test results?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Test results are typically available within a short period, depending on the complexity of the test. You can access your results through our secure online portal, or they can be sent directly to your referring Doctors.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                        </div><!-- /.faq-accordion -->
                    </div><!-- /.service-details__faq -->
                </div><!-- /.service-details__content -->
            </div><!-- /.col-md-12 col-lg-8 -->
            <p class="service-details__text-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">At P.D. Hinduja Sindhi Hospital, our Laboratory Services are a testament to our commitment to care, competence, and compassion. Trust us to provide accurate and timely diagnostic information, essential for your health and well-being.</p>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-details section-space -->

<?php require_once('parts/app/service-footer-doctor.php') ?>

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>