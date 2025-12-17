<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PartnerBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerBrandController extends Controller
{
    public function index()
    {
        $brands = PartnerBrand::orderBy('sort_order')->paginate(10);
        return view('admin.partner-brands.index', compact('brands'));
    }

    public function create()
    {
        return view('admin.partner-brands.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'color' => 'required|string|max:20',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('partner-brands', 'public');
        }

        PartnerBrand::create($validated);

        return redirect()->route('admin.partner-brands.index')
            ->with('success', 'Partner brand created successfully.');
    }

    public function show(PartnerBrand $partnerBrand)
    {
        return redirect()->route('admin.partner-brands.edit', $partnerBrand);
    }

    public function edit(PartnerBrand $partnerBrand)
    {
        return view('admin.partner-brands.edit', compact('partnerBrand'));
    }

    public function update(Request $request, PartnerBrand $partnerBrand)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'color' => 'required|string|max:20',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');

        if ($request->hasFile('logo')) {
            // Delete old logo if exists
            if ($partnerBrand->logo) {
                Storage::disk('public')->delete($partnerBrand->logo);
            }
            $validated['logo'] = $request->file('logo')->store('partner-brands', 'public');
        }

        $partnerBrand->update($validated);

        return redirect()->route('admin.partner-brands.index')
            ->with('success', 'Partner brand updated successfully.');
    }

    public function destroy(PartnerBrand $partnerBrand)
    {
        if ($partnerBrand->logo) {
            Storage::disk('public')->delete($partnerBrand->logo);
        }

        $partnerBrand->delete();

        return redirect()->route('admin.partner-brands.index')
            ->with('success', 'Partner brand deleted successfully.');
    }
}
