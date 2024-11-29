@extends('layouts.main')

@section('aside')

    <div class="flex flex-col mx-auto items-center w-full h-fit mt-9 px-12 gap-6">
        <h1 class="text-4xl font-bold text-color-1 w-full">Konten Edukatif</h1>

        <!-- Search Bar with Clear Button (X) -->
        <form method="GET" action="{{ route('kontenEdukatif') }}" class="w-full">
            <label class="input flex items-center gap-2 w-full bg-color-6 py-4 outline-color-3 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-5 w-5 opacity-70 text-color-2">
                    <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
                </svg>
                <input type="text" name="search" autocomplete="off" value="{{ request()->search }}" class="grow text-color-2" placeholder="Cari berdasarkan judul, tipe, nama pengguna, atau kata kunci" />
                
                <!-- Clear Search Button (X) -->
                @if(request()->search)
                    <a href="{{ route('kontenEdukatif') }}" class="ml-2 text-color-2 hover:text-color-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd" d="M11.3 4.7a1 1 0 0 0-1.4 0L8 6.6 5.1 3.7a1 1 0 0 0-1.4 1.4L6.6 8 3.7 10.9a1 1 0 0 0 1.4 1.4L8 9.4l2.9 2.9a1 1 0 0 0 1.4-1.4L9.4 8l2.9-2.9a1 1 0 0 0 0-1.4z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                @endif
            </label>
        </form>

        <div class="flex flex-col w-full h-full gap-4">
            <div class="divider m-0"></div>

            @foreach($kontenList as $item)
                <a href="{{ route('kontenEdukatif', ['id' => $item->id] + request()->all()) }}" class="flex border-[1px] border-color-4 rounded-2xl p-2 gap-2">
                    <div class="flex-none">
                        <img class=" w-[100px] h-[100px] object-cover rounded-xl" src="{{ asset('storage/' . $item->thumbnail) }}" alt="Thumbnail" />
                    </div>
                    <div class="flex flex-col w-full">
                        <span class="text-color-2">{{ ucfirst($item->tipe) }}</span>
                        <h1 class="text-xl font-bold overflow-hidden text-ellipsis whitespace-normal max-h-14">{{ $item->judul }}</h1>
                        <div class="flex justify-between items-center mt-auto">
                            <div class="flex items-center max-w-full">
                                <img class="w-5 h-5 rounded-full" src="{{ asset('storage/' . $item->user->foto_profil) }}" alt="Album" />
                                <span class="truncate ml-2 overflow-hidden text-ellipsis whitespace-nowrap">{{ $item->user->nama }}</span>
                            </div>
                            <span class="whitespace-nowrap ml-4">{{ \Carbon\Carbon::parse($item->created_at)->format('d F Y') }}</span>
                        </div>
                    </div>
                </a>
            @endforeach

            <div class="divider m-0"></div>

            <div class="mb-3 flex justify-center">
                <!-- Pagination container -->
                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px">
                    <!-- Previous Page Button -->
                    @if ($kontenList->onFirstPage())
                        <span class="inline-flex items-center px-4 py-2 text-sm font-medium text-color-2 bg-color-6 border border-color-4 cursor-not-allowed">
                            Previous
                        </span>
                    @else
                        <a href="{{ $kontenList->previousPageUrl() . (request()->search ? '&search=' . request()->search : '') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-color-3 bg-color-6 border border-color-4 rounded-l-md hover:bg-color-5">
                            Previous
                        </a>
                    @endif
            
                    <!-- Page Numbers -->
                    @foreach ($kontenList->links()->elements[0] as $page => $url)
                        <a href="{{ $url . (request()->search ? '&search=' . request()->search : '') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium 
                            {{ $page == $kontenList->currentPage() ? 'text-color-1 bg-color-3 border-color-3' : 'text-color-2 bg-color-6 border-color-4 hover:bg-color-5' }} border">
                            {{ $page }}
                        </a>
                    @endforeach
            
                    <!-- Next Page Button -->
                    @if ($kontenList->hasMorePages())
                        <a href="{{ $kontenList->nextPageUrl() . (request()->search ? '&search=' . request()->search : '') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-color-3 bg-color-6 border border-color-4 rounded-r-md hover:bg-color-5">
                            Next
                        </a>
                    @else
                        <span class="inline-flex items-center px-4 py-2 text-sm font-medium text-color-2 bg-color-6 border border-color-4 cursor-not-allowed">
                            Next
                        </span>
                    @endif
                </nav>
            </div>         
            
        </div>

    </div>

@endsection

@section('main')

    <div class="flex flex-col w-full h-full">
        @if ($selectedKonten)

            @if ($selectedKonten->tipe === 'artikel')
            
                <a href="/konten-edukatif" class="btn btn-sm mb-3 bg-color-4 text-color-putih hover:bg-color-2 border-0 w-fit">
                    <img class="w-6 h-6" src="{{ asset("icons/back.svg")}}" alt="">
                    Kembali
                </a>
                
                <div class="bg-color-8 p-8 border-[1px] border-color-4 rounded-2xl">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img class="w-16 h-16 rounded-full mr-4" src="{{ asset('storage/' . $selectedKonten->user->foto_profil) }}" alt="Album" />
                            <div class="flex flex-col">
                                <span class="text-xl text-color-1 font-semibold">{{ $selectedKonten->user->nama }}</span>
                                <span class="text-color-2 font-semibold text-xs">{{ $selectedKonten->user->role }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4 pl-20">
                        <h1 class="text-3xl font-bold text-color-1">{{ $selectedKonten->judul }}</h1>
                        <span class="text-color-2 text-center">{{ \Carbon\Carbon::parse($item->created_at)->format('d F Y') }}</span>
                        <img class="aspect-video rounded-2xl object-cover" src="{{ asset('storage/' . $selectedKonten->thumbnail) }}" alt="ilustrasi artikel">
                        <p class="text-color-1 text-justify">
                            {{ $selectedKonten->isi_artikel }}
                        </p>
                    </div>
                </div>

            @elseif ($selectedKonten->tipe === 'video')
            
                <a href="/konten-edukatif" class="btn btn-sm mb-3 bg-color-4 text-color-putih hover:bg-color-2 border-0 w-fit">
                    <img class="w-6 h-6" src="{{ asset("icons/back.svg")}}" alt="">
                    Kembali
                </a>

                <div class=" bg-color-8 p-8 border-[1px] border-color-4 rounded-2xl">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img class="w-16 h-16 rounded-full mr-4" src="{{ asset('storage/' . $selectedKonten->user->foto_profil) }}" alt="Album" />
                            <div class="flex flex-col">
                                <span class="text-xl text-color-1 font-semibold">{{ $selectedKonten->user->nama }}</span>
                                <span class="text-color-2 font-semibold text-xs">{{ $selectedKonten->user->role }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4 pl-20">
                        <h1 class="text-3xl font-bold text-color-1">{{ $selectedKonten->judul }}</h1>
                        <span class="text-color-2 text-center">{{ \Carbon\Carbon::parse($item->created_at)->format('d F Y') }}</span>
                        <iframe class="w-full aspect-video rounded-lg shadow-lg" src="{!! empty($selectedKonten->link_youtube) ? 'https://www.youtube.com/embed/' : $selectedKonten->link_youtube !!}"></iframe>
                    </div>
                </div>

            @endif
        @else
        
            <a href="/" class="btn btn-sm mb-3 bg-color-4 text-color-putih hover:bg-color-2 border-0 w-fit">
                <img class="w-6 h-6" src="{{ asset("icons/back.svg")}}" alt="">
                Kembali
            </a>

            <!-- Default Message When No Content Selected -->
            <div class="bg-color-8 h-full p-8 border-[1px] border-color-4 rounded-2xl">
                <div class="flex justify-center items-center w-full h-full">
                    Tidak ada konten yang dipilih.
                </div>
            </div>
        @endif
    </div>
@endsection
