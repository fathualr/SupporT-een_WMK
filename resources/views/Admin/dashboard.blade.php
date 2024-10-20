@extends('layouts.main_admin')

@section('main')

<div class="flex flex-col gap-4">
    <h1 class="text-[2rem] text-color-1 fonts-bold">Dashboard</h1>

    <div class="grid grid-cols-4 gap-6">

        <div class="card card-compact bg-color-6 border-[1px] border-color-5">
            <div class="card-body">
                <img class="w-10 h-10" src="{{ asset('icons/People.svg') }}" alt="">
                <span class="text-base text-color-1">Total Pasien</span>
                <div class="card-actions items-center justify-between">
                    <span class="text-[2.5rem] text-color-1 font-bold">12.000</span>
                    <button class="btn btn-ghost">
                        <img class="w-[30xp] h-[30px]" src="{{ asset('icons/arrow.svg') }}" alt="">
                    </button>
                </div>
            </div>
        </div>
        

        <div class="card card-compact bg-color-6 border-[1px] border-color-5">
            <div class="card-body">
                <img class="w-10 h-10" src="{{ asset('icons/Medical_Doctor.svg') }}" alt="">
                <span class="text-base text-color-1">Total Pasien</span>
                <div class="card-actions items-center justify-between">
                    <span class="text-[2.5rem] text-color-1 font-bold">12.000</span>
                    <button class="btn btn-ghost">
                        <img class="w-[30xp] h-[30px]" src="{{ asset('icons/arrow.svg') }}" alt="">
                    </button>
                </div>
            </div>
        </div>

        <div class="card card-compact bg-color-6 border-[1px] border-color-5">
            <div class="card-body">
                <img class="w-10 h-10" src="{{ asset('icons/Manager.svg') }}" alt="">
                <span class="text-base text-color-1">Total Pasien</span>
                <div class="card-actions items-center justify-between">
                    <span class="text-[2.5rem] text-color-1 font-bold">12.000</span>
                    <button class="btn btn-ghost">
                        <img class="w-[30xp] h-[30px]" src="{{ asset('icons/arrow.svg') }}" alt="">
                    </button>
                </div>
            </div>
        </div>

        <div class="card card-compact bg-color-6 border-[1px] border-color-5">
            <div class="card-body">
                <img class="w-10 h-10" src="{{ asset('icons/Purchase_Order.svg') }}" alt="">
                <span class="text-base text-color-1">Total Pasien</span>
                <div class="card-actions items-center justify-between">
                    <span class="text-[2.5rem] text-color-1 font-bold">12.000</span>
                    <button class="btn btn-ghost">
                        <img class="w-[30xp] h-[30px]" src="{{ asset('icons/arrow.svg') }}" alt="">
                    </button>
                </div>
            </div>
        </div>



    </div>
</div>

@endsection