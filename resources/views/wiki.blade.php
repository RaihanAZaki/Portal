<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wiki Portal</title>
    @vite(['resources/css/app.css','resources/js/app.js'])    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <link rel='icon' href="../MPPA.png">
    <style>
        span {
            width: 300px;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
        }
    </style> --}}
</head>
<body>
    <x-users.Navbar />

    <section class="row">
        <div class="grid grid-cols-9">
            <div class="col-span-2"></div>
            <div class="col-span-5 mt-8 flex flex-col items-center justify-center">
                <div class="flex border-2 border-gray-300 rounded-md w-80 items-center p-1 mb-4">
                    <p class="text-left mr-2 rounded text-white bg-[#B52544] p-1">MPPA</p>
                    <p>Selamat Datang Di Halaman Wiki</p>
                </div>
                <h2 class="text-center font-bold text-5xl">Wiki Portal MPPA</h2>
                <p class="mt-2 text-center justify-center mr-5 ml-5">
                 Wiki Portal MPPA adalah tempat untuk menyimpan dan mengorganisasi informasi, pengetahuan, dan dokumentasi seputar perusahaan yang dapat diakses oleh banyak orang.</p>
            </div>        
            <div class="col-span-2"></div>
        </div>

        <div class="row mt-20">
            <div class="grid grid-cols-7">
                <div class="col-span-1"></div>
                <div class="col-span-1"></div>
            </div>
        </div>
       
        <div class="row">
            <div class="grid grid-cols-9">
                <div class="col-span-1"></div>
                <div class="col-span-7">
                    <div class="grid gap-x-6 lg:grid-cols-3 p-6">
                        @foreach ($wiki as $data)
                            <x-users.wiki.CardWiki :data="$data" />
                        @endforeach
                    </div>
                </div>
                <div class="col-span-1"></div>
            </div>
        </div>
       
        @foreach ($wiki as $data)
        <x-users.wiki.ModalWiki :data="$data" />
        @endforeach
   </section>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script> 
   <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>