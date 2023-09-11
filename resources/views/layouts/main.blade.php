<!DOCTYPE html>
<html lang="en" class="">

@include('partials.header')

<body class="flex">
    <!-- ================ start Animation Loading ============== -->
    <div id="pageLoading"
        class="load z-[99] fixed w-full h-full bg-slate-50 dark:bg-slate-700 flex flex-col justify-center items-center transition-opacity duration-500 ease-in-out">
        <div>
            <span class="loading loading-spinner loading-lg text-Oldgreen"></span>
        </div>
    </div>
    <!-- ================ end Animation Loading ============== -->
    @include('partials.sidebar')
    {{-- <div class="bg-img h-screen w-full dmode overflow-hidden fixed z-[-1] flex">
        <div class="circle1 fixed xl:-right-5 md:-right-24 lg:-right-10 -right-56 opacity-20 z-[-3] xl:-bottom-[21rem] lg:-bottom-[18rem] md:-bottom-[16rem]  -bottom-[14rem]  xl:w-[44rem] xl:h-[44rem] lg:w-[40rem] lg:h-[40rem] md:w-[34rem] md:h-[34rem] w-[30rem] h-[30rem] rounded-full bg-[#82adb2] dark:bg-slate-400"></div>
        <div class="circle1 fixed xl:-right-5 md:-right-24 lg:-right-10 -right-56 opacity-20 z-[-2] xl:-bottom-[21rem] lg:-bottom-[18rem] md:-bottom-[16rem]  -bottom-[14rem]  xl:w-[54rem] xl:h-[54rem] lg:w-[50rem] lg:h-[50rem] md:w-[44rem] md:h-[44rem] w-[40rem] h-[40rem] rounded-full bg-[#9bbfbf] dark:bg-slate-400"></div>
    </div>     --}}
    <main class="w-full md:ml-[250px] min-h-screen dmode transition-all duration-300 ease-linear">


        @include('partials.navbar')
        <section class="md:pt-16 pt-12 md:mx-8 mx-2  font-quicksand">

            @yield('content')



        </section>
    </main>
    <script>
        const darkModeStatus = localStorage.getItem('darkMode');

        if (darkModeStatus === 'true') {
            $('html').addClass('dark');
        } else {
            $('html').removeClass('dark');
        }

        $('#darkmode').prop('checked', darkModeStatus === 'true');

        // Handler saat checkbox diklik
        $('#darkmode').click(function() {
            const currentStatus = $('html').hasClass('dark');
            const newStatus = !currentStatus;
            localStorage.setItem('darkMode', newStatus);
            $('html').toggleClass('dark', newStatus);
        });
        //==============================
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var pageLoading = document.getElementById('pageLoading');

            window.addEventListener('load', function() {
                pageLoading.classList.add('fade-out');

                // Tambahkan penundaan sebelum mengubah tampilan menjadi none
                setTimeout(function() {
                    pageLoading.style.display = 'none';
                }, 500); // Sesuaikan dengan waktu transisi CSS
            });
        })


        $(".akun").click(function() {
            $(".profilUser").toggleClass("hidden");
            $("#drop-down").toggleClass("putar");
        });

        $(".bagan").each(function(i) {
            setTimeout(function() {
                $(".bagan").eq(i).addClass("fadeAll");
            }, 600 * i);
        });


        ///////////// minimize sidebar \\\\\\\\\\\\\\\\\\\\\\
        const isMinimized = localStorage.getItem("isMinimized");
        if (isMinimized === "true") {
            // Terapkan perubahan sesuai dengan status yang disimpan
            $("aside").addClass("lebar");
            $("main").addClass("md:ml-[90px]");
            $(".title-menu").addClass("hidden");
            $("#panah-menu").addClass("panah-rotate");
        }
        $("#minimize").click(function() {
            $("aside").toggleClass("lebar");
            $("main").toggleClass("md:ml-[90px]");
            $(".title-menu").toggleClass("hidden");
            $("#panah-menu").toggleClass("panah-rotate");
            const isMinimized = $("aside").hasClass("lebar");
            localStorage.setItem("isMinimized", isMinimized);
        });
        ///////////// end minimize sidebar \\\\\\\\\\\\\\\\\\\\\\
        $("#hamburger").click(function() {
            // $("aside").toggleClass("hidden");
            $("aside").toggleClass("translate-x-0");
        });
        $("#close-side").click(function() {
            $("aside").toggleClass("translate-x-0");
        });
        $(".logout-button").on("click", function(event) {
            event.preventDefault();

            Swal.fire({
                title: 'Konfirmasi Logout',
                text: 'Anda yakin ingin logout?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Logout',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#logout-form').submit();
                }
            });
        })
    </script>




</body>

</html>
