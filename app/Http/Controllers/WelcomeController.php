<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;
use App\Models\History;
use App\Models\Team;
use App\Models\TeamMemberRole;
use App\Models\Role;

class WelcomeController extends Controller
{

    

    public function index()
    {

        $perPage = 5; // Define the number of items per page
        $perTeam = 6;
        $histories = History::orderBy('id', 'asc')->paginate($perPage);
        $team = Team::orderBy('id','asc')->paginate($perTeam);
        
        return view('welcome', compact('histories','team'));
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'desc' => 'required|string',
        ]);

        $contact = Messages::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'desc' => $validatedData['desc'],
            'archived' => 0, // Setting archived to default value
        ]);

        // Optionally, you can return a response or redirect
        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    public function displayHistoryData(Request $request)
    {
        $perPage = 5; // Define the number of items per page
        $histories = History::orderBy('id','desc')->paginate($perPage);
        return response()->json($histories);
    }

    public function displayTeamData(Request $request)
    {
        $perTeam = 6; // Define the number of items per page
        $team = Team::orderBy('id','desc')->paginate($perTeam);
        return response()->json($team);
    }
}
