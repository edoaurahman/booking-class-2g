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

                <template x-if="tableUrgent">
                    <!-- <div class="p-4  ml-[77px] lg:ml-64"> -->
                    <div class="pb-4">
                        <div class="w-full text-center">
                            <h1 class="font-bold text-2xl text-red-600 pb-4">Terdapat Booking yang urgent</h1>
                        </div>
                        <!-- table -->
                        <section id="booking" class="shadow-lg sm:rounded-lg">
                            <div x-init="$nextTick(() => {paggination(1) })">
                                <div class="overflow-x-auto rounded-md overflow-hidden">
                                    <table class="w-[1400px] lg:w-full text-sm text-left text-gray-500 dark:text-gray-400 table-auto relative" id="table">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="w-[15%] px-6 py-3">
                                                    Peminjam
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
                                                <th scope="col" class="px-6 py-3">
                                                    Keterangan
                                                </th>
                                                <th scope="col" class="w-[9%] px-6 py-3">
                                                    Status
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <template x-for="(item,index) in tableUrgent">
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <template x-if="item.mahasiswa">
                                                        <td x-text="item.mahasiswa" class="px-4 py-3">
                                                        </td>
                                                    </template>
                                                    <template x-if="!item.mahasiswa">
                                                        <td x-text="item.dosen" class="px-4 py-3">
                                                        </td>
                                                    </template>
                                                    <td x-text="item.tanggal_pesan" class="px-6 py-4">
                                                    </td>
                                                    <td x-text="item.tanggal_pakai" class="px-6 py-4">
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
                                                        <a :href="'/assets/lampiran/' + item.lampiran" target="_blank">
                                                            <div class="px-3 py-2 text-xs font-medium text-center text-white bg-bingu rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-bingu dark:hover:bg-blue-900 dark:focus:ring-blue-800">
                                                                Lihat Lampiran
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        <!-- Modal toggle -->
                                                        <span :data-modal-target="'modal-keterangan-' + index" :data-modal-toggle="'modal-keterangan-' + index" x-text="item && item.keterangan ? item.keterangan.substring(0, 20) : ''"></span>
                                                        <!-- Main modal -->
                                                        <div :id="'modal-keterangan-' + index" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                                <!-- Modal content -->
                                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                                    <!-- Modal header -->
                                                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                                            Keterangan
                                                                        </h3>
                                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" :data-modal-hide="'modal-keterangan-' + index">
                                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                            </svg>
                                                                            <span class="sr-only">Close modal</span>
                                                                        </button>
                                                                    </div>
                                                                    <!-- Modal body -->
                                                                    <div class="p-4 md:p-5 space-y-4">
                                                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400" x-text="item.keterangan">
                                                                        </p>
                                                                    </div>
                                                                    <!-- Modal footer -->
                                                                    <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                        <button :data-modal-hide="'modal-keterangan-' + index" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tutup</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td class="px-6 py-4 font-medium">
                                                        <template x-if="item.status == 'success'">
                                                            <div>
                                                                <div class="bg-green-500 px-2 py-[2px] text-center text-white rounded-md">
                                                                    <p x-text="item.status"></p>
                                                                </div>
                                                                <div class="flex justify-between w-full py-2">
                                                                    <form action="/admin/booking/verif" method="post">
                                                                        <input type="hidden" name="id_booking" :value="item.id_booking">
                                                                        <input type="hidden" name="status" value="canceled">
                                                                        <button class="w-[25px] h-[25px] rounded-full bg-red-500 text-white hover:bg-red-700">
                                                                            <i class="fa-solid fa-xmark"></i>
                                                                        </button>
                                                                    </form>
                                                                    <!-- <form action="/admin/booking/verif" method="post">
                                                                        <input type="hidden" name="id_booking" :value="item.id_booking">
                                                                        <input type="hidden" name="status" value="success">
                                                                        <button class="w-[25px] h-[25px] rounded-full text-white bg-green-500 hover:bg-green-700">
                                                                            <i class="fa-solid fa-check"></i>
                                                                        </button>
                                                                    </form> -->
                                                                </div>
                                                            </div>
                                                        </template>

                                                        <template x-if="item.status == 'canceled'">
                                                            <div class="bg-red-500 px-2 py-[2px] text-center text-white rounded-md">
                                                                <p x-text="item.status"></p>
                                                            </div>
                                                        </template>

                                                        <template x-if="item.status == 'urgent'">
                                                            <div>
                                                                <div class="bg-red-500 px-2 py-[2px] text-center text-white rounded-md">
                                                                    <p x-text="item.status"></p>
                                                                </div>
                                                                <div class="flex justify-between w-full py-2">
                                                                    <form action="/admin/booking/verif" method="post">
                                                                        <input type="hidden" name="id_booking" :value="item.id_booking">
                                                                        <input type="hidden" name="status" value="canceled">
                                                                        <button class="w-[25px] h-[25px] rounded-full bg-red-500 text-white hover:bg-red-700">
                                                                            <i class="fa-solid fa-xmark"></i>
                                                                        </button>
                                                                    </form>
                                                                    <div x-show="tableUrgent.length == 1">
                                                                        <form action="/admin/booking/verif" method="post">
                                                                            <input type="hidden" name="id_booking" :value="item.id_booking">
                                                                            <input type="hidden" name="status" value="success">
                                                                            <button class="w-[25px] h-[25px] rounded-full text-white bg-green-500 hover:bg-green-700">
                                                                                <i class="fa-solid fa-check"></i>
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
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
                            </div>
                        </section>
                    </div>
                    <!-- </div> -->
                </template>

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
                            <input type="search" @input.debounce.750="searchBooking()" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
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
                                            Peminjam
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
                                        <th scope="col" class="px-6 py-3">
                                            Keterangan
                                        </th>
                                        <th scope="col" class="w-[9%] px-6 py-3">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template x-for="(item,index) in tableData">
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <template x-if="item.mahasiswa">
                                                <td x-text="item.mahasiswa" class="px-4 py-3">
                                                </td>
                                            </template>
                                            <template x-if="!item.mahasiswa">
                                                <td x-text="item.dosen" class="px-4 py-3">
                                                </td>
                                            </template>
                                            <td x-text="item.tanggal_pesan" class="px-6 py-4">
                                            </td>
                                            <td x-text="item.tanggal_pakai" class="px-6 py-4">
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
                                                <a :href="'/assets/lampiran/' + item.lampiran" target="_blank">
                                                    <div class="px-3 py-2 text-xs font-medium text-center text-white bg-bingu rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-bingu dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        Lihat Lampiran
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <!-- ########### Ini Modal YGY ########### -->
                                                <div x-data="{ 'showModal': false }" @keydown.escape="showModal = false">
                                                    <!-- Trigger for Modal -->
                                                    <button type="button" @click="showModal = true" x-text="item && item.keterangan ? item.keterangan.substring(0,20) + '...' : '' "></button>
                                                    <!-- Modal -->
                                                    <div class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50" x-show="showModal">
                                                        <!-- Modal inner -->
                                                        <div class="max-w-3xl px-6 py-4 mx-auto text-left bg-white rounded shadow-lg dark:bg-gray-600" @click.away="showModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                                            <!-- Title / Close-->
                                                            <div class="flex items-center justify-between">
                                                                <h5 class="mr-3 text-black max-w-none dark:text-white">Keterangan</h5>
                                                                <button type="button" class="z-50 cursor-pointer" @click="showModal = false">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <!-- content -->
                                                            <div class="min-h-[100px] min-w-[300px] pt-4 max-h-[80vh] overflow-y-auto text-gray-500 dark:text-gray-300">
                                                                <p x-text="item.keterangan"></p>
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

                                                <template x-if="item.status == 'waiting_dosen_verification'">
                                                    <div class="bg-blue-600 px-2 py-[2px] text-center text-white rounded-md">
                                                        <p>waiting dosen verification</p>
                                                    </div>
                                                </template>

                                                <template x-if=" item.status=='urgent'">
                                                    <div>
                                                        <div class=" bg-red-500 px-2 py-[2px] text-center text-white rounded-md">
                                                            <p x-text="item.status"></p>
                                                        </div>
                                                        <div class="flex justify-between w-full py-2">
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
        <div class="relative p-4 w-full max-h-full">
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
                <form id="formulir" method="post" class="p-4 md:p-5" method="POST" action="/admin/booking" @submit.prevent="checkJam($event)" enctype="multipart/form-data">
                    <div class=" grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-1 relative">
                            <label for="dosenPJ" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosen Penanggung Jawab</label>
                            <input required id="dosenPJ" list="listDosenPJ" name="id_dosen" placeholder="Masukkan NIP..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-white">
                            <datalist id="listDosenPJ">
                                <?php foreach ($listDosenPJ as $item) : ?>
                                    <option value="<?= $item['nip'] ?>"><?= $item['nama'] ?></option>
                                <?php endforeach ?>
                            </datalist>
                        </div>
                        <div class="col-span-1 relative">
                            <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                            <input required id="kelas" list="listKelas" name="id_kelas" placeholder="cth: TI-2G" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-white">
                            <datalist id="listKelas">
                                <?php foreach ($listKelas as $item) : ?>
                                    <option value="<?= $item['id_kelas'] ?>"><?= $item['nama_kelas'] ?></option>
                                <?php endforeach ?>
                            </datalist>
                        </div>
                        <div class="col-span-1 relative">
                            <label for="ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ruang</label>
                            <input required id="ruang" list="listRuang" @input.debounce="setRuang" name="id_ruang" placeholder="cth: Ruang Teori-2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white  dark:focus:border-primary-500">
                            <datalist id="listRuang">
                                <?php foreach ($listRuang as $item) : ?>
                                    <option value="<?= $item['id_ruang'] ?>"><?= $item['nama_ruang'] ?></option>
                                <?php endforeach ?>
                            </datalist>
                        </div>
                        <div class="col-span-1">
                            <label for="tgl_pakai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Pemakaian</label>
                            <input required type="date" @input.debounce="fetchDetailBooking" name="tanggal" id="tgl_pakai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-white ">
                        </div>
                        <div class="p-3 border rounded-md mt-4 dark:bg-gray-600 dark:border-gray-500">
                            <label class="mb-2 text-sm font-medium font-sans text-gray-900 dark:text-white">Pilih Jam Booking</label>
                            <div class=" bg-white text-center dark:bg-gray-600">
                                <div class="grid grid-cols-3 gap-2 mt-4 md:gap-1">
                                    <template x-for="(item, index) in detailBooking">
                                        <button type="button" :class="item.status_jam === 'onprocess' && !selectedHours.includes(index + 1) ? 'bg-yellow-500' : item.status_jam === 'used' && !selectedHours.includes(index + 1) ? 'bg-red-500' : selectedHours.includes(index + 1) ? 'bg-blue-500' : '!bg-bingu' " class=" text-white font-medium text-xs px-8 py-2 text-center rounded" x-text="padZero(index+1)" @click="toggleSelectedRange(index + 1)"></button>
                                    </template>
                                </div>
                            </div>
                            <template x-if="detailBooking.length == 0">
                                <!-- pilih ruang dan tanggal terlebih dahulu -->
                                <div class="w-full text-center dark:text-white">
                                    <span>Pilih ruang dan tanggal terlebih dahulu</span>
                                </div>
                            </template>
                        </div>
                        <div class="col-span-1 relative">
                            <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                            <textarea required name="keterangan" id="keterangan" rows="10" class="rounded w-full border border-gray-500 dark:bg-gray-600 dark:text-white" value="Kepentingan kelas"></textarea>
                        </div>
                        <template x-if="lastDosen">
                            <div class="col-span-1 relative">
                                <label for="lastDosen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosen Pengguna saat ini</label>
                                <input disabled :value="lastDosen.dosen" id="lastDosen" placeholder="Masukkan NIP..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-white">
                            </div>
                        </template>
                        <!-- input hidden to get id jam -->
                        <input required type="hidden" name="jam_mulai" id="id_jam_mulai">
                        <input required type="hidden" name="jam_selesai" id="id_jam_selesai">
                        <input type="hidden" name="status" :value="lastDosen == null ? 'success' : 'urgent' " id="status_booking">
                        <template x-if="lastDosen">
                            <input type="hidden" :value="lastDosen.nip" id="lastDosen" name="id_dosen_last" placeholder="Masukkan NIP..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-white">
                        </template>

                        <div class="col-span-2">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="lampiran">Lampiran</label>
                            <input required name="lampiran" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="lampiran_help" id="lampiran" type="file">
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
<script src="/assets/js/sweetalert.min.js"></script>
<script>
    // set tanggal hari ini dan maks 6 hari kedepan
    const tanggalInput = document.querySelector("#tgl_pakai");
    const tanggalNow = new Date();
    const tanggalNowString = tanggalNow.toISOString().split("T")[0];
    tanggalInput.setAttribute("min", tanggalNowString);
    tanggalNow.setDate(tanggalNow.getDate() + 6);
    const tanggalMaxString = tanggalNow.toISOString().split("T")[0];
    tanggalInput.setAttribute("max", tanggalMaxString);

    tanggalInput.value = tanggalNowString;

    // input jam mulai dan selesai
    const input_jam_mulai = document.querySelector("#id_jam_mulai");
    const input_jam_selesai = document.querySelector("#id_jam_selesai");

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
    const padZero = (num) => {
        return String(num).padStart(2, "0");
    };



    document.addEventListener('alpine:init', () => {
        Alpine.data('tableData', () => ({
            tableData: null,
            tableUrgent: null,
            current_page: 1,
            detailBooking: [],
            id_ruang: null,
            selectedHours: [],
            listJam: [
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
            ],
            id_jam_mulai: "",
            id_jam_selesai: "",
            lastDosen: null,
            init() {
                this.urgent();
            },
            checkJam() {
                if (this.id_jam_mulai == "" || this.id_jam_selesai == "") {
                    alert("Pilih ruang dan jam terlebih dahulu");
                    return;
                }
                this.handleSubmit();
            },
            toggleSelectedRange(hour) {
                const currentIndex = this.selectedHours.indexOf(hour);
                const maxHour = Math.max(...this.selectedHours);

                if (
                    hour < maxHour ||
                    (this.selectedHours.length > 2 && currentIndex === -1)
                ) {
                    return;
                }

                if (currentIndex === -1) {
                    this.selectedHours.push(hour);
                } else {
                    this.selectedHours.splice(currentIndex, maxHour);
                }

                if (this.selectedHours.length > 1) {
                    const minHour = Math.min(...this.selectedHours);
                    const maxHour = Math.max(...this.selectedHours);
                    for (let i = minHour + 1; i < maxHour; i++) {
                        if (!this.selectedHours.includes(i)) {
                            this.selectedHours.push(i);
                        }
                    }
                }
                this.id_jam_mulai = this.listJam[this.selectedHours[0] - 1];
                this.id_jam_selesai = this.listJam[this.selectedHours[1] - 1];
                input_jam_mulai.value = this.id_jam_mulai;
                input_jam_selesai.value = this.id_jam_selesai;
                // checkLastDosen if jam_mulai and jam_selesai is not empty and not undefined
                if (this.id_jam_mulai != "" && this.id_jam_selesai != "" && this.id_jam_mulai != undefined && this.id_jam_selesai != undefined) {
                    this.checkDosenLast();
                }
            },
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
            async fetchDetailBooking() {
                const tanggal = document.querySelector("#tgl_pakai").value;
                const day = new Date(tanggal).toLocaleDateString("id-ID", {
                    weekday: "long",
                });
                if (this.id_ruang == null || tanggal == "" || this.id_ruang == "") {
                    return;
                }
                const response = await fetch('/api/status-ruang/' + this.id_ruang)
                const data = await response.json()
                this.detailBooking = data[day]
            },
            setRuang() {
                this.id_ruang = document.querySelector("#ruang").value;
                this.fetchDetailBooking();
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
            },
            urgent() {
                fetch('/api/admin/booking/urgent')
                    .then(response => response.json())
                    .then(data => {
                        this.tableUrgent = data.bookingIntersect[0];
                    });
            },
            async checkDosenLast() {
                // post id_ruang, jam_mulai, jam_selesai, tanggal
                const formData = new FormData();
                formData.append("id_ruang", this.id_ruang);
                formData.append("jam_mulai", this.id_jam_mulai);
                formData.append("jam_selesai", this.id_jam_selesai);
                formData.append("tanggal", document.querySelector("#tgl_pakai").value);
                const response = await fetch('/api/admin/booking/check-dosen-last', {
                    method: "POST",
                    body: formData
                })
                const data = await response.json()
                console.log(data);
                this.lastDosen = data;
            },
            async handleSubmit() {
                const formData = new FormData(document.querySelector('#formulir'));
                // console.log(data);
                const response = await fetch('/admin/booking', {
                    method: 'POST',
                    body: formData
                })
                const data = await response.json()
                console.log(data);
                if (data.status) {
                    swal({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data berhasil dikirim',
                    }).then(() => {
                        document.cookie = "lampiran=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                        window.location.href = '/admin/booking'
                    })
                } else {
                    await swal({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Data gagal dikirim',
                    }).then(() => {
                        document.cookie = "lampiran=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                        window.location.href = '/admin/booking'
                    })
                }
            },
            async searchBooking() {
                const keyword = document.querySelector("#table-search").value;
                const formData = new FormData();
                formData.append("keyword", keyword);
                const response = await fetch('/api/admin/booking/search', {
                    method: "POST",
                    body: formData
                })
                const data = await response.json()
                this.tableData = data;
            }
        }))
    })
</script>
</body>

</html>