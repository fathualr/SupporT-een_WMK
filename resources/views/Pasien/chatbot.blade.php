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
        
        <a href="/" class="btn btn-sm mb-3 bg-color-4 text-color-putih hover:bg-color-2 border-0 w-fit">
            <img class="w-6 h-6" src="{{ asset("icons/back.svg")}}" alt="">
            Kembali
        </a>
        
        <!-- Pembungkus dengan overflow -->
        <div id="chat-container" class="flex flex-col-reverse w-full h-full scrollbar overflow-y-auto justify-items-end select-text">
            <!-- Percakapan dimulai dari sini -->

            @if ($selectedPercakapan)
                <!-- Looping pesan -->
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
                                    <img src="{{ asset('storage/'. $pesan->percakapanChatbot->pasien->user->foto_profil) }}" />
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            @else
                <div class="flex justify-center items-center h-full w-full">
                    <span class="font-bold text-3xl text-color-1">
                        Ceritakan pengalaman atau cerita anda...
                    </span>
                </div>
            @endif
        </div>

        <form method="POST" action="{{ route('chatbot.store') }}">
            @csrf
            <input type="hidden" name="id_percakapan" value="{{ $selectedPercakapan->id ?? '' }}">
            <div class="relative">
                <!-- Input teks -->
                <input type="text" id="text-input" autofocus name="pesan" class="py-4 px-4 block w-full rounded-full text-sm bg-color-6 outline-color-5" 
                    placeholder="Masukkan pesan anda disini" aria-describedby="hs-validation-name-error-helper" autocomplete="off">
        
                <!-- Tombol kirim -->
                <button type="submit" class="btn btn-ghost absolute inset-y-0 right-0 rounded-r-full p-2">
                    <img src="{{ asset('icons/Sent.svg') }}" alt="Sent">
                </button>
        
                <!-- Tombol mikrofon -->
                <button type="button" id="voice-button" class="btn btn-ghost absolute inset-y-0 right-12 p-1">
                    <img src="{{ asset('icons/Microphone.svg') }}" alt="Microphone">
                </button>
            </div>
        </form>
        

    </div>
    <!-- section percakapan -->

    <script>
        // Cek apakah browser mendukung Web Speech API
        const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    
        if (SpeechRecognition) {
            console.log("Web Speech API is supported in this browser.");
    
            // Inisialisasi Speech Recognition
            const recognition = new SpeechRecognition();
            recognition.lang = 'id-ID'; // Bahasa Indonesia
            recognition.interimResults = true; // Aktifkan hasil sementara
            recognition.maxAlternatives = 1; // Ambil hasil terbaik
    
            // Elemen DOM
            const textInput = document.getElementById("text-input");
            const voiceButton = document.getElementById("voice-button");
    
            // Saat tombol mikrofon diklik
            voiceButton.addEventListener("click", () => {
                recognition.start(); // Mulai rekaman
                console.log("Voice recognition started...");
            });
    
            // Ketika suara dikenali (termasuk hasil sementara)
            recognition.addEventListener("result", (event) => {
                let interimTranscript = ""; // Teks sementara
                let finalTranscript = ""; // Teks final
    
                for (let i = 0; i < event.results.length; i++) {
                    const transcript = event.results[i][0].transcript;
                    if (event.results[i].isFinal) {
                        finalTranscript += transcript; // Simpan teks final
                    } else {
                        interimTranscript += transcript; // Simpan teks sementara
                    }
                }
    
                // Tampilkan teks sementara atau final di input
                textInput.value = finalTranscript || interimTranscript;
            });
    
            // Tangani jika rekaman selesai
            recognition.addEventListener("end", () => {
                console.log("Voice recognition ended.");
            });
    
            // Tangani error
            recognition.addEventListener("error", (event) => {
                console.error("Voice recognition error:", event.error);
                alert("Terjadi masalah saat mengenali suara. Coba lagi.");
            });
        } else {
            alert("Browser Anda tidak mendukung fitur pengenalan suara.");
        }
    </script>    
@endsection