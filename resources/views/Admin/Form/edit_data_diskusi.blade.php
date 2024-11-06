@extends('layouts.main_admin2')


@section('main')
<div class="w-full p-5 rounded-2xl">
    <h1 class="font-bold text-3xl text-center">Edit Data Forum Diskusi</h1>

    <div class="pt-10 p-10">
        <form action="">
            <label class="form-control w-full">
                <span class="label-text font-medium text-base pb-1">Judul</span>
                <input type="text" value="Halo ges aku mau nanya nih" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
            </label>

            <div>
                <p class="label-text font-medium text-base pb-1 pt-5">Gambar
                    <div class="flex items-center">
                        <label class="cursor-pointer border border-blue-500 bg-color-3 hover:bg-color- text-white py-3 px-4 w-40 rounded-l">
                        Choose File
                        <input type="file" class="hidden" id="fileInput">
                        </label>
                        <span id="fileName" class="border bg-color-6  text-gray-700 py-3 px-4 rounded-r-lg w-full truncat outline outline-1 outline-color-5">
                        No file chosen
                        </span>
                    </div>
                </p>
            </div>

            <label class="form-control w-full pt-5">
                <span class="label-text font-medium text-base pb-1">Isi Diskusi</span>
                <textarea class="textarea textarea-bordered h-40 outline outline-1 outline-color-5 bg-color-6 rounded-lg" value="Lorem ipsum"></textarea>
            </label>
            
            <label class="flex justify-center items-center pt-10">
                <button class="btn bg-color-3 text-white w-48">Perbarui</button>
            </label>
   
        </form>
    </div>

</div>

<script>
    const fileInput = document.getElementById('fileInput');
    const fileName = document.getElementById('fileName');

    fileInput.addEventListener('change', function() {
        if (fileInput.files.length > 0) {
        fileName.textContent = fileInput.files[0].name;
        } else {
        fileName.textContent = "No file chosen";
    }
    });
</script>

@endsection