<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100 flex justify-center items-start min-h-screen text-center p-4">

    <div id="app" class="bg-white rounded-lg shadow-md p-10 w-full max-w-3xl text-left">
        <header class="text-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Our Services</h1>
            <nav class="mt-2">
                <a href="/" class="text-blue-500 hover:underline">Home</a> |
                <a href="/contactus" class="text-blue-500 hover:underline">Contact Us</a>
            </nav>
        </header>

        <main>
            <section>
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">What We Offer</h2>
                <ul class="space-y-3">
                    <li class="flex items-center space-x-2 bg-gray-50 p-3 rounded-lg shadow-sm">
                        <span class="text-green-500 text-lg">✅</span>
                        <span class="text-gray-700 font-medium">Web Development</span>
                    </li>
                    <li class="flex items-center space-x-2 bg-gray-50 p-3 rounded-lg shadow-sm">
                        <span class="text-green-500 text-lg">✅</span>
                        <span class="text-gray-700 font-medium">Mobile App Development</span>
                    </li>
                    <li class="flex items-center space-x-2 bg-gray-50 p-3 rounded-lg shadow-sm">
                        <span class="text-green-500 text-lg">✅</span>
                        <span class="text-gray-700 font-medium">UI/UX Design</span>
                    </li>
                    <li class="flex items-center space-x-2 bg-gray-50 p-3 rounded-lg shadow-sm">
                        <span class="text-green-500 text-lg">✅</span>
                        <span class="text-gray-700 font-medium">Digital Marketing</span>
                    </li>
                    <li class="flex items-center space-x-2 bg-gray-50 p-3 rounded-lg shadow-sm">
                        <span class="text-green-500 text-lg">✅</span>
                        <span class="text-gray-700 font-medium">SEO Optimization</span>
                    </li>
                </ul>
            </section>
        </main>
    </div>

    <footer class="fixed bottom-4 w-full text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} Our Company. All Rights Reserved.
    </footer>

</body>
</html>
