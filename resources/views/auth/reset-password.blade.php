<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel='icon' href="../MPPA.png">
</head>
<body>
    <x-users.Navbar />
    @if ($errors->any())
    <div id="sessionMessage" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5" role="alert">
       <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
       </ul>
    </div>
    @endif
    @if(session()->has('status'))
        <div id="sessionMessage" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-5" role="alert">
            {{session()->get('status')}}
        </div>
    @endif
    </div>

    <div class="grid grid-cols-10">
        <div class="col-span-2"></div>
        <div class="col-span-6">
            <div class="mt-8">
                <div class="border-2 rounded-tr-lg rounded-tl-lg p-3">
                    <h2 class="text-xl font-bold">Reset Password</h2>
                </div>
               <div class="border-2 rounded-br-lg rounded-bl-lg rounded-t-none p-3"> 
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-1 "> 
                        <form action="{{ route('password.update') }}" method="POST">
                            @csrf
                            <input type="text" name="token" value="{{request()->token}}">
                            <div class="mb-3">
                                <p for="email" class="text-gray-600 mb-1 text-md font-medium"> Email </p>
                                <input type="text" name="email" class="rounded-bl-md rounded-tr-lg h-10 w-full text-gray-900" value="{{request()->email}}" />
                            </div>
                            <div class="mb-3">
                                <p for="password" class="text-gray-600 mb-1 text-md font-medium"> Password </p>
                                <input type="password" name="password" class="rounded-bl-md rounded-tr-lg h-10 w-full text-gray-900" />
                            </div>
                            <div class="mb-3">
                                <p for="password" class="text-gray-600 mb-1 text-md font-medium"> Confirm Password </p>
                                <input type="password" name="password_confirmation" class="rounded-bl-md w-full rounded-tr-lg h-10 text-gray-900" />
                            </div>
                          
                            <input type="submit" value="Request Password Reset" class="border-2 text-sm p-2 rounded-md bg-blue-600 w-full text-center text-white font-medium hover:bg-blue-400 cursor-pointer items-end justify-end" />
                        </form>
                    </div>
                    <div class="col-span-2">
                        <div class="border-2 h-content rounded-md">
                            <img class=" object-cover rounded-md" src="{{url('/image/org6.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-2"></div>
    </div>
   
   
</body>
</html>