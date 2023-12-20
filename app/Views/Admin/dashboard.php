<div x-data="dataUseCalendar" class="p-4  ml-[77px] lg:ml-64 bg-gray-100 dark:bg-[#171622]">
    <div class="p-4 mt-14">
        <h1 class="text-xl font-semibold mb-2 text-black dark:text-white">Data Jam Hari Ini</h1>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
            <div
                class="h-[120px] rounded-xl shadow-lg bg-gradient-to-r from-[#4ada94] to-[#55f498] flex flex-wrap justify-center items-center">
                <div class="w-full flex justify-between px-10 py-4 items-center gap-5">
                    <div class="text-left block text-white">
                        <h1 class="text-4xl font-semibold mb-2">
                            <?= $data['totAvailable'] ?>
                        </h1>
                        <div class="text-md font-medium">Total Jam Kosong</div>
                    </div>
                    <img src="assets/img/enter.png" alt="" class="h-12 w-12">
                </div>
            </div>
            <div
                class="h-[120px] rounded-xl shadow-lg bg-gradient-to-r from-[#febf6b] to-[#ffe284] flex flex-wrap justify-center items-center">
                <div class="w-full flex justify-between px-10 py-4 items-center gap-5">
                    <div class="text-left block text-white">
                        <h1 class="text-4xl font-semibold mb-2">
                            <?= $data['totUsed'] ?>
                        </h1>
                        <div class="text-md font-medium">Total Jam Dipinjam</div>
                    </div>
                    <img src="assets/img/enter.png" alt="" class="h-12 w-12">
                </div>
            </div>
            <div
                class="h-[120px] rounded-xl shadow-lg bg-gradient-to-r from-[#ff725b] to-[#ffd082] flex flex-wrap justify-center items-center">
                <div class="w-full flex justify-between px-10 py-4 items-center gap-5">
                    <div class="text-left block text-white">
                        <h1 class="text-4xl font-semibold mb-2">
                            <?= $data['totDone'] ?>
                        </h1>
                        <div class="text-md font-medium">Total Jam Terpakai</div>
                    </div>
                    <img src="assets/img/enter.png" alt="" class="h-12 w-12">
                </div>
            </div>
            <div
                class="h-[120px] rounded-xl shadow-lg bg-gradient-to-r from-[#59bcff] to-[#59d1ff] flex flex-wrap justify-center items-center">
                <div class="w-full flex justify-between px-10 py-4 items-center gap-5">
                    <div class="text-left block text-white">
                        <h1 class="text-4xl font-semibold mb-2">
                            <?= $data['totUnavailable'] ?>
                        </h1>
                        <div class="text-md font-medium">Total Jam Tidak Kosong</div>
                    </div>
                    <img src="assets/img/enter.png" alt="" class="h-12 w-12">
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 mb-4 mt-9">
            <div class=" lg:col-span-3 max-h-[503px] flex flex-col h-full shadow-lg rounded bg-gray-50
                dark:bg-gray-800">
                <div class="flex w-[100%] justify-between">
                    <div class="flex flex-col w-[40%]">
                        <h1 class="p-5 text-xl font-semibold text-left text-gray-900 dark:text-white">Jadwal Utama Kelas
                        </h1>
                    </div>
                </div>
                <div class="table">
                    <table
                        class="w-full text-center text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                        <thead class="sticky ">
                            <tr>
                                <th scope="col" class="w-[30%] px-6 py-2">
                                    Mata Kuliah
                                </th>
                                <th scope="col" class="w-[10%] px-6 py-2">
                                    Kelas
                                </th>
                                <th scope="col" class="w-[30%] px-6 py-2">
                                    Dosen
                                </th>
                                <th scope="col" class="w-[10%] px-6 py-2">
                                    Ruang
                                </th>
                                <th scope="col" class="w-[10%] px-6 py-2">
                                    Jam Mulai
                                </th>
                                <th scope="col" class="w-[10%] px-6 py-2">
                                    Jam Selesai
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="overflow-y-auto scr-gone">
                    <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                        <tbody>
                            <template x-for="item in tableData1">
                                <tr class=" border-b dark:border-gray-700">
                                    <td class="w-[30%] text-left px-6 py-3" x-text="item.matkul"></td>
                                    <td class="w-[10%] text-center px-6 py-3" x-text="item.kelas"></td>
                                    <td class="w-[30%] text-left px-6 py-3" x-text="item.dosen"></td>
                                    <td class="w-[10%] text-center px-6 py-3" x-text="item.ruang"></td>
                                    <td class="w-[10%] text-center px-6 py-3" x-text="item.jam_mulai"></td>
                                    <td class="w-[10%] text-center px-6 py-3" x-text="item.jam_selesai"></td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>

            </div>
            <div x-data="tableData2" x-init="dataFetchForTopBooked()"
                class="max-h-[503px] flex flex-col h-full rounded bg-gray-50 dark:bg-gray-800 shadow-lg">
                <div class="p-5 text-xl font-semibold text-left text-gray-900 dark:text-white">
                    Top Booked Room
                </div>
                <div class="table">
                    <table
                        class="w-full text-center text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                        <thead class="sticky ">
                            <tr>
                                <th scope="col" class="w-[20%] px-5 py-2">
                                    No
                                </th>
                                <th scope="col" class="w-[40%]px-5 py-2">
                                    Ruang
                                </th>
                                <th scope="col" class="w-[40%] px-5 py-2">
                                    Persentase
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="overflow-y-scroll scr-gone">
                    <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                        <tbody>
                            <template x-for="item in tableData2">
                                <tr class=" border-b dark:border-gray-700">
                                    <th x-text="item.nomor_urut" scope="row"
                                        class="w-[20%] px-5 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">
                                    </th>
                                    <td x-text="item.nama_ruang" class="w-[40%] px-5 py-3"></td>
                                    <td x-text="item.persentase" class="w-[40%] px-5 py-3"></td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- ucer Percentage -->
        <div class="mt-4 mb-4 grid grid-rows-2 grid-cols-2 lg:grid-cols-3 lg:grid-rows-3 gap-4 max-h-[810px]">
            <div
                class="flex flex-col justify-between rounded col-start-1 lg:row-span-2 bg-gray-50 shadow-lg h-full dark:bg-gray-800 p-2">
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
                            <div class="lg:text-5xl text-2xl font-semibold">
                                <?= $data['totalDosen'] ?>
                            </div>
                            <div class="lg:text-md text-sm font-normal text-slate-400">Dosen</div>
                        </div>
                    </div>
                    <div class="flex py-4 gap-4 items-center">
                        <div class="lg:w-[70px] w-[40px] lg:h-[70px] h-[40px]">
                            <canvas id="mahasiswaChart" style="width:100%; height:100%;"></canvas>
                        </div>
                        <div class="flex flex-col text-left">
                            <div class="lg:text-4xl text-2xl font-semibold">
                                <?= $data['totalMahasiswa'] ?>
                            </div>
                            <div class="lg:text-md text-sm font-normal text-slate-400">Mahasiswa</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- bar perbandingan jumlah kelas -->
            <div
                class="p-2 flex flex-col rounded col-start-2 row-start-1 lg:row-start-3 lg:col-start-1 bg-gray-50 shadow-lg dark:bg-gray-800 lg:max-h-[280px]">
                <div
                    class="p-3 text-xl font-semibold text-center md:text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    Perbandingan Jumlah Kelas
                </div>
                <div class="p-5 flex flex-col gap-5">
                    <div class="w-full bg-gray-200 rounded-full h-4 dark:bg-gray-700">
                        <div class="bg-gradient-to-r from-[#800f2f] to-[#ff758f] h-4 rounded-full"
                            style="width: <?= $data['persenTeori'] ?>% ">
                        </div>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4 dark:bg-gray-700">
                        <div class="bg-gradient-to-r from-[#0D41E1] to-[#07C8F9] h-4 rounded-full"
                            style="width: <?= $data['persenPraktik'] ?>%">
                        </div>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4 dark:bg-gray-700">
                        <div class="bg-gradient-to-r from-[#007f5f] to-[#aacc00] h-4 rounded-full"
                            style="width: <?= $data['persenCampuran'] ?>%">
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center lg:flex-nowrap lg:justify-between p-3 gap-7 lg:gap-2">
                    <div class="flex flex-col text-center">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 rounded-full bg-gradient-to-r from-[#800f2f] to-[#ff758f]"></div>
                            <div class="text-xs font-normal text-slate-400">Ruang Teori</div>
                        </div>
                        <div class="text-2xl font-semibold text-black dark:text-white">
                            <?= $data['totRTeori'] ?>
                        </div>
                    </div>
                    <div class="flex flex-col text-center">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 rounded-full bg-gradient-to-r from-[#0D41E1] to-[#07C8F9]"></div>
                            <div class="text-xs font-normal text-slate-400">Ruang Praktikum</div>
                        </div>
                        <div class="text-2xl font-semibold text-black dark:text-white">
                            <?= $data['totRPraktik'] ?>
                        </div>
                    </div>
                    <div class="flex flex-col text-center">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 rounded-full bg-gradient-to-r from-[#007f5f] to-[#aacc00]"></div>
                            <div class="text-xs font-normal text-slate-400">Ruang Gabungan</div>
                        </div>
                        <div class="text-2xl font-semibold text-black dark:text-white">
                            <?= $data['totRCampuran'] ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- calendar  -->

            <div class=" flex lg:flex-col rounded-md col-span-2 lg:row-span-3 lg:col-start-2 bg-gray-50 shadow-lg
                dark:bg-gray-800 overflow-hidden">
                <div class="basis-1/2 p-8 dark:bg-gray-800 bg-white flex flex-col justify-between gap-12 h-[380px]">
                    <div class="flex items-center justify-around">
                        <button id="prev" aria-label="calendar backward" @click="prev()"
                            class="focus:text-gray-400 hover:text-gray-400 text-gray-800 dark:text-gray-100 button-calendar">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="15 6 9 12 15 18" />
                            </svg>
                        </button>
                        <span tabindex="0"
                            class="focus:outline-none  text-base font-bold dark:text-gray-100 text-gray-800"
                            id="calendarHead">October 2020</span>
                        <button id="next" aria-label="calendar forward" @click="next()"
                            class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800 dark:text-gray-100 button-calendar">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler  icon-tabler-chevron-right"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                            <p
                                                class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                                Min</p>
                                        </div>
                                    </th>
                                    <th class="pb-7 lg:pb-10">
                                        <div class="w-full flex justify-center">
                                            <p
                                                class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                                Sen</p>
                                        </div>
                                    </th>
                                    <th class="pb-7 lg:pb-10">
                                        <div class="w-full flex justify-center">
                                            <p
                                                class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                                Sel</p>
                                        </div>
                                    </th>
                                    <th class="pb-7 lg:pb-10">
                                        <div class="w-full flex justify-center">
                                            <p
                                                class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                                Rab</p>
                                        </div>
                                    </th>
                                    <th class="pb-7 lg:pb-10">
                                        <div class="w-full flex justify-center">
                                            <p
                                                class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                                Kam</p>
                                        </div>
                                    </th>
                                    <th class="pb-7 lg:pb-10">
                                        <div class="w-full flex justify-center">
                                            <p
                                                class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                                Jum</p>
                                        </div>
                                    </th>
                                    <th class="pb-7 lg:pb-10">
                                        <div class="w-full flex justify-center">
                                            <p
                                                class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                                Sab</p>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="days">
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Newest Booking -->
                <div x-data="tableData3" x-init="dataFetchForNewBook()"
                    class="basis-1/2 p-4 m-1 dark:bg-gray-700 bg-gray-50 rounded-b flex flex-col gap-4 h-[380px]">
                    <div class="text-xl lg:text-2xl font-semibold text-black dark:text-white">Newest Booking</div>
                    <div class="flex flex-col lg:flex-row lg:flex-wrap gap-4 lg:justify-between overflow-y-scroll scr-gone">
                        <template x-for="item in tableData3">
                            <div class="flex border border-gray-400 p-4 rounded-md gap-4 items-start lg:w-[48%]">
                                <img src="/assets/img/foto-profil.png" alt="img-user" class="h-[45px] rounded-full">
                                <div class="flex flex-col text-left text-black dark:text-white w-full gap-1">
                                    <template x-if="item.mahasiswa">
                                        <div x-text="item.mahasiswa" class="text-sm font-semibold"></div>
                                    </template>
                                    <template x-if="!item.mahasiswa">
                                        <div x-text="item.dosen" class="text-sm font-semibold"></div>
                                    </template>
                                    <div x-text="item.tanggal_pesan" class=" text-xs font-normal"></div>
                                    <div class="flex text-slate-400 text-xs font-normal mt-2">
                                        <p x-text="item.ruang"></p>
                                        <p class="ml-auto">
                                        <p x-text=" item.jam_mulai"></p> - <p x-text=" item.jam_selesai"></p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style lang="postcss">
    .scr-gone::-webkit-scrollbar {
        width: 1px;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
    // user chart
    let userBorderColor = (localStorage.getItem('theme') == 'light' ? 'white' : '#1f2937');
    let mahasiswaBackgroundColor = (localStorage.getItem('theme') == 'light' ? '#e5e7eb' : 'white');
    let dosenBackgroundColor = (localStorage.getItem('theme') == 'light' ? '#e5e7eb' : 'white');

    const dataMahasiswa = [<?= $data['totalMahasiswa'] ?>, '#0088ED', "#6AB0E4"];
    const dataDosen = [<?= $data['totalDosen'] ?>, '#E14942', "#E28F8B"];

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
        labels: ['other', 'Dosen'],
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
        labels: ['Mahasiswa', 'other'],
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
        if (e.target == switchToggle || e.target == buttonToggle || e.target ==
            switchToggle.children[0]) {
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

            mahasiswaBackgroundColor = (localStorage.getItem('theme') == 'light' ? '#e5e7eb' :
                'white');
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
        let firstDayofMonth = new Date(currYear, currMonth, 1)
            .getDay(); // getting last date of month
        let lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate();
        let lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay();
        let lastDateofLastMonth = new Date(currYear, currMonth, 0)
            .getDate(); // getting last date of month
        let daysDate = "";

        for (let i = firstDayofMonth; i > 0; i--) {
            counter++;

            if (counter % 7 == 1) {
                daysDate += `   <tr>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-gray-200 dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${lastDateofLastMonth - i + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
            } else if (counter % 7 == 0) {
                daysDate += `       <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-gray-200 dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${lastDateofLastMonth - i + 1}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
            } else {
                daysDate += `       <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-gray-200 dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${lastDateofLastMonth - i + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
            }
        }

        for (let i = 1; i <= lastDateofMonth; i++) {
            counter++;

            if (i === date.getDate() && currMonth === date.getMonth() && currYear === date.getFullYear()) {
                daysDate += `       <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link" @click="setDay(${i})" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-gray-200 dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-[#0088ED]">${i}</button>
                                            </div>
                                        </div>
                                    </td>`
            } else if (counter % 7 == 1) {
                daysDate += `   <tr>
                                    <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link" @click="setDay(${i})" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-gray-200 dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</button>
                                            </div>
                                        </div>
                                    </td>`
            } else if (counter % 7 == 0) {
                daysDate += `       <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link" @click="setDay(${i})" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-gray-200 dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
            } else {
                daysDate += `       <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link" @click="setDay(${i})" tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-gray-200 dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</button>
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
                                                <a role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-gray-200 dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</button>
                                            </div>
                                        </div>
                                    </td>`
            } else if (counter % 7 == 0) {
                daysDate += `       <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-gray-200 dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
            } else {
                daysDate += `       <td>
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#0088ED] hover:bg-gray-200 dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</button>
                                            </div>
                                        </div>
                                    </td>`
            }
        }

        calendarHead.innerHTML = `${month[currMonth]} ${currYear}`;

        days.innerHTML = daysDate;
    }
    renderCalendar();


    document.addEventListener('alpine:init', () => {
        //When calendar change the data
        Alpine.data('dataUseCalendar', () => ({
            tableData1: [],
            dataUseCalendar: [],
            init() {
                this.dataFetchForCalendarChange()
                // this.dataFetchForSchedule()
                this.setDay(new Date().getDate());
            },
            dataFetchForCalendarChange() {
                fetch('/api/dashboard1')
                    .then(response => response.json())
                    .then(data => {
                        this.dataUseCalendar = data.topBook
                    }).catch(e => {
                        console.log(e);
                    })
            },
            prev() {
                currMonth = currMonth - 1;
                if (currMonth < 0) {
                    currMonth = 11;
                    currYear--;
                }

                renderCalendar();
            },
            next() {
                currMonth = currMonth + 1;
                if (currMonth > 11) {
                    currMonth = 0;
                    currYear++;
                }

                renderCalendar();
            },
            setDay(day) {
                // get currentMonth and current Year
                const currentMonth = new Date().getMonth();
                const currentYear = new Date().getFullYear();
                const tanggal = currentYear + '-' + (currentMonth + 1) + '-' + day;
                const d = new Date(tanggal);
                const hari = d.toLocaleString('id-ID', { weekday: 'long' });
                console.log(hari);
                const formData = new FormData();
                formData.append('hari', hari);
                fetch('/api/dashboard2', {
                    method: 'POST',
                    body: formData
                }).then(response => response.json()).then(data => {
                    this.tableData1 = data
                    console.log(data);
                })
            },
            dataFetchForSchedule() {
                fetch('/api/dashboard1')
                    .then(response => response.json())
                    .then(data => {
                        this.tableData1 = data.schedule
                    }).catch(e => {
                        console.log(e);
                    })
            }
        }))

        // data for top booked
        Alpine.data('tableData2', () => ({
            tableData2: [],
            init() {
                this.dataFetchForTopBooked
            },

            dataFetchForTopBooked() {
                fetch('/api/dashboard1')
                    .then(response => response.json())
                    .then(data => {
                        this.tableData2 = data.topBook
                    }).catch(e => {
                        console.log(e);
                    })
            }
        }))

        // data for newest book
        Alpine.data('tableData3', () => ({
            tableData3: [],
            init() {
                this.dataFetchForNewBook
            },

            dataFetchForNewBook() {
                fetch('/api/dashboard1')
                    .then(response => response.json())
                    .then(data => {
                        this.tableData3 = data.newBook
                    }).catch(e => {
                        console.log(e);
                    })
            }
        }))
    })
</script>
</body>

</html>