<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\TeamMemberRole;
use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TeamController extends Controller
{

    protected $model = Team::class;
    protected $showWithRelations = true;

    public function index()
    {
        // Fetch all roles
        $roles = Role::all();
        
        return view('dashboard.team.index', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:20000',
            'linked_in' => 'required|string|max:255|unique:teams',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('public/team_images');
            $photoPath = str_replace('public/', '', $photoPath); // Remove 'public/' from the path
        }

        Team::create([
            'name' => $request->name,            
            'photo' => $photoPath,
            'linked_in' => $request->linked_in,
        ]);

        if ($request->ajax()) {
            return response()->json(['success' => 'Member added successfully.']);
        }

        return redirect()->route('team')->with('success', 'Member added successfully.');
    }



    public function getTeam(Request $request)
    {
        // Page Length
        $pageNumber = ($request->start / $request->length) + 1;
        $pageLength = $request->length;
        $skip = ($pageNumber - 1) * $pageLength;

        // Page Order
        $orderColumnIndex = $request->order[0]['column'] ?? '0';
        $orderBy = $request->order[0]['dir'] ?? 'desc';

        // get data from team table
        $query = Team::select(['id', 'name', 'photo', 'linked_in']);

        // Search
        $search = $request->search;
        $query = $query->where(function($query) use ($search) {
            $query->orWhere('name', 'like', "%".$search."%");
        });

        $orderByName = 'name';
        switch ($orderColumnIndex) {
            case '0':
                $orderByName = 'id';
                break;
            case '1':
                $orderByName = 'name';
                break;
        }
        $query = $query->orderBy($orderByName, $orderBy);
        $recordsFiltered = $recordsTotal = $query->count();
        $team = $query->skip($skip)->take($pageLength)->get();

        return response()->json(["draw" => $request->draw, "recordsTotal" => $recordsTotal, "recordsFiltered" => $recordsFiltered, 'data' => $team], 200);
    }


    public function updateMember(Request $request, $id)
    {
        // Find the existing team member
        $team = Team::find($id);

        if (!$team) {
            return redirect()->route('team')->with('error', 'Member not found.');
        }

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:20000',
            'linked_in' => 'required|string|max:255|unique:teams,linked_in,' . $id,
        ]);

        // Handle file upload
        $photoPath = $team->photo; // Keep the old photo path if no new photo is uploaded
        
        if ($request->hasFile('photo')) {
            // Delete the old photo if needed
            if ($photoPath && Storage::disk('public')->exists($photoPath)) {
                Storage::disk('public')->delete($photoPath);
            }

            // Store the new photo
            $photoPath = $request->file('photo')->store('team_images', 'public');
            
        }

        // Update the team member
        $team->update([
            'name' => $request->name,
            'photo' => $photoPath,
            'linked_in' => $request->linked_in,
        ]);

        if ($request->ajax()) {
            return response()->json(['success' => 'Member updated successfully.']);
        }

        return redirect()->route('team')->with('success', 'Member updated successfully.');
    }


    


    public function deleteMember(Request $request)
    {
        $id = $request->input('id');
        $member = Team::find($id);

        // Capture the old profile picture path before updating the member's profile
        $ProfilePicPath = $member->profile_pic;

        // Delete old profile picture if it exists
        if ($ProfilePicPath) {
            // Check if the old filename exists in storage and delete it
            if (Storage::disk('public')->exists($ProfilePicPath)) {
                Storage::disk('public')->delete($ProfilePicPath);

                // Log successful deletion
                Log::info("Deleted old profile picture: {$ProfilePicPath}");
            } else {
                // Log if file doesn't exist
                Log::warning("Old profile picture not found in storage: {$ProfilePicPath}");
            }
        }

        if ($member) {
            $member->delete();
            return response()->json(['success' => 'Member deleted successfully.']);
        }

    return response()->json(['error' => 'Member not found.'], 404);
    }

    public function showMember($id)
    {
        $member = Team::find($id);

        if ($member) {
            return response()->json($member);
        }

        return response()->json(['error' => 'Member not found.'], 404);
    }
}
