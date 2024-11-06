@extends('layouts.main_admin2')

@section('main')

<div class="flex flex-col gap-4">
    <h1 class="text-[2rem] text-color-1 fonts-bold">Dashboard</h1>

    <div class="grid grid-cols-3 gap-6">

        <div class="card card-compact bg-color-6 border-[1px] border-color-5">
            <div class="card-body gap-4 justify-center">
                <img class="w-10 h-10" src="{{ asset('icons/Page.svg') }}" alt="">
                <span class="text-xl text-color-1">Total Artikel</span>
                <span class="text-[4rem] text-color-1 font-bold">1100</span>
                <div class="card-actions items-center justify-between">
                    <span class="text-xs text-color-1">12% lebih banyak dari bulan lalu</span>
                    <button class="btn btn-ghost">
                        <img class="w-[30xp] h-[30px]" src="{{ asset('icons/arrow.svg') }}" alt="">
                    </button>
                </div>
            </div>
        </div>

        <div class="card card-compact bg-color-6 border-[1px] border-color-5">
            <div class="card-body gap-4 justify-center">
                <img class="w-10 h-10" src="{{ asset('icons/video_gallery.svg') }}" alt="">
                <span class="text-xl text-color-1">Total Konten Video</span>
                <span class="text-[4rem] text-color-1 font-bold">150</span>
                <div class="card-actions items-center justify-between">
                    <span class="text-xs text-color-1">12% lebih banyak dari bulan lalu</span>
                    <button class="btn btn-ghost">
                        <img class="w-[30xp] h-[30px]" src="{{ asset('icons/arrow.svg') }}" alt="">
                    </button>
                </div>
            </div>
        </div>

        <div class="card card-compact bg-color-6 border-[1px] border-color-5">
            <div class="card-body gap-4 justify-center">
                <img class="w-10 h-10" src="{{ asset('icons/chat_room.svg') }}" alt="">
                <span class="text-xl text-color-1">Total Diskusi</span>
                <span class="text-[4rem] text-color-1 font-bold">150</span>
                <div class="card-actions items-center justify-between">
                    <span class="text-xs text-color-1">12% lebih banyak dari bulan lalu</span>
                    <button class="btn btn-ghost">
                        <img class="w-[30xp] h-[30px]" src="{{ asset('icons/arrow.svg') }}" alt="">
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection
