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
                    <!-- Search Form -->
                    <form method="GET" action="{{ route('desktops.index') }}" class="mb-4 flex flex-wrap -mx-2 space-y-2 md:space-y-0">
                        <div class="w-full md:w-1/3 px-2">
                            <label for="search" class="block text-sm font-medium text-gray-700">Assigned Staff</label>
                            <input type="text" name="search" id="search" value="{{ request('search') }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="w-full md:w-1/3 px-2">
                            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                            <select name="location" id="location" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">All Locations</option>
                                @foreach($locations as $location)
                                <option value="{{ $location }}" {{ request('location') == $location ? 'selected' : '' }}>{{ $location }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="w-full md:w-1/3 px-2 flex items-end justify-end">
                            <button type="submit" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full md:w-auto md:px-6">Search</button>
                        </div>
                    </form>
                    <!-- Desktop Information -->
                    <div class="flex justify-between items-center mb-4">
                        <h4 class="text-xl font-semibold">Desktop List</h4>
                        <a href="{{ route('desktops.create') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Add Desktop
                        </a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Assigned Staff
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Location
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($desktops as $desktop)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $desktop->assigned_staff_name }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $desktop->location }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ route('desktops.show', $desktop->id) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                                        <a href="{{ route('desktops.edit', $desktop->id) }}" class="text-blue-600 hover:text-blue-900 ml-4">Edit</a>
                                        <form action="{{ route('desktops.destroy', $desktop->id) }}" method="POST" class="inline ml-4">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $desktops->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>