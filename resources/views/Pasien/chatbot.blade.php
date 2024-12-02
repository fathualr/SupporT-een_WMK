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
                        class="flex flex-row items-center justify-between h-[50px] border-[1px] border-color-4 rounded-2xl p-3 gap-2 hover:bg-color-6">
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
        <div id="chat-messages" class="flex flex-col-reverse w-full h-full scrollbar overflow-y-auto justify-items-end select-text">
            <!-- Percakapan dimulai dari sini -->

            @if ($selectedPercakapan)
                <!-- Looping pesan -->
                @foreach ($selectedPercakapan->pesanChatbot as $pesan)
                    @if ($pesan->pengirim === 'bot')
                        <div class="flex items-end gap-3 pb-4">
                            <div class="avatar">
                                <div class="w-12 rounded-full">
                                    <img src="{{ asset('images/logo-icon.svg') }}" />
                                </div>
                            </div>
                            <div class="chat-bubble bg-white text-color-1 border w-fit">
                                {{ $pesan->teks }}
                            </div>
                        </div>
                    @else
                        <div class="flex items-end justify-end gap-3 pb-4">
                            <div class="chat-bubble bg-color-3 text-white w-fit">
                                {{ $pesan->teks }}
                            </div>
                            <div class="avatar">
                                <div class="w-12 rounded-full">
                                    <img src="{{ Auth::user()->foto_profil ? asset('storage/' . Auth::user()->foto_profil) : asset('storage/image/dummy.png') }}" />
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
                <div class="flex justify-center items-center h-full w-full">
                    <span class="font-bold text-3xl text-color-1">
                        Ceritakan pengalaman atau cerita anda...
                    </span>
                </div>
            @endif
        </div>

        @if (Auth::user()->pasien->getNonPremiumLimit() >= 10)
            <div id="toast-undo" class="flex items-center w-full p-4 text-color-putih bg-color-1 rounded-lg shadow mb-3" role="alert">
                <div class="flex flex-col w-full">
                    <span class="mb-3 font-semibold">
                        Kuota chatbot Anda sudah habis. Anda dapat menggunakan kembali pada 
                        <strong>
                            {{ $nextAvailableTime ? $nextAvailableTime->format('H:i') : '00:00' }}
                        </strong>.
                    </span>
                    <label for="membership" class="btn w-fit py-2 px-4 text-2xl font-bold text-color-1 rounded-lg bg-color-6 hover:bg-color-5 transition duration-300">
                        Berlangganan Sekarang!
                    </label>
                </div>
                <div class="flex items-center ms-auto space-x-2 rtl:space-x-reverse">
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-color-1 text-color-putih hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#toast-undo" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        <form id="chat-form"  method="POST" action="{{ route('chatbot.store') }}">
            @csrf
            <input type="hidden" id="id-percakapan" name="id_percakapan" value="{{ $selectedPercakapan->id ?? '' }}">
            <div class="relative">
                <!-- Input teks -->
                <input type="text" id="text-input" autofocus name="pesan" class="h-[50px] flex items-center py-4 px-4 w-full rounded-full text-sm bg-color-6 border border-color-1 focus-visible:outline focus-visible:outline-color-1" 
                    placeholder="Masukkan pesan anda disini" aria-describedby="hs-validation-name-error-helper" autocomplete="off">
        
                @if (Auth::user()->pasien->getNonPremiumLimit() < 10)
                    <!-- Tombol kirim -->
                    <button type="submit" class="btn btn-ghost h-[50px] absolute inset-y-0 right-0 rounded-r-full px-2 border-x-0 outline-none">
                        <img src="{{ asset('icons/Sent.svg') }}" alt="Sent">
                    </button>
                    
                    <!-- Tombol mikrofon -->
                    <button type="button" id="voice-button" class="btn btn-ghost h-[50px] absolute inset-y-0 right-12 rounded-r-none px-1 border-x-0 outline-none">
                        <img src="{{ asset('icons/Microphone.svg') }}" alt="Microphone">
                    </button>
                @else
                    <!-- Tombol kirim -->
                    <button disabled type="submit" class="btn btn-ghost h-[50px] absolute inset-y-0 right-0 rounded-r-full px-2 opacity-50 cursor-not-allowed">
                        <img src="{{ asset('icons/Sent.svg') }}" alt="Sent">
                    </button>
            
                    <!-- Tombol mikrofon -->
                    <button disabled type="button" id="voice-button" class="btn btn-ghost h-[50px] absolute inset-y-0 right-12 rounded-r-none px-1 opacity-50 cursor-not-allowed">
                        <img src="{{ asset('icons/Microphone.svg') }}" alt="Microphone">
                    </button>
                @endif
        
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
    
            // Status rekaman
            let isListening = false;
    
            // Saat tombol mikrofon diklik
            voiceButton.addEventListener("click", () => {
                if (isListening) {
                    recognition.stop(); // Hentikan rekaman
                    console.log("Voice recognition stopped.");
                    isListening = false;
    
                    // Ubah gaya tombol jika diinginkan
                    voiceButton.classList.remove("bg-color-5", "opacity-50"); // Contoh: Ubah warna tombol
                    voiceButton.classList.add("btn-ghost");
                } else {
                    recognition.start(); // Mulai rekaman
                    console.log("Voice recognition started...");
                    isListening = true;
    
                    // Ubah gaya tombol jika diinginkan
                    voiceButton.classList.add("bg-color-5", "opacity-50"); // Contoh: Ubah warna tombol
                    voiceButton.classList.remove("btn-ghost");
                }
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
                if (isListening) {
                    recognition.start(); // Restart jika tombol masih aktif
                    console.log("Voice recognition restarted...");
                }
            });
    
            // Tangani error
            recognition.addEventListener("error", (event) => {
                console.error("Voice recognition error:", event.error);
                alert("Terjadi masalah saat mengenali suara. Coba lagi.");
                isListening = false;
    
                // Kembalikan gaya tombol ke default
                voiceButton.classList.remove("bg-color-5", "opacity-50");
                voiceButton.classList.add("btn-ghost");
            });
        } else {
            alert("Browser Anda tidak mendukung fitur pengenalan suara.");
        }
    </script>    

    @if ($selectedPercakapan)
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const chatForm = document.getElementById('chat-form');
                const chatInput = document.getElementById('text-input');
                const chatMessages = document.getElementById('chat-messages');
                const percakapanId = document.getElementById('id-percakapan').value;
                const flashMessagePlace = document.getElementById('flash-message-place'); // Lokasi untuk flash message

                chatForm.addEventListener('submit', async (e) => {
                    e.preventDefault(); // Mencegah reload halaman

                    const pesan = chatInput.value.trim();
                    if (!pesan) {
                        // Tambahkan pesan flash jika input kosong
                        flashMessagePlace.insertAdjacentHTML('beforeend', `
                            <div class="absolute top-[100px] left-1/2 transform -translate-x-1/2 z-40">
                                <div role="alert" id="toast" class="alert alert-error col-span-9 mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Pesan tidak boleh kosong!</span>
                                    <button id="close-toast" class="ml-4 text-lg font-semibold text-black hover:text-gray-700 focus:outline-none">
                                        ✕
                                    </button>
                                </div>
                            </div>
                        `);

                        initializeToast(); // Inisialisasi toast
                        return; // Hentikan pengiriman
                    }

                    try {
                        const response = await fetch('{{ route('chatbot.store') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            },
                            body: JSON.stringify({
                                pesan,
                                id_percakapan: percakapanId,
                            }),
                        });

                        if (!response.ok) {
                            const errorData = await response.json();
                            if (response.status === 403) {
                                window.location.reload();
                            } else {
                                alert('Terjadi kesalahan saat mengirim pesan.');
                            }
                            return;
                        }

                        const data = await response.json();
                        if (response.ok) {
                            // Tampilkan pesan pengguna
                            const userMessage = document.createElement('div');
                            userMessage.classList.add('flex', 'items-end', 'justify-end', 'gap-3', 'pb-4');
                            userMessage.innerHTML = `
                                <div class="chat-bubble bg-color-3 text-white w-fit">
                                    ${data.user_message}
                                </div>
                                <div class="avatar">
                                    <div class="w-12 rounded-full">
                                        <img src="{{ Auth::user()->foto_profil ? asset('storage/' . Auth::user()->foto_profil) : asset('storage/image/dummy.png') }}" alt="User Avatar" />
                                    </div>
                                </div>
                            `;
                            chatMessages.prepend(userMessage); // Tambahkan di atas karena flex-col-reverse

                            // Tampilkan pesan bot
                            const botMessage = document.createElement('div');
                            botMessage.classList.add('flex', 'items-end', 'gap-3', 'pb-4');
                            botMessage.innerHTML = `
                                <div class="avatar">
                                    <div class="w-12 rounded-full">
                                        <img src="{{ asset('images/logo-icon.svg') }}" />
                                    </div>
                                </div>
                                <div class="chat-bubble bg-white text-color-1 border w-fit">
                                    ${data.bot_message}
                                </div>
                            `;
                            chatMessages.prepend(botMessage); // Tambahkan di atas karena flex-col-reverse

                            // Kosongkan input
                            chatInput.value = '';
                        } else {
                            alert('Terjadi kesalahan saat mengirim pesan.');
                        }
                    } catch (error) {
                        console.error('Error:', error);
                        alert('Gagal terhubung ke server.');
                    }
                });

                // Fungsi untuk menginisialisasi flash message (toast)
                function initializeToast() {
                    const toastElement = document.getElementById('toast');
                    const closeButton = document.getElementById('close-toast');
                    const toastDuration = 3000; // Durasi tampil dalam milidetik (3 detik)

                    if (toastElement) {
                        // Animasi fade-in
                        toastElement.style.opacity = '0';
                        toastElement.style.transition = 'opacity 0.5s ease';
                        setTimeout(() => {
                            toastElement.style.opacity = '1';
                        }, 10); // Delay untuk memastikan elemen di-render

                        // Timer untuk menghilangkan toast
                        setTimeout(() => {
                            // Animasi fade-out
                            toastElement.style.opacity = '0';
                            setTimeout(() => {
                                toastElement.remove(); // Hapus elemen setelah animasi selesai
                            }, 500); // Waktu animasi fade-out (0.5 detik)
                        }, toastDuration);
                    }

                    if (closeButton) {
                        // Tombol close
                        closeButton.addEventListener('click', function () {
                            toastElement.style.opacity = '0'; // Animasi fade-out
                            setTimeout(() => {
                                toastElement.remove(); // Hapus elemen setelah animasi selesai
                            }, 500); // Waktu animasi fade-out
                        });
                    }
                }
            });
        </script>
    @endif

@endsection