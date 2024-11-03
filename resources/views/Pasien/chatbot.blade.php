<?php
// Nama file: [chatbot.blade.php]
// Deskripsi: Halaman ini menampilkan fitur chatbot di mana user dapat berinteraksi dengan bot menggunakan pesan teks.            
// Dibuat oleh: [Ahmad Dzikra Nasuma] NIM:[3312301094]
// Tanggal: [Senin 07 Oktober 2024]
?>

@extends('layouts.main')

@section('aside')
<div class="flex flex-col items-start justify-start w-full h-full pl-2 pt-2">
    <div class="w-full h-[50px] p-3 rounded-lg">
        <button class="w-[479px] py-2 bg-color-5 text-black rounded-lg text-lg text-left" style="font-family: 'Poppins', sans-serif;">
            + Buat Percakapan
        </button>

        <div class="flex flex-col space-y-2 mt-4">
            <div class="flex justify-between items-center w-[479px] h-[60px] p-3 bg-white rounded-lg border border-black" style="font-family: 'Poppins', sans-serif;">
                <span>Cerita kita di sekolah</span>
                <button class="text-gray-500">...</button>
            </div>
            
            <div class="flex justify-between items-center w-[479px] h-[60px] p-3 bg-white rounded-lg border border-black" style="font-family: 'Poppins', sans-serif;">
                <span>Dia adalah miliknya</span>
                <button class="text-gray-500">...</button>
            </div>
            
            <div class="flex justify-between items-center w-[479px] h-[60px] p-3 bg-white rounded-lg border border-black" style="font-family: 'Poppins', sans-serif;">
                <span>Yaudah si</span>
                <button class="text-gray-500">...</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('main')
<div class="w-full h-full m-5 flex">
    <div class="w-full max-w-7xl h-full p-0 flex space-x-4">
        <div class="w-full h-full p-0 flex flex-col space-y-4">
            <div class="chatbox flex flex-col space-y-4 h-full overflow-y-auto p-4" id="chatbox" style="background-color: rgba(255, 255, 255, 0.05);">
                <!-- Chat User -->
                <div class="chat chat-end flex justify-end items-center"></div>

                <!-- Chatbot Response -->
                <div class="chat chat-start flex items-center">
                    <div class="chat-image avatar">
                        <div class="w-10 rounded-full">
                            <img alt="Avatar" src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>
                    <div class="chat-bubble bg-color-8 text-[#063248] rounded-lg border border-black">
                        Bagaimana kabar mu hari ini?
                    </div>
                </div>
            </div>

            <form id="chat-form" class="flex items-center space-x-2 bg-color-5 p-2 rounded-full" onsubmit="sendMessage(event)">
                <input type="text" id="chat-input" class="w-full px-4 py-2 bg-color-5 border rounded-full" placeholder="Kirim pesan..." required>
                <button type="submit" class="p-2 bg-color-5 text-bg-color-8 rounded-full hover:bg-color-4 transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12h6m0 0l-6-6m6 6l-6 6" />
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    function sendMessage(event) {
        event.preventDefault();
        
        const input = document.getElementById('chat-input');
        const chatbox = document.getElementById('chatbox');
        const message = input.value;

        const messageElement = document.createElement('div');
        const isUserMessage = true;

        messageElement.className = isUserMessage ? 'chat chat-end flex justify-end items-center' : 'chat chat-start flex items-center';
        
        // Avatar untuk User di sebelah kanan
        const avatarElement = document.createElement('div');
        avatarElement.className = 'chat-image avatar';
        const avatarImage = document.createElement('div');
        avatarImage.className = 'w-10 rounded-full';
        avatarImage.innerHTML = '<img alt="Avatar" src="https://img.daisyui.com/images/stock/photo-1504539080414-b5db4c52a161.webp" />';
        avatarElement.appendChild(avatarImage);

        // Bubble Chat
        const bubbleElement = document.createElement('div');
        bubbleElement.className = isUserMessage ? 'chat-bubble bg-color-3 text-[#f8f8f7] rounded-lg' : 'chat-bubble bg-color-8 text-[#063248] rounded-lg border border-black';
        bubbleElement.textContent = message;

        // Urutkan pesan dan avatar
        if (isUserMessage) {
            messageElement.appendChild(bubbleElement);
            messageElement.appendChild(avatarElement);  // Avatar untuk user di sebelah kanan
        } else {
            messageElement.appendChild(avatarElement);
            messageElement.appendChild(bubbleElement);  // Avatar untuk bot di sebelah kiri
        }

        chatbox.appendChild(messageElement);

        input.value = '';
        chatbox.scrollTop = chatbox.scrollHeight;
    }
</script>
@endsection