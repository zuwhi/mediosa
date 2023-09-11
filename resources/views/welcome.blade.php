<!DOCTYPE html>
<html lang="en" data-theme="light" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MediOsa</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="{{ asset('assets/image/favicon-logo.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;700;900&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;700;900&family=Quicksand&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap');
    </style>
</head>

<body>
    <!-- Navbar mobile -->
    <div class="btm-nav md:hidden z-50">
        <a href="#home">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
        </a>

        <a href="#trend">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
            </svg>
        </a>

        <a href="#cari">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
            </svg>
        </a>

        <a href="{{ route('login') }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
            </svg>
        </a>
    </div>
    <!-- Navbar mobile end -->

    <!-- Navbar PC -->
    <div class="hidden md:block sticky top-0 z-50 bg-[rgba(255,255,255,.8)] backdrop-blur-md">
        <div class="container mx-auto">
            <div class="navbar">
                <div class="flex-1">
                    <div class="logo h-14 w-full flex items-center relative">
                        <div class="md:w-[100%] w-[85%] flex items-center px-5 overflow-hidden ml-2">
                            <img class="w-8 h-8" src="/assets/svg/logo.svg" alt="" srcset="" />
                            <span
                                class="title-menu tracking-wide group-hover/sidebar:flex  pl-3 pt-1 font-semibold text-4xl text-transparent bg-clip-text bg-gradient-to-r from-teal-500 to-teal-600 font-ubuntu">
                                Medi<span>Osa</span></span>
                        </div>
                        <div id="close-side" class="w-[15%] md:hidden block">
                            <i class="fa-regular fa-circle-xmark text-slate-500"></i>
                        </div>
                    </div>
                </div>
                <div class="flex-none">
                    <ul class="menu menu-horizontal px-1 items-center">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#trend">Trend Penyakit</a></li>
                        <li><a href="#cari">Riwayat Medis</a></li>
                        <li><a href="{{ route('login') }}"
                                class=" bg-teal-400 hover:bg-teal-600 hover:text-white rounded-full text-white items-center capitalize font-bold ml-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                </svg>
                                Admin
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar PC end -->

    <!-- Header -->
    <div id="home" class="relative h-screen grid place-items-center sm:h-[670px] md:h-auto bg-cover py-10 md:py-20"
        style="background-image: url({{ asset('assets/image/header-bg.webp') }})">
        <div class="container mx-auto px-4">
            <div class="text-center md:relative">
                <h1 class="font-bold text-4xl md:text-5xl lg:text-6xl">
                    Selamat Datang <br />
                    di
                    <span
                        class="title-menu tracking-wide group-hover/sidebar:flex font-semibold text-transparent bg-clip-text bg-gradient-to-r from-teal-500 to-teal-600 font-ubuntu">
                        Medi<span>Osa</span></span>
                </h1>

                <div
                    class="flex flex-col md:flex-row mx-auto justify-between max-w-3xl bg-gradient-to-r from-teal-400  to-teal-500 text-white md:text-left p-3 !pb-0 md:p-6 rounded-lg md:rounded-xl mt-5 md:mt-10">
                    <div class="h-fit self-center md:pb-6">
                        <p class="mt-5 mb-7 max-w-lg font-semibold">
                            Mediosa adalah platform inovatif yang menggabungkan teknologi machine learning untuk
                            memberikan
                            diagnosa penyakit yang akurat, sumber daya anatomi penyakit, dan analisis tren penyakit.
                        </p>
                        <a href="#cari"
                            class="btn btn-ghost bg-white hover:bg-teal-100 rounded-full text-teal-600 capitalize mb-5 px-8">Cek
                            riwayat medis</a>
                    </div>
                    <img src="{{ asset('assets/image/doctor-header.webp') }}" alt=""
                        class="w-[200px] md:w-[250px] mx-auto" />
                </div>
            </div>
        </div>
    </div>
    <!-- Header end -->

    {{-- Fitur unggulan --}}
    <section id="about"
        class="pt-[38px] pb-16 md:pt-[71px] md:pb-[100px] bg-gradient-to-b from-slate-200 to-slate-100">
        <div class="text-center container mx-auto px-[14px]">
            <h2>Fitur</h2>
            <p class="text-semibold pt-6 pb-8 max-w-[570px] mx-auto">
                Pelajari mengapa aplikasi kami adalah solusi terdepan dalam pelayanan kesehatan modern.
            </p>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-2">
                <!-- items -->
                <div class="flex flex-col items-center pt-10 pb-8 px-6 hover:shadow-relap transition rounded-xl">
                    <img src="assets/image/about-logo1.svg" alt="" class="w-12" />
                    <h3 class="text-2xl pt-[13px] pb-[9px]">Dukungan dalam Pengambilan Keputusan</h3>
                    <p class="max-w-[322px] mx-auto opacity-70">
                        Mediosa membantu dokter dalam membuat keputusan yang lebih informasional dan tepat.
                    </p>
                </div>
                <!-- items end -->

                <!-- items -->
                <div class="flex flex-col items-center pt-10 pb-8 px-6 hover:shadow-relap transition rounded-xl">
                    <img src="assets/image/about-logo2.svg" alt="" class="w-12" />
                    <h3 class="text-2xl pt-[13px] pb-[9px]">Efisiensi dalam Diagnosis</h3>
                    <p class="max-w-[322px] mx-auto opacity-70">
                        Dengan bantuan teknologi AI, dokter dapat menganalisis data medis pasien dengan lebih cepat dan
                        efisien, mengurangi waktu yang diperlukan untuk diagnosis.
                    </p>
                </div>
                <!-- items end -->

                <!-- items -->
                <div class="flex flex-col items-center pt-10 pb-8 px-6 hover:shadow-relap transition rounded-xl">
                    <img src="assets/image/about-logo3.svg" alt="" class="w-12" />
                    <h3 class="text-2xl pt-[13px] pb-[9px]">Peningkatan Kualitas Pelayanan</h3>
                    <p class="max-w-[322px] mx-auto opacity-70">
                        Dengan akurasi yang lebih tinggi, dokter dapat memberikan perawatan yang lebih tepat dan
                        efektif, meningkatkan kualitas layanan medis secara keseluruhan.
                    </p>
                </div>
                <!-- items end -->

                <!-- items -->
                <div class="flex flex-col items-center pt-10 pb-8 px-6 hover:shadow-relap transition rounded-xl">
                    <img src="assets/image/about-logo4.svg" alt="" class="w-12" />
                    <h3 class="text-2xl pt-[13px] pb-[9px]">Penghematan Biaya</h3>
                    <p class="max-w-[322px] mx-auto opacity-70">
                        Diagnosa yang lebih cepat dan
                        akurat dapat mengurangi biaya perawatan dan mengoptimalkan alokasi sumber daya
                        kesehatan.
                    </p>
                </div>
                <!-- items end -->

                <!-- items -->
                <div class="flex flex-col items-center pt-10 pb-8 px-6 hover:shadow-relap transition rounded-xl">
                    <img src="assets/image/about-logo6.svg" alt="" class="w-12" />
                    <h3 class="text-2xl pt-[13px] pb-[9px]">Pengelolaan data riwayat</h3>
                    <p class="max-w-[322px] mx-auto opacity-70">
                        Aplikasi ini memungkinkan pasien untuk mengakses riwayat medis mereka secara mudah dalam satu
                        platform.
                    </p>
                </div>
                <!-- items end -->

                <!-- items -->
                <div class="flex flex-col items-center pt-10 pb-8 px-6 hover:shadow-relap transition rounded-xl">
                    <img src="assets/image/about-logo5.svg" alt="" class="w-12" />
                    <h3 class="text-2xl pt-[13px] pb-[9px]">Praktis</h3>
                    <p class="max-w-[322px] mx-auto opacity-70">
                        Aplikasi ini berbasis web, jadi sangat mudah untuk diakses di segala perangkat tanpa perlu
                        melakukan instalasi.
                    </p>
                </div>
                <!-- items end -->
            </div>
        </div>
    </section>
    {{-- Fitur unggulan end --}}

    {{-- Testimoni --}}
    <section class="relative z-10 bg-white pt-[54px] pb-[60px] md:pt-[71px] md:pb-[90px]">
        <div class="container mx-auto px-[14px]">
            <div class="text-center">
                <h2>Apa Kata Mereka?</h2>
                <p class="pt-6 pb-12 md:pb-16 max-w-[570px] mx-auto">
                    Dengar pengalaman luar biasa pengguna kami dengan aplikasi kami yang mengubah cara pelayanan
                    kesehatan.
                </p>
            </div>

            <div class="grid md:flex md:flex-wrap md:justify-center lg:grid lg:grid-cols-3 gap-[30px]">
                <!-- card -->
                <div class="shadow-relap md:w-[calc(50%-30px)] lg:w-auto px-[30px] pt-[32px] pb-[42px] rounded-xl">
                    <img src="assets/image/people2-1.png" alt="" class="rounded-full w-16" />
                    <p class="pt-[14px] pb-4 opacity-70">
                        "Aplikasi ini adalah alat yang sangat berharga dalam praktik medis saya. Dengan kemampuan
                        machine learning yang luar biasa, saya dapat dengan cepat mendiagnosa penyakit dengan tingkat
                        akurasi yang tinggi."
                    </p>
                    <p class="font-semibold">Dr. Ika Pratiwi <span class="opacity-70">| Dokter Umum</span> </p>
                </div>
                <!-- card end -->

                <!-- card -->
                <div class="shadow-relap md:w-[calc(50%-30px)] lg:w-auto px-[30px] pt-[32px] pb-[42px] rounded-xl">
                    <img src="assets/image/people2-2.png" alt="" class="rounded-full w-16" />
                    <p class="pt-[14px] pb-4 opacity-70">
                        "Aplikasi ini membedakan dirinya di dunia medis. Machine learning dan sumber daya anatomi
                        penyakitnya membuat diagnosa lebih akurat. Sangat merekomendasikan aplikasi ini."
                    </p>
                    <p class="font-semibold">Dr. Rudi Wijaya <span class="opacity-70">| Dokter Umum</span> </p>
                </div>
                <!-- card end -->

                <!-- card -->
                <div class="shadow-relap md:w-[calc(50%-30px)] lg:w-auto px-[30px] pt-[32px] pb-[42px] rounded-xl">
                    <img src="assets/image/people2-3.png" alt="" class="rounded-full w-16" />
                    <p class="pt-[14px] pb-4 opacity-70">
                        "Mediosa memiliki fitur yang sangat saya butuhkan. Di Mediosa, saya bisa melihat riwayat periksa
                        saya hingga yang paling lama sekalipun."
                    </p>
                    <p class="font-semibold">Sumirah <span class="opacity-70">| Pasien</span> </p>
                </div>
                <!-- card end -->
            </div>
        </div>
    </section>
    {{-- Testimoni end --}}

    {{-- trend penyakit --}}
    <section id="trend" class="bg-gradient-to-b from-slate-200 to-slate-100 py-20">
        <div class="container mx-auto px-[14px]">
            <div class="text-center">
                <h2>Trend Penyakit</h2>
                <p class="pt-6 pb-12 md:pb-16 w-full  mx-auto">
                    Analisis trend penyakit pada bulan {{ $bulanSekarang }} 2023
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-[30px]">

                <div class="card transition hover:shadow-relap hover:bg-white h-fit">
                    <div class="card-body p-3 md:p-6">
                        <div
                            class="w-full h-32 text-slate-100 bg-gradient-to-r from-teal-400 to-teal-500  rounded-lg shadow-md flex items-center justify-center">
                            <div class="md:p-0 px-3">
                                <img class="md:w-16 w-[5rem] mr-3" src="{{ asset('assets/svg/penyakit.svg') }}"
                                    alt="" />
                            </div>
                            <div class="text-white">
                                <h3 class="text-sm md:text-lg">Penyakit yang sering muncul</h3>
                                <h1 class="font-bold text-2xl md:text-4xl">{{ $topPenyakit->nama }}</h1>
                            </div>
                        </div>

                        <div class="w-full mt-5">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="card transition hover:shadow-relap hover:bg-white h-fit">
                    <div class="card-body p-3 md:p-6">
                        <div class=" flex flex-col items-center gap-5 ">
                            <div
                                class="w-full bg-teal-500 p-5 !pb-0 flex gap-5 justify-between items-center h-32 rounded-lg">
                                <div class="w-[70%]">
                                    <h1 class=" md:text-2xl text-xl font-semibold text-left text-white pb-5">Pencegahan
                                        Penyakit
                                        {{ $topPenyakit->nama }}</h1>
                                </div>
                                <div class="">
                                    <img class="w-28 -mb-2" src="{{ asset('assets/svg/fyi.svg') }}"
                                        alt="" />
                                </div>
                            </div>
                            <div
                                class="mt-1 h-full border border-solid border-slate-300 rounded-lg flex  justify-center">

                                <p class="p-5 text-slate-500">{{ $solusi->solusi }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Cari riwayat -->
    <section id="cari" class=" grid place-items-center h-fit bg-cover pb-10 lg:pb-0"
        style="background-image: url({{ asset('assets/image/header-bg.webp') }})">
        <div
            class="h-full flex items-center bg-gradient-to-t lg:bg-gradient-to-b from-[rgba(255,255,255,.8)] to-transparent py-10 md:py-20">
            <div
                class="container mx-auto flex flex-wrap gap-5 justify-center items-center bg-transparent  rounded-2xl p-[14px]">
                <div
                    class="bg-gradient-to-r from-teal-400 to-teal-500  rounded-2xl w-full pt-10  lg:w-[calc(40%-36px)] max-w-md flex items-end justify-center">
                    <img src="{{ asset('assets/image/doctor.png') }}" alt=""
                        class="w-[200px] lg:w-[250px]" />
                </div>

                <div class="text-center mx-5 lg:w-[calc(60%-36px)]">
                    <h2 class=" ">
                        Riwayat Medis
                    </h2>
                    <p class="my-4">
                        Jika Anda sudah pernah periksa di klinik Mediosa, Anda bisa melihat riwayat medis Anda hanya
                        dengan memasukkan username yang telah diberikan oleh tenaga medis kami.
                    </p>
                    <form class="max-w-lg mx-auto" id="form_riwayat" method="POST"
                        action="{{ route('riwayat-guest.index') }}" class="">
                        @csrf
                        <div class="flex items-center my-3 px-3 py-1 border border-slate-300  bg-white rounded-xl">
                            <i class="text-2xl fa-solid fa-user-doctor text-gray-400"></i>
                            <input
                                class="w-full border-none outline-none focus:ring-0 placeholder-gray-400 text-black ml-2 rounded-lg"
                                type="text" name="username" id="username" placeholder="username" required />
                        </div>
                        <div class="flex mb-3">
                            <button type="submit"
                                class="hover:bg-teal-700 hover:text-slate-200 bg-gradient-to-r from-teal-400  to-teal-500  py-3 px-8 rounded-xl w-full text-white font-semibold">
                                Cari
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Cari riwayat end -->

    {{-- validasi cari riwayat --}}
    @if (session('status'))
        <script>
            Swal.fire({
                title: 'Error!',
                text: 'Username tidak dikenali, pastikan Anda menuliskannya dengan benar.',
                icon: 'error',
                confirmButtonText: 'Ok'
            })
        </script>
    @endif

    {{-- script trend penyakit --}}
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($namaPenyakit),
                datasets: [{
                    label: '# jumlah pasien',
                    data: @json($jumlahPenyakit),
                    borderWidth: 1,
                    backgroundColor: [
                        '#2dd4bf',

                    ],
                }]
            },
            options: {
                scales: {
                    y: {
                        ticks: {
                            precision: 0, // Mengatur jumlah desimal menjadi 0
                            color: '#0d9488',
                        }
                    },
                    x: {
                        ticks: {
                            precision: 0,
                            color: '#0f766e', // Warna teks label sumbu Y
                        }
                    },
                },
            },
        });
    </script>
    {{-- trend penyakit end --}}

</body>

</html>
