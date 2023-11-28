<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Announcement</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel='icon' href="../MPPA.png">
    
</head>
<body>
    <div class="row">
        <div class="grid grid-cols-12">
            <div class="col-span-1">
                <x-admin.SidebarAdmin />
            </div>

            <div class="col-span-11 p-3 bg-gray-100">
                <div class="border-dashed border-2 rounded h-full bg-white overflow-y-auto max-h-[730px]">    
                    <div class="relative overflow-x-auto p-4 ">
                        @if (session('status'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Sucess!</strong>
                            <span class="block sm:inline">{{ session('status') }}</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                              <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                            </span>
                          </div>

                        @elseif (session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Error!</strong>
                            <span class="block sm:inline">{{ session('error') }}</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                              <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                            </span>
                          </div>
                        @endif

                        <h1 class="font-bold text-4xl mb-14">Change Password</h1>
                        <form action="{{route('change-password')}}" method="POST">
                            @csrf

                            <div >
                                <p class="text-md font-bold mb-1">Old Password</p>
                                <input type="text" class="rounded-md h-10" name="old_password"/>
                            </div>
                            <div class="mb-3">
                                <p class="text-md font-bold mb-1">New Password</p>
                                <input type="text" class="rounded-md h-10" name="new_password"/>
                            </div>
                            <div class="mb-3">
                                <p class="text-md font-bold mb-1">Confirm Password</p>
                                <input type="text" class="rounded-md h-10" name="repeat_password" />
                            </div>
                            <button type="submit" class="border-2 rounded-md bg-blue-700 p-2 hover:bg-blue-500 text-white font-medium">Change Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    $('#example').DataTable({
        "lengthMenu": [ [10, 15, 20, -1], [10, 15, 20, "All"] ], // Menentukan jumlah entri yang tersedia
    });

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>
</html>