@extends('layouts.main')

@section('aside')

    <div class="flex flex-col mx-auto items-center w-full h-full pt-9 px-[50px] gap-9">
        <label class="input flex items-center gap-2 w-full bg-color-5 rounded-2xl">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 16 16"
                fill="currentColor"
                class="h-5 w-5 opacity-70 text-color-2">
                <path
                fill-rule="evenodd"
                d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                clip-rule="evenodd" />
            </svg>
            <input type="text" class="grow text-color-2" placeholder="Cari" />
        </label>

        <h1 class="text-4xl font-bold text-color-1">Konten Edukasi Kesehatan</h1>
        
        <div class="flex flex-col w-full h-full gap-4">
            <!-- card 1 -->
            <div class="flex bg-base-100 border-[1px] border-color-4 rounded-2xl p-2 gap-2">
                <div class="flex-none w-[100px] h-[100px]">
                    <img
                        class="w-full h-full rounded-xl"
                        src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
                        alt="Album" />
                </div>
                <div class="flex-1">
                    <span class="text-color-2">Artikel</span>
                    <h1 class="text-xl font-bold">New Study Reveals Daily Weeks Can Significantly Improve Mental Health</h1>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img
                                class="w-5 h-5 rounded-full"
                                src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
                                alt="Album" />
                            <span>Dr.Mirza</span>
                        </div>
                        <span>23 September 2024</span>
                    </div>
                </div>
            </div>
            <!-- card 1 -->
            <!-- card 2 -->
            <div class="flex bg-base-100 border-[1px] border-color-4 rounded-2xl p-2 gap-2">
                <div class="flex-none w-[100px] h-[100px]">
                    <img
                        class="w-full h-full rounded-xl"
                        src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
                        alt="Album" />
                </div>
                <div class="flex-1">
                    <span class="text-color-2">Video</span>
                    <h1 class="text-xl font-bold">New Study Reveals Daily Weeks Can Significantly Improve Mental Health</h1>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img
                                class="w-5 h-5 rounded-full"
                                src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
                                alt="Album" />
                            <span>Dr.Mirza</span>
                        </div>
                        <span>23 September 2024</span>
                    </div>
                </div>
            </div>
            <!-- card 2 -->

            <!-- card 3 -->
            <div class="flex bg-base-100 border-[1px] border-color-4 rounded-2xl p-2 gap-2">
                <div class="flex-none w-[100px] h-[100px]">
                    <img
                        class="w-full h-full rounded-xl"
                        src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
                        alt="Album" />
                </div>
                <div class="flex-1">
                    <span class="text-color-2">Artikel</span>
                    <h1 class="text-xl font-bold">New Study Reveals Daily Weeks Can Significantly Improve Mental Health</h1>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img
                                class="w-5 h-5 rounded-full"
                                src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
                                alt="Album" />
                            <span>Dr.Mirza</span>
                        </div>
                        <span>23 September 2024</span>
                    </div>
                </div>
            </div>
            <!-- card 3 -->

        </div>
    </div>

@endsection

@section('main')

<div class="flex flex-col w-full h-full bg-color-8 p-8 border-[1px] border-color-4 rounded-2xl">
    <div class="flex items-center">
        <img
            class="w-16 h-16 rounded-full mr-4"
            src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
            alt="Album" />
        <div class="flex flex-col">
            <span class="text-xl text-color-1 font-semibold">Dr. Mirza</span>
            <span class="text-color-2 font-semibold">Author</span>
        </div>
    </div>

<div class="flex flex-col gap-4 pl-20">
    <h1 class="text-3xl font-bold text-color-1">New Study Reveals Daily Weeks Can Significantly Improve Mental Health</h1>
    <span class="text-color-2 text-center">23 September 2024</span>
    <img class="aspect-video rounded-2xl" src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="ilustrasi artikel">
    <p class="text-color-1 text-base">Baru-baru ini, sebuah studi baru mengungkapkan bahwa aktivitas sederhana seperti berjalan kaki setiap hari memiliki dampak yang
        signifikan terhadap kesehatan mental seseorang. Di tengah meningkatnya perhatian global terhadap kesehatan mental, terutama setelah
        pandemi COVID-19, temuan ini menegaskan pentingnya aktivitas fisik dalam menjaga kesejahteraan emosional dan psikologis.</p>
    <h2 class="text-xl font-semibold text-color-1">Pentingnya Berjalan Kaki untuk Kesehatan Mental</h2>
    <p class="text-color-1 text-base">Menurut studi yang dipublikasikan oleh para peneliti dari universitas terkemuka, berjalan kaki selama 30 menit hingga satu jam setiap
        hari dapat secara drastis mengurangi tingkat stres, kecemasan, dan depresi. Aktivitas fisik ringan seperti berjalan meningkatkan pelepasan
        endorfin—zat kimia di otak yang dikenal sebagai "hormon kebahagiaan." Ini membantu menstabilkan suasana hati dan mengurangi gejala gangguan
        mental seperti kecemasan atau depresi. Selain itu, berjalan di luar ruangan, terutama di area hijau seperti taman atau hutan, juga memberikan
        efek relaksasi tambahan. Alam membantu menenangkan pikiran, memungkinkan seseorang untuk mengalihkan perhatian dari masalah sehari-hari dan
        memberikan rasa kebebasan.</p>
    <h2 class="text-xl font-semibold text-color-1">Dampak Jangka Panjang</h2>
    <p class="text-color-1 text-base">Peneliti juga menemukan bahwa manfaat kesehatan mental dari berjalan kaki bukan hanya bersifat jangka pendek. Dengan berjalan setiap hari,
        seseorang dapat membangun kebiasaan positif yang membantu menjaga kesehatan mental dalam jangka panjang. Bahkan bagi mereka yang menderita 
        gangguan mental serius, berjalan kaki bisa menjadi pelengkap yang efektif dalam proses terapi.</p>
    <h2 class="text-xl font-semibold text-color-1">Kesimpulan</h2>
    <p class="text-color-1 text-base">Penelitian baru ini menyoroti bagaimana aktivitas sederhana seperti berjalan kaki setiap hari dapat memberikan dampak besar bagi kesehatan 
        mental. Di tengah tekanan hidup modern dan tantangan mental yang semakin meningkat, terutama setelah masa pandemi, berjalan kaki terbukti 
        menjadi solusi yang efektif dan mudah dilakukan untuk menjaga kesehatan mental. Aktivitas ini bukan hanya membantu mengurangi stres, kecemasan, 
        dan depresi dalam jangka pendek, tetapi juga berkontribusi pada stabilitas emosional dalam jangka panjang.</p>
    <p class="text-color-1 text-base">
        Dengan berjalan kaki secara rutin, kita dapat meningkatkan kualitas hidup secara keseluruhan. Pelepasan endorfin yang dihasilkan oleh aktivitas fisik 
        ini dapat membantu mengatur suasana hati, meningkatkan kesejahteraan emosional, dan bahkan mencegah gejala gangguan mental yang lebih serius. Selain itu, 
        berjalan di alam terbuka memperkaya pengalaman psikologis dengan memberikan perasaan relaksasi dan keterhubungan dengan alam, yang semakin menambah efek positif 
        bagi pikiran.
    </p>
</div>
</div>

@endsection
