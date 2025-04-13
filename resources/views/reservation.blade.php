<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Opulent Odyssey Reservation Page</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- CSS Files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>
    <!-- Preloader -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots"><span></span><span></span><span></span></div>
        </div>
    </div>

    <!-- Header -->
    @include('components.header')
    <!-- Header End -->

    <!-- Page Heading -->
    <!-- <section class="second-page-heading text-center py-5">
        <div class="container">
            <h4 class="text-secondary">Book Preferred Deal</h4>
            <h2 class="mb-3">Make Your Reservation</h2>
            <p class="mb-4">Journey through India’s rich heritage and timeless landmarks with our expertly curated
                travel
                experiences.</p>
            <a href="{{ route('about') }}" class="main-button">Discover More</a>
        </div>
    </section> -->

    @if ($errors->any())
        <div class="container">
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <!-- Contact Info -->
    <!-- <section class="more-info reservation-info py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="info-item">
                        <i class="fa fa-phone"></i>
                        <h4>Phone</h4>
                        <a href="tel:+917890125646">+91 7890125646</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="info-item">
                        <i class="fa fa-envelope"></i>
                        <h4>Email</h4>
                        <a href="mailto:opulentodyssey@email.com">opulentodyssey@email.com</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="info-item">
                        <i class="fa fa-map-marker"></i>
                        <h4>Office</h4>
                        <p>Lane no. 4, Lawsons Bay Colony Rd, Near RK Beach, Visakhapatnam, AP - 530017</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Reservation Form -->
    <section class="reservation-form py-5 bg-light">
        <div class="container">
            <form id="reservation-form" name="gs" method="POST" action="{{ route('new_reservation') }}">
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                <h4 class="mb-4">Fill the Form to <em>Reserve</em> Your Trip</h4>
                <div class="row g-3">
                    <div class="col-lg-6">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Ex. Priya Iyer" required>
                    </div>
                    <div class="col-lg-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" name="phone" class="form-control" placeholder="Ex. +91 xxxxxxxxxx" required>
                    </div>
                    <div class="col-lg-6">
                        <label for="no_of_guests" class="form-label">Number of Persons</label>
                        <input type="number" name="no_of_guests" id="no_of_guests" class="form-control" required onchange="updateCost()">
                    </div>
                    <div class="col-lg-6">
                        <label for="check_in_date" class="form-label">Check-In Date</label>
                        <input type="date" name="check_in_date" class="form-control" required
                            min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="destination" class="form-label">Destination</label>
                        <select name="destination" id="destination" class="form-select" required
                            onchange="updateCost()">
                            <option value="" disabled selected>Select a Destination</option>
                            @php
                                $destinations = [
                                    'Delhi' => 5000,
                                    'Rajasthan' => 7000,
                                    'Agra' => 4000,
                                    'Madhya Pradesh' => 6000,
                                    'Tamil Nadu' => 5500,
                                    'Himalayas' => 8000,
                                    'Sundarbans' => 4500,
                                    'Andaman and Nicobar' => 10000,
                                    'Kerala' => 7500,
                                    'Goa' => 6500,
                                    'Varanasi' => 5000,
                                    'Amritsar' => 5500,
                                    'Tirumala' => 6000,
                                    'Badrinath' => 7000,
                                    'Dwarka' => 6500,
                                    'Rameshwaram' => 6000,
                                    'Jagannath Puri' => 5500,
                                    'Mumbai' => 7000,
                                    'Bangalore' => 6500,
                                    'Jaipur' => 6000,
                                    'Hyderabad' => 5500,
                                ];
                            @endphp
                            @foreach ($destinations as $dest => $cost)
                                <option value="{{ $dest  }}" data-cost="{{ $cost }}">{{ $dest }} - ₹{{ number_format($cost, 2) }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-3">
                        <label for="cost" class="form-label">Total Cost</label>
                        <div class="d-flex align-items-center">
                            <span> &#8377; </span>
                            <input type="number" id="cost" name="cost" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="col-12 text-center mt-4">
                        <button type="submit" class="main-button">Make Your Reservation Now</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-4">
        <div class="container">
            <p class="mb-0">&copy; 2025 Opulent Odyssey Travel Company. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        function updateCost() {
            const destinationSelect = document.getElementById('destination');
            const guestsInput = document.getElementById('no_of_guests');
            const costInput = document.getElementById('cost');

            const selectedOption = destinationSelect.options[destinationSelect.selectedIndex];
            const destinationCost = selectedOption ? parseInt(selectedOption.getAttribute('data-cost')) : 0;
            const numberOfGuests = parseInt(guestsInput.value) || 0;

            const totalCost = destinationCost * numberOfGuests;
            costInput.value = totalCost || 0; // Set total cost or 0 if invalid
        }
    </script>
</body>

</html>