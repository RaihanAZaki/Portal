<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article Portal</title>
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
                    <p>Selamat Datang Di Halaman Article</p>
                </div>
                <h2 class="text-center font-bold text-5xl">Article Portal MPPA</h2>
                <p class="mt-2 text-center justify-center mr-5 ml-5">
                  Article Portal MPPA adalah tempat di mana Anda dapat menemukan berbagai artikel menarik yang meliputi berbagai topik seperti berita, informasi, dan berbagai wawasan.</p>
            </div>        
            <div class="col-span-2"></div>
        </div>

        <div class="row mt-20">
            <div class="grid grid-cols-7">
                <div class="col-span-1"></div>
                <div class="col-span-5 row-span-6 mb-4 border-b border-gray-200">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                        <li class="mr-2" role="presentation">
                            <button class="category-button inline-block p-4 border-b-2 rounded-t-lg" data-category-id="all">All</button>
                        </li>
                        @php
                        $groupedCategories = [];
                        @endphp
                
                        @foreach ($article as $data)
                            @php
                            $categoryId = strtolower(str_replace(' ', '-', $data->kategori_article));
                            @endphp
                
                            @if (!isset($groupedCategories[$data->kategori_article]))
                                @php
                                $groupedCategories[$data->kategori_article] = $categoryId;
                                @endphp
                    
                                <li class="mr-2" role="presentation">
                                    <button class="category-button inline-block p-4 border-b-2 rounded-t-lg" data-category-id="{{ $categoryId }}">{{ $data->kategori_article }}</button>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="col-span-1"></div>
            </div>
        </div>
       
        <div class="row">
            <div class="grid grid-cols-9">
                <div class="col-span-1"></div>
                <div class="col-span-7">
                    <div class="grid gap-x-6 lg:grid-cols-3 p-6 ">
                        @foreach ($article as $data)
                            <x-users.Article.CardArticle :data="$data" />
                        @endforeach
                    </div>
                </div>
                <div class="col-span-1"></div>
            </div>
        </div>
       
        @foreach ($article as $data)
        <x-users.article.ModalArticle :data="$data" />
        @endforeach
   </section>
    
   
   <script>
        document.addEventListener('DOMContentLoaded', function () {
            const categoryButtons = document.querySelectorAll('.category-button');
            const articles = document.querySelectorAll('.article');

            categoryButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const categoryId = button.dataset.categoryId;
                    articles.forEach(article => {
                        if (categoryId === 'all' || article.classList.contains(categoryId)) {
                            article.style.display = 'block';
                        } else {
                            article.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
   

    
</body>
</html>