@extends('layouts.main')

@section('aside')

    @include('Pasien.Components.card_list')

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
