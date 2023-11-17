<div class="mb-12 lg:mb-0 article {{ strtolower(str_replace(' ', '-', $data->kategori_article)) }}" style="margin-top:10px;">
    <div class="relative mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg bg-[50%]" data-te-ripple-init data-te-ripple-color="light">
        <img src="{{ asset($data->gambar_article) }}" class="w-full h-80" />
        <a href="#!">
            <div class="mask absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,0.2)]"></div>
        </a>
    </div>
    <h5 class="mb-4 text-lg font-bold">{{$data->nama_article}}</h5>
        <div class="mb-4 flex items-center justify-center text-sm font-medium text-danger dark:text-danger-500 lg:justify-start">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
            </svg>
            {{$data->kategori_article}}
        </div>
        <span class="text-neutral-500 mb-1 line-clamp-2">
        {!!$data->deskripsi_article!!}
        </span>

    <button type="button" class="mt-1 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-[#B52544] text-white hover:bg-[#B52544]-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm" data-modal-target="extralarge-modal{{$data -> id}}" data-modal-toggle="extralarge-modal{{$data -> id}}">
    Read More...
    </button>
</div>
