<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css"  rel="stylesheet" />
        @vite(['resources/css/app.css','resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body>

        <x-users.Navbar />

        <div class="flex justify-center mt-7">
            <div class="w-full md:w-4/5">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4  overflow-y-auto max-h-[575px]">
                    <div class="col-span-3 bg-white border border-gray-200 rounded-lg shadow">
                        @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Sucess!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                              <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                            </span>
                          </div>
                        @endif
                        <div>
                            <h2 class="text-2xl font-bold inline-block p-4 text-black-900 rounded-tl-lg mb-2">FORMULIR</h2>  
                        </div>
                        
                        <div>
                            <h2 class="text-lg font-bold inline-block p-4 text-gray-500 rounded-tl-lg">Form untuk saran dan pertanyaan</h2>  
                            <p class="text-sm p-4"> Silahkan menggunakan fasilitas ini untuk memberikan saran dan pertanyaan seputar Portal HRD ini. Masukan dan pertanyaan kalian akan bermanfaat untuk perkembangan portal ini.</p>
                        </div>

                        <form class="space-y-6 mb-2 p-4" action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="p-2 rounded border-2">
                                <h1 class="text-2xl font-medium ml-4">Data Diri </h1>
                                <div class="flex">
                                    <div class="mb-2 mt-4 mr-4 ml-4">
                                        <label for="tanda_pengenal" class="block mb-2 text-sm font-medium text-gray-900">Employee ID / NIK / Barcode</label>
                                        <input type="text" name="tanda_pengenal" id="tanda_pengenal" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-60 p-2.5 " required>
                                    </div>
                                    <div class="mb-2 mt-4 mr-4 ml-4">
                                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Name / Nama</label>
                                        <input type="text" name="nama" id="nama" value="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 " required>
                                    </div>
                                </div>
                               
                                <div class="flex">
                                    <div class="mb-2 mt-4 mr-4 ml-4">
                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">E-mail</label>
                                        <input type="email" id="email" rows="4" name="email" value="" class="block p-2.5 w-96 text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " required></input>
                                    </div>
                                                                    
                                    <div class="mb-2 mt-4 mr-4 ml-4">
                                        <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900">No - Telp</label>
                                        <input type="text" id="no_telp" rows="4" name="no_telp" value="" class="block p-2.5 w-96 text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " required></input>
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="mb-2 mr-4 ml-4">
                                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900">Subject</label>
                                    <input type="text" id="subject" rows="4" name="subject" value="" class="block p-2.5 w-96 text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " required></input>
                                </div>
                              
                                <div class="mb-2 mr-4 ml-4">
                                    <label for="email_tujuan" class="block mb-2 text-sm font-medium text-gray-900">Tujuan</label>
                                    <select id="email_tujuan" name="email_tujuan" class="block p-2.5 w-96 text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required>
                                        @foreach ($contact as $data)
                                        <option value="{{$data -> email}}">{{$data -> organization}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                            </div>
                           
                            <div class="mb-6 mr-4 ml-4">
                                <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900">Category / Kategori</label>
                                
                                <!-- First radio button for "Suggestion / Saran" category -->
                                <label for="saran" class="ml-2 text-sm font-medium text-gray-900mr-6">
                                    <input id="saran" type="radio" value="saran" name="kategori" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                    Suggestion / Saran
                                </label>
                                
                                <!-- Second radio button for "Question / Pertanyaan" category -->
                                <label for="pernyataan" class="ml-2 text-sm font-medium text-gray-900">
                                    <input id="pernyataan" type="radio" value="pernyataan" name="kategori" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    Question / Pertanyaan
                                </label>
                            </div>

                            <div class="mb-6 mt-4 mr-4 ml-4">
                                <label for="dekripsi" class="block mb-2 text-sm font-medium text-gray-900">Description / Keterangan</label>
                                <textarea id="myeditorinstance" name="pesan" type="text" class="p-2 rounded border-2"> </textarea>
                            </div>

                            <button type="submit" class="text-white mr-4 mb-2 ml-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center">Submit</button>
                            </div>
                        </form>        
                </div>                    
            </div>
        </div>

            <x-users.Footer />



        <!-- Place the first <script> tag in your HTML's <head> -->


        <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
            <script src="https://cdn.tiny.cloud/1/rpezenrpky2iuyg1rskkwvdal7ac3v8xba5mjchyfywx3eeu/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
            <script>
              tinymce.init({
                selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
                plugins: 'code table lists',
                toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
              });
            </script>
    </body>
</html>