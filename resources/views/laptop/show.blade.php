<!-- resources/views/laptop/show.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-900 leading-tight">
            Laptop Details
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-lg">
                <div class="p-8 bg-white border-b border-gray-200">
                    <!-- Laptop Information -->
                    <div class="mb-8">
                        <h4 class="text-2xl font-bold mb-6 text-gray-900">Laptop Information</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @php
                            $details = [
                            'Assigned Staff' => 'assigned_staff_name',
                            'Assigned Staff Number' => 'assigned_staff_number',
                            'Location' => 'location',
                            'Model' => 'model',
                            'PC Name' => 'pc_name',
                            'Serial Number' => 'serial_number',
                            'Charger' => 'charger',
                            'Power Cable' => 'power_cable',
                            'Operating System' => 'operating_system',
                            'Windows Product Key' => 'windows_product_key',
                            'Operating System Bit' => 'operating_system_bit',
                            'Processor' => 'processor',
                            'Device ID' => 'device_id',
                            'Product ID' => 'product_id',
                            'HDD Size (GB)' => 'hdd_size_gb',
                            'SSD Size (GB)' => 'ssd_size_gb',
                            'RAM Size (GB)' => 'ram_size_gb',
                            'GPU' => 'gpu',
                            'Microsoft Office Year' => 'microsoft_office_year',
                            'Microsoft Office License' => 'microsoft_office_license',
                            'Microsoft ID' => 'microsoft_id',
                            'Microsoft Password' => 'microsoft_password',
                            'Antivirus' => 'antivirus',
                            'Antivirus Expired Date' => 'antivirus_expired_date',
                            'Antivirus License' => 'antivirus_license',
                            'Year Purchased' => 'year_purchased',
                            'Purchasing Date' => 'purchasing_date',
                            'Price' => 'price',
                            'Warranty Years' => 'warranty_years',
                            'Status' => 'status'
                            ];
                            @endphp

                            @foreach ($details as $label => $attribute)
                            @if (!in_array($attribute, ['antivirus_expired_date', 'antivirus_license']) || $laptop->antivirus === "Available")
                            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
                                <p class="text-lg font-semibold text-gray-700 mb-1">{{ $label }}:</p>
                                <p class="text-gray-600">{{ $laptop->$attribute }}</p>
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