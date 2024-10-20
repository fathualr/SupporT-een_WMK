@extends('layouts.main_admin2')

@section('main')

<div class="flex flex-col gap-6">
    <h1 class="text-[2rem] text-color-1 font-bold">Data Transaksi Konsultasi</h1>

    <button class="btn bg-color-3 w-[200px] text-white text-xl">
        <img src="{{ asset('icons/Plus_white.svg') }}" alt="">
        Tambah Data
    </button>

    <div class="px-5 t-5 rounded-2xl">
        <div class="overflow-scroll h-[calc(100vh-300px)]">
        <table class="table table-xs">
            <thead>
            <tr class="text-color-1">
                <th>Id</th>
                <th>Thumbnail</th>
                <th>Judul</th>
                <th>Tipe</th>
                <th>Isi Artikel</th>
                <th>Link Youtube</th>
                <th>Tanggal Lahir</th>
                <th>Kata Kunci</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
    <th>1</th>
    <td></td> <!-- Thumbnail -->
    <td>Pentingnya Nutrisi bagi Remaja</td>
    <td>Artikel</td>
    <td>Nutrisi yang baik sangat penting untuk tumbuh kembang remaja...</td>
    <td>youtube.com/watch?v=abc123</td>
    <td>2023-10-01</td>
    <td>nutrisi, remaja, kesehatan</td>
    <td class="flex justify-center">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0 a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                </svg>
            </div>
            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                <li><a>Item 1</a></li>
                <li><a>Item 2</a></li>
            </ul>
        </div>
    </td>
</tr>

<tr>
    <th>2</th>
    <td></td> <!-- Thumbnail -->
    <td>Cara Efektif Mengelola Waktu</td>
    <td>Video</td>
    <td>Video ini menjelaskan cara mengatur waktu agar produktif di usia remaja...</td>
    <td>youtube.com/watch?v=def456</td>
    <td>2023-10-02</td>
    <td>manajemen waktu, produktivitas</td>
    <td class="flex justify-center">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0 a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                </svg>
            </div>
            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                <li><a>Item 1</a></li>
                <li><a>Item 2</a></li>
            </ul>
        </div>
    </td>
</tr>

<tr>
    <th>3</th>
    <td></td> <!-- Thumbnail -->
    <td>Tips Belajar di Masa Ujian</td>
    <td>Artikel</td>
    <td>Beberapa tips yang bisa diterapkan oleh pelajar saat menghadapi ujian...</td>
    <td>youtube.com/watch?v=ghi789</td>
    <td>2023-10-03</td>
    <td>ujian, belajar efektif, tips belajar</td>
    <td class="flex justify-center">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0 a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                </svg>
            </div>
            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                <li><a>Item 1</a></li>
                <li><a>Item 2</a></li>
            </ul>
        </div>
    </td>
</tr>

<tr>
    <th>4</th>
    <td></td> <!-- Thumbnail -->
    <td>Olahraga untuk Kesehatan Mental</td>
    <td>Artikel</td>
    <td>Olahraga dapat membantu menjaga kesehatan mental, terutama pada masa remaja...</td>
    <td>youtube.com/watch?v=jkl012</td>
    <td>2023-10-04</td>
    <td>olahraga, kesehatan mental, remaja</td>
    <td class="flex justify-center">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0 a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                </svg>
            </div>
            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                <li><a>Item 1</a></li>
                <li><a>Item 2</a></li>
            </ul>
        </div>
    </td>
</tr>

<tr>
    <th>5</th>
    <td></td> <!-- Thumbnail -->
    <td>Pengembangan Diri Lewat Hobi</td>
    <td>Video</td>
    <td>Bagaimana mengembangkan diri melalui hobi yang kamu sukai...</td>
    <td>youtube.com/watch?v=mno345</td>
    <td>2023-10-05</td>
    <td>pengembangan diri, hobi, kreativitas</td>
    <td class="flex justify-center">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0 a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                </svg>
            </div>
            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                <li><a>Item 1</a></li>
                <li><a>Item 2</a></li>
            </ul>
        </div>
    </td>
</tr>

<tr>
    <th>6</th>
    <td></td> <!-- Thumbnail -->
    <td>Membangun Kepercayaan Diri</td>
    <td>Artikel</td>
    <td>Kepercayaan diri sangat penting untuk menghadapi tantangan masa remaja...</td>
    <td>youtube.com/watch?v=pqr678</td>
    <td>2023-10-06</td>
    <td>kepercayaan diri, remaja, pengembangan diri</td>
    <td class="flex justify-center">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0 a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                </svg>
            </div>
            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                <li><a>Item 1</a></li>
                <li><a>Item 2</a></li>
            </ul>
        </div>
    </td>
</tr>

<tr>
    <th>7</th>
    <td></td> <!-- Thumbnail -->
    <td>Memahami Pola Tidur Sehat</td>
    <td>Video</td>
    <td>Video ini membahas pentingnya menjaga pola tidur yang sehat untuk produktivitas...</td>
    <td>youtube.com/watch?v=stu901</td>
    <td>2023-10-07</td>
    <td>pola tidur, produktivitas, kesehatan</td>
    <td class="flex justify-center">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0 a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                </svg>
            </div>
            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                <li><a>Item 1</a></li>
                <li><a>Item 2</a></li>
            </ul>
        </div>
    </td>
</tr>

<tr>
    <th>8</th>
    <td></td> <!-- Thumbnail -->
    <td>Mengenal Pentingnya Literasi Keuangan</td>
    <td>Artikel</td>
    <td>Literasi keuangan membantu remaja mengelola keuangan pribadi secara bijak...</td>
    <td>youtube.com/watch?v=vwx234</td>
    <td>2023-10-08</td>
    <td>literasi keuangan, remaja, manajemen keuangan</td>
    <td class="flex justify-center">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0 a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                </svg>
            </div>
            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                <li><a>Item 1</a></li>
                <li><a>Item 2</a></li>
            </ul>
        </div>
    </td>
</tr>

<tr>
    <th>9</th>
    <td></td> <!-- Thumbnail -->
    <td>Menghadapi Perubahan Sosial di Sekolah</td>
    <td>Artikel</td>
    <td>Remaja seringkali mengalami perubahan sosial yang mempengaruhi hubungan pertemanan...</td>
    <td>youtube.com/watch?v=yzb567</td>
    <td>2023-10-09</td>
    <td>perubahan sosial, sekolah, hubungan sosial</td>
    <td class="flex justify-center">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0 a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                </svg>
            </div>
            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                <li><a>Item 1</a></li>
                <li><a>Item 2</a></li>
            </ul>
        </div>
    </td>
</tr>

<tr>
    <th>10</th>
    <td></td> <!-- Thumbnail -->
    <td>Mengelola Stres dalam Kehidupan Sehari-hari</td>
    <td>Video</td>
    <td>Video ini memberikan beberapa teknik manajemen stres yang efektif bagi remaja...</td>
    <td>youtube.com/watch?v=abc890</td>
    <td>2023-10-10</td>
    <td>stres, manajemen stres, remaja</td>
    <td class="flex justify-center">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0 a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                </svg>
            </div>
            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                <li><a>Item 1</a></li>
                <li><a>Item 2</a></li>
            </ul>
        </div>
    </td>
</tr>


            </tbody>
        </table>
        </div>
    </div>
    <div class="flex justify-between border-t-[1px] border-color-4 pt-4">
        <span class="text-sm text-color-2">Showing 1 to 10 of 50 entries</span>
        <div class="join">
            <button class="join-item btn">«</button>
            <button class="join-item btn">1</button>
            <button class="join-item btn">2</button>
            <button class="join-item btn bg-color-3 text-white">3</button>
            <button class="join-item btn">»</button>
        </div>
    </div>
</div>

@endsection