@extends('layouts.main')

@section('aside')
<div class="flex flex-col w-full h-full pt-9 px-[50px] gap-6">
<button class="btn justify-start bg-color-6  hover:bg-color-5 hover:border-color-3 ">
    <img src="{{ asset('images/custom-activity.svg') }}">
    <p class="text-2xl font-semibold">Kustomisasi aktivitas</p>
</button>
</a>
  <h1 class="text-4xl font-bold text-color-1 ">Riwayat aktivitas</h1>
  <div class="flex flex-col w-full h-full gap-4">
  <div class="bg-color-8 rounded-lg outline outline-1 outline-color-4 ">
    <p class="px-5 py-1 text-xl font-bold text-color-1">5/8 aktivitas diselesaikan</p>
    <p class="px-5 py-1 text-base font-medium text-color-1">Senin, 16 Oktober 2016</p>
  </div>


  <div class="bg-color-8 rounded-lg outline outline-1 outline-color-4 ">
    <p class="px-5 py-1 text-xl font-bold text-color-1">4/7 aktivitas diselesaikan</p>
    <p class="px-5 py-1 text-base font-medium text-color-1">Selasa, 17 Oktober 2016</p>
  </div>

  <div class="bg-color-8 rounded-lg outline outline-1 outline-color-4 ">
    <p class="px-5 py-1 text-xl font-bold text-color-1">6/9 aktivitas diselesaikan</p>
    <p class="px-5 py-1 text-base font-medium text-color-1">Rabu, 18 Oktober 2016</p>
  </div>

  <div class="bg-color-8 rounded-lg outline outline-1 outline-color-4">
    <p class="px-5 py-1 text-xl font-bold text-color-1">3/6 aktivitas diselesaikan</p>
    <p class="px-5 py-1 text-base font-medium text-color-1">Kamis, 19 Oktober 2016</p>
  </div>
</div>
  
</div>
 
@endsection

@section('main')
<div class="w-full h-full items-center ">

<div class="pt-10">
    <h1 class="font-bold text-3xl">Pilih Aktivitas Positif Anda</h1>
    <p class="font-medium text-base w-96">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>


<div class="grid grid-cols-4 gap-4 pt-10 "> 


    <div class="card bg-color-6 w-44 shadow-xl outline outline-color-5/80">
      <figure class="pt-5 px-10">
          <img class="w-44 h-28"
            src="{{ asset('images/jogging.png') }}"
            alt="Aktivitas"
            class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title font-semibold text-2xl">Jogging</h2>
        <div class="card-actions">
          <label class="label cursor-pointer">
            <input type="checkbox" checked="checked" class="checkbox checkbox-lg border-white [--chkbg:theme(colors.color-3)] [--chkfg:white] checked:border-color-3"/>
          </label>
        </div>
      </div>
    </div>


    <div class="card bg-color-6 w-44 shadow-xl outline outline-color-5/80">
      <figure class="pt-5 px-10">
          <img class="w-44 h-28"
            src="{{ asset('images/jogging.png') }}"
            alt="Aktivitas"
            class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title font-semibold text-2xl">Jogging</h2>
        <div class="card-actions">
          <label class="label cursor-pointer">
            <input type="checkbox" checked="checked" class="checkbox checkbox-lg border-white [--chkbg:theme(colors.color-3)] [--chkfg:white] checked:border-color-3"/>
          </label>
        </div>
      </div>
    </div>


    <div class="card bg-color-6 w-44 shadow-xl outline outline-color-5/80">
      <figure class="pt-5 px-10">
          <img class="w-36 h-28"
            src="{{ asset('images/jogging.png') }}"
            alt="Aktivitas"
            class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title font-semibold text-2xl">Jogging</h2>
        <div class="card-actions">
          <label class="label cursor-pointer">
            <input type="checkbox" checked="checked" class="checkbox checkbox-lg border-white [--chkbg:theme(colors.color-3)] [--chkfg:white] checked:border-color-3"/>
          </label>
        </div>
      </div>
    </div>


    <div class="card bg-color-6 w-44 shadow-xl outline outline-color-5/80">
      <figure class="pt-5 px-10">
          <img class="w-36 h-28"
            src="{{ asset('images/jogging.png') }}"
            alt="Aktivitas"
            class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title font-semibold text-2xl">Jogging</h2>
        <div class="card-actions">
          <label class="label cursor-pointer">
            <input type="checkbox" checked="checked" class="checkbox checkbox-lg border-white [--chkbg:theme(colors.color-3)] [--chkfg:white] checked:border-color-3"/>
          </label>
        </div>
      </div>
    </div>


    <div class="card bg-color-6 w-44 shadow-xl outline outline-color-5/80">
      <figure class="pt-5 px-10">
          <img class="w-36 h-28"
            src="{{ asset('images/jogging.png') }}"
            alt="Aktivitas"
            class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title font-semibold text-2xl">Jogging</h2>
        <div class="card-actions">
          <label class="label cursor-pointer">
            <input type="checkbox" checked="checked" class="checkbox checkbox-lg border-white [--chkbg:theme(colors.color-3)] [--chkfg:white] checked:border-color-3"/>
          </label>
        </div>
      </div>
    </div>


    <div class="card bg-color-6 w-44 shadow-xl outline outline-color-5/80">
      <figure class="pt-5 px-10">
          <img class="w-36 h-28"
            src="{{ asset('images/jogging.png') }}"
            alt="Aktivitas"
            class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title font-semibold text-2xl">Jogging</h2>
        <div class="card-actions">
          <label class="label cursor-pointer">
            <input type="checkbox" checked="checked" class="checkbox checkbox-lg border-white [--chkbg:theme(colors.color-3)] [--chkfg:white] checked:border-color-3"/>
          </label>
        </div>
      </div>
    </div>


    <div class="card bg-color-6 w-44 shadow-xl outline outline-color-5/80">
      <figure class="pt-5 px-10">
          <img class="w-36 h-28"
            src="{{ asset('images/jogging.png') }}"
            alt="Aktivitas"
            class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title font-semibold text-2xl">Jogging</h2>
        <div class="card-actions">
          <label class="label cursor-pointer">
            <input type="checkbox" checked="checked" class="checkbox checkbox-lg border-white [--chkbg:theme(colors.color-3)] [--chkfg:white] checked:border-color-3"/>
          </label>
        </div>
      </div>
    </div>


    <div class="card bg-color-6 w-44 shadow-xl outline outline-color-5/80">
      <figure class="pt-5 px-10">
          <img class="w-36 h-28"
            src="{{ asset('images/jogging.png') }}"
            alt="Aktivitas"
            class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title font-semibold text-2xl">Jogging</h2>
        <div class="card-actions">
          <label class="label cursor-pointer">
            <input type="checkbox" checked="checked" class="checkbox checkbox-lg border-white [--chkbg:theme(colors.color-3)] [--chkfg:white] checked:border-color-3"/>
          </label>
        </div>
      </div>
    </div>

    </div>

</div> 
@endsection