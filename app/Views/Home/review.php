<body class="bg-white dark:bg-dark_grey1">

    <!-- header -->
    <div class="w-auto">
        <ol class="hidden sm:flex items-center w-full  font-medium text-center text-white  dark:text-gray-400 sm:text-base bg-biru2 py-16 px-28 ">
            <li class="flex md:w-full items-center  text-white dark:text sm:after:content-[''] after:w-full  after:border-b after:border-white after:border-2 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-white text-2xl font-sans font-semibold">
                <div class="flex flex-none justify-end items-center w-36">
                    <i class="fa-solid  fa-circle-check mr-3"></i>
                    <p>Ruang </p>
                </div>
            </li>
            <li class="flex md:w-full items-center text-white dark:text sm:after:content-[''] after:w-full  after:border-b after:border-white after:border-2 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-white text-2xl font-sans font-bold">
                <div class="flex flex-none w-36  items-center">
                    <i class="fa-solid fa-circle-check ml-3 mr-3"></i>
                    <p>Waktu</p>
                </div>
            </li>
            <li class="flex md:w-full items-center text-white dark:text sm:after:content-[''] after:w-full  after:border-b after:border-white after:border-2 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-white text-2xl font-sans font-bold">
                <div class="flex flex-none items-center">
                    <i class="fa-solid fa-circle-check mr-3"></i>
                    <p>Isi Formulir</p>
                </div>

            <li class="flex items-center text-white text-2xl font-sans font-bold mr-10">
                <div class="flex flex-none items-center ">
                    <i class="fa-solid fa-circle-check mr-3"></i>
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

            <li class="flex items-center text-blue-600 ">
                <i class="fa-solid fa-circle-check mr-2 "></i>
                <div class=" ">Isi Formulir</div>
                <svg class="w-3 h-3 ms-2 mr-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                </svg>
            </li>


            <li class="flex items-center  text-blue-600  ">
                <i class="fa-solid fa-circle-check mr-3 "></i>
                Review
            </li>
        </ol>
    </div>

    <div class="md:grid md:grid-cols-3  md:grid-rows-3 md:px-10">
        <div class="h-auto rounded-md bg-white dark:bg-dark_grey6 shadow-md m-6 col-span-3 row-span-3 p-5 mx-4">
            <div class="header font-serif mb-6 text-2xl bg-biru2 md:text-left text-center rounded-md text-white py-2 md:pl-4">
                Review
            </div>
            <!-- hedaer -->

            <form class="w-full  font-serif  grid md:grid-cols-3 grid-cols-1">
                <div class=" md:col-span-1 w-full m-3 md:ml-12 ">

                    <div class="mb-5 hidden md:block">
                        <label for="nama" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" id="nama" value="Mahasiswa 1" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-5 hidden md:block">
                        <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                        <input type="text" id="nim" value="224xxxxx01" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-5 hidden md:block">
                        <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                        <input type="text" id="kelas" value="TI-2G" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-5 hidden md:block">
                        <label for="dosenPj" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosen Penanggungjawab</label>
                        <input type="text" id="dosenPj" value="Pak Yoppy" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="col-span-1 w-full m-3 md:ml-12 md:mr-12 sm:pr-24">
                    <div class="mb-5 -mt-1 pr-6">
                        <label for="ruang" class="text-sm  font-medium text-gray-900 dark:text-white text-[15px]">Ruang</label>
                        <input type="text" id="ruang" value="Ruang Teori 1" disabled class="bg-gray-50 border mt-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-5 -mt-1 pr-6">
                        <label for="tanggal" class="text-sm  font-medium text-gray-900 dark:text-white text-[15px]">Tanggal</label>
                        <input type="text" id="tanggal" value="30 Desember 2023" disabled class="bg-gray-50 border mt-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-5 -mt-1 pr-6">
                        <label for="jam" class="text-sm  font-medium text-gray-900 dark:text-white text-[15px]">Jam ke</label>
                        <input type="text" id="jam" value="1, 2, 3" disabled class="bg-gray-50 border mt-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="pr-6">

                        <label for="keterangan" class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                        <textarea id="keterangan" rows="4" class="block p-2.5 w-full  text-sm mb-5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 placeholder-gray-900 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Kelas materi tambahan" disabled></textarea>
                    </div>


                    <div class="flex justify-end w-full mt-7 pr-6">

                    </div>
                </div>
                <div class="col-span-1 w-full m-3 md:ml-12 md:mr-12 sm:pr-24">
                    <div class="text-sm text-gray-900 dark:text-white p-4">
                        <div class="font-bold text-lg mb-2">Ruang Teori 1</div>
                        <div class="w-full justify-center flex">
                            <img src="/assets/img/booking/class1.jpg" class="w-[300px] h-auto mb-6" alt="">
                        </div>
                        <div class="font-bold text-lg mb-2">Denah Ruang</div>
                        <div class="w-full justify-center flex">
                            <img src="/assets/img/lantai/Lantai6.png" class="w-[400px] h-auto mb-6" alt="">
                        </div>
                    </div>
                </div>
            </form>


            <div class="flex justify-center">

                <button type="submit" class=" mr-0  sm:w-[800px] text-center   text-white  bg-bingu hover:bg-bingu_hover focus:ring-4 focus:outline-none  focus:ring-blue-300 font-medium rounded-lg text-xl   py-2.5  dark:bg-bingu dark:hover:bg-bingu_hover dark:focus:ring-blue-800">
                    Create Booking
                </button>
            </div>

        </div>
        <!-- <div class="hidden md:block col-span-2 rounded-md bg-white dark:bg-dark_grey6 shadow-md m-6 p-5 row-span-2 font-serif">
            <div class="header p-5  text-2xl bg-biru2 rounded-md text-white py-2 pl-4">
                Preview
            </div>
            <div class="text-sm text-gray-900 dark:text-white p-4">
                <div class="font-bold text-lg mb-2">Ruang Teori 1</div>
                <span class="">Denah ruang: </span>
                <div class="w-full justify-center flex">
                    <img src="/assets/img/lantai/Lantai6.png" class="w-[400px] h-auto mb-6" alt="">
                </div>
                <div class="text-base mb-2  font-semibold text-gray-900 dark:text-white">
                    Jam ke <br>
                    <p class="-my-0.5 font-thin">1,2,4</p>
                </div>
                <div class="text-base font-semibold text-gray-900 dark:text-white">
                    Tanggal <br>
                    <p class="-my-0.5 font-thin">30 Desember 2023</p>
                </div>
            </div>
        </div> -->
    </div>

</body>