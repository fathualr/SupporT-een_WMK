@extends('layouts.main_admin2')


@section('main')

<!-- halaman edit konten edukatif -->
<div class="w-full p-5 rounded-2xl">
    <h1 class="font-bold text-3xl text-center">Edit Data Konten Edukatif</h1>

    <!-- form edit konten edukatif -->
        <form action="{{ route('konten-edukatif.update', $kontenEdukasi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="flex flex-col gap-y-5 pt-10 p-10">

                <!-- judul -->
                <label class="form-control w-full">
                    <span class="label-text font-medium text-base pb-1">Judul</span>
                    <input type="text" name="judul" value="{{ $kontenEdukasi->judul }}" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
                </label>
                <!-- judul -->

                <!-- tipe konten -->
                <label class="form-control w-full pt-5">
                    <span class="label-text font-medium text-base pb-1">Tipe</span>
                    <select name="tipe" class="select select-bordered w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg">
                        <option disabled selected>Artikel/Video</option>
                        <option value="artikel" {{ $kontenEdukasi->tipe === 'artikel' ? 'selected' : '' }}>Artikel</option>
                        <option value="video" {{ $kontenEdukasi->tipe === 'video' ? 'selected' : '' }}>Video</option>
                    </select>
                </label>
                <!-- tipe konten -->

                <!-- thumbnail -->
                <label class="form-control w-full">
                        <span class="label-text font-medium text-base pb-1">Thumbnail</span>
                        <input type="file" name="thumbnail" value="{{ $kontenEdukasi->thumbnail }}" class="file:bg-color-3 file:text-white file:text-sm file:border-none file:h-[3rem] file:mr-4 file:px-4 file:rounded-l-lg file:font-semibold file:uppercase border border-color-5 rounded-lg w-full bg-color-6">
                    </label>
                <!-- thumbnail -->

                <!-- Sumber -->
                <label class="form-control w-full">
                    <span class="label-text font-medium text-base pb-1">Sumber</span>
                    <input name="sumber" naria-multiselectable="sumber" value="{{ $kontenEdukasi->sumber }}" type="text" placeholder="Masukkan link youtube" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
                </label>
                <!-- Sumber -->

                <label class="form-control w-full pt-5">
                    <span class="label-text font-medium text-base pb-1">Link Youtube</span>
                    <input type="text" name="link_youtube" value="{{ $kontenEdukasi->link_youtube }}" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
                </label>

                <label class="form-control w-full pt-5">
                    <span class="label-text font-medium text-base pb-1">Isi Artikel</span>
                    <textarea name="isi_artikel" value="{{ $kontenEdukasi->isi_artikel }}" class="textarea textarea-bordered h-40 outline outline-1 outline-color-5 bg-color-6 rounded-lg" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit dictum felis nec molestie. Etiam dolor eros, fermentum sed metus eget, blandit molestie orci. "></textarea>
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