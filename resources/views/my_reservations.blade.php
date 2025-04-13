<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Reservations - Opulent Odyssey</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-woox-travel.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <style>
        html,
        body {
            height: 100%;
            display: flex;
            flex-direction: column;
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        body>.container {
            flex: 1;
            /* Ensure the container takes up remaining vertical space */
            display: flex;
            flex-direction: column;
        }

        main {
            flex-grow: 1;
            /* Allow main to grow and push footer down */
        }

        .reservation-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            transition: 0.3s;
            border-left: 5px solid #007bff;
            /* Changed accent color */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* Distribute space between details and actions */
        }

        .reservation-card:hover {
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        .reservation-details h5 {
            color: #007bff;
            /* Changed accent color */
            font-weight: 600;
            margin-bottom: 10px;
            /* Added some space below the title */
        }

        .reservation-details p {
            margin-bottom: 5px;
            /* Added some space between paragraphs */
            font-size: 14px;
            color: #495057;
            /* Darker text color for better readability */
        }

        .reservation-details strong {
            font-weight: 600;
            color: #343a40;
            /* Even darker for emphasis */
        }

        .alert {
            margin-top: 20px;
        }

        .btn-outline-primary {
            border-color: #007bff;
            /* Changed accent color */
            color: #007bff;
            /* Changed accent color */
        }

        .btn-outline-primary:hover {
            background-color: #007bff;
            /* Changed accent color */
            color: #fff;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #c82333;
        }

        .btn-primary {
            background-color: #007bff;
            /* Changed accent color */
            border-color: #007bff;
            /* Changed accent color */
            color: white;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            /* Darker shade on hover */
            border-color: #0056b3;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            color: white;
        }

        .btn-success:hover {
            background-color: #1e7e34;
            border-color: #1e7e34;
        }

        .mt-3.text-end {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            /* Added padding for better spacing */
            text-align: center;
            /* Center the text in the footer */
        }

        footer p {
            margin: 0;
        }

        .container>.row {
            flex-grow: 1;
            /* Allow the row to grow within the container */
        }

        .text-white {
            color: #343a40 !important;
            /* Dark text for better contrast on light background */
            text-align: center;
            /* Center the heading */
            margin-bottom: 30px !important;
            /* More space below the heading */
        }

        .text-muted {
            color: #6c757d !important;
            margin-bottom: 15px !important;
        }
    </style>
</head>

<body>
    @include('components.header')

    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <main>
            <h2 style="color: white; margin-bottom: 1.2rem;">My Reservations</h2>

            <div class="row g-4">
                @if ($reservations->count())
                            @foreach ($reservations as $reservation)
                                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
                                            <div class="reservation-card flex-fill">
                                                <div class="reservation-details">
                                                    <h5><strong>Destination:</strong> {{ $reservation->destination }}</h5>
                                                    <p><strong>Name:</strong> {{ $reservation->name }}</p>
                                                    <p><strong>Phone:</strong> {{ $reservation->phone }}</p>
                                                    <p><strong>Guests:</strong> {{ $reservation->no_of_guests }}</p>
                                                    <p><strong>Check-in:</strong>
                                                        {{ \Carbon\Carbon::parse($reservation->check_in_date)->format('d-m-Y') }}</p>
                                                    <p><strong>Cost:</strong> ₹{{ number_format($reservation->cost, 2) }}</p>

                                                    @php
                                                        $status = strtolower($reservation->status);
                                                        $bgClass = match ($status) {
                                                            'confirmed' => 'bg-success',
                                                            'cancelled' => 'bg-danger',
                                                            'pending' => 'bg-warning',
                                                            default => 'bg-secondary',
                                                        };
                                                    @endphp

                                                    <p class="mt-2">
                                                        <strong>Status:</strong>
                                                        <span class="text-white px-2 py-1 rounded {{ $bgClass }}">
                                                            {{ ucfirst($reservation->status) }}
                                                        </span>
                                                    </p>

                                                </div>
                                                <div class="mt-3 text-end">
                                                    @if ($reservation->status !== 'cancelled')
                                                        <form action="{{ route('delete_reservation', $reservation->id) }}" method="POST"
                                                            class="d-inline"
                                                            onsubmit="return confirm('Are you sure you want to cancel this reservation?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">Cancel Reservation</button>
                                                        </form>
                                                    @endif

                                                    @if ($reservation->status !== 'cancelled')
                                                        <a href="{{ route('edit_reservation', $reservation->id) }}"
                                                            class="btn btn-primary btn-sm ms-2">Edit</a>
                                                    @endif


                                                    @if ($reservation->status === 'pending')
                                                        <a href="{{ route('payment.page', $reservation->id) }}"
                                                            class="btn btn-warning btn-sm ms-2">Pay Now</a>
                                                    @endif

                                                    @if ($reservation->status === 'confirmed')
                                                        <a href="{{ route('view_ticket', $reservation->id) }}"
                                                            class="btn btn-success btn-sm ms-2">View Ticket</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                            @endforeach
                @else
                    <div class="col-12 text-center">
                        <p class="text-muted">You don't have any reservations yet.</p>
                        <a href="{{ route('deals') }}" class="btn btn-outline-primary mt-2">Explore Deals</a>
                    </div>
                @endif
            </div>
        </main>
    </div>

    <footer class="py-4 mt-auto">
        <div class="container text-center">
            <p class="mb-0">&copy; 2025 Opulent Odyssey Travel Company. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhG5nwlLhlOb8LkkWPgZuHG9115rYvRpzY"
        crossorigin="anonymous"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>