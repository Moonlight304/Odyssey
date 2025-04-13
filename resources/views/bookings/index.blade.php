<!DOCTYPE html>
<html>

<head>
    <title>All Bookings</title>
</head>

<body>
    <h1>All Bookings</h1>
    <ul>
        @foreach ($bookings as $booking)
            <li>
                <a href="{{ route('bookings.show', $booking->id) }}">
                    Booking #{{ $booking->id }} - {{ $booking->package_id }}
                </a>
            </li>
        @endforeach
    </ul>
</body>

</html>