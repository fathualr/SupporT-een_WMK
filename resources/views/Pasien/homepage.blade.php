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

<div class="grid grid-cols-[repeat(auto-fit,_minmax(250px,_1fr))] gap-3 w-full h-auto justify-content-center">
    <a href="/chatbot" class="flex flex-col justify-center items-center bg-color-8 border border-color-4 rounded-xl min-h-[250px]">
        <img src="{{ asset('icons/chatbot.svg') }}" alt="">
        <p class="font-semibold">Teman Bot</p>
    </a>
    <a href="/jurnal-harian" class="flex flex-col justify-center items-center bg-color-8 border border-color-4 rounded-xl min-h-[250px]">
        <img src=" {{ asset('icons/journal.svg') }} " alt="">
        <p class="font-semibold">Jurnal Harian</p>
    </a>
    <a href="/konten-edukatif" class="flex flex-col justify-center items-center bg-color-8 border border-color-4 rounded-xl min-h-[250px]">
        <img src=" {{ asset('icons/content.svg') }} " alt="">
        <p class="font-semibold">Konten Edukatif</p>
    </a>
    <a href="/daftar-aktivitas-pribadi" class="flex flex-col justify-center items-center bg-color-8 border border-color-4 rounded-xl min-h-[250px]">
        <img src=" {{ asset('icons/activity.svg') }} " alt="">
        <p class="font-semibold">Daftar Aktivitas</p>
    </a>
    <button class="flex flex-col justify-center items-center bg-color-8 border border-color-4 rounded-xl min-h-[250px]"
        onclick="
            @if(Auth::user()->isPremium())
                window.location.href = '/forum';
            @else
                document.getElementById('membership').checked = true;
            @endif
        ">
        <img src="{{ asset('icons/forum.svg') }}" alt="">
        <p class="font-semibold">Forum Diskusi</p>
    </button>
        {{-- <a href="konsultasi" class="flex flex-col justify-center items-center bg-color-8 border border-color-4 rounded-xl min-h-[250px]">
            <img src=" {{ asset('icons/consultation.svg') }} " alt="">
        <p class="font-semibold">Konsultasi</p>
        </a> --}}
    </div>

@endsection