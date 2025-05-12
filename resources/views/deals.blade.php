<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Opulent Odyssey - Special Deals</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
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
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    @include('components.header')
    <!-- ***** Header Area End ***** -->

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Discover Our Weekly Offers</h4>
                    <h2>Amazing Prices &amp; More</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="search-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form id="search-form" name="gs" method="submit" role="search" action="#">
                        <div class="row">
                            <div class="col-lg-2">
                                <h4>Sort Deals By:</h4>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <select name="Location" class="form-select" aria-label="Default select example"
                                        id="chooseLocation" onChange="this.form.click()">
                                        <option selected>Destinations</option>
                                        <option type="checkbox" name="option1" value="Delhi">Delhi</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Agra">Agra</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Himalayas">Himalayas</option>
                                        <option value="Sundarbans">Sundarbans</option>
                                        <option value="Andaman and Nicobar">Andaman and Nicobar</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Varanasi">Varanasi</option>
                                        <option value="Amritsar">Amritsar</option>
                                        <option value="Tirumala">Tirumala</option>
                                        <option value="Badrinath">Badrinath</option>
                                        <option value="Dwarka">Dwarka</option>
                                        <option value="Rameshwaram">Rameshwaram</option>
                                        <option value="Jagannath Puri">Jagannath Puri</option>
                                        <option value="Mumbai">Mumbai</option>
                                        <option value="Banglore">Banglore</option>
                                        <option value="Jaipur">Jaipur</option>
                                        <option value="Hyderabad">Hyderabad</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <select name="Price" class="form-select" aria-label="Default select example"
                                        id="choosePrice" onChange="this.form.click()">
                                        <option selected>Price Range</option>
                                        <option value="100">$100 - $250</option>
                                        <option value="250">$250 - $500</option>
                                        <option value="500">$500 - $1,000</option>
                                        <option value="1000">$1,000 - $2,500</option>
                                        <option value="2500+">$2,500+</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset>
                                    <button class="border-button">Search Results</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->

    <div class="amazing-deals">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading text-center">
                        <h2 class="text-white">Best Weekly Offers In Each City</h2>
                        <p>Discover the vibrant landscapes, rich heritage, and cultural wonders of India with our
                            expertly crafted travel experiences.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="image">
                                    <img src="assets\images\lotus.jpg" alt="img 1">
                                    <img src="assets\images\Delhi.avif" alt="img 2">
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="content">
                                    <span class="info">*Limited Offer Today</span>
                                    <h4>Delhi</h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <i class="fa fa-clock"></i>
                                            <span class="list">5 Days</span>
                                        </div>
                                        <div class="col-6">
                                            <i class="fa fa-map"></i>
                                            <span class="list">Daily Places</span>
                                        </div>
                                    </div>
                                    <p>Experience Delhi's rich heritage, from majestic Mughal monuments to vibrant
                                        markets and modern marvels.</p>
                                    <div class="main-button">
                                        <a href="{{ route('reservation') }}">Make a Reservation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="image">
                                    <img src="assets\images\Badrinath.jpg" alt="img 1">
                                    <img src="assets\images\Dwaraka.jpg" alt="img 2">
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="content">
                                    <span class="info">*Today & Tomorrow Only</span>
                                    <h4>Char Dham</h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <i class="fa fa-clock"></i>
                                            <span class="list">5 Days</span>
                                        </div>
                                        <div class="col-6">
                                            <i class="fa fa-map"></i>
                                            <span class="list">Daily Places</span>
                                        </div>
                                    </div>
                                    <p>Embark on a divine journey to the Char Dham - sacred pilgrimage sites that
                                        symbolise spiritual enlightenment and devotion.</p>
                                    <div class="main-button">
                                        <a href="{{ route('reservation') }}">Make a Reservation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="image">
                                    <img src="assets\images\Agra.avif" alt="img 1">
                                    <img src="assets\images\Ftehpur sikhri.avif" alt="img 2">
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="content">
                                    <span class="info">**Offer starts in 1 week</span>
                                    <h4>Agra</h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <i class="fa fa-clock"></i>
                                            <span class="list">5 Days</span>
                                        </div>
                                        <div class="col-6">
                                            <i class="fa fa-map"></i>
                                            <span class="list">Daily Places</span>
                                        </div>
                                    </div>
                                    <p>Agra, the city of timeless granduer, invites you to explore the architectural
                                        wonders of the mughal era.</p>
                                    <div class="main-button">
                                        <a href="{{ route('reservation') }}">Make a Reservation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="image">
                                    <img src="assets\images\Kerala-Tourism.webp" alt="img 1">
                                    <img src="assets\images\Padmanabhaswamy.jpeg" alt="img 2">
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="content">
                                    <span class="info">*Offer Until 24th May</span>
                                    <h4>Kerala</h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <i class="fa fa-clock"></i>
                                            <span class="list">5 Days</span>
                                        </div>
                                        <div class="col-6">
                                            <i class="fa fa-map"></i>
                                            <span class="list">Daily Places</span>
                                        </div>
                                    </div>
                                    <p>God's Own Country, invites you to explore its serene backwaters,and vibrant
                                        cultural heritage.</p>
                                    <div class="main-button">
                                        <a href="{{ route('reservation') }}">Make a Reservation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2025 Opulent Odyssey Travel Company. All rights reserved. </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>

    <script>
        $(".option").click(function () {
            $(".option").removeClass("active");
            $(this).addClass("active");
        });
    </script>

</body>

</html>