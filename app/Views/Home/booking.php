<!-- Booking -->



<div x-data="listRuang" class="dark:bg-dark_grey1">
    <div x-show="isLoading" class="flex items-center justify-center w-full h-screen bg-transparent dark:bg-gray-800 dark:border-gray-700">
        <div role="status">
            <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
            </svg>
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="container py-3 mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-8 sm:gap-4 sm:mb-11">
            <!-- ###################### -->
            <!-- Colom 1 -->
            <!-- ###################### -->
            <!-- ################ -->
            <!-- Filter -->
            <!-- ################ -->
            <div class="hidden sm:block mt-5 p-3 sm:col-span-2 ">
                <div class="sticky top-20 border-2 dark:border-dark_grey2  rounded-md p-3">
                    <div class="flex items-center">
                        <i class="fa-solid fa-filter fa-beat text-biru hover:text-bingu_hover dark:text-white mr-3"></i>
                        <h2 class="text-slate-700 dark:text-biru font-sans text-2xl font-bold uppercase">Filter</h2>
                    </div>
                    <div class="filter pt-5 ">
                        <div class="">
                            <!-- === Filter Tanggal Start === -->
                            <div class=" p-3 border rounded-md dark:border-dark_grey2">
                                <label for="tanggal" class="block text-gray-900 dark:text-white font-sans text-sm font-medium mb-2">Pilih Tanggal</label>
                                <input @input.debounce="fetchResults" type="date" id="tanggal" class="appearance-none border border-[#c8c8c8] dark:border-dark_grey3 rounded w-full py-3 px-4 text-gray-700 dark:bg-dark_grey3 dark:text-dark_grey2 font-sans text-sm leading-6 transform-none" />
                            </div>
                            <!-- === Filter Tanggal END ===-->

                            <!-- === Filter Pemilihan Jam Start ===-->
                            <div x-data="{ open: false }" class="p-3  border rounded-md mt-4 dark:border-dark_grey2">
                                <label class="block  mb-2 text-sm font-medium font-sans text-gray-900 dark:text-white">Pilih Jam</label>

                                <button @click="open = ! open" class="text-white bg-bingu hover:bg-bingu_hover dark:bg-dark_grey5  font-sans font-medium w-full py-3 px-4  text-sm text-center flex justify-between items-center rounded" type="button">
                                    Jam
                                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>

                                <!-- Dropdown menu jam -->
                                <div x-show="open" @click.outside="open = false" id="pilihJam" class="z-10 w-full bg-white divide-y divide-gray-100 rounded-b-lg shadow p-5 dark:bg-gray-700">
                                    <div class="">
                                        <!-- Mulai -->
                                        <div class="mulai relative flex items-center ">
                                            <button @click.debounce="fetchResults" type="button" id="decrement-button-1" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                <i class="fa-solid fa-minus"></i>
                                            </button>
                                            <input type="number" id="jam-mulai-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-11 font-medium text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pb-6 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="0" required />
                                            <div class="absolute bottom-1 start-1/2 -translate-x-1/2 rtl:translate-x-1/2 flex items-center text-xs text-gray-400 dark:text-white space-x-1 rtl:space-x-reverse">
                                                <i class="fa-regular fa-clock dark:text-white"></i>
                                                <span>Mulai</span>
                                            </div>
                                            <button @click.debounce="fetchResults" type="button" id="increment-button-1" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                <i class="fa-solid fa-plus"></i>
                                            </button>
                                        </div>

                                        <!-- Selesai -->
                                        <div class="selesai relative flex items-center mt-4">
                                            <button @click.debounce="fetchResults" type="button" id="decrement-button-2" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                <i class="fa-solid fa-minus"></i>

                                            </button>
                                            <input type="number" id="jam-mulai-input2" aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-11 font-medium text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pb-6 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" value="0" required />
                                            <div class="absolute bottom-1 start-1/2 -translate-x-1/2 rtl:translate-x-1/2 flex items-center text-xs text-gray-400 dark:text-white space-x-1 rtl:space-x-reverse">
                                                <i class="fa-regular fa-clock"></i>
                                                <span>Selesai</span>
                                            </div>
                                            <button @click.debounce="fetchResults" type="button" id="increment-button-2" data-input-counter-increment="bedrooms-input2" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                <i class="fa-solid fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <button @click="fetchResults" type="button" id="set-max-button" class="px-2 py-1 mt-5 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <i class="fa-solid fa-clock-rotate-left mr-2  dark:text-white"></i>
                                        semua
                                    </button>
                                    <p id="helper-text-explanation" class="mt-3 text-[10px] text-gray-500 dark:text-gray-300">
                                        Silahkan Pilih Jam ke-1 sampai jam ke-15
                                    </p>
                                </div>
                            </div>
                            <!-- === Filter Pemilihan Jam END === -->
                        </div>

                        <!-- === Filter Pemilihan Lantai Start ===-->
                        <div x-data="{ open: false }" class="p-3 border rounded-md mt-4 dark:border-dark_grey2">
                            <label class="block mb-2 text-sm font-medium font-sans text-gray-900 dark:text-white">Pilih Lantai</label>
                            <button @click="open = ! open" id="buttonPilihLantai" class="rounded text-white bg-bingu hover:bg-bingu_hover dark:bg-dark_grey5  font-sans font-medium text-sm w-full py-3 px-4 text-center flex justify-between items-center" type="button">
                                Lantai
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>

                            <!-- Dropdown menu lantai -->
                            <div x-show="open" @click.outside="open = false" class="w-full bg-white rounded-b-lg shadow dark:bg-gray-700 font-sans">
                                <div class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200">
                                    <template x-for="(lantai, index) in lantaiOptions" :key="index">
                                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input type="checkbox" :id="'lantai-' + index" :value="lantaiValue[index]" @click="checkSelectedLantai($event)" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                            <label :for="'lantai-' + index" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300" x-text="lantai"></label>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                        <!-- === Filter Pemilihan Lantai END === -->

                        <!-- === Filter Jenis Start  === -->
                        <div class=" border p-3 rounded-md mt-4 dark:border-dark_grey2  ">
                            <!-- Dropdown menu -->
                            <div id="pilihStatus" class=" divide-y divide-gray-100 rounded shadow bg-bingu dark:bg-dark_grey5  dark:divide-gray-400 p-3">
                                <label class="block mb-3 text-sm font-medium font-sans text-white dark:text-white">Jenis Ruang</label>
                                <div class="space-y-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownToggleButton">
                                    <div class="flex p-2 group rounded hover:bg-gray-100 dark:hover:bg-bingu_hover">
                                        <label class="relative inline-flex items-center w-full cursor-pointer ">
                                            <input type="checkbox" value="" class="sr-only peer" />
                                            <div class="w-9 h-5 bg-gray-300 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full rtl:peer-checked:after:translate-x-[-100%] peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-500 peer-checked:bg-blue-600"></div>
                                            <span class="ms-3 text-sm font-medium text-white group-hover:text-bingu_hover dark:group-hover:text-white dark:text-gray-300">Ruang Teori</span>
                                        </label>
                                    </div>
                                    <div class="flex p-2 group rounded hover:bg-gray-100 dark:hover:bg-bingu_hover">
                                        <label class="relative inline-flex items-center w-full cursor-pointer ">
                                            <input type="checkbox" value="" class="sr-only peer" />
                                            <div class="w-9 h-5 bg-gray-300 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full rtl:peer-checked:after:translate-x-[-100%] peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-500 peer-checked:bg-blue-600"></div>
                                            <span class="ms-3 text-sm font-medium text-white group group-hover:text-bingu_hover dark:group-hover:text-white dark:text-gray-300">Ruang Praktikum</span>
                                        </label>
                                    </div>
                                    <div class="flex p-2 group rounded hover:bg-gray-100 dark:hover:bg-bingu_hover">
                                        <label class="relative inline-flex items-center w-full cursor-pointer">
                                            <input type="checkbox" value="" class="sr-only peer" />
                                            <div class="w-9 h-5 bg-gray-300 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full rtl:peer-checked:after:translate-x-[-100%] peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-500 peer-checked:bg-blue-600"></div>
                                            <span class="ms-3 text-sm font-medium text-white group-hover:text-bingu_hover dark:group-hover:text-white dark:text-gray-300">Ruang Gabungan</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- === Filter Jenis END === -->
                    </div>
                </div>
            </div>
            <!-- ###################### -->
            <!-- Colom 2 -->
            <!-- ###################### -->
            <div class="col-span-6 font-sans w-96 sm:w-full mx-auto">
                <!-- content booking  start -->
                <template x-for="item in listRuang">
                    <div class="group border-2 px-2 mt-3 rounded-xl shadow-md hover:bg-bingu dark:bg-dark_grey dark:bg-dark_grey5 dark:hover:bg-dark_grey3 dark:border-dark_grey2  dark:hover:border-dark_grey3 dark:shadow-gray-700 ">
                        <div class="grid grid-cols-1 sm:grid-cols-5 sm:gap-4 items-center">
                            <!-- tampilan untuk desktop start -->
                            <div class="col-span-2 py-3">
                                <h1 x-text="item.nama_ruang" class="sm:hidden flex items-center mb-3 text-2xl uppercase font-extrabold text-slate-700 group-hover:text-white dark:text-white dark:group-hover:text-dark_grey5">
                                    ruang teori 1<span class="bg-blue-100 text-blue-800 text-xs font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-dark_grey4 dark:text-slate-100 ms-2 dark:group-hover:bg-gray-600">Lantai 5</span>
                                </h1>
                                <img class="object-cover rounded-md" src="/assets/img/booking/class1.jpg" alt="" />
                            </div>

                            <div class="col-span-3 py-3">
                                <h1 x-text="item.nama_ruang" class="hidden sm:flex items-center text-2xl uppercase font-extrabold text-slate-700 group-hover:text-white dark:text-white dark:group-hover:text-dark_grey5">
                                    ruang teori 1<span class="bg-blue-100 text-blue-800 text-xs font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-dark_grey4 dark:text-slate-100 ms-2 dark:group-hover:bg-gray-600">Lantai 5</span>
                                </h1>
                                <div class="fasilitas sm:hidden mx-4">
                                    <div class="text-sm">
                                        <!-- icon1dark  -->
                                        <i data-tooltip-target="icon1dark" class="fa-solid fa-wifi border-2 rounded-md p-2 mt-1 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                                        <div id="icon1dark" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 uppercase text-xs font-semibold text-biru bg-white dark:bg-dark_grey2 dark:text-white dark:border-dark_grey2 rounded-lg shadow-sm opacity-0 tooltip">
                                            Wifi
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <!-- icon2dark  -->
                                        <i data-tooltip-target="icon2dark" class="fa-solid fa-bars-progress border-2 rounded-md p-2 mt-1 bg-bingu hover:bg-bingu_hover hover:border-dark_grey3 text-white hover:text-white dark:bg-dark_grey5"></i>
                                        <div id="icon2dark" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 uppercase text-xs font-semibold text-biru bg-white dark:bg-dark_grey2 dark:text-white dark:border-dark_grey2 rounded-lg shadow-sm opacity-0 tooltip">
                                            Proyektor
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <!-- icon3dark  -->
                                        <i data-tooltip-target="icon3dark" class="fa-solid fa-desktop border-2 rounded-md p-2 mt-1 bg-bingu hover:bg-bingu_hover hover:border-dark_grey3 text-white hover:text-white dark:bg-dark_grey5"></i>
                                        <div id="icon3dark" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 uppercase text-xs font-semibold text-biru bg-white dark:bg-dark_grey2 dark:text-white dark:border-dark_grey2 rounded-lg shadow-sm opacity-0 tooltip">
                                            Monitor
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <!-- icon4dark  -->
                                        <i data-tooltip-target="icon4dark" class="fa-solid fa-plug border-2 rounded-md p-2 mt-1 bg-bingu hover:bg-bingu_hover hover:border-dark_grey3 text-white hover:text-white dark:bg-dark_grey5"></i>
                                        <div id="icon4dark" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 uppercase text-xs font-semibold text-biru bg-white dark:bg-dark_grey2 dark:text-white dark:border-dark_grey2 rounded-lg shadow-sm opacity-0 tooltip">
                                            Stop Contact
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <!-- icon5dark  -->
                                        <i data-tooltip-target="icon5dark" class="fa-solid fa-chalkboard border-2 rounded-md p-2 mt-1 bg-bingu hover:bg-bingu_hover hover:border-dark_grey3 text-white hover:text-white dark:bg-dark_grey5"></i>
                                        <div id="icon5dark" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 uppercase text-xs font-semibold text-biru bg-white dark:bg-dark_grey2 dark:text-white dark:border-dark_grey2 rounded-lg shadow-sm opacity-0 tooltip">
                                            Papan Tulis
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <!-- icon6dark  -->
                                        <i data-tooltip-target="icon6dark" class="fa-solid fa-chair border-2 rounded-md p-2 mt-1 bg-bingu hover:bg-bingu_hover hover:border-dark_grey3 text-white hover:text-white dark:bg-dark_grey5"></i>
                                        <div id="icon6dark" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 uppercase text-xs font-semibold text-biru bg-white dark:bg-dark_grey2 dark:text-white dark:border-dark_grey2 rounded-lg shadow-sm opacity-0 tooltip">
                                            Kursi
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <!-- icon7dark  -->
                                        <i data-tooltip-target="icon7dark" class="fa-solid fa-table border-2 rounded-md p-2 mt-1 bg-bingu hover:bg-bingu_hover hover:border-dark_grey3 text-white hover:text-white dark:bg-dark_grey5"></i>
                                        <div id="icon7dark" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 uppercase text-xs font-semibold text-biru bg-white dark:bg-dark_grey2 dark:text-white dark:border-dark_grey2 rounded-lg shadow-sm opacity-0 tooltip">
                                            Meja
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <!-- icon8dark  -->
                                        <i data-tooltip-target="icon8dark" class="fa-solid fa-marker border-2 rounded-md p-2 mt-1 bg-bingu hover:bg-bingu_hover hover:border-dark_grey3 text-white hover:text-white dark:bg-dark_grey5"></i>
                                        <div id="icon8dark" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 uppercase text-xs font-semibold text-biru bg-white dark:bg-dark_grey2 dark:text-white dark:border-dark_grey2 rounded-lg shadow-sm opacity-0 tooltip">
                                            Spidol
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <!-- icon9dark  -->
                                        <i data-tooltip-target="icon9dark" class="fa-solid fa-eraser border-2 rounded-md p-2 mt-1 bg-bingu hover:bg-bingu_hover hover:border-dark_grey3 text-white hover:text-white dark:bg-dark_grey5"></i>
                                        <div id="icon9dark" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 uppercase text-xs font-semibold text-biru bg-white dark:bg-dark_grey2 dark:text-white dark:border-dark_grey2 rounded-lg shadow-sm opacity-0 tooltip">
                                            Penghapus
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <!-- icon10dark  -->
                                        <i data-tooltip-target="icon10dark" class="fa-solid fa-book border-2 rounded-md p-2 mt-1 bg-bingu hover:bg-bingu_hover hover:border-dark_grey3 text-white hover:text-white dark:bg-dark_grey5"></i>
                                        <div id="icon10dark" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 uppercase text-xs font-semibold text-biru bg-white dark:bg-dark_grey2 dark:text-white dark:border-dark_grey2 rounded-lg shadow-sm opacity-0 tooltip">
                                            Perpustakaan Kecil
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="px-4">
                                        <p class="text-sm my-3 text-slate-500 group-hover:text-slate-300 dark:text-slate-300 dark:group-hover:text-dark_grey5">
                                            Kelas di kampus memiliki peran vital sebagai tempat interaksi, pembelajaran, dan pengembangan keterampilan mahasiswa. Dalam ruang kelas, mereka dapat mendiskusikan konsep akademis, membangun keterampilan berpikir kritis, serta menjalin hubungan sosial, semuanya mendukung pertumbuhan intelektual dan pembentukan karakter mahasiswa. Melalui interaksi aktif di dalam kelas, mahasiswa juga memperoleh persiapan yang kokoh untuk menghadapi tantangan dunia nyata setelah menyelesaikan studi mereka di kampus.
                                        </p>
                                    </div>
                                    <!-- <div class=" persentase relative px-4 py-6 text-center justify-center border m-4 rounded-lg bg-bingu group-hover:bg-white dark:bg-dark_grey5">
                                    <span class="bg-gray-200 group-hover:bg-gray-200 text-gray-800 group-hover:text-bingu text-xs font-medium mb-4 px-2.5 py-0.5 rounded dark:bg-white dark:text-dark_grey5">Tersedia</span>
                                    <div class="leading-4">
                                        <h1 class="text-2xl font-serif font-extrabold text-white group-hover:text-gray-700 mt-1">9 / 11</h1>
                                        <p class="font-normal text-sm font-semibold text-white group-hover:text-gray-700 mt-0.5">Jam</p>
                                    </div>
                                </div> -->
                                </div>
                                <div class="fasilitas hidden sm:block mx-4">
                                    <div class="text-sm">
                                        <!-- icon1  -->
                                        <i data-tooltip-target="icon1" class="fa-solid fa-wifi border-2 rounded-md p-2 mt-1 bg-bingu hover:bg-bingu_hover text-white hover:text-white dark:bg-dark_grey5 "></i>
                                        <div id="icon1" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 uppercase text-xs font-semibold text-biru bg-white dark:bg-dark_grey2 dark:text-white dark:border-dark_grey2 rounded-lg shadow-sm opacity-0 tooltip">
                                            Wifi
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <!-- icon2  -->
                                        <i data-tooltip-target="icon2" class="fa-solid fa-bars-progress border-2 rounded-md p-2 mt-1 bg-bingu hover:bg-bingu_hover hover:border-dark_grey3 text-white hover:text-white dark:bg-dark_grey5"></i>
                                        <div id="icon2" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 uppercase text-xs font-semibold text-biru bg-white dark:bg-dark_grey2 dark:text-white dark:border-dark_grey2 rounded-lg shadow-sm opacity-0 tooltip">
                                            Proyektor
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <!-- icon3  -->
                                        <i data-tooltip-target="icon3" class="fa-solid fa-desktop border-2 rounded-md p-2 mt-1 bg-bingu hover:bg-bingu_hover hover:border-dark_grey3 text-white hover:text-white dark:bg-dark_grey5"></i>
                                        <div id="icon3" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 uppercase text-xs font-semibold text-biru bg-white dark:bg-dark_grey2 dark:text-white dark:border-dark_grey2 rounded-lg shadow-sm opacity-0 tooltip">
                                            Monitor
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <!-- icon4  -->
                                        <i data-tooltip-target="icon4" class="fa-solid fa-plug border-2 rounded-md p-2 mt-1 bg-bingu hover:bg-bingu_hover hover:border-dark_grey3 text-white hover:text-white dark:bg-dark_grey5"></i>
                                        <div id="icon4" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 uppercase text-xs font-semibold text-biru bg-white dark:bg-dark_grey2 dark:text-white dark:border-dark_grey2 rounded-lg shadow-sm opacity-0 tooltip">
                                            Stop Contact
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <!-- icon5  -->
                                        <i data-tooltip-target="icon5" class="fa-solid fa-chalkboard border-2 rounded-md p-2 mt-1 bg-bingu hover:bg-bingu_hover hover:border-dark_grey3 text-white hover:text-white dark:bg-dark_grey5"></i>
                                        <div id="icon5" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 uppercase text-xs font-semibold text-biru bg-white dark:bg-dark_grey2 dark:text-white dark:border-dark_grey2 rounded-lg shadow-sm opacity-0 tooltip">
                                            Papan Tulis
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <!-- icon6  -->
                                        <i data-tooltip-target="icon6" class="fa-solid fa-chair border-2 rounded-md p-2 mt-1 bg-bingu hover:bg-bingu_hover hover:border-dark_grey3 text-white hover:text-white dark:bg-dark_grey5"></i>
                                        <div id="icon6" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 uppercase text-xs font-semibold text-biru bg-white dark:bg-dark_grey2 dark:text-white dark:border-dark_grey2 rounded-lg shadow-sm opacity-0 tooltip">
                                            Kursi
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <!-- icon7  -->
                                        <i data-tooltip-target="icon7" class="fa-solid fa-table border-2 rounded-md p-2 mt-1 bg-bingu hover:bg-bingu_hover hover:border-dark_grey3 text-white hover:text-white dark:bg-dark_grey5"></i>
                                        <div id="icon7" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 uppercase text-xs font-semibold text-biru bg-white dark:bg-dark_grey2 dark:text-white dark:border-dark_grey2 rounded-lg shadow-sm opacity-0 tooltip">
                                            Meja
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <!-- icon8  -->
                                        <i data-tooltip-target="icon8" class="fa-solid fa-marker border-2 rounded-md p-2 mt-1 bg-bingu hover:bg-bingu_hover hover:border-dark_grey3 text-white hover:text-white dark:bg-dark_grey5"></i>
                                        <div id="icon8" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 uppercase text-xs font-semibold text-biru bg-white dark:bg-dark_grey2 dark:text-white dark:border-dark_grey2 rounded-lg shadow-sm opacity-0 tooltip">
                                            Spidol
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <!-- icon9  -->
                                        <i data-tooltip-target="icon9" class="fa-solid fa-eraser border-2 rounded-md p-2 mt-1 bg-bingu hover:bg-bingu_hover hover:border-dark_grey3 text-white hover:text-white dark:bg-dark_grey5"></i>
                                        <div id="icon9" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 uppercase text-xs font-semibold text-biru bg-white dark:bg-dark_grey2 dark:text-white dark:border-dark_grey2 rounded-lg shadow-sm opacity-0 tooltip">
                                            Penghapus
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <!-- icon10  -->
                                        <i data-tooltip-target="icon10" class="fa-solid fa-book border-2 rounded-md p-2 mt-1 bg-bingu hover:bg-bingu_hover hover:border-dark_grey3 text-white hover:text-white dark:bg-dark_grey5"></i>
                                        <div id="icon10" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 uppercase text-xs font-semibold text-biru bg-white dark:bg-dark_grey2 dark:text-white dark:border-dark_grey2 rounded-lg shadow-sm opacity-0 tooltip">
                                            Perpustakaan Kecil
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- tampilan untuk desktop start -->
                        </div>
                    </div>
                </template>
                <!-- content booking  end -->
            </div>
        </div>
        <!-- tampilan untuk filter button mobile start -->
        <div class="sm:hidden flex justify-end z-50 fixed text-white right-4 bottom-2">
            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-full px-5 py-4 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" id="buttonsidebar" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                <i class="fa-solid fa-filter fa-flip" style="color: #ffffff"></i>
            </button>
        </div>
        <!-- tampilan untuk filter button mobile end -->

        <!-- filter sidebar mobile -->
        <div id="drawer-navigation" class="sm:hidden block fixed top-0 left-0 z-50 h-screen p-4 overflow-y-auto transition-transform -translate-x-full w-72 bg-white  dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
            <!-- title start -->
            <div class="title flex justify-between">
                <div class="flex items-center">
                    <i class="fa-solid fa-filter fa-beat text-biru hover:text-bingu_hover dark:text-white mr-3"></i>
                    <h2 class="text-slate-700 dark:text-biru font-sans text-2xl font-bold uppercase">Filter</h2>
                </div>
                <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8   dark:hover:bg-gray-600 dark:hover:text-white">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>
            <!-- title end -->
            <div class="overflow-y-auto">
                <div class="space-y-2 font-medium">
                    <div class="filter pt-5 ">
                        <div class="">
                            <!-- === Filter Tanggal Start === -->
                            <div class=" p-3 border rounded-md dark:border-dark_grey2">
                                <label for="tanggal" class="block text-gray-900 dark:text-white font-sans text-sm font-medium mb-2">Pilih Tanggal</label>
                                <input @input.debounce="fetchResults" type="date" id="tanggal-sidebar" class="appearance-none border border-[#c8c8c8] dark:border-dark_grey3 rounded w-full py-3 px-4 text-gray-700 dark:bg-dark_grey3 dark:text-dark_grey2 font-sans text-sm leading-6 transform-none" />
                            </div>
                            <!-- === Filter Tanggal END ===-->

                            <!-- === Filter Pemilihan Jam Start ===-->
                            <div x-data="{ open: false }" class="p-3  border rounded-md mt-4 dark:border-dark_grey2">
                                <form>
                                    <label class="block  mb-2 text-sm font-medium font-sans text-gray-900 dark:text-white">Pilih Jam</label>

                                    <button @click="open = ! open" class="text-white rounded bg-bingu hover:bg-bingu_hover dark:bg-dark_grey5  font-sans font-medium w-full py-3 px-4  text-sm text-center flex justify-between items-center" type="button">
                                        Jam
                                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>

                                    <!-- Dropdown menu jam -->
                                    <div x-show="open" @click.outside="open = false" class="z-10 w-full bg-white divide-y divide-gray-100 rounded-b-lg shadow p-5 dark:bg-gray-700">
                                        <div class="">
                                            <!-- Mulai -->
                                            <div class="mulai relative flex items-center ">
                                                <button @click.debounce="fetchResults" type="button" id="decrement-button-sidebar1" data-input-counter-decrement="bedrooms-input-sidebar" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                    <i class="fa-solid fa-minus"></i>
                                                </button>
                                                <input type="text" id="jam-mulai-input-sidebar" data-input-counter data-input-counter-min="1" data-input-counter-max="14" aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-11 font-medium text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pb-6 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" value="0" required />
                                                <div class="absolute bottom-1 start-1/2 -translate-x-1/2 rtl:translate-x-1/2 flex items-center text-xs text-gray-400 dark:text-white space-x-1 rtl:space-x-reverse">
                                                    <i class="fa-regular fa-clock dark:text-white"></i>
                                                    <span>Mulai</span>
                                                </div>
                                                <button @click.debounce="fetchResults" type="button" id="increment-button-sidebar1" data-input-counter-increment="bedrooms-input-sidebar" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                            </div>

                                            <!-- Selesai -->
                                            <div class="selesai relative flex items-center mt-4">
                                                <button @click.debounce="fetchResults" type="button" id="decrement-button-sidebar2" data-input-counter-decrement="bedrooms-input-sidebar2" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                    <i class="fa-solid fa-minus"></i>
                                                </button>
                                                <input type="text" id="jam-selesai-input-sidebar" data-input-counter data-input-counter-min="2" data-input-counter-max="15" aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-11 font-medium text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pb-6 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" value="0" required />
                                                <div class="absolute bottom-1 start-1/2 -translate-x-1/2 rtl:translate-x-1/2 flex items-center text-xs text-gray-400 dark:text-white space-x-1 rtl:space-x-reverse">
                                                    <i class="fa-regular fa-clock"></i>
                                                    <span>Selesai</span>
                                                </div>
                                                <button @click.debounce="fetchResults" type="button" id="increment-button-sidebar2" data-input-counter-increment="bedrooms-input-sidebar2" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <button type="button" class="px-2 py-1 mt-5 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <i class="fa-solid fa-clock-rotate-left mr-2  dark:text-white"></i>
                                            semua
                                        </button>

                                        <p id="helper-text-explanation" class="mt-3 text-[10px] text-gray-500 dark:text-gray-300">
                                            Silahkan Pilih Jam ke-1 sampai jam ke-15
                                        </p>
                                    </div>
                                </form>
                            </div>
                            <!-- === Filter Pemilihan Jam END === -->
                        </div>

                        <!-- === Filter Pemilihan Lantai Start ===-->
                        <div x-data="{ open: false }" class="p-3 border rounded-md mt-4 dark:border-dark_grey2">
                            <label class="block mb-2 text-sm font-medium font-sans text-gray-900 dark:text-white">Pilih Lantai</label>
                            <button @click="open = ! open" id="buttonPilihLantaiSidebar" class="rounded text-white bg-bingu hover:bg-bingu_hover dark:bg-dark_grey5  font-sans font-medium text-sm w-full py-3 px-4 text-center flex justify-between items-center" type="button">
                                Lantai
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>

                            <!-- Dropdown menu lantai -->
                            <div x-show="open" @click.outside="open = false" class="w-full bg-white rounded-b-lg shadow dark:bg-gray-700 font-sans">
                                <div class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200">
                                    <template x-for="(lantai, index) in lantaiOptions" :key="index">
                                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input type="checkbox" :id="'lantai-sidebar-' + index" :value="lantaiValue[index]" @click="checkSelectedLantai($event)" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                            <label :for="'lantai-sidebar-' + index" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300" x-text="lantai"></label>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                        <!-- === Filter Pemilihan Lantai END === -->

                        <!-- === Filter Jenis Start  === -->
                        <div class=" border p-3 rounded-md mt-4 dark:border-dark_grey2  ">
                            <!-- Dropdown menu -->
                            <div id="pilihStatus" class=" divide-y divide-gray-100 rounded shadow bg-bingu dark:bg-dark_grey5  dark:divide-gray-400 p-3">
                                <label class="block mb-2 text-sm font-medium font-sans text-white dark:text-white">Jenis Ruang</label>
                                <ul class="space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownToggleButton">
                                    <li>
                                        <div class="flex p-2 group rounded hover:bg-gray-100 dark:hover:bg-bingu_hover">
                                            <label class="relative inline-flex items-center w-full cursor-pointer ">
                                                <input type="checkbox" value="" class="sr-only peer" />
                                                <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full rtl:peer-checked:after:translate-x-[-100%] peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-500 peer-checked:bg-blue-600"></div>
                                                <span class="ms-3 text-sm font-medium text-white group-hover:text-bingu_hover dark:group-hover:text-white dark:text-gray-300">Ruang Teori</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex p-2 group rounded hover:bg-gray-100 dark:hover:bg-bingu_hover">
                                            <label class="relative inline-flex items-center w-full cursor-pointer ">
                                                <input type="checkbox" value="" class="sr-only peer" />
                                                <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full rtl:peer-checked:after:translate-x-[-100%] peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-500 peer-checked:bg-blue-600"></div>
                                                <span class="ms-3 text-sm font-medium text-white group group-hover:text-bingu_hover dark:group-hover:text-white dark:text-gray-300">Ruang Praktikum</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex p-2 group rounded hover:bg-gray-100 dark:hover:bg-bingu_hover">
                                            <label class="relative inline-flex items-center w-full cursor-pointer">
                                                <input type="checkbox" value="" class="sr-only peer" />
                                                <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full rtl:peer-checked:after:translate-x-[-100%] peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-500 peer-checked:bg-blue-600"></div>
                                                <span class="ms-3 text-sm font-medium text-white group-hover:text-bingu_hover dark:group-hover:text-white dark:text-gray-300">Ruang Gabungan</span>
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
        </div>
        <!-- filter sidebar mobile -->
    </div>
</div>


<script src="/assets/js/booking.js"></script>