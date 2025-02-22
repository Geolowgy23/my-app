<x-guest-layout>
<div class="container mx-auto max-w-md mt-8">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input type="text" name="name" id="name" required class="w-full border-gray-300 rounded-lg">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" name="email" id="email" required class="w-full border-gray-300 rounded-lg">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input type="password" name="password" id="password" required class="w-full border-gray-300 rounded-lg">
        </div>
        <button type="submit" class="bg-black  text-white px-6 py-3 rounded-lg border-2 border-green-800 shadow-md hover:from-green-600 hover:to-green-800 hover:scale-105 transform transition duration-300">
    Register
</button>

    </form>
</div>
</x-guest-layout>
