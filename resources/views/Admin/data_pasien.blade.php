@extends('layouts.main_admin')

@section('main')

<div class="flex flex-col gap-4">
    <h1 class="text-[2rem] text-color-1 font-bold">Data Pasien</h1>

    <a href="{{ route('user-pasien.create') }}" class="btn bg-color-3 w-[200px] text-white text-xl">
        <img src="{{ asset('icons/Plus_white.svg') }}" alt="">
        Tambah Data
    </a>

    <div class="w-full p-5 rounded-2xl">
        <div class="overflow-x-auto min-h-[calc(100vh-400px)]">
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

                    @foreach ($pasiens as $key => $pasien)
                        <tr>
                            <th>{{ ($pasiens->currentPage() - 1) * $pasiens->perPage() + $key + 1 }}</th>
                            <th>
                                <div class="avatar">
                                    <div class="w-9 rounded-full">
                                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                                    </div>
                                </div>
                            </th>
                            <td>{{ $pasien->user->nama }}</td>
                            <td>{{ $pasien->user->email }}</td>
                            <td>{{ $pasien->user->jenis_kelamin }}</td>
                            <td>{{ $pasien->user->tanggal_lahir }}</td>
                            <td class="flex justify-center gap-2">
                                <a href="{{ route('user-pasien.show', $pasien->id) }}" class="btn bg-blue-100 text-blue-500 border-blue-500" href="#">
                                    <img class="w-6 h-6" src="{{ asset("icons/Info.svg")}}" alt="">
                                </a>
                                <a href="{{ route('user-pasien.edit', $pasien->id) }}" class="btn bg-green-100 text-green-500 border-green-500" href="#">
                                    <img class="w-6 h-6" src="{{ asset("icons/Edit.svg")}}" alt="">
                                </a>
                                <button class="btn bg-red-100 text-red-500 border-red-500" onclick="confirmDeletion({{ $pasien->user->id }})">
                                    <img class="w-6 h-6" src="{{ asset("icons/Waste.svg")}}" alt="">
                                </button>
                            </td>
                        </tr>

                        <form id="delete-form-{{ $pasien->user->id }}" action="{{ route('user-pasien.destroy', $pasien->user->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    

<!-- Pagination -->
    <div class="flex justify-between border-t-[1px] bg-color-8 border-color-4 p-3">
        <span class="text-sm text-color-2 content-center">
            Menampilkan {{ $pasiens->firstItem() }} ke {{ $pasiens->lastItem() }} dari {{ $pasiens->total() }} data
        </span>

        <nav class="flex items-center gap-x-1" aria-label="Pagination">
            <!-- Tombol Previous -->
            <button type="button" 
                class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg border border-transparent text-color-1 hover:bg-color-5 focus:outline-none focus:bg-color-3 disabled:opacity-50 disabled:pointer-events-none"
                aria-label="Previous" {{ $pasiens->onFirstPage() ? 'disabled' : '' }}
                onclick="window.location='{{ $pasiens->previousPageUrl() }}'">
                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                <span class="sr-only">Previous</span>
            </button>

            <div class="flex items-center gap-x-1">
                <!-- Tombol Halaman Terendah -->
                <button type="button" 
                    class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-color-4 text-color-1 hover:bg-color-5 py-2 px-3 text-sm rounded-lg 
                    {{ $pasiens->currentPage() == 1 ? 'bg-color-3 text-color-5' : 'focus:outline-none focus:bg-color-3' }}" 
                    onclick="window.location='{{ $pasiens->url(1) }}'">1</button>
            
                <!-- Tombol Halaman Sekarang -->
                    <button type="button" 
                        class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-color-4  bg-color-3 text-color-5 py-2 px-3 text-sm rounded-lg" 
                        disabled>Halaman {{ $pasiens->currentPage() }}</button>
            
                <!-- Tombol Halaman Tertinggi -->
                @if ($pasiens->lastPage() > 1)
                    <button type="button" 
                        class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-color-4 text-color-1 hover:bg-color-5 py-2 px-3 text-sm rounded-lg 
                        {{ $pasiens->currentPage() == $pasiens->lastPage() ? 'bg-color-3 text-color-5' : 'focus:outline-none focus:bg-color-3' }}" 
                        onclick="window.location='{{ $pasiens->url($pasiens->lastPage()) }}'">{{ $pasiens->lastPage() }}</button>
                @endif
            </div>

            <!-- Tombol Next -->
            <button type="button" 
                class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg border border-transparent text-color-1 hover:bg-color-5 focus:outline-none focus:bg-color-3 disabled:opacity-50 disabled:pointer-events-none"
                aria-label="Next" {{ $pasiens->hasMorePages() ? '' : 'disabled' }}
                onclick="window.location='{{ $pasiens->nextPageUrl() }}'">
                <span class="sr-only">Next</span>
                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </button>
        </nav>
    </div>
<!-- END Pagination -->

</div>

@endsection