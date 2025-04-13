<!DOCTYPE html>
<html>

<head>
    <title>Booking Details</title>
</head>

<body>
    <h1>Booking Details</h1>
    <p>Customer ID: {{ $booking->customer_id }}</p>
    <p>Package: {{ $booking->package_id }}</p>
    <p>Payment Status: {{ $booking->payment_status }}</p>
    <p>Total Price: {{ $booking->total_price }}</p>
</body>

</html>