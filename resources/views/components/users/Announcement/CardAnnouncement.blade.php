<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow ">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$data->nama_announcement}}</h5>
    </a>
    <span class="mb-3 font-normal text-gray-700 line-clamp-2">{!! $data->deskripsi_announcement !!}</span>    

    <button type="button" class="m-1 ml-0 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-[#B52544] text-white hover:bg-[#B52544] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm"  data-modal-target="extralarge-modal{{$data -> id}}" data-modal-toggle="extralarge-modal{{$data -> id}}">
        Read More...
    </button>
</div>
