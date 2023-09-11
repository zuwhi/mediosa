@extends('layouts.main')

@section('content')
    {{-- ============================= Awal title menu ================================ --}}
    <div class="w-full flex h-12 md:mb-2 md:mx-0 mx-1 ">
        <div class="flex-1 flex h-full">
            <div class="flex w-fit h-full items-center">
                <div class="box-title md:w-10 md:h-10 w-8 h-8 middle rounded md:mr-3 mr-1">
                    <i class="fa-solid fa-stethoscope text-bluebg"></i>
                </div>
                <div class="flex flex-col">
                    <span class="text-teal-400 md:text-base text-xs font-semibold font-nunito"><a
                            href="{{ route('diagnosis.index') }}">Diagnosis</a> \ result</span>
                    <span class="md:text-sm text-slate-500 text-xs whitespace-nowrap font-quicksand">Cari tahu penyakit
                        pasien</span>
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


    <div class="flex md:mt-0  min-h-screen">
        <div class="ml-1 md:p-7 p-1 md:w-[98%] w-full rounded-lg md:shadow-lg dmode border h-fit ">
            <h1 class="md:block hidden text-xl font-semibold md:text-left text-center  text-slate-700 dark:text-slate-200">
                Hasil Prediksi </h1>
            <div class="grid lg:grid-cols-12 grid-cols-1 md:mt-6 mt-1 w-full  md:border-0 border-4 rounded-lg ">
                <div
                    class="p-5 h-fit  col-span-7 flex flex-col justify-center md:shadow-lg rounded-lg md:ring-1 ring-slate-300 md:mx-5 mx-1">
                    <h2 class="lg:text-5xl text-4xl font-semibold text-Oldgreen">
                        {{ $hasilDiagnosis->nama ?? 'Penyakit Tidak ditemukan' }}</h2>
                    <h3 class="md:text-xl md:ml-3 md:mt-8 mt-1 font-medium text-slate-500 dark:text-slate-300">Penanganan :
                    </h3>
                    <p class="md:text-lg md:mt-2 md:pl-3 text-slate-500  dark:text-slate-300">Dari gejala yang diinputkan
                        yaitu {{ $inputData }} kami memberikan solusi sebagai berikut </p>
                    <p class="md:text-lg md:mt-2 text-slate-500 md:pl-3 dark:text-slate-300">
                        {{ $hasilDiagnosis->solusi ?? 'tidak ada' }}</p>
                </div>
                <div class="lg:mt-0 md:mt-5 mt-2 mb-3 col-span-5 w-full   flex flex-col items-center justify-center h-fit">
                    <p class="md:text-xl font-semibold">Presentase :</p>
                    <div class="lg:my-5 my-2 h-11" role="progressbar" aria-valuenow="{{ $akurasi ?? 0 }}" aria-valuemin="0"
                        aria-valuemax="100" style="--value: {{ round($akurasi ?? 0) }}"></div>
                </div>
            </div>
            <form id="riwayatPasien" action="{{ route('riwayat.store') }}" method="post">
                @csrf
                <input type="hidden" name="data_pasien_id" value="{{ $pasien->id }}" />
                <input type="hidden" name="data_penyakit_id" value="{{ $hasilDiagnosis->id ?? '' }}" />
                {{-- <input type="hidden" name="tanggal" value="{{ now()->toDateString() }}" /> --}}
                <div class="w-full lg:mt-6 mt-3 flex justify-end md:my-0 my-3">
                    <button type="submit"
                        class="hover:bg-teal-700 hover:text-slate-200 bg-Oldgreen py-2 px-3 rounded-lg lg:w-36 text-white font-semibold text-xl {{ $hasilDiagnosis->nama == 'Penyakit Tidak Ditemukan' ? 'hidden' : '' }}">Confirmation</button>
                </div>
        </div>
    </div>
    </form>














    <style>
        @keyframes growProgressBar {

            0%,
            33% {
                --pgPercentage: 0;
            }

            100% {
                --pgPercentage: var(--value);
            }
        }

        @property --pgPercentage {
            syntax: "<number>";
            inherits: false;
            initial-value: 0;
        }

        div[role="progressbar"] {
            --size: 12rem;
            --fg: #47878e;
            --bg: #def;
            --pgPercentage: var(--value);
            animation: growProgressBar 3s 1 forwards;
            width: var(--size);
            height: var(--size);
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: radial-gradient(closest-side, white 80%, transparent 0 99.9%, white 0), conic-gradient(var(--fg) calc(var(--pgPercentage) * 1%), var(--bg) 0);
            font-family: Helvetica, Arial, sans-serif;
            font-size: calc(var(--size) / 5);
            color: var(--fg);
        }

        div[role="progressbar"]::before {
            counter-reset: percentage var(--value);
            content: counter(percentage) "%";
        }
    </style>
    </div>
@endsection
