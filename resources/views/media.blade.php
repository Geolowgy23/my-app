<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Media Page</title>
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
            figure {
                margin: 0;
            }
            img {
                max-width: 100%;
                height: auto;
                border-radius: 8px;
            }
            figcaption {
                color: #555;
                font-size: 1rem;
                margin-top: 10px;
            }
            video {
                width: 100%;
                border-radius: 8px;
                max-width: 600px;
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
                    <figure class="text-center">
                        <img src="{{ asset('images/sample.jpg') }}" alt="Sample Image" class="mx-auto">
                        <figcaption class="text-gray-600 mt-2">Sample Image</figcaption>
                    </figure>
                    <div class="mt-8 text-center">
                        <video controls class="mx-auto">
                            <source src="{{ asset('videos/sample.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
           
        </div>

        <footer>
            <p>&copy; 2025 Laravel Breeze. All Rights Reserved.</p>
        </footer>
    </body>
</html>
