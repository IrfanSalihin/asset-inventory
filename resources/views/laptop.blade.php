<!-- resources/views/desktop.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
            Laptop Details
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Desktop Details Content -->
                    <div>
                        <h4 class="text-xl font-semibold mb-4">Laptop Information</h4>
                        <!-- Add desktop-specific information here -->
                        <p>This is the detailed information about the laptop asset.</p>
                        <!-- Example: -->
                        <p>Processor: Intel Core i7</p>
                        <p>RAM: 16GB</p>
                        <!-- Add more desktop-specific information as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>