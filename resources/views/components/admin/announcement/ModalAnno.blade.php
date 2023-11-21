<div id="extralarge-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full h-full overflow-x-hidden overflow-y-auto p-4 bg-gray-100">
    <div class="relative  w-full h-full">
        <div class="relative bg-white rounded-lg h-full w-full shadow">
            <form action="announcement" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-900">
                        Add New Announcement
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="extralarge-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-6 space-y-6 overflow-y-auto max-h-[570px]">
                    <div class="mb-4">
                        <p class="font-medium">Judul Announcement</p>
                        <input type="text" name="nama_announcement" class="p-2 rounded border-2 border-black w-96">
                    </div>
                    <div class="mb-4">
                        <p class="font-medium">Deskripsi Announcement</p>
                        <textarea type="text" name="deskripsi_announcement" class="p-2 rounded border-2 border-black w-9/12"> </textarea>
                    </div>
                    <div class="font-medium mb-4">
                        <p class="mb-2">Isi Announcement</p>
                        <textarea id="myeditorinstance" name="isi_announcement" type="text" class="p-2 rounded border-2"> </textarea>
                    </div>
                    <div>
                        <p class="font-medium mb-2">Tanggal Posting</p>
                        <input id="myeditorinstance" name="tanggal_posting" type="date" class="p-2 rounded border-2"> </input>
                    </div>
                    <div class="mb-3">
                        <label
                          for="formFile"
                          class="mb-2 inline-block text-black"
                          >Upload File Gambar</label
                        >
                        <input
                          class="relative m-0 block w-96 min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                          type="file"
                          id="formFile"
                          name="gambar_announcement" />
                      </div>
                      <div class="mb-3">
                        <label
                          for="formFile"
                          class="mb-2 inline-block text-black"
                          >Upload File PDF</label
                        >
                        <input
                          class="relative m-0 block w-96 min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                          type="file"
                          id="formFile"
                          name="pdf_announcement" />
                      </div>
                </div>
                
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:text-gray-800 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.tiny.cloud/1/y5zre2kt4ni6ioikj8m8ik41l1yodeiuip8a6s3jbdlyvcox/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'code table lists',
    toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
  });
</script>