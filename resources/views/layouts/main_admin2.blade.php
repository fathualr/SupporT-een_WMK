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
        <div class="flex flex-row h-20 py-[15px] px-[50px] bg-color-8 border-b border-color-4 ">
            <a href="/content-admin" class="flex flex-row">
                <img class="h-[50px] w-[50px] me-[15px]" src=" {{ asset('images/logo-dark-blue.svg') }} " alt="SupporT-een Logo">
                <span class="my-auto text-[2rem]">SupporT-een</span>
            </a>
            <a class="btn ms-auto w-[150px] h-[50px] text-white bg-color-3 border-0 hover:bg-color-6 hover:text-color-1 hover:border hover:border-color-4 text-2xl">
                <span>Logout</span>
            </a>
        </div>
    </header>

    <div class="min-h-[calc(100vh-80px)] flex w-full bg-color-8">

        <aside class="w-1/5 p-5">
            <!-- Konten aside -->
            <div class="flex flex-col gap-5 w-full h-full">

                <div class="flex items-center  bg-color-putih border-[1px] border-color-4 px-4 py-2 rounded-2xl gap-2">
                    <div class="avatar">
                        <div class="w-12 rounded-full">
                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-base text-color-1 font-semibold">Nama Admin</span>
                        <span class="text-color-3">Online</span>
                    </div>
                </div>
                <div class="flex  bg-color-putih border-[1px] border-color-4 py-2 rounded-2xl gap-2 h-full">
                    <ul class="menu w-full text-base text-color-1">
                        <li><a href="/content-admin">Dashboard</a></li>
                        <li><a href="/content-admin/konten-edukatif">Data Konten Edukatif</a></li>
                        <li><a href="/content-admin/forum-diskusi">Data Forum Diskusi</a></li>
                    </ul>
                </div>
            </div>
        </aside>

        <main class="w-4/5 bg-color-8 border-l border-color-4">
            <div class="bg-cover bg-brain-pattern flex flex-col mx-auto p-6 w-full justify-center items-center h-full relative">
                <!-- Konten main -->
                <div class=" bg-color-putih border-[1px] border-color-4 w-full h-full p-5 rounded-2xl">
                    @yield('main')
                </div>
            </div>
        </main>

    </div>

    <footer>
            <div class="bg-color-1 w-full mx-auto text-center mt-auto">
                <span class="text-xs text-color-8">&copy; <?php echo date("Y"); ?> SupporT-een</span>
            </div>
    </footer>
</body>
</html>