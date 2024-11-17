@extends('layouts.main')

@section('aside')

<!-- konten sidebar -->
<div class="flex flex-col w-full h-full pt-9 px-[50px] gap-6">
    
    @include('pasien.Components.riwayat_aktivitas')
    
</div>
<!-- konten sidebar -->

@endsection

@section('main')

<div class="w-full h-full">
    
    <a href="/daftar-aktivitas-pribadi" class="btn btn-sm bg-color-3 text-color-putih hover:bg-opacity-75 border-0">
        <img class="w-6 h-6" src="{{ asset("icons/back.svg")}}" alt="">
        Kembali
    </a>

    <h1 class="font-bold text-3xl my-1">Pilih Aktivitas Positif Anda</h1>
    <p class="text-sm">Silahkan pilih aktivitas positif yang mungkin kamu sukai dan akan kamu lakukan setiap harinya.</p>

    @if (session('success'))
        <div class="text-green-500">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('aktivitas-pribadi.update') }}" method="POST">
        @csrf
        <button type="submit" class="px-4 py-2 bg-color-3 text-white rounded-md mt-3">Simpan Perubahan</button>

        <div class="grid grid-cols-3 gap-4 py-8">
            @foreach($aktivitasPositif as $aktivitas)
            <div class="flex flex-col bg-color-8 border border-color-4 rounded-3xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="flex flex-col items-center p-2">
                    <img class="w-full h-auto aspect-square rounded-2xl" src="{{ asset('storage/' . $aktivitas->gambar) }}" alt="Card Image">
                    <h3 class="text-lg font-bold text-color-1 dark:text-white">
                        {{ $aktivitas->nama }}
                    </h3>
                    <label class="label cursor-pointer">
                        <input 
                            type="checkbox" 
                            name="aktivitas[]" 
                            value="{{ $aktivitas->id }}"
                            {{ $aktivitas->is_selected ? 'checked' : '' }}
                            class="checkbox checkbox-lg border-color-1 [--chkbg:theme(colors.color-3)] [--chkfg:white] checked:border-color-3"
                        />
                    </label>
                </div>
            </div>
            @endforeach
        </div>

    </form>
</div>
@endsection