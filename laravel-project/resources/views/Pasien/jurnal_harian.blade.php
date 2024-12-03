@extends('layouts.main')

@section('aside')
    <!-- halaman jurnal harian -->
    <div class="flex flex-col mx-auto w-full h-full pt-9 px-12 gap-6">

        <!-- tombol tambah jurnal -->
        <a href="{{ route('jurnalHarian.index') }}" class="btn flex justify-start bg-color-6 hover:bg-color-5 hover:border-color-3 text-color-1">
            <img src="{{ asset('icons/Plus.svg') }}" alt="Plus">
            Tulis Jurnal Baru
        </a>
        <!-- tombol tambah jurnal -->

        <div class="flex flex-col w-full h-full gap-4">

            <!-- Looping jurnal harian -->
            @foreach ($jurnalHarianList as $jurnal)
                <button type="button" onclick="window.location='{{ route('jurnal-harian.show', $jurnal->id) }}';" 
                        class="flex flex-row items-center justify-between h-[50px] border-[1px] border-color-4 rounded-2xl p-3 gap-2 hover:bg-color-6">
                    <span class="text-color-1 font-semibold truncate">
                        {{ $jurnal->judul ? $jurnal->judul : Str::limit($jurnal->isi, 50, '...') }}
                    </span>
                    <div class="flex justify-center gap-2">
                        <!-- Tombol Hapus -->
                        <a class="btn btn-square btn-md btn-ghost" 
                        onclick="event.stopPropagation(); document.getElementById('delete-modal-{{ $jurnal->id }}').showModal();">
                            <img class="w-6 h-6" src="{{ asset('icons/Waste-dark.svg') }}" alt="Hapus">
                        </a>
                    </div>
                </button>

                <!-- Modal Konfirmasi Hapus -->
                <dialog id="delete-modal-{{ $jurnal->id }}" class="modal">
                    <div class="modal-box bg-color-8">
                        <h3 class="text-lg font-bold">Konfirmasi Penghapusan</h3>
                        <p>Apakah Anda yakin ingin menghapus jurnal ini?</p>
                        <div class="modal-action">
                            <button type="button" class="btn bg-color-7 hover:bg-color-8" onclick="this.closest('dialog').close()">Batal</button>
                            <form method="POST" action="{{ route('jurnal-harian.destroy', $jurnal->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn bg-red-500 text-white hover:bg-red-700">Hapus</button>
                            </form>
                        </div>
                    </div>
                </dialog>
            @endforeach

            <!-- Jika tidak ada jurnal -->
            @if ($jurnalHarianList->isEmpty())
                <div class="text-center py-4 text-color-2">
                    <p>Belum ada jurnal harian. Mulai tulis jurnal Anda hari ini!</p>
                </div>
            @endif

        </div>

    </div>
    <!-- halaman jurnal harian -->
@endsection

@section('main')
    <!-- jurnal -->
    <div class="w-full h-full">

        <a href="/" class="btn btn-sm mb-3 bg-color-4 text-color-putih hover:bg-color-2 border-0 w-fit">
            <img class="w-6 h-6" src="{{ asset("icons/back.svg")}}" alt="">
            Kembali
        </a>

        <div class="bg-white max-w-7xl w-full h-full p-4 flex flex-col shadow-lg rounded-2xl">
            @if($selectedJurnal)
                <div class="flex justify-center w-full">
                    <button class="btn btn-sm text-color-1 bg-color-7 border-0 hover:bg-color-putih w-fit" 
                    onclick="
                    @if(Auth::user()->isPremium())
                        document.getElementById('analisis-emosi').showModal();
                    @else
                        document.getElementById('membership').checked = true; // Tampilkan modal membership
                    @endif
                ">
                        Analisis Emosi
                    </button>
                </div>
                <form id="text-form" action="{{ route('jurnal-harian.update', $selectedJurnal->id) }}" method="POST" class="w-full h-full pb-4">
                    @csrf
                    @method('PATCH')

                    <!-- Judul -->
                    <input type="text" autocomplete="off" name="judul" value="{{ old('judul', $selectedJurnal->judul) }}" 
                        class="font-bold text-lg py-3 bg-transparent block w-full rounded-lg focus:border-none focus:outline-none disabled:opacity-50 disabled:pointer-events-none" 
                        placeholder="Judul Jurnal">

                    <hr class="border-slate-200 my-4">
                    
                    <!-- Isi -->
                    <textarea name="isi" 
                        style="
                        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.1) 1px, transparent 1px);
                        background-size: 100% 25px;
                        line-height: 25px;
                        padding: 10px;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        "
                        class="py-1 bg-transparent w-full h-4/5 rounded-lg focus:outline-none resize-none">{{ old('isi', $selectedJurnal->isi) }}</textarea>

                    <div class="flex justify-center w-full">
                        <button type="submit" class="btn border-0 bg-color-3 text-white font-normal">
                            Simpan
                        </button>
                    </div>
                </form>

                @if(Auth::user()->isPremium())
                    <dialog id="analisis-emosi" class="modal">
                        <div class="modal-box bg-color-8">
                            <h3 class="text-lg font-bold">Analisis Emosi</h3>
                            
                                @include('pasien.components.diagram_emotion')

                            <div class="flex justify-center">
                                <button type="button" class="btn btn-sm text-color-1 bg-color-7 border-0 hover:bg-color-putih" onclick="this.closest('dialog').close()">Kembali</button>
                            </div>
                        </div>
                        <form method="dialog" class="modal-backdrop">
                            <button>close</button>
                        </form>
                    </dialog>
                @endif
            @else
                <form id="text-form" action="{{ route('jurnal-harian.store') }}" method="POST" class="w-full h-full pb-4">
                    @csrf

                    <input type="text" autocomplete="off" name="judul" class="font-bold text-lg py-3 bg-transparent block w-full rounded-lg focus:border-none focus:outline-none disabled:opacity-50 disabled:pointer-events-none" placeholder="Judul Jurnal">
                    @error('judul')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror

                    <hr class="border-slate-200 my-4">

                    <textarea name="isi" 
                        style="
                        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.1) 1px, transparent 1px);
                        background-size: 100% 25px;
                        line-height: 25px;
                        padding: 10px;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        "
                        class="py-1 bg-transparent w-full h-4/5 rounded-lg focus:outline-none resize-none"></textarea>
                    @error('isi')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror

                    <div class="flex justify-center">
                        <button type="submit" class="btn bg-color-3 text-white font-normal">
                            Simpan
                        </button>
                    </div>

                </form>
            @endif

        </div>
</div>
    <!-- End jurnal -->
@endsection