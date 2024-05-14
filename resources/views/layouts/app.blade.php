<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- Styles -->
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .flex-container {
            display: flex;
            height: 100%;
        }

        .sidebar {
            width: 250px;
            /* Set initial width */
            overflow-x: hidden;
            transition: width 0.3s ease, transform 0.3s ease;
            /* Added transform transition */
            transform: translateX(0);
            /* Added transform property */
            background-color: #36454F;
            /* Adjusted to match the toggle button's grey icon color */
            color: white;
            /* Text color */
        }

        .content {
            flex: 1;
            /* Allow content to grow and fill remaining space */
            background-color: #f4f4f4;
            /* Background color for the content area */
            overflow-y: auto;
            /* Enable vertical scrolling if content overflows */
        }

        .sidebar.active {
            display: block;
            /* Show the sidebar when it's active */
        }

        .sidebar-collapsed {
            width: 0;
            /* Set collapsed width */
            transform: translateX(-250px);
            /* Move sidebar off screen */
        }

        .no-transition .sidebar,
        .no-transition .content {
            transition: none;
            /* Disable transition */
        }

        .sidebar .logout-button {
            width: 100%;
            /* Set the width to 100% */
            display: block;
            /* Ensure it takes the full width */
        }

        /* Profile Button Styles */
        .profile-button {
            width: 100%;
            /* Set the width to 100% */
            display: block;
            /* Ensure it takes the full width */
            background-color: #4caf50;
            /* Custom background color for the profile button */
            color: white;
            /* Text color */
            border: none;
            /* Remove border */
            outline: none;
            /* Remove outline */
            padding: 10px 20px;
            /* Add padding */
            margin-top: 10px;
            /* Add margin top */
            text-decoration: none;
            /* Remove default underline */
            margin-bottom: -15px;
        }

        .profile-button:hover {
            background-color: #45a049;
            /* Darker background color on hover */
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="flex-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <!-- Sidebar Content -->
            <div class="h-full flex flex-col justify-between">
                <!-- Logo or Title -->
                <div class="p-4 text-center">
                    <span class="text-2xl font-bold">App</span>
                </div>

                <!-- Navigation Links -->
                <nav class="flex-1">
                    <ul class="p-2">
                        <li><a href="{{ route('dashboard') }}" class="block py-2 px-4 hover:bg-gray-700">Dashboard</a></li>
                        <li><a href="{{ route('it-inventory') }}" class="block py-2 px-4 hover:bg-gray-700">Asset</a></li>
                        <li><a href="#" class="block py-2 px-4 hover:bg-gray-700">Email Inventory</a></li>
                        <li><a href="#" class="block py-2 px-4 hover:bg-gray-700">User Management</a></li>
                    </ul>
                </nav>

                <!-- Custom Button for Profile -->
                <div class="p-4 text-center">
                    <a href="{{ route('profile.edit') }}" class="profile-button block py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md">Profile</a>
                </div>


                <!-- Logout Button -->
                <div class="p-4 text-center">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="logout-button block py-2 bg-red-600 hover:bg-red-700 text-white rounded-md">Logout</button>
                    </form>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="content">
            <div class="min-h-screen bg-gray-100">
                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>

    <button class="toggle-sidebar fixed top-4 left-4 z-50 bg-gray-800 text-white px-4 py-2 rounded-md">
        <i class="fas fa-bars"></i> <!-- Hamburger menu icon -->
    </button>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.querySelector('.sidebar');
            const content = document.querySelector('.content');
            const toggleButton = document.querySelector('.toggle-sidebar');

            // Function to toggle sidebar
            function toggleSidebar() {
                sidebar.classList.toggle('sidebar-collapsed');
                content.classList.toggle('ml-0');

                // Save the state of the sidebar to localStorage
                const isCollapsed = sidebar.classList.contains('sidebar-collapsed');
                localStorage.setItem('sidebarCollapsed', isCollapsed ? 'true' : 'false');
            }

            // Event listener for sidebar toggle button
            toggleButton.addEventListener('click', function() {
                toggleSidebar();
            });

            // Check if sidebar state is saved in localStorage and set it accordingly
            const isCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';
            if (isCollapsed) {
                sidebar.classList.add('sidebar-collapsed');
                content.classList.add('ml-0');
            } else {
                sidebar.classList.add('active'); // Ensure sidebar is visible if not collapsed
            }

            // Show the sidebar after setting initial state to prevent flicker
            sidebar.style.display = 'block';

            // Add class to body to disable transition on initial page load
            document.body.classList.add('no-transition');

            // Remove no-transition class after a short delay to allow initial animation
            setTimeout(function() {
                document.body.classList.remove('no-transition');
            }, 50);
        });
    </script>
</body>

</html>