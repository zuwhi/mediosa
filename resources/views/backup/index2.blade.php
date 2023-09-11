  @extends('layouts.main')
  @section('content')
      <div class="w-full  md:px-5 px-0 md:mt-0 -mt-1 min-h-screen ">
          <div class="md:px-5 md:py-5 px-1 py-2  border-2 border-slate-200 rounded-xl shadow-md">
              <div class="w-full flex items-center mb-5">
                  <div class="flex-1">
                      <ul
                          class=" cursor-pointer md:w-36 w-24 md:ml-0 ml-2 grid grid-cols-2 text-sm text-center text-white bg-slate-600 shadow-md rounded-2xl p-1">
                          <li>
                              <a id="inputbtn" class="bar flex justify-center md:py-1 bar-active">Input</a>
                          </li>
                          <li>
                              <a id="tablebtn" class="bar flex justify-center md:py-1">Tabel</a>
                          </li>
                      </ul>
                  </div>
                  <div class="flex-1 items-center ">
                      <form action="" method="get">
                          <div id="pencarian" class="flex w-full items-center justify-end relative ">
                              <i class="md:text-2xl relative left-9 fa-solid fa-search text-gray-400"></i>
                              <input
                                  class="md:w-[70%] w-[100%] placeholder:text-sm shadow-md ring-1 ring-slate-200 pl-12 md:py-2 border-none placeholder-gray-400 dark:bg-slate-700 text-black rounded-xl focus:outline-none"
                                  type="text" id="searchInput" oninput="" class="form-control"
                                  placeholder="Cari Pasien" />
                          </div>
                      </form>
                  </div>


              </div>
              <!-- ================= INPUTAN ================= -->
              <div class="tabContent flex justify-center w-full my-2">
                  <div
                      class="ml-1 bg w-[100%] dmode h-fit border border-gray-200 rounded-lg px-5 py-2">
                      <div class="px-3">
                          <form action="{{ route('pasien.store') }}" method="post" class="[&>input]:bg-transparent">
                              @csrf
                              <div class="form my-3">
                                  <label for="nama"
                                      class="block mb-2 text-md font-medium text-slate-600 dark:text-white">Nama Pasien
                                      :</label>
                                  <div class="relative">
                                      <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                          <i class="text-gray-500 fa-solid fa-circle-user text-xl"></i>
                                      </div>
                                      <input type="text" name="nama" id="nama" required
                                          class="bg-gray-50   border border-gray-300 outline-none text-gray-900 text-sm rounded-lg focus:border-2 focus:border-Oldgreen block w-full pl-10 p-2.5 dark:bg-slate-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                          placeholder="Masukan nama pasien" />
                                  </div>
                              </div>
                              <div class="form my-3">
                                  <label for="umur"
                                      class="block mb-2 text-md font-medium text-slate-600 dark:text-white">Umur :</label>
                                  <div class="relative">
                                      <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                          <i class="text-gray-500 fa-solid fa-person-cane text-xl"></i>
                                      </div>
                                      <input type="number" name="umur" id="umur" required
                                          class="bg-gray-50  border border-gray-300 outline-none text-gray-900 text-sm rounded-lg focus:border-2 focus:border-Oldgreen block w-full pl-10 p-2.5 dark:bg-slate-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                          placeholder="Masukan umur pasien" />
                                  </div>
                              </div>
                              <div class="form my-3">
                                  <label for="alamat"
                                      class="block mb-2 text-md font-medium text-slate-600 dark:text-white">Alamat :</label>
                                  <div class="relative">
                                      <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                          <i class="text-gray-500 fa-solid fa-location-dot text-xl"></i>
                                      </div>
                                      <input type="text" name="alamat" id="alamat"
                                          class="bg-gray-50  border border-gray-300 outline-none text-gray-900 text-sm rounded-lg focus:border-2 focus:border-Oldgreen block w-full pl-10 p-2.5 dark:bg-slate-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
                                          class="bg-gray-50  border border-gray-300 outline-none text-gray-900 text-sm rounded-lg focus:border-2 focus:border-Oldgreen block w-full pl-10 p-2.5 dark:bg-slate-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
                                          class="bg-gray-50  border border-gray-300 outline-none text-gray-900 text-sm rounded-lg focus:border-2 focus:border-Oldgreen block w-full pl-10 p-2.5 dark:bg-slate-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                          <option value="none" selected disabled hidden>
                                              Pilih jenis kelamin
                                          </option>
                                          <option value="L">Laki - laki</option>
                                          <option value="P">Perempuan</option>
                                      </select>
                                  </div>
                              </div>

                              <div class="w-full flex justify-end mt-6 mb-2">
                                  <button type="submit"
                                      class="addPasien w-fit bg-Oldgreen rounded-md md:text-lg text-white font-semibold md:py-2 md:px-5 py-1.5 px-4">Submit</button>
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
                  @include('dashboard.pasien.table')
              </div>

              {{-- =============================== MODAL =================================== --}}
              <div id="myModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
                  <div class="modal-overlay fixed inset-0 bg-black opacity-50 z-50"></div>
                  <div
                      class="modal-container dmode w-11/12 md:max-w-md mx-auto rounded-2xl shadow-lg z-50 overflow-y-auto">
                      <div class="modal-content py-4 text-left px-6">
                          <div class="w-full relative flex justify-end bg-yellow-200">
                              <i
                                  class="cursor-pointer hover:text-gray-600 absolute -top-2 -right-3 text-gray-400 text-xl close-modal fa-solid fa-xmark"></i>
                          </div>
                          <form id="modalForm" method="post" class="[&>input]:bg-transparent">
                              @csrf
                              <input id="idPasien" type="hidden" name="">
                              <div class="form my-3">
                                  <label for="nama"
                                      class="block mb-2 text-md font-medium text-slate-600 dark:text-white">Nama Pasien
                                      :</label>
                                  <div class="relative">
                                      <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                          <i class="text-gray-500 fa-solid fa-circle-user text-xl"></i>
                                      </div>
                                      <input type="text" name="nama" id="nama" required
                                          class="bg-gray-50  border border-gray-300 outline-none text-gray-900 text-sm rounded-lg focus:border-2 focus:border-Oldgreen block w-full pl-10 p-2.5 dark:bg-slate-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                          placeholder="Masukan nama pasien" />
                                  </div>
                              </div>
                              <div class="form my-3">
                                  <label for="umur"
                                      class="block mb-2 text-md font-medium text-slate-600 dark:text-white">Umur :</label>
                                  <div class="relative">
                                      <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                          <i class="text-gray-500 fa-solid fa-person-cane text-xl"></i>
                                      </div>
                                      <input type="number" name="umur" id="umur" required
                                          class="bg-gray-50  border border-gray-300 outline-none text-gray-900 text-sm rounded-lg focus:border-2 focus:border-Oldgreen block w-full pl-10 p-2.5 dark:bg-slate-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                          placeholder="Masukan umur pasien" />
                                  </div>
                              </div>
                              <div class="form my-3">
                                  <label for="alamat"
                                      class="block mb-2 text-md font-medium text-slate-600 dark:text-white">Alamat
                                      :</label>
                                  <div class="relative">
                                      <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                          <i class="text-gray-500 fa-solid fa-location-dot text-xl"></i>
                                      </div>
                                      <input type="text" name="alamat" id="alamat"
                                          class="bg-gray-50  border border-gray-300 outline-none text-gray-900 text-sm rounded-lg focus:border-2 focus:border-Oldgreen block w-full pl-10 p-2.5 dark:bg-slate-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
                                          class="bg-gray-50  border border-gray-300 outline-none text-gray-900 text-sm rounded-lg focus:border-2 focus:border-Oldgreen block w-full pl-10 p-2.5 dark:bg-slate-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                          placeholder="Masukan telepon pasien" />
                                  </div>
                                  <div class="form my-3">
                                      <label for="kelamin"
                                          class="block mb-2 text-md font-medium text-slate-600 dark:text-white">kelamin:</label>
                                      <div class="relative">
                                          <div
                                              class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                              <i class="text-gray-500 fa-solid fa-venus-mars text-xl"></i>
                                          </div>
                                          <select name="kelamin" id="kelamin"
                                              class="bg-gray-50  border border-gray-300 outline-none text-gray-900 text-sm rounded-lg focus:border-2 focus:border-Oldgreen block w-full pl-10 p-2.5 dark:bg-slate-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                              placeholder="Masukan kelamin pasien">
                                              <option value="" selected disabled hidden>Pilih kelamin</option>
                                              <option value="L">Laki - laki</option>
                                              <option value="P">Perempuan</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="flex justify-end">
                                      <button type="button"
                                          class="bg-gray-300 text-slate-600 font-bold py-2 px-4 rounded mr-2 close-modal">Batal</button>
                                      <button type="submit"
                                          class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                                  </div>
                          </form>
                      </div>
                  </div>
              </div>
              {{-- ============================= END MODAL =================================== --}}


              <script>
                  $(document).ready(function() {



                      const modal = $("#myModal");
                      const openModalButtons = $(".open-modal-button");
                      const closeModalButton = modal.find(".close-modal");
                      const form = modal.find("#modalForm");
                      const idPasien = form.find("#idPasien");
                      const editNameInput = form.find("#nama");
                      const editAgeInput = form.find("#umur");
                      const editAddressInput = form.find("#alamat");
                      const editPhoneInput = form.find("#telepon");
                      const editKelaminInput = form.find("#kelamin option[value='']");

                      openModalButtons.click(function() {
                          const dataId = $(this).data("id");

                          $.ajax({
                              url: "{{ route('pasien.edit', '') }}/" +
                                  dataId, // Ganti URL sesuai dengan endpoint untuk mengambil data pasien
                              type: "GET",
                              success: function(response) {
                                  idPasien.val(response.id);
                                  editNameInput.val(response.nama);
                                  editAgeInput.val(response.umur);
                                  editAddressInput.val(response.alamat);
                                  editPhoneInput.val(response.telepon);
                                  if (response.kelamin) {
                                      if (response.kelamin === "L") {
                                          editKelaminInput.text("Laki - laki");
                                      } else {
                                          editKelaminInput.text("Perempuan");
                                      }
                                  }
                                  modal.removeClass("hidden");
                              }
                          });
                      });

                      closeModalButton.click(function() {
                          modal.addClass("hidden");
                      });

                      form.submit(function(event) {

                          event.preventDefault();
                          $.ajax({
                              url: "{{ route('pasien.update', '') }}/" + idPasien.val(),
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
                                          },
                                          800
                                      ); // Reload halaman setelah 3 detik (sesuaikan dengan durasi SweetAlert)
                                  }



                              }
                          });
                      });
                  });
                  // =======================  HAPUS ==============================
                  function deleteConfirmation(id) {
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
                                          type: 'success',
                                          icon: 'success',
                                          title: `${response.message}`,
                                          showConfirmButton: false,
                                          timer: 3000
                                      });

                                      //remove post on table
                                      $(`#index_${id}`).remove();
                                  }
                              });


                          }
                      })
                  }
                  //   HAPUS END
              </script>

              <script>
                  $(document).ready(function() {

                      $(".bar").trigger("click");
                  })
                  $(".bar").click(function(e) {
                      $(".bar").removeClass("bar-active");
                      $(this).addClass("bar-active");
                      var i = $(".bar").index(this);
                      $(".tabContent").hide();
                      $(".tabContent").eq(i).show();
                  });

                  $('#inputbtn').click(function() {
                      $('#pencarian').addClass('opacity-0')
                  })
                  $('#tablebtn').click(function() {
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
      </div>
  @endsection
