<div class="flex flex-col mx-auto items-center w-full h-full pt-9 px-[50px] gap-6">
    <label class="input flex items-center gap-2 w-full bg-color-6 rounded-2xl">
        <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 16 16" fill="currentColor" class="h-5 w-5 opacity-70 text-color-2">
            <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
        </svg>
        <input type="text" class="grow text-color-2" placeholder="Cari" />
    </label>

    <h1 class="text-4xl font-bold text-color-1">Konten Edukasi Kesehatan</h1>

    <div class="flex flex-col w-full h-full gap-4">

        <!-- card 1 -->
        <a href="/konten-edukatif/artikel" class="flex border-[1px] border-color-4 rounded-2xl p-2 gap-2">
            <div class="flex-none w-[100px] h-[100px]">
                <img class="w-full h-full rounded-xl" src=" {{ asset('images/jogging.png') }} " alt="Album" />
            </div>
            <div class="flex-1">
                <span class="text-color-2">Artikel</span>
                <h1 class="text-xl font-bold">New Study Reveals Daily Weeks Can Significantly Improve Mental Health</h1>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <img class="w-5 h-5 rounded-full" src=" {{ asset('images/jogging.png') }} " alt="Album" />
                        <span>Dr.Mirza</span>
                    </div>
                    <span>23 September 2024</span>
                </div>
            </div>
        </a>

        <!-- card 2 -->
        <a href="/konten-edukatif/video" class="flex border-[1px] border-color-4 rounded-2xl p-2 gap-2">
            <div class="flex-none w-[100px] h-[100px]">
                <img class="w-full h-full rounded-xl" src=" {{ asset('images/jogging.png') }} " alt="Album" />
            </div>
            <div class="flex-1">
                <span class="text-color-2">Video</span>
                <h1 class="text-xl font-bold">New Study Reveals Daily Weeks Can Significantly Improve Mental Health</h1>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <img class="w-5 h-5 rounded-full" src=" {{ asset('images/jogging.png') }} " alt="Album" />
                        <span>Dr.Mirza</span>
                    </div>
                    <span>23 September 2024</span>
                </div>
            </div>
        </a>

    </div>
</div>