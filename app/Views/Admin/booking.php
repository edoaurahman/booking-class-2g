<div x-data="tableData">


    <div class="bg-gray-100 dark:bg-dark_grey1 min-h-[100vh] w-full">
        <div class="p-4  ml-[77px] lg:ml-64">
            <div class="p-4 mt-14">

                <div class="px-4 py-2 mb-5 rounded-md shadow-md flex items-center gap-2 bg-white font-normal text-sm dark:bg-gray-700 text-gray-500 dark:text-gray-400">
                    <svg class="flex-shrink-0 w-4 h-4 text-white transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>
                    Admin / Booking
                </div>

                <div class="pb-4  flex justify-between">
                    <!-- Searching -->
                    <div class="shadow-md rounded-lg">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative mt-1">
                            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                        </div>
                    </div>

                    <!-- Button add Booking -->
                    <a class="px-4 py-2 bg-bingu rounded-lg cursor-pointer shadow-lg text-white hover:bg-bingu_hover" data-modal-target="add-booking-modal" data-modal-toggle="add-booking-modal">
                        Add Booking
                    </a>

                </div>


                <!-- table -->
                <section id="booking" class="shadow-lg sm:rounded-lg">
                    <div x-init="$nextTick(() => {paggination(1) })">
                        <div class="overflow-x-auto rounded-md overflow-hidden">
                            <table class="w-[1400px] lg:w-full text-sm text-left text-gray-500 dark:text-gray-400 table-auto relative" id="table">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="w-[15%] px-6 py-3">
                                            Mahasiswa
                                        </th>
                                        <th scope="col" class=" px-6 py-3">
                                            Tanggal Pesan
                                        </th>
                                        <th scope="col" class=" px-6 py-3">
                                            Tanggal Pakai
                                        </th>
                                        <th scope="col" class="w-[15%] px-6 py-3">
                                            Dosen Penanggung Jawab
                                        </th>
                                        <th scope="col" class="w-[15%] px-6 py-3">
                                            Dosen Pengguna Ruang
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Kelas
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Ruang
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Jam Mulai
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Jam Selesai
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Lampiran
                                        </th>
                                        <th scope="col" class="w-[9%] px-6 py-3">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template x-for="(item,index) in tableData">
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td x-text="item.mahasiswa" class="px-4 py-3">
                                            </td>
                                            <td x-text="item.tanggal_pesan" class="px-6 py-4">
                                            </td>
                                            <td x-text="item.tanggal_pakai" class="px-6 py-4">
                                            </td>
                                            <td x-text="item.dosen" class="px-6 py-4">
                                            </td>
                                            <td x-text="item.dosen" class="px-6 py-4">
                                            </td>
                                            <td x-text="item.kelas" class="px-6 py-4">
                                            </td>
                                            <td x-text="item.ruang" class="px-6 py-4">
                                            </td>
                                            <td x-text="item.jam_mulai" class="px-6 py-4">
                                            </td>
                                            <td x-text="item.jam_selesai" class="px-6 py-4">
                                            </td>
                                            <td class="px-6 py-4">
                                                <button :data-modal-target="'modal-lampiran-'+index" :data-modal-toggle="'modal-lampiran-'+index" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Lihat Lampiran</button>
                                                <div :id="'modal-lampiran-'+index" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                    <div class="relative p-4 w-full max-w-5xl max-h-full">
                                                        <!-- Modal content -->
                                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                            <!-- Modal header -->
                                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                                    Lampiran
                                                                </h3>
                                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" :data-modal-hide="'modal-lampiran-'+index">
                                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                    </svg>
                                                                    <span class="sr-only">Close modal</span>
                                                                </button>
                                                            </div>
                                                            <!-- Modal body -->
                                                            <div class="p-4 md:p-5 space-y-4">
                                                                <iframe :src="'/assets/lampiran/' + item.lampiran" frameborder="0" class="w-full h-[500px]"></iframe>
                                                            </div>
                                                            <!-- Modal footer -->
                                                            <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                <button :data-modal-hide="'modal-lampiran-'+index" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tutup</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 font-medium">
                                                <template x-if="item.status == 'success' || item.status == 'done'">
                                                    <div class="bg-green-500 px-2 py-[2px] text-center text-white rounded-md">
                                                        <p x-text="item.status"></p>
                                                    </div>
                                                </template>

                                                <template x-if="item.status == 'canceled'">
                                                    <div class="bg-red-500 px-2 py-[2px] text-center text-white rounded-md">
                                                        <p x-text="item.status"></p>
                                                    </div>
                                                </template>

                                                <template x-if="item.status == 'onprocess'">
                                                    <div class="flex gap-3 w-full">
                                                        <form action="/admin/booking/verif" method="post">
                                                            <input type="hidden" name="id_booking" :value="item.id_booking">
                                                            <input type="hidden" name="status" value="canceled">
                                                            <button class="w-[25px] h-[25px] rounded-full bg-red-500 text-white hover:bg-red-700">
                                                                <i class="fa-solid fa-xmark"></i>
                                                            </button>
                                                        </form>
                                                        <form action="/admin/booking/verif" method="post">
                                                            <input type="hidden" name="id_booking" :value="item.id_booking">
                                                            <input type="hidden" name="status" value="success">
                                                            <button class="w-[25px] h-[25px] rounded-full text-white bg-green-500 hover:bg-green-700">
                                                                <i class="fa-solid fa-check"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </template>
                                            </td>
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>

                        <!-- paggination -->
                        <nav class="w-full flex items-center justify-end py-4 px-3" aria-label="Table navigation">
                            <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                                <li>
                                    <a href="#booking" @click="prev()" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-200 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                                </li>
                                <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
                                    <li>
                                        <a @click="paggination(<?= $i; ?>)" id="button-pagination" href="#booking" class="flex items-center justify-center px-3 h-8 leading-tight border border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-white hover:text-black"><?= $i ?></a>
                                    </li>
                                <?php endfor; ?>
                                <li>
                                    <a href="#booking" @click="next()" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-200 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Main modal -->
    <div id="add-booking-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full inset-0 max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Add New Booking
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="add-booking-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-1 relative">
                            <label for="mahasiswa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM Mahasiswa</label>
                            <input id="mahasiswa" list="listNim" name="mahasiswa" placeholder="Masukkan NIM..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-white">
                            <datalist id="listNim">
                                <?php foreach ($listNim as $item) : ?>
                                    <option value="<?= $item['nim'] ?>"><?= $item['nama'] ?></option>
                                <?php endforeach ?>
                            </datalist>
                        </div>
                        <div class="col-span-1">
                            <label for="tgl_pakai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Pemakaian</label>
                            <input type="date" name="tgl_pakai" id="tgl_pakai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-white ">
                        </div>
                        <div class="col-span-1 relative">
                            <label for="dosenPJ" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosen Penanggung Jawab</label>
                            <input id="dosenPJ" list="listDosenPJ" name="dosenPJ" placeholder="Masukkan NIP..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-white">
                            <datalist id="listDosenPJ">
                                <?php foreach ($listDosenPJ as $item) : ?>
                                    <option value="<?= $item['nip'] ?>"><?= $item['nama'] ?></option>
                                <?php endforeach ?>
                            </datalist>
                        </div>
                        <div class="col-span-1 relative">
                            <label for="dosenPR" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosen Pengguna Ruang</label>
                            <input id="dosenPR" list="listDosenPR" name="dosenPR" placeholder="Masukkan NIP..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-white">
                            <datalist id="listDosenPR">
                                <?php foreach ($listDosenPR as $item) : ?>
                                    <option value="<?= $item['nip'] ?>"><?= $item['nama'] ?></option>
                                <?php endforeach ?>
                            </datalist>
                        </div>
                        <div class="col-span-1 relative">
                            <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                            <input id="kelas" list="listKelas" name="kelas" placeholder="cth: TI-2G" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-white">
                            <datalist id="listKelas">
                                <?php foreach ($listKelas as $item) : ?>
                                    <option value="<?= $item['id_kelas'] ?>"><?= $item['nama_kelas'] ?></option>
                                <?php endforeach ?>
                            </datalist>
                        </div>
                        <div class="col-span-1 relative">
                            <label for="ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ruang</label>
                            <input id="ruang" list="listRuang" name="ruang" placeholder="cth: Ruang Teori-2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white  dark:focus:border-primary-500">
                            <datalist id="listRuang">
                                <?php foreach ($listRuang as $item) : ?>
                                    <option value="<?= $item['id_ruang'] ?>"><?= $item['nama_ruang'] ?></option>
                                <?php endforeach ?>
                            </datalist>
                        </div>
                        <div class="col-span-1">
                            <label for="jam_mulai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Mulai</label>
                            <div class="relative flex items-center max-w-[8rem]">
                                <button type="button" id="decrement-button" onclick="decrementJamMulaiFunc()" data-input-counter-decrement="jam_mulai" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none dark:hover:border-gray-500">
                                    <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                    </svg>
                                </button>
                                <input type="number" id="jam_mulai" oninput="changeValueJamMulai()" value="1" min="1" max="11" class="bg-gray-50 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 block w-full py-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:border-white dark:focus:ring-white" placeholder="1" required>
                                <button type="button" id="increment-button" onclick="incrementJamMulaiFunc()" data-input-counter-increment="jam_mulai" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none dark:hover:border-gray-500">
                                    <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="col-span-1">
                            <label for="jam_selesai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Selesai</label>
                            <div class="relative flex items-center max-w-[8rem]">
                                <button type="button" id="decrement-button" onclick="decrementJamSelesaiFunc()" data-input-counter-decrement="jam_selesai" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none dark:hover:border-gray-500">
                                    <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                    </svg>
                                </button>
                                <input type="number" id="jam_selesai" oninput="changeValueJamSelesai()" value="1" min="1" max="11" class="bg-gray-50 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500  block w-full py-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:border-white dark:focus:ring-white" placeholder="1" required>
                                <button type="button" id="increment-button" onclick="incrementJamSelesaiFunc()" data-input-counter-increment="jam_selesai" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none dark:hover:border-gray-500">
                                    <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- input hidden to get id jam -->
                        <input type="hidden" name="jam_mulai" id="id_jam_mulai">
                        <input type="hidden" name="jam_selesai" id="id_jam_selesai">

                        <div class="col-span-2">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="lampiran">Lampiran</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="lampiran_help" id="lampiran" type="file">
                        </div>
                    </div>
                    <div class="flex w-full justify-end items-center">
                        <button type="submit" class="text-white items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-end dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- CSS For Styling input type number (agar tidak menampilkan number arrows) -->
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>

<script>
    // input jam mulai dan selesai

    const input1 = document.querySelector("#jam_mulai");
    const input2 = document.querySelector("#jam_selesai");
    const id_jam_mulai = document.querySelector("#id_jam_mulai");
    const id_jam_selesai = document.querySelector("#id_jam_selesai");

    const jam = [
        "J001",
        "J002",
        "J003",
        "J004",
        "J005",
        "J006",
        "J007",
        "J008",
        "J009",
        "J010",
        "J011",
    ]

    const changeValueJamMulai = () => {
        let inputValue = Math.min(11, Math.max(1, parseInt(input1.value, 10)));

        if ((inputValue + 1 > parseInt(input2.value)) && input2.value != 11) {
            input2.value = Math.min(inputValue + 1, 11)
            changeValueJamSelesai();
        }

        id_jam_mulai.value = jam[inputValue - 1];
    }

    const changeValueJamSelesai = () => {
        let inputValue = Math.min(11, Math.max(1, parseInt(input2.value, 10)));

        if ((inputValue == parseInt(input1.value)) && input1.value != 1) {
            input1.value = Math.max(parseInt(input1.value) - 1, 1);
            changeValueJamMulai();
        }

        id_jam_selesai.value = jam[inputValue - 1];
    }

    const decrementJamMulaiFunc = () => {
        input1.value = Math.max(parseInt(input1.value, 10) - 1, 1)
        changeValueJamMulai();
    }

    const incrementJamMulaiFunc = () => {
        input1.value = Math.min(parseInt(input1.value, 10) + 1, 11);
        changeValueJamMulai();
    }

    const decrementJamSelesaiFunc = () => {
        input2.value = Math.max(parseInt(input2.value, 10) - 1, 1)
        changeValueJamSelesai();
    }

    const incrementJamSelesaiFunc = () => {
        input2.value = Math.min(parseInt(input2.value, 10) + 1, 11);
        changeValueJamSelesai();
    }
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
<script>
    // action modal

    let buttonAction = document.querySelectorAll("i");

    document.querySelector("#booking").addEventListener("click", (e) => {
        buttonAction.forEach(node => {
            try {
                if (node === e.target) {
                    node.nextElementSibling.classList.toggle("hidden")
                } else if (e.target !== node && !e.target.classList.contains("delete-modal") && !e.target.classList.contains("edit-modal")) {
                    node.nextElementSibling.classList.add("hidden");
                }
            } catch (error) {}
        });
    });

    // table & pagination
    const buttonPaggination = document.querySelectorAll('#button-pagination');

    function setActive(current_page) {
        buttonPaggination.forEach((button) => {
            if (button.innerText == current_page) {
                button.classList.remove("dark:bg-gray-800");
                button.classList.add("dark:bg-gray-700");
                button.classList.add("bg-gray-200")
            } else {
                button.classList.add('dark:bg-gray-800');
                button.classList.add('bg-white');
                button.classList.remove("dark:bg-gray-700");
                button.classList.remove("bg-gray-200");
            }
        });
    }

    document.addEventListener('alpine:init', () => {
        Alpine.data('tableData', () => ({
            tableData: null,
            current_page: 1,
            paggination(page = '1') {
                fetch('/api/booking/' + page)
                    .then(response => response.json())
                    .then(data => {
                        this.tableData = data.jmlBooking;
                        this.current_page = data.currentPage;
                        setActive(this.current_page);
                    }).then(e => {
                        buttonAction = document.querySelectorAll("i");
                    });
            },
            next() {
                if (this.current_page == <?= $totalPage ?>) {
                    return;
                }
                fetch('/api/booking/' + (parseInt(this.current_page) + 1))
                    .then(response => response.json())
                    .then(data => {
                        this.tableData = data.jmlBooking;
                        this.current_page = data.currentPage;
                        setActive(this.current_page);
                    });
            },
            prev() {
                if (this.current_page == 1) {
                    return;
                }
                fetch('/api/booking/' + (parseInt(this.current_page) - 1))
                    .then(response => response.json())
                    .then(data => {
                        this.tableData = data.jmlBooking;
                        this.current_page = data.currentPage;
                        setActive(this.current_page);
                    });
            }
        }))
    })
</script>
</body>

</html>