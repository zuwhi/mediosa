<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MediOsa</title>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.css')}}" />
  </head>
  <body>
    <div class="latar h-screen w-screen bg-slate-200 flex justify-center items-center">
      <div class="card shadow-md rounded-2xl p-3 w-full bg-[#F4F6FF] h-[30rem] max-w-[900px] flex mx-9">
        <div class="rounded-2xl hidden md:flex  flex-1 h-full bg-Oldgreen bg-cover items-end justify-center">
            <img class="w-max h-96  object-cover" src="{{asset('assets/image/doctor.png')}}" alt="" srcset="">
        </div>
        <div class="rounded-r-2xl flex-1 flex flex-col  h-full  md:w-full w-[80%] ">
          <h3 class="text-4xl mt-12 text-center font-semibold">Login</h3>
          <h3 class="md:text-xl text-xs my-4 text-center ">Selamat datanng di website kami</h3>
          <form action="" class="">
            <div class="flex mt-5 mx-6 justify-center items-center relative">
                <i class="text-2xl relative left-9 fa-solid fa-user-doctor text-gray-400"></i>
              <input
                class="w-[90%] shadow-sm pl-12 py-3 border-none placeholder-gray-400 text-black rounded-xl   focus:ring-gray-400 focus:ring-1 focus:outline-none"
                type="text"
                name="username"
                id=""
                placeholder="Masukkan Username"
              />
            </div>
            <div class="flex mt-6 mx-6 justify-center items-center relative">
                <i class="text-1xl relative left-9 fa-solid fa-key text-gray-400"></i>
              <input
                class="w-[90%] shadow-sm pl-12 py-3 border-none placeholder-gray-400 text-black rounded-xl   focus:ring-gray-400 focus:ring-1 focus:outline-none"
                type="text"
                name="username"
                id=""
                placeholder="Masukkan Password"
              />
            </div>
            <div class="mx-11 mt-12">

                <button type="submit" class="hover:bg-teal-700 hover:text-slate-200 ml-3 bg-Oldgreen py-3 px-8 rounded-xl w-full text-white font-semibold text-xl "> Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
