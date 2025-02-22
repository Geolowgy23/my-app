<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
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
            h1 {
                font-size: 2.5rem;
                color: #333;
                font-weight: bold;
            }
            p {
                color: #555;
                font-size: 1.125rem;
                margin-top: 20px;
            }
            button {
                background-color: #007bff;
                color: white;
                font-size: 1rem;
                padding: 12px 24px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin-top: 30px;
                transition: background-color 0.3s ease;
            }
            button:hover {
                background-color: #0056b3;
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
            <h1>Welcome to Laravel Breeze</h1>
            <p>This page demonstrates various HTML elements in Laravel Breeze.</p>
            <button title="Click this button to learn more">
                Learn More
            </button>
        </div>

        <footer>
            <p>&copy; 2025 Laravel Breeze. All Rights Reserved.</p>
        </footer>
    </body>
</html>
