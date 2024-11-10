@extends('layouts.main')

@section('aside')

<div class="flex flex-col mx-auto w-full h-full pt-9 px-[50px] gap-6">
    <h1 class="text-4xl font-bold text-color-1 text-start">Riwayat Konsultasi</h1>

    <div class="flex flex-col w-full h-full gap-4">

        <!-- card 1 -->
        <div class="flex items-center border-[1px] border-color-4 rounded-2xl p-2 gap-2">
            <div class="flex-none w-16 h-16">
                <img
                    class="w-full h-full rounded-xl"
                    src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
                    alt="Album" />
            </div>
            <div class="flex-1">
                <span class="text-color-1 font-semibold">Dr. Mirza</span>
                <div class="flex justify-start items-center">
                    <span class="text-color-2">Senin, 15 Oktober 2024</span>
                </div>
            </div>
            <button class="btn btn-square btn-ghost">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        class="inline-block h-5 w-5 stroke-current">
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                    </svg>
                </button>
        </div>
        <!-- card 1 -->
        <!-- card 2 -->
        <div class="flex items-center border-[1px] border-color-4 rounded-2xl p-2 gap-2">
            <div class="flex-none w-16 h-16">
                <img
                    class="w-full h-full rounded-xl"
                    src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
                    alt="Album" />
            </div>
            <div class="flex-1">
                <span class="text-color-1 font-semibold">Dr. Mirza</span>
                <div class="flex justify-start items-center">
                    <span class="text-color-2">Senin, 15 Oktober 2024</span>
                </div>
            </div>
            <button class="btn btn-square btn-ghost">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        class="inline-block h-5 w-5 stroke-current">
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                    </svg>
                </button>
        </div>
        <!-- card 2 -->
        <!-- card 3 -->
        <div class="flex items-center border-[1px] border-color-4 rounded-2xl p-2 gap-2">
            <div class="flex-none w-16 h-16">
                <img
                    class="w-full h-full rounded-xl"
                    src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
                    alt="Album" />
            </div>
            <div class="flex-1">
                <span class="text-color-1 font-semibold">Dr. Mirza</span>
                <div class="flex justify-start items-center">
                    <span class="text-color-2">Senin, 15 Oktober 2024</span>
                </div>
            </div>
            <button class="btn btn-square btn-ghost">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        class="inline-block h-5 w-5 stroke-current">
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                    </svg>
                </button>
        </div>
        <!-- card 3 -->
    </div>

</div>

@endsection

@section('main')

<@section('main')

<!-- Container utama -->
<div class="absolute top-8 left-1/2 transform -translate-x-1/2 bg-color-6 text-xl text-color-3 px-6 py-2 font-semibold border-[1px] border-color-5 rounded-xl shadow-md z-[998]">
    00:10
</div>
<div class="flex flex-col w-full h-full relative">

    
    <!-- Pembungkus percakapan dengan overflow -->
    <div class="flex flex-col gap-4 w-full h-[calc(100vh-180px)] overflow-y-auto px-4 py-2">

        <!-- Percakapan dimulai dari sini -->
            <div class="flex items-end gap-3">
                <div class="chat-bubble bg-color-3 text-white w-full">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>
                <div class="avatar">
                    <div class="w-12 rounded-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                </div>
            </div>

            <div class="flex items-end gap-3">
                <div class="avatar">
                    <div class="w-12 rounded-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                </div>
                <div class="chat-bubble bg-white text-color-1 border w-full">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget diam sit amet sapien fermentum accumsan.
                    Integer consectetur lectus ut quam accumsan, nec lacinia arcu suscipit. Quisque mattis eros quis leo vestibulum,
                    et malesuada arcu congue. Vestibulum ullamcorper dui eu purus pharetra, at ullamcorper orci luctus. Donec quis 
                    laoreet diam, non efficitur elit.
                </div>
            </div>
            <div class="flex items-end gap-3">
                <div class="chat-bubble bg-color-3 text-white w-full">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>
                <div class="avatar">
                    <div class="w-12 rounded-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                </div>
            </div>

            <div class="flex items-end gap-3">
                <div class="avatar">
                    <div class="w-12 rounded-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                </div>
                <div class="chat-bubble bg-white text-color-1 border w-full">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget diam sit amet sapien fermentum accumsan.
                    Integer consectetur lectus ut quam accumsan, nec lacinia arcu suscipit. Quisque mattis eros quis leo vestibulum,
                    et malesuada arcu congue. Vestibulum ullamcorper dui eu purus pharetra, at ullamcorper orci luctus. Donec quis 
                    laoreet diam, non efficitur elit.
                </div>
            </div>
            <div class="flex items-end gap-3">
                <div class="chat-bubble bg-color-3 text-white w-full">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>
                <div class="avatar">
                    <div class="w-12 rounded-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                </div>
            </div>

            <div class="flex items-end gap-3">
                <div class="avatar">
                    <div class="w-12 rounded-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                </div>
                <div class="chat-bubble bg-white text-color-1 border w-full">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget diam sit amet sapien fermentum accumsan.
                    Integer consectetur lectus ut quam accumsan, nec lacinia arcu suscipit. Quisque mattis eros quis leo vestibulum,
                    et malesuada arcu congue. Vestibulum ullamcorper dui eu purus pharetra, at ullamcorper orci luctus. Donec quis 
                    laoreet diam, non efficitur elit.
                </div>
            </div>
            <div class="flex items-end gap-3">
                <div class="chat-bubble bg-color-3 text-white w-full">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>
                <div class="avatar">
                    <div class="w-12 rounded-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                </div>
            </div>

            <div class="flex items-end gap-3">
                <div class="avatar">
                    <div class="w-12 rounded-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                </div>
                <div class="chat-bubble bg-white text-color-1 border w-full">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget diam sit amet sapien fermentum accumsan.
                    Integer consectetur lectus ut quam accumsan, nec lacinia arcu suscipit. Quisque mattis eros quis leo vestibulum,
                    et malesuada arcu congue. Vestibulum ullamcorper dui eu purus pharetra, at ullamcorper orci luctus. Donec quis 
                    laoreet diam, non efficitur elit.
                </div>
            </div>
            

    </div>

    <!-- Input untuk mengirim pesan -->
    <input type="text" placeholder="Kirim pesan . . ." class="input bg-color-6 border-[1px] border-color-5 text-color-1 w-full" />
</div>

@endsection


@endsection