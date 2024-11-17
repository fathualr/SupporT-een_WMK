@extends('layouts.main')

@section('aside')

    <!-- halaman chatbot -->
    <div class="flex flex-col mx-auto w-full h-full pt-9 px-12 gap-6">

        <!-- tombol tambah percakapan -->
        <a href="/chatbot" class="btn flex justify-start bg-color-6 hover:bg-color-5 hover:border-color-3 text-color-1">
            <img src="{{ asset('icons/Plus.svg') }}" alt="Plus">
            Buat percakapan baru
        </a>
        <!-- tombol tambah percakapan -->

        <div class="flex flex-col w-full h-full gap-4">

            <!-- Looping percakapan -->
            @foreach ($percakapanList as $percakapan)
                <button type="button" onclick="window.location='{{ route('chatbot.index', ['id' => $percakapan->id]) }}';" 
                        class="flex flex-row items-center justify-between h-[80px] border-[1px] border-color-4 rounded-2xl p-3 gap-2 hover:bg-color-6">
                    <span class="text-color-1 font-semibold truncate">
                        {{ $percakapan->label ?? 'Percakapan #' . $percakapan->id }}
                    </span>
                    <div class="flex justify-center gap-2">
                        <!-- Tombol Edit -->
                        <a class="btn btn-square btn-md btn-ghost" 
                        onclick="event.stopPropagation(); document.getElementById('edit-modal-{{ $percakapan->id }}').showModal();">
                            <img class="w-6 h-6" src="{{ asset('icons/Edit-dark.svg') }}" alt="Edit">
                        </a>

                        <!-- Tombol Hapus -->
                        <a class="btn btn-square btn-md btn-ghost" 
                        onclick="event.stopPropagation(); document.getElementById('delete-modal-{{ $percakapan->id }}').showModal();">
                            <img class="w-6 h-6" src="{{ asset('icons/Waste-dark.svg') }}" alt="Hapus">
                        </a>
                    </div>
                </button>

                <!-- Modal Edit -->
                <dialog id="edit-modal-{{ $percakapan->id }}" class="modal">
                    <div class="modal-box bg-color-8">
                        <h3 class="text-lg font-bold">Ubah Label Percakapan</h3>
                        <form method="POST" action="{{ route('chatbot.update', $percakapan->id) }}">
                            @csrf
                            @method('PATCH')
                            <div>
                                <label class="form-control w-full pt-5">
                                    <span class="label-text font-medium text-base pb-1">Label Percakapan</span>
                                    <input type="text" name="label" value="{{ $percakapan->label ?? '' }}" 
                                        autocomplete="off" placeholder="Masukkan label baru" 
                                        class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
                                    @error('label')
                                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                    @enderror
                                </label>
                            </div>
                            <div class="modal-action">
                                <button type="button" class="btn bg-color-7 hover:bg-color-8" onclick="this.closest('dialog').close()">Batal</button>
                                <button type="submit" class="btn bg-color-3 text-color-putih hover:bg-opacity-75 border-0">Simpan</button>
                            </div>
                        </form>
                    </div>
                </dialog>

                <!-- Modal Konfirmasi Hapus -->
                <dialog id="delete-modal-{{ $percakapan->id }}" class="modal">
                    <div class="modal-box bg-color-8">
                        <h3 class="text-lg font-bold">Konfirmasi Penghapusan</h3>
                        <p>Apakah Anda yakin ingin menghapus percakapan ini?</p>
                        <div class="modal-action">
                            <button type="button" class="btn bg-color-7 hover:bg-color-8" onclick="this.closest('dialog').close()">Batal</button>
                            <form method="POST" action="{{ route('chatbot.destroy', $percakapan->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn bg-red-500 text-white hover:bg-red-700">Hapus</button>
                            </form>
                        </div>
                    </div>
                </dialog>
            @endforeach

            <!-- Jika tidak ada percakapan -->
            @if ($percakapanList->isEmpty())
                <div class="text-center py-4 text-color-2">
                    <p>Tidak ada percakapan tersedia. Mulai percakapan baru!</p>
                </div>
            @endif

        </div>

    </div>
    <!-- halaman chatbot -->

@endsection

@section('main')

    <!-- section percakapan -->
    <div class="flex flex-col max-w-5xl h-full relative w-full">

        <!-- Pembungkus dengan overflow -->
        <div id="chat-container" class="flex flex-col-reverse w-full h-full overflow-y-auto justify-items-end">
            <!-- Percakapan dimulai dari sini -->

                <!-- Looping pesan -->
            @if ($selectedPercakapan)
                @foreach ($selectedPercakapan->pesanChatbot as $pesan)
                    <div class="flex items-end gap-3 pb-4">
                        <!-- Konten pesan -->
                        @if ($pesan->pengirim === 'bot')
                            <div class="avatar">
                                <div class="w-12 rounded-full">
                                    <img src="{{ asset('images/logo-icon.svg') }}" />
                                </div>
                            </div>
                            <div class="chat-bubble bg-white text-color-1 border w-full">
                                {{ $pesan->teks }}
                            </div>
                        @else
                            <div class="chat-bubble bg-color-3 text-white w-full">
                                {{ $pesan->teks }}
                            </div>
                            <div class="avatar">
                                <div class="w-12 rounded-full">
                                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            @endif
        </div>

        <div class="relative">
            <input type="text" name="hs-validation-name-error" class="py-4 px-4 block w-full rounded-full text-sm bg-color-6 outline-color-5" placeholder="Masukkan pesan anda disini" aria-describedby="hs-validation-name-error-helper">
            <button class="btn btn-ghost absolute inset-y-0 right-0 rounded-full">
                <img src="{{ asset('icons/Sent.svg') }}" alt="Sent">
            </button>
        </div>

    </div>
    <!-- section percakapan -->
@endsection