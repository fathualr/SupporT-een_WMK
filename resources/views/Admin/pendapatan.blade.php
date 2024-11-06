@extends('layouts.main_admin')

@section('main')

<div class="flex flex-col gap-6">
    <h1 class="text-[2rem] text-color-1 font-bold">Data Transaksi Konsultasi</h1>

    <div class="flex flex-col items-center bg-color-6 border-[1px] border-color-5 w-full py-16 rounded-2xl gap-4">
        <h1 class="text-[32px] font-medium text-color-1">Total Pendapatan</h1>
        <p class="text-color-1 text-[4rem] font-bold">Rp. 5.170.000.000.000</p>
        <button class="btn btn-wide bg-color-3 text-white text-base">
            Penarikan
        </button>
    </div>

    <div class="flex flex-col w-full border-[1px] border-color-4 rounded-2xl p-5 gap-6">
        <h1 class="text-2xl text-color-1 font-bold">Riwayat Penarikan</h1>
        <div class="overflow-y-auto w-full h-80 flex flex-col gap-4">
            <div class="grid grid-rows-1 items-center gap-4">
                
                <!-- card 1 -->
                <div class="flex justify-between bg-color-6 border-[1px] border-color-5 rounded-2xl p-6">
                    <div class="flex flex-col">
                        <span class="text-color-1 font-bold">Jumlah</span>
                        <span class="text-color-2">Rp. 5.000.000.000</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-color-1 font-bold">Tanggal</span>
                        <span class="text-color-2">Senin, 17 Oktober 2024</span>
                    </div>
                    <div>
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
                </div>
                <!-- card 1 -->

            </div>
        </div>
    </div>

    <div class="flex flex-col w-full border-[1px] border-color-4 rounded-2xl p-5 gap-6">
        <h1 class="text-2xl text-color-1 font-bold">Riwayat Pemasukan</h1>
        
        <div class="overflow-x-auto w-full h-[50vh]">
        <table class="table table-xs">
            <thead>
                <tr class="text-color-1">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Pendapatan</th>
                    <th>Tanggal</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>Cy Ganderton</td>
                    <td>Rp. 25.000</td>
                    <td>21 Maret 2024</td>
                    <td class="flex justify-center">
                        <div class="dropdown">
                            <div tabindex="0" role="button" class="btn btn-ghost">
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
</div>

@endsection