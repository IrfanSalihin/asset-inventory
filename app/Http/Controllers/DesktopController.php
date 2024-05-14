<?php

namespace App\Http\Controllers;

use App\Models\Desktop;
use Illuminate\Http\Request;

class DesktopController extends Controller
{
    public function index()
    {
        $desktops = Desktop::paginate(20);
        return view('desktop.index', compact('desktops'));
    }

    public function create()
    {
        return view('desktop.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'assigned_staff_name' => 'nullable|string|max:255',
            'assigned_staff_number' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'desktop_model' => 'nullable|string|max:255',
            'desktop_name' => 'nullable|string|max:255',
            'desktop_serial_number' => 'nullable|string|max:255',
            'monitor_model' => 'nullable|string|max:255',
            'monitor_serial_number' => 'nullable|string|max:255',
            'keyboard' => 'nullable|in:Available,Not Available',
            'mouse' => 'nullable|in:Available,Not Available',
            'power_cable' => 'nullable|in:Available,Not Available',
            'display_cable' => 'nullable|in:Available,Not Available',
            'operating_system' => 'nullable|string|max:255',
            'windows_product_key' => 'nullable|string|max:255',
            'operating_system_bit' => 'nullable|in:32 bit,64 bit',
            'processor' => 'nullable|string|max:255',
            'device_id' => 'nullable|string|max:255',
            'product_id' => 'nullable|string|max:255',
            'hdd_sizes_gb' => 'nullable|integer',
            'ssd_sizes_gb' => 'nullable|integer',
            'ram_sizes_gb' => 'nullable|integer',
            'microsoft_office_year' => 'nullable|string|max:255',
            'microsoft_office_license' => 'nullable|string|max:255',
            'microsoft_office_id' => 'nullable|string|max:255',
            'microsoft_office_password' => 'nullable|string|max:255',
            'antivirus' => 'nullable|in:Available,Not Available',
            'antivirus_expired_date' => 'nullable|date',
            'antivirus_license' => 'nullable|string|max:255',
            'year_purchased' => 'nullable|integer',
            'account_date_purchase' => 'nullable|date',
            'date_purchased' => 'nullable|date',
            'price' => 'nullable|numeric',
            'status' => 'nullable|in:Available,Reserve,Damaged,Scrap',
        ]);

        Desktop::create($request->all());

        return redirect()->route('desktops.index')
            ->with('success', 'Desktop created successfully.');
    }

    public function show(Desktop $desktop)
    {
        return view('desktop.show', compact('desktop'));
    }

    public function edit(Desktop $desktop)
    {
        return view('desktop.edit', compact('desktop'));
    }

    public function update(Request $request, Desktop $desktop)
    {
        $request->validate([
            'assigned_staff_name' => 'nullable|string|max:255',
            'assigned_staff_number' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'desktop_model' => 'nullable|string|max:255',
            'desktop_name' => 'nullable|string|max:255',
            'desktop_serial_number' => 'nullable|string|max:255',
            'monitor_model' => 'nullable|string|max:255',
            'monitor_serial_number' => 'nullable|string|max:255',
            'keyboard' => 'nullable|in:Available,Not Available',
            'mouse' => 'nullable|in:Available,Not Available',
            'power_cable' => 'nullable|in:Available,Not Available',
            'display_cable' => 'nullable|in:Available,Not Available',
            'operating_system' => 'nullable|string|max:255',
            'windows_product_key' => 'nullable|string|max:255',
            'operating_system_bit' => 'nullable|in:32 bit,64 bit',
            'processor' => 'nullable|string|max:255',
            'device_id' => 'nullable|string|max:255',
            'product_id' => 'nullable|string|max:255',
            'hdd_sizes_gb' => 'nullable|integer',
            'ssd_sizes_gb' => 'nullable|integer',
            'ram_sizes_gb' => 'nullable|integer',
            'microsoft_office_year' => 'nullable|string|max:255',
            'microsoft_office_license' => 'nullable|string|max:255',
            'microsoft_office_id' => 'nullable|string|max:255',
            'microsoft_office_password' => 'nullable|string|max:255',
            'antivirus' => 'nullable|in:Available,Not Available',
            'antivirus_expired_date' => 'nullable|date',
            'antivirus_license' => 'nullable|string|max:255',
            'year_purchased' => 'nullable|integer',
            'account_date_purchase' => 'nullable|date',
            'date_purchased' => 'nullable|date',
            'price' => 'nullable|numeric',
            'status' => 'nullable|in:Available,Reserve,Damaged,Scrap',
        ]);

        $desktop->update($request->all());

        return redirect()->route('desktops.index')
            ->with('success', 'Desktop updated successfully');
    }

    public function destroy(Desktop $desktop)
    {
        $desktop->delete();

        return redirect()->route('desktops.index')
            ->with('success', 'Desktop deleted successfully');
    }
}
