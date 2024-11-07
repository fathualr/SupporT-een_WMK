@extends('layouts.main_admin')

@section('main')

<!-- halaman data tenaga ahli -->
<div class="flex flex-col gap-4">
    <h1 class="text-[2rem] text-color-1 font-bold">Data Tenaga Ahli</h1>

    <!-- tombol tambah tenaga ahli -->
    <a href="{{ route('user-tenaga-ahli.create') }}" class="btn flex w-fit bg-color-3 text-white text-xl font-normal">
        <img src="{{ asset('icons/Plus_white.svg') }}" alt="">
        Tambah Data
    </a>
    <!-- tombol tambah tenaga ahli -->

    <!-- tabel data -->
    <div class="w-full p-5 rounded-2xl">
        <div class="overflow-y-scroll h-[calc(100vh-400px)]">

            <table class="table table-xs">

                <thead>
                    <tr class="text-color-1">
                        <th>Id</th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr class="hover">
                        <th>1</th>
                        <th>
                            <div class="avatar">
                                <div class="w-9 rounded-full">
                                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                                </div>
                            </div>
                        </th>
                        <td>Cy Ganderton</td>
                        <td>cygandert@gmail.com</td>
                        <td>Pria</td>
                        <td>9 September 2024</td>
                        <td>
                            <div class="flex justify-center gap-2">
                                <!-- tombol info -->
                                <a class="btn bg-blue-100 text-blue-500 border-blue-500 hover:bg-blue-300" href="#">
                                    <img class="w-6 h-6" src="{{ asset("icons/Info.svg")}}" alt="">
                                </a>
                                <!-- tombol edit -->
                                <a class="btn bg-green-100 text-green-500 border-green-500 hover:bg-green-300" href="#">
                                    <img class="w-6 h-6" src="{{ asset("icons/Edit.svg")}}" alt="">
                                </a>
                                <!-- tombol hapus -->
                                <a class="btn bg-red-100 text-red-500 border-red-500 hover:bg-red-300" href="#">
                                    <img class="w-6 h-6" src="{{ asset("icons/Waste.svg")}}" alt="">
                                </a>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>
    <!-- tabel data -->

    <!-- pagination controls -->
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
    <!-- pagination controls -->

</div>

@endsection