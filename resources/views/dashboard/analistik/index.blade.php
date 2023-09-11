@extends('layouts.main')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="min-h-screen ">
        {{-- ============================= Awal title menu ================================ --}}
        <div class="w-full flex h-12 md:mb-2 md:mx-0 mx-1 ">
            <div class="flex-1 flex h-full">
                <div class="flex w-fit h-full items-center">
                    <div class="box-title md:w-10 md:h-10 w-8 h-8 middle rounded md:mr-3 mr-1">
                        {{-- <div class="box-title md:w-10 md:h-10 w-8 h-8 middle rounded md:mr-3 mr-1"> --}}
                        <i class="fa-solid fa-chart-line text-bluebg"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-teal-400 md:text-base text-xs font-semibold font-nunito">Analistik</span>
                        <span class="md:text-sm text-slate-500 text-xs whitespace-nowrap font-quicksand">Lihat perkembangan
                            penyakit</span>
                    </div>
                </div>
            </div>
            <div class="flex-1 flex justify-end">
                <div class="flex w-fit h-full  middle">
                    <span class="md:text-sm text-xs text-teal-400 font-quicksand mr-2">{{ date('d/m/Y') }}</span>
                </div>
            </div>
        </div>
        {{-- ============================= Akhir title menu ================================ --}}

        <div class="content lg:pr-3 pr-0 grid md:grid-cols-7 grid-cols-1  md:grid-rows-2 xl:gap-7 lg:gap-7 md:gap-6 gap-3 ">

            {{-- ====================== Awal Chart Trend Penyakit ======================== --}}
            {{-- <div class="bagan xl:h-fit md:h-[25rem] h-72 md:col-span-4 row-span-1 flex justify-center rounded-xl  bg-white">
                    <div class="w-full lg:h-96 flex flex-col justify-around items-center   my-3 mx-5 rounded-lg">
                        <div class="w-full">
                            <h1 class="md:text-2xl dark:text-slate-200 text-lg font-semibold text-left text-gray-500">Analisis Trend Penyakit</h1>
                            <span class="md:text-lg text-sm text-slate-400">pada bulan <span id="bulanSpan">09</span> <span id="tahunSpan">2023</span> </span>
                        </div>
                        <canvas id="myChart"></canvas>
                    </div>
                </div> --}}
            <div
                class="bagan xl:min-h-72 md:h-[25rem] h-72 md:col-span-4 row-span-1 flex flex-col justify-center rounded-xl  bg-white">
                <div class="flex w-full px-5 ">
                    <div class="py-4  w-[80%]">
                        <h6 class=" md:text-xl  dark:text-slate-200 text-lg font-bold font-nunito text-slate-500">Analisis
                            Trend Penyakit</h6>
                        <span class="md:text-lg text-sm text-slate-400">pada bulan <span id="bulanSpan">09</span> <span
                                id="tahunSpan">2023</span> </span>
                    </div>
                    <div class="w-[20%] flex justify-end  items-center">
                        <button class="btn border-0 bg-teal-500"><i class="text-white fa-solid fa-chart-simple"></i></button>
                    </div>
                </div>

                <div class="w-full px-5 pb-5 rounded-lg">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            {{-- ====================== Akhir Chart Trend Penyakit ======================== --}}

            {{-- ====================== Awal Table rekap bulanan ======================== --}}
            <div
                class="bagan max-h-[25rem] overflow-hidden md:col-span-3 row-span-1 rounded-xl flex flex-col  bg-white  p-4">
                <div
                    class="w-full px-2 mb-4 flex gap-1 items-center h-12 text-slate-100 bg-gradient-to-r from-teal-400 to-teal-500 rounded-lg shadow-md  ">
                    <div class="w-[53%]">
                        <h4 class="text-xs font-semibold">Rekap data penyakit perbulan</h4>
                    </div>
                    <div class="w-[20%] flex justify-end   text-slate-700 ">
                        <select
                            class="select text-xs select-sm h-5 w-full max-w-xs dark:bg-slate-700 dark:border-slate-800 dark:text-slate-200"
                            name="tahun" id="tahun">
                            @php
                                $tahunmulai = 2022;
                                $tahunsekarang = date('Y');
                            @endphp
                            @for ($tahun = $tahunmulai; $tahun <= $tahunsekarang; $tahun++)
                                <option value="{{ $tahun }}" {{ $tahun == $tahunsekarang ? 'selected' : '' }}>
                                    {{ $tahun }}</option>
                            @endfor

                        </select>
                    </div>
                    <div class="w-[28%] flex justify-end   text-slate-700 ">
                        <select
                            class="select text-xs select-sm h-5 w-full max-w-xs dark:bg-slate-700 dark:border-slate-800 dark:text-slate-200"
                            name="bulan" id="bulan">
                            @for ($i = 1; $i <= 12; $i++)
                                <option value="{{ $i }}"{{ date('m') == $i ? 'selected' : '' }}>
                                    {{ $daftarBulan[$i] }}</option>
                            @endfor
                        </select>
                    </div>
                </div>

                <div class="overflow-x-auto max-h-72">
                    <table class="table table-xs border table-pin-rows dark:border-slate-400 dark:text-slate-300">
                        <thead class=" ">
                            <tr class="dark:bg-slate-600 dark:text-slate-300">
                                <th>No</th>
                                <th>Nama Penyakit</th>
                                <th>Total Penyakit</th>
                            </tr>
                        </thead>
                        <tbody id="tampilTable" class="dark:border-slate-400"></tbody>

                    </table>
                </div>
            </div>
            {{-- ====================== Akhir Table rekap bulanan ======================== --}}


            {{-- ====================== Awal Analistik Line Chart Pertahun ======================== --}}
            <div
                class="bagan md:max-h-fit h-96 overflow-hidden md:col-span-5 row-span-1 rounded-xl flex flex-col  bg-white  p-4 mb-5">
                <div class="w-full mb-1 flex justify-center">
                    <h1 class="md:text-xl dark:text-slate-200 text-lg font-semibold text-lcenter text-gray-500">Analisis
                        Perkembangan penyakit dalam satu tahun</h1>
                </div>
                <canvas id="lineChart" class="pb-5"></canvas>
            </div>
            {{-- ====================== Aakhir Analistik Line Chart Pertahun ======================== --}}

        </div>
    </div>



    <script>
        const ctx = document.getElementById("myChart");
        let myChart;
        $(document).ready(function() {
            var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            var bulan = $('#bulan').val();
            var tahun = $('#tahun').val()
            // var tahun = $('#tahun').val();
            console.log(bulan);


            function updateRiwayat() {
                $.ajax({
                    type: "POST",
                    url: "{{ route('analistik.getTable') }}",
                    data: {
                        _token: csrfToken,
                        bulan: bulan,
                        tahun: tahun
                        // tahun: tahun
                    },
                    cache: false,
                    success: function(respon) {
                        // console.log(respon);
                        $('#tampilTable').html(respon);
                    }
                });
            }

            // Panggil fungsi untuk pertama kali saat halaman dimuat
            updateRiwayat();

            $('#bulan').change(function() {
                bulan = $('#bulan').val();

                var spanElement = $('#bulanSpan');
                spanElement.text(bulan);


                updateRiwayat();
                updateGrafik();
            });
            $('#tahun').change(function() {
                tahun = $('#tahun').val();

                var spanElement = $('#tahunSpan');
                spanElement.text(tahun);


                updateRiwayat();
                updateGrafik();
            });


            myChart = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: [],
                    datasets: [{
                        label: "penyakit",
                        data: [],
                        borderWidth: 1,
                        backgroundColor: [
                            '#0d9488',
                        ],
                    }],
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

            updateGrafik();


            function updateGrafik() {
                $.ajax({
                    type: "POST",
                    url: "{{ route('analistik.getGrafik') }}",
                    data: {
                        _token: csrfToken,
                        bulan: bulan,
                        tahun: tahun
                    },
                    cache: false,
                    success: function(respon) {
                        console.log(respon);
                        myChart.data.labels = respon.namaPenyakit;
                        myChart.data.datasets[0].data = respon.jumlahPenyakit;
                        myChart.update(); // Perbarui grafik

                        // $('#tampilGrafik').html(respon);
                    },
                    error: function(xhr, status, error) {
                        // Handle error here
                        console.error("AJAX error: " + status + ", " + error);
                    }
                });
            }


        });
    </script>


    <script>
        var ctxYear = document.getElementById('lineChart').getContext('2d');

        // Data dari kontroler (sesuaikan dengan format data Anda)
        var dataForChart = {!! json_encode($dataForChart) !!};
        var months = {!! json_encode($months) !!};

        var datasets = [];
        for (var penyakit in dataForChart) {
            var data = [];
            for (var i = 0; i < months.length; i++) {
                var jumlah = dataForChart[penyakit][months[i]] || 0;
                data.push(jumlah);
            }
            datasets.push({
                label: penyakit,
                data: data,
                borderColor: getRandomColor(),
                fill: false
            });
        }

        var lineChart = new Chart(ctxYear, {
            type: 'line',
            data: {
                labels: months,
                datasets: datasets
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                          grid: {
                            color: 'rgba(21, 164, 114, 0.33)'
                        },
                        type: 'category',
                        title: {
                            display: true,
                            text: 'Bulan'
                        },
                        ticks: {
                            precision: 0,
                            color: '#0f766e', // Warna teks label sumbu Y
                        }
                    },
                    y: {
                          grid: {
                            color: 'rgba(21, 164, 114, 0.33)'
                        },
                        title: {
                            display: true,
                            text: 'Jumlah Penyakit'
                        },
                        ticks: {
                            precision: 0,
                            color: '#0f766e', // Warna teks label sumbu Y
                        }
                    }
                }
            }
        });

        // Generate warna acak
        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    </script>
@endsection
