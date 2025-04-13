<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function new_review(Request $request): RedirectResponse
    {
        $request->validate([
            'customer_id' => 'required|string',
            'package_id' => 'required|string',
            'rating' => 'required|string',
            'comment' => 'required|string|max:255',
        ]);

        $review = Review::create([
            'customer_id' => $request->input('customer_id'),
            'package_id' => $request->input('package_id'),
            'rating' => $request->input('rating'),
            'comment' => $request->input('comment'),
        ]);

        return redirect(route('dashboard'));
    }
}