@php
    use Illuminate\Support\Str;
@endphp

<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Isi</th>
                <th>Tanggal Posting</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($article as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->nama_article}}</td>
                <td>{{Str::limit($data->deskripsi_article, 25)}}</td>
                <td>{{Str::limit($data->isi_article, 25) }}</td>
                <td>{{$data->tanggal_posting}}</td>
                <td class="flex text-center items-center justify-center h-full">
                    <a href="#" data-modal-target="extralarge-modal-{{$data->id}}" data-modal-toggle="extralarge-modal-{{$data->id}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                    </a> 
                    
                    <a href="/admin/article/{{$data->id}}" onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this item?')) { document.getElementById('delete-form-{{$data->id}}').submit(); }">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                    </a>
                    
                    <form id="delete-form-{{$data->id}}" action="/admin/article/{{$data->id}}" method="POST" style="display: none;">
                        @csrf
                        @method('delete')
                    </form>
                    
                </td>
            </tr>
            @endforeach
        <tbody>
</table>

@foreach ($article as $data)
<div id="extralarge-modal-{{$data->id}}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full h-full overflow-x-hidden overflow-y-auto p-4 bg-gray-100">
    <div class="relative  w-full h-full">
        <div class="relative bg-white rounded-lg h-full w-full shadow">
            <form action="article/{{$data -> id}}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-900">
                        Edit article
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="extralarge-modal-{{$data->id}}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-6 space-y-6 overflow-y-auto max-h-[570px]">
                    <div class="mb-4">
                        <p class="font-medium">Judul article</p>
                        <input type="text" name="nama_article" value="{{$data->nama_article}}" class="p-2 rounded border-2 border-black mb-2 w-96">
                    </div>
                    <div class="mb-4">
                        <p class="font-medium">Deskripsi article</p>
                        <textarea type="text" name="deskripsi_article" class="p-2 rounded border-2 border-black w-9/12">{{$data->deskripsi_article}}</textarea>
                    </div>
                    <div class="font-medium mb-4">
                        <p class="mb-2">Isi article</p>
                        <textarea id="myeditorinstance" name="isi_article" type="text" class="p-2 rounded border-2">{{$data->isi_article}}</textarea>
                    </div>
                    <div class="font-medium mb-4">
                        <p class="mb-2">Kategori article</p>
                        <input type="text" name="kategori_article" class="p-2 rounded border-2 border-black w-96" value="{{$data->kategori_article}}">
                    </div>
                    <div class="font-medium mb-4">
                        <p class="mb-2">Daftar Pustaka</p>
                        <textarea id="myeditorinstance" name="dafpus_article" type="text" class="p-2 rounded border-2">{{$data->dafpus_article}} </textarea>
                    </div>
                    <div class="font-medium mb-4">
                        <p class="mb-2">url_article</p>
                        <input type="url" name="url_article" class="p-2 rounded border-2 border-black w-96" value="{{$data->url_article}}">
                    </div>
                    <div>
                        <p class="font-medium mb-2">Tanggal Posting</p>
                        <input id="date" name="tanggal_posting" value="{{$data->tanggal_posting}}" type="date" class="p-2 rounded border-2"> </input>
                    </div>
                    <div class="mb-3">
                        <label
                          for="formFile"
                          class="mb-2 inline-block text-neutral-700 dark:text-neutral-200"
                          >Upload File Gambar</label
                        >
                        <input
                          class="relative m-0 block w-96 min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                          type="file"
                          id="formFile"
                          name="gambar_article" />
                    </div>
                    <div class="mb-3">
                        <label
                          for="formFile"
                          class="mb-2 inline-block text-neutral-700 dark:text-neutral-200"
                          >Upload File PDF</label
                        >
                        <input
                          class="relative m-0 block w-96 min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                          type="file"
                          id="formFile"
                          name="pdf_article" />
                    </div>
                </div>
                
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:text-gray-800 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

<script src="https://cdn.tiny.cloud/1/rpezenrpky2iuyg1rskkwvdal7ac3v8xba5mjchyfywx3eeu/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'code table lists',
    toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
  });
</script>

<script>
    const editButtons = document.querySelectorAll('[data-modal-target]');

    editButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();

            const modalId = button.getAttribute('data-modal-target');
            const modal = document.getElementById(modalId);

            if (modal) {
                modal.classList.remove('hidden');
            }
        });
    });

    const closeButtons = document.querySelectorAll('[data`-modal-hide]');

    closeButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();

            const modalId = button.getAttribute('data-modal-hide');
            const modal = document.getElementById(modalId);

            if (modal) {
                modal.classList.add('hidden');
            }
        });
    });
</script>
