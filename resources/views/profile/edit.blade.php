<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="{{ asset('assets/css/editNav.css') }}">


    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <!-- Header -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="editNav">
                        <!-- Logo -->
                        <a href="{{ route('index') }}" class="logo">
                            <img src="assets/images/Opulent Odyssey logo.png" alt="Logo"
                                style="width: 300px; height: auto;">
                        </a>

                        <!-- Navigation Menu -->
                        <ul class="nav ulThing">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <!-- <li><a href="{{ route('about') }}">About</a></li> -->
                            <li><a href="{{ route('deals') }}">Deals</a></li>

                            @if (Auth::check())
                                <li><a href="{{ route('my_reservations') }}">My Reservations</a></li>
                                <li><a href="{{ route('reservation') }}">Make a Reservation</a></li>
                                <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                        @csrf
                                        <button type="submit" style="all: unset; cursor: pointer;" class="nav-link">
                                            Log Out
                                        </button>
                                    </form>
                                </li>
                            @else
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            @endif
                        </ul>

                        <!-- Mobile Menu Trigger -->
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>


        <!-- Page Content -->
        <main>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <!-- Update Profile Information Form -->
                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            <form method="POST" action="{{ route('profile.update') }}" class="space-y-4">
                                @csrf
                                @method('PUT')
                                <!-- <div style="margin-bottom: 2rem;">
                                    <div class="flex items-center justify-between">
                                        <label for="name" class="text-lg font-medium text-gray-800 dark:text-white">Name</label>
                                    </div>
                                    <div class="mt-1">
                                        <input id="name" name="name" type="text"
                                            value="{{ old('name', Auth::user()->name) }}" required
                                            class="w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    </div>
                                </div> -->

                                <div style="margin-bottom: 2rem">
                                    <div class="flex items-center justify-between">
                                        <label for="email"
                                            class="text-lg font-medium text-gray-800 dark:text-white">Email</label>
                                    </div>
                                    <div class="mt-1">
                                        <input id="email" name="email" type="email"
                                            value="{{ old('email', Auth::user()->email) }}"
                                            class="w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                            readonly>
                                    </div>
                                </div>

                                <div style="margin-bottom: 2rem;">
                                    <div class="flex items-center justify-between">
                                        <label for="first_name"
                                            class="text-lg font-medium text-gray-800 dark:text-white"> Name
                                        </label>
                                    </div>

                                    <div class="flex gap-4">
                                        <div class="mt-1">
                                            <input id="first_name" name="first_name" type="text"
                                                value="{{ old('first_name', Auth::user()->first_name) }}" required
                                                class="w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                                placeholder="First Name">
                                        </div>

                                        <div class="mt-1">
                                            <input id="last_name" name="last_name" type="text"
                                                value="{{ old('last_name', Auth::user()->last_name) }}"
                                                class="w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                                placeholder="Last Name(optional)">
                                        </div>
                                    </div>
                                </div>


                                <div style="margin-bottom: 2rem">
                                    <div class="flex items-center justify-between">
                                        <label for="address"
                                            class="text-lg font-medium text-gray-800 dark:text-white">Address</label>
                                    </div>
                                    <div class="mt-1">
                                        <input id="address" name="address" type="text"
                                            value="{{ old('address', Auth::user()->address) }}"
                                            class="w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                                    </div>
                                </div>
                                
                                <div style="margin-bottom: 2rem">
                                    <div class="flex items-center justify-between">
                                        <label for="phone"
                                            class="text-lg font-medium text-gray-800 dark:text-white"> Phone </label>
                                    </div>
                                    <div class="mt-1">
                                        <input id="phone" name="phone" type="text"
                                            value="{{ old('phone', Auth::user()->phone) }}"
                                            class="w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between mt-6">
                                    <button type="submit"
                                        style="background-color: #006b6b; color: white; border: none; padding: 10px 20px; border-radius: 6px; font-weight: 600; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: 0.2s ease-in-out;">
                                        Save Changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Update Password Form -->
                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <div class="flex items-center justify-between">
                                        <label for="current_password"
                                            class="text-lg font-medium text-gray-800 dark:text-white">Current
                                            Password</label>
                                    </div>
                                    <div class="mt-1">
                                        <input id="current_password" name="current_password" type="password" required
                                            class="w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="flex items-center justify-between">
                                        <label for="password"
                                            class="text-lg font-medium text-gray-800 dark:text-white">New
                                            Password</label>
                                    </div>
                                    <div class="mt-1">
                                        <input id="password" name="password" type="password" required
                                            class="w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="flex items-center justify-between">
                                        <label for="password_confirmation"
                                            class="text-lg font-medium text-gray-800 dark:text-white">Confirm New
                                            Password</label>
                                    </div>
                                    <div class="mt-1">
                                        <input id="password_confirmation" name="password_confirmation" type="password"
                                            required
                                            class="w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    </div>
                                </div>

                                <div class="flex items-center justify-between mt-6">
                                    <button type="submit"
                                        style="background-color: #006b6b; color: white; border: none; padding: 10px 20px; border-radius: 6px; font-weight: 600; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: 0.2s ease-in-out;">
                                        Save Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Delete User Form -->
                    <!-- <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            <form method="POST" action="{{ route('profile.destroy') }}">
                                @csrf
                                @method('DELETE')
                                <div class="space-y-6">
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</p>
                                </div>

                                <div class="flex items-center justify-between mt-6">
                                    <button type="submit"
                                        style="background-color: #b32d2d; color: white; border: none; padding: 10px 20px; border-radius: 6px; font-weight: 600; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: 0.2s ease-in-out;">
                                        Delete Account
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div> -->

                </div>
            </div>
        </main>
    </div>
</body>

</html>

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
        color: #333;
    }

    button:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    input {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
    }

    input:focus {
        outline: none;
        border-color: #006b6b;
        box-shadow: 0 0 5px rgba(0, 107, 107, 0.5);
    }
</style>