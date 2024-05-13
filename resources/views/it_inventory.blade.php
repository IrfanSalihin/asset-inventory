<!-- resources/views/it_inventory.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
            IT Inventory
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-2xl font-semibold mb-8 text-center">Manage Your Assets</h3>

                    <!-- Add New Asset Section -->
                    <div class="mb-8">
                        <h4 class="text-xl font-semibold mb-4">Add New Asset</h4>
                        <form action="{{ route('add-link') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="link_title" class="block text-sm font-medium">Product Title:</label>
                                    <input type="text" name="link_title" id="link_title" class="mt-1 p-2 block w-full rounded-md bg-gray-100 border border-gray-300 focus:outline-none focus:border-indigo-500" required>
                                </div>
                                <div>
                                    <label for="link_image" class="block text-sm font-medium">Product Image:</label>
                                    <input type="file" name="link_image" id="link_image" accept="image/*" class="mt-1 p-2 block w-full rounded-md bg-gray-100 border border-gray-300 focus:outline-none focus:border-indigo-500">
                                </div>
                            </div>
                            <button type="submit" class="mt-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-3 rounded hover:shadow-md">Add Asset</button>
                        </form>
                    </div>

                    <!-- Existing Assets Section -->
                    <div>
                        <h4 class="text-xl font-semibold mb-4">Existing Assets</h4>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            @foreach($navigationLinks as $link)
                            <div class="bg-white rounded-lg p-4 shadow-md">
                                @if($link->image_path)
                                <a href="{{ route('asset-details', ['type' => strtolower($link->title)]) }}">
                                    <img src="{{ asset('storage/' . $link->image_path) }}" alt="{{ $link->title }}" class="w-300 h-300 object-cover rounded-t-md mb-2">
                                </a>
                                @endif
                                <div class="flex justify-between items-center">
                                    <h4 class="text-lg font-semibold mb-2">{{ $link->title }}</h4>
                                    <button data-delete-url="{{ route('delete-link', $link->id) }}" class="delete-btn bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-3 rounded hover:shadow-md">Delete</button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div id="deleteModal" class="fixed z-50 inset-0 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 opacity-75"></div>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                            <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg font-medium leading-6 text-gray-900" id="modalTitle">
                                Delete Asset
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500" id="modalDescription">
                                    Are you sure you want to delete this asset?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <form id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                            Delete
                        </button>
                    </form>
                    <button onclick="closeModal()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const deleteButtons = document.querySelectorAll('.delete-btn');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const deleteUrl = this.getAttribute('data-delete-url');
                document.getElementById('deleteForm').action = deleteUrl;
                document.getElementById('deleteModal').classList.remove('hidden');
            });
        });

        function closeModal() {
            document.getElementById('deleteModal').classList.add('hidden');
        }
    </script>
</x-app-layout>