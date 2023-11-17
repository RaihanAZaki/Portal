<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery Portal</title>
    @vite(['resources/css/app.css','resources/js/app.js'])    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel='icon' href="../MPPA.png">
</head>
<body>
    <x-users.Navbar />

    <section class="row">
        <div class="grid grid-cols-9">
            <div class="col-span-2"></div>
            <div class="col-span-5 mt-8 flex flex-col items-center justify-center">
                <div class="flex border-2 border-gray-300 rounded-md w-80 items-center p-1 mb-4">
                    <p class="text-left mr-2 rounded text-white bg-[#B52544] p-1">MPPA</p>
                    <p>Selamat Datang Di Halaman Gallery</p>
                </div>
                <h2 class="text-center font-bold text-5xl">Gallery Portal MPPA</h2>
                <p class="mt-2 text-center justify-center mr-5 ml-5">
                  Gallery Portal MPPA adalah tempat di mana untuk menyimpan hasil dokumentasi berupa gambar mengenai kegiatan-kegiatan yang dilaksanakan di PT. Matahari Putra Prima Tbk.</p>
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
                        @foreach ($gallery as $data)
                            <div class="mb-12 lg:mb-0 article {{ strtolower(str_replace(' ', '-', $data->kategori_article)) }}">
                                <div class="relative mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20 bg-[50%]" data-te-ripple-init data-te-ripple-color="light">
                                    <img src="{{ asset($data->foto) }}" class="w-full h-80" />
                                    <a href="#!">
                                        <div class="mask absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,0.2)]"></div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-span-1"></div>
            </div>
        </div>
   </section>
   <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>
</html>