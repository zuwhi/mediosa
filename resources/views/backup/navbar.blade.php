<nav
    class="text-3xl w-full shadow-sm border-b-2 border-slate-200 dark:border-slate-600  md:h-16 h-16  flex items-center fixed z-50 -top-1 dmode ">
    <div class="flex-1">
        <div class="logo h-20 w-full hidden sm:hidden md:flex items-center text-Oldgreen">
            {{-- <i class="fa-solid fa-hand-holding-medical ml-4 md:ml-12 mr-2"></i> --}}
            <a href="/" class="flex">
                <img src="{{ asset('assets/svg/logo.svg') }}" class="w-7 ml-3 md:ml-11 mr-2" alt="">
                <span class="font-bold text-transparent  bg-clip-text bg-gradient-to-r from-teal-500 to-teal-600">
                    Medi<span>Osa</span></span>
            </a>
        </div>
        <div class="md:hidden">
            <i id="bars"
                class="px-3 py-2 dmode rounded-lg active:ring-1 active:ring-slate-400 shadow-2xl fa-solid fa-bars ml-6 text-3xl text-slate-500 dark:text-slate-200 md:hidden block"></i>
        </div>
    </div>
    <div class="flex-1 flex justify-end">
        <div
            class="account md:mt-2 h-12 mr-4 flex flex-col justify-center items-center z-20 md:w-44 md:text-sm text-sm">
            <div class="flex items-center p-1 gap-2 z-50 bg-Oldgreen rounded-full cursor-pointer" id="profilDokter">
                <div class="profil"><img class="md:w-8 md:h-8 h-7 w-7 object-cover rounded-full"
                        src="{{ asset('assets/svg/avatar.svg') }}" alt="" /></div>
                <div class="nama text-white font-semibold whitespace-nowrap"><span>{{ auth()->user()->nama }}</span>
                </div>
                <i id="drop-down"
                    class="fa-solid fa-chevron-down duration-200 text-white mr-2 cursor-pointer sm:text-sm text-md"></i>
            </div>
            <div
                class="profilUser bg-white bg-opacity-50 backdrop-blur-lg border-solid border-2 hidden w-44 max-h-max absolute top-[70px] rounded-2xl shadow-xl pb-5 z-0">
                <ul class="mt-5">
                    <li class="flex flex-col items-center justify-center">
                        <img class="w-24 h-24 rounded-full object-cover border-double border-4 border-white"
                            src="{{ asset('assets/svg/avatar.svg') }}" alt="" />
                        {{-- <a href="/poridi"
                                class="w-36 px-4 py-2 mt-3 text-center font-semibold rounded-md text-slate-100 bg-Oldgreen hover:bg-slate-200 hover:text-Oldgreen">
                                Lihat profil </a> --}}
                    </li>
                    <li class="flex flex-col items-center justify-center">
                        <a href="{{ route('logout') }}"
                            class="logout-button w-36 px-4 py-2 mt-2 text-center font-semibold rounded-md text-slate-100 bg-Oldgreen hover:bg-slate-200 hover:text-Oldgreen">
                            Log Out <i class="ml-2 fa-solid fa-arrow-right-from-bracket"></i> </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
