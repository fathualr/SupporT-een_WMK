<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
    <link rel="icon" type="image/svg+xml" href=" {{ asset('images/logo-icon.svg') }} ">

</head>
<body class="text-color-1">

    <header class="sticky top-0 z-[999]">
        <div class="flex flex-row h-20 py-[15px] px-[50px] bg-color-8  border-b border-color-4 ">
            <a href="/" class="flex flex-row">
                <img class="h-[50px] w-[50px] me-[15px]" src=" {{ asset('images/logo-dark-blue.svg') }} " alt="SupporT-een Logo">
                <span class="my-auto text-[2rem]">SupporT-een</span>
            </a>

            @if($title != "Login" && $title != "Registrasi")
                <a href="/login" class="btn ms-auto w-[150px] h-[50px] text-white bg-color-3 border-0 hover:bg-color-6 hover:text-color-1 hover:border hover:border-color-4 text-2xl">
                    <span>Masuk</span>
                </a>
            @endif

        </div>
    </header>

    <div class="h-[calc(100vh-80px)] flex w-full bg-color-8">

        <aside class="w-2/5 overflow-y-auto">
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
</body>
</html>