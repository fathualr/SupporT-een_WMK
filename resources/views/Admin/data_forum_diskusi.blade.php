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
                <th>Gambar</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Tanggal Pembuatan</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
    <th>1</th>
    <td></td> <!-- Thumbnail -->
    <td>Pentingnya Nutrisi bagi Remaja</td>
    <td>Nutrisi yang baik sangat penting untuk tumbuh kembang remaja...</td>
    <td>2023-10-01</td>
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