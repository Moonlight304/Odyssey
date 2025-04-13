<!DOCTYPE html>
<html>

<head>
    <title>Create Booking</title>
</head>

<body>
    <h1>Create Booking</h1>
    <form action="{{ route('new_booking') }}" method="POST">
        @csrf
        <label for="customer_id">Customer ID:</label>
        <input type="text" id="customer_id" name="customer_id" required><br>

        <label for="package_id">Package:</label>
        <select id="package_id" name="package_id" required>
            <option value=""> Select a package </option>
            @foreach ($packages as $package)
                <option value="{{ $package->id }}">{{ $package->package_name }}</option>
            @endforeach
        </select><br>

        <label for="payment_status">Payment Status:</label>
        <input type="text" id="payment_status" name="payment_status" required><br>

        <label for="total_price">Total Price:</label>
        <input type="number" id="total_price" name="total_price" required><br>

        <button type="submit">Create Booking</button>
    </form>
</body>

</html>