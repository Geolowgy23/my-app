<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog Post</title>
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
                align-items: flex-start;
                min-height: 100vh;
                text-align: center;
            }
            #app {
                background-color: white;
                border-radius: 10px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                padding: 40px;
                width: 100%;
                max-width: 1200px;
                text-align: left;
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
           

      
            <div class="container mx-auto mt-8 flex">
                <main class="flex-3 p-4">
                    <article class="mb-8">
                        <h2 class="text-2xl font-bold">Blog Post Title</h2>
                        <p class="text-gray-600 mt-2">This is the main content of the blog post. You can add more paragraphs, images, or videos as needed to enrich the content. This section will be the focal point of your blog post.</p>
                    </article>
                </main>
                <aside class="flex-1 bg-gray-100 p-4">
                    <h3 class="font-bold">Sidebar</h3>
                    <p>Additional information or links go here. You could include recent posts, categories, or other helpful sections to keep users engaged.</p>
                </aside>
            </div>
           
        </div>

        <footer>
            <p>&copy; 2025 Blog. All Rights Reserved.</p>
        </footer>
    </body>
</html>
