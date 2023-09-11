@extends('layouts.main')
@section('content')
    {{-- ============================= Awal title menu ================================ --}}
    <div class="w-full flex h-12 md:mb-2 md:mx-0 mx-1 ">
        <div class="flex-1 flex h-full">
            <div class="flex w-fit h-full items-center">
                <div class="box-title md:w-10 md:h-10 w-8 h-8 middle rounded md:mr-3 mr-1">
                    <i class="fa-solid fa-user-plus text-bluebg"></i>
                </div>
                <div class="flex flex-col">
                    <span class="text-teal-400 md:text-base text-xs font-semibold font-nunito">Input Pasien</span>
                    <span class="md:text-sm text-slate-500 text-xs whitespace-nowrap font-quicksand">Kelola data
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

    <div class="w-full  min-h-screen ">


        <div class="  ">
            <div class=" md:py-2  flex items-center">
                <div class="flex-1 ">
                    <div class="relative text-gray-600 focus-within:text-gray-400">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                            <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
                                <i class="fa-solid fa-magnifying-glass text-slate-400 dark:text-slate-300"></i>
                            </button>
                        </span>
                        <input type="search" name="q" id="searchInput"
                            class="w-[70%] focus:w-[90%] transition-all duration-300 dmode py-2 md:h-10 h-8 text-sm text-white outline-none border-slate-300 dark:border-slate-600  focus:border-Oldgreen focus:ring-0  shadow-sm rounded-lg pl-10 focus:outline-none  focus:text-gray-900 dark:focus:text-white"
                            placeholder="cari pasien ..." autocomplete="off">
                    </div>
                </div>
                <div class="flex-1 flex justify-end">
                    <button
                        class=" text-white bg-teal-400 dark:bg-teal-600 hover:bg-slate-300 hover:scale-95 transition duration-200 md:py-2 py-1 md:px-3 px-1 rounded-md"
                        onclick="my_modal_3.showModal()"><i class="mr-2 fa-solid fa-user-plus"></i>Input Pasien</button>
                </div>
            </div>
            <div id="tabel">

            </div>

        </div>
    </div>

    {{-- //////////////////// start modal input \\\\\\\\\\\\\\\\\\\\\\\\\ --}}
    <dialog id="my_modal_3" class="modal">
        <div class="modal-box  max-w-4xl dark:bg-slate-700">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2 dark:text-slate-200">✕</button>
            </form>
            <p class="w-full text-2xl text-Oldgreen font-bold text-center">Input Pasien</p>
            <form id="pasienForm" action="{{ route('pasien.store') }}" method="post" class="[&>input]:bg-transparent">
                @csrf
                <div class="form my-3">
                    <label for="nama" class="block mb-2 text-md font-medium text-slate-600 dark:text-white">Nama Pasien
                        :</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <i class="text-gray-500 fa-solid fa-circle-user text-xl"></i>
                        </div>
                        <input type="text" name="nama" id="nama" required
                            class="input-custom"                            placeholder="Masukan nama pasien" />
                    </div>
                </div>
                <div class="form my-3">
                    <label for="umur" class="block mb-2 text-md font-medium text-slate-600 dark:text-white">Umur
                        :</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <i class="text-gray-500 fa-solid fa-person-cane text-xl"></i>
                        </div>
                        <input type="number" name="umur" id="umur" required
                            class="input-custom"
                            placeholder="Masukan umur pasien" />
                    </div>
                </div>
                <div class="form my-3">
                    <label for="alamat" class="block mb-2 text-md font-medium text-slate-600 dark:text-white">Alamat
                        :</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <i class="text-gray-500 fa-solid fa-location-dot text-xl"></i>
                        </div>
                        <input type="text" name="alamat" id="alamat"
                            class="input-custom"
                            placeholder="Masukan alamat pasien" />
                    </div>
                </div>
                <div class="form my-3">
                    <label for="telepon"
                        class="block mb-2 text-md font-medium text-slate-600 dark:text-white">Telepon:</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <i class="text-gray-500 fa-solid fa-phone text-xl"></i>
                        </div>
                        <input type="text" name="telepon" id="telepon"
                            class="input-custom"
                            placeholder="Masukan telepon pasien" />
                    </div>
                </div>
                <div class="form my-3">
                    <label for="kelamin"
                        class="block mb-2 text-md font-medium text-slate-600 dark:text-white">Kelamin:</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <i class="text-gray-500 fa-solid fa-venus-mars text-xl"></i>
                        </div>
                        <select required name="kelamin" id="kelamin"
                            class="input-custom">
                            <option value="none" selected disabled hidden>
                                Pilih jenis kelamin
                            </option>
                            <option value="L">Laki - laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="w-full flex justify-end mt-6 ">
                    <button type="submit"
                        class="addPasien w-fit bg-teal-500 rounded-md md:text-lg text-white font-semibold md:py-2 md:px-5 py-1.5 px-4">Submit</button>
                </div>
            </form>
        </div>
    </dialog>
    {{-- //////////////////// end modal input \\\\\\\\\\\\\\\\\\\\\\\\\ --}}




    <script>
        $(document).ready(function() {
            read()

            function read() {
                $.get("{{ route('pasien.read') }}", {}, function(data, status) {
                    // console.log(data);
                    $('#tabel').html(data);
                })

            }

            //====================== START INPUT PASIEN ==============================
            $("#pasienForm").submit(function(e) {
                e.preventDefault();
                var formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: "{{ route('pasien.store') }}",
                    data: formData,
                    success: function(response) {
                        console.log(response);
                        my_modal_3.close();
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: `data berhasil ditambahkan`,
                            showConfirmButton: false,
                            timer: 1500
                        })
                        read()
                    },
                    error: function(error) {

                        console.log(error);
                    }
                });
            });
            //========================= END INPUT PASIEN ==============================

            $('#btnEdit').click(function() {
                alert('ok')

                $('#modalEdit').addClass('modal-open')

            })

            $(document).ready(function() {
                $('#searchInput').keyup(function() {
                    const searchValue = $(this).val().toLowerCase();
                    $('#dataTable tbody tr').filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(searchValue) > -
                            1);
                    });
                });
            });






            //========================= START EDIT PASIEN ==============================


            //=========================== END EDIT PASIEN ==============================

        });
    </script>
@endsection
