@extends('layouts.main')
@section('content')
     


     <div class="w-full min-h-screen  md:px-5 px-0 md:mt-0  ">
              {{-- ============================= Awal title menu ================================ --}}
        <div class="w-full flex h-12 md:mb-2 md:mx-0 mx-1 ">
            <div class="flex-1 flex h-full">
                <div class="flex w-fit h-full items-center">
                    <div class="box-title md:w-10 md:h-10 w-8 h-8 middle rounded md:mr-3 mr-1">
                        {{-- <div class="box-title md:w-10 md:h-10 w-8 h-8 middle rounded md:mr-3 mr-1"> --}}
                        <i class="fa-solid fa-user-gear text-bluebg"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-teal-400 md:text-base text-xs font-semibold font-nunito">Super admin</span>
                        <span class="md:text-sm text-slate-500 text-xs whitespace-nowrap font-quicksand">Kelola data admin</span>
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
 
        <div class="md:px-5 md:py-5 px-1 py-2  border-2 border-slate-200 rounded-xl shadow-md">
          <div class="w-full flex items-center mb-3">
            <div class="flex-1">
            <ul class=" mt-0.5 cursor-pointer md:w-36 w-24 md:ml-0 ml-2 grid grid-cols-2 md:text-sm text-[12px] text-center text-white bg-slate-600 shadow-md rounded-2xl p-1">
              <li>
                <a id="inputbtn" class="bar  flex justify-center py-1  bar-active">Input</a>
              </li>
              <li>
                <a id="tablebtn" class="bar  flex justify-center py-1 ">Tabel</a>
              </li>
            </ul>
            </div>
            <div class="flex-1 items-center " >
                    <form action="" method="get">
                    <div id="pencarian"  class="flex w-full items-center justify-end relative ">
                        <i class="md:text-2xl relative md:left-9 left-7 fa-solid fa-search text-gray-400"></i>
                        <input name="keyword"
                          class="md:w-[70%] w-full shadow ring-1 ring-slate-200 focus:ring-Oldgreen md:pl-12 pl-9 md:py-3 py-1 border-none bg-bluebg placeholder-gray-400 text-black dark:bg-slate-800 dark:text-slate-300 rounded-xl focus:outline-none"
                            type="text" id="searchInput" value="{{ request('keyword') }}" oninput="" class="form-control" placeholder="Cari Pengguna" />
                    </div>
                    </form>
                </div>


          </div>
     
        <!-- ================= INPUTAN ================= -->
       <div class="tabContent flex justify-center w-full my-2">
            <div class="ml-1 bg w-[100%] bg-white dark:bg-slate-900 h-full border border-gray-200 rounded px-5 py-2">
              <div class="px-3">
              <form action="{{ route('pengguna.store') }}" method="post" class="[&>input]:bg-transparent">
                @csrf
                <div class="form my-3">
                  <label for="nama" class="block mb-2 text-md font-medium text-gray-700 dark:text-white">Nama Instansi :</label>
                  <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                      <i class="text-gray-500 fa-solid fa-landmark text-xl"></i>
                    </div>
                    <input
                      type="text"
                      name="nama"
                      id="nama"
                      required
                      class="input-custom"
                      placeholder="Masukan nama instansi"
                    />
                  </div>
                </div>
                <div class="form my-3">
                  <label for="email" class="block mb-2 text-md font-medium text-gray-700 dark:text-white">email :</label>
                  <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                      <i class="text-gray-500 fa-solid fa-envelope text-xl"></i>
                    </div>
                    <input
                      type="email"
                      name="email"
                      id="email"
                      required
                      class="input-custom"
                      placeholder="Masukan email instansi"
                    />
                  </div>
                </div>
                <div class="form my-3">
                  <label for="password" class="block mb-2 text-md font-medium text-gray-700 dark:text-white">Password :</label>
                  <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                      <i class="text-gray-500 fa-solid fa-lock text-xl"></i>
                    </div>
                    <input
                      type="password"
                      name="password"
                      id="password"
                      required
                      class="input-custom"
                      placeholder="Masukan password instansi"
                    />
                  </div>
                </div>
                <div class="form my-3">
                  <label for="alamat" class="block mb-2 text-md font-medium text-gray-700 dark:text-white">Alamat :</label>
                  <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                      <i class="text-gray-500 fa-solid fa-location-dot text-xl"></i>
                    </div>
                    <input
                      type="text"
                      name="alamat"
                      id="alamat"
                      class="input-custom"
                      placeholder="Masukan alamat pengguna"
                    />
                  </div>
                </div>
                <div class="form my-3">
                  <label for="telepon" class="block mb-2 text-md font-medium text-gray-700 dark:text-white">telepon:</label>
                  <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                      <i class="text-gray-500 fa-solid fa-phone text-xl"></i>
                    </div>
                    <input
                      type="text"
                      type="text"
                      name="telepon"
                      id="telepon"
                      class="input-custom"
                      placeholder="Masukan telepon pengguna"
                    />
                  </div>
                </div>
         
                <div class="w-full flex justify-end mt-6 mb-2">
                  <button type="submit" class="addpengguna w-fit bg-Oldgreen rounded-md md:text-lg text-white font-semibold md:py-2 md:px-5 py-1.5 px-4">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        @if (session('alert'))
              <script>
                  Swal.fire({
                      title: '{{ session('alert.title') }}',
                      text: '{{ session('alert.text') }}',
                      icon: '{{ session('alert.type') }}',
                      timer: 3000,
                      showConfirmButton: false
                  });
              </script>
          @endif

          @if (session('hapus'))
              <script>
                 
                      Swal.fire({
                          title: '{{ session('hapus.title') }}',
                          text: '{{ session('hapus.text') }}',
                          icon: '{{ session('hapus.type') }}',
                          timer: 3000,
                          showConfirmButton: false
                      });
               
              </script>
          @endif

       




        
        <!-- ================= TABEL ================= -->
        <div class="tabContent hidden">
        <div class="flex justify-center h-full my-2">
              <div class=" md:w-[100%]  bg-white h-full border border-gray-200 rounded shadow-sm overflow-hidden">
                <div class="overflow-x-auto ">
                  <table class="table   " id="dataTable">
                    <thead class="bg-slate-700 text-slate-50 ">
                      <tr class="w-full  md:text-sm text-[10px]">
                        <th class="">No</th>
                        <th class="">Nama Instansi</th>
                        <th class="">Email</th>
                        <th class="">Alamat</th>
                        <th class="">Telepon</th>
                        <th class="">Action</th>
                      </tr>
                    </thead>
                    @foreach ($penggunas as $pengguna)
                    <tbody>
                      <tr class="w-full  md:text-sm text-[10px] dark:text-slate-300 {{ ( $loop->iteration  % 2 == 0)? 'bg-slate-50 dark:bg-slate-700' : 'bg-slate-100 dark:bg-slate-600' }}">
                        <th  class="">{{ $loop->iteration }}</th>
                        <td class="">{{ $pengguna->nama }}</td>
                        <td class="">{{ $pengguna->email }}</td>
                        <td class="">{{ $pengguna->alamat }}</td>
                        <td class="">{{ $pengguna->telepon }}</td>
                        <td class=" text-sm flex  md:gap-0 gap-1 text-slate-500 ">
                          <button class="open-modal-button text-white mr-2 px-5 md:text-sm text-[10px] btn bg-teal-500  btn-sm" data-id="{{ $pengguna->id }}">Edit</button>
                          <form class="hapus" id="form-{{ $pengguna->id }}" action="{{ route('pengguna.destroy', $pengguna->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="md:text-sm text-white  text-[10px] btn bg-Oldgreen btn-sm" value="Delete" />
                          </form>
                          
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
                </div>
              </div>
            </div>

            {{-- <div class="mt-4">
                {{ $pasiens->links() }}
            </div> --}}
        </div>

        {{-- =============================== MODAL =================================== --}}
        <div id="myModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
          
          <div class="modal-overlay fixed inset-0 bg-black opacity-50"></div>
          <div class="modal-container dmode w-11/12 md:max-w-md mx-auto rounded-2xl shadow-lg z-50 overflow-y-auto">
            <div class="modal-content py-4 text-left px-6">
              <div class="w-full relative flex justify-end bg-yellow-200">
                <i class="cursor-pointer hover:text-gray-600 absolute -top-2 -right-3 text-gray-400 text-xl close-modal fa-solid fa-xmark"></i>
              </div>
              <form id="modalForm"  method="post" class="[&>input]:bg-transparent">
                @csrf
                <input id="idPengguna" type="hidden" name="">
                <div class="form my-3">
                  <label for="nama" class="block mb-2 text-md font-medium text-gray-700 dark:text-white">Nama pengguna :</label>
                  <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                      <i class="text-gray-500 fa-solid fa-landmark text-xl"></i>
                    </div>
                    <input
                      type="text"
                      name="nama"
                      id="nama"
                      required
                      class="input-custom"
                      placeholder="Masukan nama pengguna"
                    />
                  </div>
                </div>
                <div class="form my-3">
                  <label for="email" class="block mb-2 text-md font-medium text-gray-700 dark:text-white">email :</label>
                  <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                      <i class="text-gray-500 fa-solid fa-envelope text-xl"></i>
                    </div>
                    <input
                      type="email"
                      name="email"
                      id="email"
                      required
                      class="input-custom"
                      placeholder="Masukan email"
                    />
                  </div>
                </div>
                <div class="form my-3">
                  <label for="password" class="block mb-2 text-md font-medium text-gray-700 dark:text-white">password :</label>
                  <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                      <i class="text-gray-500 fa-solid fa-lock text-xl"></i>
                    </div>
                    <input
                      type="password"
                      name="password"
                      id="password"
                      class="input-custom"
                      placeholder="Masukan password baru"
                    />
                  </div>
                </div>
                <div class="form my-3">
                  <label for="alamat" class="block mb-2 text-md font-medium text-gray-700 dark:text-white">Alamat :</label>
                  <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                      <i class="text-gray-500 fa-solid fa-location-dot text-xl"></i>
                    </div>
                    <input
                      type="text"
                      name="alamat"
                      id="alamat"
                      class="input-custom"
                      placeholder="Masukan alamat instansi"
                    />
                  </div>
                </div>
                <div class="form my-3">
                  <label for="telepon" class="block mb-2 text-md font-medium text-gray-700 dark:text-white">telepon:</label>
                  <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                      <i class="text-gray-500 fa-solid fa-phone text-xl"></i>
                    </div>
                    <input
                      type="text"
                      type="text"
                      name="telepon"
                      id="telepon"
                      class="input-custom"
                      placeholder="Masukan telepon instansi"
                    />
                  </div>
                </div>
                <div class="flex justify-end">
                  <button type="button" class="bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded mr-2 close-modal">Batal</button>
                  <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        </div>
        {{-- ============================= END MODAL =================================== --}}


     </div>
          </div>
        <script>
          $(document).ready(function () {
        

  
            const modal = $("#myModal");
            const openModalButtons = $(".open-modal-button");
            const closeModalButton = modal.find(".close-modal");
            const form = modal.find("#modalForm");
            const idPengguna = form.find("#idPengguna");
            const editNameInput = form.find("#nama");
            const editEmailInput = form.find("#email");
            const editAddressInput = form.find("#alamat");
            const editPhoneInput = form.find("#telepon");

            openModalButtons.click(function () {
              const dataId = $(this).data("id");
              
                  $.ajax({
                  url: "{{ route('pengguna.edit', '') }}/" + dataId, // Ganti URL sesuai dengan endpoint untuk mengambil data pengguna
                  type: "GET",
                  success: function(response) {
                    console.log(response);
                      idPengguna.val(response.id);
                      editNameInput.val(response.nama);
                      editEmailInput.val(response.email);
                      // editAgeInput.val(response.password);
                      editAddressInput.val(response.alamat);
                      editPhoneInput.val(response.telepon);
                      modal.removeClass("hidden");
                  }
              });
            });

            closeModalButton.click(function () {
              modal.addClass("hidden");
            });

            form.submit(function (event) {
              
              event.preventDefault();
              $.ajax({
                  url: "{{ route('pengguna.update', '') }}/"+ idPengguna.val(),
                  type: "PATCH",
                 data: $(this).serialize(),
                  success: function(response) {
                      console.log(response);
                      modal.addClass("hidden");
                     Swal.fire({
                          title: 'Sukses',
                          text: response.message,
                          icon: 'success',
                          timer: 3000,
                          showConfirmButton: false
                      });

                      if (response.reload) {
                          setTimeout(function() {
                              location.reload();
                          }, 800); // Reload halaman setelah 3 detik (sesuaikan dengan durasi SweetAlert)
                      }

                     
                     
                  }
              });
            });

                  // =======================  HAPUS ==============================
                  $('.hapus').submit(function(event) {
            event.preventDefault();
            
            const formId = $(this).attr('id'); // Mengambil ID formulir yang diklik
            const penggunaId = formId.split('-')[1]; // Mengambil ID data pengguna dari ID formulir

            Swal.fire({
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
                // Kirim formulir dengan ID pengguna yang benar
                $('#' + formId).unbind('submit').submit();
              }
            });
          });

        </script>
     
        <script>
          $(document).ready(function(){

            $(".bar").trigger("click");
          })
          $(".bar").click(function (e) {
            $(".bar").removeClass("bar-active");
            $(this).addClass("bar-active");
            var i = $(".bar").index(this);
            $(".tabContent").hide();
            $(".tabContent").eq(i).show();
          });
            $('#inputbtn').click(function(){
              $('#pencarian').addClass('opacity-0')
            })
            $('#tablebtn').click(function(){
              $('#pencarian').removeClass('opacity-0')
            })
         
        </script>
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
      </div>
  @endsection
