<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookingController extends Controller
{
    /**
     * Display the create_booking view.
     */

    public function index(): View
    {
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }

    public function show($id): View
    {
        $booking = Booking::findOrFail($id);
        return view('bookings.show', compact('booking'));
    }

    /**
     * Display a list of all bookings.
     */

    public function booking_form(): View
    {
        $packages = Package::all();
        // Debugging line to check if packages are retrieved
        return view('bookings.create_booking', compact('packages'));
    }

    public function new_booking(Request $request): RedirectResponse
    {
        $request->validate([
            'customer_id' => 'required|string',
            'package_id' => 'required|string',
            'payment_status' => 'required|string',
            'total_price' => 'required|numeric',
        ]);

        $booking = Booking::create([
            'customer_id' => $request->input('customer_id'),
            'package_id' => $request->input('package_id'),
            'payment_status' => $request->input('payment_status'),
            'total_price' => $request->input('total_price'),
        ]);

        return redirect(route('dashboard'));
    }
}