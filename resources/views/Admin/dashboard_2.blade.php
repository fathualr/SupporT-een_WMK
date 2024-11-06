@extends('layouts.main_admin2')

@section('main')

<div class="flex flex-col gap-4">
    <h1 class="text-[2rem] text-color-1 fonts-bold">Dashboard</h1>
    <div class="grid grid-cols-4 gap-6">
        <!-- card 1 -->
        <div class="card card-compact bg-color-6 border-[1px] border-color-5">
            <div class="card-body">
                <img class="w-10 h-10" src="{{ asset('icons/Page.svg') }}" alt="">
                <span class="text-base text-color-1">Total Artikel</span>
                <div class="card-actions items-center justify-between">
                    <span class="text-[2.5rem] text-color-1 font-bold">1100</span>
                    <button class="btn btn-ghost">
                        <img class="w-[30xp] h-[30px]" src="{{ asset('icons/arrow.svg') }}" alt="">
                    </button>
                </div>
            </div>
        </div>
        <!-- card 1 -->

        <!-- card 2 -->
        <div class="card card-compact bg-color-6 border-[1px] border-color-5">
            <div class="card-body">
                <img class="w-10 h-10" src="{{ asset('icons/video_gallery.svg') }}" alt="">
                <span class="text-base text-color-1">Total Video</span>
                <div class="card-actions items-center justify-between">
                    <span class="text-[2.5rem] text-color-1 font-bold">150</span>
                    <button class="btn btn-ghost">
                        <img class="w-[30xp] h-[30px]" src="{{ asset('icons/arrow.svg') }}" alt="">
                    </button>
                </div>
            </div>
        </div>
        <!-- card 2 -->

        <!-- card 3 -->
        <div class="card card-compact bg-color-6 border-[1px] border-color-5">
            <div class="card-body">
                <img class="w-10 h-10" src="{{ asset('icons/chat_room.svg') }}" alt="">
                <span class="text-base text-color-1">Total Diskusi</span>
                <div class="card-actions items-center justify-between">
                    <span class="text-[2.5rem] text-color-1 font-bold">750</span>
                    <button class="btn btn-ghost">
                        <img class="w-[30xp] h-[30px]" src="{{ asset('icons/arrow.svg') }}" alt="">
                    </button>
                </div>
            </div>
        </div>
        <!-- card 3 -->

        <!-- card 4 -->
        <div class="card card-compact bg-color-6 border-[1px] border-color-5">
            <div class="card-body">
                <img class="w-10 h-10" src="{{ asset('icons/List_view.svg') }}" alt="">
                <span class="text-base text-color-1">Total Aktivitas Positif</span>
                <div class="card-actions items-center justify-between">
                    <span class="text-[2.5rem] text-color-1 font-bold">2500</span>
                    <button class="btn btn-ghost">
                        <img class="w-[30xp] h-[30px]" src="{{ asset('icons/arrow.svg') }}" alt="">
                    </button>
                </div>
            </div>
        </div>
        <!-- card 4 -->

    </div>
</div>


@endsection
