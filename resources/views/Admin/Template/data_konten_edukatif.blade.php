@extends('layouts.main_admin2')


@section('main')

<!-- halaman tambah data konten edukatif -->
<div class="w-full p-5 rounded-2xl">
    <h1 class="font-bold text-3xl text-center">Tambah Data Konten Edukatif</h1>

    <!-- form untuk menambah data konten edukatif-->
            <div class="flex flex-col gap-y-5 pt-10 p-10">

                <!-- judul -->
                <label class="form-control w-full">
                    <span class="label-text font-medium text-base pb-1">Judul</span>
                    <input name="judul" readonly value="{{ $kontenEdukasi->judul }}" type="text" placeholder="Masukkan judul anda" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
                </label>
                <!-- judul -->

                <!-- tipe konten -->
                <label class="form-control w-full">
                    <span class="label-text font-medium text-base pb-1">Tipe</span>
                    <input name="judul" readonly value="{{ $kontenEdukasi->tipe }}" type="text" placeholder="Masukkan judul anda" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
                </label>
                <!-- tipe konten -->

                <!-- thumbnail -->
                <label class="form-control w-full">
                    <span class="label-text font-medium text-base pb-1">Thumbnail</span>
                    <input name="judul" readonly value="{{ $kontenEdukasi->thumbnail }}" type="text" placeholder="Masukkan judul anda" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
                </label>
                <!-- thumbnail -->

                <!-- Sumber -->
                <label class="form-control w-full">
                    <span class="label-text font-medium text-base pb-1">Sumber</span>
                    <input name="sumber" readonly value="{{ $kontenEdukasi->sumber }}" type="text" placeholder="Masukkan link youtube" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
                </label>
                <!-- Sumber -->

                <!-- link youtube -->
                <label class="form-control w-full">
                    <span class="label-text font-medium text-base pb-1">Link Youtube</span>
                    <input name="link_youtube" readonly value="{{ $kontenEdukasi->link_youtube }}" type="text" placeholder="Masukkan link youtube" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
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
                    <textarea name="isi_artikel" readonly value="{{ $kontenEdukasi->isi_artikel }}" class="textarea textarea-bordered h-40 outline outline-1 outline-color-5 bg-color-6 rounded-lg" placeholder="Deskripsi"></textarea>
                </label>
                <!-- isi artikel -->
            </div>
    </div>

@endsection