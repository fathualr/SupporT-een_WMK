@extends('layouts.main')

@section('aside')

<!-- konten sidebar -->
<div class="flex flex-col mx-auto w-full h-full pt-9 px-[50px] gap-6">
    <h1 class="text-4xl font-bold text-color-1 text-start">Riwayat Konsultasi</h1>

    <div class="flex flex-col w-full h-full gap-4">

        <!-- card 1 -->
        <div class="flex items-center border-[1px] h-[80px] border-color-4 rounded-2xl p-2 gap-2">
            <div class="flex-none w-16 h-16">
                <img class="w-full h-full rounded-xl" src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp" alt="Album" />
            </div>
            <div class="flex-1">
                <span class="text-color-1 font-semibold">Dr. Mirza</span>
                <div class="flex justify-start items-center">
                    <span class="text-color-2">Senin, 15 Oktober 2024</span>
                </div>
            </div>
            <button class="btn btn-square btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                </svg>
            </button>
        </div>
        <!-- card 1 -->

    </div>
</div>
<!-- konten sidebar -->

@endsection

@section('main')

@section('main')
<!-- daftar konsultasi tenaga ahli -->
<div class="w-full h-full">

        @if($selectedTenagaAhli)

            <a href="/konsultasi" class="btn btn-sm bg-color-3 text-color-putih hover:bg-opacity-75 border-0 mb-3">
                <img class="w-6 h-6" src="{{ asset("icons/back.svg")}}" alt="">
                Kembali
            </a>
            <div class="card h-fit card-compact bg-color-6">
                <div class="flex flex-row gap-5 p-5">
                    <figure class="flex-none">
                        <img
                        class="w-[250px] h-[250px] rounded-2xl object-cover"
                        src="{{ asset('storage/'.$selectedTenagaAhli->user->foto_profil) }}"
                        alt="Profile Image" />
                    </figure>
                    <div class="flex flex-col justify-around w-full">
                        <h2 class="card-title text-color-1 font-bold text-3xl">{{ $selectedTenagaAhli->user->nama }}</h2>
                        <table class="w-full text-left border-collapse">
                            <tr>
                                <td class="font-semibold text-color-2 text-lg">Nomor STR</td>
                                <td>:</td>
                                <td class="text-color-2 text-lg">{{ $selectedTenagaAhli->nomor_str }}</td>
                            </tr>
                            <tr>
                                <td class="font-semibold text-color-2 text-lg">Spesialisasi</td>
                                <td>:</td>
                                <td class="text-color-2 text-lg">{{ $selectedTenagaAhli->spesialisasi }}</td>
                            </tr>
                            <tr>
                                <td class="font-semibold text-color-2 text-lg">Lokasi Praktik</td>
                                <td>:</td>
                                <td class="text-color-2 text-lg">{{ $selectedTenagaAhli->lokasi_praktik }}</td>
                            </tr>
                            <tr>
                                <td class="font-semibold text-color-2 text-lg">Jadwal Aktif</td>
                                <td>:</td>
                                <td class="text-color-2 text-lg">{{ $selectedTenagaAhli->jadwal_aktif }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="divider m-0"></div>
                <div class="flex-1 card-body justify-between">
                    @if(!$selectedTenagaAhli->riwayatPendidikan->isEmpty())
                        <h3 class="text-color-1 font-bold text-xl">Riwayat Pendidikan</h3>
                        <ul class="list-disc pl-5">
                            @foreach($selectedTenagaAhli->riwayatPendidikan as $riwayat)
                            <li class="text-color-2 text-lg">{{ $riwayat->keterangan }}</li>
                            @endforeach
                        </ul>
                    @endif
            
                    <div class="bg-color-5 p-5">
                        <p class="font-semibold text-color-1 text-xl">Biaya Konsultasi: Rp.{{ number_format($selectedTenagaAhli->biaya_konsultasi, 0, ',', '.') }}</p>
                    </div>
            
                    <!-- Tombol -->
                    <div class="mt-4">
                        @if($selectedTenagaAhli->is_available)
                        <button type="button" onclick="initiateConsultation({{ $selectedTenagaAhli->id }})" class="btn btn-lg bg-color-3 border-[1px] border-color-5 text-white w-full">Chat Sekarang</button>
                        @else
                        <button class="btn btn-lg cursor-not-allowed bg-color-4 border-[1px] border-color-5 text-white w-full">Offline</button>
                        @endif
                    </div>
                </div>
            </div>

        @else

            <a href="/" class="btn btn-sm bg-color-3 text-color-putih hover:bg-opacity-75 border-0 mb-3">
                <img class="w-6 h-6" src="{{ asset("icons/back.svg")}}" alt="">
                Kembali
            </a>
            <div class="grid grid-cols-2 gap-4 pb-8">

                @foreach ($tenagaAhli as $ahli)
                <a href="{{ route('konsultasi.index', $ahli->id) }}" class="card card-side h-[180px] card-compact bg-color-6 pl-5">
                    <figure class="flex-none">
                        <img
                        class="w-[150px] h-[150px] rounded-2xl"
                        src="{{ asset('storage/'.$ahli->user->foto_profil) }}"
                        alt="Profile Image" />
                    </figure>
                    <div class="flex-1 card-body justify-between">
                        <h2 class="card-title text-color-1 font-bold">{{ Str::limit($ahli->user->nama,30,'...')}}</h2>
                        <p class="text-color-2">{{ $ahli->spesialisasi }}</p>
                        <div class=" justify-start">
                            <p class="font-semibold text-color-1">Rp.{{ number_format($ahli->biaya_konsultasi, 0, ',', '.') }}</p>

                            @if($ahli->is_available)
                                <button onclick="event.stopPropagation(); initiateConsultation({{ $ahli->id }})" type="button" class="btn btn-sm bg-color-3 border-[1px] border-color-5 text-white w-full">Chat</button>
                            @else
                                <button onclick="event.stopPropagation();" type="button" class="btn btn-sm cursor-not-allowed bg-color-4 border-[1px] border-color-5 text-white w-full">Offline</button>
                            @endif

                        </div>
                    </div>
                </a>
                @endforeach

            </div>

        @endif

</div>
<!-- daftar konsultasi tenaga ahli -->

@endsection