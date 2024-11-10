@extends('layouts.main')

@section('aside')

    @include('Pasien.Components.card_list')

@endsection

@section('main')

    @if ($tipe === 'article')
        <!-- Bagian Artikel -->
        <div class="flex flex-col w-full h-full">
            <div class=" bg-color-8 p-8 border-[1px] border-color-4 rounded-2xl">

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <img class="w-16 h-16 rounded-full mr-4" src=" {{ asset('images/jogging.png') }} " alt="Album" />
                        <div class="flex flex-col">
                            <span class="text-xl text-color-1 font-semibold">Dr. Mirza</span>
                            <span class="text-color-2 font-semibold">Author</span>
                        </div>
                    </div>
                    <div class="justify-self-end">
                    <details class="dropdown dropdown-bottom dropdown-left">
                        <summary class="btn btn-ghost">
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
                        </summary>
                        <ul class="menu dropdown-content bg-color-8 rounded-box z-[1] w-52 p-2 shadow">
                            <li><a>Item 1</a></li>
                            <li><a>Item 2</a></li>
                        </ul>
                    </details>
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
        </div>
    
    @elseif ($tipe === 'video')
        <!-- Bagian Video -->
        <div class="flex flex-col w-full h-full">
            <div class=" bg-color-8 p-8 border-[1px] border-color-4 rounded-2xl">\

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
                    <h1 class="text-3xl font-bold text-color-1">
                        New Study Reveals Daily Weeks Can Significantly Improve Mental Health</h1>
                    <span class="text-color-2 text-center">
                        23 September 2024
                    </span>
                    <iframe class="w-full aspect-video rounded-lg shadow-lg" src="https://www.youtube.com/embed/jwIWJIdpNFs?si=qeLaZN2hVmo1Pmey" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

            </div>
        </div>
    
    @else
        <!-- Pesan Default Saat Tidak Ada Konten yang Dipilih -->
        <div class="flex flex-col w-full h-full bg-color-8 p-8 border-[1px] border-color-4 rounded-2xl">
            <div class="flex justify-center items-center w-full h-full">
                Tidak ada konten yang dipilih.
            </div>
        </div>
    @endif

@endsection
