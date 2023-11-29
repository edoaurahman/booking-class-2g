<!-- Booking -->
<div class="booking dark:bg-dark_grey1">
    <div class="container py-8 mx-auto ">
        <div class="grid grid-cols-1 sm:grid-cols-5 sm:gap-4 sm:mb-11">
            <div class="sticky top-24 p-3  border-2 dark:border-dark_grey2  rounded-md">
                <div class="hidden sm:block">
                    <div class="flex items-center">
                        <i class="fa-solid fa-filter fa-beat text-biru hover:text-bingu_hover dark:text-white mr-3"></i>
                        <h2 class="text-slate-700 dark:text-biru font-sans text-2xl font-bold uppercase">Filter</h2>
                    </div>
                    <!-- ###################### -->
                    <!-- Colom 1 -->
                    <!-- ###################### -->

                    <div class="filter pt-5 ">
                        <!-- === Filter Tanggal Start === -->
                        <div class=" p-3 border rounded-md dark:border-dark_grey2">
                            <label for="tanggal" class="block text-gray-900 dark:text-white font-sans text-sm font-medium mb-2">Pilih Tanggal</label>
                            <input type="date" id="tanggal" class="appearance-none border border-[#c8c8c8] dark:border-dark_grey3 rounded w-full py-3 px-4 text-gray-700 dark:bg-dark_grey3 dark:text-dark_grey2 font-sans text-sm leading-6 transform-none" />
                        </div>
                        <!-- === Filter Tanggal END ===-->

                        <!-- === Filter Pemilihan Jam Start ===-->
                        <div class="p-3 border rounded-md mt-4 dark:border-dark_grey2">
                            <form>
                                <label for="bedrooms-input" class="block mb-2 text-sm font-medium font-sans text-gray-900 dark:text-white">Pilih Jam</label>

                                <button id="buttonPilihJam" class="text-white dark:bg-dark_grey5 bg-blue-700 font-sans font-medium w-full py-3 px-4  text-sm text-center flex justify-between items-center" type="button">
                                    jam
                                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>

                                <!-- Dropdown menu jam -->
                                <div id="pilihJam" class="z-10 p-2 hidden w-full bg-white divide-y divide-gray-100 rounded-b-lg shadow p-5 dark:bg-gray-700">
                                    <div class="">
                                        <!-- Mulai -->
                                        <div class="mulai relative flex items-center">
                                            <button type="button" id="decrement-button" data-input-counter-decrement="bedrooms-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                                </svg>
                                            </button>
                                            <input type="text" id="bedrooms-input" data-input-counter data-input-counter-min="1" data-input-counter-max="14" aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-11 font-medium text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pb-6 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" value="0" required />
                                            <div class="absolute bottom-1 start-1/2 -translate-x-1/2 rtl:translate-x-1/2 flex items-center text-xs text-gray-400 space-x-1 rtl:space-x-reverse">
                                                <i class="fa-regular fa-clock"></i>
                                                <span>Mulai</span>
                                            </div>
                                            <button type="button" id="increment-button" data-input-counter-increment="bedrooms-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                                </svg>
                                            </button>
                                        </div>

                                        <!-- Selesai -->
                                        <div class="selesai relative flex items-center mt-4">
                                            <button type="button" id="decrement-button2" data-input-counter-decrement="bedrooms-input2" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                                </svg>
                                            </button>
                                            <input type="text" id="bedrooms-input2" data-input-counter data-input-counter-min="2" data-input-counter-max="15" aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-11 font-medium text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pb-6 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" value="1" required />
                                            <div class="absolute bottom-1 start-1/2 -translate-x-1/2 rtl:translate-x-1/2 flex items-center text-xs text-gray-400 space-x-1 rtl:space-x-reverse">
                                                <i class="fa-regular fa-clock"></i>
                                                <span>Selesai</span>
                                            </div>
                                            <button type="button" id="increment-button2" data-input-counter-increment="bedrooms-input2" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <button type="button" class="px-2 py-1 mt-3 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <i class="fa-solid fa-clock-rotate-left mr-2 "></i>
                                        semua
                                    </button>

                                    <p id="helper-text-explanation" class="mt-3 text-[10px] text-gray-500 dark:text-gray-400">
                                        Silahkan Pilih Jam ke-1 sampai jam ke-15
                                    </p>
                                </div>
                            </form>
                        </div>
                        <!-- === Filter Pemilihan Jam END === -->

                        <!-- === Filter Pemilihan Lantai Start ===-->
                        <div class="p-3 border rounded-md mt-4 dark:border-dark_grey2">
                            <label for="bedrooms-input" class="block mb-2 text-sm font-medium font-sans text-gray-900 dark:text-white">Pilih Lantai</label>
                            <button id="buttonPilihLantai" class="text-white bg-blue-700 dark:bg-dark_grey5 font-sans font-medium text-sm w-full py-3 px-4 text-center flex justify-between items-center" type="button">
                                Lantai
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>

                            <!-- Dropdown menu lantai -->
                            <div id="pilihLantai" class="w-full hidden bg-white rounded-b-lg shadow dark:bg-gray-700 font-sans">
                                <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownBgHoverButton">
                                    <li>
                                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input id="checkbox-item-4" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                            <label for="checkbox-item-4" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Lantai 5</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input checked id="checkbox-item-5" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                            <label for="checkbox-item-5" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Lantai 6</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input id="checkbox-item-6" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                            <label for="checkbox-item-6" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Lantai 7</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input id="checkbox-item-6" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                            <label for="checkbox-item-6" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Lantai 8</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- === Filter Pemilihan Lantai END === -->

                        <!-- === Filter Jenis Start  === -->
                        <div class=" border rounded-md mt-4 dark:border-dark_grey2 ">
                            <!-- Dropdown menu -->
                            <div id="pilihStatus" class="bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600 p-3">
                                <label for="bedrooms-input" class="block mb-2 text-sm font-medium font-sans text-gray-900 dark:text-white">Pilih Lantai</label>
                                <ul class="space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownToggleButton">
                                    <li>
                                        <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <label class="relative inline-flex items-center w-full cursor-pointer">
                                                <input type="checkbox" value="" class="sr-only peer" />
                                                <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full rtl:peer-checked:after:translate-x-[-100%] peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-500 peer-checked:bg-blue-600"></div>
                                                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Ruang Teori</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <label class="relative inline-flex items-center w-full cursor-pointer">
                                                <input type="checkbox" value="" class="sr-only peer" />
                                                <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full rtl:peer-checked:after:translate-x-[-100%] peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-500 peer-checked:bg-blue-600"></div>
                                                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Ruang Praktikum</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <label class="relative inline-flex items-center w-full cursor-pointer">
                                                <input type="checkbox" value="" class="sr-only peer" />
                                                <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full rtl:peer-checked:after:translate-x-[-100%] peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-500 peer-checked:bg-blue-600"></div>
                                                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Ruang Gabungan</span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- === Filter Jenis END === -->
                    </div>
                </div>
            </div>
            <!-- ###################### -->
            <!-- Colom 2 -->
            <!-- ###################### -->
            <div class="col-span-4 font-sans">
                <!-- content booking  end -->
                <div class="border px-2 rounded-lg bg-sky-400">
                    <div class="grid grid-cols-1 sm:grid-cols-5 sm:gap-4 items-center">
                        <!-- tampilan untuk desktop start -->
                        <div class="col-span-2 py-3">
                            <img class="object-cover rounded-md" src="/assets/img/booking/class1.jpg" alt="" />
                        </div>

                        <div class="col-span-3 py-3">
                            <h1 class="flex items-center text-2xl uppercase font-extrabold dark:text-white">
                                ruang teori 1<span class="bg-blue-100 text-blue-800 text-sm font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-2">Lantai 5</span>
                            </h1>
                            <div class="flex items-center">
                                <div class="px-4">
                                    <p class="text-sm my-3">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Quis corporis, fuga qui quisquam amet, suscipit cupiditate
                                        illo explicabo maiores beatae architecto a error voluptas
                                        eum delectus distinctio perferendis nulla consectetur.
                                        Minus beatae dolorem dolorum exercitationem nobis! Rerum,
                                        iusto asperiores quod eaque aut excepturi enim vel
                                        consequuntur earum impedit, animi ratione quam temporibus
                                        modi, veritatis tempora! Repudiandae
                                    </p>
                                </div>
                                <div class="persentase relative px-4 py-6 text-center justify-center border m-4">
                                    <span class="bg-gray-100 text-gray-800 text-xs font-medium mb-4 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">Persentase</span>
                                    <div class="leading-4">
                                        <h1 class="text-2xl font-semibold">90%</h1>
                                        <p class="font-normal">Tersedia</p>
                                    </div>
                                    <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-3 py-1 text-center mt-4 mb-2">
                                        Jam
                                    </button>
                                </div>
                            </div>
                            <div class="fasilitas mx-4">
                                <div class="text-sm">
                                    <i class="fa-solid fa-wifi border-2 rounded-md p-2 hover:bg-slate-300 hover:border-white text-white hover:text-white"></i>
                                    <i class="fa-solid fa-bars-progress border-2 rounded-md p-2 hover:bg-slate-300 hover:border-white text-white hover:text-white"></i>
                                    <i class="fa-solid fa-desktop border-2 rounded-md p-2 hover:bg-slate-300 hover:border-white text-white hover:text-white"></i>
                                    <i class="fa-solid fa-plug border-2 rounded-md p-2 hover:bg-slate-300 hover:border-white text-white hover:text-white"></i>
                                    <i class="fa-solid fa-chalkboard border-2 rounded-md p-2 hover:bg-slate-300 hover:border-white text-white hover:text-white"></i>
                                    <i class="fa-solid fa-chair border-2 rounded-md p-2 hover:bg-slate-300 hover:border-white text-white hover:text-white"></i>
                                    <i class="fa-solid fa-table border-2 rounded-md p-2 hover:bg-slate-300 hover:border-white text-white hover:text-white"></i>
                                    <i class="fa-solid fa-marker border-2 rounded-md p-2 hover:bg-slate-300 hover:border-white text-white hover:text-white"></i>
                                    <i class="fa-solid fa-eraser border-2 rounded-md p-2 hover:bg-slate-300 hover:border-white text-white hover:text-white"></i>
                                    <i class="fa-solid fa-book border-2 rounded-md p-2 hover:bg-slate-300 hover:border-white text-white hover:text-white"></i>
                                </div>
                            </div>
                        </div>
                        <!-- tampilan untuk desktop start -->
                        <!-- tampilan untuk mobile start -->


                        <!-- tampilan untuk mobile start -->
                    </div>
                </div>
                <!-- content booking  end -->
            </div>
            <div class="mb-96"></div>
        </div>
    </div>
</div>
<!-- button float & sidebar start mobile -->


<!-- button float & sidebar start mobile -->


<script src="/assets/js/booking.js"></script>