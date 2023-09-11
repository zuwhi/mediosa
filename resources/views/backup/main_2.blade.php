<!DOCTYPE html>
<html lang="en" class="duration-500 transition-opacity" data-theme="">

@include('partials.header')

<body  class="  relative">
    <!-- ================ start Animation Loading ============== -->
    <div id="pageLoading" class="load z-[99] fixed w-full h-full bg-slate-50 dark:bg-slate-700 flex flex-col justify-center items-center transition-opacity duration-500 ease-in-out">
      <div>
        <span class="loading loading-spinner loading-lg text-Oldgreen"></span>
      </div>
    </div>
    <!-- ================ end Animation Loading ============== -->

    <div class="bg-img h-screen w-full dmode overflow-hidden fixed z-[-1] flex">
        <div class="circle1 fixed xl:-right-5 md:-right-24 lg:-right-10 -right-56 opacity-20 z-[-3] xl:-bottom-[21rem] lg:-bottom-[18rem] md:-bottom-[16rem]  -bottom-[14rem]  xl:w-[44rem] xl:h-[44rem] lg:w-[40rem] lg:h-[40rem] md:w-[34rem] md:h-[34rem] w-[30rem] h-[30rem] rounded-full bg-[#82adb2] dark:bg-slate-400"></div>
        <div class="circle1 fixed xl:-right-5 md:-right-24 lg:-right-10 -right-56 opacity-20 z-[-2] xl:-bottom-[21rem] lg:-bottom-[18rem] md:-bottom-[16rem]  -bottom-[14rem]  xl:w-[54rem] xl:h-[54rem] lg:w-[50rem] lg:h-[50rem] md:w-[44rem] md:h-[44rem] w-[40rem] h-[40rem] rounded-full bg-[#9bbfbf] dark:bg-slate-400"></div>
    </div>    
    @include('partials.navbar')

    <main  class="flex ">
       @include('partials.sidebar')
        <section class="md:pt-20 pt-[4.4rem] md:pl-[255px]   md:pr-0 flex-auto w-24 md:w-full block md:mx-0 mx-1 ">
            @yield('content')
        </section>

    </main>

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






    //============================================== dark mode ===================================================
     // Cek apakah ada status spinner yang tersimpan di Local Storage
    const spinnerStatus = localStorage.getItem('spinnerStatus');

    // Set status spinner berdasarkan status yang tersimpan atau default jika belum ada yang tersimpan
    if (spinnerStatus === 'true') {
        $('.swap').addClass('spinner');
    } else {
        $('.swap').removeClass('spinner');
    }

    // Cek apakah ada status dark mode yang tersimpan di Local Storage
    const darkModeStatus = localStorage.getItem('darkMode');

    // Set tema berdasarkan status yang tersimpan atau default jika belum ada yang tersimpan
    if (darkModeStatus === 'true') {
        $('html').addClass('dark');
    } else {
        $('html').removeClass('dark');
    }

    // Set status checkbox berdasarkan status yang tersimpan atau default jika belum ada yang tersimpan
    $('#darkmode').prop('checked', darkModeStatus === 'true');

    // Handler saat checkbox diklik
    $('#darkmode').click(function () {
        $('.swap').toggleClass('spinner');
        const currentStatus = $('html').hasClass('dark');
        const newStatus = !currentStatus;

        // Simpan status spinner ke Local Storage
        localStorage.setItem('spinnerStatus', $('.swap').hasClass('spinner'));

        // Simpan status baru dark mode di Local Storage
        localStorage.setItem('darkMode', newStatus);

        // Ubah kelas pada elemen HTML untuk mengaktifkan atau menonaktifkan dark mode
        $('html').toggleClass('dark', newStatus);
    });
        //============================================== dark mode ===================================================













        $(".bagan").each(function(i) {
                setTimeout(function() {
                    $(".bagan").eq(i).addClass("fadeAll");
                }, 600 * i);
            });
        });
        $("#profilDokter").click(function() {
            $(".profilUser").toggleClass("hidden");
            $("#drop-down").toggleClass("putar");
        });

        $("#bars").click(function() {
            // $("#profilDokter").toggleClass("hidden");
            $("#bars").toggleClass("fa-bars fa-xmark");
            $("#bars").toggleClass("ring-nav");
            $(".sidebar").toggleClass("-translate-x-52");
            $(".bg-sidebar").toggleClass("-translate-x-60");
            // $(".sidebar").toggleClass("fixed");
        });

         $(".logout-button").on("click", function (event) {
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
    });
    
    </script>

</body>

</html>
