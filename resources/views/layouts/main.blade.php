<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>

</head>
<body class="text-color-9">

    <header class="sticky top-0 z-[999]">
        <div class="flex flex-row h-20 py-[15px] px-[50px] bg-color-5 shadow-custom-1">
            <a href="" class="flex flex-row">
                <img class="h-[50px] w-[50px] me-[15px]" src=" {{ asset('images/logo.png') }} " alt="">
                <span class="my-auto text-[2rem]">SupporT-een</span>
            </a>
            <a class="btn ms-auto w-[150px] text-white bg-color-7 border-gray-500 text-2xl">
                <span class="">Masuk</span>
            </a>
        </div>
    </header>

    <div class="min-h-[calc(100vh-80px)] flex w-full bg-color-4">
        @yield('main')
    </div>

    <footer class="text-color-1">
        <div class="grid grid-cols-4 bg-color-8 h-[250px] px-[150px] pt-[50px]">
            <ul class="">
                <li class="text-xl font-semibold mb-[10px]">Tentang Aplikasi</li>
                <table>
                    <tr class="align-top">
                        <td>Email</td>
                        <td>:</td>
                        <td>support-een@gmail.com</td>
                    </tr>
                    <tr class="align-top">
                        <td>Alamat</td>
                        <td>:</td>
                        <td>Jl. Ahmad Yani Batam Kota. Kota Batam. kepulauan Riau. Indonesia</td>
                    </tr>
                </table>
            </ul>
            <ul class="col-start-2">
                <li class="text-xl font-semibold mb-[10px]">Pintasan Aplikasi</li>
                <li class="grid grid-cols-2">
                    <ul class="col-start-1">
                        <li>
                            <a class="font-reguler text-base link link-hover">Chatbot</a>
                        </li>
                        <li>
                            <a class="font-reguler text-base link link-hover">Jurnal harian</a>
                        </li>
                        <li>
                            <a class="font-reguler text-base link link-hover">Konten Edukasi</a>
                        </li>
                    </ul>
                    <ul class="col-start-2">
                        <li>
                            <a class="font-reguler text-base link link-hover">Daftar aktivitas</a>
                        </li>
                        <li>
                            <a class="font-reguler text-base link link-hover">Forum diskusi</a>
                        </li>
                        <li>
                            <a class="font-reguler text-base link link-hover">Konsultasi</a>
                        </li>
                    </ul>
                </li>
            </ul>
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
                    <a href="" class="btn btn-xs flex h-[30px] w-[100px] bg-color-4 text-color-9 hover:text-color-1">
                        <img src=" {{ asset('icons/stethoscope.png') }} " alt="" class="h-4 w-4">
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