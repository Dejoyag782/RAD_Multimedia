<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;

class DashController extends Controller
{
    //
    public function index()
    {
        // Count the number of messages where the 'archive' column is 1
        $archivedMessagesCount = Messages::where('archived', 0)->count();

        // Pass the count to the view
        return view('dashboard.dash.index', compact('archivedMessagesCount'));
    }
}
