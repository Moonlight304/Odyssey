<!DOCTYPE html>
<html>

<head>
    <title>Create Review</title>
</head>

<body>
    <h1>Create Review</h1>
    <form action="{{ route('new_review') }}" method="POST">
        @csrf
        <label for="customer_id">Customer ID:</label>
        <input type="text" id="customer_id" name="customer_id" required><br>

        <label for="package_id">Package ID:</label>
        <input type="text" id="package_id" name="package_id" required><br>

        <label for="rating">Rating:</label>
        <input type="text" id="rating" name="rating" required><br>

        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" required></textarea><br>

        <button type="submit">Submit Review</button>
    </form>
</body>

</html>