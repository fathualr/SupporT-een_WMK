<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>{{ $title }}</title>
    <link rel="icon" type="image/svg+xml" href=" {{ asset('images/logo-icon.svg') }} ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
</head>
<body class="font-poppins text-color-1 select-none">

    <header class="sticky top-0 z-[999]">
        <div class="flex flex-row justify-between h-20 py-[15px] px-[50px] bg-color-8  border-b border-color-4 ">
            <a href="{{ Auth::check() && Auth::user()->role === 'tenaga ahli' ? '/tenaga-ahli' : '/' }}" class="flex flex-row">
                <img class="h-[50px] w-[50px] me-[15px]" src=" {{ asset('images/logo-dark-blue.svg') }} " alt="SupporT-een Logo">
                <span class="my-auto text-[2rem]">SupporT-een</span>
            </a>

            <div class="flex items-center justify-center select-none">
                @include('Components.flash-message')
                @auth
                    @if(Auth::user()->role === 'pasien' && !Auth::user()->isPremium() || Auth::user()->isPremium() && Auth::user()->premiumEndingSoon())
                        <div id="card" class="absolute -top-[310px] left-1/2 transform -translate-x-1/2 -translate-y-1 bg-color-1 shadow-lg rounded-lg p-3 max-w-[500px] text-center transition-all duration-300 text-color-putih hover:translate-y-80">
                            <!-- Konten Card -->
                            <!-- Badge atau Tagline -->
                            <div class="flex justify-center mb-4">
                                <span class="px-3 py-1 text-xs font-bold uppercase bg-color-3 text-color-putih rounded-full shadow-sm">
                                    Spesial Premium
                                </span>
                            </div>
                            <p class="mb-4">
                                Nikmati fitur eksklusif kami dengan berlangganan. Dapatkan akses premium hari ini dan tingkatkan pengalaman Anda!
                            </p>
                            <div class="flex justify-center mb-6">
                                <svg class="flex-shrink-0 w-20 h-20 text-color-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                            </div>
                            <label for="membership" class="btn w-full py-2 px-4 text-2xl font-bold text-color-1 rounded-lg bg-color-6 hover:bg-color-5 transition duration-300">
                                Berlangganan Sekarang!
                            </label>
                            <div class="divider mb-0"></div>
                            <div class="flex absolute bg-color-1 -bottom-10 left-1/2 transform -translate-x-1/2 px-3 pt-0 pb-1 rounded-lg shadow-lg">
                                <p class="flex font-medium text-3xl items-center">PREM</p>
                                <img class="h-[50px] w-[50px]" src="{{ asset('icons/Guarantee.svg') }}">
                                <p class="flex font-medium text-3xl items-center">UM</p>
                            </div>
                        </div>
                        
                        @include('Components.subscription')
                    @endif
                @endauth
            </div>

            @if($title != "Login" && $title != "Registrasi")
                @guest
                    <a href="/login" class="btn w-[150px] text-white bg-color-3 border-0 hover:bg-color-6 hover:text-color-1 hover:border hover:border-color-4 text-xl">
                        <span class="font-medium">Masuk</span>
                    </a>
                @else
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" xmlns="http://www.w3.org/2000/svg" class="btn flex flex-col justify-center place-content-start justify w-[250px] px-[10px] text-color-1 bg-color-6 border border-color-6 hover:bg-color-6  hover:border hover:border-color-5">
                        <div class="avatar self-center">
                            <div class="w-[30px] rounded-full">
                                <img src="{{ asset('storage/' . Auth::user()->foto_profil) }}" />
                            </div>
                        </div>
                        <div class="flex flex-col justify-around me-auto h-full grow text-left">
                            <p class="truncate text-ellipsis overflow-hidden whitespace-nowrap w-[190px]">
                                {{ Auth::user()->nama }}
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-color-3">Online</span>
                                {!! Auth::user()->isPremium() ?'<span class="text-color-putih bg-color-3 px-2 py-1 rounded-lg">Premium</span>' : ''!!}
                            </div>
                        </div>
                    </button>
                    
                    <!-- Dropdown menu -->
                    <div id="dropdown" class="z-10 hidden bg-color-6 divide-y divide-gray-100 border border-color-6 rounded-lg shadow w-[250px]">
                        <ul class="text-sm text-gray-700 font-medium" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="/profile" class="block px-4 py-2  hover:bg-gray-100 hover:rounded-lg w-full text-center">
                                    Profile
                                </a>
                            </li>
                            <li>
                                <form class="" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="block px-4 py-2  hover:bg-gray-100 hover:rounded-lg w-full text-center">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
    
                @endguest
            @else
                <!-- Div Placeholder -->
                <div class="w-[250px]"></div>
            @endif

        </div>
    </header>

    <main>
        <div class="flex items-center justify-center w-full min-h-[calc(100vh-80px)] bg-color-8 text-color-1 py-10">
            <!-- profil -->
            <div class="max-w-5xl py-8 px-10 w-full bg-white border border-gray-200 rounded-3xl">


                <h2 class="text-2xl py-3 font-medium">Detail Akun</h2>
                <hr class="border-gray-200">

                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="role" value="pasien">

                    <div class="flex justify-between my-4">
                        <div class="flex items-center gap-8">
                            <div class="flex flex-col items-center justify-center">
                                <div class="avatar pb-3">
                                    <div class="w-24 rounded-full">
                                        <img id="previewImage" src="{{ asset('storage/' . $user->foto_profil) }}" />
                                    </div>
                                </div>
                            </div>

                            <label class="btn btn-sm cursor-pointer hover:opacity-80 inline-flex items-center my-2 bg-color-6 text-color-3 border border-transparent
                                rounded-md font-semibold text-xs capitalize hover:bg-color-5 active:bg-sky-300 focus: focus:outline-none
                            focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" for="restaurantImage">
                                ubah foto
                                <!-- input gambar -->
                                <input name="foto_profil" id="restaurantImage" class="text-sm cursor-pointer w-36 hidden" type="file">
                            </label>
                            @error('foto_profil')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <!-- End foto Profil -->

                    <!-- detail -->
                    <div class="grid grid-cols-2 my-4 gap-x-4">
                        
                        <label class="form-control w-full">
                            <div class="label">
                                <span>Nama</span>
                            </div>
                            <input type="text" name="nama" value="{{ $user->nama }}" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
                            @error('nama')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </label>

                        <label class="form-control w-full">
                            <div class="label">
                                <span>Email</span>
                            </div>
                            <input type="text" readonly value="{{ $user->email }}" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg cursor-not-allowed" />
                            @error('email')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </label>

                        <label class="form-control w-full">
                            <div class="label">
                                <span>Jenis Kelamin</span>
                            </div>
                            <select name="jenis_kelamin" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" required>
                                <option value="laki laki" {{ $user->jenis_kelamin === 'laki laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="perempuan" {{ $user->jenis_kelamin === 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </label>

                        <label class="form-control w-full">
                            <div class="label">
                                <span>Tanggal Lahir</span>
                            </div>
                            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $user->tanggal_lahir->format('Y-m-d')) }}" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
                            @error('tanggal_lahir')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                        </label>
                        
                        <label class="form-control col-span-2 w-full">
                            <div class="label">
                                <span>Deskripsi Diri</span>
                            </div>
                            <textarea name="deskripsi_diri" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg">{{ old('deskripsi_diri', $user->pasien->deskripsi_diri ?? '') }}</textarea>
                            @error('deskripsi_diri')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                        </label>

                        <div class="flex justify-center items-center col-span-2 mt-4">
                            <button type="submit" class="btn btn-primary bg-color-6 text-color-3 border border-transparent rounded-md font-semibold text-sm hover:bg-color-5 transition ease-in-out duration-150">
                                Simpan Perubahan
                            </button>
                        </div>                    
                    </div>

                </form>

                <h2 class="text-2xl py-3 font-medium">Status</h2>
                <hr class="border-gray-200">
                
                <div class="flex justify-center">
                    @if(Auth::user()->role === 'pasien' && Auth::user()->isPremium())
                        <div class="bg-white max-w-sm w-full py-4 px-8 my-4 border border-gray-200 rounded-lg shadow-lg relative">
                            
                            <!-- status langganan -->
                            <div class="mb-2 flex items-center justify-between">
                                <h5 class="text-lg font-bold text-gray-800">Paket Langganan Premium</h5>
                                <span class="py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                    <svg class="shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                    <path d="m9 12 2 2 4-4"></path>
                                    </svg>
                                    Aktif
                                </span>
                            </div>

                            <!-- Fitur-Fitur -->
                            <ul role="list" class="space-y-4 my-4">
                                <li class="flex items-center">
                                    <svg class="flex-shrink-0 w-5 h-5 text-color-3" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="text-sm font-normal text-gray-600 ml-3">
                                        Chatbot dengan akses berkali lipat.
                                    </span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="flex-shrink-0 w-5 h-5 text-color-3" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="text-sm font-normal text-gray-600 ml-3">
                                        Analisis emosi harian dari jurnal.
                                    </span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="flex-shrink-0 w-5 h-5 text-color-3" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="text-sm font-normal text-gray-600 ml-3">
                                        Forum diskusi online eksklusif.
                                    </span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="flex-shrink-0 w-5 h-5 text-color-3" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="text-sm font-normal text-gray-600 ml-3">
                                        Dukungan teknis prioritas.
                                    </span>
                                </li>
                            </ul>

                            <div class="flex justify-center">
                                <p class="text-xs text-gray-800">Durasi langganan tersisa 
                                    <span class="text-color-3 font-bold">{{ $remainingTime }}</span>
                                </p>
                            </div>

                        </div>
                        <!-- End berlangganan -->
                    @else
                    <span class="p-3">Anda tidak memiliki langganan premium aktif.</span>
                    @endif
                </div>
        </div>
        <!-- End profil -->

    </main>

    <footer class="text-color-8">
        <div class="grid grid-cols-4 bg-color-1 min-h-[250px] h-fit px-[150px] pt-[50px]">
            <nav class="pr-5">
                <p class="text-xl font-semibold mb-[10px]">Tentang Aplikasi</p>
                <table class="p">
                    <tr class="align-top">
                        <td>Email</td>
                        <td>:</td>
                        <td class="select-all">support-een@gmail.com</td>
                    </tr>
                    <tr class="align-top">
                        <td>Alamat</td>
                        <td>:</td>
                        <td class="text-justify select-all">Jl. Ahmad Yani Batam Kota. Kota Batam. kepulauan Riau. Indonesia</td>
                    </tr>
                </table>
            </nav>
            <nav class="col-start-2">
                <p class="text-xl font-semibold mb-[10px]">Pintasan Aplikasi</p>
                <div class="grid grid-cols-2">
                    <nav class="flex flex-col">
                        <a href="/chatbot" class="link link-hover">Chatbot</a>
                        <a href="/jurnal-harian" class="link link-hover">Jurnal harian</a>
                        <a href="/konten-edukatif" class="link link-hover">Konten Edukatif</a>
                    </nav>
                    <nav class="flex flex-col">
                        <a href="/daftar-aktivitas-pribadi" class="link link-hover">Daftar aktivitas</a>
                        <a href="/forum" class="link link-hover">Forum diskusi</a>
                        <a href="/konsultasi" class="link link-hover">Konsultasi</a>
                    </nav>
                </div>
            </nav>
            <ul class="col-start-4">
                <li >
                    <p class="text-xl font-semibold mb-1">Sosial Media</p>
                    <div class="flex">
                        <a href="">
                            <img src=" {{ asset('icons/instagram.png') }} " alt="" class="h-10 w-10">
                        </a>
                        <a href="">
                            <img src=" {{ asset('icons/twitter.png') }} " alt="" class="h-10 w-10">
                        </a>
                        <a href="">
                            <img src=" {{ asset('icons/facebook.png') }} " alt="" class="h-10 w-10">
                        </a>
                        <a href="">
                            <img src=" {{ asset('icons/youtube.png') }} " alt="" class="h-10 w-10">
                        </a>
                    </div>
                </li>
                <li class="flex flex-col">
                    <p class="text-base font-semibold mb-1">Anda seorang tenaga ahli kejiwaan?</p>
                    <a href="/mitra" class="btn btn-xs flex h-[30px] w-[100px] bg-color-8 text-color-9 text-color-1 hover:bg-color-6 border-color-4">
                        <img src=" {{ asset('icons/doctor-department.png') }} " alt="" class="h-4 w-4">
                        Daftar
                    </a>
                </li>
            </ul>
            <div class="col-span-4  w-full mx-auto text-center mt-auto">
                <span class="text-xs">&copy; <?php echo date("Y"); ?> SupporT-een</span>
            </div>
        </div>
    </footer>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @auth
        @if(Auth::user()->role === 'pasien' && !Auth::user()->isPremium() || Auth::user()->isPremium() && Auth::user()->premiumEndingSoon())
            <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
            <script type="text/javascript">
                document.getElementById('subscribe').onclick = function () {
                    fetch('{{ route('generate.snaptoken') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                    })
                    .then((response) => {
                        // Jika status bukan 200 OK, cek pesan kesalahan
                        if (!response.ok) {
                            return response.json().then((data) => {
                                throw new Error(data.error || 'Gagal mendapatkan Snap Token');
                            });
                        }
                        return response.json();
                    })
                    .then((data) => {
                        if (data.snap_token) {
                            snap.pay(data.snap_token, {
                                onSuccess: function (result) {
                                    fetch(`{{ url('/process-payment') }}/${data.transaction_id}`, {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                        },
                                        body: JSON.stringify({ payment_result: result }),
                                    })
                                    .then((response) => response.json())
                                    .then((response) => {
                                        if (response.success) {
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Berhasil',
                                                text: 'Pembayaran berhasil, langganan Anda telah aktif.',
                                                confirmButtonText: 'OK',
                                            }).then(() => {
                                                window.location.reload();
                                            });
                                        } else {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Kesalahan',
                                                text: response.message || 'Pembayaran gagal diproses.',
                                                confirmButtonText: 'OK',
                                            }).then(() => {
                                                window.location.reload();
                                            });
                                        }
                                    });
                                },
                                onPending: function (result) {
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Pending',
                                        text: 'Pembayaran belum selesai. Anda dapat melanjutkannya nanti.',
                                        confirmButtonText: 'OK',
                                    }).then(() => {
                                        window.location.reload();
                                    });
                                },
                                onError: function (result) {
                                    fetch(`{{ url('/cancel-transaction') }}/${data.transaction_id}`, {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                        },
                                    })
                                    .then((response) => response.json())
                                    .then(() => {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Gagal',
                                            text: 'Pembayaran gagal. Status transaksi diperbarui.',
                                            confirmButtonText: 'OK',
                                        }).then(() => {
                                            window.location.reload();
                                        });
                                    });
                                },
                                onClose: function () {
                                    Swal.fire({
                                        icon: 'info',
                                        title: 'Dibatalkan',
                                        text: 'Anda menutup pembayaran. Anda dapat melanjutkan pembayaran nanti.',
                                        confirmButtonText: 'OK',
                                    }).then(() => {
                                        window.location.reload();
                                    });
                                },
                            });
                        }
                    })
                    .catch((error) => {
                        Swal.fire({
                            icon: 'error',
                            title: 'Kesalahan',
                            text: error.message,
                            confirmButtonText: 'OK',
                        }).then(() => {
                            window.location.reload();
                        });
                    });
                };
            </script>
        @endif
    @endauth

    <script>
        document.getElementById('restaurantImage').addEventListener('change', function (event) {
            const [file] = event.target.files;
            if (file) {
                document.getElementById('previewImage').src = URL.createObjectURL(file);
            }
        });
    </script>
</body>
</html>