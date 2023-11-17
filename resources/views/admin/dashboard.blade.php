<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../../css/app.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel='icon' href="../MPPA.png">
</head>
<body>
    <div class="row">
        <div class="grid grid-cols-12">
            <div class="col-span-1">
                <x-admin.SidebarAdmin />
            </div>
            <div class="col-span-11 p-3 bg-gray-100">
                <div class="border-dashed border-2 rounded h-full overflow-y-auto bg-white max-h-[730px]">
                    <!-- Bagian Utama -->
                    <div class="flex justify-center mt-10">
                        <div class="w-full md:w-11/12">
                            @if (session('success'))
                            <div id="successMessage" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-5" role="alert">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                    <svg class="fill-current h-6 w-6 text-gray-500 close-button" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <title>Close</title>
                                        <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                    </svg>
                                </span>
                            </div>
                            @endif
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <!-- Kolom Carousel -->
                                <div class="col-span-2 row-span-6 bg-white border border-gray-200 rounded-lg shadow max-h-[300px]">
                                    <div id="animation-carousel" class="relative w-full" data-carousel="static">
                                        <div class="relative h-96 overflow-hidden rounded-lg">
                                            @foreach ($banner as $data)
                                                @if ($data->kategori_gambar === 'Dashboard')
                                                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                                                        <img src="{{ asset($data->gambar_banner) }}" alt="Banner Image" class="absolute w-full h-full object-cover">
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                        <!-- Slider controls -->
                                        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                                </svg>
                                                <span class="sr-only">Previous</span>
                                            </span>
                                        </button>
                                        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                                </svg>
                                                <span class="sr-only">Next</span>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="col-span-2 bg-white border border-gray-200 rounded-lg shadow mt-5">
                                        <h2 class="text-2xl font-extrabold inline-block p-4 text-black-900 rounded-tl-lg">Announcements</h2>
                                        <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 bg-gray-50 " id="announcementTabs" role="tablist">
                                            @for($i = 1; $i <= 5; $i++)
                                                <li class="mr-3 ml-3">
                                                    <button id="announcement-tab-{{$i}}" data-tabs-target="#announcement-{{$i}}" type="button" role="tab" aria-controls="announcement-{{$i}}" aria-selected="{{$i === 1 ? 'true' : 'false'}}" class="inline-block p-4 text-black-600 rounded-tl-lg hover:bg-gray-100">Announcement {{$i}}</button>
                                                </li>
                                            @endfor
                                        </ul>
                                        <div id="announcementTabContent">
                                            @for($i = 1; $i <= 5; $i++)
                                                <div class="hidden p-4 bg-white md:p-8" id="announcement-{{$i}}" role="tabpanel" aria-labelledby="announcement-tab-{{$i}}">
                                                    @if (count($announcement) >= $i)
                                                        @php
                                                            $data = $announcement[$i - 1];
                                                        @endphp
                                                        <h2 class="mb-3 text-3xl font-extrabold tracking-tight text-gray-900">{{$data->nama_announcement}}
                                                            <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded ml-3">{{$data->tanggal_posting}}</span>
                                                        </h2>
                                                        <p class="mb-3 text-gray-500 dark:text-gray-400 line-clamp-2">{{Str::limit($data->deskripsi_announcement, 150)}}</p>
                                                        <a data-modal-target="medium-modal" data-modal-toggle="medium-modal" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800">
                                                            Learn more
                                                            <svg class="w-2.5 h-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                                            </svg>
                                                        </a>
                                                    @else
                                                        <div>Not Found</div>
                                                    @endif
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="col-span-2 bg-white border border-gray-200 rounded-lg shadow mt-5">
                                        <div class="flex items-center justify-between p-2">
                                            <h2 class="text-2xl font-bold inline-block p-2 text-black-900 rounded-tl-lg">Media Gallery</h2>
                                            <a href="/gallery" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800"> See More 
                                                <svg class="w-2.5 h-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="grid gap-4 p-2">
                                            <div>
                                                <img class="h-auto max-w-full rounded-lg" src="{{url('/image/org6.jpg')}}" alt="">
                                            </div>
                                            <div class="grid grid-cols-5 gap-4">
                                                <div>
                                                    <img class="h-20 max-w-full rounded-lg" src="{{url('/image/org.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <img class="h-20 max-w-full rounded-lg" src="{{url('/image/org2.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <img class="h-20 max-w-full rounded-lg" src="{{url('/image/org3.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <img class="h-20 max-w-full rounded-lg" src="{{url('/image/org4.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <img class="h-20 max-w-full rounded-lg" src="{{url('/image/org5.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Kolom Lainnya -->
                                <div class="col-span-1 bg-white border border-gray-200 rounded-lg shadow">
                                    <h2 class="text-2xl font-extrabold inline-block p-4 text-black-900 rounded-tl-lg">NAVIGATION MENU</h2>
                                    <ol class="relative border-l border-gray-200">
                                        @forelse ($menu as $data)
                                        <x-admin.dashboard.Menu :data="$data" />
                                        @empty
                                        <li class="mb-6 ml-6">
                                            <span class="absolute flex items-center justify-center w-5 h-5 mt-1 bg-blue-100 rounded-full ring-black">
                                                <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                                </svg>
                                            </span>
                                            <a href="{{$item->url}}" class="flex items-center mb-1 text-md font-semibold text-gray-900  ml-8 hover:underline">
                                                NOT FOUND
                                            </a>
                                        </li>
                                        @endforelse
                                    </ol>
                                </div>
                                <div class="col-span-1 bg-white border border-gray-200 rounded-lg shadow overflow-y-auto max-h-[100px]" style="max-height: 400px; overflow: auto;">
                                    <h2 class="text-2xl font-bold inline-block p-4 text-black-900 rounded-tl-lg">Work Anniversary</h2>
                                    @forelse ($karyawan as $data)
                                        <div class="flex items-center space-x-4 ml-4 mb-4">
                                            <img src="{{url('/img/profile.jpg')}}" class="w-10 h-10 rounded-full"  alt="">
                                            <div class="font-medium">
                                                <div>{{ $data->nama_karyawan }}</div>
                                                <div class="text-sm text-gray-500">{{ date('d M Y', strtotime($data->tanggal_join)) }}</div>
                                            </div>
                                        </div>
                                    @empty
                                        <img src="{{url('/image/4044.png')}}" alt="Image" class="top-0 left-0 ml-9 opacity-50" style="width: 80%; height=50%;  display: block;"/>
                                    @endforelse
                                </div>
                                <div class="col-span-1 bg-white border border-gray-200 rounded-lg shadow" style="margin-top: 0px; max-height: 400px; overflow: auto;">
                                    <h2 class="text-2xl font-bold inline-block p-4 text-black-900 rounded-tl-lg">Employee Birthday</h2>
                                    @forelse ($karyawanUlangTahun as $data)
                                        <div class="flex items-center space-x-4 ml-4 mb-4">
                                            <img src="{{url('/img/profile.jpg')}}" class="w-10 h-10 rounded-full"  alt="">
                                            <div class="font-medium dark:text-white">
                                                <div class="text-black">{{ $data->nama_karyawan }}</div>
                                                <div class="text-sm text-gray-500">{{ date('d M Y', strtotime($data->ulang_tahun)) }}</div>
                                            </div>
                                        </div>
                                    @empty
                                        <img src="{{url('/image/4044.png')}}" alt="Image" class="top-0 left-0 ml-9 opacity-50" style="width: 80%; height=50%;  display: block;"/>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script>
        $(document).ready(function() {
            // Inisialisasi tab pertama
            $("#announcement-tab-1").addClass("active");
            $("#announcement-1").show();
        
            // Event handler untuk mengganti tab
            $("button[role='tab']").click(function() {
                var tabId = $(this).attr("data-tabs-target");
        
                // Menonaktifkan semua tab dan menyembunyikan kontennya
                $("button[role='tab']").removeClass("active");
                $("div[role='tabpanel']").hide();
        
                // Mengaktifkan tab yang dipilih dan menampilkan kontennya
                $(this).addClass("active");
                $(tabId).show();
            });
        });
    </script>
    <script>
        var successMessage = document.getElementById('successMessage');
        var closeButton = document.querySelector('.close-button');
    
        function closeSuccessMessage() {
            successMessage.style.display = 'none';
        }
    
        closeButton.addEventListener('click', closeSuccessMessage);
    
        setTimeout(closeSuccessMessage, 5000);
    </script>
    <script>
        new FlowBite({
            target: '[data-carousel="static"]',
            items: '[data-carousel-item]',
            controls: {
                prev: '[data-carousel-prev]',
                next: '[data-carousel-next]'
            }
        });
    </script>
    <script>
        document.querySelector('[data-modal-toggle="medium-modal"]').addEventListener('click', function () {
            document.getElementById('medium-modal').classList.toggle('hidden');
        });
    
        document.querySelector('[data-modal-close="medium-modal"]').addEventListener('click', function () {
            document.getElementById('medium-modal').classList.add('hidden');
        });
    </script>
</body>
</html>
