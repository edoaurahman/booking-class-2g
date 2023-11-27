<section class="relative bg-[url(/assets/img/bg_home.webp)] bg-cover bg-center bg-no-repeat h-screen w-full">
    <div class="absolute inset-0 bg-gradient-to-t from-white to-white-300 dark:from-dark_grey1 "></div>



    <div class="relative mx-auto pl-10 py-20 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-1 flex justify-center items-center">
        <div class="w-full h-full flex-1 flex justify-center items-center">

            <div class="w-auto ">

                <div class="mt-8 flex flex-wrap gap-4 text-center w-auto flex-col">
                    <select id="countries" class="w-[200px]  px-2 bg-navy_blue py-3  md:text-[19px] text-[12px] rounded-lg text-white shadow hover:bg-dark_grey1 focus:outline-none focus:ring active:bg-blue-700 ">
                        <option selected>Choose a room</option>
                        <option value="RT 1">Ruang Teori 1</option>
                        <option value="RT 2">Ruang Teori 2</option>
                        <option value="RT 3">Ruang Teori 3</option>
                        <option value="RT 4">Ruang Teori 4</option>
                        <option value="RT 5">Ruang Teori 5</option>
                        <option value="RT 6">Ruang Teori 6</option>
                        <option value="RT 7">Ruang Teori 7</option>
                        <option value="RT 8">Ruang Teori 8</option>
                        <option value="LSI 1">Lab Sistem Informasi 1</option>
                        <option value="LSI 2">Lab Sistem Informasi 2</option>
                        <option value="LSI 3">Lab Sistem Informasi 3</option>
                        <option value="LPY 1">Ruang Praktikum 1</option>
                        <option value="LPY 2">Ruang Praktikum 2</option>
                        <option value="LPY 3">Ruang Praktikum 3</option>
                        <option value="LPY 5">Ruang Praktikum 4</option>
                        <option value="LPY 6">Ruang Praktikum 5</option>
                        <option value="LPY 7">Ruang Praktikum 6</option>
                        <option value="LPY 8">Ruang Praktikum 7</option>
                    </select>
                </div>

                <h1 class="text-[36px] dark:text-gray-100 font-extrabold font-sans md:text-[72px] -ml-[2px] leading-normal ">
                    ROOM
                    <strong class="block font-extrabold text-biru md:-mt-[37px] -mt-[12px]">
                        SCHEDULE
                    </strong>
                </h1>

                <p class=" max-w-lg text-[17px]/relaxed md:text-[25px] leading-normal dark:text-white">
                    <strong>NOW</strong> TI 2G - KULIAH OOP<br>07.00 - 10.30
                </p>


                <div class="mt-8 flex flex-wrap gap-4 text-center w-auto  ">
                    <a href="/booking" class="rounded-2xl block -mt-[12px]  bg-bingu px-5 py-3  md:text-[19px] text-[12px] text-white shadow hover:bg-bingu_hover focus:outline-none focus:ring active:bg-bingu ">
                        CREATE BOOKING
                    </a>
                </div>

            </div>

        </div>



        <div class="flex-1 w-full h-full bg-gradient-to-l from-white to-white-300 dark:from-dark_grey1">
            <div class="w-auto h-auto">
                <div class="flex items-center justify-center ">
                    <!-- iki jam -->
                    <div class="mx-auto max-w-sm  font-sans font-extrabold text-7xl text-center text-white shadow-2xl  ">
                        <div class="relative">05:47</div>
                    </div>
                </div>


                <!-- iki tanggal -->
                <div class="relative mx-auto max-w-sm items-center justify-center">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                </div>




                <!-- iki jadwal -->
                <div class="relative rounded-lg overflow-x-auto ">
                    <!-- <table class="w-full text-sm  text-left rtl:text-right text-gray-500 dark:text-gray-400"> -->
                    <table class="w-full text-sm  text-left rtl:text-right text-black dark:text-white">
                        <!-- <thead class="text-xs  uppercase text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400"> -->
                        <thead class="text-xs  uppercase bg-gray-50 dark:bg-gray-700 ">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Time
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    User
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Activity
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class=" border-grey-700 dark:border-white">
                                <td class="px-6 py-4">
                                    1
                                </td>
                                <td class="px-6 py-4">
                                    07.00 - 07.50
                                </td>
                                <td class="px-6 py-4">
                                    TI-2G
                                </td>
                                <td class="px-6 py-4">
                                    Kuliah OOP
                                </td>
                            </tr>
                            <tr class=" border-grey-700 dark:border-white">
                                <td class="px-6 py-4">
                                    2
                                </td>
                                <td class="px-6 py-4">
                                    07.50 - 08.40
                                </td>
                                <td class="px-6 py-4">
                                    TI-2G
                                </td>
                                <td class="px-6 py-4">
                                    Kuliah OOP
                                </td>
                            </tr>
                            <tr class=" border-grey-700 dark:border-white">
                                <td class="px-6 py-4">
                                    3
                                </td>
                                <td class="px-6 py-4">
                                    08.40 - 9.30

                                </td>
                                <td class="px-6 py-4">
                                    TI-2G
                                </td>
                                <td class="px-6 py-4">
                                    Kuliah OOP
                                </td>
                            </tr>
                            <tr class=" border-grey-700 dark:border-white">
                                <td class="px-6 py-4">
                                    4
                                </td>
                                <td class="px-6 py-4">
                                    09.40 - 10.30
                                </td>
                                <td class="px-6 py-4">
                                    TI-2G
                                </td>
                                <td class="px-6 py-4">
                                    Kuliah OOP
                                </td>
                            </tr>
                            <tr class=" border-grey-700 dark:border-white">
                                <td class="px-6 py-4">
                                    5
                                </td>
                                <td class="px-6 py-4">

                                    10.30 - 11.20
                                </td>
                                <td class="px-6 py-4">
                                    TI-2G
                                </td>
                                <td class="px-6 py-4">
                                    Kuliah OOP
                                </td>
                            </tr>
                            <tr class=" border-grey-700 dark:border-white">
                                <td class="px-6 py-4">
                                    6
                                </td>
                                <td class="px-6 py-4">

                                    11.20 - 12.10

                                </td>
                                <td class="px-6 py-4">
                                    TI-2G
                                </td>
                                <td class="px-6 py-4">
                                    Kuliah OOP
                                </td>
                            </tr>
                            <tr class=" border-grey-700 dark:border-white">
                                <td class="px-6 py-4">
                                    7
                                </td>
                                <td class="px-6 py-4">
                                    12.50 - 13.40

                                </td>
                                <td class="px-6 py-4">
                                    TI-2G
                                </td>
                                <td class="px-6 py-4">
                                    Kuliah OOP
                                </td>
                            </tr>
                            <tr class=" border-grey-700 dark:border-white">
                                <td class="px-6 py-4">
                                    8
                                </td>
                                <td class="px-6 py-4">

                                    13.40 - 14.30
                                </td>
                                <td class="px-6 py-4">
                                    TI-2G
                                </td>
                                <td class="px-6 py-4">
                                    Kuliah OOP
                                </td>
                            </tr>
                            <tr class=" border-grey-700 dark:border-white">
                                <td class="px-6 py-4">
                                    9
                                </td>
                                <td class="px-6 py-4">

                                    14.30 - 15.20

                                </td>
                                <td class="px-6 py-4">
                                    TI-2G
                                </td>
                                <td class="px-6 py-4">
                                    Kuliah OOP
                                </td>
                            </tr>
                            <tr class=" border-grey-700 dark:border-white">
                                <td class="px-6 py-4">
                                    10
                                </td>
                                <td class="px-6 py-4">

                                    15.30 - 16.20

                                </td>
                                <td class="px-6 py-4">
                                    TI-2G
                                </td>
                                <td class="px-6 py-4">
                                    Kuliah OOP
                                </td>
                            </tr>
                            <tr class=" border-grey-700 dark:border-white">
                                <td class="px-6 py-4">
                                    11
                                </td>
                                <td class="px-6 py-4">

                                    16.20 -17.10

                                </td>
                                <td class="px-6 py-4">
                                    TI-2G
                                </td>
                                <td class="px-6 py-4">
                                    Kuliah OOP
                                </td>
                            </tr>
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