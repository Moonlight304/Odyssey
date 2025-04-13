<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment for Reservation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Payment for Reservation</h2>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Reservation Details</h5>
                <p><strong>Destination:</strong> {{ $reservation->destination }}</p>
                <p><strong>Cost:</strong> ₹{{ number_format($reservation->cost, 2) }}</p>
                <p><strong>Status:</strong> {{ ucfirst($reservation->status) }}</p>
                <form action="{{ route('payment.process', $reservation->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">Simulate Payment Success</button>
                </form>
                <a href="{{ route('payment.cancel', $reservation->id) }}" class="btn btn-danger mt-3">Cancel Payment</a>
            </div>
        </div>
    </div>
</body>

</html>