@extends('layouts.main')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {{-- @foreach ($jumlahWaktu as $item)
         <p>{{ $item->created_at }}</p>
     @endforeach --}}

    <div class="min-h-screen  ">
        {{-- ============================= Awal title menu ================================ --}}
        {{-- <div class="w-full flex h-12 md:mb-2 md:mx-0 mx-1">
            <div class="flex-1 flex h-full">
                <div class="flex w-fit h-full items-center">
                    <div class="box-title md:w-10 md:h-10 w-8 h-8 middle rounded md:mr-3 mr-1">
                        <i class="fa-solid fa-house text-bluebg"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-teal-400 md:text-base text-xs font-semibold font-nunito">Dashboard</span>
                        <span class="md:text-sm text-slate-500 text-xs whitespace-nowrap font-quicksand">Cari tahu apa yang sedang
                            terjadi</span>
                    </div>
                </div>
            </div>
            <div class="flex-1 flex justify-end">
                <div class="flex w-fit h-full  middle">
                    <span class="md:text-sm  text-xs text-teal-400 font-quicksand mr-2">{{ date('d/m/Y') }}</span>
                </div>
            </div>
        </div> --}}
        {{-- ============================= Akhir title menu ================================ --}}


        <div class="content md:mt-4 mt-2 grid md:grid-cols-7 grid-cols-1  md:grid-rows-2 xl:gap-7 lg:gap-7 md:gap-6 gap-3 ">

            {{-- ====================== Awal Chart Trend Penyakit ======================== --}}
            <div
                class="bagan xl:min-h-72 md:h-[25rem] h-72 md:col-span-4 row-span-2 flex flex-col justify-center rounded-xl  bg-white">
                <div class="flex w-full px-5   ">
                    <div class="py-4  w-[80%]">
                        <p class=" md:text-xl  dark:text-slate-200 text-lg font-bold font-nunito text-slate-500">Analisis
                            Trend Penyakit</p>
                        <span class=" md:text-lg text-xs leading-3 text-slate-400 font-quicksand">Pada bulan
                            {{ $bulanSekarang }} 2023</span>
                    </div>
                    <div class="w-[20%] flex justify-end  items-center">
                        <button class="btn border-0 bg-teal-400 dark:bg-teal-600"><i
                                class="text-white fa-solid fa-chart-simple"></i></button>

                    </div>


                </div>

                <div class="w-full px-5 pb-5 rounded-lg">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            {{-- ====================== Awal Chart Trend Penyakit ======================== --}}

            <div class="bagan md:col-span-3 row-span-1 rounded-xl flex gap-5 items-center bg-white  p-5">
                <div
                    class="w-full h-32 text-slate-100 bg-gradient-to-r from-teal-400 dark:from-teal-600 to-teal-500 dark:to-teal-600 rounded-lg shadow-md flex items-center justify-end md:pr-5 pr-2 overflow-hidden">
                    <div class="md:w-[21%]  middle">
                        <img class="md:w-16 w-[5rem] mr-3" src="{{ asset('assets/svg/penyakit.svg') }}" alt="" />
                    </div>
                    <div class="w-[79%]">
                        <h3 class="text-sm text-slate-100 md:text-lg">Penyakit yang sering muncul</h3>
                        <h1 class="font-bold md:text-4xl text-2xl">{{ $topPenyakit->nama }}</h1>
                    </div>
                </div>
            </div>
            <div class="bagan md:col-span-3 row-span-1 rounded-xl flex md:gap-5 gap-2 items-center bg-white  p-5">
                <div
                    class="w-1/2 h-32 text-slate-700  shadow-teal-600/10 border border-teal-600  shadow-lg rounded-lg  flex items-center justify-around">
                    <!-- <i class="w-[6.6rem] fa-solid fa-user-clock text-5xl text-center"></i> -->
                    <img class="xl:w-[7rem] md:w-[6rem] w-[5rem] p-4" src="{{ asset('assets/svg/pasien1.svg') }}"
                        alt="" />

                    <div class="flex-auto">
                        <p class=" dark:text-slate-200">Pasien Hari ini</p>
                        <h1 class="text-slate-600 font-bold text-4xl dark:text-slate-50 ">{{ $jumlahPasienHariIni }}</h1>
                    </div>
                </div>
                <div
                    class="w-1/2 h-32 text-slate-700  shadow-teal-600/10 border border-teal-600  shadow-lg rounded-lg  flex items-center justify-around">
                    <!-- <i class="w-[6.6rem] fa-solid fa-hospital-user text-5xl text-center"></i> -->
                    <img class="xl:w-[7rem] md:w-[6rem] w-[5rem] p-4" src="{{ asset('assets/svg/pasien2.svg') }}"
                        alt="" />

                    <div class="flex-auto">
                        <p class=" dark:text-slate-200">Jumlah Pasien</p>
                        <h1 class="text-slate-600 font-bold text-4xl dark:text-slate-50 ">{{ $jumlahPasien }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid md:pr-3 lg:mt-7 mb-5  md:my-6 mt-3 md:grid-cols-8 md:grid-rows-1 xl:gap-9 lg:gap-6 md:gap-6 gap-3">

            {{-- ====================== Awal Chart Penyakit ======================== --}}
            <div class="relative bagan h-fit md:col-span-5 row-span-1 bg-white  bor rounded-xl flex justify-center ">
                <div class="w-[95%] lg:h-[25.8rem] flex flex-col  items-center  m-3  rounded-lg">
                    <div class=" w-full bg-teal-500 dark:bg-teal-600 p-5 m-3 flex items-center h-24 rounded-md">
                        <div class="w-[70%]">
                            <h1 class=" md:text-2xl text-xl font-semibold text-left text-gray-100">Pencegahan Penyakit
                                {{ $topPenyakit->nama }}</h1>
                        </div>
                        <div class="">
                            <img class=" absolute z-10 lg:right-10 lg:top-[14px] top-[43px] md:w-28  w-[5rem] mr-3"
                                src="{{ asset('assets/svg/fyi.svg') }}" alt="" />
                        </div>
                    </div>
                    <div class="mt-1 h-full border border-solid border-slate-300 rounded-lg flex  justify-center">

                        <p class="p-8 text-xl text-slate-500 dark:text-slate-300">{{ $solusi->solusi }}</p>
                    </div>
                </div>
            </div>
            {{-- ====================== Akhir Chart Penyakit ======================== --}}



            {{-- =================== tanggal ==================== --}}
            <div class="bagan h-fit md:col-span-3   rounded-xl ">
                <div class="wrapper  dark:bg-slate-800">
                    <header>
                        <p class="current-date dark:text-slate-300"></p>
                        <div class="icons">
                            <span id="prev" class="material-symbols-rounded"><i
                                    class=" p-2 rounded-2xl bg-teal-500 text-white fa-solid fa-chevron-right fa-flip-horizontal"></i></span>
                            <span id="next" class="material-symbols-rounded"><i
                                    class=" p-2 rounded-2xl bg-teal-500 text-white fa-solid fa-chevron-right "></i></span>
                        </div>
                    </header>
                    <div class="calendar ">
                        <ul class="weeks text-[#333] dark:text-slate-100">
                            <li>Sun</li>
                            <li>Mon</li>
                            <li>Tue</li>
                            <li>Wed</li>
                            <li>Thu</li>
                            <li>Fri</li>
                            <li>Sat</li>
                        </ul>
                        <ul class="days text-[#333] dark:text-slate-100"></ul>
                    </div>
                </div>
            </div>
            {{-- =================== akhir tanggal ==================== --}}

        </div>
    </div>
    <script src="{{ asset('assets/js/calender.js') }}"></script>



    <script>
        ////////////////////  Trend Penyakit \\\\\\\\\\\\\\\\\\\\\\\
        const ctx = document.getElementById("myChart");

        new Chart(ctx, {
            type: "bar",
            data: {
                labels: @json($namaPenyakit),
                datasets: [{
                    label: "penyakit",
                    data: @json($jumlahPenyakit),
                    borderWidth: 1,
                    backgroundColor: [
                        '#2dd4bf',

                    ],


                }, ],
            },
            options: {
                scales: {

                    y: {
                        grid: {
                            color: 'rgba(21, 164, 114, 0.33)'
                        },
                        ticks: {
                            precision: 0, // Mengatur jumlah desimal menjadi 0
                            color: '#0d9488',
                        }
                    },
                    x: {
                        grid: {
                            color: 'rgba(21, 164, 114, 0.33)'
                        },
                        ticks: {
                            precision: 0,
                            color: '#0f766e', // Warna teks label sumbu Y
                        }
                    },
                },
            },
        });
        //////////////////// Akhir  Trend Penyakit \\\\\\\\\\\\\\\\\\\\\\\
    </script>


    <style>
        .wrapper {
            background: #fff;
            border-radius: 10px;

        }

        .wrapper header {
            display: flex;
            align-items: center;
            padding: 25px 30px 10px;
            justify-content: space-between;
        }

        header .icons {
            display: flex;
        }

        header .icons span {
            height: 38px;
            width: 38px;
            margin: 0 1px;
            cursor: pointer;
            color: #878787;
            text-align: center;
            line-height: 38px;
            font-size: 1.9rem;
            user-select: none;
            border-radius: 50%;
        }

        .icons span:last-child {
            margin-right: -10px;
        }

        header .icons span:hover {
            background: #f2f2f2;
        }

        header .current-date {
            font-size: 1.45rem;
            font-weight: 500;
        }

        .calendar {
            padding: 20px;
        }

        .calendar ul {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            text-align: center;
        }

        .calendar .days {
            margin-bottom: 20px;
        }

        .calendar li {
            /* color: #333; */
            width: calc(100% / 7);
            font-size: 1.07rem;
        }

        .calendar .weeks li {
            font-weight: 500;
            cursor: default;
        }

        .calendar .days li {
            z-index: 1;
            cursor: pointer;
            position: relative;
            margin-top: 30px;
        }

        .days li.inactive {
            color: #aaa;
        }

        .days li.active {
            color: #fff;
        }

        .days li::before {
            position: absolute;
            content: "";
            left: 50%;
            top: 50%;
            height: 40px;
            width: 40px;
            z-index: -1;
            border-radius: 50%;
            transform: translate(-50%, -50%);
        }

        .days li.active::before {
            background: rgb(13 148 136);
        }

        .days li:not(.active):hover::before {
            background: #f2f2f2;
        }
    </style>
@endsection
