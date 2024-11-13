@extends('layouts.main')

@section('aside')
<!-- konten sidebar -->
  <div class="flex flex-col w-full h-full pt-9 px-12 gap-6">

    <!-- tombol kustomisasi aktivitas -->
    <a href="/daftar-aktivitas-pribadi/kustomisasi" class="btn flex justify-start bg-color-6 hover:bg-color-5 hover:border-color-3 text-base">
        <img src="{{ asset('icons/Plus.svg') }}" alt="Plus">
        Kustomisasi Aktivitas
    </a>
    <!-- tombol kustomisasi aktivitas -->

    @include('pasien.Components.riwayat_aktivitas')
    
  </div>
<!-- konten sidebar -->
@endsection

@section('main')
<!-- konten daftar kegiatan positif -->
<div class="w-full h-full">
  <div class="grid grid-cols-3 gap-4 pb-8"> 

  <!-- card 1 -->
  <div class="flex flex-col bg-color-8 border border-color-4 shadow-sm rounded-3xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
    <div class="flex flex-col items-center p-2">
      <img class="w-full h-auto rounded-2xl" src="{{ asset('icons/Running Exercise.png')}}" alt="Card Image">
      <h3 class="text-lg font-bold text-color-1 dark:text-white">
        Jogging
      </h3>
      <label class="label cursor-pointer">
        <input type="checkbox" checked="checked" class="checkbox checkbox-lg border-white [--chkbg:theme(colors.color-3)] [--chkfg:white] checked:border-color-3"/>
      </label>
    </div>
  </div>
  <!-- card 1 -->

  <!-- card 2 -->
  <div class="flex flex-col bg-color-8 border border-color-4 shadow-sm rounded-3xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
    <div class="flex flex-col items-center p-2">
      <img class="w-full h-auto rounded-2xl" src="{{ asset('icons/Singing.png')}}" alt="Card Image">
      <h3 class="text-lg font-bold text-color-1 dark:text-white">
        Bernyanyi
      </h3>
      <label class="label cursor-pointer">
        <input type="checkbox" checked="checked" class="checkbox checkbox-lg border-white [--chkbg:theme(colors.color-3)] [--chkfg:white] checked:border-color-3"/>
      </label>
    </div>
  </div>
  <!-- card 2 -->

  </div>

</div>
<!-- konten daftar kegiatan positif -->
@endsection