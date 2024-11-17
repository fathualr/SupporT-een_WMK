@extends('layouts.main')

@section('aside')
<!-- konten sidebar -->
    <div class="flex flex-col w-full h-full pt-9 px-12 gap-6">

        <!-- tombol kustomisasi aktivitas -->
        <a href="/daftar-aktivitas-pribadi/kustomisasi" class="btn flex justify-start bg-color-6 hover:bg-color-5 hover:border-color-3 text-base">
            <img src="{{ asset('icons/Plus.svg') }}" alt="Plus">
            Kustomisasi Aktivitas
        </a>
        <!-- tombol kustomisasi aktivitas -->

    @include('pasien.Components.riwayat_aktivitas')
    
    </div>
<!-- konten sidebar -->
@endsection

@section('main')
<div class="w-full h-full">

    <a href="/" class="btn btn-sm bg-color-3 text-color-putih hover:bg-opacity-75 border-0">
        <img class="w-6 h-6" src="{{ asset("icons/back.svg")}}" alt="">
        Kembali
    </a>

    <h1 class="font-bold text-3xl my-1">Daftar Aktivitas Pribadi</h1>
    <p class="text-sm">Berikut adalah aktivitas yang telah kamu pilih untuk dilakukan setiap harinya.</p>

    <div class="grid grid-cols-3 gap-4 py-8">
        @foreach($aktivitasPribadi as $aktivitasItem)
        <div class="flex flex-col bg-color-8 border border-color-4 rounded-3xl">
            <div class="flex flex-col items-center p-2">
                <img class="w-full h-auto aspect-square rounded-2xl" src="{{ asset('storage/' . $aktivitasItem->aktivitasPositif->gambar) }}" alt="Card Image">
                <h3 class="text-lg font-bold text-color-1>
                    {{ $aktivitasItem->aktivitasPositif->nama }}
                </h3>
                <label class="label cursor-pointer">
                    <input type="checkbox" name="aktivitas[]" value="{{ $aktivitasItem->id }}" class="checkbox checkbox-lg border-color-1 [--chkbg:theme(colors.color-3)] [--chkfg:white] checked:border-color-3"/>
                </label>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection