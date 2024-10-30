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
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-16">
            </div>
            <nav class="space-x-8">
                <a href="#" class="text-gray-700 hover:text-blue-600">Home</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Tentang Kami</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Perpustakaan</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Tenaga Pengajar</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Ekstrakurikuler</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Contact Us</a>
            </nav>
            <div class="font-bold">
                Telp 081939393
            </div>
        </div>
    </header>

<!-- Hero Section -->   
<section class="bg-gray-200 py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Selamat Datang di <span class="text-blue-600">SMPN 71 Kamal</span></h2>
        <p class="text-lg text-gray-600 mb-6">Tempat kami membentuk generasi yang berprestasi, berkarakter, dan siap menghadapi masa depan. Di SMPN 71 Kamal, kami berkomitmen untuk memberikan pendidikan berkualitas yang berlandaskan nilai-nilai moral dan etika.</p>
        <a href="#profil-sekolah" class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-md">Lihat Selengkapnya →</a>
    </div>
</section>

<!-- Main Section with Background and Overlay -->

<!-- Main Section with Background and Overlay -->
<section class="relative bg-cover bg-center py-16" style="background-image: url({{ asset('img/sekolah.jpg') }});">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    
    <div class="relative container mx-auto px-4 flex flex-col md:flex-row items-center text-white">
        <!-- Left Section: Heading and Description -->
        <div class="w-full md:w-1/2 text-center md:text-left mb-8 md:mb-0">
            <h1 class="text-4xl font-bold">SMPN 71 Kamal</h1>
            <p class="text-lg mt-4 pr-12">Tempat kami membentuk generasi berprestasi dengan dedikasi dan bimbingan dari tenaga pengajar berpengalaman, fasilitas lengkap, dan lingkungan yang mendukung perkembangan siswa.</p>
        </div>

        <!-- Right Section: 4 Cards -->
        <div class="w-full md:w-1/2 grid grid-cols-1 sm:grid-cols-2 gap-8">
            <!-- Card 1: Perpustakaan -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('img/perpus.jpg') }}" alt="Perpustakaan" class="w-full h-32 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800">Perpustakaan</h3>
                    <p class="text-gray-600 text-sm mt-2">Koleksi buku lengkap dan nyaman untuk mendukung kegiatan belajar siswa.</p>
                    <!-- Button -->
                    <a href="#" class="inline-block mt-4 px-4 py-2 bg-blue-600 text-white rounded-full font-semibold text-sm hover:bg-blue-700 transition">Lihat Selengkapnya →</a>
                </div>
            </div>

            <!-- Card 2: Tenaga Pengajar -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('img/tenaga-kerja.jpg') }}" alt="Tenaga Pengajar" class="w-full h-32 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800">Tenaga Pengajar</h3>
                    <p class="text-gray-600 text-sm mt-2">Guru-guru berpengalaman yang berdedikasi dalam mendidik siswa dengan sepenuh hati.</p>
                    <!-- Button -->
                    <a href="#" class="inline-block mt-4 px-4 py-2 bg-blue-600 text-white rounded-full font-semibold text-sm hover:bg-blue-700 transition">Lihat Selengkapnya →</a>
                </div>
            </div>

            <!-- Card 3: Prestasi -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('img/prestasi.jpg') }}" alt="Prestasi" class="w-full h-32 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800">Prestasi</h3>
                    <p class="text-gray-600 text-sm mt-2">Berbagai pencapaian siswa di bidang akademik dan non-akademik.</p>
                    <!-- Button -->
                    <a href="#" class="inline-block mt-4 px-4 py-2 bg-blue-600 text-white rounded-full font-semibold text-sm hover:bg-blue-700 transition">Lihat Selengkapnya →</a>
                </div>
            </div>  

            <!-- Card 4: Ekstrakulikuler -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('img/ekstra.jpg') }}" alt="Ekstrakulikuler" class="w-full h-32 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800">Ekstrakulikuler</h3>
                    <p class="text-gray-600 text-sm mt-2">Pilihan kegiatan ekstrakurikuler untuk mengembangkan minat dan bakat siswa.</p>
                    <!-- Button -->
                    <a href="#" class="inline-block mt-4 px-4 py-2 bg-blue-600 text-white rounded-full font-semibold text-sm hover:bg-blue-700 transition">Lihat Selengkapnya →</a>
                </div>
            </div>
        </div>
    </div>
</section>
   
<!-- Tentang Kami Section -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-12">Tentang Kami</h2> <!-- Judul yang lebih besar -->
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1: Visi & Misi -->
            <div class="bg-white shadow-lg rounded-lg p-8"> <!-- Padding yang lebih besar -->
                <h3 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Visi & Misi</h3> <!-- Judul yang lebih besar -->
                <p class="text-gray-600 text-center">Visi kami adalah menjadi lembaga pendidikan unggulan yang menghasilkan generasi yang tidak hanya berprestasi akademik, tetapi juga memiliki karakter yang baik. Misi kami adalah untuk menyediakan pendidikan berkualitas tinggi yang relevan dengan kebutuhan zaman, memfasilitasi pembelajaran yang aktif dan kreatif, serta membangun lingkungan yang mendukung perkembangan sosial dan emosional siswa.</p>
            </div>

            <!-- Card 2: Tujuan -->
            <div class="bg-white shadow-lg rounded-lg p-8"> <!-- Padding yang lebih besar -->
                <h3 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Tujuan</h3> <!-- Judul yang lebih besar -->
                <p class="text-gray-600 text-center">Tujuan utama kami adalah untuk menciptakan sistem pendidikan yang dapat memenuhi kebutuhan dan harapan siswa, orang tua, serta masyarakat. Kami berkomitmen untuk memberikan akses pendidikan yang adil dan berkualitas, membekali siswa dengan pengetahuan dan keterampilan yang dibutuhkan di masa depan, serta mengembangkan potensi individu mereka melalui berbagai kegiatan ekstrakurikuler.</p>
            </div>

            <!-- Card 3: Sejarah -->
            <div class="bg-white shadow-lg rounded-lg p-8"> <!-- Padding yang lebih besar -->
                <h3 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Sejarah</h3> <!-- Judul yang lebih besar -->
                <p class="text-gray-600 text-center">SMPN 71 Kamal didirikan pada tahun 2005 sebagai bagian dari upaya pemerintah untuk meningkatkan akses pendidikan di wilayah Kamal. Sejak awal, kami telah berkomitmen untuk memberikan pendidikan yang berkualitas, dengan fokus pada pengembangan karakter dan kemampuan akademik siswa. Dalam perjalanan kami, kami telah mencapai berbagai prestasi yang membanggakan di tingkat lokal dan nasional, serta terus berinovasi untuk memenuhi tuntutan zaman.</p>
            </div>
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
