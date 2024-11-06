@extends('layouts.main')

@section('aside')

    <div class="flex flex-col mx-auto w-full justify-center items-center mb-[50px] h-full">
        <img src=" {{ asset('images/main-picture.svg') }} " class="max-h-[500px] max-w-[500px]" alt="">
        <div class="card max-w-[475px] max-h-[200px] bg-color-6 border border-color-5 text-color-9 mx-auto">
            <div class="card-body">
                <p class="font-bold text-2xl">Berbagi, Mendukung, Berkembang.</p>
                <p class="text-base text-justify">Bersama, kita hadapi tantangan dan jaga kesehatan mental. Setiap langkah kecil membawa kita menuju masa depan yang lebih cerah!</p>
            </div>
        </div>
    </div>

@endsection

@section('main')

    <div class="grid grid-cols-3 gap-3 w-full h-1/2">
        <a href="#" class="flex flex-col justify-center items-center bg-color-8 border border-color-4 rounded-xl">
            <img src="{{ asset('icons/content-media-folder.svg') }}" alt="">
            <p class="font-semibold">Kelola Konten Edukatif</p>
        </a>

        <a href="#" class="flex flex-col justify-center items-center bg-color-8 border border-color-4 rounded-xl">
            <img src=" {{ asset('icons/Manajemen-konsultasi.png') }} " alt="">
            <p class="font-semibold">Manajemen Konsultasi</p>
        </a>
        <a href="#" class="flex flex-col justify-center items-center bg-color-8 border border-color-4 rounded-xl">
            <img src=" {{ asset('icons/tabungan.png') }} " alt="">
            <p class="font-semibold">Tabungan</p>
        </a>
    </div>

@endsection