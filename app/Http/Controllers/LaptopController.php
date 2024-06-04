<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $location = $request->input('location');
        $status = $request->input('status');

        $query = Laptop::query();

        if ($search) {
            $query->where('assigned_staff_name', 'LIKE', '%' . $search . '%');
        }

        if ($location) {
            $query->where('location', $location);
        }

        if ($status) {
            $query->where('status', $status);
        }

        $laptops = $query->paginate(20);

        // Fetch distinct locations for the dropdown
        $locations = Laptop::select('location')->distinct()->pluck('location');

        return view('laptop.index', compact('laptops', 'locations'));
    }

    public function create()
    {
        return view('laptop.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'assigned_staff_name' => 'nullable|string|max:255',
            'assigned_staff_number' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'model' => 'nullable|string|max:255',
            'pc_name' => 'nullable|string|max:255',
            'serial_number' => 'nullable|string|max:255',
            'charger' => 'nullable|string|max:255',
            'power_cable' => 'nullable|string|max:255',
            'operating_system' => 'nullable|string|max:255',
            'windows_product_key' => 'nullable|string|max:255',
            'operating_system_bit' => 'nullable|in:32 bit,64 bit',
            'processor' => 'nullable|string|max:255',
            'device_id' => 'nullable|string|max:255',
            'product_id' => 'nullable|string|max:255',
            'hdd_size_gb' => 'nullable|integer',
            'ssd_size_gb' => 'nullable|integer',
            'ram_size_gb' => 'nullable|integer',
            'gpu' => 'nullable|string|max:255',
            'microsoft_office_year' => 'nullable|string|max:255',
            'microsoft_office_license' => 'nullable|string|max:255',
            'microsoft_id' => 'nullable|string|max:255',
            'microsoft_password' => 'nullable|string|max:255',
            'antivirus' => 'nullable|string|in:Available,Not Available',
            'antivirus_expired_date' => 'nullable|date',
            'antivirus_license' => 'nullable|string|max:255',
            'year_purchased' => 'nullable|integer',
            'purchasing_date' => 'nullable|date',
            'price' => 'nullable|numeric',
            'warranty_years' => 'nullable|integer',
            'status' => 'nullable|string|in:Available,Reserve,Damaged,Scrap',
        ]);

        Laptop::create($request->all());

        return redirect()->route('laptops.index')
            ->with('success', 'Laptop created successfully.');
    }

    public function show(Laptop $laptop)
    {
        return view('laptop.show', compact('laptop'));
    }

    public function edit(Laptop $laptop)
    {
        return view('laptop.edit', compact('laptop'));
    }

    public function update(Request $request, Laptop $laptop)
    {
        $request->validate([
            'assigned_staff_name' => 'nullable|string|max:255',
            'assigned_staff_number' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'model' => 'nullable|string|max:255',
            'pc_name' => 'nullable|string|max:255',
            'serial_number' => 'nullable|string|max:255',
            'charger' => 'nullable|string|max:255',
            'power_cable' => 'nullable|string|max:255',
            'operating_system' => 'nullable|string|max:255',
            'windows_product_key' => 'nullable|string|max:255',
            'operating_system_bit' => 'nullable|in:32 bit,64 bit',
            'processor' => 'nullable|string|max:255',
            'device_id' => 'nullable|string|max:255',
            'product_id' => 'nullable|string|max:255',
            'hdd_size_gb' => 'nullable|integer',
            'ssd_size_gb' => 'nullable|integer',
            'ram_size_gb' => 'nullable|integer',
            'gpu' => 'nullable|string|max:255',
            'microsoft_office_year' => 'nullable|string|max:255',
            'microsoft_office_license' => 'nullable|string|max:255',
            'microsoft_id' => 'nullable|string|max:255',
            'microsoft_password' => 'nullable|string|max:255',
            'antivirus' => 'nullable|string|in:Available,Not Available',
            'antivirus_expired_date' => 'nullable|date',
            'antivirus_license' => 'nullable|string|max:255',
            'year_purchased' => 'nullable|integer',
            'purchasing_date' => 'nullable|date',
            'price' => 'nullable|numeric',
            'warranty_years' => 'nullable|integer',
            'status' => 'nullable|string|in:Available,Reserve,Damaged,Scrap',
        ]);

        $laptop->update($request->all());

        return redirect()->route('laptops.index')
            ->with('success', 'Laptop updated successfully');
    }

    public function destroy(Laptop $laptop)
    {
        $laptop->delete();

        return redirect()->route('laptops.index')
            ->with('success', 'Laptop deleted successfully');
    }
}
