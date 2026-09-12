<section class="testimonials-one section-space">
    <div class="container">
        <!-- TITLE -->
        <div class="sec-title sec-title--center text-center wow fadeInUp" data-wow-duration="1500ms">
            <div class="sec-title__top justify-content-center">
                <h6 class="sec-title__tagline">Patient Stories & Videos</h6>
            </div>
            <h3 class="sec-title__title">Healthcare Insights & Testimonials</h3>
        </div>

        <!-- CAROUSEL -->
        <div class="testimonials-one__carousel mediox-owl__carousel mediox-owl__carousel--basic-nav owl-theme owl-carousel"
            data-owl-options='{
                "items": 3,
                "margin": 30,
                "smartSpeed": 700,
                "loop": true,
                "autoplay": true,
                "autoplayTimeout": 4000,
                "nav": false,
                "dots": true,
                "responsive":{
                    "0":{"items":1},
                    "768":{"items":2},
                    "1200":{"items":3}
                }
            }'>

            <!-- VIDEO ITEM -->
            <div class="item">
                <div class="video-card">
                    <div class="video-card__thumb">
                        <!-- YOUTUBE THUMBNAIL -->
                        <img src="assets/images/blog/sddefault.jpeg" alt="video">
                        <!-- VIDEO LINK -->
                        <a href="https://www.youtube.com/watch?v=SHx8CO28gEc" class="video-popup">
                            <span class="video-play-btn"><i class="fas fa-play"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="video-card">
                    <div class="video-card__thumb">
                        <!-- YOUTUBE THUMBNAIL -->
                        <img src="assets/images/blog/cLfrS4BnYS4-SD.jpeg" alt="video">
                        <!-- VIDEO LINK -->
                        <a href="https://www.youtube.com/watch?v=cLfrS4BnYS4" class="video-popup">
                            <span class="video-play-btn"><i class="fas fa-play"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="video-card">
                    <div class="video-card__thumb">
                        <!-- YOUTUBE THUMB -->
                        <img src="assets/images/blog/21f9y9Mxn-A-SD.jpeg" alt="video">
                        <!-- VIDEO LINK -->
                        <a href="https://www.youtube.com/watch?v=21f9y9Mxn-A" class="video-popup">
                            <span class="video-play-btn"><i class="fas fa-play"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="video-card">
                    <div class="video-card__thumb">
                        <!-- YOUTUBE THUMB -->
                        <img src="assets/images/blog/mLEvlw7RxAA-SD.jpeg" alt="video">
                        <!-- VIDEO LINK -->
                        <a href="https://www.youtube.com/watch?v=mLEvlw7RxAA" class="video-popup">
                            <span class="video-play-btn"><i class="fas fa-play"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="video-card">
                    <div class="video-card__thumb">
                        <!-- YOUTUBE THUMB -->
                        <img src="assets/images/blog/BP6sDChMPOA-HQ.jpeg" alt="video">
                        <!-- VIDEO LINK -->
                        <a href="https://www.youtube.com/watch?v=BP6sDChMPOA" class="video-popup">
                            <span class="video-play-btn"><i class="fas fa-play"></i></span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- MAP SECTION START -->
<section class="location-map-section" style="background:#f8f9fb;">

    <div class="container">

        <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms">
            <div class="sec-title__top">
                <img src="assets/images/shapes/sec-title-s-1-1.png" alt="">
                <h6 class="sec-title__tagline">Location</h6>
            </div>

            <h3 class="sec-title__title">
                Areas We Serve
            </h3>

            <p>
                P. D. Hinduja Sindhi Hospital serves patients from Shanti Nagar,
                Basavanagudi, Malleshwaram and Indiranagar.
            </p>
        </div>

        <div id="hospitalMap"
            style="width:100%;height:550px;border-radius:15px;overflow:hidden;box-shadow:0 15px 35px rgba(0,0,0,.12);">
        </div>

    </div>

</section>

<script>

function initMap(){

    const hospital={
        lat:12.9644866,
        lng:77.5926378
    };

    const map=new google.maps.Map(document.getElementById("hospitalMap"),{

        zoom:12,
        center:hospital,
        mapTypeId:"roadmap"

    });

    // Hospital Marker
    new google.maps.Marker({

        position:hospital,
        map:map,
        title:"P. D. Hinduja Sindhi Hospital",

        icon:"https://maps.google.com/mapfiles/ms/icons/red-dot.png"

    });

    const locations=[

        {
            name:"Shanti Nagar",
            lat:12.9578,
            lng:77.5924
        },

        {
            name:"Basavanagudi",
            lat:12.9417,
            lng:77.5736
        },

        {
            name:"Malleshwaram",
            lat:13.0035,
            lng:77.5706
        },

        {
            name:"Indiranagar",
            lat:12.9784,
            lng:77.6408
        }

    ];

    locations.forEach(function(place){

        new google.maps.Marker({

            position:{
                lat:place.lat,
                lng:place.lng
            },

            map:map,

            title:place.name,

            icon:"https://maps.google.com/mapfiles/ms/icons/blue-dot.png"

        });

        new google.maps.Circle({

            strokeColor:"#18BFD5",
            strokeOpacity:0.9,
            strokeWeight:2,

            fillColor:"#18BFD5",
            fillOpacity:0.20,

            map:map,

            center:{
                lat:place.lat,
                lng:place.lng
            },

            radius:1200

        });

    });

}
</script>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXnlMbgnC8gUJzmrcBgr4BiIJIBu6LgZc&callback=initMap">
</script>

<!-- MAP SECTION END -->