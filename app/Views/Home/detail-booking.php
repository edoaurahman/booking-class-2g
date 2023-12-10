<!-- Detail -->
<div class="detail dark:bg-dark_grey1">
    <!-- Header start -->
    <div class="w-full">
        <!-- header desktop start -->
        <div class="w-auto">
            <ol class="hidden sm:flex items-center w-full  font-medium text-center text-white  dark:text-gray-400 sm:text-base bg-biru2 py-16 px-28 ">
                <li class="flex md:w-full items-center  text-white dark:text sm:after:content-[''] after:w-full  after:border-b after:border-white after:border-2 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-white text-2xl font-sans font-semibold">
                    <div class="flex flex-none justify-end items-center w-36 text-xl">
                        <i class="fa-solid  fa-circle-check mr-3"></i>
                        <p>Ruang </p>
                    </div>
                </li>
                <li class="flex md:w-full items-center text-white dark:text sm:after:content-[''] after:w-full  after:border-b after:border-biru after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-biru text-2xl font-sans font-bold">
                    <div class="flex flex-none w-36  items-center text-xl">
                        <i class="fa-solid fa-circle-check ml-3 mr-3"></i>
                        <p>Waktu</p>
                    </div>
                </li>
                <li class="flex md:w-full items-center text-biru dark:text sm:after:content-[''] after:w-full  after:border-b after:border-biru after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-biru text-2xl font-sans font-bold">
                    <div class="flex flex-none items-center text-xl">
                        <i class="fa-solid fa-clipboard mr-3"></i>
                        <p>Isi Formulir</p>
                    </div>

                <li class="flex items-center mr-10">
                    <div class="flex flex-none items-center text-biru">
                        <i class="fa-solid fa-clipboard-check mr-3"></i>
                        <p>Konfirmasi</p>
                    </div>
                </li>
            </ol>

            <!-- mobile  -->
            <ol class="sm:hidden  flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500   shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-800  dark:border-gray-700 sm:p-4 sm:space-x-4 rtl:space-x-reverse">
                <li class="flex items-center text-blue-600  ">
                    <i class="fa-solid fa-circle-check  "></i>
                    <div class="ml-2 mr-2">Ruang</div>
                    <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                    </svg>
                </li>

                <li class="flex items-center text-blue-600 px-2 ">
                    <i class="fa-solid fa-circle-check mr-1 "></i>
                    <div class="ml-2 mr-2">Waktu</div>
                    <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                    </svg>
                </li>

                <li class="flex items-center ">
                    <span class="flex items-center justify-center  w-4 h-4 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                        3
                    </span>
                    <div class=" ">Isi Formulir</div>
                </li>
                <svg class="w-3 h-3 ms-2 mr-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                </svg>

                <li class="flex items-center ">
                    <span class="flex items-center justify-center ml-2 w-4 h-4 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                        4
                    </span>
                    Review
                </li>
            </ol>
        </div>
        <!-- Header end -->
        <div class="container py-10 px-3 mx-auto ">
            <div class="grid grid-cols-1 lg:grid-cols-8 sm:gap-4 sm:mb-11 md:grid-cols-10">
                <!-- ###################### -->
                <!-- Colom 1 -->
                <!-- ###################### -->
                <div class="font-sans top-24 p-3 lg:col-span-6 md:col-span-6">
                    <div class="col-span-2 py-3">
                        <h1 class="flex items-center  text-2xl uppercase font-extrabold text-slate-700 group-hover:text-white dark:text-white dark:group-hover:text-dark_grey5">
                            <span><?= $ruang->nama_ruang ?></span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-dark_grey4 dark:text-slate-100 ms-2 dark:group-hover:bg-gray-600"><?= $ruang->nama_lantai ?></span>
                        </h1>
                    </div>
                    <!-- Fasilitas start -->
                    <div class="flex sm:flex-wrap sm:justify-start flex-nowrap overflow-x-auto pb-3 pt-8">
                        <!-- fasilitas 1 -->
                        <div class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i class="fa-solid fa-wifi my-auto mr-2 p-3 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Wifi 40 Mbps</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i class="fa-solid fa-bars-progress my-auto mr-2 p-3 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Proyektor</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i class="fa-solid fa-desktop my-auto mr-2 p-3 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Monitor</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i class="fa-solid fa-plug my-auto mr-2 p-3 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Stop Kontak</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i class="fa-solid fa-chalkboard my-auto mr-2 p-3 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Papan Tulis</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i class="fa-solid fa-chair my-auto mr-2 p-3 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Kursi</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i class="fa-solid fa-table my-auto mr-2 p-3 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Meja</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i class="fa-solid fa-marker my-auto mr-2 p-3 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Spidol</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i class="fa-solid fa-eraser my-auto mr-2 p-3 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Penghapus</p>
                            </div>
                        </div>
                        <!-- fasilitas 1 -->
                        <div class="fas1 flex w-[150px] flex-none ml-8 mt-5 items-center text-gray-500 dark:text-white">
                            <i class="fa-solid fa-book my-auto mr-2 p-3 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                            <div class="content ">
                                <p class="uppercase text-[10px] font-normal">Fasilitas</p>
                                <p class="text-sm font-semibold">Perpustakaan Kecil</p>
                            </div>
                        </div>

                    </div>
                    <!-- Fasilitas end -->
                    <!-- Description Start  -->
                    <div class="deskripsi">
                        <p class="text-gray-500 dark:text-gray-300 mt-8">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent .</p>
                        <div class="hs-collapse hidden sm:block w-full overflow-hidden transition-[height] duration-300">
                            <ul class="pl-1 pt-4 text-gray-500 dark:text-gray-300">
                                <li class="my-auto leading-7 "><i class="fa-solid fa-circle-chevron-right "></i><span class="ml-3 text-sm font-normal capitalize my-auto">Lorem ipsum dolor sit amet.</span></li>
                                <li class="my-auto leading-7"><i class="fa-solid fa-circle-chevron-right "></i><span class="ml-3 text-sm font-normal capitalize my-auto">Lorem ipsum dolor sit amet.</span></li>
                                <li class="my-auto leading-7"><i class="fa-solid fa-circle-chevron-right "></i><span class="ml-3 text-sm font-normal capitalize my-auto">Lorem ipsum dolor sit amet.</span></li>
                            </ul>

                            <p class="pt-4 text-gray-500 dark:text-gray-300">consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <!-- <p class="mt-2">
                                <button onclick="transitionButton()" type="button" class="hs-collapse-toggle sm:hidden inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" id="hs-show-hide-collapse" data-hs-collapse="#hs-show-hide-collapse-heading">
                                    <span class="hs-collapse-open:hidden" id="readMore">Read more</span>
                                    <span class="hs-collapse-close:block hidden" id="readLess">Read less</span>
                                    <i class="fa-solid fa-chevron-up rotate-180 flex-shrink-0 w-4 h-4 text-base" id="iconMoreAndLess"></i>
                                </button>
                            </p> -->
                    </div>
                    <!-- Description End  -->
                    <!-- Informasi Kelas start  -->
                    <div class="kelas mt-7">
                        <div class="judul">
                            <h2 class="text-gray-600 font-sans font-bold text-xl mb-4 dark:text-gray-100">Informasi Jam</h2>
                        </div>
                    </div>
                    <!-- slide start -->
                    <div x-data="detailBooking" id="controls-carousel" class="relative w-full" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative  overflow-hidden h-[450px] sm:h-52 rounded-lg md:h-[340px]">
                            <!-- Status Per 7 Hari kedepan -->
                            <template x-for="(item,index) in tanggal">
                                <div class=" bg-white duration-700 ease-in-out text-center px-8 py-4 dark:bg-dark_grey1" :data-carousel-item="index === 0 ? 'active' : '' ">
                                    <div x-text="tanggal[index]" class="text-gray-500 font-sans text-base font-bold dark:text-gray-200"></div>
                                    <div class="grid grid-cols-2 sm:grid-cols-6 gap-1 mt-10 ">
                                        <template x-for="(item,index) in detailBooking[tanggal[index].split(',')[0]]">
                                            <div x-id="['popover-no-arrow']">
                                                <button :data-popover-target="$id('popover-no-arrow')" type="button" :class="item.status_jam === 'onprocess' ? 'bg-yellow-400 dark:bg-yellow-400' : item.status_jam === 'used' ? 'bg-red-400 dark:bg-red-400' : '' " class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-9 py-3 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4" x-text="`Jam ke - ${padZero(index+1)}`">Jam ke - 01</button>
                                                <div :id="$id('popover-no-arrow')" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                                    <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                        <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                                    </div>
                                                    <div class="px-3 py-2">
                                                        <p x-text="item.jam_mulai + ' - ' + item.jam_selesai">7.00 - 7.50</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </template>
                            <!-- <div class=" bg-white duration-700 ease-in-out text-center px-8 py-4 dark:bg-dark_grey1" data-carousel-item>
                                <div id="tanggalSekarang" class="text-gray-500 font-sans text-base font-bold dark:text-gray-200"></div>
                                <div x-data class="grid grid-cols-2 sm:grid-cols-6 gap-1 mt-10 ">
                                    <div x-id="['popover-no-arrow']">
                                        <button :data-popover-target="$id('popover-no-arrow')" type="button" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-9 py-3 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4">Jam ke - 01</button>
                                        <div :id="$id('popover-no-arrow')" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                            </div>
                                            <div class="px-3 py-2">
                                                <p>7.00 - 7.50</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div x-id="['popover-no-arrow']">
                                        <button :data-popover-target="$id('popover-no-arrow')" type="button" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-9 py-3 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4">Jam ke - 02</button>
                                        <div :id="$id('popover-no-arrow')" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                            </div>
                                            <div class="px-3 py-2">
                                                <p>7.50 - 8.40</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div x-id="['popover-no-arrow']">
                                        <button :data-popover-target="$id('popover-no-arrow')" type="button" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-9 py-3 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4">Jam ke - 03</button>
                                        <div :id="$id('popover-no-arrow')" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                            </div>
                                            <div class="px-3 py-2">
                                                <p>8.40 - 9.30</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div x-id="['popover-no-arrow']">
                                        <button :data-popover-target="$id('popover-no-arrow')" type="button" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-9 py-3 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4">Jam ke - 04</button>
                                        <div :id="$id('popover-no-arrow')" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                            </div>
                                            <div class="px-3 py-2">
                                                <p>9.40 - 10.30</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div x-id="['popover-no-arrow']">
                                        <button :data-popover-target="$id('popover-no-arrow')" type="button" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-9 py-3 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4">Jam ke - 05</button>
                                        <div :id="$id('popover-no-arrow')" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                            </div>
                                            <div class="px-3 py-2">
                                                <p>10.30 - 11.20</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div x-id="['popover-no-arrow']">
                                        <button :data-popover-target="$id('popover-no-arrow')" type="button" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-9 py-3 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4">Jam ke - 06</button>
                                        <div :id="$id('popover-no-arrow')" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                            </div>
                                            <div class="px-3 py-2">
                                                <p>11.20 - 12.10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div x-id="['popover-no-arrow']">
                                        <button :data-popover-target="$id('popover-no-arrow')" type="button" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-9 py-3 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4">Jam ke - 07</button>
                                        <div :id="$id('popover-no-arrow')" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                            </div>
                                            <div class="px-3 py-2">
                                                <p>12.50 - 13.40</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div x-id="['popover-no-arrow']">
                                        <button :data-popover-target="$id('popover-no-arrow')" type="button" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-9 py-3 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4">Jam ke - 08</button>
                                        <div :id="$id('popover-no-arrow')" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                            </div>
                                            <div class="px-3 py-2">
                                                <p>13.40 - 14.30</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div x-id="['popover-no-arrow']">
                                        <button :data-popover-target="$id('popover-no-arrow')" type="button" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-9 py-3 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4">Jam ke - 09</button>
                                        <div :id="$id('popover-no-arrow')" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                            </div>
                                            <div class="px-3 py-2">
                                                <p>14.30 - 15.20</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div x-id="['popover-no-arrow']">
                                        <button :data-popover-target="$id('popover-no-arrow')" type="button" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-9 py-3 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4">Jam ke - 10</button>
                                        <div :id="$id('popover-no-arrow')" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                            </div>
                                            <div class="px-3 py-2">
                                                <p>15.20 - 16.20</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div x-id="['popover-no-arrow']">
                                        <button :data-popover-target="$id('popover-no-arrow')" type="button" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-9 py-3 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4">Jam ke - 11</button>
                                        <div :id="$id('popover-no-arrow')" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                            </div>
                                            <div class="px-3 py-2">
                                                <p>16.20 - 17.10</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!-- Slider controls start -->
                        <button type="button" class=" absolute top-5  start-0 left-3 z-30 flex items-start justify-center h-full px-1 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 ">
                                <i class="fa-solid fa-chevron-left text-lg text-biru dark:text-white rtl:rotate-180"></i>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class=" absolute top-5 end-0 z-30 flex items-start justify-center h-full px-1 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 ">
                                <i class="fa-solid fa-chevron-right text-lg text-biru dark:text-white rtl:rotate-180"></i>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                        <!-- Slider controls end -->
                    </div>
                    <!-- slide end -->
                    <!-- Informasi Kelas end  -->
                    <!-- Denah start -->
                    <div class="Denah mt-7">
                        <h2 class="text-gray-600 font-sans font-bold text-xl dark:text-gray-100">Denah Lantai</h2>
                        <div class="flex flex-col gap-2  pb-6 pt-6">
                            <!-- fasilitas 1 -->
                            <div class="flex flex-initial w-64  text-gray-500  border-gray-300 items-center px-3 py-1 border-2 rounded dark:text-white dark:border-gray-600">
                                <i class="text-gray-500 fa-solid fa-list-ol mr-3 dark:text-gray-400"></i>
                                <p class="text-gray-500 text-sm font-medium dark:text-gray-400">Lift Bersama</p>
                            </div>
                            <!-- fasilitas 2 -->
                            <div class="flex  flex-initial w-64 text-gray-500 border-gray-300 items-center px-3 py-1 border-2 rounded dark:text-white dark:border-gray-600">
                                <i class="text-gray-500 fa-solid fa-stairs mr-3 dark:text-gray-400"></i>
                                <p class="text-gray-500 text-sm font-medium dark:text-gray-400">Tangga Bersama</p>
                            </div>
                            <!-- fasilitas 3 -->
                            <div class="flex flex-initial w-64 text-gray-500 border-gray-300 items-center px-3 py-1 border-2 rounded dark:text-white dark:border-gray-600">
                                <i class="text-gray-500 fa-solid fa-tower-broadcast mr-3 dark:text-gray-400"></i>
                                <p class="text-gray-500 text-sm font-medium dark:text-gray-400">Tangga Darurat </p>
                            </div>
                        </div>
                        <img class="object-cover sm:w-auto mx-auto pt-6" src="/assets/img/lantai/Lantai6.png" alt="" />
                    </div>
                    <!-- Lantai end -->

                    <!-- refisi perbandingan start -->
                    <div class="mt-16">
                        <h2 class="text-gray-600 font-sans font-bold text-xl dark:text-gray-100 mb-5">Informasi Jam Pembelajaran & Denah</h2>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="relative h-56 overflow-y-auto">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-900 bg-slate-700 uppercase dark:text-gray-400 sticky top-0">
                                        <tr>
                                            <th scope="col" class="px-5 py-3">
                                                Jam
                                            </th>
                                            <th scope="col" class="px-5 py-3">
                                                Mulai
                                            </th>
                                            <th scope="col" class="px-5 py-3">
                                                Selsai
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white dark:bg-gray-800">
                                            <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Jam Ke - 01
                                            </th>
                                            <td class="px-5 py-2">
                                                07.00
                                            </td>
                                            <td class="px-5 py-2">
                                                07.50
                                            </td>
                                        </tr>
                                        <tr class="bg-white dark:bg-gray-800">
                                            <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Jam Ke - 02
                                            </th>
                                            <td class="px-5 py-2">
                                                07.50
                                            </td>
                                            <td class="px-5 py-2">
                                                08.40
                                            </td>
                                        </tr>
                                        <tr class="bg-white dark:bg-gray-800">
                                            <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Jam Ke - 03
                                            </th>
                                            <td class="px-5 py-2">
                                                08.40
                                            </td>
                                            <td class="px-5 py-2">
                                                09.30
                                            </td>
                                        </tr>
                                        <tr class="bg-white dark:bg-gray-800">
                                            <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Jam Ke - 04
                                            </th>
                                            <td class="px-5 py-2">
                                                09.30
                                            </td>
                                            <td class="px-5 py-2">
                                                10.30
                                            </td>
                                        </tr>
                                        <tr class="bg-white dark:bg-gray-800">
                                            <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Jam Ke - 05
                                            </th>
                                            <td class="px-5 py-2">
                                                10.30
                                            </td>
                                            <td class="px-5 py-2">
                                                11.20
                                            </td>
                                        </tr>
                                        <tr class="bg-white dark:bg-gray-800">
                                            <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Jam Ke - 06
                                            </th>
                                            <td class="px-5 py-2">
                                                11.20
                                            </td>
                                            <td class="px-5 py-2">
                                                12.10
                                            </td>
                                        </tr>
                                        <tr class="bg-white dark:bg-gray-800">
                                            <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Jam Ke - 07
                                            </th>
                                            <td class="px-5 py-2">
                                                12.50
                                            </td>
                                            <td class="px-5 py-2">
                                                13.40
                                            </td>
                                        </tr>
                                        <tr class="bg-white dark:bg-gray-800">
                                            <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Jam Ke - 08
                                            </th>
                                            <td class="px-5 py-2">
                                                13.40
                                            </td>
                                            <td class="px-5 py-2">
                                                14.30
                                            </td>
                                        </tr>
                                        <tr class="bg-white dark:bg-gray-800">
                                            <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Jam Ke - 09
                                            </th>
                                            <td class="px-5 py-2">
                                                14.30
                                            </td>
                                            <td class="px-5 py-2">
                                                15.20
                                            </td>
                                        </tr>
                                        <tr class="bg-white dark:bg-gray-800">
                                            <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Jam Ke - 10
                                            </th>
                                            <td class="px-5 py-2">
                                                15.30
                                            </td>
                                            <td class="px-5 py-2">
                                                16.20
                                            </td>
                                        </tr>
                                        <tr class="bg-white dark:bg-gray-800">
                                            <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Jam Ke - 11
                                            </th>
                                            <td class="px-5 py-2">
                                                16.20
                                            </td>
                                            <td class="px-5 py-2">
                                                17.10
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-span-2">
                                <img class="object-cover sm:w-auto mx-auto pt-6" src="/assets/img/lantai/Lantai6.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <!-- refisi perbandingan end -->

                    <!-- refisi perbandingan start -->
                    <div class="mt-16">
                        <h2 class="text-gray-600 font-sans font-bold text-xl dark:text-gray-100 mb-5">Informasi Jam Pembelajaran </h2>
                        <div class="relative h-56 overflow-y-auto">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-900 bg-slate-700 uppercase dark:text-gray-400 sticky top-0">
                                    <tr>
                                        <th scope="col" class="px-5 py-3">
                                            Jam
                                        </th>
                                        <th scope="col" class="px-5 py-3">
                                            Mulai
                                        </th>
                                        <th scope="col" class="px-5 py-3">
                                            Selsai
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Jam Ke - 01
                                        </th>
                                        <td class="px-5 py-2">
                                            07.00
                                        </td>
                                        <td class="px-5 py-2">
                                            07.50
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Jam Ke - 02
                                        </th>
                                        <td class="px-5 py-2">
                                            07.50
                                        </td>
                                        <td class="px-5 py-2">
                                            08.40
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Jam Ke - 03
                                        </th>
                                        <td class="px-5 py-2">
                                            08.40
                                        </td>
                                        <td class="px-5 py-2">
                                            09.30
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Jam Ke - 04
                                        </th>
                                        <td class="px-5 py-2">
                                            09.30
                                        </td>
                                        <td class="px-5 py-2">
                                            10.30
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Jam Ke - 05
                                        </th>
                                        <td class="px-5 py-2">
                                            10.30
                                        </td>
                                        <td class="px-5 py-2">
                                            11.20
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Jam Ke - 06
                                        </th>
                                        <td class="px-5 py-2">
                                            11.20
                                        </td>
                                        <td class="px-5 py-2">
                                            12.10
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Jam Ke - 07
                                        </th>
                                        <td class="px-5 py-2">
                                            12.50
                                        </td>
                                        <td class="px-5 py-2">
                                            13.40
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Jam Ke - 08
                                        </th>
                                        <td class="px-5 py-2">
                                            13.40
                                        </td>
                                        <td class="px-5 py-2">
                                            14.30
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Jam Ke - 09
                                        </th>
                                        <td class="px-5 py-2">
                                            14.30
                                        </td>
                                        <td class="px-5 py-2">
                                            15.20
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Jam Ke - 10
                                        </th>
                                        <td class="px-5 py-2">
                                            15.30
                                        </td>
                                        <td class="px-5 py-2">
                                            16.20
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row" class="px-5 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Jam Ke - 11
                                        </th>
                                        <td class="px-5 py-2">
                                            16.20
                                        </td>
                                        <td class="px-5 py-2">
                                            17.10
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="Denah mt-7">
                            <h2 class="text-gray-600 font-sans font-bold text-xl dark:text-gray-100">Denah Lantai</h2>
                            <div class="flex flex-col gap-2  pb-6 pt-6">
                                <!-- fasilitas 1 -->
                                <div class="flex flex-initial w-64  text-gray-500  border-gray-300 items-center px-3 py-1 border-2 rounded dark:text-white dark:border-gray-600">
                                    <i class="text-gray-500 fa-solid fa-list-ol mr-3 dark:text-gray-400"></i>
                                    <p class="text-gray-500 text-sm font-medium dark:text-gray-400">Lift Bersama</p>
                                </div>
                                <!-- fasilitas 2 -->
                                <div class="flex  flex-initial w-64 text-gray-500 border-gray-300 items-center px-3 py-1 border-2 rounded dark:text-white dark:border-gray-600">
                                    <i class="text-gray-500 fa-solid fa-stairs mr-3 dark:text-gray-400"></i>
                                    <p class="text-gray-500 text-sm font-medium dark:text-gray-400">Tangga Bersama</p>
                                </div>
                                <!-- fasilitas 3 -->
                                <div class="flex flex-initial w-64 text-gray-500 border-gray-300 items-center px-3 py-1 border-2 rounded dark:text-white dark:border-gray-600">
                                    <i class="text-gray-500 fa-solid fa-tower-broadcast mr-3 dark:text-gray-400"></i>
                                    <p class="text-gray-500 text-sm font-medium dark:text-gray-400">Tangga Darurat </p>
                                </div>
                            </div>
                            <img class="object-cover sm:w-auto mx-auto pt-6" src="/assets/img/lantai/Lantai6.png" alt="" />
                        </div>
                    </div>
                    <!-- refisi perbandingan end -->

                </div>
                <!-- ###################### -->
                <!-- Colom 2 -->
                <!-- ###################### -->
                <div class="font-sans order-first lg:order-last lg:col-span-2 md:col-span-4">
                    <div class="rounded text-gray-600 block text-center font-semibold text-sm border p-5 mb-10 dark:text-dark_grey3">
                        <p>Pemesanan Ruang Gedung JTI</p>
                    </div>
                    <div class="sm:sticky block top-24 p-3 border-2 dark:border-dark_grey2  rounded-md">
                        <div class=" items-center">
                            <h2 class="text-slate-700 dark:text-biru font-sans text-xl font-bold uppercase">Pesan Sekarang</h2>
                        </div>
                        <div class="filter pt-5 ">
                            <div class="">
                                <!-- === Booking Tanggal Start === -->
                                <div class=" p-3 border rounded-md dark:border-dark_grey2">
                                    <label for="tanggal" class="block text-gray-900 dark:text-white font-sans text-sm font-medium mb-2">Pilih Tanggal</label>
                                    <input type="date" id="tanggal" class="appearance-none border border-[#c8c8c8] dark:border-dark_grey3 rounded w-full py-3 px-4 text-gray-700 dark:bg-dark_grey3 dark:text-dark_grey2 font-sans text-sm leading-6 transform-none" />
                                </div>
                                <!-- === Booking Tanggal END ===-->
                            </div>
                            <!-- === Pilihan booking jam Start ===-->
                            <div class="p-3 border rounded-md mt-4 dark:border-dark_grey2">
                                <label class="block mb-2 text-sm font-medium font-sans text-gray-900 dark:text-white">Pilih Jam Booking</label>
                                <div class=" bg-white text-center dark:bg-dark_grey1">
                                    <div class="grid grid-cols-3 gap-2 mt-4 md:gap-1">
                                        <div class="jam1">
                                            <button data-popover-target="popover-no-arrow" type="button" onclick="tampil()" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-8 py-2 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4 ">01</button>
                                            <div id="popover-no-arrow" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                                <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                    <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                                </div>
                                                <div class="px-3 py-2">
                                                    <p>7.00 - 7.50</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jam2">
                                            <button data-popover-target="popover-no-arrow" type="button" onclick="tampil()" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-8 py-2 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4">02</button>

                                            <div id="popover-no-arrow" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                                <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                    <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                                </div>
                                                <div class="px-3 py-2">
                                                    <p>7.00 - 7.50</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jam3">
                                            <button data-popover-target="popover-no-arrow" type="button" onclick="tampil()" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-8 py-2 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4">03</button>

                                            <div id="popover-no-arrow" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                                <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                    <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                                </div>
                                                <div class="px-3 py-2">
                                                    <p>7.00 - 7.50</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jam4">
                                            <button data-popover-target="popover-no-arrow" type="button" onclick="tampil()" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-8 py-2 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4">04</button>

                                            <div id="popover-no-arrow" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                                <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                    <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                                </div>
                                                <div class="px-3 py-2">
                                                    <p>7.00 - 7.50</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jam5">
                                            <button data-popover-target="popover-no-arrow" type="button" onclick="tampil()" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-8 py-2 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4">05</button>

                                            <div id="popover-no-arrow" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                                <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                    <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                                </div>
                                                <div class="px-3 py-2">
                                                    <p>7.00 - 7.50</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jam6">
                                            <button data-popover-target="popover-no-arrow" type="button" onclick="tampil()" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-8 py-2 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4">06</button>

                                            <div id="popover-no-arrow" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                                <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                    <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                                </div>
                                                <div class="px-3 py-2">
                                                    <p>7.00 - 7.50</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jam7">
                                            <button data-popover-target="popover-no-arrow" type="button" onclick="tampil()" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-8 py-2 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4">07</button>

                                            <div id="popover-no-arrow" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                                <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                    <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                                </div>
                                                <div class="px-3 py-2">
                                                    <p>7.00 - 7.50</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jam8">
                                            <button data-popover-target="popover-no-arrow" type="button" onclick="tampil()" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-8 py-2 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4">08</button>

                                            <div id="popover-no-arrow" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                                <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                    <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                                </div>
                                                <div class="px-3 py-2">
                                                    <p>7.00 - 7.50</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jam9">
                                            <button data-popover-target="popover-no-arrow" type="button" onclick="tampil()" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-8 py-2 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4">09</button>

                                            <div id="popover-no-arrow" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                                <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                    <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                                </div>
                                                <div class="px-3 py-2">
                                                    <p>7.00 - 7.50</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jam10">
                                            <button data-popover-target="popover-no-arrow" type="button" onclick="tampil()" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-8 py-2 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4">10</button>

                                            <div id="popover-no-arrow" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                                <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                    <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                                </div>
                                                <div class="px-3 py-2">
                                                    <p>7.00 - 7.50</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jam11">
                                            <button data-popover-target="popover-no-arrow" type="button" onclick="tampil()" class="text-white bg-bingu hover:bg-bingu_hover font-medium text-xs px-8 py-2 text-center rounded dark:bg-dark_grey5 dark:hover:bg-dark_grey4">11</button>

                                            <div id="popover-no-arrow" role="tooltip" class="absolute z-10 invisible inline-block w-50 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                                <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                    <h3 class="font-semibold text-gray-900 dark:text-white">Detail Jam</h3>
                                                </div>
                                                <div class="px-3 py-2">
                                                    <p>7.00 - 7.50</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- filter sidebar mobile -->
            </div>
        </div>
    </div>

    <script src="/assets/js/detail-booking.js"></script>