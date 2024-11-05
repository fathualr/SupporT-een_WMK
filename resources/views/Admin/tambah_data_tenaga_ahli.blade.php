@extends('layouts.main_admin')


@section('main')
<div class="w-full p-5 rounded-2xl">
    <h1 class="font-bold text-3xl text-center">Tambah Data Tenaga Ahli</h1>

    <div class="pt-10 p-10">
        <form action="">
            <label class="form-control w-full">
                <span class="label-text font-medium text-base pb-1">Nama</span>
                <input type="text" placeholder="Masukkan nama lengkap Anda" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
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

            <label class="form-control w-full pt-5 ">
                    <span class="label-text font-medium text-base pb-1">Password</span>
                    <input type="password" placeholder="Masukkan password Anda" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
            </label>

            <label class="form-control w-full pt-5 ">
                    <span class="label-text font-medium text-base pb-1">Riwayat Pendidikan</span>
                    <input type="text" placeholder="Masukkan riwayat pendidikan Anda" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
            </label>

            <label class="form-control w-full pt-5 ">
                    <span class="label-text font-medium text-base pb-1">Spesialisasi</span>
                    <input type="text" placeholder="Spesialisasi Anda" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
            </label>

            <label class="form-control w-full pt-5 ">
                    <span class="label-text font-medium text-base pb-1">Nomor STR (Surat Tanda Registrasi )</span>
                    <input type="text" placeholder="Masukkan nomor STR anda" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
            </label>

            <label class="form-control w-full pt-5 ">
                    <span class="label-text font-medium text-base pb-1">Lokasi Praktik</span>
                    <input type="text" placeholder="Masukkan lokasi praktik anda" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
            </label>

            <label class="form-control w-full pt-5 ">
                    <span class="label-text font-medium text-base pb-1">Jadwal Praktik</span>
                    <input type="text" placeholder="Masukkan jadwal praktik anda" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
            </label>

            <label class="form-control w-full pt-5 pb-10 ">
                    <span class="label-text font-medium text-base pb-1">Biaya</span>
                    <input type="number" placeholder="Masukkan biaya konsultasi anda" class="input input-bordered input-md w-full outline outline-1 outline-color-5 bg-color-6 rounded-lg" />
            </label>
            
            <label class="flex justify-center items-center">
                <button class="btn bg-color-3 text-white w-48">Tambah</button>
            </label>
   
        </form>
    </div>

</div>

@endsection