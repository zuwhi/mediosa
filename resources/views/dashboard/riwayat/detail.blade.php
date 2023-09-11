@extends('layouts.main')
@section('content')
    {{-- ============================= Awal title menu ================================ --}}
    <div class="w-full flex h-12 md:mb-2 md:mx-0 mx-1 ">
        <div class="flex-1 flex h-full">
            <div class="flex w-fit h-full items-center">
                <div class="box-title md:w-10 md:h-10 w-8 h-8 middle rounded md:mr-3 mr-1">
                    <i class="fa-solid fa-file-waveform text-bluebg"></i>
                </div>
                <div class="flex flex-col">
                    <span class="text-teal-400 md:text-base text-xs font-semibold font-nunito"><a
                            href="{{ route('riwayat.index') }}">Riwayat</a> \ detail</span>
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

    <div class="lg:pr-4 pr-0 w-full h-fit pb-24 rounded-xl grid lg:grid-cols-5 grid-cols-1 overflow-hidden">
        <!-- =================== Detail Riwayat ======================= -->
        <div class="col-span-3 md:ml-0 ml-3 w-[95%] h-full flex flex-col items-center ">
            <div class=" dmode border-slate-300 rounded-xl shadow w-[98%] px-9 ">
                <div class="w-full h-fit flex px-3 py-5 ml-3 items-center">
                    <div class="w-20">
                        <i class="fa-solid fa-user-large text-5xl text-Oldgreen"></i>
                    </div>
                    <div class="">
                        <h2 class="md:text-4xl text-xl text-slate-600 dark:text-slate-200 font-semibold">{{ $pasien->nama }}
                        </h2>
                    </div>
                </div>
                <div class="w-full">
                    <div class="flex items-center">
                        <span class="ml-6 mr-3 text-lg text-slate-500 font-semibold">Detail&nbsp;Pasien</span>
                        <hr class="mr-4 mt-1 border-2 rounded-full w-full border-Oldgreen" />
                    </div>
                    <div
                        class="w-full md:px-6 px-1  mt-5  text-slate-500 dark:text-slate-200  md:text-base text-sm">
                        <div class="flex my-2">
                            <div class="w-[45%]">
                                <h4 class="p-2  dark:bg-slate-700 border rounded-md">Umur</h4>
                            </div>
                            <div class="w-[5%] py-2">
                                <h4 class="text-center">:</h4>
                            </div>
                            <div class="w-[50%] p-2  dark:bg-slate-700  border rounded-md">{{ $pasien->umur }}
                            </div>
                        </div>
                        <div class="flex my-2">
                            <div class="w-[45%]">
                                <h4 class="p-2  dark:bg-slate-700  border rounded-md">Jenis Kelamin</h4>
                            </div>
                            <div class="w-[5%] py-2">
                                <h4 class="text-center">:</h4>
                            </div>
                            <div class="w-[50%] p-2  dark:bg-slate-700  border rounded-md">
                                {{ $pasien->kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</div>
                        </div>
                        <div class="flex my-2">
                            <div class="w-[45%]">
                                <h4 class="p-2  dark:bg-slate-700  border rounded-md">Telepon</h4>
                            </div>
                            <div class="w-[5%] py-2">
                                <h4 class="text-center">:</h4>
                            </div>
                            <div class="w-[50%] p-2  dark:bg-slate-700  border rounded-md">{{ $pasien->telepon }}
                            </div>
                        </div>
                        <div class="flex my-2">
                            <div class="w-[45%]">
                                <h4 class="p-2  dark:bg-slate-700  border rounded-md">Alamat</h4>
                            </div>
                            <div class="w-[5%] py-2">
                                <h4 class="text-center">:</h4>
                            </div>
                            <div class="w-[50%] text-xs p-2  dark:bg-slate-700  border rounded-md">
                                {{ $pasien->alamat }}</div>
                        </div>
                    </div>
                    <div class="flex items-center my-7">
                        <hr class="m-4 mt-1 border-2 rounded-full w-full border-Oldgreen" />
                    </div>
                </div>
            </div>
            <!-- =================== Tabel Riwayat ======================= -->
            <div class="my-5  w-[98%] px-0 overflow-hidden   z-10">
                <div class="w-full">
                    <form action="">
                        <table class="w-full rounded-lg table table-xs">
                            <tr class="bg-Oldgreen text-slate-50">
                                <th class="w-[8%] p-2">NO</th>
                                <th class="w-[20%]">Tanggal</th>
                                <th class="w-[20%]">Penyakit</th>
                                <th class="w-[40%]">Solusi</th>
                            </tr>
                            @foreach ($riwayatPasien as $riwayat)
                                <tr class="border-b dark:text-slate-300 ">
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="">{{ tanggalIndo($riwayat->dataPenyakit->created_at) }}</td>
                                    <td class="">{{ $riwayat->dataPenyakit->nama }}</td>
                                    <td>{{ $riwayat->dataPenyakit->solusi }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <!-- =================== awal Anatomi ======================= -->
        <div class="col-span-2 h-[100vh] flex justify-center md:mt-0 mt-5 overflow-hidden">
            <div class="flex justify-center pr-3">

                {{-- <div class="absolute w-[450px]    rounded-xl h-[44rem] z-10"></div> --}}
                @if ($pasien->kelamin == 'L')
                    <img class="border-img blur-sm hidden mt-2 md:scale-100 scale-75  absolute z-10 w-[378px]"
                        src="{{ asset('assets/image/lanang.png') }}" alt="" />
                    <img class="absolute z-10 md:scale-100 scale-75 mt-2 w-[375px]" src="{{ asset('assets/image/front-m.webp') }}"
                        alt="" />
                @else
                    <img class="border-img blur-sm hidden md:scale-100 scale-75 mt-2 absolute z-10 w-[335px]"
                        src="{{ asset('assets/image/wadon.png') }}" alt="" />
                    <img class="absolute z-10 w-[335px] md:scale-100 scale-75 mt-2" src="{{ asset('assets/image/front-f.webp') }}"
                        alt="" />
                @endif

                <div class="absolute w-[460px] md:scale-100 scale-75 rounded h-[43rem] z-20 pt-2">
                    @foreach ($riwayatPasien as $r)
                        @php
                            $penyakit = $r->dataPenyakit;
                            $posisi = $r->dataPenyakit->lokasi_tubuh;
                        @endphp
                        @if (strtolower($posisi) == 'seluruh tubuh' || strtolower($posisi) == 'tubuh')
                            <script>
                                $('.border-img').removeClass('hidden')
                            </script>
                        @endif

                        <div
                            class=" relative">
                            <div for=""  class="absolute "><button id="showlabel" onclick="showlabel()" class="w-6 h-6 rounded active:bg-slate-300 bg-teal-500 text-white"><i  class="mata-label fa-solid fa-eye"></i></button></div>
                        </div>
                        <script>
                           function showlabel(){
                             $('.riwayat-label').toggleClass('hidden');
                             $('.mata-label').toggleClass('fa-eye fa-eye-slash'); 
                           }
                        </script>

                        <div
                            class="{{ strtolower($posisi) == 'seluruh tubuh' || strtolower($posisi) == 'tubuh' ? 'static' : 'hidden' }} relative">
                            <input class="peer cursor-pointer opacity-0 w-5 h-5 absolute top-4 right-[3px]  z-20"
                                type="checkbox" name="" id="" />
                            <div for="" class="absolute top-4 right-[3px] kotak w-5 h-5"><i
                                    class="fa-solid fa-circle-dot text-lg text-Oldgreen fa-beat-fade"></i></div>
                            @if (strtolower($posisi) == 'seluruh tubuh' || strtolower($posisi) == 'tubuh')
                                <div class="peer-checked:hidden absolute top-4 right-[23px] riwayat-label">
                                    <div class="flex-1 p-1">
                                        <p class="text-slate-800 text-[14px]  text-center leading-5">
                                            {{ $penyakit->nama }}</p>
                                        <div class="flex-1 mt-1 flex items-center justify-between">
                                            <i
                                                class="text-Oldgreen opacity-90 fa-solid fa-person -1 mr-0.5 text-[27px]"></i>
                                            <p class="text-slate-500 text-[10px] w-[80%] text-right">
                                                {{ tanggalIndo($penyakit->created_at) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div
                            class="{{ strtolower($posisi) == 'kepala' || strtolower($posisi) == 'otak' ? 'static' : 'hidden' }} relative">
                            <input class="peer cursor-pointer opacity-0 w-5 h-5 absolute top-3 left-[220px] z-20"
                                type="checkbox" name="" id="" />
                            <div for="" class="absolute top-3 left-[220px] kotak w-5 h-5"><i
                                    class="fa-regular fa-circle-dot text-lg text-Oldgreen fa-beat-fade"></i></div>
                            @if (strtolower($posisi) == 'kepala' || strtolower($posisi) == 'otak')
                                <div class="peer-checked:hidden absolute top-3 left-60 riwayat-label">
                                    <div class="flex-col p-1">
                                        <p class="text-slate-800 text-[14px]  text-center leading-5">
                                            {{ $penyakit->nama }}</p>
                                        <div class="flex-1 mt-1 flex items-center justify-between">
                                            <i
                                                class="text-Oldgreen opacity-90 fa-solid fa-head-side-virus -1 mr-0.5 text-[21px]"></i>
                                            <p class="text-slate-500 text-[10px] w-[80%] text-right">
                                                {{ tanggalIndo($penyakit->created_at) }}</p>
                                        </div>
                                    </div>
                            @endif
                        </div>
                        <div class="{{ strtolower($posisi) == 'mata' ? 'static' : 'hidden' }} relative">
                            <input class="peer cursor-pointer opacity-0 w-5 h-5 absolute top-8 left-[210px] z-20"
                                type="checkbox" name="" id="" />
                            <div for="" class="absolute top-8 left-[210px] kotak w-5 h-5"><i
                                    class="fa-regular fa-circle-dot text-lg text-Oldgreen fa-beat-fade"></i></div>
                            @if (strtolower($posisi) == 'mata')
                                <div class=" absolute top-9 left-[115px] w-fit riwayat-label peer-checked:hidden">
                                    <div class="flex-col p-1">
                                        <p class="text-slate-800 text-[14px]  text-center leading-5">
                                            {{ $penyakit->nama }}</p>
                                        <div class="flex-1 mt-1 flex items-center justify-between">
                                            <i class="text-Oldgreen opacity-90 fa-solid fa-eye -1 mr-0.5 text-[21px]"></i>
                                            <p class="text-slate-500 text-[10px] w-[80%] text-right">
                                                {{ tanggalIndo($penyakit->created_at) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="{{ strtolower($posisi) == 'telinga' ? 'static' : 'hidden' }} relative">
                            <input class="peer cursor-pointer opacity-0 w-5 h-5 absolute top-11 left-[190px] z-20"
                                type="checkbox" name="" id="" />
                            <div for="" class="absolute top-11 left-[190px] kotak w-5 h-5"><i
                                    class="fa-regular fa-circle-dot text-lg text-Oldgreen fa-beat-fade"></i></div>
                            @if (strtolower($posisi) == 'telinga')
                                <div class=" absolute top-[53px] left-[98px] w-fit riwayat-label peer-checked:hidden">
                                    <div class="flex-col p-1">
                                        <p class="text-slate-800 text-[14px]  text-center leading-5">
                                            {{ $penyakit->nama }}</p>
                                        <div class="flex-1 mt-1 flex items-center justify-between">
                                            <i
                                                class="text-Oldgreen opacity-90 fa-solid fa-ear-listen -1 mr-0.5 text-[21px]"></i>
                                            <p class="text-slate-500 text-[10px] w-[80%] text-right">
                                                {{ tanggalIndo($penyakit->created_at) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="{{ strtolower($posisi) == 'hidung' ? 'static' : 'hidden' }}  relative">
                            <input class="peer cursor-pointer opacity-0 w-5 h-5 absolute top-11 left-[220px] z-20"
                                type="checkbox" name="" id="" />
                            <div for="" class="absolute top-11 left-[220px] kotak w-5 h-5"><i
                                    class="fa-regular fa-circle-dot text-lg text-Oldgreen fa-beat-fade"></i></div>
                            @if (strtolower($posisi) == 'hidung')
                                <div class=" absolute top-12 left-[238px] w-fit riwayat-label peer-checked:hidden">
                                    <div class="flex-col p-1">
                                        <p class="text-slate-800 text-[14px]  text-center leading-5">
                                            {{ $penyakit->nama }}</p>
                                        <div class="flex-1 mt-1 flex items-center justify-between">
                                            <i
                                                class="text-Oldgreen opacity-90 fa-solid fa-head-side-mask -1 mr-0.5 text-[21px]"></i>
                                            <p class="text-slate-500 text-[10px] w-[80%] text-right">
                                                {{ tanggalIndo($penyakit->created_at) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="{{ strtolower($posisi) == 'mulut' ? 'static' : 'hidden' }}  relative">
                            <input class="peer cursor-pointer opacity-0 w-5 h-5 absolute top-[60px] left-[220px] z-20"
                                type="checkbox" name="" id="" />
                            <div for="" class="absolute top-[60px] left-[220px] kotak w-5 h-5"><i
                                    class="fa-regular fa-circle-dot text-lg text-Oldgreen fa-beat-fade"></i></div>
                            @if (strtolower($posisi) == 'mulut')
                                <div class=" absolute top-16 left-[240px] w-fit riwayat-label peer-checked:hidden">
                                    <div class="flex-col p-1">
                                        <p class="text-slate-800 text-[14px]  text-center leading-5">
                                            {{ $penyakit->nama }}</p>
                                        <div class="flex-1 mt-1 flex items-center justify-between">
                                            <i
                                                class="text-Oldgreen opacity-90 fa-solid fa-head-side-cough -1 mr-0.5 text-[21px]"></i>
                                            <p class="text-slate-500 text-[10px] w-[80%] text-right">
                                                {{ tanggalIndo($penyakit->created_at) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="{{ strtolower($posisi) == 'tenggorokan' ? 'static' : 'hidden' }}  relative">
                            <input class="peer cursor-pointer opacity-0 w-5 h-5 absolute top-[90px] left-[220px] z-20"
                                type="checkbox" name="" id="" />
                            <div for="" class="absolute top-[90px] left-[220px] kotak w-5 h-5"><i
                                    class="fa-regular fa-circle-dot text-lg text-Oldgreen fa-beat-fade"></i></div>
                            @if (strtolower($posisi) == 'tenggorokan')
                                <div class=" absolute top-[100px] left-[125px] w-fit riwayat-label peer-checked:hidden">
                                    <div class="flex-col p-1">
                                        <p class="text-slate-800 text-[14px]  text-center leading-5">
                                            {{ $penyakit->nama }}</p>
                                        <div class="flex-1 mt-1 flex items-center justify-between">
                                            <i
                                                class="text-Oldgreen opacity-90 fa-regular fa-calendar-check -1 mr-0.5 text-[21px]"></i>
                                            <p class="text-slate-500 text-[10px] w-[80%] text-right">
                                                {{ tanggalIndo($penyakit->created_at) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="{{ strtolower($posisi) == 'jantung' ? 'static' : 'hidden' }}  relative">
                            <input class="peer cursor-pointer absolute top-[145px] left-[220px] opacity-0 w-5 h-5 z-20"
                                type="checkbox" name="" id="" />
                            <div for="" class="absolute top-[145px] left-[220px] kotak w-5 h-5"><i
                                    class="fa-regular fa-circle-dot text-lg text-Oldgreen fa-beat-fade"></i></div>
                            @if (strtolower($posisi) == 'jantung')
                                <div class=" absolute top-[150px] left-[125px] w-fit riwayat-label peer-checked:hidden">
                                    <div class="flex-col p-1">
                                        <p class="text-slate-800 text-[14px]  text-center leading-5">
                                            {{ $penyakit->nama }}</p>
                                        <div class="flex-1 mt-1 flex items-center justify-between">
                                            <i
                                                class="text-Oldgreen opacity-90 fa-regular fa-calendar-check -1 mr-0.5 text-[21px]"></i>
                                            <p class="text-slate-500 text-[10px] w-[80%] text-right">
                                                {{ tanggalIndo($penyakit->created_at) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div
                            class="{{ strtolower($posisi) == 'paru-paru' || strtolower($posisi) == 'payudara' || strtolower($posisi) == 'dada' ? 'static' : 'hidden' }}  relative">
                            <input class="peer cursor-pointer absolute top-[140px] left-[245px] opacity-0 w-5 h-5 z-20"
                                type="checkbox" name="" id="" />
                            <div for="" class="absolute top-[140px] left-[245px] kotak w-5 h-5"><i
                                    class="fa-regular fa-circle-dot text-lg text-Oldgreen fa-beat-fade"></i></div>
                            @if (strtolower($posisi) == 'paru-paru' || strtolower($posisi) == 'payudara' || strtolower($posisi) == 'dada')
                                <div class=" absolute top-[145px] left-[262px] w-fit riwayat-label peer-checked:hidden">
                                    <div class="flex-col p-1">
                                        <p class="text-slate-800 text-[14px]  text-center leading-5">
                                            {{ $penyakit->nama }}</p>
                                        <div class="flex-1 mt-1 flex items-center justify-between">
                                            <i
                                                class="text-Oldgreen opacity-90 fa-solid fa-lungs-virus -1 mr-0.5 text-[21px]"></i>
                                            <p class="text-slate-500 text-[10px] w-[80%] text-right">
                                                {{ tanggalIndo($penyakit->created_at) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="{{ strtolower($posisi) == 'tangan' ? 'static' : 'hidden' }} relative">
                            <input class="peer cursor-pointer absolute top-[250px] left-[345px] opacity-0 w-5 h-5 z-20"
                                type="checkbox" name="" id="" />
                            <div for="" class="absolute top-[250px] left-[345px] kotak w-5 h-5"><i
                                    class="fa-regular fa-circle-dot text-lg text-Oldgreen fa-beat-fade"></i></div>
                            @if (strtolower($posisi) == 'tangan')
                                <div class=" absolute top-[260px] left-[360px] w-fit riwayat-label peer-checked:hidden">
                                    <div class="flex-col p-1">
                                        <p class="text-slate-800 text-[14px]  text-center leading-5">
                                            {{ $penyakit->nama }}</p>
                                        <div class="flex-1 mt-1 flex items-center justify-between">
                                            <i class="text-Oldgreen opacity-90 fa-solid fa-hand -1 mr-0.5 text-[21px]"></i>
                                            <p class="text-slate-500 text-[10px] w-[80%] text-right">
                                                {{ tanggalIndo($penyakit->created_at) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div
                            class="{{ strtolower($posisi) == 'perut' || strtolower($posisi) == 'usus' ? 'static' : 'hidden' }} relative">
                            <input class="peer cursor-pointer absolute top-[235px] left-[220px] opacity-0 w-5 h-5 z-20"
                                type="checkbox" name="" id="" />
                            <div for="" class="absolute top-[235px] left-[220px] kotak w-5 h-5"><i
                                    class="fa-regular fa-circle-dot text-lg text-Oldgreen fa-beat-fade"></i></div>
                            @if (strtolower($posisi) == 'perut' || strtolower($posisi) == 'usus')
                                <div class="absolute top-[245px] left-[230px] w-fit riwayat-label peer-checked:hidden">
                                    <div class="flex-col p-1">
                                        <p class="text-slate-800 text-[14px]  text-center leading-5">
                                            {{ $penyakit->nama }}</p>
                                        <div class="flex-1 mt-1 flex items-center justify-between">
                                            <i
                                                class="text-Oldgreen opacity-90 fa-solid fa-shield-virus -1 mr-0.5 text-[21px]"></i>
                                            <p class="text-slate-500 text-[10px] w-[80%] text-right">
                                                {{ tanggalIndo($penyakit->created_at) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="{{ strtolower($posisi) == 'ginjal' ? 'static' : 'hidden' }} relative">
                            <input class="peer cursor-pointer absolute top-[250px] left-[185px] opacity-0 w-5 h-5 z-20"
                                type="checkbox" name="" id="" />
                            <div for="" class="absolute top-[250px] left-[185px] kotak w-5 h-5"><i
                                    class="fa-regular fa-circle-dot text-lg text-Oldgreen fa-beat-fade"></i></div>
                            <div class="absolute top-[260px] left-[95px] w-fit riwayat-label peer-checked:hidden ">
                                @if (strtolower($posisi) == 'ginjal')
                                    <div class="flex-col p-1">
                                        <p class="text-slate-800 text-[14px]  text-center leading-5">
                                            {{ $penyakit->nama }}</p>
                                        <div class="flex-1 mt-1 flex items-center justify-between">
                                            <i
                                                class="text-Oldgreen opacity-90 fa-regular fa-calendar-check -1 mr-0.5 text-[21px]"></i>
                                            <p class="text-slate-500 text-[10px] w-[80%] text-right">
                                                {{ tanggalIndo($penyakit->created_at) }}</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="{{ strtolower($posisi) == 'kemaluan' ? 'static' : 'hidden' }}  relative">
                            <input class="peer cursor-pointer absolute top-[305px] left-[223px] opacity-0 w-5 h-5 z-20"
                                type="checkbox" name="" id="" />
                            <label for="" class="absolute top-[305px] left-[223px] kotak w-5 h-5"><i
                                    class="fa-regular fa-circle-dot text-lg text-Oldgreen fa-beat-fade"></i></label>
                            @if (strtolower($posisi) == 'kemaluan')
                                <div class="absolute top-[320px] left-[233px] w-fit riwayat-label peer-checked:hidden">
                                    <div class="flex-col p-1">
                                        <p class="text-slate-800 text-[14px]  text-center leading-5">
                                            {{ $penyakit->nama }}</p>
                                        <div class="flex-1 mt-1 flex items-center justify-between">
                                            <i
                                                class="text-Oldgreen opacity-90 fa-regular fa-calendar-check -1 mr-0.5 text-[21px]"></i>
                                            <p class="text-slate-500 text-[10px] w-[80%] text-right">
                                                {{ tanggalIndo($penyakit->created_at) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="{{ strtolower($posisi) == 'tulang' ? 'static' : 'hidden' }}  relative">
                            <input class="peer cursor-pointer absolute top-[360px] left-[175px] opacity-0 w-5 h-5 z-20"
                                type="checkbox" name="" id="" />
                            <label for="" class="absolute top-[360px] left-[175px] kotak w-5 h-5"><i
                                    class="fa-regular fa-circle-dot text-lg text-Oldgreen fa-beat-fade"></i></label>
                            @if (strtolower($posisi) == 'tulang')
                                <div class="absolute top-[373px] left-[85px] w-fit riwayat-label peer-checked:hidden">
                                    <div class="flex-col p-1">
                                        <p class="text-slate-800 text-[14px]  text-center leading-5">
                                            {{ $penyakit->nama }}</p>
                                        <div class="flex-1 mt-1 flex items-center justify-between">
                                            <i class="text-Oldgreen opacity-90 fa-solid fa-bone mr-0.5 text-[21px]"></i>
                                            <p class="text-slate-500 text-[10px] w-[80%] text-right">
                                                {{ tanggalIndo($penyakit->created_at) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="{{ strtolower($posisi) == 'sendi' ? 'static' : 'hidden' }}  relative">
                            <input class="peer cursor-pointer absolute top-[450px] left-[275px] opacity-0 w-5 h-5 z-20"
                                type="checkbox" name="" id="" />
                            <label for="" class="absolute top-[450px] left-[275px] kotak w-5 h-5"><i
                                    class="fa-regular fa-circle-dot text-lg text-Oldgreen fa-beat-fade"></i></label>
                            @if (strtolower($posisi) == 'sendi')
                                <div class=" absolute top-[460px] left-[295px] w-fit riwayat-label peer-checked:hidden">
                                    <div class="flex-col p-1">
                                        <p class="text-slate-800 text-[14px]  text-center leading-5">
                                            {{ $penyakit->nama }}</p>
                                        <div class="flex-1 mt-1 flex items-center justify-between">
                                            <i
                                                class="text-Oldgreen opacity-90 fa-regular fa-calendar-check -1 mr-0.5 text-[21px]"></i>
                                            <p class="text-slate-500 text-[10px] w-[80%] text-right">
                                                {{ tanggalIndo($penyakit->created_at) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="{{ strtolower($posisi) == 'kaki' ? 'static' : 'hidden' }}  relative">
                            <input class="peer cursor-pointer absolute top-[530px] left-[155px] opacity-0 w-5 h-5 z-20"
                                type="checkbox" name="" id="" />
                            <label for="" class="absolute top-[530px] left-[155px] kotak w-5 h-5"><i
                                    class="fa-regular fa-circle-dot text-lg text-Oldgreen fa-beat-fade"></i></label>
                            @if (strtolower($posisi) == 'kaki')
                                <div class=" absolute top-[550px] left-[60px] w-fit riwayat-label peer-checked:hidden">
                                    <div class="flex-col p-1">
                                        <p class="text-slate-800 text-[14px]  text-center leading-5">
                                            {{ $penyakit->nama }}</p>
                                        <div class="flex-1 mt-1 flex items-center justify-between">
                                            <i
                                                class="text-Oldgreen opacity-90 fa-regular fa-calendar-check -1 mr-0.5 text-[21px]"></i>
                                            <p class="text-slate-500 text-[10px] w-[80%] text-right">
                                                {{ tanggalIndo($penyakit->created_at) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- =================== awal Anatomi ======================= -->
    </div>

    @php
        function tanggalIndo($date)
        {
            $dateString = $date;
            $dateComponents = explode(' ', $dateString);
            $date = $dateComponents[0];
            $time = $dateComponents[1];
        
            $dateParts = explode('-', $date);
            $day = $dateParts[2];
            $monthNumber = $dateParts[1];
            $year = $dateParts[0];
        
            $months = [
                1 => 'Januari',
                2 => 'Februari',
                3 => 'Maret',
                4 => 'April',
                5 => 'Mei',
                6 => 'Juni',
                7 => 'Juli',
                8 => 'Agustus',
                9 => 'September',
                10 => 'Oktober',
                11 => 'November',
                12 => 'Desember',
            ];
        
            return $formattedDate = $day . ' ' . $months[(int) $monthNumber] . ' ' . $year;
        }
        
    @endphp
@endsection
