<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Reservation - Opulent Odyssey</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    @include('components.header')

    <!-- Edit Reservation Form -->
    <section class="reservation-form py-5 bg-light">
        <div class="container d-flex flex-column">
            <h4 class="mb-4 text-center">Edit Your Reservation</h4>

            <form method="POST" action="{{ route('update_reservation', $reservation->id) }}">
                @csrf
                @method('PUT')
                <div class="row g-3">
                    <div class="col-lg-6">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $reservation->name }}" required>
                    </div>
                    <div class="col-lg-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" name="phone" class="form-control" value="{{ $reservation->phone }}" required>
                    </div>
                    <div class="col-lg-6">
                        <label for="no_of_guests" class="form-label">Number of Guests</label>
                        <input type="number" name="no_of_guests" class="form-control"
                            value="{{ $reservation->no_of_guests }}" required>
                    </div>
                    <div class="col-lg-6">
                        <label for="check_in_date" class="form-label">Check-In Date</label>
                        <input type="date" name="check_in_date" class="form-control"
                            value="{{ $reservation->check_in_date }}" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                            required>
                    </div>
                    <div class="col-lg-12">
                        <label for="destination" class="form-label">Destination</label>
                        <select name="destination" class="form-select" required>
                            @php
                                $destinations = ['Delhi', 'Rajasthan', 'Agra', 'Madhya Pradesh', 'Tamil Nadu', 'Himalayas', 'Sundarbans', 'Andaman and Nicobar', 'Kerala', 'Goa', 'Varanasi', 'Amritsar', 'Tirumala', 'Badrinath', 'Dwarka', 'Rameshwaram', 'Jagannath Puri', 'Mumbai', 'Banglore', 'Jaipur', 'Hyderabad'];
                            @endphp
                            @foreach($destinations as $dest)
                                <option value="{{ $dest }}" {{ $reservation->destination == $dest ? 'selected' : '' }}>
                                    {{ $dest }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <button type="submit" class="btn btn-primary">Update Reservation</button>
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
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>