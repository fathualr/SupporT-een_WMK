@extends('layouts.main_admin2')


@section('main')

<!-- halaman edit konten edukatif -->
<div class="w-full p-5 rounded-2xl">
    <h1 class="font-bold text-3xl text-center">Edit Data Konten Edukatif</h1>

    <!-- form edit konten edukatif -->
        <form action="">
            <div class="flex flex-col gap-y-5 pt-10 p-10">

                <!-- judul -->
                <label class="form-control w-full">
                    <span class="label-text font-medium text-base pb-1">Judul</span>
                    <input type="text" value="Cara Mengatasi Stres Berlebihan" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
                </label>
                <!-- judul -->

                <!-- tipe konten -->
                <label class="form-control w-full pt-5">
                    <span class="label-text font-medium text-base pb-1">Tipe</span>
                    <select class="select select-bordered w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg">
                        <option disabled selected>Artikel/Video</option>
                        <option>Artikel</option>
                        <option>Video</option>
                    </select>
                </label>
                <!-- tipe konten -->

                <!-- thumbnail -->
                <label class="form-control w-full">
                        <span class="label-text font-medium text-base pb-1">Thumbnail</span>
                        <input type="file" class="file:bg-color-3 file:text-white file:text-sm file:border-none file:h-[3rem] file:mr-4 file:px-4 file:rounded-l-lg file:font-semibold file:uppercase border border-color-5 rounded-lg w-full bg-color-6">
                    </label>
                <!-- thumbnail -->

                <label class="form-control w-full pt-5">
                    <span class="label-text font-medium text-base pb-1">Link Youtube</span>
                    <input type="text" value="https://youtu.be/rDYFMwQhFAU?si=HCp9MaqjE0gt3FG1" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
                </label>

                <label class="form-control w-full pt-5">
                    <span class="label-text font-medium text-base pb-1">Kata Kunci</span>
                    <input type="text" value="Kesehatan" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
                </label>

                <label class="form-control w-full pt-5">
                    <span class="label-text font-medium text-base pb-1">Isi Artikel</span>
                    <textarea class="textarea textarea-bordered h-40 outline outline-1 outline-color-5 bg-color-6 rounded-lg" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit dictum felis nec molestie. Etiam dolor eros, fermentum sed metus eget, blandit molestie orci. "></textarea>
                </label>
                
                <label class="flex justify-center items-center pt-10">
                    <button class="btn bg-color-3 text-white w-48">Perbarui</button>
                </label>

            </div>
        </form>
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