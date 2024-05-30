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

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        <a href="{{ route('desktops.index') }}" class="block bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-4 px-6 rounded text-center">Desktops</a>
                        <a href="#" class="block bg-gray-600 text-white font-bold py-4 px-6 rounded text-center cursor-not-allowed" title="Coming soon">Laptops</a>
                        <a href="#" class="block bg-gray-600 text-white font-bold py-4 px-6 rounded text-center cursor-not-allowed" title="Coming soon">Cameras</a>
                        <a href="#" class="block bg-gray-600 text-white font-bold py-4 px-6 rounded text-center cursor-not-allowed" title="Coming soon">Other</a>
                        <a href="#" class="block bg-gray-600 text-white font-bold py-4 px-6 rounded text-center cursor-not-allowed" title="Coming soon">Printers</a>
                        <a href="#" class="block bg-gray-600 text-white font-bold py-4 px-6 rounded text-center cursor-not-allowed" title="Coming soon">Smartphones</a>
                        <a href="#" class="block bg-gray-600 text-white font-bold py-4 px-6 rounded text-center cursor-not-allowed" title="Coming soon">iPads</a>
                        <a href="#" class="block bg-gray-600 text-white font-bold py-4 px-6 rounded text-center cursor-not-allowed" title="Coming soon">Voice Recorders</a>
                        <a href="#" class="block bg-gray-600 text-white font-bold py-4 px-6 rounded text-center cursor-not-allowed" title="Coming soon">Projectors</a>
                        <a href="#" class="block bg-gray-600 text-white font-bold py-4 px-6 rounded text-center cursor-not-allowed" title="Coming soon">MyCard Readers</a>
                        <a href="#" class="block bg-gray-600 text-white font-bold py-4 px-6 rounded text-center cursor-not-allowed" title="Coming soon">Barcode Scanners</a>
                        <a href="#" class="block bg-gray-600 text-white font-bold py-4 px-6 rounded text-center cursor-not-allowed" title="Coming soon">Walkie Talkies</a>
                        <a href="#" class="block bg-gray-600 text-white font-bold py-4 px-6 rounded text-center cursor-not-allowed" title="Coming soon">UPS</a>
                        <a href="#" class="block bg-gray-600 text-white font-bold py-4 px-6 rounded text-center cursor-not-allowed" title="Coming soon">Software</a>
                        <a href="#" class="block bg-gray-600 text-white font-bold py-4 px-6 rounded text-center cursor-not-allowed" title="Coming soon">Hard Discs</a>
                        <a href="#" class="block bg-gray-600 text-white font-bold py-4 px-6 rounded text-center cursor-not-allowed" title="Coming soon">Photostat Machines</a>
                        <a href="#" class="block bg-gray-600 text-white font-bold py-4 px-6 rounded text-center cursor-not-allowed" title="Coming soon">Reserved</a>
                        <a href="#" class="block bg-gray-600 text-white font-bold py-4 px-6 rounded text-center cursor-not-allowed" title="Coming soon">Damaged</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>