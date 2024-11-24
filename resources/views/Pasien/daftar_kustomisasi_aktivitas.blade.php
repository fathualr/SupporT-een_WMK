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

    <form action="{{ route('aktivitas-pribadi.update') }}" method="POST">
        @csrf
        <div class="flex gap-4 items-center">
            <button type="submit" class="px-4 py-2 bg-color-3 text-white rounded-md mt-3">
                Simpan Perubahan
            </button>
            <button 
                type="button" 
                id="select-all-btn" 
                class="px-4 py-2 border border-color-1 bg-color-putih text-color-1 rounded-md mt-3 hover:bg-color-8">
                Pilih Semua
            </button>
        </div>

        <div class="grid grid-cols-3 gap-4 py-8">
            @foreach($aktivitasPositif as $aktivitas)
            <div class="flex flex-col bg-color-8 border border-color-4 rounded-3xl">
                <div class="flex flex-col items-center p-2">
                    <img class="w-full h-auto aspect-square rounded-2xl" src="{{ asset('storage/' . $aktivitas->gambar) }}" alt="Card Image">
                    <h3 class="text-lg font-bold text-color-1">
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

<script>
    // JavaScript untuk mencentang/menghilangkan centang semua checkbox
    document.getElementById('select-all-btn').addEventListener('click', function() {
        const checkboxes = document.querySelectorAll('input[type="checkbox"][name="aktivitas[]"]');
        const allChecked = Array.from(checkboxes).every(checkbox => checkbox.checked); // Cek apakah semua sudah dicentang

        checkboxes.forEach(checkbox => {
            checkbox.checked = !allChecked; // Toggle status checkbox
        });
    });
</script>

@endsection