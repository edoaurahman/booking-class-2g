<section class="relative bg-[url(/assets/img/bg_home.webp)] bg-cover bg-center bg-no-repeat min-h-screen sm:h-screen w-full">
    <div class="absolute inset-0 bg-gradient-to-t from-white/70 dark:from-dark_grey1"></div>
    <div class="relative mx-auto sm:flex sm:h-full sm:items-center justify-center">
        <div class="w-full px-10 h-full flex-1 flex sm:justify-center sm:items-center">
            <div class="w-auto max-w-[750px]">
                <div class="mt-8 flex flex-wrap gap-4 text-center w-auto flex-col">
                    <select id="ruang" class="w-[200px]  px-2 bg-navy_blue py-3  md:text-[19px] text-[12px] rounded-lg text-white shadow hover:bg-dark_grey1 focus:outline-none focus:ring active:bg-blue-700 ">
                        <?php foreach ($ruang as $item) : ?>
                            <option <?= $id == $item['id_ruang'] ? 'selected' : '' ?> value="<?= $item['id_ruang'] ?>"><?= $item['deskripsi_ruang'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <h1 class="text-[36px] dark:text-gray-100 font-extrabold font-sans md:text-[72px] -ml-[2px] leading-normal ">
                    ROOM
                    <strong class="block font-extrabold text-biru md:-mt-[37px] -mt-[12px]">
                        SCHEDULE
                    </strong>
                </h1>
                <div class=" max-w-lg text-[17px]/relaxed md:text-[25px] leading-normal dark:text-white current-schedule">
                </div>
                <div x-data="jadwalRuang" class="mt-8 flex flex-wrap gap-4 text-center w-auto  ">
                    <a :href="'/detail_booking/' + idRuang" class="rounded-2xl block -mt-[12px]  bg-bingu px-5 py-3  md:text-[19px] text-[12px] text-white shadow hover:bg-bingu_hover focus:outline-none focus:ring active:bg-bingu ">
                        CREATE BOOKING
                    </a>
                </div>
            </div>
        </div>

        <div class="flex-1 px-10 sm:pr-10 w-full h-full bg-gradient-to-l sm:dark:from-dark_grey1 sm:from-white/50 bg-opacity-20 mt-20 sm:mt-0">
            <div x-data="jadwalRuang" class="w-full h-full flex flex-col justify-center">
                <div class="flex items-center justify-center w-full">
                    <div class="mx-auto w-full font-sans text-center text-black dark:text-white shadow-2xl relative">
                        <!-- jam -->
                        <h1 x-text="currentTime" class="font-extrabold text-5xl sm:text-7xl relative w-full"></h1>
                        <!-- tanggal -->
                        <div class="p-3 w-full relative justify-center flex items-center q">
                            <div class="h-full flex justify-between dark:text-white text-5xl text-black top-0 items-center">
                                <button @click="prev()" class="w-[4rem] h-[4rem] bg-transparent">
                                    <i class="fa-solid fa-caret-left"></i>
                                </button>
                                <div class="h-full flex justify-between text-black dark:text-white top-0 items-center">
                                    <h1 x-text="currentDay" class="text-2xl sm:text-4xl"></h1>
                                </div>
                                <button @click="next()" class="w-[4rem] h-[4rem] bg-transparent">
                                    <i class="fa-solid fa-caret-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- iki jadwal -->
                <div class="rounded-lg overflow-auto max-h-full">
                    <table class="w-full text-sm text-left rtl:text-right text-black dark:text-white">
                        <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 text-center">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jam Mulai
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jam Selesai
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Dosen
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Mata Kuliah
                                </th>
                            </tr>
                        </thead>
                        <tbody class="schedule-table-body text-center">
                            <template x-for="(item,index) in jadwalRuang">
                                <tr>
                                    <td x-text="index+1" class="px-1 py-4"> </td>
                                    <td x-text="item.jam_mulai" class="px-6 py-4"></td>
                                    <td x-text="item.jam_selesai" class="px-6 py-4"></td>
                                    <td x-text="item.nama" class=" px-6 py-4"></td>
                                    <td x-text="item.nama_matkul" class="px-6 py-4"></td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
                <!-- Tidak ada jadwal -->
                <div x-show="isJadwalAvailable" class="rounded-md top-0 h-20 left-0 w-full flex justify-center items-center text-center text-white text-2xl font-bold bg-gray-900 bg-opacity-50 schedule-empty">
                    Tidak ada jadwal
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
<script src="/assets/js/roomSchedule.js"></script>