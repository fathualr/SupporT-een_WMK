<?php
// Nama file: [journal.blade.php]
// Deskripsi: Halaman ini menampilkan fitur jurnal harian di mana user dapat mencurahkan isi pikiran atau kegiatan kesehariannya kedalam bentuk tulisan/text.            
// Dibuat oleh: [Ahmad Dzikra Nasuma] NIM:[3312301094]
// Tanggal: [Selasa 15 Oktober 2024]
?>

@extends('layouts.main')


@section('aside')
<div class="flex flex-col items-center justify-start w-full h-auto gap-4 py-8">
  
  <!-- Calendar -->
  <div class="max-w-lg w-full flex flex-col bg-white border shadow-lg rounded-2xl dark:bg-neutral-900 dark:border-neutral-700">
      <div class="p-3 space-y-0.5">
        <!-- Months -->
        <div class="grid grid-cols-2 mx-1.5 pb-3">
          
          <!-- Option Month / Year -->
          <div class="col-span-1 flex justify-start items-center gap-x-1">
            <div class="relative">
              <select data-hs-select='{
                "placeholder": "Select month",
                "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative flex text-nowrap w-full cursor-pointer text-start font-bold text-xl text-gray-800 hover:text-color-3 focus:outline-none focus:text-color-3 before:absolute before:inset-0 before:z-[1] dark:text-neutral-200 dark:hover:text-blue-500 dark:focus:text-blue-500",
                "dropdownClasses": "mt-2 z-50 w-32 max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
                "optionClasses": "p-2 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-gray-800 dark:text-neutral-200\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                }' class="hidden">
                <option value="0">January</option>
                <option value="1">February</option>
                <option value="2">March</option>
                <option value="3">April</option>
                <option value="4">May</option>
                <option value="5">June</option>
                <option value="6" selected>July</option>
                <option value="7">August</option>
                <option value="8">September</option>
                <option value="9">October</option>
                <option value="10">November</option>
                <option value="11">December</option>
              </select>
            </div>

            <span class="text-xl text-gray-800 dark:text-neutral-200">/</span>

            <div class="relative">
              <select data-hs-select='{
                  "placeholder": "Select year",
                  "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                  "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative flex text-nowrap w-full cursor-pointer text-xl text-start font-bold text-gray-800 hover:text-color-3 focus:outline-none focus:text-color-3 before:absolute before:inset-0 before:z-[1] dark:text-neutral-200 dark:hover:text-blue-500 dark:focus:text-blue-500",
                  "dropdownClasses": "mt-2 z-50 w-20 max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
                  "optionClasses": "p-2 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                  "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-gray-800 dark:text-neutral-200\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                }' class="hidden">
                <option selected>2023</option>
                <option>2024</option>
                <option>2025</option>
                <option>2026</option>
                <option>2027</option>
              </select>
            </div>
          </div>
          <!-- End Opion Month / Year -->

          <!-- Prev  -->
          <div class="col-span-1 flex justify-end gap-2">

            <!-- Prev Button -->
            <button type="button" class="size-10 flex justify-center items-center text-gray-800 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" aria-label="Previous">
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
            </button>
            <!-- End Prev Button -->

            <!-- Next Button -->
            <button type="button" class=" size-10 flex justify-center items-center text-gray-800 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" aria-label="Next">
              <svg class="shrink-0 size-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </button>
            <!-- End Next Button -->

          </div>
          <!-- End action -->

        </div>
        <!-- End Months -->

      <!-- Weeks -->
      <div class="flex pb-1.5">
        <span class="m-px w-16 block text-center text-sm text-gray-500">
          Mo
        </span>
        <span class="m-px w-16 block text-center text-sm text-gray-500">
          Tu
        </span>
        <span class="m-px w-16 block text-center text-sm text-gray-500">
          We
        </span>
        <span class="m-px w-16 block text-center text-sm text-gray-500">
          Th
        </span>
        <span class="m-px w-16 block text-center text-sm text-gray-500">
          Fr
        </span>
        <span class="m-px w-16 block text-center text-sm text-gray-500">
          Sa
        </span>
        <span class="m-px w-16 block text-center text-sm text-gray-500">
          Su
        </span>
      </div>
      <!-- Weeks -->

      <!-- Days -->
      <div class="grid grid-cols-7">
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3" disabled>
            26
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3" disabled>
            27
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3" disabled>
            28
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3" disabled>
            29
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3" disabled>
            30
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            1
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            2
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            3
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            4
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            5
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            6
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            7
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            8
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            9
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            10
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            11
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            12
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            13
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            14
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            15
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            16
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            17
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            18
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            19
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center bg-color-3 border border-transparent text-sm font-medium text-white hover:border-color-3 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100">
            20
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            21
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            22
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            23
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            24
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            25
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            26
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            27
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            28
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            29
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            30
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-color-3 hover:text-color-3 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:border-color-3 focus:text-color-3">
            31
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-color-3 hover:text-color-3 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
            1
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-color-3 hover:text-color-3 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
            2
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-color-3 hover:text-color-3 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
            3
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-color-3 hover:text-color-3 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
            4
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-color-3 hover:text-color-3 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
            5
          </button>
        </div>
        <div>
          <button type="button" class="m-px size-16 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-color-3 hover:text-color-3 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" disabled>
            6
          </button>
        </div>
      </div>
      <!-- End Days -->

    </div>
  </div>
    <!-- End Calendar -->
    
  <!-- data diagram -->
    <div class="max-w-lg w-full relative flex flex-col rounded-2xl bg-white bg-clip-border text-gray-700 shadow-lg">
      <div class="w-full">
        <div id="bar-chart"></div>
    </div>
  <!-- data diagram -->

<!-- chart js -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
  const chartConfig = {
  series: [
    {
      name: "Sales",
      data: [0, 0.1, 1, 0.8, 0.4, 0.5, 1],
    },
  ],
  chart: {
    type: "bar",
    height: 240,
    toolbar: {
      show: false,
    },
  },
  title: {
    show: "",
  },
  dataLabels: {
    enabled: false,
  },
  colors: ["#298EA6"],
  plotOptions: {
    bar: {
      columnWidth: "40%",
      borderRadius: 2,
    },
  },
  xaxis: {
    axisTicks: {
      show: false,
    },
    axisBorder: {
      show: false,
    },
    labels: {
      style: {
        colors: "#616161",
        fontSize: "12px",
        fontFamily: "inherit",
        fontWeight: 400,
      },
    },
    categories: [
      "Marah",
      "Jijik",
      "Takut",
      "Senang",
      "Netral",
      "Sedih",
      "Terkejut",
    ],
  },
  yaxis: {
    labels: {
      style: {
        colors: "#616161",
        fontSize: "12px",
        fontFamily: "inherit",
        fontWeight: 400,
      },
    },
  },
  grid: {
    show: true,
    borderColor: "#dddddd",
    strokeDashArray: 5,
    xaxis: {
      lines: {
        show: true,
      },
    },
    padding: {
      top: 5,
      right: 20,
    },
  },
  fill: {
    opacity: 0.8,
  },
  tooltip: {
    theme: "dark",
  },
};

const chart = new ApexCharts(document.querySelector("#bar-chart"), chartConfig);

chart.render();
</script>
<!-- chart js -->

</div>
@endsection

@section('main')

  <!-- jurnal -->
  <div class="bg-white max-w-7xl w-full h-full px-4 py-8 flex flex-col shadow-lg rounded-2xl">
    <form id="text-form" action="#" method="POST" class="w-full h-full pb-4">

        <!-- Judul -->
        <input type="text" class="py-3 bg-transparent block w-full rounded-lg text-sm focus:border-none focus:outline-none disabled:opacity-50 disabled:pointer-events-none" placeholder="Tulis subjek disini...">

        <hr class="border-slate-200 my-4">
        <!-- Isi -->
        <textarea class="py-4 bg-transparent w-full h-4/5 rounded-lg text-sm focus:outline-none resize-none " placeholder="Tulis sesuatu disini..."></textarea>

        <!-- tombol simpan -->
        <div class="flex justify-center">
          <button type="button" class="btn bg-color-3 text-white font-normal">
            Simpan
          </button>
        </div>
        
      </form>
  </div>
  <!-- End jurnal -->

</div>

@endsection