@extends('layouts.main_admin')

@section('main')

<!-- halaman dashboard super admin -->
<div class="flex flex-col gap-4 ">
    <h1 class="text-[2rem] text-color-1 font-bold">Dashboard</h1>

    <div class="grid grid-cols-4 gap-6">

        <!-- card 1: Total pasien -->
        <div class="card card-compact bg-color-6 border-[1px] border-color-5">
            <div class="card-body">
                <img class="w-10 h-10" src="{{ asset('icons/People.svg') }}" alt="">
                <span class="text-base text-color-1">Total Pasien</span>
                <div class="card-actions items-center justify-between">
                    <span class="text-[2.5rem] text-color-1 font-bold">{{ $totalPasien }}</span>
                    <button class="btn btn-ghost">
                        <img class="w-[30xp] h-[30px]" src="{{ asset('icons/arrow.svg') }}" alt="">
                    </button>
                </div>
            </div>
        </div>
        <!-- card 1: Total pasien -->

        <!-- card 2: Total tenaga ahli -->
        <div class="card card-compact bg-color-6 border-[1px] border-color-5">
            <div class="card-body">
                <img class="w-10 h-10" src="{{ asset('icons/Medical_Doctor.svg') }}" alt="">
                <span class="text-base text-color-1">Total Tenaga Ahli</span>
                <div class="card-actions items-center justify-between">
                    <span class="text-[2.5rem] text-color-1 font-bold">{{ $totalTenagaAhli }}</span>
                    <button class="btn btn-ghost">
                        <img class="w-[30xp] h-[30px]" src="{{ asset('icons/arrow.svg') }}" alt="">
                    </button>
                </div>
            </div>
        </div>
        <!-- card 2: Total tenaga ahli -->

        <!-- card 3: Total admin -->
        <div class="card card-compact bg-color-6 border-[1px] border-color-5">
            <div class="card-body">
                <img class="w-10 h-10" src="{{ asset('icons/Manager.svg') }}" alt="">
                <span class="text-base text-color-1">Total Admin</span>
                <div class="card-actions items-center justify-between">
                    <span class="text-[2.5rem] text-color-1 font-bold">{{ $totalAdmin }}</span>
                    <button class="btn btn-ghost">
                        <img class="w-[30xp] h-[30px]" src="{{ asset('icons/arrow.svg') }}" alt="">
                    </button>
                </div>
            </div>
        </div>
        <!-- card 3: Total admin -->

        <!-- card 4: Total transaksi -->
        <div class="card card-compact bg-color-6 border-[1px] border-color-5">
            <div class="card-body">
                <img class="w-10 h-10" src="{{ asset('icons/Purchase_Order.svg') }}" alt="">
                <span class="text-base text-color-1">Total Transaksi</span>
                <div class="card-actions items-center justify-between">
                    <span class="text-[2.5rem] text-color-1 font-bold">
                        {{ $totalTransaksi }}
                    </span>
                    <button class="btn btn-ghost">
                        <img class="w-[30xp] h-[30px]" src="{{ asset('icons/arrow.svg') }}" alt="">
                    </button>
                </div>
            </div>
        </div>
        <!-- card 4:Total transaksi -->

    </div>
</div>

@endsection