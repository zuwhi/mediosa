@extends('layouts.main')
@section('content')
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: '{{ session('success') }}',
            });
        </script>
    @endif
    {{-- ============================= Awal title menu ================================ --}}
    <div class="w-full flex h-12 md:mb-2 md:mx-0 mx-1 ">
        <div class="flex-1 flex h-full">
            <div class="flex w-fit h-full items-center">
                <div class="box-title md:w-10 md:h-10 w-8 h-8 middle rounded md:mr-3 mr-1">
                    <i class="fa-solid fa-file-waveform text-bluebg"></i>
                </div>
                <div class="flex flex-col">
                    <span class="text-teal-400 md:text-base text-xs font-semibold font-nunito">Riwayat</span>
                    <span class="md:text-sm text-slate-500 text-xs whitespace-nowrap font-quicksand">Cek detail penyakit
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

    <div class="min-h-screen ">
        <div class=" md:py-2 ">
            <div class="  flex items-center">
                <div class="flex-1 ">
                </div>
                <div class="flex-1 flex justify-end ">
                    <div class="relative text-gray-600 focus-within:text-gray-400 md:w-[80%] ">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                            <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
                                <i class="fa-solid fa-magnifying-glass text-slate-400 dark:text-slate-300"></i>
                            </button>
                        </span>
                        <input type="search" name="q" id="searchInput"
                            class="w-full dmode md:h-10 h-8  dark:focus:text-white shadow-md py-2 text-sm text-white outline-none border-slate-300  focus:border-Oldgreen focus:ring-0   rounded-xl pl-10 focus:outline-none  focus:text-gray-900"
                            placeholder="cari pasien" autocomplete="off">
                    </div>
                </div>

            </div>
            <div class="overflow-auto lg:overflow-visible ">
    <table class="table text-gray-400 border-separate space-y-6 text-sm" id="dataTable">
        <thead class="bg-teal-400 dark:bg-teal-700 text-white dark:text-slate-300">
            <tr>
                <th class="p-3 text-left">No</th>
                <th class="p-3 text-left">Tanggal</th>
                <th class="p-3 text-left">Nama Pasien</th>
                <th class="p-3 text-left">L/P</th>
                <th class="p-3 text-left">Nama Penyakit</th>
                <th class="p-3 text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($riwayatPasien as $riwayat)
                <tr class="bg-slate-200 dark:text-slate-200 shadow rounded-xl text-slate-500 {{ $loop->iteration % 2 == 0 ? 'bg-white dark:bg-slate-700' : 'bg-slate-50 dark:bg-slate-600' }}">
                    <td class="p-3 ">
                        <div class="text-gray-500">{{ $loop->iteration }}</div>
                    </td>
                    <td class="p-3 ">
                        {{ date('d-m-y', strtotime($riwayat->created_at)) }}
                    </td>
                    <td class="p-3">
                        {{ $riwayat->dataPasien->nama }}
                    </td>
                    <td class="p-3">
                        <span class=" ">{{ $riwayat->dataPasien->kelamin }}</span>
                    </td>
                    <td class="p-3 ">
                      {{ $riwayat->dataPenyakit->nama }}
                    </td>
                    <td class="p-3 text-center ">
                             <a href="{{ route('riwayat.detail', $riwayat->dataPasien->id) }}"
                                        class="p-2 px-5 text-center rounded-lg font-semibold text-white bg-teal-500 hover:bg-slate-300 hover:scale-50 hover:text-slate-500 ">
                                        detail</a>
                    </td>
                    
                </tr>
            @endforeach

        </tbody>
    </table>


</div>
<style>
    .table {
        border-spacing: 0 15px;
    }

    i {
        font-size: 1rem !important;
    }



    tr td:nth-child(n+6),
    tr th:nth-child(n+6) {
        border-radius: 0 .625rem .625rem 0;
    }

    tr td:nth-child(1),
    tr th:nth-child(1) {
        border-radius: .625rem 0 0 .625rem;
    }
</style>


{{-- 
            <div class="overflow-x-auto">
                <table class="table md:table-lg table-sm min-w-full border " id="dataTable">
                    <thead class="border-b overflow-hidden font-medium bg-teal-600 text-slate-50">
                        <tr>
                            <th scope="col" class="">No</th>
                            <th scope="col" class="">Tanggal </th>
                            <th scope="col" class="">Nama Pasien</th>
                            <th scope="col" class="">L/P</th>
                            <th scope="col" class="">Nama Penyakit</th>
                            <th scope="col" class="text-center">Detail Pasien</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($riwayatPasien as $riwayat)
                            <tr
                                class="border-b  dark:text-slate-300 {{ $loop->iteration % 2 == 0 ? 'bg-slate-50 dark:bg-slate-700' : 'bg-slate-100 dark:bg-slate-600' }}">

                                <td class="">
                                    {{ $loop->iteration }}</td>
                                <td class="">
                                    {{ date('d-m-y', strtotime($riwayat->created_at)) }}</td>
                                <td class="">
                                    {{ $riwayat->dataPasien->nama }}</td>
                                <td class=" ">
                                    {{ $riwayat->dataPasien->kelamin }}</td>
                                <td class=" ">
                                    {{ $riwayat->dataPenyakit->nama }}</td>
                                <td class="text-center">
                                    <a href="{{ route('riwayat.detail', $riwayat->dataPasien->id) }}"
                                        class="p-2 px-5 rounded-lg font-semibold text-white bg-teal-500 hover:bg-slate-300 hover:scale-50 hover:text-slate-500 ">
                                        detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> --}}

        </div>

    </div>


    {{-- <div class="w-full min-h-screen  flex md:mt-0 -mt-4">
        <div class="md:w-[98%] flex  h-full pb-5">
            <div class="md:mb-2   border-2 border-slate-200 rounded-lg shadow-md md:w-[98%] px-0 h-fit pb-8 z-10">
                <div class="flex items-center ">
                    <div class="md:w-[100%] w-[70%]">
                        <h3 class="mt-8 md:ml-6 ml-2 whitespace-nowrap flex-1 text-xl text-slate-700 "></h3>
                    </div>
                    <div class="flex w-full   m-3 items-center justify-end relative ">
                        <i class="text-2xl relative left-9 fa-solid fa-search text-gray-400"></i>
                        <input
                            class="md:w-[70%] w-[100%] shadow-md ring-1 ring-slate-200 pl-12 md:py-3 py-1.5 border-none placeholder-gray-400 text-black dark:bg-slate-700 rounded-xl focus:outline-none"
                            type="text" id="searchInput" oninput="" class="form-control" placeholder="Cari Pasien" />
                    </div>
                </div>
                <div class="w-full md:px-6 px-1">
                    <div class="w-full border rounded-md overflow-hidden">
                        <form action="">
                            <div class="overflow-x-auto">
                               <table class="table md:table-lg table-lg min-w-full " id="dataTable">
                                <thead class="border-b overflow-hidden font-medium bg-teal-600 text-slate-50">
                                    <tr>
                                        <th scope="col" class="">No</th>
                                        <th scope="col" class="">Tanggal </th>
                                        <th scope="col" class="">Nama Pasien</th>
                                        <th scope="col" class="">L/P</th>
                                        <th scope="col" class="">Nama Penyakit</th>
                                        <th scope="col" class="text-center">Detail Pasien</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($riwayatPasien as $riwayat)
                                        <tr class="border-b  dark:text-slate-300 {{ ( $loop->iteration  % 2 == 0)? 'bg-slate-50 dark:bg-slate-700' : 'bg-slate-100 dark:bg-slate-600' }}">

                                            <td class="">
                                                {{ $loop->iteration }}</td>
                                            <td class="">
                                                {{date('d-m-y', strtotime( $riwayat->created_at)) }}</td>
                                            <td class="">
                                                {{ $riwayat->dataPasien->nama }}</td>
                                            <td class=" ">
                                                {{ $riwayat->dataPasien->kelamin }}</td>
                                            <td class=" ">
                                                {{ $riwayat->dataPenyakit->nama }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('riwayat.detail', $riwayat->dataPasien->id) }}"
                                                    class="p-2 px-5 rounded-lg font-semibold text-white bg-teal-500 hover:bg-slate-300 hover:scale-50 hover:text-slate-500 ">
                                                     Lihat detail</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <script>
        $(document).ready(function() {
            $('#searchInput').keyup(function() {
                const searchValue = $(this).val().toLowerCase();
                $('#dataTable tbody tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(searchValue) > -1);
                });
            });
        });
    </script>
@endsection
