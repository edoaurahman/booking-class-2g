<body class="bg-white dark:bg-dark_grey1">

    <!-- header -->
    <div class="w-auto">
        <ol class="hidden sm:flex items-center w-full  font-medium text-center text-white  dark:text-gray-400 sm:text-base bg-biru2 md:py-8 md:px-20 ">
            <li class="flex md:w-full items-center  text-white dark:text sm:after:content-[''] after:w-full  after:border-b after:border-white after:border-2 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-white text-2xl font-sans font-semibold">
                <div class="flex flex-none justify-end items-center text-xl">
                    <i class="fa-solid  fa-circle-check mr-3"></i>
                    <p>Search </p>
                </div>
            </li>
            <li class="flex md:w-full items-center  text-white dark:text sm:after:content-[''] after:w-full  after:border-b after:border-white after:border-2 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-white text-2xl font-sans font-semibold">
                <div class="flex flex-none items-center text-xl">
                    <i class="fa-solid fa-circle-check ml-3 mr-3"></i>
                    <p>Ruang</p>
                </div>
            </li>
            <li class="flex md:w-full items-center text-white dark:text sm:after:content-[''] after:w-full  after:border-b after:border-white after:border-2 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-white font-sans font-semibold">
                <div class="flex flex-none items-center text-xl">
                    <i class="fa-solid fa-circle-check ml-3 mr-3"></i>
                    <p>Isi Formulir</p>
                </div>

            <li class="flex items-center text-white font-semibold">
                <div class="flex flex-none items-center text-xl">
                    <i class="fa-solid fa-circle-check ml-3 mr-3"></i>
                    <p>Konfirmasi</p>
                </div>
            </li>
        </ol>

        <!-- mobile  -->
        <ol class="sm:hidden  flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 overflow-x-auto shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-800  dark:border-gray-700 sm:p-4 sm:space-x-4 rtl:space-x-reverse min-h-screen">
            <li class="flex items-center text-blue-600  ">
                <i class="fa-solid fa-circle-check  "></i>
                <div class="ml-2 mr-2">Search</div>
                <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                </svg>
            </li>

            <li class="flex items-center text-blue-600 px-2 ">
                <i class="fa-solid fa-circle-check mr-1 "></i>
                <div class="ml-2 mr-2">Ruang</div>
                <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                </svg>
            </li>

            <li class="flex flex-none items-center text-blue-600 ">
                <i class="fa-solid fa-circle-check mr-1 "></i>
                <div class=" ">Isi Formulir</div>
                <svg class="w-3 h-3 ms-2 mr-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                </svg>
            </li>


            <li class="flex items-center text-blue-600">
                <i class="fa-solid fa-circle-check mr-1 "></i>
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

            <div class="w-full  font-serif  grid md:grid-cols-3 grid-cols-1">
                <div class=" md:col-span-1 w-full m-3 md:ml-12 ">

                    <div class="mb-5 ">
                        <label for="nama" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" id="nama" value="<?= $user->nama ?>" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-5  pr-6">
                        <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><?= $level === 'mahasiswa' ? 'NIM' : 'NIP' ?></label>
                        <input type="text" id="nim" value="<?= $user->nim ?? $user->nip ?>" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-5 ">
                        <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                        <input type="text" id="kelas" value="<?= $nama_kelas  ?>" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-5 ">
                        <label for="dosenPj" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosen Penanggungjawab</label>
                        <input type="text" id="dosenPj" value="<?= $dosen_penanggung_jawab->nama ?>" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="col-span-1 w-full md:mt-3 mx-3 md:my-3 md:ml-12 md:mr-12 sm:pr-24">
                    <div class="mb-5 -mt-1 pr-6">
                        <label for="ruang" class="text-sm  font-medium text-gray-900 dark:text-white text-[15px]">Ruang</label>
                        <input type="text" id="ruang" value="<?= $ruang->nama_ruang ?>" disabled class="bg-gray-50 border mt-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-5 -mt-1 pr-6">
                        <label for="tanggal" class="text-sm  font-medium text-gray-900 dark:text-white text-[15px]">Tanggal</label>
                        <input type="text" id="tanggal" value="<?= $tanggal ?>" disabled class="bg-gray-50 border mt-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-5 -mt-1 pr-6">
                        <label for="jam" class="text-sm  font-medium text-gray-900 dark:text-white text-[15px]">Jam</label>
                        <input type="text" id="jam" value="<?= $jam_mulai . ' - ' . $jam_selesai ?>" disabled class="bg-gray-50 border mt-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="pr-6">

                        <label for="keterangan" class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                        <textarea id="keterangan" rows="4" class="block p-2.5 w-full  text-sm mb-5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 placeholder-gray-900 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Kelas materi tambahan" disabled><?= $request->keterangan ?></textarea>
                    </div>


                    <div class="flex justify-end w-full mt-7 pr-6">

                    </div>
                </div>
                <div class="col-span-1 w-full  md:ml-12 md:mr-12 sm:pr-24">
                    <div class="text-sm text-gray-900 dark:text-white p-4">
                        <div class="font-bold text-lg mb-2"><?= $ruang->deskripsi_ruang ?></div>
                        <div class="w-full justify-center flex">
                            <img src="/assets/img/booking/class1.jpg" class="w-[400px] h-auto mb-6" alt="">
                        </div>
                        <div class="font-bold text-lg mb-2">Denah Ruang</div>
                        <div class="w-full justify-center flex">
                            <img src="/assets/img/lantai/<?= $ruang->gambar ?>" class="w-[400px] h-auto mb-6" alt="">
                        </div>
                    </div>
                </div>
            </div>


            <div x-data="formulir" class="flex justify-center">
                <form id="formulir" action="/booking" method="post" @submit.prevent="handleSubmit">
                    <input type="hidden" name="id_dosen" value="<?= $request->id_dosen ?>">
                    <input type="hidden" name="keterangan" value="<?= $request->keterangan ?>">
                    <input type="hidden" name="id_ruang" value="<?= $request->id_ruang ?>">
                    <input type="hidden" name="id_mahasiswa" value="<?= $request->id_mahasiswa ?? null ?>">
                    <input type="hidden" name="status" value="<?= $request->status ?>">
                    <input type="hidden" name="tanggal" value="<?= $request->tanggal ?>">
                    <input type="hidden" name="id_kelas" value="<?= $request->id_kelas ?>">
                    <input type="hidden" name="jam_mulai" value="<?= $request->jam_mulai ?>">
                    <input type="hidden" name="jam_selesai" value="<?= $request->jam_selesai ?>">
                    <input type="hidden" name="lampiran" value="<?= $lampiran ?>">
                    <input type="hidden" name="id_last_dosen" value="<?= $request->id_dosen_last ?? null ?>">
                    <button type="submit" class=" mr-0 px-3 sm:w-[800px] text-center  text-white  bg-bingu hover:bg-bingu_hover focus:ring-4 focus:outline-none  focus:ring-blue-300 font-medium rounded-lg text-xl py-2.5  dark:bg-bingu dark:hover:bg-bingu_hover dark:focus:ring-blue-800">
                        Create Booking
                    </button>
                </form>
            </div>

        </div>

    </div>

</body>

<script src="/assets/js/review.js"></script>