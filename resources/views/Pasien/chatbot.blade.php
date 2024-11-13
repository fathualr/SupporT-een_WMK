<?php
// Nama file: [chatbot.blade.php]
// Deskripsi: Halaman ini menampilkan fitur chatbot di mana user dapat berinteraksi dengan bot menggunakan pesan teks.            
// Dibuat oleh: [Ahmad Dzikra Nasuma] NIM:[3312301094]
// Tanggal: [Senin 07 Oktober 2024]
?>

@extends('layouts.main')

@section('aside')

<!-- halaman chatbot -->
<div class="flex flex-col mx-auto w-full h-full pt-9 px-12 gap-6">

    <!-- tombol tambah percakapan -->
    <a href="#" class="btn flex justify-start bg-color-6 hover:bg-color-5 hover:border-color-3 text-base">
        <img src="{{ asset('icons/Plus.svg') }}" alt="Plus">
        Buat percakapan
    </a>
    <!-- tombol tambah percakapan -->

    <div class="flex flex-col w-full h-full gap-4">

        <!-- card 1 -->
        <div class="flex items-center border-[1px] border-color-4 rounded-2xl p-2 gap-2">
            <div class="flex-1">
                <span class="text-color-1 font-semibold">Cerita kita di sekolah</span>
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
    </div>

</div>
<!-- halaman chatbot -->

@endsection

@section('main')

<!-- section percakapan -->
<div class="flex flex-col max-w-5xl h-full relative">

    <!-- Pembungkus dengan overflow -->
    <div class="flex flex-col-reverse gap-4 w-full h-[calc(100vh-180px)] overflow-y-auto pb-8 justify-items-end">
        <!-- Percakapan dimulai dari sini -->
            <div class="flex items-end gap-3">
                <div class="chat-bubble bg-color-3 text-white w-full">
                    tes 1
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

    <div class="relative">
        <input type="text" name="hs-validation-name-error" class="py-4 px-4 block w-full rounded-full text-sm bg-color-6 outline-color-5" required="" aria-describedby="hs-validation-name-error-helper">
            <button class="btn btn-ghost absolute inset-y-0 right-0 rounded-full">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="30" height="30" fill="url(#pattern0_1132_10906)"/>
                <defs>
                <pattern id="pattern0_1132_10906" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_1132_10906" transform="scale(0.0104167)"/>
                </pattern>
                <image id="image0_1132_10906" width="96" height="96" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAADdUlEQVR4nO2cP2gUQRSHJ3ozqydiIQEDVnqgTXRnNmmicIXx3kuCNpLW0k5SpoylpZZWQkpbK7EN2qQRVLBQbARthIB/iJhE5uLtmcbkcrM3szO/D7a7Ym6+nXnvt7N3QgAAAAAAAAAAAAAA8BdleF3mc7dFu93ApHhAGd6xlzT8QWleFsXsKR/jEKkLKC9NG1Lzw+OTfNb32NIUUF60qTQ/aeQ87XuMiQrYsyrWlOYbQogx3+NNU0BZJ+idMrQk2u1jvsedpIBShObPUtM9MX3ttO/xJymgvzXxT2V4VRWdi76/R5oC+gV7S2p+muU06/v7JCpgz4Vg51kAgl0IAv5pYTcQ7IYSQI+Uph8O6sSm0vxYFnOTA90hsbPfxHU/lPO4fU4kDX9ytCrWEOwGEdCjxZl9cqoMv3ZTJwjBbiABfcZsy2lbTycidMLB7pACSuTl+bwbxjT/Gn5r4vSC3bACejSn58/Yu1gZ+uqgYG8lE+xcCSiZuXnSPrCThj46KdixBzvnAkpWjthOR2l66aZgR3piV52APo2Cr9rDHaXp9/B1IrJgNwoBPbKCz9vJU5q+O6gTcZzYjVJACYKdZwE9EOw8C+iTbrALREC6wS40AckFu1AFJBPsghcQe7Crj4BIg10dBUQV7PZfqvTWFjCp+UGm+a4qaKHbVbQ4E6GQ87gyvCINf3GwPW1LTc+ygjsjeRVzyLvGdijr9s6Rhu5Lw3dsp9EsaEL4oFXDEzsXAx1ETja1cE4sLh4Vowt220EHu+oE/H+/lZreS8PPd9+64GVV8KI0nUJcun4iqWDnRwAffvXEFuzqJKA5RG2pQkCjmLtSUwFUzy3I8LfueKfogrMBJlCEdyIuwnG3ocrQK/udvLahCGIVs58AkdKjCMOrI395uI4CGngYF8njaENLrruu+FbADA5kvNAsaCLI4BT7CpChB6dIBYzVJjhFJaC1G5ykoTe1CU5RCMjxmzMvAjLdadU+ONVRQCOm4FQfAZEGp+AFxB6cQhWQTHAKTUBywSkQAekGJ68CEJw8CUBwqo4DFET8XU2VOGoV0wlOrqlq4qMNTq6pYPLjDk6ucTPpCQUn1ww5+ekFJ9ccan9POTi5JvoTp9A5YCuJfzmsiuhPnEIHwckzCE6eUYZfKN25NYIfTQAAAAAAAAAAAAAAIGLmDzXxBuZaUAjDAAAAAElFTkSuQmCC"/>
                </defs>
                </svg>
            </button>
    </div>

</div>
</div>
<!-- section percakapan -->
@endsection