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
                      <span class="text-teal-400 md:text-base text-xs font-semibold font-nunito">Diagnosis</span>
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


      <div class=" min-h-screen md:mr-0 mr-2">
          <form id="formInputGejala" method="post" action="{{ route('diagnosis.result') }}">
              @csrf
              <div
                  class="rounded-xl w-[100%]    ml-1 border-slate-300 shadow-md  py-3 pr-6 dmode dark:text-slate-300  box">
                  <p class="ml-6  text-2xl text-slate-400 font-semibold">Input gejala :</p>
                  <div class=" ml-6 mt-5 flex items-center h-full  border-2 border-dashed border-gray-200 rounded-lg ">
                      <i class="hidden m-2  fa-solid text-slate-400 fa-tags md:text-3xl text-xl"></i>
                      <div id="tags" class="grid grid-cols-12 my-2 gap-3 h-full w-full"></div>
                  </div>
                  <div class="flex mt-3 items-center relative">
                      <i class="text-2xl relative left-9 fa-solid fa-search text-gray-400"></i>
                      <input
                          class="w-[100%] shadow ring-1 ring-slate-200 focus:ring-Oldgreen pl-12 md:py-3 py-2 border-none placeholder-gray-400 text-black dark:bg-slate-800 dark:text-slate-300 rounded-xl focus:outline-none"
                          type="text" id="pasienInput" oninput="suggestPasien()" class="form-control"
                          placeholder="Cari Pasien" />
                  </div>
                  <div class="relative mt-2 left-5 rounded-xl mx-1 w-[97%] bg-gray-100 shadow-md" id="rekomendasiPasien">
                  </div>
                  <div class="flex mt-3 items-center relative">
                      <i class="text-2xl relative left-9 fa-solid fa-search text-gray-400"></i>
                      <input
                          class="w-[100%] shadow ring-1 ring-slate-200 focus:ring-Oldgreen pl-12 md:py-3 py-2 border-none placeholder-gray-400 text-black dark:bg-slate-800 dark:text-slate-300 rounded-xl focus:outline-none"
                          type="text" id="gejalaInput" oninput="suggestGejala()" class="form-control"
                          placeholder="Cari Gejala" />
                  </div>

                  <div class="relative mt-2 left-5 rounded-xl mx-1 w-[97%] bg-gray-100 shadow-md" id="rekomendasi"></div>
                  <div class="mt-20 w-full flex justify-end">
                      <button type="submit"
                          class="hover:bg-teal-700 hover:text-slate-200 ml-3 bg-teal-600 py-2 md:px-5 px-5 rounded-xl md:w-36 text-white font-semibold text-xl">Submit</button>
                  </div>
              </div>
              <input type="hidden" class="pasienInput" name="pasien" />
              <input type="hidden" class="gejala" name="gejala" />
          </form>
      </div>

      <script>
          const csvUrl = "{{ asset('python_scripts/data_penyakit.csv') }}";
          let rekomendasiList = [];

          function fetchCSVHeader(url) {
              fetch(url)
                  .then((response) => response.text())
                  .then((contents) => {
                      const lines = contents.split("\n");
                      const header = lines[0].split(",");
                      header.shift();
                      rekomendasiList = header;
                  })
                  .catch((error) => {
                      console.error("Error fetching CSV:", error);
                  });
          }

          fetchCSVHeader(csvUrl);
          var selectedTags = [];

          function suggestGejala() {
              var input = document.getElementById("gejalaInput").value;
              var rekomendasiDiv = document.getElementById("rekomendasi");
              if (input.trim() !== "") {
                  var matchingSuggestions = rekomendasiList.filter((item) => item.toLowerCase().includes(input
                      .toLowerCase()));
                  rekomendasiDiv.innerHTML = matchingSuggestions.map((suggestion) =>
                      `<div class="rekomend" onclick="addTag('${suggestion}')">${suggestion}</div>`).join("");
              } else {
                  rekomendasiDiv.innerHTML = "";
              }
          }

          function addTag(tag) {
              selectedTags.push(tag);
              updateTags();
              document.getElementById("gejalaInput").value = "";
              document.getElementById("rekomendasi").innerHTML = "";
          }

          function removeTag(tag) {
              selectedTags = selectedTags.filter((item) => item !== tag);
              updateTags();
          }

          function updateTags() {
              var tagsDiv = document.getElementById("tags");
              tagsDiv.innerHTML = selectedTags
                  .map(
                      (tag) => `
<div class="tag tag-custom flex justify-between">
                    <span class="whitespace-nowrap overflow-hidden">${tag}</span>
                    <div class="remove-tag" onclick="removeTag('${tag}')"><i class="fa-regular fa-circle-xmark"></i></div>
                  </div>        `
                  )
                  .join("");
          }
          var gejala = document.querySelector(".gejala");
          document.getElementById("formInputGejala").addEventListener("submit", function(e) {
              if (selectedTags.length < 3) {
                  e.preventDefault(); // Mencegah pengiriman formulir jika tag kurang dari 3
                  Swal.fire({
                      icon: "warning",
                      title: "Oops...",
                      text: "Masukan tags lebih dari 3",
                  });
              } else {
                  gejala.value = selectedTags.map((tag) => tag.toLowerCase()).join(",");
              }
          });
          var pasiens = {!! json_encode($pasiens) !!};

          function selectPasien(id, nama) {
              var pasienInput = document.getElementById("pasienInput");
              var pasienInputReal = document.querySelector(".pasienInput");
              pasienInput.value = nama;
              pasienInputReal.value = id;
              document.getElementById("rekomendasiPasien").innerHTML = "";
          }

          function suggestPasien() {
              var input = document.getElementById("pasienInput").value;
              var rekomendasiPasienDiv = document.getElementById("rekomendasiPasien");
              if (input.trim() !== "") {
                  var matchingPasien = pasiens.filter((item) =>
                      item.nama.toLowerCase().includes(input.toLowerCase()) ||
                      item.username.toLowerCase().includes(input.toLowerCase())
                  );
                  rekomendasiPasienDiv.innerHTML = matchingPasien.map((pasien) => `
                <div class="rekomend" onclick="selectPasien('${pasien.id}','${pasien.nama}')">
                    ${pasien.username} - ${pasien.nama}
                </div>`).join("");
              } else {
                  rekomendasiPasienDiv.innerHTML = "";
              }
          }
          window.addEventListener('pageshow', function(event) {
              var form = document.getElementById('formInputGejala');
              form.reset();
          });
      </script>
  @endsection
