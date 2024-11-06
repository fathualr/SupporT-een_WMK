@extends('layouts.main_admin')

@section('main')

<div class="flex flex-col gap-4">
    <h1 class="text-[2rem] text-color-1 font-bold">Data Transaksi</h1>

    <div class="w-full px-5 t-5 rounded-2xl">
        <div class="overflow-x-auto h-[calc(100vh-300px)]">
        <table class="table table-xs">
            <thead>
                <tr class="text-color-1">
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Tenaga Ahli</th>
                    <th>Pendapatan</th>
                    <th>Biaya Admin</th>
                    <th>Tanggal</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>1</th>
                    <td>Cy Ganderton</td>
                    <td>Dr. Mirza</td>
                    <td>Rp. 25.000</td>
                    <td>Rp. 1.000</td>
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