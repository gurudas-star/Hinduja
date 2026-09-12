<?php
require_once('parts/app/app.php');
// require_once('parts/preloader.php');
require_once('parts/scroll-top-scroll.php');
?>
<div class="page-wrapper">
    <div class="topbar-one">
        <div class="container-fluid">
            <div class="topbar-one__inner">
                <ul class="list-unstyled topbar-one__info">
                    <li>
                        <span class="topbar-one__info__icon">
                            <i class="icon-location"></i>
                        </span>
                        <a class="address-link"
                            href="https://www.google.com/maps/place/P+D+Hinduja+Sindhi+Hospital+%7C+Bengaluru,Karnataka/@12.9644866,77.5900629,849m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bae15d8e319913d:0x981f7d1f898b0c96!8m2!3d12.9644866!4d77.5926378!16s%2Fg%2F1tfblrf2?authuser=0&entry=ttu&g_ep=EgoyMDI2MDQxMy4wIKXMDSoASAFQAw%3D%3D">12th
                            Cross Rd, Sampangiramnagar, Bengaluru - 560 027</a>
                    </li>
                    <li>
                        <span class="topbar-one__info__icon topbar-one__info__icon--email">
                            <i class="icon-email"></i>
                        </span>
                        <a href="mailto:hindujasindhihospital@gmail.com">hindujasindhihospital@gmail.com</a>
                    </li>
                    <li>
                        <span class="topbar-one__info__icon">
                            <i class="icon-telephone"></i>
                        </span>

                        <a href="tel:+9108049030303">080 4903 0303</a>

                        <span class="contact-separator">|</span>

                        <a href="tel:+919886730303">98867 30303</a>

                        <a href="https://wa.me/919886730303" target="_blank" class="whatsapp-link">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                    <li class="language-switcher">
                        <select id="languageSwitcher">
                            <option value="en">English</option>
                            <option value="kn">ಕನ್ನಡ</option>
                        </select>
                    </li>
                </ul><!-- /.list-unstyled topbar-one__info -->
                <div class="topbar-one__right">
                    <div class="social-links">
                        <a href="https://www.facebook.com/sindhihospital">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            <span class="sr-only">Facebook</span>
                        </a>
                        <a href="https://x.com/HindujaHosp">
                            <i class="fab fa-x-twitter" aria-hidden="true"></i>
                            <span class="sr-only">X</span>
                        </a>
                        <a href="https://instagram.com/pdhindujasindhihospital">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                            <span class="sr-only">Instagram</span>
                        </a>
                        <a href="https://www.youtube.com/@pdhindujasindhihospital1213">
                            <i class="fab fa-youtube" aria-hidden="true"></i>
                            <span class="sr-only">Youtube</span>
                        </a>
                        <link rel="stylesheet"
                            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
                        <a href="https://www.linkedin.com/company/sindhi-hospital/">
                            <i class="fa-brands fa-linkedin" aria-hidden="true"></i>
                            <span class="sr-only">Linkedin</span>
                        </a>
                    </div><!-- /.topbar-one__social -->
                </div><!-- /.topbar-one__right -->
            </div><!-- /.topbar-one__inner -->
        </div><!-- /.container-fluid -->
    </div><!-- /.topbar-one -->

    <header class="main-header sticky-header sticky-header--normal">
        <div class="container-fluid">
            <div class="main-header__inner">
                <div class="main-header__logo logo-retina">
                    <a href="index.php">
                        <img src="assets/images/hinduja-logo.png" alt="Hinduja Logo"
                            style="width:200px; height:auto; object-fit:contain;">
                    </a>
                </div><!-- /.main-header__logo -->
                <div class="main-header__right">
                    <div class="main-header__sidebar-btn sidebar-btn__toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div><!-- /.sidebar-btn__toggler -->
                    <nav class="main-header__nav main-menu">
                        <?php require_once('parts/header/menu-two.php'); ?>
                    </nav><!-- /.main-header__nav -->
                    <div class="mobile-nav__btn mobile-nav__toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div><!-- /.mobile-nav__toggler -->
                    <a href="#" class="search-toggler main-header__search">
                        <i class="icon-search" aria-hidden="true"></i>
                        <span class="sr-only">Search</span>
                    </a>
                    <!-- /.search-toggler -->
                    <!-- /.search-toggler -->
                    <!-- <a href="cart.php" class="main-header__cart">
                            </a>
                                <i class="icon-cart" aria-hidden="true"></i>
                                <span class="sr-only">Shopping Cart</span> -->
                    <!-- <div class="main-header__call">
                                <span class="main-header__call__icon">
                                    <i class="icon-telephone"></i>
                                </span>
                                <div class="main-header__call__content">
                                    <p class="main-header__call__title">call emergency</p>
                                    <h4 class="main-header__call__number">
                                        <a href="tel:+208-555-0112">+208-555-0112</a>
                                    </h4>
                                </div>
                            </div> -->
                    <a href="" class="mediox-btn main-header__btn" style="background:#de0808 !important;">
                        <span>Emergency</span>
                        <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                    </a><!-- /.mediox-btn -->
                </div><!-- /.main-header__right -->
            </div><!-- /.main-header__inner -->
        </div><!-- /.container-fluid -->
    </header><!-- /.main-header -->

    <!-- OPD Announcement Bar -->
    <div class="opd-announcement-bar">
        <marquee behavior="scroll" direction="left" scrollamount="6">
            <span class="opd-icon">📍</span>
            Looking for Evening OPD in Bangalore at P. D. Hinduja Sindhi Hospital?
            <a href="news.php">Click here for details</a>
            <span class="opd-time">🕒</span>
        </marquee>
    </div>

    <!-- Emergency Modal -->
    <div id="emergencyModal" class="emergency-modal">
        <div class="emergency-modal-content">
            <div class="emergency-modal-header">
                <h3>
                    <i class="icon-alarm"></i>
                    Emergency Contact
                </h3>
                <span class="emergency-modal-close">&times;</span>
            </div>
            <div class="emergency-modal-body">
                <div class="emergency-number">
                    <i class="icon-phone-call"></i>
                    <span>080 4903 0303</span>
                </div>
                <div class="emergency-message">
                    <p>In times of medical emergencies, every second counts. Whether it's an accident, sudden illness,
                        or critical care need, immediate help can make all the difference. Our team is ready 24/7 to
                        assist you with urgent medical support, transportation, or guidance. With trained professionals,
                        rapid response, and compassion at the core, we're just a phone call away. Don't wait—reach out
                        for fast and reliable medical assistance whenever you need it. Your health and safety are our
                        priority.</p>
                    <p class="emergency-call-text">Call us now at <strong>080 4903 0303</strong> – because emergencies
                        can't wait.</p>
                </div>
            </div>
            <div class="emergency-modal-footer">
                <a href="tel:08049030303" class="mediox-btn emergency-call-btn">
                    <span>Call Now</span>
                    <span class="mediox-btn__icon"><i class="icon-phone-call"></i></span>
                </a>
                <button class="mediox-btn emergency-close-btn">
                    <span>Close</span>
                    <span class="mediox-btn__icon"><i class="icon-close"></i></span>
                </button>
            </div>
        </div>
    </div>
    <script>
        // Emergency Modal Functionality
        (function () {
            // Get modal elements
            const modal = document.getElementById('emergencyModal');
            const closeBtn = document.querySelector('.emergency-modal-close');
            const closeBtns = document.querySelectorAll('.emergency-close-btn');

            // Get all emergency buttons (in case you have multiple)
            const emergencyBtns = document.querySelectorAll('.main-header__btn');

            // Function to open modal
            function openModal(e) {
                if (e) e.preventDefault();
                if (modal) {
                    modal.style.display = 'block';
                    document.body.style.overflow = 'hidden'; // Prevent scrolling
                }
            }

            // Function to close modal
            function closeModal() {
                if (modal) {
                    modal.style.display = 'none';
                    document.body.style.overflow = ''; // Restore scrolling
                }
            }

            // Add click event to all emergency buttons
            emergencyBtns.forEach(btn => {
                btn.addEventListener('click', openModal);
            });

            // Close modal when clicking X
            if (closeBtn) {
                closeBtn.addEventListener('click', closeModal);
            }

            // Close modal when clicking Close button
            closeBtns.forEach(btn => {
                btn.addEventListener('click', closeModal);
            });

            // Close modal when clicking outside the modal content
            window.addEventListener('click', function (e) {
                if (e.target === modal) {
                    closeModal();
                }
            });

            // Close modal with Escape key
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && modal && modal.style.display === 'block') {
                    closeModal();
                }
            });
        })();
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            const searchItems = [
                // Doctors
                { name: "Dr. Anita Dias", url: "dr-anita-dias.php", type: "Doctor" },
                { name: "Dr. Abhishek N.", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Prakash Babu M.N.", url: "dr-Prakash-babu-MN.php", type: "Doctor" },
                { name: "Dr. Preetham Raj", url: "dr-Preetham-raj.php", type: "Doctor" },
                { name: "Dr. N. Praveenkumar", url: "dr-N-praveenkumar.php", type: "Doctor" },
                { name: "Dr. Ambuja B.N", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Sharmila S", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Bhuvaneshwari", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Bhavya K.S", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Deepthi Laldayal", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Sheila Peter", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Annie Joji", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Uday Kumar", url: "dr-uday-kumar-SB.php", type: "Doctor" },
                { name: "Dr. Manohar C.V.", url: "dr-manohar-cv.php", type: "Doctor" },
                { name: "Dr. Vineetha J Malayil", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Conrad J Rasquinha", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Dhanpal", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Sharath", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Varun Manjunath", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Preethan K.N.", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Ramesh Ranganathan", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Jeevak Shetty", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Keerthana Devasani", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Raghunandan", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Krishnaveni", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Nikhil Dhanpal", url: "doctors.php", type: "Doctor" },
                { name: "Dr. V K Srinivas", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Ramakrishna Vignesh M", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Adrian Mario Dsouza", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Vishal Kulgod", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Umesh", url: "doctors.php", type: "Doctor" },
                { name: "Dr. Avinash Sharma", url: "doctors.php", type: "Doctor" },
                { name: "Mr. Mohammed Asfaque Patel", url: "doctors.php", type: "Audiologist" },
                { name: "Dr. Varun Kumar", url: "doctors.php", type: "Doctor" },
                { name: "Ms. Arshiya B.E", url: "doctors.php", type: "Dietician" },
                { name: "Dr. Sampath Kumar M.N.", url: "dr-sampath-kumar-m-n.php", type: "Doctor" },
                { name: "Dr. Anil Kumar N.", url: "dr-anil-kumar.php", type: "Doctor" },
                { name: "Dr. Santhosh Saklecha", url: "doctors.php", type: "Doctor" },

                // Specialties / Departments
                { name: "Internal Medicine", url: "internal-medicine.php", type: "Specialty" },
                { name: "General Surgery", url: "general-surgery.php", type: "Specialty" },
                { name: "Obstetrics & Gynaecology", url: "obstetrics-gynaecology.php", type: "Specialty" },
                { name: "Family Medicine", url: "family-medicine.php", type: "Specialty" },
                { name: "General Pediatric", url: "general-pediatrics.php", type: "Specialty" },
                { name: "Orthopedic", url: "orthopaedics.php", type: "Specialty" },
                { name: "Orthopaedics", url: "orthopaedics.php", type: "Specialty" },
                { name: "ENT", url: "ent.php", type: "Specialty" },
                { name: "Ear Nose Throat", url: "ent.php", type: "Specialty" },
                { name: "Urology", url: "urology.php", type: "Specialty" },
                { name: "Dental Surgery", url: "dental-surgery.php", type: "Specialty" },
                { name: "Emergency Services", url: "emergency-services.php", type: "Specialty" },

                // Super Specialties
                { name: "Medical Oncology & Hematology", url: "medical-oncology-hematology.php", type: "Super Specialty" },
                { name: "Neurology", url: "neurology.php", type: "Super Specialty" },
                { name: "Medical Gastroenterology", url: "medical-gastroenterology.php", type: "Super Specialty" },
                { name: "Neuro Surgery", url: "neuro-surgery.php", type: "Super Specialty" },
                { name: "Plastic Surgery", url: "plastic-surgery.php", type: "Super Specialty" },
                { name: "Oncology Services", url: "oncology-services.php", type: "Super Specialty" },
                { name: "Cardiology", url: "cardiology.php", type: "Super Specialty" },
                { name: "Pulmonology", url: "pulmonology.php", type: "Super Specialty" },
                { name: "Nephrology", url: "nephrology.php", type: "Super Specialty" },

                // Other Hospital Services
                { name: "Level 3 Intensive Care Unit", url: "intensive-care-unit.php", type: "Service" },
                { name: "Emergency Ambulance Services", url: "emergency-ambulance-services.php", type: "Service" },
                { name: "CT Scan", url: "ct-scan.php", type: "Service" },
                { name: "Level 3 ICU", url: "level-3-icu.php", type: "Service" },
                { name: "Emergency Room", url: "emergency-room.php", type: "Service" },
                { name: "Laboratory Services", url: "laboratory-services.php", type: "Service" },
                { name: "Doppler", url: "doppler.php", type: "Service" },
                { name: "Echocardiography", url: "echocardiography.php", type: "Service" },
                { name: "Physiotherapy", url: "physiotherapy.php", type: "Service" },
                { name: "X-Ray", url: "x-ray.php", type: "Service" },
                { name: "Ultrasound", url: "ultrasound.php", type: "Service" },
                { name: "Pharmacy", url: "pharmacy.php", type: "Service" },
            ];

            const searchInput = document.getElementById("search");
            const resultsBox = document.getElementById("searchResults");

            if (!searchInput || !resultsBox) {
                console.log("Search elements not found");
                return;
            }

            searchInput.addEventListener("input", function () {

                const keyword = this.value.toLowerCase().trim();

                resultsBox.innerHTML = "";

                if (keyword.length < 2) {
                    resultsBox.style.display = "none";
                    return;
                }

                const matches = searchItems.filter(item =>
                    item.name.toLowerCase().includes(keyword)
                );

                if (matches.length === 0) {
                    resultsBox.innerHTML =
                        '<div class="search-result-item">No Results Found</div>';
                    resultsBox.style.display = "block";
                    return;
                }

                matches.forEach(item => {

                    const div = document.createElement("div");

                    div.className = "search-result-item";

                    div.innerHTML =
                        item.name + ' <small>(' + item.type + ')</small>';

                    div.addEventListener("click", function () {
                        window.location.href = item.url;
                    });

                    resultsBox.appendChild(div);
                });

                resultsBox.style.display = "block";
            });

        });
    </script>
    <div id="google_translate_element" style="display:none;"></div>

    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'kn,en',
                autoDisplay: false
            }, 'google_translate_element');
        }
        setInterval(function () {

            var banner = document.querySelector(".goog-te-banner-frame");
            if (banner) {
                banner.style.display = "none";
            }

            document.body.style.top = "0px";

        }, 100);
    </script>

    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script src="assets/js/language.js"></script>