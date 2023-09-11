     <nav class="md:h-14 h-12 shadow-sm dark:shadow-slate-800 w-[100%]  flex items-center z-30 fixed dmode">
         <div class="w-[50%] cursor-pointer">
             <div id="minimize" class="ml-2 h-10 w-10 justify-center items-center md:flex hidden">
                 <i id="panah-menu"
                     class="duration-300 transitiion fa-solid fa-bars-staggered fa-lg hover:text-slate-500 hover:scale-105 text-slate-500 dark:text-slate-400"></i>
             </div>
             <div id="hamburger"
                 class="ml-2 h-10 w-10 rounded-full bg-slate-100 dark:bg-slate-900 hover:dark:bg-slate-800 justify-center items-center md:hidden flex">
                 <i class="fa-solid fa-bars fa-lg dark:text-slate-300"></i>
             </div>
         </div>

         <div id="akun" class=" w-fit right-0 fixed h-12 cursor-pointer   flex justify-end items-center mr-3">
             <div class="mr-2">
                 <label  class="swap  swap-rotate translate-x-0 duration-300 ease-in p-0.5">
                     <input id="darkmode" type="checkbox" class="group-active opacity-0" />
                     <svg class="swap-off fill-teal-500 w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                         <path
                             d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                     </svg>
                     <svg class="swap-on fill-teal-500 w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                         <path
                             d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                     </svg>
                 </label>
             </div>

             <div class="akun ml-2 p-1 px-3 h-8 rounded-2xl hover:bg-teal-600 bg-teal-500 dark:bg-teal-600 md:flex justify-center items-center hidden text-white">
                 <i class="text-xs fa-solid fa-user"></i>
                 <span class="mx-1.5 text-sm font-semibold">{{ auth()->user()->nama }}</span>
                 <i id="drop-down"
                     class="drop-down text-xs mt-0.5 duration-200 text-white cursor-pointer fa-solid fa-chevron-down"></i>
             </div>
             <div class="akun mr-1 rounded-full md:hidden   flex justify-center items-center text-white">
                 <i class="drop-down text-xl fa-solid fa-user text-teal-500"></i>
             </div>
             <div
                 class="profilUser   hidden  fixed bg-white dark:bg-slate-700 shadow-lg rounded-lg h-fit w-44 right-3 top-14 pb-5 max-h-max">

                 <ul class="mt-5">
                     <li class="flex flex-col items-center justify-center">
                         <img class="w-24 h-24 rounded-full object-cover  border-4 border-white"
                             src="{{ asset('assets/svg/avatar.svg') }}" alt="" />
                         {{-- <a href="/poridi"
                                class="w-36 px-4 py-2 mt-3 text-center font-semibold rounded-md text-slate-100 bg-Oldgreen hover:bg-slate-200 hover:text-Oldgreen">
                                Lihat profil </a> --}}
                     </li>
                     <li class="flex flex-col items-center justify-center">
                         <a href="{{ route('logout') }}"
                             class="logout-button w-36 px-4 py-2 mt-2 text-center font-semibold rounded-md text-slate-100 bg-teal-500 hover:bg-slate-200 hover:text-Oldgreen">
                             Log Out <i class="ml-2 fa-solid fa-power-off "></i> </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             {{ csrf_field() }}
                         </form>
                     </li>
                 </ul>
             </div>


         </div>

         </div>
         {{-- <div id="akun" class=" w-[20%]  bg-purple-300 h-full flex justify-end">
          <img src="{{ asset('assets/svg/logo.svg') }}" alt="" srcset="">
        </div> --}}
     </nav>
