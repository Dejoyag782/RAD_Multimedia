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
        $histories = History::orderBy('created_at', 'desc')->paginate($perPage);
        
        // Pass the paginated histories to the view
        return view('dashboard.history.index', compact('histories'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'timeline' => 'required|string|max:255',
            'title' => 'required|email|max:255',
            'desc' => 'required|string|min:8',
            'photo' => 'nullable|string',
            // Add other validation rules as necessary
        ]);

        // Create a new history entry
        $history = new History();
        $history->timeline = $request->input('timeline');
        $history->title = $request->input('title');
        $history->desc = $request->input('desc'); // Encrypt the password
        $history->photo = $request->input('photo');
        // Set other properties as necessary

        // Save the new history entry
        $history->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'History entry added successfully!');
    }

    public function showHistory($id)
    {
        $history = History::findOrFail($id);

        return response()->json($history);
    }

    
}
