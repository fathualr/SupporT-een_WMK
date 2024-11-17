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
        <div class="flex flex-row justify-between h-20 py-[15px] px-[50px] bg-color-8  border-b border-color-4 ">
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

    <div class="{{ in_array($title, ['SupporT-een', 'Login', 'Registrasi']) ? 'min-h-[calc(100vh-80px)]' : 'h-[calc(100vh-80px)]' }} flex w-full bg-color-8">

        <aside class="w-2/5 {{ in_array($title, ['SupporT-een', 'Login', 'Registrasi']) ? '' : 'overflow-y-auto' }}">
            <!-- Konten aside -->
            @yield('aside')
        </aside>

        <main class="w-3/5 bg-color-8 border-l border-color-4">
            <div class="bg-cover bg-brain-pattern flex flex-col mx-auto p-6 w-full justify-center items-center h-full relative overflow-auto">
                <!-- Konten main -->
                @yield('main')
            </div>
        </main>

    </div>



    <footer class="text-color-8">
        <div class="grid grid-cols-4 bg-color-1 h-[250px] px-[150px] pt-[50px]">
            <nav class="pr-5">
                <p class="text-xl font-semibold mb-[10px]">Tentang Aplikasi</p>
                <table class="p">
                    <tr class="align-top">
                        <td>Email</td>
                        <td>:</td>
                        <td>support-een@gmail.com</td>
                    </tr>
                    <tr class="align-top">
                        <td>Alamat</td>
                        <td>:</td>
                        <td class="text-justify">Jl. Ahmad Yani Batam Kota. Kota Batam. kepulauan Riau. Indonesia</td>
                    </tr>
                </table>
            </nav>
            <nav class="col-start-2">
                <p class="text-xl font-semibold mb-[10px]">Pintasan Aplikasi</p>
                <div class="grid grid-cols-2">
                    <nav class="flex flex-col">
                        <a href="" class="link link-hover">Chatbot</a>
                        <a href="" class="link link-hover">Jurnal harian</a>
                        <a href="" class="link link-hover">Konten Edukasi</a>
                    </nav>
                    <nav class="flex flex-col">
                        <a href="" class="link link-hover">Daftar aktivitas</a>
                        <a href="" class="link link-hover">Forum diskusi</a>
                        <a href="" class="link link-hover">Konsultasi</a>
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
                    <a href="" class="btn btn-xs flex h-[30px] w-[100px] bg-color-8 text-color-9 text-color-1 hover:bg-color-6 border-color-4">
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
</body>
</html>