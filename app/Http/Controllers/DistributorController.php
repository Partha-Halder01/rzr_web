<?php

namespace App\Http\Controllers;

use App\Models\DistributorApplication;
use Illuminate\Http\Request;

class DistributorController extends Controller
{
    public function index()
    {
        return view('distributor');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company_name' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'experience' => 'nullable|string|max:100',
            'message' => 'nullable|string|max:1000',
        ]);

        DistributorApplication::create($validated);

        return back()->with('success', 'Your application has been submitted successfully! We will contact you soon.');
    }
}
