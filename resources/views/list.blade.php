<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Top Frameworks</title>
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
            h2 {
                font-size: 2rem;
                color: #333;
                font-weight: bold;
                margin-bottom: 20px;
            }
            ul {
                text-align: left;
                list-style-type: disc;
                margin-left: 20px;
                color: #555;
                font-size: 1.125rem;
            }
            li {
                margin: 10px 0;
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
            <h2>Top Frameworks</h2>
            <ul>
                <li>Laravel</li>
                <li>React</li>
                <li>Vue.js</li>
            </ul>
        </div>

        <footer>
            <p>&copy; 2025 Laravel Breeze. All Rights Reserved.</p>
        </footer>
    </body>
</html>
