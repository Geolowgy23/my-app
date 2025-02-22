<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tailwind CSS Styling</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: #f4f7fc;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                text-align: center;
            }
            #app {
                background-color: white;
                border-radius: 10px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                padding: 40px;
                width: 100%;
                max-width: 600px;
                text-align: center;
            }
            .card {
                padding: 24px;
                background-color: white;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                text-align: center;
            }
            h1 {
                font-size: 2.5rem;
                font-weight: bold;
                color: #3b82f6;
            }
            p {
                margin-top: 16px;
                color: #4b5563;
                font-size: 1.125rem;
            }
            button {
                margin-top: 24px;
                background-color: #8b5cf6;
                color: white;
                padding: 12px 24px;
                border-radius: 8px;
                cursor: pointer;
                transition: background-color 0.3s;
            }
            button:hover {
                background-color: #6d28d9;
            }
            footer {
                position: fixed;
                bottom: 20px;
                width: 100%;
                text-align: center;
                font-size: 0.875rem;
                color: #888;
            }
        </style>
    </head>
    <body class="antialiased">
        <div id="app">
           

        
                <div class="container mx-auto mt-8">
                    <div class="p-6 bg-white shadow-md rounded-lg text-center">
                        <h1 class="text-4xl font-bold text-blue-500">Styling with Tailwind CSS</h1>
                        <p class="mt-4 text-gray-600 text-lg">This is a styled card component using Tailwind CSS.</p>
                        <button class="mt-6 bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-700">
                            Click Me
                        </button>
                    </div>
                </div>
       
        </div>

        <footer>
            <p>&copy; 2025 Laravel Breeze. All Rights Reserved.</p>
        </footer>
    </body>
</html>
