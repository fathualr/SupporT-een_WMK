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
<body class="font-poppins text-color-1">

    <header class="sticky top-0 z-[999]">
        <div class="flex flex-row justify-between h-20 py-[15px] px-[50px] bg-color-8 border-b border-color-4 ">
            <a href="/" class="flex flex-row">
                <img class="h-[50px] w-[50px] me-[15px]" src=" {{ asset('images/logo-dark-blue.svg') }} " alt="SupporT-een Logo">
                <span class="my-auto text-[2rem]">SupporT-een</span>
            </a>

            @guest
            @else
                @if(Auth::user()->role === 'pasien')
                <div class="flex items-center justify-center select-none">
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
                </div>

                @include('Components.subscription')
                
                @endif
            @endguest

            @if($title != "Login" && $title != "Registrasi")
                @guest
                    <a href="/login" class="btn w-[150px] text-white bg-color-3 border-0 hover:bg-color-6 hover:text-color-1 hover:border hover:border-color-4 text-xl">
                        <span class="font-medium">Masuk</span>
                    </a>
                @else
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" xmlns="http://www.w3.org/2000/svg" 
                    class="btn flex flex-col justify-center place-content-start justify w-[250px] px-[10px] text-color-1 bg-color-6 border border-color-6 hover:bg-color-6  hover:border hover:border-color-5">
                        <div class="avatar self-center">
                            <div class="w-[30px] rounded-full">
                                <img src="{{ asset('storage/' . Auth::user()->foto_profil) }}" />
                            </div>
                        </div>
                        <div class="flex flex-col justify-around me-auto h-full grow text-left">
                            <p class="truncate text-ellipsis overflow-hidden whitespace-nowrap w-[190px]">
                                {{ Auth::user()->nama }}
                            </p>
                            <span class="text-color-3">Online</span>
                        </div>
                    </button>
                    
                    <!-- Dropdown menu -->
                    <div id="dropdown" class="z-10 hidden bg-color-6 divide-y divide-gray-100 border border-color-6 rounded-lg shadow w-[250px]">
                        <ul class="text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
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
            @endif

        </div>
    </header>

    <main>
        <div class="flex items-center justify-center w-full min-h-[calc(100vh-80px)] bg-color-8 text-color-1 py-10">
            <!-- profil -->
            <div class="max-w-5xl py-8 px-10 w-full bg-white border border-gray-200 rounded-3xl">

                <!-- foto profil -->
                <h2 class="text-2xl py-3 font-medium">Profil</h2>
                <hr class="border-gray-200">

                <div class="flex justify-between my-4">
                    <div class="flex items-center gap-8">
                        <div class="flex flex-col items-center justify-center">

                            <div class="avatar pb-3">
                                <div class="w-24 rounded-full">
                                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                                </div>
                            </div>
                            <span class="font-medium">Budi Hartono</span>
                            <span class="text-xs text-color-4">Budi@gmail.com</span>

                        </div>

                        <div>
                            <label class="btn btn-sm cursor-pointer hover:opacity-80 inline-flex items-center my-2 bg-color-6 text-color-3 border border-transparent
                                rounded-md font-semibold text-xs capitalize hover:bg-color-5 active:bg-sky-300 focus: focus:outline-none
                            focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" for="restaurantImage">
                                ubah foto
                                <!-- input gambar -->
                                <input id="restaurantImage" class="text-sm cursor-pointer w-36 hidden" type="file">
                            </label>
                        </div>
                    </div>

                </div>
                <!-- End foto Profil -->

                <!-- detail -->
                <h2 class="text-2xl py-3 font-medium">Detail Akun</h2>
                <hr class="border-gray-200">
                
                <div class="grid grid-cols-2 my-4 gap-x-4">
                    
                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span>Nama</span>
                            </div>
                            <input type="text" name="" value="Budi Hartono" class="input input-bordered outline-color-5 focus:outline-color-5 text-xs w-full" />
                        </label>
                    </div>

                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span>Email</span>
                            </div>
                            <input type="text" name="" value="Budi@gmail.com" class="input input-bordered outline-color-5 focus:outline-color-5 text-xs w-full" />
                        </label>
                    </div>

                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span>Jenis Kelamin</span>
                            </div>
                            <input type="text" name="" value="Laki-laki" class="input input-bordered outline-color-5 focus:outline-color-5 text-xs w-full" />
                        </label>
                    </div>

                    <div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span>Tanggal Lahir</span>
                            </div>
                            <input type="text" name="" value="12 Agustus 1998" class="input input-bordered outline-color-5 focus:outline-color-5 text-xs w-full" />
                        </label>
                    </div>

                </div>
                <!-- end detail -->

                <!-- berlangganan -->
                <h2 class="text-2xl py-3 font-medium">Berlangganan</h2>
                <hr class="border-gray-200">

                <div class="flex justify-center">
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
                                <span class="text-color-3 font-bold">29 hari</span>
                            </p>
                        </div>

                    </div>
                </div>
                <!-- End berlangganan -->
        </div>
        <!-- End profil -->

    </main>
</body>
</html>