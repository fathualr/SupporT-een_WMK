@extends('layouts.main')

@section('aside')

    <div class="flex flex-col mx-auto w-full justify-center items-center mb-[50px] h-full">
        <img src="{{ asset('images/main-picture.svg') }}" class="max-h-[500px] max-w-[500px]" alt="">
        <div class="card max-w-[475px] max-h-[200px] bg-color-6 border border-color-5 text-color-9 mx-auto">
            <div class="card-body">
                <p class="font-bold text-2xl">Berbagi, Mendukung, Berkembang.</p>
                <p class="text-base text-justify">Bersama, kita hadapi tantangan dan jaga kesehatan mental. Setiap langkah kecil membawa kita menuju masa depan yang lebih cerah!</p>
            </div>
        </div>
    </div>

@endsection

@section('main')

<!-- Membuat teks "Masuk" rata tengah di atas input email -->
<h2 class="text-center text-3xl font-bold mb-4">Masuk</h2>

<!-- Input Email -->
<label class="form-control w-full max-w-xs mx-auto">
  <div class="label">
    <span class="label-text">Email</span>
  </div>
  <input type="text" placeholder="Masukkan email anda" class="input input-bordered" style="width: 450.47px; height: 60.12px;" />
</label>

<!-- Input Password -->
<label class="form-control w-full max-w-xs mx-auto mt-4">
  <div class="label">
    <span class="label-text">Password</span>
  </div>
  <input type="text" placeholder="" class="input input-bordered" style="width: 450.47px; height: 60.12px;" />
</label>
<button class="btn btn-info">Masuk</button>
<!-- Teks "Belum memiliki akun? Daftar sekarang!" di bawah input dengan jarak lebih ke bawah -->
<p class="text-center mt-10">
  Belum memiliki akun? <a href="#" class="text-blue-500">Daftar sekarang!</a>
</p>

@endsection