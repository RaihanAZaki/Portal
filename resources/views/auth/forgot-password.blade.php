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
        <div id="sessionMessage" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5" role="alert">
            {{session()->get('status')}}
        </div>
    @endif
    </div>
    <div class="flex items-center justify-center align-middle">
        <div class="border-2 rounded-md p-2 w-80 h-content">
            <h2 class="text-xl">Forgot Your Password</h2>
            <p class="text-xs">please enter your email to password reset request</p>
            <form action="{{route('password.email')}}" method="POST">
                @csrf
                <label for="email"> Email </label>
                <input type="email" name="email" class="rounded-md h-6" />
                <input type="submit" value="Request Password Reset" class="border-2 p-2 rounded-md" />
            </form>
        </div>
    </div>
   
</body>
</html>