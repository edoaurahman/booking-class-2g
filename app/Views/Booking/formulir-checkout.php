<body class="bg-white  dark:bg-dark_grey1">

    <div>
        <div class="w-auto">
            <ol class="hidden sm:flex items-center w-full  font-medium text-center text-white  dark:text-gray-400 sm:text-base bg-biru2 md:py-8 md:px-20 ">
                <li class="flex md:w-full items-center  text-white dark:text sm:after:content-[''] after:w-full  after:border-b after:border-white after:border-2 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-white text-2xl font-sans font-semibold">
                    <div class="flex flex-none justify-end items-center text-xl">
                        <i class="fa-solid  fa-circle-check mr-3"></i>
                        <p>Ruang </p>
                    </div>
                </li>
                <li class="flex md:w-full items-center text-white dark:text sm:after:content-[''] after:w-full  after:border-b after:border-white after:border-2 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-white text-2xl font-sans font-bold">
                    <div class="flex flex-none items-center text-xl">
                        <i class="fa-solid fa-circle-check ml-3 mr-3"></i>
                        <p>Waktu</p>
                    </div>
                </li>
                <li class="flex md:w-full items-center text-white dark:text sm:after:content-[''] after:w-full after:border-b after:border-biru after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-biru text-2xl font-sans font-bold">
                    <div class="flex flex-none items-center text-xl">
                        <i class="fa-solid  fa-circle-check mr-3"></i>
                        <p>Isi Formulir</p>
                    </div>

                <li class="flex items-center">
                    <div class="flex flex-none items-center text-biru">
                        <i class="fa-solid fa-clipboard-check mr-3"></i>
                        <p>Konfirmasi</p>
                    </div>
                </li>
            </ol>

            <!-- mobile  -->
            <ol class="sm:hidden  flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 overflow-x-auto shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-800  dark:border-gray-700 sm:p-4 sm:space-x-4 rtl:space-x-reverse">
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
        <div class="md:grid md:grid-cols-5  md:grid-rows-3 md:px-10">
            <div class="h-auto rounded-md bg-white dark:bg-dark_grey6 shadow-md m-6 col-span-3 row-span-3 p-5 mx-4">
                <!-- hedaer -->
                <div class="header font-serif mb-6 text-2xl bg-biru2 md:text-left text-center rounded-md text-white py-2 md:pl-4">
                    Formulir Peminjaman Ruang
                </div>

                <form class="w-full  font-serif  grid md:grid-cols-2 grid-cols-1" action="/review" method="post" enctype="multipart/form-data">
                    <div class=" md:col-span-1 w-full m-3 md:ml-12 ">

                        <div class="mb-5 hidden md:block">
                            <label for="nama" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" id="nama" value="<?= $user->nama ?>" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-5 hidden md:block">
                            <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><?= $level === 'mahasiswa' ? 'NIM' : 'NIP' ?></label>
                            <input type="text" id="nim" value="<?= $user->nim ?? $user->nip ?>" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <?php if ($level === 'dosen') : ?>
                            <div class="mb-5 relative">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                                <div class="text-sm font-medium text-gray-900 dark:text-white pr-6">
                                    <input required name="id_kelas" list="listKelas" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <datalist id="listKelas">
                                        <?php foreach ($listKelas as $item) : ?>
                                            <option value="<?= $item['id_kelas'] ?>"><?= $item['nama_kelas'] ?></option>
                                        <?php endforeach ?>
                                    </datalist>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="mb-5 hidden md:block">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                                <input type="text" value="<?= $user->nama_kelas ?>" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <input type="hidden" name="id_kelas" value="<?= $user->id_kelas ?>">
                            </div>
                        <?php endif ?>
                        <!-- <p class="md:mb-3 text-[15px] text-gray-900 dark:text-white">Kepentingan</p>
                        <div class="flex flex-col  md:mb-5 ">
                            <div class="items-center flex mb-3">
                                <input id="mendadak" type="radio" value="" name="kepentingan" class="w-4  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="mendadak" class="items-center ms-2 text-sm font-medium text-gray-900 dark:text-gray-300 mr-5">Mendadak</label>
                            </div>
                            <div class="items-center flex">
                                <input checked id="tidak-mendadak" type="radio" value="" name="kepentingan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="tidak-mendadak" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tidak Mendadak</label>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-span-1 w-full m-3 md:ml-12 md:mr-12 sm:pr-24">
                        <?php if ($level === 'mahasiswa') : ?>
                            <div class="mb-5 relative">
                                <label for="id_dosen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosen penanggung jawab</label>
                                <div class="text-sm font-medium text-gray-900 dark:text-white pr-6">
                                    <input required id="id_dosen" list="listDosen" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="id_dosen" placeholder="">
                                    <datalist id="listDosen">
                                        <?php foreach ($listDosen as $item) : ?>
                                            <option value="<?= $item['nip'] ?>"><?= $item['nama'] ?></option>
                                        <?php endforeach ?>
                                    </datalist>
                                </div>
                            </div>
                        <?php endif ?>
                        <div class="mb-5 -mt-1 pr-6">
                            <label for="id_dosen_last" class="text-sm  font-medium text-gray-900 dark:text-white text-[15px]">Dosen pengguna ruang saat ini</label>
                            <input type="text" id="id_dosen_last" value="<?= empty($bookingAvailability) ? 'Tidak ada dosen' : $bookingAvailability['dosen'] ?>" disabled class="bg-gray-50 border mt-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="pr-6">
                            <label class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload file</label>
                            <input required name="lampiran" class=" cursor-pointer mb-5  dark:text-gray-400 focus:outline-none  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" aria-describedby="user_avatar_help" id="user_avatar" type="file">

                            <label for="keterangan" class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                            <textarea id="keterangan" name="keterangan" rows="4" class="block p-2.5 w-full  text-sm mb-5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                        </div>
                        <!-- hidden input -->
                        <input type="hidden" name="id_ruang" value="<?= $id_ruang ?>">
                        <input type="hidden" name="<?= $level == 'mahasiswa' ? 'id_mahasiswa' : 'id_dosen' ?>" value="<?= $user->nim ?? $user->nip ?>">
                        <input type="hidden" name="status" value="<?= $status ?>">
                        <input type="hidden" name="tanggal" value="<?= $request->tanggal ?>">
                        <input type="hidden" name="jam_mulai" value="<?= $request->jam_mulai ?>">
                        <input type="hidden" name="jam_selesai" value="<?= $request->jam_selesai ?>">
                        <input type="hidden" name="id_dosen_last" value="<?= empty($bookingAvailability) ? null : $bookingAvailability['nip'] ?>" <?= empty($bookingAvailability) ? 'disabled' : '' ?>>
                        <div class="flex justify-end w-full mt-7 pr-6">
                            <button type="submit" class=" mr-0 texy- text-white bg-bingu hover:bg-bingu_hover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm  sm:w-auto px-5 py-2.5  dark:bg-bingu dark:hover:bg-bingu_hover dark:focus:ring-blue-800">
                                Selanjutnya
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="hidden md:block col-span-2 rounded-md bg-white dark:bg-dark_grey6 shadow-md m-6 p-5 row-span-2 font-serif">
                <div class="header p-5  text-2xl bg-biru2 rounded-md text-white py-2 pl-4">
                    Preview
                </div>
                <div class="text-sm text-gray-900 dark:text-white p-4">
                    <div class="font-bold text-lg mb-2"><?= $ruang->deskripsi_ruang ?></div>
                    <span class="">Denah ruang: </span>
                    <div class="w-full justify-center flex">
                        <img src="/assets/img/lantai/<?= $ruang->gambar ?>" class="w-[400px] h-auto mb-6" alt="">
                    </div>
                    <div class="text-base mb-2  font-semibold text-gray-900 dark:text-white">
                        Jam ke <br>
                        <p class="-my-0.5 font-thin"><?= $jam_mulai . ' - ' . $jam_selesai ?></p>
                    </div>
                    <div class="text-base font-semibold text-gray-900 dark:text-white">
                        Tanggal <br>
                        <p class="-my-0.5 font-thin"><?= $tanggal; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- mobile -->
    <div x-data @click.outside="exitFilter()">
        <div class="md:hidden fixed z-[9999] -right-[560px] top-[120px] h-auto rounded-sm dark:bg-dark_grey6 bg-gray-100 p-4 transition-all ease-in-out duration-1000 text-white " id="filter">
            <div class="block col-span-2 bg-gray-100 dark:bg-dark_grey6 row-span-2 font-serif">
                <div class="header p-5  text-[22px] bg-biru2 rounded-md text-white py-2 pl-4">
                    Preview
                </div>
                <div class="text-sm text-gray-900 dark:text-white p-4">
                    <div class="font-bold mb-2">Ruang Teori 1</div>
                    <span class="">Denah ruang: </span>
                    <div class="w-full justify-center flex">
                        <img src="/assets/img/lantai/Lantai6.png" class="w-[400px] h-auto mb-6" alt="">
                    </div>
                    <div class="text-sm mb-2 font-semibold text-gray-900 dark:text-white">
                        Jam ke <br>
                        <p class="-my-0.5 font-thin"><?= $jam_mulai . ' - ' . $jam_selesai ?></p>
                    </div>
                    <div class="text-sm font-semibold text-gray-900 dark:text-white">
                        Tanggal <br>
                        <p class="-my-0.5 font-thin"><?= $tanggal; ?></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="sm:hidden block fixed z-50 right-0 top-[45%] w-10 h-10 p-2 bg-biru text-center rounded-l-md cursor-pointer" id="buttonFilter">
            <i class="fa-solid fa-eye " style="color: #ffffff; " id="imgButtonFilter"></i>
        </div>
    </div>
</body>

<script>
    const filter = document.getElementById('filter');
    const buttonFilter = document.getElementById('buttonFilter');
    const imgButtonFilter = document.getElementById('imgButtonFilter');

    buttonFilter.addEventListener("click", () => {
        buttonFilter.classList.add("hidden")
        filter.classList.remove("-right-[560px]");
        filter.classList.add("right-0");
    })

    const exitFilter = () => {
        filter.classList.add("-right-[560px]");
        filter.classList.remove("right-0");
        buttonFilter.classList.remove("hidden")
    }
</script>