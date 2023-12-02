<div class="p-4  ml-[77px] lg:ml-64 bg-white dark:bg-[#171622]">
    <div class="p-4 mt-14">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
            <div class="h-[120px] rounded-xl bg-gradient-to-r from-[#4ada94] to-[#55f498] flex flex-wrap justify-center items-center">
                <div class="w-full flex justify-between px-10 py-4 items-center gap-5">
                    <div class="text-left block text-white">
                        <h1 class="text-4xl font-semibold mb-2">17</h1>
                        <div class="text-md font-medium">Ruang Tersedia</div>
                    </div>
                    <img src="assets/img/enter.png" alt="" class="h-12 w-12">
                </div>
            </div>
            <div class="h-[120px] rounded-xl bg-gradient-to-r from-[#febf6b] to-[#ffe284] flex flex-wrap justify-center items-center">
                <div class="w-full flex justify-between px-10 py-4 items-center gap-5">
                    <div class="text-left block text-white">
                        <h1 class="text-4xl font-semibold mb-2">25</h1>
                        <div class="text-md font-medium">Booking</div>
                    </div>
                    <img src="assets/img/enter.png" alt="" class="h-12 w-12">
                </div>
            </div>
            <div class="h-[120px] rounded-xl bg-gradient-to-r from-[#ff725b] to-[#ffd082] flex flex-wrap justify-center items-center">
                <div class="w-full flex justify-between px-10 py-4 items-center gap-5">
                    <div class="text-left block text-white">
                        <h1 class="text-4xl font-semibold mb-2">25</h1>
                        <div class="text-md font-medium">Ruang Terpakai</div>
                    </div>
                    <img src="assets/img/enter.png" alt="" class="h-12 w-12">
                </div>
            </div>
            <div class="h-[120px] rounded-xl bg-gradient-to-r from-[#59bcff] to-[#59d1ff] flex flex-wrap justify-center items-center">
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
            <div class="lg:col-span-2 flex flex-col h-full rounded bg-gray-50 dark:bg-gray-800 px-3">
                <div class="flex w-full justify-between">
                    <div class="p-5 flex flex-col gap-1 text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        <div class="text-xl font-semibold ">Blablabla Statistic</div>
                        <div class="text-xs font-normal text-slate-400">Perbandingan jam yang terpakai dan tidak terpakai pada semua ruang</div>
                    </div>
                    <div class="p-5 flex gap-8 items-center">
                        <div class="flex gap-2">
                            <div class="text-xl font-semibold text-white">250</div>
                            <div class="text-xs font-normal text-slate-400">Jam terpakai</div>
                        </div>
                        <div class="flex gap-2">
                            <div class="text-xl font-semibold text-white">50</div>
                            <div class="text-xs font-normal text-slate-400">Jam kosong</div>
                        </div>
                    </div>
                </div>
                <div class="p-4 w-full">
                    <canvas id="timeChart" style="width:100%"></canvas>
                </div>
            </div>
            <div class="max-h-[503px] flex flex-col h-full rounded bg-gray-50 dark:bg-gray-800">
                <div class="p-5 text-xl font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    Top Rooms Booked
                </div>
                <div class="table">
                    <table class="w-full text-center text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
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
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
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
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
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
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
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
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
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
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
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
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
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
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
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
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
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

        <div class="mt-4 mb-4 grid grid-rows-2 grid-cols-2 lg:grid-cols-3 lg:grid-rows-3 gap-4">
            <div class="flex flex-col justify-between rounded col-start-1 lg:row-span-2 bg-gray-50 h-full dark:bg-gray-800 p-2">
                <div class="w-full p-3 text-2xl font-semibold text-center text-gray-900 dark:text-white">
                    User Percentage
                </div>
                <div class="mx-auto lg:w-[330px] lg:h-[330px] w-[200px] h-[200px]">
                    <canvas id="userChart" style="width:100%;height:100%;"></canvas>
                </div>

                <div class="flex w-full justify-center items-center text-white gap-6 lg:pb-6">
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
            <div class="p-2 flex flex-col rounded col-start-2 row-start-1 lg:row-start-3 lg:col-start-1 bg-gray-50 h-full dark:bg-gray-800">
                <div class="p-3 text-xl font-semibold text-center md:text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    Perbandingan Jumlah Kelas
                </div>
                <div class="p-5 flex flex-col gap-6">
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
                <div class="flex flex-wrap justify-center lg:flex-nowrap lg:justify-between p-4 gap-7 lg:gap-3">
                    <div class="flex flex-col text-center">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 rounded-full bg-gradient-to-r from-[#800f2f] to-[#ff758f]"></div>
                            <div class="text-xs font-normal text-slate-400">Ruang Teori</div>
                        </div>
                        <div class="text-2xl font-semibold text-white">12</div>
                    </div>
                    <div class="flex flex-col text-center">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 rounded-full bg-gradient-to-r from-[#0D41E1] to-[#07C8F9]"></div>
                            <div class="text-xs font-normal text-slate-400">Ruang Praktikum</div>
                        </div>
                        <div class="text-2xl font-semibold text-white">12</div>
                    </div>
                    <div class="flex flex-col text-center">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 rounded-full bg-gradient-to-r from-[#007f5f] to-[#aacc00]"></div>
                            <div class="text-xs font-normal text-slate-400">Ruang Gabungan</div>
                        </div>
                        <div class="text-2xl font-semibold text-white">6</div>
                    </div>
                </div>
            </div>

            <!-- calendar  -->

            <div class="flex lg:flex-col rounded-md col-span-2 lg:row-span-3 lg:col-start-2 bg-gray-50 dark:bg-gray-800 overflow-hidden">
                <div class="basis-1/2 p-8 dark:bg-gray-800 bg-white flex flex-col justify-between gap-12">
                    <div class="flex items-center justify-around">
                        <button aria-label="calendar backward" class="focus:text-gray-400 hover:text-gray-400 text-gray-800 dark:text-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="15 6 9 12 15 18" />
                            </svg>
                        </button>
                        <span tabindex="0" class="focus:outline-none  text-base font-bold dark:text-gray-100 text-gray-800">October 2020</span>
                        <button aria-label="calendar forward" class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800 dark:text-gray-100">
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
                                    <th>
                                        <div class="w-full flex justify-center">
                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Mo</p>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="w-full flex justify-center">
                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Tu</p>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="w-full flex justify-center">
                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">We</p>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="w-full flex justify-center">
                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Th</p>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="w-full flex justify-center">
                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Fr</p>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="w-full flex justify-center">
                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Sa</p>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="w-full flex justify-center">
                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Su</p>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pt-6">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">29</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="pt-6">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">30</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="pt-6">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">31</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="pt-6">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">1</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="pt-6">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">2</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="pt-6">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">3</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="pt-6">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">4</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">5</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">6</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">7</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-2 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-[#0088ED] text-base w-8 h-8 flex items-center justify-center font-medium text-white rounded-full">8</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">9</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">10</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">11</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">12</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">13</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">14</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">15</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">16</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">17</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">18</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">19</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">20</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">21</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">22</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">23</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">24</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">25</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">26</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">27</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">28</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full bg-[#0088ED]">29</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">30</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="basis-1/2 p-4 dark:bg-gray-700 bg-gray-50 rounded-b flex flex-col gap-4 h-[360px]">
                    <div class="text-xl lg:text-2xl font-semibold text-white">Newest Booking</div>
                    <div class="flex flex-col lg:flex-row lg:flex-wrap gap-4 lg:justify-between overflow-y-auto">
                        <div class="flex border border-gray-400 p-4 rounded-md gap-4 items-start lg:w-[48%]">
                            <img src="/assets/img/foto-profil.png" alt="img-user" class="h-[45px] rounded-full">
                            <div class="flex flex-col text-left text-white w-full gap-1">
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
                            <div class="flex flex-col text-left text-white w-full gap-1">
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
                            <div class="flex flex-col text-left text-white w-full gap-1">
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
                            <div class="flex flex-col text-left text-white w-full gap-1">
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
                            <div class="flex flex-col text-left text-white w-full gap-1">
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
                            <div class="flex flex-col text-left text-white w-full gap-1">
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
                            <div class="flex flex-col text-left text-white w-full gap-1">
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
                            <div class="flex flex-col text-left text-white w-full gap-1">
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
            // hoverOffset: 20,
            borderColor: "#1f2937",
            borderWidth: 12,
        }]
    };

    new Chart("userChart", {
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
                "white",
                dataDosen[1]
            ],
            borderColor: "#1f2937",
            borderWidth: 0,
            weight: 1,
        }]
    }

    new Chart("dosenChart", {
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
                "white"
            ],
            borderColor: "#1f2937",
            borderWidth: 0,
            weight: 1,
        }]
    }

    new Chart("mahasiswaChart", {
        type: 'doughnut',
        data: dataMahasiswaChart,
        options: {
            legend: {
                display: false,
            },
            cutoutPercentage: 80
        },
    })
</script>
</body>

</html>