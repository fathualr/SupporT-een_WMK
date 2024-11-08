@extends('layouts.main')

@section('aside')

    <div class="flex flex-col mx-auto w-full items-center mb-[50px]">
        <img src=" {{ asset('images/main-picture.svg') }} " class="max-h-[500px] max-w-[500px]" alt="">
        <div class="card max-w-[475px] max-h-[200px] bg-color-6 border border-color-5 text-color-9 mx-auto">
            <div class="card-body">
                <p class="font-bold text-2xl">Berbagi, Mendukung, Berkembang.</p>
                <p class="text-base text-justify">Bersama, kita hadapi tantangan dan jaga kesehatan mental. Setiap langkah kecil membawa kita menuju masa depan yang lebih cerah!</p>
            </div>
        </div>
    </div>

@endsection

@section('main')

<div class="flex flex-col justify-center items-center w-full h-full py-16">
    <h1 class="font-bold text-4xl font-color-1 mb-3">Masuk</h1>
    
    <label class="form-control w-full max-w-sm">
            <div class="label">
                <span class="label-text text-base font-medium font-color-1">Email</span>
            </div>
        <input type="email" placeholder="Email" class="input input-bordered bg-color-6  border-color-2 w-full max-w-sm font-base text-color-2" />
    </label>
    
    <label class="form-control w-full max-w-sm">
            <div class="label">
                <span class="label-text text-base font-medium font-color-1">Tanggal Lahir</span>
            </div>
        <input type="text" placeholder="Tanggal Lahir" class="input input-bordered bg-color-6  border-color-2 w-full max-w-sm font-base text-color-2" />
    </label>
    
    <button class="btn w-full max-w-sm bg-color-3 text-base-100 mt-10">Daftar</button>

    <p class="text-color-2 mt-10">
        Belum memiliki akun? 
        <a href="/registrasi" class="text-color-3 hover:font-underline">
            Daftar Sekarang!
        </a>
    </p>
</div>

@endsection