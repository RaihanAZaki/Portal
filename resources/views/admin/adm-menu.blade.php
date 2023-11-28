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
    <link rel="stylesheet" type="text/css" href="../../css/app.css">
   <link rel='icon' href="../MPPA.png">
    
</head>
<body>
    <div class="row">
        <div class="grid grid-cols-12">
            <div class="col-span-1">
                <x-admin.SidebarAdmin />
            </div>

            <div class="password-form fixed top-0 left-0 right-0 bottom-0 flex items-center justify-center bg-gray-900 bg-opacity-75 z-50">
                <form class="bg-white p-8 rounded-lg shadow-md">
                    <label for="password" class="block text-gray-700 font-bold mb-2">Enter Password:</label>
                    <input type="password" id="password" name="password" class="w-full border-2 border-gray-300 p-2 rounded-md mb-4" required>
                    <button type="button" id="submitPassword" class="bg-[#B52544] text-white p-2 rounded-md hover:bg-red-500">Submit</button>
                </form>
            </div>

            <div class="col-span-11 p-3 bg-gray-100">
                <div class="border-dashed border-2 rounded h-full bg-white overflow-y-auto max-h-[730px]">    
                    <div class="relative overflow-x-auto p-4 ">
                        @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Sucess!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                              <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                            </span>
                          </div>
                        @endif

                        <h1 class="font-bold text-4xl mb-5">Menu</h1>
                        <x-admin.adm-menu.ModalMenu />
                        <button class="flex border-2 p-2 mb-3 rounded-md text-white font-medium bg-[#B52544] hover:bg-red-500"  data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            New Data
                        </button>
                        <div id="modal-backdrop" class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 opacity-50 z-40 hidden"></div>

                        <div class="border-2 rounded p-5 overflow-y-auto max-h-[580px]">
                            <x-admin.adm-menu.TableMenu :menu="$menu"/> 
                        </div>
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var passwordForm = document.querySelector('.password-form');
            var mainContent = document.querySelector('.row');
            var submitPasswordBtn = document.getElementById('submitPassword');
            var passwordInput = document.getElementById('password');

            submitPasswordBtn.addEventListener('click', function () {
                var enteredPassword = passwordInput.value;

                // Replace 'your_password' with the actual password you want to use
                if (enteredPassword === 'superadmin') {
                    passwordForm.style.display = 'none';
                    mainContent.classList.remove('hidden');
                } else {
                    alert('Incorrect password. Please try again.');
                }
            });
        });
    </script>
</body>
</html>