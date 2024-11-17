@extends('layouts.main')

@section('aside')

<div class="flex flex-col mx-auto w-full h-full pt-9 px-[50px] gap-6">
    <h1 class="text-4xl font-bold text-color-1 text-start">Riwayat Konsultasi</h1>

    <div class="flex flex-col w-full h-full gap-4">

        <!-- card 1 -->
        <div class="flex items-center border-[1px] border-color-4 rounded-2xl p-2 gap-2">
            <div class="flex-none w-16 h-16">
                <img
                    class="w-full h-full rounded-xl"
                    src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
                    alt="Album" />
            </div>
            <div class="flex-1">
                <span class="text-color-1 font-semibold">Dr. Mirza</span>
                <div class="flex justify-start items-center">
                    <span class="text-color-2">Senin, 15 Oktober 2024</span>
                </div>
            </div>
            <button class="btn btn-square btn-ghost">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        class="inline-block h-5 w-5 stroke-current">
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                    </svg>
                </button>
        </div>
        <!-- card 1 -->
        <!-- card 2 -->
        <div class="flex items-center border-[1px] border-color-4 rounded-2xl p-2 gap-2">
            <div class="flex-none w-16 h-16">
                <img
                    class="w-full h-full rounded-xl"
                    src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
                    alt="Album" />
            </div>
            <div class="flex-1">
                <span class="text-color-1 font-semibold">Dr. Mirza</span>
                <div class="flex justify-start items-center">
                    <span class="text-color-2">Senin, 15 Oktober 2024</span>
                </div>
            </div>
            <button class="btn btn-square btn-ghost">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        class="inline-block h-5 w-5 stroke-current">
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                    </svg>
                </button>
        </div>
        <!-- card 2 -->
    </div>

</div>

@endsection

@section('main')

@section('main')
<div class="w-full h-full">
    <div class="grid grid-cols-2 gap-4">
        @foreach ($tenagaAhli as $ahli)
        <div class="card card-side card-compact bg-color-6">
            <figure class="flex-none">
                <img
                class="w-[150px] h-[150px] rounded-2xl"
                src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp"
                alt="Profile Image" />
            </figure>
            <div class="flex-1 card-body">
                <h2 class="card-title text-color-1 font-bold">{{ $ahli->user->nama}}</h2>
                <p class="text-color-2">{{ $ahli->spesialisasi }}</p>
                <div class="card-actions justify-start">
                    <p class="font-semibold text-color-1">Rp.{{ number_format($ahli->biaya_konsultasi, 0, ',', '.') }}</p>
                    <button class="btn bg-color-3 border-[1px] border-color-5 text-white w-full">Chat</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection