<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Announcement Portal</title>
    @vite(['resources/css/app.css','resources/js/app.js'])    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel='icon' href="../MPPA.png">
    {{-- <style>
        span {
            width: 300px;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }
    </style> --}}
</head>
<body>
    <x-users.Navbar />

    <div class="flex justify-center mt-10">
        <div class="w-full md:w-4/5">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="col-span-2 bg-white border border-gray-200">
                    <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <div class="relative h-56 overflow-hidden md:h-96">
                            @foreach ($banner as $data)
                                @if ($data->kategori_gambar === 'Pengumuman')
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="{{ asset($data->gambar_banner) }}" alt="Image" class="absolute block w-full h-full top-0 left-0 full-h object-cover"/>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                
                        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="col-span-1 bg-white border border-gray-200">
                    <div class="p-3 bg-white border border-gray-200 object-cover w-full h-full" style="background: #F1F2F5">
                        <h1 class="text-2xl font-bold mb-5 text-justify">Announcement</h1>
                        <p>Selamat Datang di Tempat Pengumuman Informasi Terkini! Kami selalu berusaha memberikan Anda berita terbaru dan informasi penting. Di sini, Anda dapat menemukan pengumuman-pengumuman terkait perkembangan terbaru, acara-acara khusus, dan sumber daya terbaru yang dapat membantu Anda tetap terhubung dengan kami. Pastikan untuk berkunjung kembali secara berkala, karena kami akan terus memperbarui informasi di sini agar Anda tetap terinformasi. Terima kasih atas dukungan Anda!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center mt-10">
        <div class="w-full md:w-4/5">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 max-h-48">
                @foreach ($announcement as $data)
                    <x-users.Announcement.CardAnnouncement :data="$data" />
                @endforeach
            </div>
        </div>
    </div>

    @foreach ($announcement as $data)
    <x-users.Announcement.ModalAnnouncement :data="$data" />
    @endforeach

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>

{{-- Rehan --}}