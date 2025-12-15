<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DistributorApplication;
use Illuminate\Http\Request;

class DistributorApplicationController extends Controller
{
    public function index()
    {
        $applications = DistributorApplication::latest()->paginate(15);
        return view('admin.distributors.index', compact('applications'));
    }

    public function show(DistributorApplication $application)
    {
        $application->update(['is_read' => true]);
        return view('admin.distributors.show', compact('application'));
    }

    public function updateStatus(Request $request, DistributorApplication $application)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
        ]);

        $application->update(['status' => $request->status]);

        return back()->with('success', 'Application status updated successfully!');
    }

    public function destroy(DistributorApplication $application)
    {
        $application->delete();
        return redirect()->route('admin.distributors.index')->with('success', 'Application deleted successfully!');
    }
}
