<div class="p-4  ml-[77px] lg:ml-64 bg-gray-100 dark:bg-[#171622]">
    <div class="p-4 mt-14">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
            <div class="h-[120px] rounded-xl shadow-lg bg-gradient-to-r from-[#4ada94] to-[#55f498] flex flex-wrap justify-center items-center">
                <div class="w-full flex justify-between px-10 py-4 items-center gap-5">
                    <div class="text-left block text-white">
                        <h1 class="text-4xl font-semibold mb-2">17</h1>
                        <div class="text-md font-medium">Ruang Tersedia</div>
                    </div>
                    <img src="assets/img/enter.png" alt="" class="h-12 w-12">
                </div>
            </div>
            <div class="h-[120px] rounded-xl shadow-lg bg-gradient-to-r from-[#febf6b] to-[#ffe284] flex flex-wrap justify-center items-center">
                <div class="w-full flex justify-between px-10 py-4 items-center gap-5">
                    <div class="text-left block text-white">
                        <h1 class="text-4xl font-semibold mb-2">25</h1>
                        <div class="text-md font-medium">Booking</div>
                    </div>
                    <img src="assets/img/enter.png" alt="" class="h-12 w-12">
                </div>
            </div>
            <div class="h-[120px] rounded-xl shadow-lg bg-gradient-to-r from-[#ff725b] to-[#ffd082] flex flex-wrap justify-center items-center">
                <div class="w-full flex justify-between px-10 py-4 items-center gap-5">
                    <div class="text-left block text-white">
                        <h1 class="text-4xl font-semibold mb-2">25</h1>
                        <div class="text-md font-medium">Ruang Terpakai</div>
                    </div>
                    <img src="assets/img/enter.png" alt="" class="h-12 w-12">
                </div>
            </div>
            <div class="h-[120px] rounded-xl shadow-lg bg-gradient-to-r from-[#59bcff] to-[#59d1ff] flex flex-wrap justify-center items-center">
                <div class="w-full flex justify-between px-10 py-4 items-center gap-5">
                    <div class="text-left block text-white">
                        <h1 class="text-4xl font-semibold mb-2">25</h1>
                        <div class="text-md font-medium">Penggunaan Kelas</div>
                    </div>
                    <img src="assets/img/enter.png" alt="" class="h-12 w-12">
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-4 mt-9">
            <div class="lg:col-span-2 flex flex-col h-full shadow-lg rounded bg-gray-50 dark:bg-gray-800 px-3">
                <div class="flex w-full justify-between">
                    <div class="p-5 flex flex-col gap-1 text-left text-gray-900  dark:text-white ">
                        <div class="text-xl font-semibold ">Blablabla Statistic</div>
                        <div class="text-xs font-normal text-slate-400">Perbandingan jam yang terpakai dan tidak terpakai pada semua ruang</div>
                    </div>
                    <div class="p-5 flex gap-8 items-center">
                        <div class="flex gap-2">
                            <div class="text-xl font-semibold text-black dark:text-white">250</div>
                            <div class="text-xs font-normal text-slate-400">Jam terpakai</div>
                        </div>
                        <div class="flex gap-2">
                            <div class="text-xl font-semibold text-black dark:text-white">50</div>
                            <div class="text-xs font-normal text-slate-400">Jam kosong</div>
                        </div>
                    </div>
                </div>
                <div class="p-4 w-full">
                    <canvas id="timeChart" style="width:100%"></canvas>
                </div>
            </div>
            <div class="max-h-[503px] flex flex-col h-full rounded bg-gray-50 dark:bg-gray-800 shadow-lg">
                <div class="p-5 text-xl font-semibold text-left text-gray-900 dark:text-white">
                    Top Rooms Booked
                </div>
                <div class="table">
                    <table class="w-full text-center text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                        <thead class="sticky ">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Ruang
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Persentase
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="overflow-y-auto">
                    <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                        <tbody>
                            <tr class="border-b  dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Ruang Teori 3
                                </td>
                                <td class="px-6 py-4">
                                    40%
                                </td>
                            </tr>
                            <tr class="border-b  dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Ruang Teori 3
                                </td>
                                <td class="px-6 py-4">
                                    40%
                                </td>
                            </tr>
                            <tr class="border-b  dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Ruang Teori 3
                                </td>
                                <td class="px-6 py-4">
                                    40%
                                </td>
                            </tr>
                            <tr class="border-b  dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Ruang Teori 3
                                </td>
                                <td class="px-6 py-4">
                                    40%
                                </td>
                            </tr>
                            <tr class="border-b  dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Ruang Teori 3
                                </td>
                                <td class="px-6 py-4">
                                    40%
                                </td>
                            </tr>
                            <tr class="border-b  dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Ruang Teori 3
                                </td>
                                <td class="px-6 py-4">
                                    40%
                                </td>
                            </tr>
                            <tr class="border-b  dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Ruang Teori 3
                                </td>
                                <td class="px-6 py-4">
                                    40%
                                </td>
                            </tr>
                            <tr class="border-b  dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Ruang Teori 3
                                </td>
                                <td class="px-6 py-4">
                                    40%
                                </td>
                            </tr>
                            <tr class="border-b  dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Ruang Teori 3
                                </td>
                                <td class="px-6 py-4">
                                    40%
                                </td>
                            </tr>
                            <tr class="border-b  dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Ruang Teori 3
                                </td>
                                <td class="px-6 py-4">
                                    40%
                                </td>
                            </tr>
                            <tr class="border-b  dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Ruang Teori 3
                                </td>
                                <td class="px-6 py-4">
                                    40%
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- ucer Percentage -->
        <div class="mt-4 mb-4 grid grid-rows-2 grid-cols-2 lg:grid-cols-3 lg:grid-rows-3 gap-4 max-h-[810px]">
            <div class="flex flex-col justify-between rounded col-start-1 lg:row-span-2 bg-gray-50 shadow-lg h-full dark:bg-gray-800 p-2">
                <div class="w-full p-3 text-2xl font-semibold text-center text-gray-900 dark:text-white">
                    User Percentage
                </div>
                <div class="mx-auto lg:w-[310px] lg:h-[310px] w-[200px] h-[200px]">
                    <canvas id="userChart" style="width:100%;height:100%;"></canvas>
                </div>

                <div class="flex w-full justify-center items-center text-black dark:text-white gap-6 lg:pb-6">
                    <div class="flex py-4 gap-4 items-center">
                        <div class="lg:w-[70px] lg:h-[70px] w-[40px] h-[40px]">
                            <canvas id="dosenChart" style="width:100%; height:100%;"></canvas>
                        </div>
                        <div class="flex flex-col text-left">
                            <div class="lg:text-5xl text-2xl font-semibold">50</div>
                            <div class="lg:text-md text-sm font-normal text-slate-400">Dosen</div>
                        </div>
                    </div>
                    <div class="flex py-4 gap-4 items-center">
                        <div class="lg:w-[70px] w-[40px] lg:h-[70px] h-[40px]">
                            <canvas id="mahasiswaChart" style="width:100%; height:100%;"></canvas>
                        </div>
                        <div class="flex flex-col text-left">
                            <div class="lg:text-4xl text-2xl font-semibold">350</div>
                            <div class="lg:text-md text-sm font-normal text-slate-400">Mahasiswa</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- bar perbandingan jumlah kelas -->
            <div class="p-2 flex flex-col rounded col-start-2 row-start-1 lg:row-start-3 lg:col-start-1 bg-gray-50 shadow-lg dark:bg-gray-800 lg:max-h-[280px]">
                <div class="p-3 text-xl font-semibold text-center md:text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    Perbandingan Jumlah Kelas
                </div>
                <div class="p-5 flex flex-col gap-5">
                    <div class="w-full bg-gray-200 rounded-full h-4 dark:bg-gray-700">
                        <div class="bg-gradient-to-r from-[#800f2f] to-[#ff758f] h-4 rounded-full" style="width: 40%"></div>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4 dark:bg-gray-700">
                        <div class="bg-gradient-to-r from-[#0D41E1] to-[#07C8F9] h-4 rounded-full" style="width: 40%"></div>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4 dark:bg-gray-700">
                        <div class="bg-gradient-to-r from-[#007f5f] to-[#aacc00] h-4 rounded-full" style="width: 20%"></div>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center lg:flex-nowrap lg:justify-between p-3 gap-7 lg:gap-2">
                    <div class="flex flex-col text-center">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 rounded-full bg-gradient-to-r from-[#800f2f] to-[#ff758f]"></div>
                            <div class="text-xs font-normal text-slate-400">Ruang Teori</div>
                        </div>
                        <div class="text-2xl font-semibold text-black dark:text-white">12</div>
                    </div>
                    <div class="flex flex-col text-center">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 rounded-full bg-gradient-to-r from-[#0D41E1] to-[#07C8F9]"></div>
                            <div class="text-xs font-normal text-slate-400">Ruang Praktikum</div>
                        </div>
                        <div class="text-2xl font-semibold text-black dark:text-white">12</div>
                    </div>
                    <div class="flex flex-col text-center">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 rounded-full bg-gradient-to-r from-[#007f5f] to-[#aacc00]"></div>
                            <div class="text-xs font-normal text-slate-400">Ruang Gabungan</div>
                        </div>
                        <div class="text-2xl font-semibold text-black dark:text-white">6</div>
                    </div>
                </div>
            </div>

            <!-- calendar  -->

            <div class="flex lg:flex-col rounded-md col-span-2 lg:row-span-3 lg:col-start-2 bg-gray-50 shadow-lg dark:bg-gray-800 overflow-hidden">
                <div class="basis-1/2 p-8 dark:bg-gray-800 bg-white flex flex-col justify-between gap-12 h-[380px]">
                    <div class="flex items-center justify-around">
                        <button id="prev" aria-label="calendar backward" class="focus:text-gray-400 hover:text-gray-400 text-gray-800 dark:text-gray-100 button-calendar">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="15 6 9 12 15 18" />
                            </svg>
                        </button>
                        <span tabindex="0" class="focus:outline-none  text-base font-bold dark:text-gray-100 text-gray-800" id="calendarHead">October 2020</span>
                        <button id="next" aria-label="calendar forward" class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800 dark:text-gray-100 button-calendar">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler  icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="9 6 15 12 9 18" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center justify-between h-full">
                        <table class="w-full lg:h-full">
                            <thead>
                                <tr>
                                    <th class="pb-7 lg:pb-10">
                                        <div class="w-full flex justify-center">
                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Min</p>
                                        </div>
                                    </th>
                                    <th class="pb-7 lg:pb-10">
                                        <div class="w-full flex justify-center">
                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Sen</p>
                                        </div>
                                    </th>
                                    <th class="pb-7 lg:pb-10">
                                        <div class="w-full flex justify-center">
                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Sel</p>
                                        </div>
                                    </th>
                                    <th class="pb-7 lg:pb-10">
                                        <div class="w-full flex justify-center">
                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Rab</p>
                                        </div>
                                    </th>
                                    <th class="pb-7 lg:pb-10">
                                        <div class="w-full flex justify-center">
                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Kam</p>
                                        </div>
                                    </th>
                                    <th class="pb-7 lg:pb-10">
                                        <div class="w-full flex justify-center">
                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Jum</p>
                                        </div>
                                    </th>
                                    <th class="pb-7 lg:pb-10">
                                        <div class="w-full flex justify-center">
                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Sab</p>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="days">
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="basis-1/2 p-4 dark:bg-gray-700 bg-gray-50 rounded-b flex flex-col gap-4 h-[380px]">
                    <div class="text-xl lg:text-2xl font-semibold text-black dark:text-white">Newest Booking</div>
                    <div class="flex flex-col lg:flex-row lg:flex-wrap gap-4 lg:justify-between overflow-y-auto">
                        <div class="flex border border-gray-400 p-4 rounded-md gap-4 items-start lg:w-[48%]">
                            <img src="/assets/img/foto-profil.png" alt="img-user" class="h-[45px] rounded-full">
                            <div class="flex flex-col text-left text-black dark:text-white w-full gap-1">
                                <div class="text-sm font-semibold">Maulidin Zakaria</div>
                                <div class="text-xs font-normal">November 28th, 2023</div>
                                <div class="flex justify-between text-slate-400 text-xs font-normal mt-2">
                                    <p>Ruang RT-07</p>
                                    <p>Jam 7 - 9</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex border border-gray-400 p-4 rounded-md gap-4 items-start lg:w-[48%]">
                            <img src="/assets/img/foto-profil.png" alt="img-user" class="h-[45px] rounded-full">
                            <div class="flex flex-col text-left text-black dark:text-white w-full gap-1">
                                <div class="text-sm font-semibold">Maulidin Zakaria</div>
                                <div class="text-xs font-normal">November 28th, 2023</div>
                                <div class="flex justify-between text-slate-400 text-xs font-normal mt-2">
                                    <p>Ruang RT-07</p>
                                    <p>Jam 7 - 9</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex border border-gray-400 p-4 rounded-md gap-4 items-start lg:w-[48%]">
                            <img src="/assets/img/foto-profil.png" alt="img-user" class="h-[45px] rounded-full">
                            <div class="flex flex-col text-left text-black dark:text-white w-full gap-1">
                                <div class="text-sm font-semibold">Maulidin Zakaria</div>
                                <div class="text-xs font-normal">November 28th, 2023</div>
                                <div class="flex justify-between text-slate-400 text-xs font-normal mt-2">
                                    <p>Ruang RT-07</p>
                                    <p>Jam 7 - 9</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex border border-gray-400 p-4 rounded-md gap-4 items-start lg:w-[48%]">
                            <img src="/assets/img/foto-profil.png" alt="img-user" class="h-[45px] rounded-full">
                            <div class="flex flex-col text-left text-black dark:text-white w-full gap-1">
                                <div class="text-sm font-semibold">Maulidin Zakaria</div>
                                <div class="text-xs font-normal">November 28th, 2023</div>
                                <div class="flex justify-between text-slate-400 text-xs font-normal mt-2">
                                    <p>Ruang RT-07</p>
                                    <p>Jam 7 - 9</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex border border-gray-400 p-4 rounded-md gap-4 items-start lg:w-[48%]">
                            <img src="/assets/img/foto-profil.png" alt="img-user" class="h-[45px] rounded-full">
                            <div class="flex flex-col text-left text-black dark:text-white w-full gap-1">
                                <div class="text-sm font-semibold">Maulidin Zakaria</div>
                                <div class="text-xs font-normal">November 28th, 2023</div>
                                <div class="flex justify-between text-slate-400 text-xs font-normal mt-2">
                                    <p>Ruang RT-07</p>
                                    <p>Jam 7 - 9</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex border border-gray-400 p-4 rounded-md gap-4 items-start lg:w-[48%]">
                            <img src="/assets/img/foto-profil.png" alt="img-user" class="h-[45px] rounded-full">
                            <div class="flex flex-col text-left text-black dark:text-white w-full gap-1">
                                <div class="text-sm font-semibold">Maulidin Zakaria</div>
                                <div class="text-xs font-normal">November 28th, 2023</div>
                                <div class="flex justify-between text-slate-400 text-xs font-normal mt-2">
                                    <p>Ruang RT-07</p>
                                    <p>Jam 7 - 9</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex border border-gray-400 p-4 rounded-md gap-4 items-start lg:w-[48%]">
                            <img src="/assets/img/foto-profil.png" alt="img-user" class="h-[45px] rounded-full">
                            <div class="flex flex-col text-left text-black dark:text-white w-full gap-1">
                                <div class="text-sm font-semibold">Maulidin Zakaria</div>
                                <div class="text-xs font-normal">November 28th, 2023</div>
                                <div class="flex justify-between text-slate-400 text-xs font-normal mt-2">
                                    <p>Ruang RT-07</p>
                                    <p>Jam 7 - 9</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex border border-gray-400 p-4 rounded-md gap-4 items-start lg:w-[48%]">
                            <img src="/assets/img/foto-profil.png" alt="img-user" class="h-[45px] rounded-full">
                            <div class="flex flex-col text-left text-black dark:text-white w-full gap-1">
                                <div class="text-sm font-semibold">Maulidin Zakaria</div>
                                <div class="text-xs font-normal">November 28th, 2023</div>
                                <div class="flex justify-between text-slate-400 text-xs font-normal mt-2">
                                    <p>Ruang RT-07</p>
                                    <p>Jam 7 - 9</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
    // time chart

    const xValues = ["19", "20", "21", "22", "23", "24", "25"];
    const yValuesTrue = [150, 160, 155, 170, 180, 190, 165];
    const yValuesFalse = [50, 40, 45, 30, 20, 10, 35];
    const dataTimeChart = {
        labels: xValues,
        datasets: [{
                fill: 1,
                lineTension: 0.4,
                backgroundColor: "rgba(0, 136, 237, 0.2)",
                borderColor: "#0088ED",
                data: yValuesTrue
            },
            {
                fill: true,
                lineTension: 0.4,
                backgroundColor: "rgba(225, 73, 66, 0.2)",
                borderColor: "#E14942",
                data: yValuesFalse
            },
        ]
    };

    new Chart("timeChart", {
        type: "line",
        data: dataTimeChart,
        options: {
            responsive: true,
            legend: {
                display: false
            },
            title: {
                display: true,
                text: "Bulan November"
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        display: true,
                        color: "rgba(89, 89, 109, 1)",
                        borderDash: [5],
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 50,
                        max: 250
                    },
                }],
                xAxes: [{
                    gridLines: {
                        display: false,
                        color: "grey",
                    },
                }],
                x: {
                    border: {
                        display: true
                    },
                    grid: {
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: true,
                    }
                },
                y: {
                    border: {
                        display: false
                    },
                },
            }
        }
    });

    // user chart
    let userBorderColor = (localStorage.getItem('theme') == 'light' ? 'white' : '#1f2937');
    let mahasiswaBackgroundColor = (localStorage.getItem('theme') == 'light' ? '#e5e7eb' : 'white');
    let dosenBackgroundColor = (localStorage.getItem('theme') == 'light' ? '#e5e7eb' : 'white');


    const dataMahasiswa = [300, '#0088ED', "#6AB0E4"];
    const dataDosen = [50, '#E14942', "#E28F8B"];

    const dataUser = {
        labels: [
            'Mahasiswa',
            'Dosen',
        ],
        datasets: [{
            label: 'User',
            data: [dataMahasiswa[0], dataDosen[0]],
            backgroundColor: [
                dataMahasiswa[1],
                dataDosen[1]
            ],
            hoverBackgroundColor: [
                dataMahasiswa[2],
                dataDosen[2]
            ],
            hoverBorderWidth: 2,
            borderColor: userBorderColor,
            borderWidth: 12,
        }]
    };

    const userChart = new Chart("userChart", {
        type: 'doughnut',
        data: dataUser,
        options: {
            legend: {
                display: false,
            },
            cutoutPercentage: 50
        },
    })



    const dataDosenChart = {
        labels: ['undefined', 'Dosen'],
        datasets: [{
            data: [dataMahasiswa[0], dataDosen[0]],
            backgroundColor: [
                dosenBackgroundColor,
                dataDosen[1]
            ],
            borderWidth: 0,
            weight: 1,
        }]
    }

    const dosenChart = new Chart("dosenChart", {
        type: 'doughnut',
        data: dataDosenChart,
        options: {
            legend: {
                display: false,
            },
            cutoutPercentage: 80
        },
    })

    const dataMahasiswaChart = {
        labels: ['Mahasiswa', 'undefined'],
        datasets: [{
            data: [dataMahasiswa[0], dataDosen[0]],
            backgroundColor: [
                dataMahasiswa[1],
                mahasiswaBackgroundColor
            ],
            borderWidth: 0,
            weight: 1,
        }]
    }

    const mahasiswaChart = new Chart("mahasiswaChart", {
        type: 'doughnut',
        data: dataMahasiswaChart,
        options: {
            legend: {
                display: false,
            },
            cutoutPercentage: 80
        },
    });

    window.addEventListener('click', (e) => {
        if (e.target == switchToggle || e.target == buttonToggle || e.target == switchToggle.children[0]) {
            userBorderColor = (localStorage.getItem('theme') == 'light' ? 'white' : '#1f2937')
            userChart.data.datasets.forEach((dataset) => {
                dataset.borderColor = userBorderColor;
            })
            userChart.update();

            dosenBackgroundColor = (localStorage.getItem('theme') == 'light' ? '#e5e7eb' : 'white')
            dosenChart.data.datasets.forEach((dataset) => {
                dataset.backgroundColor = [
                    dosenBackgroundColor,
                    dataDosen[1]
                ];
            })
            dosenChart.update();

            mahasiswaBackgroundColor = (localStorage.getItem('theme') == 'light' ? '#e5e7eb' : 'white');
            mahasiswaChart.data.datasets.forEach((dataset) => {
                dataset.backgroundColor = [
                    dataMahasiswa[1],
                    mahasiswaBackgroundColor
                ];
            })
            mahasiswaChart.update();
        }
    })
</script>
<script>
    //calendar
    const calendarHead = document.querySelector("#calendarHead");
    const days = document.querySelector("#days");
    const buttonCalendar = document.querySelectorAll(".button-calendar");

    let date = new Date();
    let currYear = date.getFullYear();
    let currMonth = date.getMonth();

    const month = [
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember",
    ];

    const renderCalendar = () => {
        let counter = 0;
        let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(); // getting last date of month
        let lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate();
        let lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay();
        let lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of month
        let daysDate = "";

        for (let i = firstDayofMonth; i > 0; i--) {
            counter++;

            if (counter % 7 == 1) {
                daysDate += `   <tr>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-gray-200 dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${lastDateofLastMonth - i + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
            } else if (counter % 7 == 0) {
                daysDate += `       <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-gray-200 dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${lastDateofLastMonth - i + 1}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
            } else {
                daysDate += `       <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-gray-200 dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${lastDateofLastMonth - i + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
            }
        }

        for (let i = 1; i <= lastDateofMonth; i++) {
            counter++;

            if (i === date.getDate() && currMonth === date.getMonth()) {
                daysDate += `       <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-gray-200 dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-[#0088ED]">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
            } else if (counter % 7 == 1) {
                daysDate += `   <tr>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-gray-200 dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
            } else if (counter % 7 == 0) {
                daysDate += `       <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-gray-200 dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
            } else {
                daysDate += `       <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-gray-200 dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
            }
        }

        for (let i = lastDayofMonth; i < 6; i++) {
            counter++;

            if (counter % 7 == 1) {
                daysDate += `   <tr>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-gray-200 dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
            } else if (counter % 7 == 0) {
                daysDate += `       <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-gray-200 dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
            } else {
                daysDate += `       <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-gray-200 dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
            }
        }

        calendarHead.innerHTML = `${month[currMonth]} ${currYear}`;

        days.innerHTML = daysDate;
    }

    renderCalendar();

    buttonCalendar.forEach(btn => {
        btn.addEventListener("click", () => {
            currMonth = btn.id === "prev" ? currMonth - 1 : currMonth + 1;

            if (currMonth > 11) {
                currMonth = 0;
                currYear++;
            } else if (currMonth < 0) {
                currMonth = 11;
                currYear--;
            }

            renderCalendar();
        })
    })
</script>
</body>

</html>