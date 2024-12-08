@extends('layouts.main')

@section('aside')

<div class="flex flex-col mx-auto items-center w-full h-full pt-9 px-[50px] gap-6">
        <button class="btn w-full flex justify-start bg-color-6 hover:bg-color-5 hover:border-color-3 text-base">
            <img src="{{ asset('icons/Plus.svg') }}" alt="">
            Buat Konten
        </button>

        <h1 class="text-4xl font-bold text-color-1">Konten Edukasi Kesehatan</h1>
        
        <div class="flex flex-col w-full h-full gap-4">
            <!-- card 1 -->
            <div class="flex border-[1px] border-color-4 rounded-2xl p-2 gap-2">
                <div class="flex-none w-[100px] h-[100px]">
                    <img
                        class="w-full h-full rounded-xl"
                        src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
                        alt="Album" />
                </div>
                <div class="flex-1">
                    <span class="text-color-2">Artikel</span>
                    <h1 class="text-xl font-bold">New Study Reveals Daily Weeks Can Significantly Improve Mental Health</h1>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img
                                class="w-5 h-5 rounded-full"
                                src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
                                alt="Album" />
                            <span>Dr.Mirza</span>
                        </div>
                        <span>23 September 2024</span>
                    </div>
                </div>
            </div>
            <!-- card 1 -->

        </div>
    </div>

@endsection

@section('main')

<div class="w-full p-5 rounded-2xl">
    <h1 class="font-bold text-3xl text-center">Edit Data Konten Edukatif</h1>

    <div class="pt-10 p-10">
        <form action="">
            <label class="form-control w-full">
                <span class="label-text font-medium text-base pb-1">Judul</span>
                <input type="text" value="Pentingnya Menjaga Kesehatan Mental" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
            </label>

            <label class="form-control w-full pt-5">
                    <span class="label-text font-medium text-base pb-1">Tipe</span>
                    <select class="select select-bordered w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg">
                        <option disabled selected>Artikel/Video</option>
                        <option>Artikel</option>
                        <option>Video</option>
                    </select>
            </label>

            <div>
                <p class="label-text font-medium text-base pb-1 pt-5">Thumbnail
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
                <span class="label-text font-medium text-base pb-1">Link Youtube</span>
                <input type="text" value="https://www.youtube.com/watch?v=5Y76XIgwVyI" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
            </label>

            <label class="form-control w-full pt-5">
                <span class="label-text font-medium text-base pb-1">Kata Kunci</span>
                <input type="text" value="Kesehatan" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
            </label>

            <label class="form-control w-full pt-5">
                <span class="label-text font-medium text-base pb-1">Isi Artikel</span>
                <textarea class="textarea textarea-bordered h-40 outline outline-1 outline-color-5 bg-color-6 rounded-lg" placeholder="Deskripsi"></textarea>
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