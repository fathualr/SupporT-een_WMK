@extends('layouts.main')

@section('aside')

<div class="flex flex-col mx-auto w-full h-full pt-9 px-[50px] gap-6">
    <h1 class="text-4xl font-bold text-color-1 text-start">Manajemen Konsultasi</h1>
    <button class="btn flex justify-start bg-color-6 hover:bg-color-5 hover:border-color-3 text-base">
        <img src="{{ asset('icons/Activity History.svg') }}" alt="">
        Riwayat Konsultasi
    </button>
    <h1 class="text-4xl font-bold text-color-1 text-start">Permintaan</h1>
    <div class="bg-[#E9ECEF] p-6 rounded-2xl">
        <p class="text-color-2 text-base text-center font-semibold">
        Tidak bisa menerima permintaan saat melakukan konsultasi
        </p>
    </div>
</div>

@endsection

@section('main')

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
     <div class="relative w-full">
        <button class="btn btn-ghost absolute right-0 bg-color-6 rounded-full">
            <img src="{{ asset('icons/Sent.svg') }}" alt="">
        </button>
         <input type="text" placeholder="Kirim pesan . . ." class="input bg-color-6 border-[1px] border-color-5 text-color-1 w-full rounded-full" />
     </div>
</div>

@endsection

