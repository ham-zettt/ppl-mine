<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 71 Kamal</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased">

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-6 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <img src="logo.png" alt="Logo" class="h-10">
                <h1 class="text-xl font-semibold">SISEK</h1>
            </div>
            <nav class="space-x-8">
                <a href="#" class="text-gray-700 hover:text-blue-600">Home</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Tentang Kami</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Akademik</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Perpustakaan</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Ekstrakurikuler</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Contact Us</a>
            </nav>
            <button class="h-8 w-8 rounded-full bg-gray-300 flex items-center justify-center">
                <span class="material-icons">account_circle</span>
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Selamat Datang di <span class="text-blue-600">SMPN 71 Kamal</span></h2>
            <p class="text-lg text-gray-600 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <a href="#" class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-full">More info →</a>
        </div>
    </section>

<!-- ACTIVITIES SECTION -->
<section class="py-16">
    <div class="container mx-auto px-4 text-center">
        <h3 class="text-3xl font-semibold text-gray-800 mb-8">SOME OF OUR <span class="text-blue-600">ACTIVITIES</span></h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Sport Activity -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="https://via.placeholder.com/150" alt="Sport Activity" class="w-full h-48 object-cover rounded-lg mb-4">
                <div class="bg-blue-500 rounded-full p-4 inline-block mb-4">
                    <span class="material-icons text-white text-3xl">sports_soccer</span>
                </div>
                <h4 class="text-xl font-semibold mb-2">Sport</h4>
                <p class="text-gray-600">Sports are games such as football and other leisure activities which need physical effort and skills.</p>
            </div>
            <!-- Music Activity -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="https://via.placeholder.com/150" alt="Music Activity" class="w-full h-48 object-cover rounded-lg mb-4">
                <div class="bg-blue-500 rounded-full p-4 inline-block mb-4">
                    <span class="material-icons text-white text-3xl">music_note</span>
                </div>
                <h4 class="text-xl font-semibold mb-2">Music</h4>
                <p class="text-gray-600">Music is expressed ideas and emotions in significant forms through the elements of rhythm and melody.</p>
            </div>
            <!-- Painting Activity -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="https://via.placeholder.com/150" alt="Painting Activity" class="w-full h-48 object-cover rounded-lg mb-4">
                <div class="bg-blue-500 rounded-full p-4 inline-block mb-4">
                    <span class="material-icons text-white text-3xl">brush</span>
                </div>
                <h4 class="text-xl font-semibold mb-2">Painting</h4>
                <p class="text-gray-600">Painting is the expression or application of human creative skill and imagination in a visual form.</p>
            </div>
        </div>
    </div>
</section>

<!-- FROM OUR BLOG SECTION -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4 text-center">
        <h3 class="text-3xl font-semibold text-gray-800 mb-8">FROM OUR <span class="text-blue-600">BLOG</span></h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Blog Post 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="https://via.placeholder.com/400x300" alt="Blog Image" class="w-full h-48 object-cover rounded-lg mb-4">
                <h4 class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet</h4>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <div class="text-gray-500 text-sm mb-2">September 10, 2021 by Admin</div>
                <div class="flex items-center text-gray-700">
                    <span class="material-icons mr-1">chat_bubble</span>
                    <span>10</span>
                </div>
            </div>
            <!-- Blog Post 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="https://via.placeholder.com/400x300" alt="Blog Image" class="w-full h-48 object-cover rounded-lg mb-4">
                <h4 class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet</h4>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <div class="text-gray-500 text-sm mb-2">September 10, 2021 by Admin</div>
                <div class="flex items-center text-gray-700">
                    <span class="material-icons mr-1">chat_bubble</span>
                    <span>10</span>
                </div>
            </div>
            <!-- Blog Post 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="https://via.placeholder.com/400x300" alt="Blog Image" class="w-full h-48 object-cover rounded-lg mb-4">
                <h4 class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet</h4>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <div class="text-gray-500 text-sm mb-2">September 10, 2021 by Admin</div>
                <div class="flex items-center text-gray-700">
                    <span class="material-icons mr-1">chat_bubble</span>
                    <span>10</span>
                </div>
            </div>
        </div>
        <div class="mt-8">
            <a href="#" class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-full">More Articles →</a>
        </div>
    </div>
</section>

<!-- MEET OUR STAFF SECTION -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 text-center">
        <h3 class="text-3xl font-semibold text-gray-800 mb-8">MEET OUR <span class="text-blue-600">STAFF</span></h3>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Staff Member 1 -->
            <div class="text-center">
                <img src="https://via.placeholder.com/150" alt="Staff Image" class="w-32 h-32 object-cover rounded-full mx-auto mb-4">
                <h4 class="text-xl font-semibold mb-1">Afuwape J. Abiodun</h4>
                <p class="text-gray-500 mb-4">Headmistress</p>
                <div class="flex justify-center space-x-4 text-blue-600">
                    <a href="#" class="text-xl"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-xl"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" class="text-xl"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <!-- Staff Member 2 -->
            <div class="text-center">
                <img src="https://via.placeholder.com/150" alt="Staff Image" class="w-32 h-32 object-cover rounded-full mx-auto mb-4">
                <h4 class="text-xl font-semibold mb-1">Lorem Ipsum Dolor</h4>
                <p class="text-gray-500 mb-4">Headmaster</p>
                <div class="flex justify-center space-x-4 text-blue-600">
                    <a href="#" class="text-xl"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-xl"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" class="text-xl"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <!-- Staff Member 3 -->
            <div class="text-center">
                <img src="https://via.placeholder.com/150" alt="Staff Image" class="w-32 h-32 object-cover rounded-full mx-auto mb-4">
                <h4 class="text-xl font-semibold mb-1">Lorem Ipsum Dolor</h4>
                <p class="text-gray-500 mb-4">Teacher</p>
                <div class="flex justify-center space-x-4 text-blue-600">
                    <a href="#" class="text-xl"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-xl"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" class="text-xl"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="flex justify-center space-x-4 mt-8">
            <!-- Pagination Dots -->
            <span class="w-3 h-3 bg-gray-300 rounded-full inline-block"></span>
            <span class="w-3 h-3 bg-blue-600 rounded-full inline-block"></span>
            <span class="w-3 h-3 bg-gray-300 rounded-full inline-block"></span>
        </div>
    </div>
</section>

<!-- Styles to use icons (e.g., from Font Awesome) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Footer -->
    <footer class="bg-gray-800 py-8">
        <div class="container mx-auto px-4 text-center text-white">
            <p>© 2024 Sistem Sekolah Terintegrasi. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
