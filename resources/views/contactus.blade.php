<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100 flex justify-center items-start min-h-screen text-center p-4">

    <div id="app" class="bg-white rounded-lg shadow-md p-10 w-full max-w-3xl text-left">
        <header class="text-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Contact Us</h1>
            <nav class="mt-2">
                <a href="/" class="text-blue-500 hover:underline">Home</a> |
                <a href="/services" class="text-blue-500 hover:underline">Services</a>
            </nav>
        </header>

        <main>
            <section>
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Get in Touch</h2>
                <form action="#" method="post" class="space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block text-gray-600">Name:</label>
                        <input type="text" id="name" name="name" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-300" required>
                    </div>

                    <div>
                        <label for="email" class="block text-gray-600">Email:</label>
                        <input type="email" id="email" name="email" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-300" required>
                    </div>

                    <div>
                        <label for="message" class="block text-gray-600">Message:</label>
                        <textarea id="message" name="message" rows="5" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-300" required></textarea>
                    </div>

                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">
                        Send Message
                    </button>
                </form>
            </section>
        </main>
    </div>

    <footer class="fixed bottom-4 w-full text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} Our Company. All Rights Reserved.
    </footer>

</body>
</html>
