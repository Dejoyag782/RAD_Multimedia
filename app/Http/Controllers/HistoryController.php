<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    public function index()
    {
        $perPage = 5; // Define the number of items per page
        $histories = History::orderBy('id')->paginate($perPage);
        
        // Pass the paginated histories to the view
        return view('dashboard.history.index', compact('histories'));
    }

    public function storeOrUpdate(Request $request)
    {
    $request->validate([
        'id' => 'nullable|exists:histories,id',
        'timeline' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'desc' => 'required|string',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:20000',
    ]);

    $data = $request->only(['timeline', 'title', 'desc']);
    $photoPath = null;

    // Handle photo upload
    if ($request->hasFile('photo')) {
        $photo = $request->file('photo');
        $photoPath = $photo->store('public/photos');
        $data['photo'] = str_replace('public/', '', $photoPath); // Remove 'public/' for storing in database

        // Check and delete existing file if updating
        if ($request->filled('id')) {
        $oldTimeline = History::findOrFail($request->id);
        $oldPhotoPath = $oldTimeline->photo; // Get the existing photo path

        if ($oldPhotoPath && Storage::disk('public')->exists($oldPhotoPath)) {
            Storage::disk('public')->delete($oldPhotoPath);
            Log::info("Deleted old photo for history {$request->id}: {$oldPhotoPath}");
        } else {
            // Log if no existing file found (optional)
            // Log::warning("No existing photo found for history {$request->id}");
        }
        }
    }

    if ($request->filled('id')) {
        // Update existing timeline
        $timeline = History::findOrFail($request->id);
        $timeline->update($data);
    } else {
        // Create new timeline
        History::create($data);
    }

    return redirect('/history')->with('success', 'Timeline saved successfully!');
    }



    public function showHistory($id)
    {
        $history = History::findOrFail($id);

        return response()->json($history);
    }

    
}
