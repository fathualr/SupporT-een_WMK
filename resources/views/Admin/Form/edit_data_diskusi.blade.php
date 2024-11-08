@extends('layouts.main_admin2')


@section('main')

<!-- halaman edit data diskusi -->
<div class="w-full p-5 rounded-2xl">
    <h1 class="font-bold text-3xl text-center">Edit Data Forum Diskusi</h1>

        <form action="">
            <div class="flex flex-col gap-y-5 pt-10 p-10">

                <!-- judul -->
                <label class="form-control w-full">
                    <span class="label-text font-medium text-base pb-1">Judul</span>
                    <input type="text" value="Halo ges aku mau nanya nih" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
                </label>
                <!-- judul -->

                <!-- gambar -->
                <label class="form-control w-full">
                        <span class="label-text font-medium text-base pb-1">Gambar</span>
                        <input type="file" class="file:bg-color-3 file:text-white file:text-sm file:border-none file:h-[3rem] file:mr-4 file:px-4 file:rounded-l-lg file:font-semibold file:uppercase border border-color-5 rounded-lg w-full bg-color-6">
                    </label>
                <!-- gambar -->

                <!-- isi diskusi -->
                <label class="form-control w-full pt-5">
                    <span class="label-text font-medium text-base pb-1">Isi Diskusi</span>
                    <textarea class="textarea textarea-bordered h-40 outline outline-1 outline-color-5 bg-color-6 rounded-lg" value="Lorem ipsum"></textarea>
                </label>
                <!-- isi diskusi -->
                
                <!-- tombol update -->
                <label class="flex justify-center items-center pt-5">
                    <button class="btn bg-color-3 text-white w-48">Perbarui</button>
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