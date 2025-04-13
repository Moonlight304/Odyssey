<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment for Reservation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .payment-card {
            max-width: 500px;
            margin: 0 auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .btn-custom {
            background-color: #28a745;
            color: white;
            border: none;
        }

        .btn-custom:hover {
            background-color: #218838;
        }

        .btn-cancel {
            background-color: #dc3545;
            color: white;
            border: none;
        }

        .btn-cancel:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Payment for Reservation</h2>
        <div class="card payment-card">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">Reservation Details</h5>
                <p><strong>Destination:</strong> {{ $reservation->destination }}</p>
                <p><strong>Cost:</strong> ₹{{ number_format($reservation->cost, 2) }}</p>
                <p><strong>Status:</strong> {{ ucfirst($reservation->status) }}</p>

                <hr>

                <h5 class="text-center mb-3">Payment Information</h5>
                <form action="{{ route('payment.process', $reservation->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="cardNumber" class="form-label">Card Number</label>
                        <input type="text" id="cardNumber" class="form-control" placeholder="1234 5678 9012 3456" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="expiryDate" class="form-label">Expiry Date</label>
                            <input type="text" id="expiryDate" class="form-control" placeholder="MM/YY" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cvv" class="form-label">CVV</label>
                            <input type="text" id="cvv" class="form-control" placeholder="123" required>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-custom w-100"> Pay Now </button>
                    </div>
                </form>

                <div class="text-center mt-3">
                    <a href="{{ route('payment.cancel', $reservation->id) }}" class="btn btn-cancel w-100">Cancel Payment</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>