@extends('layouts.main')

@section('main')

<aside class="w-2/5">

    <div class="flex flex-col mx-auto w-full justify-center items-center mb-[50px] h-full">
        <img src=" {{ asset('images/kepala-otak.png') }} " class="max-h-[500px] max-w-[500px]" alt="">
        <div class="card max-w-[475px] max-h-[200px] text-2xl shadow-xl bg-color-2 text-color-9 mx-auto">
            <div class="card-body">
                <p>Bersama-sama, kita ciptakan keseimbangan pikiran dan emosi demi masa depan yang lebih cerah.</p>
            </div>
        </div>
    </div>

</aside>
<main class="w-3/5 bg-color-3 ">

    <div class="bg-cover bg-brain-pattern flex flex-col mx-auto w-full justify-center items-center h-full">
        <div class="grid grid-cols-3 gap-10 place-content-stretch">
            <a href="" class="flex flex-col justify-center items-center bg-color-1 rounded-xl h-[150px] w-[150px]">
                <img src=" {{ asset('icons/chatbot.png') }} " alt="">
                <p>Teman Bot</p>
            </a>
            <a href="" class="flex flex-col justify-center items-center bg-color-1 rounded-xl h-[150px] w-[150px]">
                <img src=" {{ asset('icons/journal.png') }} " alt="">
                <p>Jurnal Harian</p>
            </a>
            <a href="" class="flex flex-col justify-center items-center bg-color-1 rounded-xl h-[150px] w-[150px]">
                <img src=" {{ asset('icons/idea.png') }} " alt="">
                <p>Konten Edukatif</p>
            </a>
            <a href="" class="flex flex-col justify-center items-center bg-color-1 rounded-xl h-[150px] w-[150px]">
                <img src=" {{ asset('icons/to-do-list.png') }} " alt="">
                <p>Daftar Aktivitas</p>
            </a>
            <a href="" class="flex flex-col justify-center items-center bg-color-1 rounded-xl h-[150px] w-[150px]">
                <img src=" {{ asset('icons/forum.png') }} " alt="">
                <p>Forum Diskusi</p>
            </a>
            <a href="" class="flex flex-col justify-center items-center bg-color-1 rounded-xl h-[150px] w-[150px]">
                <img src=" {{ asset('icons/consultation.png') }} " alt="">
            <p>Konsultasi</p>
            </a>
        </div>
    </div>

</main>

@endsection