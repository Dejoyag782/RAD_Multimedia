<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:5000',
        ]);

        $data = $request->only(['timeline', 'title', 'desc']);
        $photoPath = null;

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->store('public/photos');
            $data['photo'] = str_replace('public/', '', $photoPath); // Remove 'public/' for storing in database
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
