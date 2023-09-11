    <aside
        class="w-[250px] h-screen side-dmode shadow z-40 group/sidebar hover:w-[250px] transition-all duration-300 ease-linear md:block md:fixed fixed md:translate-x-0 -translate-x-72">
        <div class="logo h-14 w-full flex items-center relative">
            <div class="md:w-[100%] w-[85%] flex items-center px-5 overflow-hidden ml-2">
                <img class="w-8 h-8" src="/assets/svg/logo.svg" alt="" srcset="" />
                <span
                class="title-menu tracking-wide group-hover/sidebar:flex  pl-3 pt-1 font-semibold text-4xl text-transparent bg-clip-text bg-gradient-to-r from-teal-500 to-teal-600 font-ubuntu">
                <a href="/">
                    Medi<span>Osa</span>
                </a>
            </span>
            </div>
            <div id="close-side" class="w-[15%] md:hidden block">
                <i class="fa-regular fa-circle-xmark text-slate-500"></i>
            </div>
        </div>
        <section class="flex flex-col h-full  w-full mt-5">
            <div class="flex flex-col w-full h-[80%]  px-5">
                <div class="flex justify-between">
                    <span class="text-slate-800 font-semibold text-xs ml-1 mb-3 font-quicksand dark:text-slate-300">Menu</span>
                </div>
                <ul class="font-quicksand">
                    <li class="mb-1.5">
                        <a href="/dashboard" class="">
                            <div
                                class="nav-link hover-link group/link text-slate-400 {{ request()->is('dashboard') ? 'aktif' : '' }}">
                                <div class="w-12 h-full px-1.5 flex items-center">
                                    <div class="shadow w-9 h-8 middle rounded-lg bg-box">
                                        <i
                                            class="group-hover/link:text-teal-400 fa-solid fa-qrcode fa-lg {{ request()->is('dashboard') ? 'box-text' : '' }}"></i>
                                    </div>
                                </div>
                                <div
                                    class="title-menu tracking-wide group-hover/sidebar:flex w-36 flex items-center pl-2">
                                    Dashboard</div>
                            </div>
                        </a>
                    </li>
                    <li class="mb-1.5">
                        <a href="{{ route('pasien.index') }}" class="">
                            <div
                                class="nav-link hover-link group/link text-slate-800 {{ request()->is('dashboard/pasien*') ? 'aktif' : '' }}">
                                <div class="w-12 h-full px-1.5 flex items-center">
                                    <div class="shadow w-9 h-8 middle rounded-lg bg-box">
                                        <i
                                            class="group-hover/link:text-teal-400 fa-solid fa-user-plus {{ request()->is('dashboard/pasien*') ? 'box-text' : '' }}"></i>
                                    </div>
                                </div>
                                <div
                                    class="title-menu tracking-wide group-hover/sidebar:flex w-36 flex items-center whitespace-nowrap pl-2">
                                    Input Pasien</div>
                            </div>
                        </a>
                    </li>
                    <li class="mb-1.5">
                        <a href="{{ route('diagnosis.index') }}" class="">
                            <div
                                class="nav-link hover-link group/link text-slate-800 {{ request()->is('dashboard/diagnosis') ? 'aktif' : '' }}">
                                <div class="w-12 h-full px-1.5 flex items-center">
                                    <div class="shadow w-9 h-8 middle rounded-lg bg-box">
                                        <i
                                            class="group-hover/link:text-teal-400 fa-solid fa-stethoscope {{ request()->is('dashboard/diagnosis') ? 'box-text' : '' }}"></i>
                                    </div>
                                </div>
                                <div
                                    class="title-menu tracking-wide group-hover/sidebar:flex w-36 flex items-center pl-2">
                                    Diagnosis</div>
                            </div>
                        </a>
                    </li>

                    <li class="mb-1.5">
                        <a href="{{ route('riwayat.index') }}" class="">
                            <div
                                class="nav-link hover-link group/link group text-slate-800 {{ request()->is('dashboard/riwayat*') ? 'aktif' : '' }}">
                                <div class="w-12 h-full px-1.5 flex items-center">
                                    <div class="shadow w-9 h-8 middle rounded-lg bg-box">
                                        <i
                                            class="group-hover/link:text-teal-400  fa-solid fa-file-waveform {{ request()->is('dashboard/riwayat*') ? 'box-text' : '' }}"></i>
                                    </div>
                                </div>
                                <div
                                    class="title-menu tracking-wide group-hover/sidebar:flex w-36 flex items-center pl-2">
                                    Riwayat</div>
                            </div>
                        </a>
                    </li>
                    <li class="mb-1.5">
                        <a href="{{ route('analistik.index') }}" class="">
                            <div
                                class="nav-link hover-link group/link group text-slate-800 {{ request()->is('dashboard/analistik*') ? 'aktif' : '' }}">
                                <div class="w-12 h-full px-1.5 flex items-center">
                                    <div class="shadow w-9 h-8 middle rounded-lg bg-box">
                                        <i
                                            class="group-hover/link:text-teal-400 fa-solid  fa-chart-line {{ request()->is('dashboard/analistik*') ? 'box-text' : '' }}"></i>
                                    </div>
                                </div>
                                <div
                                    class="title-menu tracking-wide group-hover/sidebar:flex w-36 flex items-center pl-2">
                                    Analistik</div>
                            </div>
                        </a>
                    </li>
                </ul>
                @if (Auth::user()->isAdmin())
                    <div class="flex justify-between mt-5">
                        <span class="text-slate-800 font-quicksand font-semibold text-xs ml-1 mb-3 dark:text-slate-300">Admin</span>
                    </div>
                    <ul class="font-quicksand">
                        <li class="mb-1.5">
                            <a href="{{ route('pengguna.index') }}" class="">
                                <div
                                    class="nav-link hover-link group/link  {{ request()->is('dashboard/pengguna*') ? 'aktif' : '' }}">
                                    <div class="w-12 h-full px-1.5 flex items-center">
                                        <div class="shadow w-9 h-8 middle rounded-lg bg-box ">
                                            <i
                                                class="group-hover/link:text-teal-400 fa-solid fa-user-gear  {{ request()->is('dashboard/pengguna*') ? 'box-text' : '' }}"></i>
                                        </div>
                                    </div>
                                    <div
                                        class="title-menu tracking-wide group-hover/sidebar:flex w-36 flex items-center pl-2">
                                        kelola user</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                @endif
            </div>
            <div class="flex flex-col w-full h-[20%]  px-5">
                <ul class="">
                    <li class="mb-1.5">
                        <a class="logout-button">
                            <div class="nav-link cursor-pointer hover-link group/link text-slate-400 dark:text-slate-300 bg-slate-100 dark:bg-slate-700">
                                <div class="w-12 h-full pl-1.5 flex items-center">
                                    <div class="shadow w-9 h-8 middle rounded-lg bg-box">
                                        <i class="group-hover/link:text-teal-400 fa-solid fa-power-off "></i>
                                    </div>
                                </div>
                                <div
                                    class="title-menu tracking-wide group-hover/sidebar:flex md:w-36 w-32 flex items-center pl-7">
                                    Logout</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
            </form>
        </section>
    </aside>
