<section class="relative bg-[url(/assets/img/bg_home.webp)] bg-cover bg-center bg-no-repeat h-screen w-full">
    <div class="absolute inset-0 bg-gradient-to-t from-white to-white-300 dark:from-dark_grey1 "></div>


    <div class="relative mx-auto pl-10 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-1 xl:flex justify-center items-center">
        <div class="w-full h-full flex-1 flex lg:justify-center lg:items-center">

            <div class="w-auto max-w-[750px]">

                <div class="mt-8 flex flex-wrap gap-4 text-center w-auto flex-col">
                    <select id="countries" class="w-[200px]  px-2 bg-navy_blue py-3  md:text-[19px] text-[12px] rounded-lg text-white shadow hover:bg-dark_grey1 focus:outline-none focus:ring active:bg-blue-700 ">
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


                <div class="mt-8 flex flex-wrap gap-4 text-center w-auto  ">
                    <a href="/booking" class="rounded-2xl block -mt-[12px]  bg-bingu px-5 py-3  md:text-[19px] text-[12px] text-white shadow hover:bg-bingu_hover focus:outline-none focus:ring active:bg-bingu ">
                        CREATE BOOKING
                    </a>
                </div>

            </div>

        </div>



        <div class="flex-1 w-full h-full bg-gradient-to-l from-white to-white-300 dark:from-dark_grey1">
            <div class="w-full h-full flex flex-col justify-center">
                <div class="flex items-center justify-center w-full">
                    <!-- iki jam -->
                    <div class="mx-auto w-full font-sans text-center text-white shadow-2xl relative">
                        <h1 class="font-extrabold text-7xl schedule-clock relative w-full "></h1>
                        <div class="p-3 schedule-day w-full relative justify-center flex items-center q">
                        </div>
                    </div>
                </div>


                <!-- iki jadwal -->
                <div class="relative rounded-lg overflow-x-auto ">
                    <table class="w-full text-sm  text-left rtl:text-right text-black dark:text-white">
                        <thead class="text-xs  uppercase bg-gray-50 dark:bg-gray-700 text-center">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Time Start
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Time End
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    User
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Activity
                                </th>
                            </tr>
                        </thead>
                        <tbody class="schedule-table-body text-center">
                        </tbody>
                    </table>
                </div>


            </div>
        </div>



    </div>
</section>
<style>

</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
<script src="/assets/js/roomSchedule.js"></script>