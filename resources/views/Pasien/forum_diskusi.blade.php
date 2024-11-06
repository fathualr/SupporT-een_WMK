@extends('layouts.main')

@section('aside')

<div class="flex flex-col mx-auto w-full h-full pt-9 px-[50px] gap-6">
    <a href="#" class="btn flex justify-start bg-color-6 hover:bg-color-5 hover:border-color-3 text-base">
        <img src="{{ asset('icons/Plus.svg') }}" alt="Plus">
        Buat Diskusi
    </a>
    <h1 class="text-4xl font-bold text-color-1 text-start">Diskusi Lainnya</h1>

    <div class="flex flex-col w-full h-full gap-4">

        <!-- card 1 -->
        <a href="#" class="flex items-center border-[1px] border-color-4 rounded-2xl p-2 gap-2">
            <div class="flex-none w-16 h-16">
                <img class="w-full h-full rounded-xl" src="{{ asset('images/jogging.png') }}" alt="Album" />
            </div>
            <div class="flex-1">
                <span class="text-color-1 font-semibold">
                    Halo kalian pernah merasakan ini gak?
                </span>
            </div>
            <button class="btn btn-square btn-ghost">
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
            </button>
        </a>
        <!-- card 1 -->

        <!-- card 2 -->
        <a href="#" class="flex items-center border-[1px] border-color-4 rounded-2xl p-2 gap-2">
            <div class="flex-none w-16 h-16">
                <img class="w-full h-full rounded-xl" src="{{ asset('images/jogging.png') }}" alt="Album" />
            </div>
            <div class="flex-1">
                <span class="text-color-1 font-semibold">
                    Halo kalian pernah merasakan ini gak?
                </span>
            </div>
            <button class="btn btn-square btn-ghost">
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
            </button>
        </a>
        <!-- card 2 -->

        <!-- card 3 -->
        <a href="#" class="flex items-center border-[1px] border-color-4 rounded-2xl p-2 gap-2">
            <div class="flex-none w-16 h-16">
                <img class="w-full h-full rounded-xl" src="{{ asset('images/jogging.png') }}" alt="Album" />
            </div>
            <div class="flex-1">
                <span class="text-color-1 font-semibold">
                    Halo kalian pernah merasakan ini gak?
                </span>
            </div>
            <button class="btn btn-square btn-ghost">
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
            </button>
        </a>
        <!-- card 3 -->

    </div>
</div>

@endsection

@section('main')

<div class="flex flex-col w-full h-full gap-4">
    <!-- card 1 -->
    <div class="card bg-base-100 w-full border-[1px] border-color-4">
        <div class="card-body">
            <div class="flex gap-3">

                <div class="avatar">
                    <div class="w-16 h-16 rounded-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                </div>

                <div class="flex flex-col gap-4">
                    <div class="flex justify-between">
                        <div class="flex flex-col">
                            <a class="link link-hover text-color-1 text-2xl font-bold" href="#">Dr. Mirza</a>
                            <span class="text-color-2 text-2xl">21 Maret 2024</span>
                        </div>
                        <button class="btn btn-square btn-ghost">
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
                        </button>
                    </div>

                    <p class="text-2xl text-color-1">If a dog chews shoes whose shoes does he choose?</p>
                    <img class="rounded-2xl" src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="">
                    <div class="flex items-center">
                        <img src="{{ asset('icons/bubble.svg') }}" alt="comment">
                        <span class="text-color-1 text-lg">25</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- card 1 -->
    <!-- card 2 -->
    <div class="card bg-base-100 w-full border-[1px] border-color-4">
        <div class="card-body">
            <div class="flex gap-3">

                <div class="avatar">
                    <div class="w-16 h-16 rounded-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                </div>

                <div class="flex flex-col gap-4">
                    <div class="flex justify-between">
                        <div class="flex flex-col">
                            <a class="link link-hover text-color-1 text-2xl font-bold" href="#">Dr. Mirza</a>
                            <span class="text-color-2 text-2xl">21 Maret 2024</span>
                        </div>
                        <button class="btn btn-square btn-ghost">
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
                        </button>
                    </div>

                    <p class="text-2xl text-color-1">If a dog chews shoes whose shoes does he choose?</p>
                    <img class="rounded-2xl" src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="">
                    <div class="flex items-center">
                        <img src="{{ asset('icons/bubble.svg') }}" alt="comment">
                        <span class="text-color-1 text-lg">25</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- card 2 -->
</div>

@endsection