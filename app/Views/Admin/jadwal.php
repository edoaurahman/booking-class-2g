<div class="bg-gray-100 dark:bg-dark_grey1 min-h-[100vh] w-full" x-data="tableData">
    <div class="p-4  ml-[77px] lg:ml-64">
        <div class="p-4 mt-14">

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
                        <input type="search" @input.debounce.750="searchJadwal()" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                    </div>
                </div>

                <!-- Button add ruang -->
                <a class="px-4 py-2 bg-bingu rounded-lg cursor-pointer shadow-lg text-white hover:bg-bingu_hover" data-modal-target="add-jadwal-modal" data-modal-toggle="add-jadwal-modal">
                    Add Jadwal
                </a>
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
                                                <input type="number" id="jam_mulai" oninput="changeValueJamMulai(0)" min="1" max="11" class="text-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="1" required>
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <label for="jam_selesai" class="text-center block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Selesai</label>
                                            <div class="relative flex items-center px-3">
                                                <input type="number" id="jam_selesai" oninput="changeValueJamSelesai(0)" min="1" max="11" class="text-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="1" required>
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


            <!-- table -->
            <section id="jadwal" class="shadow-lg sm:rounded-lg">
                <div x-init="$nextTick(() => {paggination(1) })">
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
                                        <td class="px-6 py-4 relative" x-data="{ 'showModal': false }" @keydown.escape="showModal = false">
                                            <i class="fa-solid fa-ellipsis fa-lg cursor-pointer text-black dark:text-white"></i>
                                            <div class="hidden absolute -left-[80px] top-0 text-left w-[100px] bg-[#00487E] dark:bg-gray-600 gap text-white dark:text-slate-300 font-medium text-md rounded-md overflow-hidden">
                                                <!-- Trigger for Modal -->
                                                <button type="button" @click="showModal = true" class="edit-modal w-full py-2 px-4 hover:bg-[#003B67] dark:hover:bg-gray-400 hover:text-white">Edit</button>

                                                <a :href="'/admin/jadwal/delete/' + item.id_jadwal" class="delete-modal">
                                                    <div class="py-2 px-4 hover:bg-[#003B67] dark:hover:bg-gray-400 hover:text-white text-center">Delete</div>
                                                </a>
                                            </div>

                                            <!-- Modal -->
                                            <div class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50" x-show="showModal">
                                                <!-- Modal inner -->
                                                <div class="max-w-3xl px-4 py-2 mx-auto text-left bg-white rounded shadow-lg dark:bg-gray-700" @click.away="showModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                                    <!-- Title / Close-->
                                                    <div class="flex items-center justify-between p-3 border-b rounded-t dark:border-gray-600 border-b-black">
                                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                            Edit Data Jadwal
                                                        </h3>
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="showModal = false">
                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <!-- content -->
                                                    <div class="min-h-[100px] min-w-[300px] pt-4 max-h-[80vh] overflow-y-auto text-gray-500 dark:text-gray-300">
                                                        <form class="p-4 md:p-5" method="POST" action="/admin/jadwal/edit">
                                                            <input type="hidden" name="id_jadwal" :value="item.id_jadwal">
                                                            <div class="grid gap-4 mb-4 grid-cols-2">
                                                                <div class="col-span-1">
                                                                    <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                                                                    <input id="kelas" list="listKelas" name="kelas" :value="item.id_kelas" placeholder="cth: TI-2G" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                    <datalist id="listKelas">
                                                                        <?php foreach ($listKelas as $item) : ?>
                                                                            <option value="<?= $item['id_kelas'] ?>"><?= $item['nama_kelas'] ?></option>
                                                                        <?php endforeach ?>
                                                                    </datalist>
                                                                </div>
                                                                <div class="col-span-1">
                                                                    <label for="matakuliah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mata Kuliah</label>
                                                                    <input id="matakuliah" list="listMK" name="matakuliah" :value="item.id_matkul" placeholder="cth: Dasar Pemrograman Web" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                    <datalist id="listMK">
                                                                        <?php foreach ($listMK as $item) : ?>
                                                                            <option value="<?= $item['id_matkul'] ?>"><?= $item['nama_matkul'] ?></option>
                                                                        <?php endforeach ?>
                                                                    </datalist>
                                                                </div>
                                                                <div class="col-span-1">
                                                                    <label for="dosen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosen</label>
                                                                    <input id="dosen" list="listDosen" name="dosen" :value="item.id_dosen" placeholder="Pilih Dosen ..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                    <datalist id="listDosen">
                                                                        <?php foreach ($listDosen as $item) : ?>
                                                                            <option value="<?= $item['nip'] ?>"><?= $item['nama'] ?></option>
                                                                        <?php endforeach ?>
                                                                    </datalist>
                                                                </div>
                                                                <div class="col-span-1">
                                                                    <label for="ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ruang</label>
                                                                    <input id="ruang" list="listRuang" name="ruang" :value="item.id_ruang" placeholder="Pilih Ruang ..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                    <datalist id="listRuang">
                                                                        <?php foreach ($listRuang as $item) : ?>
                                                                            <option value="<?= $item['id_ruang'] ?>"><?= $item['nama_ruang'] ?></option>
                                                                        <?php endforeach ?>
                                                                    </datalist>
                                                                </div>
                                                                <div class="col-span-1">
                                                                    <label for="hari" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hari</label>
                                                                    <input id="hari" list="listHari" name="hari" :value="item.id_hari" placeholder="Pilih Hari ..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
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
                                                                                <input type="number" id="jam_mulai" :oninput="'changeValueJamMulai('+(index+1)+')'" :value="item.jam_mulai_ke" min="1" max="11" class="text-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="1" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="w-full">
                                                                            <label for="jam_selesai" class="text-center block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Selesai</label>
                                                                            <div class="relative flex items-center px-3">
                                                                                <input type="number" id="jam_selesai" :oninput="'changeValueJamSelesai('+(index+1)+')'" :value="item.jam_selesai_ke" min="1" max="11" class="text-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="1" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <input type="hidden" name="jam_mulai" id="id_jam_mulai" :value="item.id_jam_mulai">
                                                            <input type="hidden" name="jam_selesai" id="id_jam_selesai" :value="item.id_jam_selesai">
                                                            <div class="flex w-full justify-end items-center">
                                                                <button type="submit" class="text-white items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-end dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                    Update
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
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
                                    <a @click="paggination(<?= $i; ?>)" id="button-pagination" href="#jadwal" class="flex items-center justify-center px-3 h-8 leading-tight border border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400  dark:hover:text-white hover:text-black"><?= $i ?></a>
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

    let input1 = document.querySelectorAll("#jam_mulai");
    let input2 = document.querySelectorAll("#jam_selesai");
    let id_jam_mulai = document.querySelectorAll("#id_jam_mulai");
    let id_jam_selesai = document.querySelectorAll("#id_jam_selesai");

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

    function changeValueJamMulai(index) {
        input1[index].value = Math.min(11, Math.max(1, parseInt(input1[index].value, 10)));

        id_jam_mulai[index].value = jam[input1[index].value - 1];
    }

    function changeValueJamSelesai(index) {
        input2[index].value = Math.min(11, Math.max(1, parseInt(input2[index].value, 10)));

        id_jam_selesai[index].value = jam[input2[index].value - 1];
    }

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

    // table & pagination
    const buttonPaggination = document.querySelectorAll('#button-pagination');

    function setActive(current_page) {
        buttonPaggination.forEach((button) => {
            if (button.innerText == current_page) {
                button.classList.add('dark:bg-bingu');
                button.classList.add('dark:text-white');
                button.classList.remove('dark:bg-gray-800');
                button.classList.add('bg-bingu');
                button.classList.add('hover:bg-bingu_hover');
                button.classList.add('dark:hover:bg-bingu_hover');
                button.classList.add('hover:text-white');
                button.classList.remove('hover:text-black');
                button.classList.remove('hover:bg-gray-200');
                button.classList.remove('dark:hover:bg-gray-700');
                button.classList.add('text-white');
                button.classList.remove('bg-white');
            } else {
                button.classList.add('dark:bg-gray-800');
                button.classList.add('bg-white');
                button.classList.add('hover:text-black');
                button.classList.remove('dark:bg-bingu');
                button.classList.remove('dark:text-white');
                button.classList.remove('bg-bingu');
                button.classList.remove('hover:bg-bingu_hover');
                button.classList.remove('dark:hover:bg-bingu_hover');
                button.classList.remove('text-white');
                button.classList.remove('hover:text-white');
                button.classList.add('hover:bg-gray-200');
                button.classList.add('dark:hover:bg-gray-700');
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
                        input1 = document.querySelectorAll("#jam_mulai");
                        input2 = document.querySelectorAll("#jam_selesai");
                        id_jam_mulai = document.querySelectorAll("#id_jam_mulai");
                        id_jam_selesai = document.querySelectorAll("#id_jam_selesai");
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
            },
            async searchJadwal() {
                const keyword = document.querySelector("#table-search").value;
                const formData = new FormData();
                formData.append("keyword", keyword);
                const response = await fetch('/api/admin/jadwal/search', {
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