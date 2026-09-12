<section class="main-slider-one">
    <div class="main-slider-one__carousel mediox-owl__carousel mediox-owl__carousel--basic-nav owl-carousel owl-theme"
        data-owl-options='{
            "items": 1,
            "margin": 0,
            "animateIn": "fadeIn",
            "animateOut": "fadeOut",
            "loop": true,
            "smartSpeed": 800,
            "nav": false,
            "dots": true,
            "autoplay": true,
            "autoplayTimeout": 6000
        }'>

        <!-- SLIDE 1 -->
        <div class="main-slider-one__item main-slider-one__item--slide-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-9">
                        <div class="main-slider-one__content">
                            <div class="main-slider-one__badge">
                                <i class="fas fa-hospital-alt"></i> 25+ Expert Medical & Super Specialities
                            </div>
                            <h1 class="main-slider-one__title">
                                Best Multispeciality <br>Hospital In Bangalore
                            </h1>
                            <p class="main-slider-one__text">
                                Trusted by generations of families and recognised among Bangalore's Top 15 Multispeciality Hospitals by the Times Health Survey. We combine experienced specialists, advanced medical technology, and compassionate care.
                            </p>
                            <div class="main-slider-one__actions">
                                <a href="specialties.php" class="main-slider-one__btn mediox-btn">
                                    <span>View All Specialties</span>
                                    <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                                </a>
                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="hero-video-link video-popup">
                                    <span class="hero-video-icon"><i class="fas fa-play"></i></span>
                                    <span class="hero-video-text">Watch Video</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 d-none d-lg-block text-end">
                        <div class="hero-floating-card">
                            <div class="hero-floating-card__icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <div class="hero-floating-card__content">
                                <h3>62+ Years</h3>
                                <p>Of Trusted Healthcare</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SLIDE 2 -->
        <div class="main-slider-one__item main-slider-one__item--slide-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-9">
                        <div class="main-slider-one__content">
                            <div class="main-slider-one__badge">
                                <i class="fas fa-truck-medical"></i> 24×7 Critical & Trauma Care
                            </div>
                            <h1 class="main-slider-one__title">
                                Advanced Trauma & <br>Emergency Care In Bangalore
                            </h1>
                            <p class="main-slider-one__text">
                                Our ICU on Wheels is equipped with the latest critical care technology and supported by experienced emergency physicians and paramedics. Rapid-response ambulance services ensure timely, reliable, and life-saving care.
                            </p>
                            <div class="main-slider-one__actions">
                                <a href="emergency-services.php" class="main-slider-one__btn mediox-btn">
                                    <span>Emergency Services</span>
                                    <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                                </a>
                                <a href="tel:08049030303" class="hero-video-link hero-emergency-link">
                                    <span class="hero-video-icon"><i class="fas fa-phone-alt"></i></span>
                                    <span class="hero-video-text">080 4903 0303</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 d-none d-lg-block text-end">
                        <div class="hero-floating-card">
                            <div class="hero-floating-card__icon">
                                <i class="fas fa-heart-pulse"></i>
                            </div>
                            <div class="hero-floating-card__content">
                                <h3>24×7 ICU</h3>
                                <p>On Wheels & Emergency</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="feature-overlap">
    <div class="container">
        <div class="feature-overlap__wrapper">
            <div class="row">

                <!-- CARD 1 -->
                <div class="col-md-4">
                    <div class="feature-card">
                        <span class="feature-tag">Care</span>
                        <h4>Personalized Attention to Your Well-being</h4>
                        <p>
                            Exceptional healthcare begins with understanding every patient. We listen with empathy,
                            respect your individual needs, and provide personalised care that supports your health,
                            comfort, and recovery at every stage of your journey.
                        </p>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="col-md-4">
                    <div class="feature-card">
                        <span class="feature-tag">Competence</span>
                        <h4>24/7 Excellence in Quality Care</h4>
                        <p>
                            Personalised care is strengthened by clinical excellence. Our experienced specialists,
                            advanced medical technology, and evidence-based approach work together to deliver safe,
                            timely, and high-quality treatment with round-the-clock care.
                        </p>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="col-md-4">
                    <div class="feature-card">
                        <span class="feature-tag">Compassion</span>
                        <h4>Emergency Support with Urgent Care</h4>
                        <p>
                            Beyond medical expertise, we believe every patient deserves reassurance and compassionate
                            support. Whether responding to an emergency or guiding recovery, our dedicated teams are
                            always ready to provide timely care with empathy, professionalism, and confidence
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Evening OPD Popup -->
<div id="opdPopup" class="opd-popup-overlay">
    <div class="opd-popup-box">
        <span class="opd-popup-close">&times;</span>
        <h2>EVENING OPD SERVICES</h2>
        <img src="assets/images/opd-popup.jpg" alt="Evening OPD">
        <p>
            Looking for Evening OPD in Bangalore?
            <a href="news.php">Click here for details.</a>
        </p>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {

        const popup = document.getElementById("opdPopup");
        const closeBtn = document.querySelector(".opd-popup-close");

        closeBtn.addEventListener("click", function () {
            popup.style.display = "none";
        });

    });
</script>