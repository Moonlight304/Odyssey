<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show_payment_page($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('payment', compact('reservation'));
    }

    public function process_payment(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);

        // Simulate payment success
        $reservation->update(['status' => 'confirmed']); // Ensure this line is present

        return redirect()->route('payment.success', $reservation->id);
    }

    public function payment_success($id)
    {
        return redirect()->route('my_reservations')->with('success', 'Payment successful! Your reservation is confirmed.');
    }

    public function payment_cancel($id)
    {
        return redirect()->route('my_reservations')->with('error', 'Payment was canceled.');
    }
}