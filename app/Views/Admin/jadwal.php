<div class="bg-gray-100 dark:bg-dark_grey1 min-h-[100vh] w-full">
    <div class="p-4  ml-[77px] lg:ml-64">
        <div class="p-4 mt-14">

            <div class="px-4 py-2 mb-5 rounded-md shadow-md flex items-center gap-2 bg-white font-normal text-sm dark:bg-gray-700 text-gray-500 dark:text-gray-400">
                <i class="fa-solid fa-calendar-days fa-sm dark:text-gray-400 group-hover:text-white"></i>
                Admin / Jadwal
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

                <!-- Button add ruang -->
                <a class="px-4 py-2 bg-bingu rounded-lg cursor-pointer shadow-lg text-white hover:bg-bingu_hover" data-modal-target="add-jadwal-modal" data-modal-toggle="add-jadwal-modal">
                    Add Jadwal
                </a>
            </div>


            <!-- table -->
            <section id="jadwal" class="shadow-lg sm:rounded-lg">
                <div x-data="tableData" x-init="$nextTick(() => {paggination(1) })">
                    <div class="overflow-x-auto rounded-md overflow-hidden">
                        <table class="w-[1000px] lg:w-full text-sm text-left text-gray-500 dark:text-gray-400 table-fixed relative" id="table">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="w-[3%] px-4 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kelas
                                    </th>
                                    <th scope="col" class="w-[18%] px-6 py-3">
                                        Mata Kuliah
                                    </th>
                                    <th scope="col" class="w-[20%] px-6 py-3">
                                        Dosen
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Ruang
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Hari
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jam Mulai
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jam Selesai
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <template x-for="(item,index) in tableData">
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td x-text="index+1" class="px-4 py-3">
                                        </td>
                                        <th x-text="item.kelas" class="px-6 py-4">
                                        </th>
                                        <td x-text="item.matkul" class="px-6 py-4 ">
                                        </td>
                                        <td x-text="item.dosen" class="px-6 py-4">
                                        </td>
                                        <td x-text="item.ruang" class="px-6 py-4">
                                        </td>
                                        <td x-text="item.hari" class="px-6 py-4">
                                        </td>
                                        <td x-text="item.jam_mulai" class="px-6 py-4">
                                        </td>
                                        <td x-text="item.jam_selesai" class="px-6 py-4">
                                        </td>
                                        <td class="px-6 py-4 relative">
                                            <i class="fa-solid fa-ellipsis fa-lg cursor-pointer text-black dark:text-white"></i>

                                            <div class="hidden absolute -left-[80px] top-0 text-left w-[100px] bg-[#00487E] dark:bg-gray-600 gap text-white dark:text-slate-300 font-medium text-md rounded-md overflow-hidden">
                                                <a href="/?aksi=edit&id=<?= $id; ?>" class="edit-modal">
                                                    <div class="py-2 px-4 hover:bg-[#003B67] dark:hover:bg-gray-400 hover:text-white edit-modal">Edit</div>
                                                </a>
                                                <a href="/?aksi=delete&id=<?= $id; ?>" class="delete-modal">
                                                    <div class="py-2 px-4 hover:bg-[#003B67] dark:hover:bg-gray-400 hover:text-white delete-modal">Delete</div>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                    <nav class="w-full flex items-center justify-end py-4 px-3" aria-label="Table navigation">
                        <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                            <li>
                                <a href="#jadwal" @click="prev()" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-200 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                            </li>
                            <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
                                <li>
                                    <a @click="paggination(<?= $i; ?>)" id="button-pagination" href="#jadwal" class="flex items-center justify-center px-3 h-8 leading-tight border border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-white hover:text-black"><?= $i ?></a>
                                </li>
                            <?php endfor; ?>
                            <li>
                                <a href="#jadwal" @click="next()" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-200 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- Filter -->
<div class="fixed z-50 -right-[320px] top-[120px] min-h-[450px] bg-navy_blue dark:bg-gray-700 w-80 p-4 transition-all duration-1000 text-black dark:text-white" id="filter">
    <div class="flex flex-col bg-white dark:bg-gray-800 h-full w-full ">
        <div class="flex justify-between items-center p-4 border-b border-black dark:border-white">
            <div class="text-md font-semibold ">Filters</div>
            <div class="cursor-pointer" id="exitFilter">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
        <form action="" class="divide-y divide-black dark:divide-white divide-dashed w-full px-4">
            <div class="flex w-full flex-col justify-start gap-2 items-center p-4">
                <div class="font-medium">Jenis Ruang</div>
                <div class="w-full">
                    <input id="jenis-ruang-1" type="checkbox" value="" name="jenis-ruang-1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-200 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="jenis-ruang-1" class="text-sm font-normal text-gray-900 dark:text-gray-300">Ruang Teori</label>
                </div>
                <div class="w-full">
                    <input id="jenis-ruang-2" type="checkbox" value="" name="jenis-ruang-2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="jenis-ruang-2" class="text-sm font-normal text-gray-900 dark:text-gray-300">Ruang Praktikum</label>
                </div>
                <div class="w-full">
                    <input id="jenis-ruang-3" checked type="checkbox" value="" name="jenis-ruang-3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="jenis-ruang-3" class="text-sm font-normal text-gray-900 dark:text-gray-300">Ruang Gabungan</label>
                </div>
            </div>
            <div class="flex w-full flex-col justify-start gap-2 items-center p-4">
                <div class="font-medium">Tipe Lantai</div>
                <div class="w-full">
                    <input id="lantai-5" type="checkbox" value="" name="lantai-5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-200 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="lantai-5" class="text-sm font-normal text-gray-900 dark:text-gray-300">Lantai 5</label>
                </div>
                <div class="w-full">
                    <input id="lantai-6" type="checkbox" value="" name="lantai-6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="lantai-6" class="text-sm font-normal text-gray-900 dark:text-gray-300">Lantai 6</label>
                </div>
                <div class="w-full">
                    <input checked id="lantai-7" type="checkbox" value="" name="lantai-7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="lantai-7" class="text-sm font-normal text-gray-900 dark:text-gray-300">Lantai 7</label>
                </div>
                <div class="w-full">
                    <input id="lantai-8" type="checkbox" value="" name="lantai-8" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="lantai-8" class="text-sm font-normal text-gray-900 dark:text-gray-300">Lantai 8</label>
                </div>
            </div>

            <div class="w-full flex justify-end items-center py-2 px-4">
                <input type="submit" value="Apply" class="px-4 py-2 text-white text-sm font-medium rounded-lg bg-indigo-600 hover:bg-bingu_hover">
            </div>
        </form>
    </div>
</div>

<div class="fixed z-50 right-0 top-[45%] w-10 h-10 p-2 bg-biru text-center rounded-l-md cursor-pointer hover:bg-[#005fa8]" id="buttonFilter">
    <i class="fa-solid fa-filter fa-flip" style="color: #ffffff;"></i>
</div>

<!-- Main modal -->
<div id="add-jadwal-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full inset-0 max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Add New Jadwal
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="add-jadwal-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" method="POST" action="">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-1">
                        <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                        <input id="kelas" list="listKelas" name="kelas" placeholder="cth: TI-2G" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <datalist id="listKelas">
                            <?php foreach ($listKelas as $item) : ?>
                                <option value="<?= $item['id_kelas'] ?>"><?= $item['nama_kelas'] ?></option>
                            <?php endforeach ?>
                        </datalist>
                    </div>
                    <div class="col-span-1">
                        <label for="matakuliah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mata Kuliah</label>
                        <input id="matakuliah" list="listMK" name="matakuliah" placeholder="cth: Dasar Pemrograman Web" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <datalist id="listMK">
                            <?php foreach ($listMK as $item) : ?>
                                <option value="<?= $item['id_matkul'] ?>"><?= $item['nama_matkul'] ?></option>
                            <?php endforeach ?>
                        </datalist>
                    </div>
                    <div class="col-span-1">
                        <label for="dosen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosen</label>
                        <input id="dosen" list="listDosen" name="dosen" placeholder="Pilih Dosen ..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <datalist id="listDosen">
                            <?php foreach ($listDosen as $item) : ?>
                                <option value="<?= $item['nip'] ?>"><?= $item['nama'] ?></option>
                            <?php endforeach ?>
                        </datalist>
                    </div>
                    <div class="col-span-1">
                        <label for="ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ruang</label>
                        <input id="ruang" list="listRuang" name="ruang" placeholder="Pilih Ruang ..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <datalist id="listRuang">
                            <?php foreach ($listRuang as $item) : ?>
                                <option value="<?= $item['id_ruang'] ?>"><?= $item['nama_ruang'] ?></option>
                            <?php endforeach ?>
                        </datalist>
                    </div>
                    <div class="col-span-1">
                        <label for="hari" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hari</label>
                        <input id="hari" list="listHari" name="hari" placeholder="Pilih Hari ..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <datalist id="listHari">
                            <?php foreach ($listHari as $item) : ?>
                                <option value="<?= $item['id_hari'] ?>"><?= $item['nama_hari'] ?></option>
                            <?php endforeach ?>
                        </datalist>
                    </div>
                    <div class="col-span-1">
                        <div class="flex w-full gap-2">
                            <div class="w-full">
                                <label for="jam_mulai" class="text-center block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Mulai</label>
                                <div class="relative flex items-center px-3">
                                    <input type="number" id="jam_mulai" oninput="changeValueJamMulai()" min="1" max="11" class="text-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="1" required>
                                </div>
                            </div>
                            <div class="w-full">
                                <label for="jam_selesai" class="text-center block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Selesai</label>
                                <div class="relative flex items-center px-3">
                                    <input type="number" id="jam_selesai" oninput="changeValueJamSelesai()" min="1" max="11" class="text-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="1" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="jam_mulai" id="id_jam_mulai">
                <input type="hidden" name="jam_selesai" id="id_jam_selesai">
                <div class="flex w-full justify-end items-center">
                    <button type="submit" class="text-white items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-end dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Add
                    </button>
                </div>
            </form>
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
        input1.value = Math.min(11, Math.max(1, parseInt(input1.value, 10)));
        let inputValue = input1.value;

        // if ((inputValue + 1 > parseInt(input2.value)) && input2.value != 11) {
        //     input2.innerHTML = Math.min(inputValue + 1, 11);
        //     changeValueJamSelesai();
        // }

        id_jam_mulai.value = jam[inputValue - 1];
    }

    const changeValueJamSelesai = () => {
        input2.value = Math.min(11, Math.max(1, parseInt(input2.value, 10)));
        let inputValue = input2.value;

        // if ((inputValue == parseInt(input1.value)) && input1.value != 1) {
        //     input1.innerHTML = Math.max(parseInt(input1.value) - 1, 1);
        //     changeValueJamMulai();
        // }


        id_jam_selesai.value = jam[inputValue - 1];
    }
</script>
<script>
    // action modal

    let buttonAction = document.querySelectorAll("i");

    document.querySelector("#jadwal").addEventListener("click", (e) => {
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

    // filter

    const exitFilter = document.querySelector("#exitFilter");
    const filter = document.querySelector("#filter");
    const buttonFilter = document.querySelector("#buttonFilter");

    exitFilter.addEventListener("click", () => {
        filter.classList.add("-right-[320px]");
        filter.classList.remove("right-0");
        buttonFilter.classList.remove("hidden")
    })

    buttonFilter.addEventListener("click", () => {
        buttonFilter.classList.add("hidden")
        filter.classList.remove("-right-[320px]");
        filter.classList.add("right-0");
    })

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
                fetch('/api/jadwal/' + page)
                    .then(response => response.json())
                    .then(data => {
                        this.tableData = data.jmlJadwal;
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
                fetch('/api/jadwal/' + (parseInt(this.current_page) + 1))
                    .then(response => response.json())
                    .then(data => {
                        this.tableData = data.jmlJadwal;
                        this.current_page = data.currentPage;
                        setActive(this.current_page);
                    });
            },
            prev() {
                if (this.current_page == 1) {
                    return;
                }
                fetch('/api/jadwal/' + (parseInt(this.current_page) - 1))
                    .then(response => response.json())
                    .then(data => {
                        this.tableData = data.jmlJadwal;
                        this.current_page = data.currentPage;
                        setActive(this.current_page);
                    });
            }
        }))
    })
</script>
</body>

</html>