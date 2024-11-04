<?php
// Nama file: [journal.blade.php]
// Deskripsi: Halaman ini menampilkan fitur jurnal harian di mana user dapat mencurahkan isi pikiran atau kegiatan kesehariannya kedalam bentuk tulisan/text.            
// Dibuat oleh: [Ahmad Dzikra Nasuma] NIM:[3312301094]
// Tanggal: [Selasa 15 Oktober 2024]
?>

@extends('layouts.main')

@section('aside')
<div class="flex flex-col items-center justify-start w-full h-auto p-4">
<div class="flex items-center justify-center py-8 px-4">

    <div class="max-w-sm w-full shadow-lg">
    <div class="md:p-8 p-5 dark:bg-gray-800 bg-white rounded-t">
        <div class="px-4 flex items-center justify-between">
            <span  tabindex="0" class="focus:outline-none  text-base font-bold dark:text-gray-100 text-gray-800">October 2024</span>
            <div class="flex items-center">
                <button aria-label="calendar backward" class="focus:text-gray-400 hover:text-gray-400 text-gray-800 dark:text-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <polyline points="15 6 9 12 15 18" />
                </svg>
            </button>
            <button aria-label="calendar forward" class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800 dark:text-gray-100"> 
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler  icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <polyline points="9 6 15 12 9 18" />
                </svg>
            </button>

            </div>
        </div>
        <div class="flex items-center justify-between pt-12 overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr>
                        <th>
                            <div class="w-full flex justify-center">
                                <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Mo</p>
                            </div>
                        </th>
                        <th>
                            <div class="w-full flex justify-center">
                                <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Tu</p>
                            </div>
                        </th>
                        <th>
                            <div class="w-full flex justify-center">
                                <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">We</p>
                            </div>
                        </th>
                        <th>
                            <div class="w-full flex justify-center">
                                <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Th</p>
                            </div>
                        </th>
                        <th>
                            <div class="w-full flex justify-center">
                                <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Fr</p>
                            </div>
                        </th>
                        <th>
                            <div class="w-full flex justify-center">
                                <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Sa</p>
                            </div>
                        </th>
                        <th>
                            <div class="w-full flex justify-center">
                                <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Su</p>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pt-6">
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                        </td>
                        <td class="pt-6">
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                        </td>
                        <td class="pt-6">
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">1</p>
                            </div>
                        </td>
                        <td class="pt-6">
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">2</p>
                            </div>
                        </td>
                        <td class="pt-6">
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">3</p>
                            </div>
                        </td>
                        <td class="pt-6">
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100">4</p>
                            </div>
                        </td>
                        <td class="pt-6">
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100">6</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">6</p>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">7</p>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">8</p>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">9</p>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">10</p>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100">11</p>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100">12</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">13</p>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">14</p>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">15</p>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">16</p>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">17</p>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100">18</p>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100">19</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="w-full h-full">
                                <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                    <a  role="link" tabindex="0" class="focus:outline-none  focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-500 hover:bg-indigo-500 text-base w-8 h-8 flex items-center justify-center font-medium text-white bg-indigo-700 rounded-full">20</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">21</p>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">22</p>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">23</p>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">24</p>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100">25</p>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100">26</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">27</p>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">28</p>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">28</p>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">30</p>
                            </div>
                        </td>
                        <td>
                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">31</p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>

    <div class="mt-8 bg-white shadow-md rounded-lg p-4 w-full max-w-md">
<div class="antialiased sans-serif bg-gray-200 w-lg min-h-screen ">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <style>
    body {
      font-family: 'IBM Plex Mono', sans-serif;
    }
    [x-cloak] {
      display: none;
    }

    .line {
      background: repeating-linear-gradient(
        to bottom,
        #eee,
        #eee 1px,
        #fff 1px,
        #fff 8%
      );
    }
    .tick {
      background: repeating-linear-gradient(
        to right,
        #eee,
        #eee 1px,
        #fff 1px,
        #fff 5%
      );
    }
  </style>



  <div x-data="app()" x-cloak class="px-4">
    <div class="max-w-lg mx-auto py-10">
      <div class="shadow p-6 rounded-lg bg-white">
        <div class="md:flex md:justify-between md:items-center">
          <div>
            <h2 class="text-xl text-gray-800 font-bold leading-tight"></h2>
            <p class="mb-2 text-gray-600 text-sm"></p>
          </div>

          <!-- Legends -->
          <div class="mb-4">
            <div class="flex items-center">
              <div class="w-2 h-2 bg-blue-600 mr-2 rounded-full"></div>
              <div class="text-sm text-gray-700">data</div>
            </div>
          </div>
        </div>


        <div class="line my-8 relative">
          <!-- Tooltip -->
          <template x-if="tooltipOpen == true">
            <div x-ref="tooltipContainer" class="p-0 m-0 z-10 shadow-lg rounded-lg absolute h-auto block"
                 :style="`"
                 >
              <div class="shadow-xs rounded-lg bg-white p-2">
                <div class="flex items-center justify-between text-sm">
                  <div>Sales:</div>
                  <div class="font-bold ml-2">
                    <span x-html="tooltipContent"></span>
                  </div>
                </div>
              </div>
            </div>
          </template>

          <!-- Bar Chart -->
          <div class="flex -mx-2 items-end mb-2">
            <template x-for="data in chartData">

              <div class="px-2 w-1/6">
                <div :style="" 
                     class="transition ease-in duration-200 bg-blue-600 hover:bg-blue-400 relative"
                     @mouseenter="showTooltip($event); tooltipOpen = true" 
                     @mouseleave="hideTooltip($event)"
                     >
                  <div x-text="data" class="text-center absolute top-0 left-0 right-0 -mt-6 text-gray-800 text-sm"></div>
                </div>
              </div>

            </template>
          </div>

          <!-- Labels -->
          <div class="border-t border-gray-400 mx-auto" :style="`height: 1px; "></div>
          <div class="flex -mx-2 items-end">
            <template x-for="data in labels">
              <div class="px-2 w-1/6">
                <div class="bg-red-600 relative">
                  <div class="text-center absolute top-0 left-0 right-0 h-2 -mt-px bg-gray-400 mx-auto" style="width: 1px"></div>
                  <div x-text="data" class="text-center absolute top-0 left-0 right-0 mt-3 text-gray-700 text-sm"></div>
                </div>
              </div>
            </template>	
          </div>

        </div>
      </div>
    </div>
  </div>

  <script>
    function app() {
      return {
        chartData: [200, 300, 400, 300, 200, ],
        labels: ['18', '', '', '', '23', ],

        tooltipContent: '',
        tooltipOpen: false,
        tooltipX: 0,
        tooltipY: 0,
        showTooltip(e) {
          console.log(e);
          this.tooltipContent = e.target.textContent
          this.tooltipX = e.target.offsetLeft - e.target.clientWidth;
          this.tooltipY = e.target.clientHeight + e.target.clientWidth;
        },
        hideTooltip(e) {
          this.tooltipContent = '';
          this.tooltipOpen = false;
          this.tooltipX = 0;
          this.tooltipY = 0;
        }
      }
    }
  </script>
</div>
@endsection

@section('main')
<div class="flex flex-col items-center justify-start w-full h-full bg-white font-inter p-6">
    <input type="text" class="font-semibold text-[32px] mb-2 p-2 bg-transparent border-none text-center w-full max-w-lg placeholder:text-center" placeholder="Judul Jurnal..." />

    <h2 class="font-semibold text-[20px] mb-2 text-center">Dear Journal,</h2>

    <textarea class="font-normal text-[16px] w-full h-[400px] p-4 bg-transparent border-none" placeholder="Tulis isi jurnalmu di sini..."></textarea>

</div>
@endsection