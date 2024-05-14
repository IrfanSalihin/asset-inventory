<!-- resources/views/desktop/view.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
            Desktop Details
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Desktop Information -->
                    <div class="mb-8">
                        <h4 class="text-2xl font-semibold mb-4">Desktop Information</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-2">
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Assigned Staff:</p>
                                <p>{{ $desktop->assigned_staff_name }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Assigned Staff Number:</p>
                                <p>{{ $desktop->assigned_staff_number }}</p>
                            </div>
                            <!-- Add more sections for other desktop attributes -->
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Location:</p>
                                <p>{{ $desktop->location }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Desktop Model:</p>
                                <p>{{ $desktop->desktop_model }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Desktop Name:</p>
                                <p>{{ $desktop->desktop_name }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Desktop Serial Number:</p>
                                <p>{{ $desktop->desktop_serial_number }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Monitor Model:</p>
                                <p>{{ $desktop->monitor_model }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Monitor Serial Number:</p>
                                <p>{{ $desktop->monitor_serial_number }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Keyboard:</p>
                                <p>{{ $desktop->keyboard }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Mouse:</p>
                                <p>{{ $desktop->mouse }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Power Cable:</p>
                                <p>{{ $desktop->power_cable }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Display Cable:</p>
                                <p>{{ $desktop->display_cable }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Operating System:</p>
                                <p>{{ $desktop->operating_system }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Windows Product Key:</p>
                                <p>{{ $desktop->windows_product_key }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Operating System Bit:</p>
                                <p>{{ $desktop->operating_system_bit }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Processor:</p>
                                <p>{{ $desktop->processor }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Device ID:</p>
                                <p>{{ $desktop->device_id }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Product ID:</p>
                                <p>{{ $desktop->product_id }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">HDD Size (GB):</p>
                                <p>{{ $desktop->hdd_sizes_gb }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">SSD Size (GB):</p>
                                <p>{{ $desktop->ssd_sizes_gb }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">RAM Size (GB):</p>
                                <p>{{ $desktop->ram_sizes_gb }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Microsoft Office Year:</p>
                                <p>{{ $desktop->microsoft_office_year }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Microsoft Office License:</p>
                                <p>{{ $desktop->microsoft_office_license }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Microsoft Office ID:</p>
                                <p>{{ $desktop->microsoft_office_id }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Microsoft Office Password:</p>
                                <p>{{ $desktop->microsoft_office_password }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Antivirus:</p>
                                <p>{{ $desktop->antivirus }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Antivirus Expired Date:</p>
                                @if ($desktop->antivirus === "Available")
                                <p>{{ $desktop->antivirus_expired_date }}</p>
                                @else
                                <p>Not Available</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Antivirus License:</p>
                                @if ($desktop->antivirus === "Available")
                                <p>{{ $desktop->antivirus_license }}</p>
                                @else
                                <p>Not Available</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Year Purchased:</p>
                                <p>{{ $desktop->year_purchased }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Account Date Purchase:</p>
                                <p>{{ $desktop->account_date_purchase }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Date Purchased:</p>
                                <p>{{ $desktop->date_purchased }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Price:</p>
                                <p>{{ $desktop->price }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg font-semibold">Status:</p>
                                <p>{{ $desktop->status }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>