@extends('layouts.main_admin2')


@section('main')

<!-- halaman edit data aktivitas positif -->
<div class="w-full p-5 rounded-2xl">
    <h1 class="font-bold text-3xl text-center">Edit Data Aktivitas Positif</h1>

    <!-- form edit aktivitas -->
        <form action="">
            <div class="flex flex-col gap-y-5 pt-10 p-10">

                <!-- nama -->
                <label class="form-control w-full">
                    <span class="label-text font-medium text-base pb-1">Nama</span>
                    <input type="text" placeholder="Masukkan nama aktivitas" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
                </label>
                <!-- nama -->

                <!-- gambar -->
                <label class="form-control w-full">
                    <span class="label-text font-medium text-base pb-1">Gambar</span>
                    <input type="file" class="file:bg-color-3 file:text-white file:text-sm file:border-none file:h-[3rem] file:mr-4 file:px-4 file:rounded-l-lg file:font-semibold file:uppercase border border-color-5 rounded-lg w-full bg-color-6">
                </label>
                <!-- gambar -->

                <!-- isi diskusi -->
                <label class="form-control w-full">
                    <span class="label-text font-medium text-base pb-1">Isi Diskusi</span>
                    <textarea class="textarea textarea-bordered h-40 outline outline-1 outline-color-5 bg-color-6 rounded-lg" placeholder="Deskripsi"></textarea>
                </label>
                <!-- isi diskusi -->
                
                <!-- tombol update -->
                <label class="flex justify-center items-center pt-5">
                    <button class="btn bg-color-3 text-white w-48">perbarui</button>
                </label>
                <!-- tombol update -->
        
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