<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NavigationLink;

class NavigationController extends Controller
{
    public function addLink(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'link_title' => 'required|string|max:255',
            'link_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the image validation rules as needed
        ]);

        // Upload the image if provided
        $imagePath = null;
        if ($request->hasFile('link_image')) {
            $imagePath = $request->file('link_image')->store('link_images', 'public');
        }

        // Create new navigation link
        NavigationLink::create([
            'title' => $validatedData['link_title'],
            'image_path' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Navigation link added successfully.');
    }

    public function deleteLink($id)
    {
        // Find the navigation link
        $link = NavigationLink::findOrFail($id);

        // Delete the link
        $link->delete();

        return redirect()->back()->with('success', 'Navigation link deleted successfully.');
    }
}
