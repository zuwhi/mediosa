<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MediOsa</title>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}" />
        <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap');
    </style>
</head>

<body class="bg-[#E2E8F0] grid place-items-center min-h-screen">
    <div class="grid lg:grid-cols-2 gap-5 bg-[#F4F6FF] shadow-md rounded-2xl p-3 md:mb-0 mb-32 md:mx-0 mx-0 md:w-fit w-[98%]">
        <div class="bg-[#47878E] rounded-2xl w-[450px] h-[450px]  hidden lg:flex items-end justify-center">
            <img src="{{ asset('assets/image/doctor.png') }}" alt="" class="w-[350px]" />
        </div>

        <div class="text-center lg:my-12 my-8 mx-5 font-nunito">
            <p class="text-4xl font-semibold">Login</p>
            <p class="md:text-xl text-sm my-4">Selamat datang di website kami</p>
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form method="POST" action="{{ route('login') }}" class="">
                @csrf
                <div class="flex relative justify-center mt-5 md:mx-6">
                    <i
                        class="lg:text-2xl text-xl absolute lg:left-10 left-5 top-3 fa-solid fa-user-doctor text-gray-400"></i>
                    <input
                        class="lg:w-[90%] w-[100%] shadow-sm md:pl-16 pl-14 lg:py-3 py-3 border-none placeholder-gray-400 text-black rounded-xl focus:ring-gray-400 focus:ring-1 focus:outline-none"
                        type="text" name="email" id="email" placeholder="Masukkan Username" required />
                </div>
                <div class="flex relative justify-center md:mt-6 mt-5 md:mx-6">
                    <i class="lg:text-2xl text-xl absolute lg:left-10 left-5 top-3  fa-solid fa-key text-gray-400"></i>
                    <input
                        class="lg:w-[90%] w-[100%] shadow-sm md:pl-16 pl-14 lg:py-3 py-3 border-none placeholder-gray-400 text-black rounded-xl focus:ring-gray-400 focus:ring-1 focus:outline-none"
                        type="password" name="password" id="password" placeholder="Masukkan Password" required />
                </div>
                <div class="flex  justify-center md:mt-12 mt-7 md:mx-6">
                    <button type="submit"
                        class="hover:bg-slate-300 hover:text-slate-600 transition duration-150 hover:scale-95  bg-[#47878E] lg:py-3 py-2 px-8 rounded-xl lg:w-[90%] w-[98%] text-white font-semibold text-xl">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
