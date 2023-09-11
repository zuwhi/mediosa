<div class="overflow-auto lg:overflow-visible ">
    <table class="table text-gray-400 border-separate space-y-6 text-sm" id="dataTable">
        <thead class="bg-teal-400 dark:bg-teal-600 text-white dark:text-slate-300">
            <tr>
                <th class="p-3 text-left">No</th>
                <th class="p-3 text-left">Nama Pasien</th>
                <th class="p-3 text-left">Username</th>
                <th class="p-3 text-left">Umur</th>
                <th class="p-3 text-left">Alamat</th>
                <th class="p-3 text-left">Telepon</th>
                <th class="p-3 text-left">L/P</th>
                <th class="p-3 text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasiens as $pasien)
                <tr class="bg-slate-200 dark:text-slate-200 shadow rounded-xl text-slate-500 {{ $loop->iteration % 2 == 0 ? 'bg-white dark:bg-slate-700' : 'bg-slate-50 dark:bg-slate-600' }}">
                    <td class="p-3 ">
                        <div class="text-gray-500 dark:text-slate-200">{{ $loop->iteration }}</div>
                    </td>
                    <td class="p-3 ">
                        {{ $pasien->nama }}
                    </td>
                    <td class="p-3">
                        <span class="bg-teal-400 dark:bg-teal-700 text-gray-50 rounded-md px-2 py-1 "> {{ $pasien->username }}</span>
                    </td>
                    <td class="p-3 text-center">
                        <span class=" ">{{ $pasien->umur }}</span>
                    </td>
                    <td class="p-3 ">
                        <a href="#" class="text-gray-400 dark:text-slate-200 hover:text-gray-800 ">
                            <i class="material-icons-outlined text-base">{{ $pasien->alamat }}</i>
                        </a>
                    </td>
                    <td class="p-3 ">
                        {{ $pasien->telepon }}
                    </td>
                    <td class="p-3 font-bold">
                        
                        {{ $pasien->kelamin }}
                    </td>
             
                    <td class="px-5 w-24">
                        <div class="flex">
                        <button data-id="{{ $pasien->id }}" data-nama="{{ $pasien->nama }}"
                            data-umur="{{ $pasien->umur }}" data-alamat="{{ $pasien->alamat }}"
                            data-telepon="{{ $pasien->telepon }}" data-kelamin="{{ $pasien->kelamin }}"
                            class="btnEdit text-white mr-3 md:text-sm text-[10px] w-8 h-8 bg-teal-400 dark:bg-teal-700 rounded-lg"><i
                                class="fa-regular fa-xl fa-pen-to-square "></i></button>


                        <button class="btnDelete md:text-sm text-white   text-[10px] w-8 h-8 bg-red-500 dark:bg-red-700 rounded-lg" data-id="{{ $pasien->id }}"
                            data-action="{{ route('pasien.destroy', $pasien->id) }}"><i
                                class="fa-regular fa-xl fa-trash-can"></i></button>
                                </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
        {{-- //////////////////// start modal edit \\\\\\\\\\\\\\\\\\\\\\\\\ --}}
    <dialog id="modalEdit" class="modal">
        <div class="modal-box max-w-4xl dark:bg-slate-700">
            <form method="dialog">
                <button class="btnClose_2 btn btn-sm btn-circle btn-ghost absolute right-2 top-2 dark:text-slate-200">✕</button>
            </form>
            <p class="w-full text-2xl text-Oldgreen font-bold text-center">Edit Pasien</p>
            <form id="modalForm" method="post" class="[&>input]:bg-transparent">
                @csrf
                <input id="idPasien" type="hidden" name="">
                <div class="form my-3">
                    <label for="nama" class="block mb-2 text-md font-medium text-slate-600 dark:text-white">Nama
                        Pasien
                        :</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <i class="text-gray-500 fa-solid fa-circle-user text-xl"></i>
                        </div>
                        <input type="text" name="nama" id="nama" required
                            class="input-custom"
                            placeholder="Masukan nama pasien" />
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
                        class="block mb-2 text-md font-medium text-slate-600 dark:text-white">telepon:</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <i class="text-gray-500 fa-solid fa-phone text-xl"></i>
                        </div>
                        <input type="text" type="text" name="telepon" id="telepon"
                            class="input-custom"
                            placeholder="Masukan telepon pasien" />
                    </div>
                    <div class="form my-3">
                        <label for="kelamin"
                            class="block mb-2 text-md font-medium text-slate-600 dark:text-white">kelamin:</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                <i class="text-gray-500 fa-solid fa-venus-mars text-xl"></i>
                            </div>
                            <select name="kelamin" id="kelamin"
                                class="input-custom"
                                placeholder="Masukan kelamin pasien">
                                <option value="" selected disabled hidden>Pilih kelamin</option>
                                <option value="L">Laki - laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button type="button"
                            class="btnClose_2 bg-gray-300 text-slate-600 font-bold py-2 px-4 rounded mr-2 close-modal">Batal</button>
                        <button type="button" id="submitBtn"
                            class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                    </div>
            </form>
        </div>
    </dialog>

    {{-- //////////////////// end modal edit \\\\\\\\\\\\\\\\\\\\\\\\\ --}}

    <script>
        $(document).ready(function() {
            function read() {
                $.get("{{ route('pasien.read') }}", {}, function(data, status) {
                    // console.log(data);
                    $('#tabel').html(data);
                })

            }

            $('.btnEdit').click(function() {
                var id = $(this).data('id');
                var nama = $(this).data('nama');
                var umur = $(this).data('umur');
                var alamat = $(this).data('alamat');
                var telepon = $(this).data('telepon');
                var kelamin = $(this).data('kelamin');

                // Mengisi nilai-nilai dalam modal dengan data yang didapatkan
                $("#idPasien").val(id);
                $("#nama").val(nama);
                $("#umur").val(umur);
                $("#alamat").val(alamat);
                $("#telepon").val(telepon);

                $("#kelamin").val(kelamin);
                $('#modalEdit').addClass('modal-open');
            });

            $('.btnClose_2').click(function() {
                $('#modalEdit').removeClass('modal-open');
            });

            $('#submitBtn').click(function() {
                var id = $("#idPasien").val();
                var nama = $("#nama").val();
                var umur = $("#umur").val();
                var alamat = $("#alamat").val();
                var telepon = $("#telepon").val();
                var kelamin = $("#kelamin").val();
                // Data yang akan dikirim ke server
                var data = {
                    _token: "{{ csrf_token() }}", // Token CSRF
                    _method: "PATCH", // Metode HTTP untuk pembaruan
                    nama: nama,
                    umur: umur,
                    alamat: alamat,
                    telepon: telepon,
                    kelamin: kelamin
                };

                // Mengirim permintaan AJAX untuk update data
                $.ajax({
                    url: "{{ route('pasien.update', '') }}/" + id,
                    type: "POST",
                    data: data, // Data yang akan dikirim
                    success: function(response) {

                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: `${response.message}`,
                            showConfirmButton: false,
                            timer: 1500
                        })
                        $('#modalEdit').removeClass('modal-open');
                        read()
                    },
                    error: function(error) {
                        // Menangani kesalahan jika permintaan gagal
                        console.error(error);
                    }
                });
            });

            $('.btnDelete').click(function() {
                var id = $(this).data('id');
                let token = $("meta[name='csrf-token']").attr("content");
                swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Tindakan ini tidak dapat diurungkan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {

                        console.log('test');

                        //fetch to delete data
                        $.ajax({

                            url: `/dashboard/pasien/hapus/${id}`,
                            type: "DELETE",
                            cache: false,
                            data: {
                                "_token": token
                            },
                            success: function(response) {

                                //show success message
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: `${response.message}`,
                                    showConfirmButton: false,
                                    timer: 1500
                                })


                                //remove post on table
                                $(`#index_${id}`).remove();
                                read()
                            }
                        });


                    }
                })

            })

        });
    </script>

</div>
<style>
    .table {
        border-spacing: 0 15px;
    }

    i {
        font-size: 1rem !important;
    }



    tr td:nth-child(n+8),
    tr th:nth-child(n+8) {
        border-radius: 0 .625rem .625rem 0;
    }

    tr td:nth-child(1),
    tr th:nth-child(1) {
        border-radius: .625rem 0 0 .625rem;
    }
</style>


