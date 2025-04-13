<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function printTicket() {
            window.print();
        }
    </script>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Your Reservation Ticket</h2>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Reservation Details</h5>
                <p><strong>Destination:</strong> {{ $reservation->destination }}</p>
                <p><strong>Name:</strong> {{ $reservation->name }}</p>
                <p><strong>Phone:</strong> {{ $reservation->phone }}</p>
                <p><strong>Guests:</strong> {{ $reservation->no_of_guests }}</p>
                <p><strong>Check-in Date:</strong> {{ \Carbon\Carbon::parse($reservation->check_in_date)->format('d-m-Y') }}</p>
                <p><strong>Cost:</strong> ₹{{ number_format($reservation->cost, 2) }}</p>
                <p><strong>Status:</strong> {{ ucfirst($reservation->status) }}</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('my_reservations') }}" class="btn btn-primary">Back to My Reservations</a>
            <button onclick="printTicket()" class="btn btn-secondary">Print Ticket</button>
        </div>
    </div>
</body>

</html>