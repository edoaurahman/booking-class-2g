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
                        <input type="search" @input.debounce.750="searchRuang()" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                    </div>
                </div>

                <!-- Button add ruang -->
                <a class="px-4 py-2 bg-bingu rounded-lg cursor-pointer shadow-lg text-white hover:bg-bingu_hover" data-modal-target="add-ruang-modal" data-modal-toggle="add-ruang-modal">
                    Add Ruang
                </a>
            </div>


            <!-- table -->
            <section id="ruang" class="shadow-lg sm:rounded-lg">
                <div x-init="$nextTick(() => {paggination(1) })">
                    <div class="overflow-x-auto rounded-md overflow-hidden">
                        <table class="w-[800px] lg:w-full text-sm text-left text-gray-500 dark:text-gray-400 table-fixed relative" id="table">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="w-[5%] px-4 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="w-[17%] px-6 py-3">
                                        Nama Ruang
                                    </th>
                                    <th scope="col" class="w-[30%] px-6 py-3">
                                        Keterangan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jenis Ruang
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Lantai
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Denah Ruang
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
                                        <th class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                            <div class="flex flex-col gap-1">
                                                <div x-text="item.nama_ruang" class="text-md font-medium"></div>
                                                <div x-text="item.deskripsi_ruang" class="text-sm font-normal"></div>
                                            </div>
                                        </th>
                                        <td class="px-6 py-4">
                                            <template x-if="item.keterangan && item.keterangan.length < 88">
                                                <p x-text="item.keterangan"></p>
                                            </template>

                                            <template x-if="item.keterangan && item.keterangan.length > 88">
                                                <!-- ########### Ini Modal YGY ########### -->
                                                <div x-data="{ 'showModal': false }" @keydown.escape="showModal = false">

                                                    <p x-text="item.keterangan.substring(0, 83) + '... '"></p>

                                                    <!-- Trigger for Modal -->
                                                    <button type="button" @click="showModal = true" class="inline-flex font-medium text-black dark:text-white">
                                                        see more
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50" x-show="showModal">
                                                        <!-- Modal inner -->
                                                        <div class="max-w-3xl px-6 py-4 mx-auto text-left bg-white rounded shadow-lg dark:bg-gray-700" @click.away="showModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                                            <!-- Title / Close-->
                                                            <div class="flex items-center justify-between  border-b dark:border-gray-600 pb-2">
                                                                <h3 class="mr-3 text-black max-w-none dark:text-white text-lg">Keterangan</h3>
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
                                            </template>
                                        </td>
                                        <td x-text="item.jenis_ruang" class="px-6 py-4">
                                        </td>
                                        <td x-text="item.nama_lantai" class="px-6 py-4">
                                        </td>
                                        <td class="px-6 py-4" x-data="{ 'showModal': false }" @keydown.escape="showModal = false">
                                            <button @click="showModal = true" class="px-3 py-2 text-xs font-medium text-center text-white bg-bingu rounded-lg hover:bg-bingu_hover">
                                                Lihat Denah
                                            </button>

                                            <!-- Modal -->
                                            <div class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50" x-show="showModal">
                                                <!-- Modal inner -->
                                                <div class="max-w-3xl px-6 py-4 mx-auto text-left bg-white rounded shadow-lg dark:bg-gray-700" @click.away="showModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                                    <!-- Title / Close-->
                                                    <div class="flex items-center justify-between  border-b dark:border-gray-600 pb-2">
                                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white" x-text="'Denah Ruang ' + item.nama_ruang">
                                                        </h3>
                                                        <button type="button" class="z-50 cursor-pointer" @click="showModal = false">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <!-- content -->
                                                    <div class="p-4 md:p-5 space-y-4">
                                                        <img :src="item.gambar != undefined && '/assets/img/lantai/'+ item.gambar" :alt="item.id_ruang">
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class="flex justify-end items-center p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                        <button @click="showModal = false" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 relative" x-data="{ 'showModal': false }" @keydown.escape="showModal = false">
                                            <i class="fa-solid fa-ellipsis fa-lg cursor-pointer text-black dark:text-white"></i>
                                            <div class="hidden absolute -left-[80px] top-0 text-left w-[100px] bg-[#00487E] dark:bg-gray-600 gap text-white dark:text-slate-300 font-medium text-md rounded-md overflow-hidden">
                                                <!-- Trigger for Modal -->
                                                <button type="button" @click="showModal = true" class="edit-modal w-full py-2 px-4 hover:bg-[#003B67] dark:hover:bg-gray-400 hover:text-white">Edit</button>

                                                <a :href="'/admin/ruang/delete/' + item.id_ruang" class="delete-modal">
                                                    <div class="py-2 px-4 hover:bg-[#003B67] dark:hover:bg-gray-400 hover:text-white text-center">Delete</div>
                                                </a>
                                            </div>

                                            <!-- Modal -->
                                            <div class="fixed inset-0 z-30 flex items-center justify-center bg-black bg-opacity-50" x-show="showModal">
                                                <!-- Modal inner -->
                                                <div class="max-w-3xl px-4 py-2 mx-auto text-left max-h-[500px] overflow-y-auto bg-white rounded shadow-lg dark:bg-gray-700" @click.away="showModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                                    <!-- Title / Close-->
                                                    <div class="flex items-center justify-between p-3 border-b rounded-t dark:border-gray-600 border-b-black">
                                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                            Edit Data Ruang
                                                        </h3>
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="showModal = false">
                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <!-- content -->
                                                    <div class="min-h-[100px] min-w-[300px] pt-4  text-gray-500 dark:text-gray-300">
                                                        <form class="p-4 md:p-5" method="POST" action="/admin/ruang/edit" enctype="multipart/form-data">
                                                            <div class="grid gap-4 mb-4 grid-cols-2">
                                                                <input type="hidden" name="id_ruang" :value="item.id_ruang">
                                                                <div class="col-span-1">
                                                                    <label for="kode_ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Ruang</label>
                                                                    <input type="text" name="kode_ruang" id="kode_ruang" :value="item.nama_ruang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="RT_05" required="">
                                                                </div>
                                                                <div class="col-span-1">
                                                                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Ruang</label>
                                                                    <input type="text" name="nama" id="nama" :value="item.deskripsi_ruang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ruang Teori_05" required="">
                                                                </div>
                                                                <div class="col-span-1">
                                                                    <label for="jenis_ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Ruang</label>
                                                                    <select name="jenis_ruang" id="jenis_ruang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                        <option>Select Ruang</option>
                                                                        <option x-bind:selected="item.jenis_ruang === 'Ruang Teori' ? true : false" value="JR001">Ruang Teori</option>
                                                                        <option x-bind:selected="item.jenis_ruang === 'Ruang Praktikum' ? true : false" value="JR002">Ruang Praktikum</option>
                                                                        <option x-bind:selected="item.jenis_ruang === 'Ruang Gabungan' ? true : false" value="JR003">Ruang Gabungan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-span-1">
                                                                    <label for="lantai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lantai</label>
                                                                    <select id="lantai" name="lantai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                        <option>Select Lantai</option>
                                                                        <option x-bind:selected="item.nama_lantai === 'Lantai 5' ? true : false" value="L001">Lantai 5</option>
                                                                        <option x-bind:selected="item.nama_lantai === 'Lantai 6' ? true : false" value="L002">Lantai 6</option>
                                                                        <option x-bind:selected="item.nama_lantai === 'Lantai 7' ? true : false" value="L003">Lantai 7</option>
                                                                        <option x-bind:selected="item.nama_lantai === 'Lantai 8' ? true : false" value="L004">Lantai 8</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-span-2">
                                                                    <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan Ruang</label>
                                                                    <textarea id="keterangan" name="keterangan" rows="4" :value="item.keterangan" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="deskripsi ruang"></textarea>
                                                                </div>
                                                                <div class="col-span-2">
                                                                    <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Denah Ruangan</label>
                                                                    <div class="flex justify-center my-4">
                                                                        <img :src="item.gambar != undefined && '/assets/img/lantai/'+ item.gambar" :alt="item.id_ruang" class="w-[300px]">
                                                                    </div>
                                                                    <input type="file" name="gambar" id="gambar" class=" text-gray-900 dark:text-white" accept="image/*">
                                                                </div>
                                                            </div>
                                                            <div class="flex w-full justify-end items-center">
                                                                <button type="submit" class="text-white items-center bg-indigo-600 hover:bg-bingu_hover focus:ring-4 focus:outline-none focus:ring-indigo-900 font-medium rounded-lg text-sm px-5 py-2.5 text-end ">
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
                                <a href="#ruang" @click="prev()" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-200 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                            </li>
                            <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
                                <li>
                                    <a @click="paggination(<?= $i; ?>)" id="button-pagination" href="#ruang" class="flex items-center justify-center px-3 h-8 leading-tight border border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400  dark:hover:text-white hover:text-black"><?= $i ?></a>
                                </li>
                            <?php endfor; ?>
                            <li>
                                <a href="#ruang" @click="next()" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-200 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- Main modal -->
<div id="add-ruang-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full inset-0 max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Add New Ruang
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="add-ruang-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" method="POST" action="" enctype="multipart/form-data">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-1">
                        <label for="kode_ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Ruang</label>
                        <input type="text" name="kode_ruang" id="kode_ruang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="RT_05" required="">
                    </div>
                    <div class="col-span-1">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Ruang</label>
                        <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ruang Teori_05" required="">
                    </div>
                    <div class="col-span-1">
                        <label for="jenis_ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Ruang</label>
                        <select name="jenis_ruang" id="jenis_ruang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select Ruang</option>
                            <option value="JR001">Ruang Teori</option>
                            <option value="JR002">Ruang Praktikum</option>
                            <option value="JR003">Ruang Gabungan</option>
                        </select>
                    </div>
                    <div class="col-span-1">
                        <label for="lantai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lantai</label>
                        <select id="lantai" name="lantai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select Lantai</option>
                            <option value="L001">Lantai 5</option>
                            <option value="L002">Lantai 6</option>
                            <option value="L003">Lantai 7</option>
                            <option value="L004">Lantai 8</option>
                        </select>
                    </div>
                    <div class="col-span-2">
                        <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan Ruang</label>
                        <textarea id="keterangan" name="keterangan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="deskripsi ruang"></textarea>
                    </div>
                    <div class="col-span-2">
                        <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar Denah</label>
                        <input type="file" name="gambar" id="gambar" class="text-gray-900 dark:text-white" accept="image/*">
                    </div>
                </div>
                <div class="flex w-full justify-end items-center">
                    <button type="submit" class="text-white items-center bg-indigo-600 hover:bg-bingu_hover focus:ring-4 focus:outline-none focus:ring-indigo-900 font-medium rounded-lg text-sm px-5 py-2.5 text-end ">
                        Add
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // action modal

    let buttonAction = document.querySelectorAll("i");

    document.querySelector("#ruang").addEventListener("click", (e) => {
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
                fetch('/api/ruang/' + page)
                    .then(response => response.json())
                    .then(data => {
                        this.tableData = data.ruangan;
                        console.log(this.tableData);
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
                fetch('/api/ruang/' + (parseInt(this.current_page) + 1))
                    .then(response => response.json())
                    .then(data => {
                        this.tableData = data.ruangan;
                        this.current_page = data.currentPage;
                        setActive(this.current_page);
                    });
            },
            prev() {
                if (this.current_page == 1) {
                    return;
                }
                fetch('/api/ruang/' + (parseInt(this.current_page) - 1))
                    .then(response => response.json())
                    .then(data => {
                        this.tableData = data.ruangan;
                        this.current_page = data.currentPage;
                        setActive(this.current_page);
                    });
            },
            async searchRuang() {
                const keyword = document.querySelector("#table-search").value;
                const formData = new FormData();
                formData.append("keyword", keyword);
                const response = await fetch('/api/admin/ruang/search', {
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