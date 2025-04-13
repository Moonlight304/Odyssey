<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class PackageController extends Controller
{
    /**
     * Display the create_package view.
     */

    public function index()
    {
        $packages = Package::all();
        return view('packages.index', compact('packages'));
    }

    public function package_form(): View
    {
        return view('packages.create_package');
    }

    public function new_package(Request $request): RedirectResponse
    {
        $request->validate([
            'package_name' => 'required|string|max:50',
            'description' => 'required|string|max:255',
            'destination' => 'required|string|max:50',
            'price' => 'required|numeric',
            'available_seats' => 'required|integer',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $package = Package::create([
            'package_name' => $request->input('package_name'),
            'description' => $request->input('description'),
            'destination' => $request->input('destination'),
            'price' => $request->input('price'),
            'available_seats' => $request->input('available_seats'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'created_by' => $request->input('created_by')
        ]);

        return redirect(route('dashboard'));
    }

}
