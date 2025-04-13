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
                        <input type="number" name="no_of_guests" id="no_of_guests" class="form-control"
                            value="{{ $reservation->no_of_guests }}" required onchange="updateCost()">
                    </div>
                    <div class="col-lg-6">
                        <label for="check_in_date" class="form-label">Check-In Date</label>
                        <input type="date" name="check_in_date" class="form-control"
                            value="{{ $reservation->check_in_date }}" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                            required>
                    </div>
                    <div class="col-lg-12">
                        <label for="destination" class="form-label">Destination</label>
                        <select name="destination" id="destination" class="form-select" required
                            onchange="updateCost()">
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
                                <option value="{{ $dest }}" data-cost="{{ $cost }}" {{ $reservation->destination == $dest ? 'selected' : '' }}>
                                    {{ $dest }} - ₹{{ number_format($cost, 2) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <label for="cost" class="form-label">Total Cost</label>
                        <input type="number" id="cost" name="cost" class="form-control" value="{{ $reservation->cost }}"
                            readonly>
                    </div>

                    <div class="col-12 text-center d-flex justify-content-end gap-4 mt-4">
                        <button type="button" class="btn btn-secondary text-white"
                            onclick="window.location.href='{{ route('my_reservations') }}'">
                            Cancel
                        </button>

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