<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NavigationLink;

class ITInventoryController extends Controller
{
    public function index()
    {
        // Fetch all navigation links from the database
        $navigationLinks = NavigationLink::all();

        // Pass the navigation links to the view
        return view('it_inventory', compact('navigationLinks'));
    }
}
