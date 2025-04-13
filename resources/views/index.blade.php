<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>Opulent Odyssey</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    @include('components.header')

    <section id="section-1">
        <div class="content-slider">
            <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
            <input type="radio" id="banner2" class="sec-1-input" name="banner">
            <input type="radio" id="banner3" class="sec-1-input" name="banner">
            <input type="radio" id="banner4" class="sec-1-input" name="banner">
            <div class="slider">
                <div id="top-banner-1" class="banner">
                    <div class="banner-inner-wrapper header-text">
                        <div class="main-caption">
                            <h2>Walk through time, explore India's glorious past:</h2>
                            <h1> Heritage & History</h1>
                            <div class="border-button"><a href="{{ route('heritage') }}">Go There</a></div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="more-info">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-user"></i>
                                                <h4><span>Population:</span><br>44.48 M</h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-globe"></i>
                                                <h4><span>Territory:</span><br>275.400 KM<em>2</em></h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-home"></i>
                                                <h4><span>AVG Price:</span><br>₹7,20,000</h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <div class="main-button">
                                                    <a href="{{ route('about') }}">Explore More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="top-banner-2" class="banner">
                    <div class="banner-inner-wrapper header-text">
                        <div class="main-caption">
                            <h2>Unleash your spirit, trek, dive, and roam in India's wild beauty:</h2>
                            <h1>Nature & Adventure</h1>
                            <div class="border-button"><a href="{{ route('nature') }}">Go There</a></div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="more-info">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-user"></i>
                                                <h4><span>Population:</span><br>8.66 M</h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-globe"></i>
                                                <h4><span>Territory:</span><br>41.290 KM<em>2</em></h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-home"></i>
                                                <h4><span>AVG Price:</span><br>₹8,30,000</h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <div class="main-button">
                                                    <a href="{{ route('about') }}">Explore More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="top-banner-3" class="banner">
                    <div class="banner-inner-wrapper header-text">
                        <div class="main-caption">
                            <h2>Find your soul’s calling in the sacred and serene heart of India:</h2>
                            <h1> Spiritual & Wellness</h1>
                            <div class="border-button"><a href="{{ route('spiritual') }}">Go There</a></div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="more-info">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-user"></i>
                                                <h4><span>Population:</span><br>67.41 M</h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-globe"></i>
                                                <h4><span>Territory:</span><br>551.500 KM<em>2</em></h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-home"></i>
                                                <h4><span>AVG Price:</span><br>₹3,50,000</h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <div class="main-button">
                                                    <a href="{{ route('about') }}">Explore More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="top-banner-4" class="banner">
                    <div class="banner-inner-wrapper header-text">
                        <div class="main-caption">
                            <h2>Experience the flavors, colors, and rhythms of vibrant India:</h2>
                            <h1>Modern & Cultural India</h1>
                            <div class="border-button"><a href="{{ route('modern') }}">Go There</a></div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="more-info">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-user"></i>
                                                <h4><span>Population:</span><br>69.86 M</h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-globe"></i>
                                                <h4><span>Territory:</span><br>513.120 KM<em>2</em></h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-home"></i>
                                                <h4><span>AVG Price:</span><br>₹1,25,000</h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <div class="main-button">
                                                    <a href="{{ route('about') }}">Explore More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="controls">
                    <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span
                            class="text">1</span></label>
                    <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span><span
                            class="text">2</span></label>
                    <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span><span
                            class="text">3</span></label>
                    <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span><span
                            class="text">4</span></label>
                </div>
            </nav>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2025 Opulent Odyssey Travel Company. All rights reserved. </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        function bannerSwitcher() {
            next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
            if (next.length) next.prop('checked', true);
            else $('.sec-1-input').first().prop('checked', true);
        } var bannerTimer = setInterval(bannerSwitcher, 5000); $('nav .controls label').click(function () {
            clearInterval(bannerTimer);
            bannerTimer = setInterval(bannerSwitcher, 5000)
        });
    </script>
</body>

</html>