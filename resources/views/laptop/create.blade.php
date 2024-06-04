<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
            Create Laptop
        </h2>
    </x-slot>

    <div class="py-8 px-4">
        <div class="max-w-2xl mx-auto">
            <div class="bg-white shadow-sm rounded-lg p-6">
                <form method="POST" action="{{ route('laptops.store') }}">
                    @csrf

                    <!-- Assigned Staff Name -->
                    <div class="mb-4">
                        <label for="assigned_staff_name" class="block text-sm font-medium text-gray-700">Assigned Staff Name</label>
                        <input type="text" name="assigned_staff_name" id="assigned_staff_name" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- Assigned Staff Number -->
                    <div class="mb-4">
                        <label for="assigned_staff_number" class="block text-sm font-medium text-gray-700">Assigned Staff Number</label>
                        <input type="text" name="assigned_staff_number" id="assigned_staff_number" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- Location -->
                    <div class="mb-4">
                        <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                        <select name="location" id="location" class="form-select mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="Ibu Pejabat">Ibu Pejabat</option>
                            <option value="Ar-Rahnu Ketereh">Ar-Rahnu Ketereh</option>
                            <option value="Ar-Rahnu Kota Bharu">Ar-Rahnu Kota Bharu</option>
                            <option value="Ar-Rahnu Wakaf Bharu">Ar-Rahnu Wakaf Bharu</option>
                            <option value="Ar-Rahnu Kampong Bharu">Ar-Rahnu Kampong Bharu</option>
                            <option value="Ar-Rahnu Tanah Merah">Ar-Rahnu Tanah Merah</option>
                            <option value="Little Caliphs Reef Rawang">Little Caliphs Reef Rawang</option>
                            <option value="Little Caliphs Sungai Buaya">Little Caliphs Sungai Buaya</option>
                            <option value="Little Caliphs Wangsa Maju">Little Caliphs Wangsa Maju</option>
                            <option value="Kafetaria">Kafetaria</option>
                        </select>
                    </div>

                    <!-- Model -->
                    <div class="mb-4">
                        <label for="model" class="block text-sm font-medium text-gray-700">Model</label>
                        <input type="text" name="model" id="model" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- PC Name -->
                    <div class="mb-4">
                        <label for="pc_name" class="block text-sm font-medium text-gray-700">PC Name</label>
                        <input type="text" name="pc_name" id="pc_name" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- Serial Number -->
                    <div class="mb-4">
                        <label for="serial_number" class="block text-sm font-medium text-gray-700">Serial Number</label>
                        <input type="text" name="serial_number" id="serial_number" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- Charger -->
                    <div class="mb-4">
                        <label for="charger" class="block text-sm font-medium text-gray-700">Charger</label>
                        <select name="charger" id="charger" class="form-select mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="Available">Available</option>
                            <option value="Not Available">Not Available</option>
                        </select>
                    </div>

                    <!-- Power Cable -->
                    <div class="mb-4">
                        <label for="power_cable" class="block text-sm font-medium text-gray-700">Power Cable</label>
                        <select name="power_cable" id="power_cable" class="form-select mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="Available">Available</option>
                            <option value="Not Available">Not Available</option>
                        </select>
                    </div>

                    <!-- Operating System -->
                    <div class="mb-4">
                        <label for="operating_system" class="block text-sm font-medium text-gray-700">Operating System</label>
                        <input type="text" name="operating_system" id="operating_system" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- Windows Product Key -->
                    <div class="mb-4">
                        <label for="windows_product_key" class="block text-sm font-medium text-gray-700">Windows Product Key (License)</label>
                        <input type="text" name="windows_product_key" id="windows_product_key" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- Operating System (bit) -->
                    <div class="mb-4">
                        <label for="operating_system_bit" class="block text-sm font-medium text-gray-700">Operating System (bit)</label>
                        <select name="operating_system_bit" id="operating_system_bit" class="form-select mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="32 bit">32 bit</option>
                            <option value="64 bit">64 bit</option>
                        </select>
                    </div>

                    <!-- Processor -->
                    <div class="mb-4">
                        <label for="processor" class="block text-sm font-medium text-gray-700">Processor</label>
                        <input type="text" name="processor" id="processor" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- Device ID -->
                    <div class="mb-4">
                        <label for="device_id" class="block text-sm font-medium text-gray-700">Device ID</label>
                        <input type="text" name="device_id" id="device_id" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- Product ID -->
                    <div class="mb-4">
                        <label for="product_id" class="block text-sm font-medium text-gray-700">Product ID</label>
                        <input type="text" name="product_id" id="product_id" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- HDD Size (GB) -->
                    <div class="mb-4">
                        <label for="hdd_size_gb" class="block text-sm font-medium text-gray-700">HDD Size (GB)</label>
                        <input type="number" name="hdd_size_gb" id="hdd_size_gb" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- SSD Size (GB) -->
                    <div class="mb-4">
                        <label for="ssd_size_gb" class="block text-sm font-medium text-gray-700">SSD Size (GB)</label>
                        <input type="number" name="ssd_size_gb" id="ssd_size_gb" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- RAM Size (GB) -->
                    <div class="mb-4">
                        <label for="ram_size_gb" class="block text-sm font-medium text-gray-700">RAM Size (GB)</label>
                        <input type="number" name="ram_size_gb" id="ram_size_gb" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- GPU -->
                    <div class="mb-4">
                        <label for="gpu" class="block text-sm font-medium text-gray-700">GPU</label>
                        <input type="text" name="gpu" id="gpu" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- Microsoft Office Year -->
                    <div class="mb-4">
                        <label for="microsoft_office_year" class="block text-sm font-medium text-gray-700">Microsoft Office Year</label>
                        <input type="text" name="microsoft_office_year" id="microsoft_office_year" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- Microsoft Office License -->
                    <div class="mb-4">
                        <label for="microsoft_office_license" class="block text-sm font-medium text-gray-700">Microsoft Office License</label>
                        <input type="text" name="microsoft_office_license" id="microsoft_office_license" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- Microsoft ID -->
                    <div class="mb-4">
                        <label for="microsoft_id" class="block text-sm font-medium text-gray-700">Microsoft ID</label>
                        <input type="text" name="microsoft_id" id="microsoft_id" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- Microsoft Password -->
                    <div class="mb-4">
                        <label for="microsoft_password" class="block text-sm font-medium text-gray-700">Microsoft Password</label>
                        <input type="text" name="microsoft_password" id="microsoft_password" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- Antivirus -->
                    <div class="mb-4">
                        <label for="antivirus" class="block text-sm font-medium text-gray-700">Antivirus</label>
                        <select name="antivirus" id="antivirus" class="form-select mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="Available">Available</option>
                            <option value="Not Available">Not Available</option>
                        </select>
                    </div>

                    <!-- Antivirus Expired Date -->
                    <div class="mb-4">
                        <label for="antivirus_expired_date" class="block text-sm font-medium text-gray-700">Antivirus Expired Date</label>
                        <input type="date" name="antivirus_expired_date" id="antivirus_expired_date" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- Antivirus License -->
                    <div class="mb-4">
                        <label for="antivirus_license" class="block text-sm font-medium text-gray-700">Antivirus License</label>
                        <input type="text" name="antivirus_license" id="antivirus_license" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- Year Purchased -->
                    <div class="mb-4">
                        <label for="year_purchased" class="block text-sm font-medium text-gray-700">Year Purchased</label>
                        <input type="text" name="year_purchased" id="year_purchased" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- Purchasing Date -->
                    <div class="mb-4">
                        <label for="purchasing_date" class="block text-sm font-medium text-gray-700">Purchasing Date</label>
                        <input type="date" name="purchasing_date" id="purchasing_date" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- Price -->
                    <div class="mb-4">
                        <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                        <input type="text" name="price" id="price" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- Warranty Years -->
                    <div class="mb-4">
                        <label for="warranty_years" class="block text-sm font-medium text-gray-700">Warranty Years</label>
                        <input type="number" name="warranty_years" id="warranty_years" class="form-input mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <!-- Status -->
                    <div class="mb-4">
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <select name="status" id="status" class="form-select mt-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="Available">Available</option>
                            <option value="Reserve">Reserve</option>
                            <option value="Damaged">Damaged</option>
                            <option value="Scrap">Scrap</option>
                        </select>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="ml-4 inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 disabled:opacity-25 transition">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the necessary elements
            var antivirusDropdown = document.getElementById("antivirus");
            var expiredDateLabel = document.querySelector("label[for='antivirus_expired_date']");
            var expiredDateField = document.getElementById("antivirus_expired_date");
            var licenseLabel = document.querySelector("label[for='antivirus_license']");
            var licenseField = document.getElementById("antivirus_license");

            // Function to toggle antivirus fields based on selected value
            function toggleAntivirusFields() {
                // Check the value of the antivirus dropdown
                var value = antivirusDropdown.value;
                if (value === "Available") {
                    expiredDateLabel.style.display = "block";
                    expiredDateField.style.display = "block";
                    licenseLabel.style.display = "block";
                    licenseField.style.display = "block";
                } else {
                    expiredDateLabel.style.display = "none";
                    expiredDateField.style.display = "none";
                    licenseLabel.style.display = "none";
                    licenseField.style.display = "none";
                }
            }

            // Add event listener to the antivirus dropdown to toggle fields when its value changes
            antivirusDropdown.addEventListener("change", function() {
                toggleAntivirusFields();
            });

            // Toggle antivirus fields when the page loads
            toggleAntivirusFields();
        });
    </script>
</x-app-layout>