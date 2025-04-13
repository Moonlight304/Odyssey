<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Package</title>

    @include('partials.assetLoader') <!-- If you have asset loader for CSS/JS -->
</head>
<body>
    <form method="POST" action="{{ route('create_package') }}">
        @csrf
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <h1 class="bg-green-400">Create a Package</h1>
        
        <!-- Package Name -->
        <label for="package_name">Package Name:</label>
        <input type="text" id="package_name" name="package_name" required>
        
        <br><br>
        
        <!-- Description -->
        <label for="description">Description:</label>
        <input type="text" id="description" name="description" required>
        
        <br><br>
        
        <!-- Destination -->
        <label for="destination">Destination:</label>
        <input type="text" id="destination" name="destination" required>
        
        <br><br>

        <!-- Price -->
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required>
        
        <br><br>
        
        <!-- Available Seats -->
        <label for="available_seats">Available Seats:</label>
        <input type="number" id="available_seats" name="available_seats" required>
        
        <br><br>
        
        <!-- Start Date -->
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required>
        
        <br><br>
        
        <!-- End Date -->
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" required>
        
        <br><br>

        <!-- Hidden input to store the created_by value (auth user's ID) -->
        <input type="hidden" name="created_by" value="{{ auth()->user()->id }}">

        <br><br>
        
        <!-- Submit Button -->
        <input type="submit" value="Submit">
    </form>
</body>
</html>
