<li class="mb-6 ml-3">            
    <span class="absolute flex items-center justify-center w-5 h-5 mt-1 bg-blue-100 rounded-full ring-black">
        <svg class="w-2.5 h-2.5 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
        </svg>
    </span>
    <a href="{{$data -> url_menu}}" class="flex items-center mb-1 text-md font-semibold text-gray-900 ml-8 hover:underline ">
        {{$data -> nama_menu}}
        {{-- <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 ml-3">Latest</span> --}}
    </a>
</li>