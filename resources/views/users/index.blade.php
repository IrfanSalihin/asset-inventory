<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            User Management
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-2xl mb-4 flex justify-between items-center">
                        Manage Users
                        <!-- Add User Button -->
                        <a href="{{ route('admin.register') }}" class="inline-flex items-center bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md shadow-md transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v6H3a1 1 0 100 2h6v6a1 1 0 102 0v-6h6a1 1 0 100-2h-6V3a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                            Add User
                        </a>
                    </h3>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Role
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($users as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $user->name }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $user->email }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="relative">
                                        <select id="roleSelect_{{ $user->id }}" class="block appearance-none w-full bg-white border border-gray-300 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" onchange="openRoleChangeModal('{{ $user->id }}')">
                                            <option value="Admin" {{ $user->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                                            <option value="User" {{ $user->role == 'User' ? 'selected' : '' }}>User</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button class="delete-btn text-red-600 hover:text-red-900" data-user-id="{{ $user->id }}" data-delete-url="{{ route('users.destroy', $user->id) }}" onclick="openDeleteModal('{{ $user->id }}')">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-lg font-semibold mb-4">Confirm Delete</h3>
            <p>Are you sure you want to delete this user?</p>
            <div class="mt-4">
                <button class="bg-red-600 text-white px-4 py-2 rounded mr-2" onclick="confirmDelete()">
                    Delete
                </button>
                <button class="bg-gray-300 px-4 py-2 rounded" onclick="closeDeleteModal()">
                    Cancel
                </button>
            </div>
            <form id="deleteForm" method="POST" class="hidden">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>

    <!-- Role Change Confirmation Modal -->
    <div id="roleChangeModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-lg font-semibold mb-4">Confirm Role Change</h3>
            <p>Are you sure you want to change this user's role?</p>
            <div class="mt-4">
                <button class="bg-blue-600 text-white px-4 py-2 rounded mr-2" onclick="confirmRoleChange()">
                    Change Role
                </button>
                <button class="bg-gray-300 px-4 py-2 rounded" onclick="closeRoleChangeModal()">
                    Cancel
                </button>
            </div>
            <form id="roleChangeForm" method="POST" class="hidden">
                @csrf
                @method('PUT')
                <input type="hidden" id="roleUserId" name="user_id" value="">
                <input type="hidden" id="newRole" name="role" value="">
            </form>
        </div>
    </div>

    <script>
        function openDeleteModal(userId) {
            const deleteUrl = document.querySelector(`button[data-user-id="${userId}"]`).getAttribute('data-delete-url');
            document.getElementById('deleteForm').action = deleteUrl;
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        function closeDeleteModal() {
            document.getElementById('deleteModal').classList.add('hidden');
        }

        function openRoleChangeModal(userId) {
            const selectedRole = document.getElementById(`roleSelect_${userId}`).value;
            const form = document.getElementById('roleChangeForm');
            form.action = `/users/${userId}`;
            document.getElementById('roleUserId').value = userId;
            document.getElementById('newRole').value = selectedRole;
            document.getElementById('roleChangeModal').classList.remove('hidden');
        }

        function closeRoleChangeModal() {
            document.getElementById('roleChangeModal').classList.add('hidden');
        }

        function confirmDelete() {
            document.getElementById('deleteForm').submit();
        }

        function confirmRoleChange() {
            document.getElementById('roleChangeForm').submit();
        }
    </script>
</x-app-layout>