<!-- resources/views/it_inventory.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            IT Inventory
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Page Title -->
                    <h3 class="text-lg font-semibold mb-4">Manage Product</h3>

                    <!-- Add New Navigation Link Form -->
                    <form action="{{ route('add-link') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="link_title" class="block text-sm font-medium text-gray-700">Product Title:</label>
                            <input type="text" name="link_title" id="link_title" class="mt-1 p-2 border border-gray-300 rounded-md" required>
                        </div>
                        <div class="mb-4">
                            <label for="link_image" class="block text-sm font-medium text-gray-700">Product Image:</label>
                            <input type="file" name="link_image" id="link_image" class="mt-1 p-2 border border-gray-300 rounded-md">
                        </div>
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Add Link
                        </button>
                    </form>

                    <!-- Existing Navigation Links -->
                    <div class="mt-8">
                        <h3 class="text-lg font-semibold mb-4">Existing Products</h3>
                        <ul>
                            @foreach($navigationLinks as $link)
                            <li class="flex items-center justify-between mb-2">
                                <span>{{ $link->title }}</span>
                                @if($link->image_path)
                                <img src="{{ asset('storage/' . $link->image_path) }}" alt="{{ $link->title }}" class="w-16 h-16">
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>