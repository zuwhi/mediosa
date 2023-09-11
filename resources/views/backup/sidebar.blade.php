 <aside 
            class="pt-20 sidebar dmode md:w-[16rem]  w-48 h-screen sm:flex flex flex-col items-center md:-translate-x-0 z-30 fixed transition-transform md:duration-300 md:delay-0 duration-700 delay-100 -translate-x-52">
            {{-- <div class="greeting md:w-44 w-36 text-slate-500">
                <h3 class="md:text-2xl text-lg">Welcome</h3>
                <p class="">Dr. Richard lee</p>
            </div> --}}
            <div class="w-36 md:w-44 lg:w-[190px] py-2  rounded-2xl  border-Oldgreen/20 border shadow-md flex items-center dark:border-slate-400">
                <ul class="md:text-xl w-full  text-md text-slate-400">
                    <a href="/dashboard">
                        <li class="menu-li group py-2 {{ request()->is('dashboard') ? 'text-Oldgreen' : '' }}">
                            <div
                                class="h-7 w-3 rounded-r-lg  absolute bg-Oldgreen {{ request()->is('dashboard') ? '' : 'hidden' }}">
                            </div>
                            <div class="xl:ml-7 md:ml-6 ml-5 w-full"><i
                                    class="fa-solid fa-bars-progress mr-2"></i><span>Dashboard</span></div>
                        </li>
                    </a>
                    <a href="{{ route('pasien.index') }}">
                        <li
                            class="menu-li group py-2 whitespace-nowrap {{ request()->is('dashboard/pasien*') ? 'text-Oldgreen' : '' }}">
                            <div
                                class="h-7 w-3 rounded-r-lg  absolute bg-Oldgreen {{ request()->is('dashboard/pasien*') ? '' : 'hidden' }}">
                            </div>
                            <div class="xl:ml-7 md:ml-6 ml-5 w-full"><i
                                    class="fa-solid fa-person-circle-plus mr-2"></i><span
                                    class="whitespace-nowrap">Input
                                    Pasien</span></div>
                        </li>
                    </a>
                    <a href="{{ route('diagnosis.index') }}">
                        <li class="menu-li group py-2 {{ request()->is('dashboard/diagnosis') ? 'text-Oldgreen' : '' }}">
                            <div
                                class="h-7 w-3 rounded-r-lg   absolute bg-Oldgreen {{ request()->is('dashboard/diagnosis') ? '' : 'hidden' }}">
                            </div>
                            <div class="xl:ml-7 md:ml-6 ml-5 w-full"><i
                                    class="fa-solid fa-stethoscope mr-2"></i><span>Diagnose</span></div>
                        </li>
                    </a>
                    <a href="{{ route('riwayat.index') }}">
                        <li
                            class="menu-li group py-2 {{ request()->is('dashboard/riwayat*') ? 'text-Oldgreen' : '' }}">
                            <div
                                class="h-7 w-3 rounded-r-lg  absolute bg-Oldgreen {{ request()->is('dashboard/riwayat*') ? '' : 'hidden' }}">
                            </div>
                            <div class="xl:ml-8 md:ml-6 ml-5 w-full"><i
                                    class="fa-solid fa-file-medical mr-2"></i><span>Riwayat</span></div>
                        </li>
                    </a>
                    <a href="{{ route('analistik.index') }}">
                        <li
                            class="menu-li group py-2 {{ request()->is('dashboard/analistik*') ? 'text-Oldgreen' : '' }}">
                            <div
                                class="h-7 w-3 rounded-r-lg  absolute bg-Oldgreen {{ request()->is('dashboard/analistik*') ? '' : 'hidden' }}">
                            </div>
                            <div class="xl:ml-8 md:ml-6 ml-5 w-full"><i
                                    class="fa-solid fa-chart-line mr-2"></i><span>Analistik</span></div>
                        </li>
                    </a>
     
                </ul>
            </div>
            @if (Auth::user()->isAdmin())
            <div class="w-36 md:w-44 lg:w-[190px] my-5 py-0  rounded-2xl  border-Oldgreen/20 border shadow-md flex items-center dark:border-slate-400">
                <ul class="md:text-xl w-full text-md text-slate-400">
                        <a href="{{ route('pengguna.index') }}">
                            <li
                                class="menu-li pr-7 group py-2 {{ request()->is('dashboard/pengguna*') ? 'text-Oldgreen' : '' }}">
                                <div
                                    class="h-7 w-3 rounded-r-lg  absolute bg-Oldgreen {{ request()->is('dashboard/pengguna*') ? '' : 'hidden' }}">
                                </div>
                                <div class="xl:ml-8 md:ml-6 ml-5 w-full"><i
                                        class="fa-solid fa-user-gear mr-2"></i><span>Admin</span></div>
                            </li>
                        </a>
                    </ul>
                </div>
            @endif
            <div class="absolute bottom-[4.9rem] items-center p-0.5 justify-around w-36 md:w-44 lg:w-[190px] rounded-xl px-2 border-Oldgreen/20 border shadow-md flex  transition duration-300  text-slate-400  dark:border-slate-400 ">
                <label for="darkmode" class="md:pl-3 pl-0 md:text-[1rem] text-xs whitespace-nowrap">Dark mode</label>
                <div  class="peer/darkmode  w-[3.6rem] shadow flex items-center border dark:border-slate-300 dark:shadow-slate-600  rounded-xl group  my-2 " >
                    <label id="ceki" class="swap swap-rotate translate-x-0 duration-300 ease-in p-0.5"  >
                        <input id="darkmode" type="checkbox"  class="group-active opacity-0" />
                        <svg class="swap-off fill-current w-[24px] h-[24px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z"/></svg>
                        <svg class="swap-on fill-current w-[24px] h-[24px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z"/></svg>
                    </label>  
                </div>
            </div>
  
            <div class="absolute bottom-3 w-36 md:w-44 lg:w-[190px] rounded-xl py-1.5 border-Oldgreen/20 border shadow-md flex  transition duration-300 hover:scale-95 text-slate-400 hover:shadow hover:text-Oldgreen hover:bg-slate-100 dark:hover:bg-slate-500 dark:border-slate-400">
                <a  class="logout-button w-full flex justify-center items-center my-1" >
                    <i class="p-1 mr-1 text-xl fa-solid fa-arrow-right-from-bracket fa-flip-horizontal"></i>
                    <h4 class="font-normal text-slate-400 text-xl cursor-pointer">Logout</h4>
                </a>
            </div>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
            </form>

        </aside>
        <div class="bg-sidebar z-10 w-52 h-screen sm:hidden absolute bg-gradient-to-r from-slate-900 transition-transform duration-700 delay-200 -translate-x-60">
        </div>

