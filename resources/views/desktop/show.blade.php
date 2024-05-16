<!-- resources/views/desktop/show.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
            Desktop Details
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-8 bg-white border-b border-gray-200">
                    <!-- Desktop Information -->
                    <div class="mb-8">
                        <h4 class="text-2xl font-semibold mb-4 text-gray-800">Desktop Information</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            @php
                            $details = [
                            'Assigned Staff' => 'assigned_staff_name',
                            'Assigned Staff Number' => 'assigned_staff_number',
                            'Location' => 'location',
                            'Desktop Model' => 'desktop_model',
                            'Desktop Name' => 'desktop_name',
                            'Desktop Serial Number' => 'desktop_serial_number',
                            'Monitor Model' => 'monitor_model',
                            'Monitor Serial Number' => 'monitor_serial_number',
                            'Keyboard' => 'keyboard',
                            'Mouse' => 'mouse',
                            'Power Cable' => 'power_cable',
                            'Display Cable' => 'display_cable',
                            'Operating System' => 'operating_system',
                            'Windows Product Key' => 'windows_product_key',
                            'Operating System Bit' => 'operating_system_bit',
                            'Processor' => 'processor',
                            'Device ID' => 'device_id',
                            'Product ID' => 'product_id',
                            'HDD Size (GB)' => 'hdd_sizes_gb',
                            'SSD Size (GB)' => 'ssd_sizes_gb',
                            'RAM Size (GB)' => 'ram_sizes_gb',
                            'Microsoft Office Year' => 'microsoft_office_year',
                            'Microsoft Office License' => 'microsoft_office_license',
                            'Microsoft Office ID' => 'microsoft_office_id',
                            'Microsoft Office Password' => 'microsoft_office_password',
                            'Antivirus' => 'antivirus',
                            'Antivirus Expired Date' => 'antivirus_expired_date',
                            'Antivirus License' => 'antivirus_license',
                            'Year Purchased' => 'year_purchased',
                            'Account Date Purchase' => 'account_date_purchase',
                            'Date Purchased' => 'date_purchased',
                            'Price' => 'price',
                            'Status' => 'status'
                            ];
                            @endphp

                            @foreach ($details as $label => $attribute)
                            @if (!in_array($attribute, ['antivirus_expired_date', 'antivirus_license']) || $desktop->antivirus === "Available")
                            <div class="bg-gray-50 p-6 rounded-lg shadow-md border border-gray-200">
                                <p class="text-lg font-semibold text-gray-800 mb-2">{{ $label }}:</p>
                                <p class="text-gray-600">{{ $desktop->$attribute }}</p>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>