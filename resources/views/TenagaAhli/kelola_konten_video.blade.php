@extends('layouts.main')

@section('aside')

<div class="flex flex-col mx-auto items-center w-full h-full pt-9 px-[50px] gap-6">
    <a href="/tenaga-ahli/kelola-konten-edukatif/tambah-konten" class="btn w-full flex justify-start bg-color-6 hover:bg-color-5 hover:border-color-3 text-base">
        <img src="{{ asset('icons/Plus.svg') }}" alt="">
        Buat Konten
    </a>

    <h1 class="text-4xl font-bold text-color-1">Kelola Konten Edukatif</h1>
    
    <div class="flex flex-col w-full h-full gap-4">
        
        @include('TenagaAhli.Components.card_list')

    </div>
</div>

@endsection

@section('main')

<div class="flex flex-col w-full h-full">

    <div class=" bg-color-8 p-8 border-[1px] border-color-4 rounded-2xl">
        <div class="flex items-center">
            <img
                class="w-16 h-16 rounded-full mr-4"
                src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
                alt="Album" />
            <div class="flex flex-col">
                <span class="text-xl text-color-1 font-semibold">Dr. Mirza</span>
                <span class="text-color-2 font-semibold">Author</span>
            </div>
        </div>
        <div class="flex flex-col gap-4 pl-20">
            <h1 class="text-3xl font-bold text-color-1">
                New Study Reveals Daily Weeks Can Significantly Improve Mental Health</h1>
            <span class="text-color-2 text-center">
                23 September 2024
            </span>
            <iframe class="w-full aspect-video rounded-lg shadow-lg" src="https://www.youtube.com/embed/jwIWJIdpNFs?si=qeLaZN2hVmo1Pmey" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</div>

@endsection