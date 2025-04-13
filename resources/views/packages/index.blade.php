<!DOCTYPE html>
<html>

<head>
    <title>Packages</title>
</head>

<body>
    <h1>All Packages</h1>
    <ul>
        @foreach ($packages as $package)
            <li>{{ $package->name }} - {{ $package->description }}</li>
        @endforeach
    </ul>
</body>

</html>