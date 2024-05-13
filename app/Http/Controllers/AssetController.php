<?php

// app/Http/Controllers/AssetController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function show($type)
    {
        // Logic to fetch and display data for each asset type
        return view($type);
    }

}

