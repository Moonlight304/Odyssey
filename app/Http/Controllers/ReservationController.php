<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReservationController extends Controller
{
    public function index(): View
    {
        $user = auth()->user();

        // Fetch reservations with newest first
        $reservations = Reservation::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('my_reservations', compact('reservations'));
    }


    public function new_reservation(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'user_id' => 'required|numeric',
            'name' => 'required|string',
            'phone' => 'required|string',
            'no_of_guests' => 'required|numeric|min:1',
            'check_in_date' => 'required|date|after:today',
            'destination' => 'required|string',
            'cost' => 'required|numeric|min:1', // Ensure cost is valid
        ]);

        Reservation::create($validated);

        return redirect()->route('my_reservations')->with('success', 'Your reservation has been successfully created!');
    }


    public function delete_reservation($id): RedirectResponse
    {
        $reservation = Reservation::findOrFail($id);

        // Mark the reservation as cancelled
        $reservation->update(['status' => 'cancelled']);

        return redirect()->route('my_reservations')->with('success', 'Your reservation has been successfully cancelled!');
    }

    public function edit_reservation($id): View
    {
        $reservation = Reservation::findOrFail($id);
        return view('edit_reservation', compact('reservation'));
    }

    public function update_reservation(Request $request, $id): RedirectResponse
    {
        $reservation = Reservation::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'no_of_guests' => 'required|numeric',
            'check_in_date' => 'required|date|after:today',
            'destination' => 'required|string',
        ]);

        $reservation->update($validated);

        return redirect()->route('my_reservations')->with('success', 'Your reservation has been successfully updated!');
    }

    public function view_ticket($id)
    {
        $reservation = Reservation::findOrFail($id);

        // Ensure only confirmed reservations can view tickets
        if ($reservation->status !== 'confirmed') {
            return redirect()->route('my_reservations')->with('error', 'You can only view tickets for confirmed reservations.');
        }

        return view('ticket', compact('reservation'));
    }
}