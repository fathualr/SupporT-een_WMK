@extends('layouts.main_admin')


@section('main')
<div class="w-full p-5 rounded-2xl">
    <h1 class="font-bold text-3xl text-center">Tambah Data Pasien</h1>

    <div class="pt-10 p-10">
        <form action="">
            <label class="form-control w-full">
                <span class="label-text font-medium text-base pb-1">Nama</span>
                <input type="text" placeholder="Masukkan nama lengkap Anda" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
            </label>
            <label class="form-control w-full pt-5">
                <span class="label-text font-medium text-base pb-1">Deskripsi Diri</span>
                <input type="text" placeholder="Ceritakan sedikit tentang diri Anda" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
            </label>


            <label class="form-control w-full pt-5">
                    <span class="label-text font-medium text-base pb-1">Email</span>
                    <input type="email" placeholder="Masukkan email Anda" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
            </label>

            <label class="form-control w-full pt-5">
                    <span class="label-text font-medium text-base pb-1">Jenis Kelamin</span>
                    <select class="select select-bordered w-full  outline outline-1 outline-color-5 bg-color-6 rounded-lg">
                        <option disabled selected>Jenis Kelamin?</option>
                        <option>Pria</option>
                        <option>Wanita</option>
                    </select>
            </label>

            <label class="form-control w-full pt-5">
                    <span class="label-text font-medium text-base pb-1">Tanggal Lahir</span>
                    <input type="date" placeholder="Type here" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
            </label>

            <label class="form-control w-full pt-5 pb-10">
                    <span class="label-text font-medium text-base pb-1">Password</span>
                    <input type="password" placeholder="Masukkan password Anda" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
            </label>
            
            <label class="flex justify-center items-center">
                <button class="btn bg-color-3 text-white w-48">Tambahl</button>
            </label>
   
        </form>
    </div>

</div>

@endsection