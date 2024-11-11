@extends('layouts.main_admin2')


@section('main')

<!-- halaman tambah data konten edukatif -->
<div class="w-full p-5 rounded-2xl">
    <h1 class="font-bold text-3xl text-center">Tambah Data Konten Edukatif</h1>

    <!-- form untuk menambah data konten edukatif-->
        <form action="{{ route('konten-edukatif.store') }}" method="post">
            @csrf

            <div class="flex flex-col gap-y-5 pt-10 p-10">

                <!-- judul -->
                <label class="form-control w-full">
                    <span class="label-text font-medium text-base pb-1">Judul</span>
                    <input name="judul" type="text" placeholder="Masukkan judul anda" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
                </label>
                <!-- judul -->

                <!-- tipe konten -->
                <label class="form-control w-full">
                        <span class="label-text font-medium text-base pb-1">Tipe</span>
                        <select name="tipe" class="select select-bordered w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg">
                            <option disabled selected>Artikel/Video</option>
                            <option value="artikel">Artikel</option>
                            <option value="video">Video</option>
                        </select>
                </label>
                <!-- tipe konten -->

                <!-- thumbnail -->
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text font-medium text-base">Thumbnail</span>
                    </div>
                    <input name="thumbnail" type="file" class="file:bg-color-3 file:text-white file:text-sm file:border-none file:h-[3rem] file:mr-4 file:px-4 file:rounded-l-lg file:font-semibold file:uppercase border border-color-5 rounded-lg w-full bg-color-6">
                </label>
                <!-- thumbnail -->

                <!-- Sumber -->
                <label class="form-control w-full">
                    <span class="label-text font-medium text-base pb-1">Sumber</span>
                    <input name="sumber" type="text" placeholder="Masukkan link youtube" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
                </label>
                <!-- Sumber -->

                <!-- link youtube -->
                <label class="form-control w-full">
                    <span class="label-text font-medium text-base pb-1">Link Youtube</span>
                    <input name="link_youtube" type="text" placeholder="Masukkan link youtube" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
                </label>
                <!-- link youtube -->

                <!-- kata kunci -->
                <!-- <label class="form-control w-full">
                    <span class="label-text font-medium text-base pb-1">Kata Kunci</span>
                    <input type="text" placeholder="Kata kunci" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
                </label> -->
                <!-- kata kunci -->

                <!-- isi artikel -->
                <label class="form-control w-full">
                    <span class="label-text font-medium text-base pb-1">Isi Artikel</span>
                    <textarea name="isi_artikel" class="textarea textarea-bordered h-40 outline outline-1 outline-color-5 bg-color-6 rounded-lg" placeholder="Deskripsi"></textarea>
                </label>
                <!-- isi artikel -->
                
                <!-- tombol tambah -->
                <label class="flex justify-center items-center pt-5">
                    <button type="submit" class="btn bg-color-3 text-white w-48">Tambah</button>
                </label>
                <!-- tombol tambah -->
            </div>

        </form>
    </div>

@endsection