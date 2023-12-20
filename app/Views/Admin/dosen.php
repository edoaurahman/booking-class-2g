<div class="bg-gray-100 dark:bg-dark_grey1 min-h-[100vh] w-full" x-data="tableData">
    <div class="p-4  ml-[77px] lg:ml-64 ">
        <div class="p-4 mt-14">

            <div class="px-4 py-2 mb-5 rounded-md shadow-md flex items-center gap-2 bg-white font-normal text-sm dark:bg-gray-700 text-gray-500 dark:text-gray-400">
                <svg class="flex-shrink-0 w-4 h-4 text-white transition duration-75 group-hover:text-white dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21" id="usersSvg">
                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" id="usersPath" />
                </svg>
                Admin / User / Dosen
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
                        <input type="search" @input.debounce.750="searchDosen()" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                    </div>
                </div>

                <!-- Button add ruang -->
                <a class="px-4 py-2 bg-bingu rounded-lg cursor-pointer shadow-lg text-white hover:bg-bingu_hover" data-modal-target="add-dosen-modal" data-modal-toggle="add-dosen-modal">
                    Add Dosen
                </a>
            </div>

            <!-- table -->
            <section id="dosen" class="shadow-md sm:rounded-lg">
                <div  x-init="$nextTick(() => {paggination(1) })">
                    <div class="overflow-x-auto rounded-md overflow-hidden">
                        <table class="w-[1200px] lg:w-full text-sm text-left text-gray-500 dark:text-gray-400 table-auto relative" id="table">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="w-[13%] px-4 py-3">
                                        NIP
                                    </th>
                                    <th scope="col" class="w-[23%] px-6 py-3">
                                        Nama
                                    </th>
                                    <th scope="col" class="w-[10%] px-6 py-3">
                                        Password
                                    </th>
                                    <th scope="col" class="w-[23%] px-6 py-3">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        TTL
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jenis Kelamin
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <template x-for="item in tableData">
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td x-text="item.nip" class="px-4 py-3">
                                        </td>
                                        <th class="px-6 py-4 ">
                                            <div class="flex items-center gap-3 justify-start">
                                                <img src="/assets/img/foto-profil.png" alt="contoh-profil" class="h-[40px] rounded-full">
                                                <div x-text="item.nama" class="text-sm"></div>
                                            </div>
                                        </th>
                                        <td x-text="item.password" class="px-6 py-4">
                                        </td>
                                        <td x-text="item.email" class="px-6 py-4">
                                        </td>
                                        <td x-text="item.ttl" class="px-6 py-4">
                                        </td>
                                        <td x-text="item.jenis_kelamin" class="px-6 py-4">
                                        </td>
                                        <td class="px-6 py-4 relative" x-data="{ 'showModal': false }" @keydown.escape="showModal = false">
                                            <i class="fa-solid fa-ellipsis fa-lg cursor-pointer text-black dark:text-white"></i>
                                            <div class="hidden absolute -left-[80px] top-0 text-left w-[100px] bg-[#00487E] dark:bg-gray-600 gap text-white dark:text-slate-300 font-medium text-md rounded-md overflow-hidden">
                                                <!-- Trigger for Modal -->
                                                <button type="button" @click="showModal = true" class="edit-modal w-full py-2 px-4 hover:bg-[#003B67] dark:hover:bg-gray-400 hover:text-white">Edit</button>

                                                <a :href="'/admin/dosen/delete/' + item.nip" class="delete-modal">
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
                                                            Edit Data Dosen
                                                        </h3>
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="showModal = false">
                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <!-- content -->
                                                    <div class="min-h-[100px] min-w-[300px] pt-4 max-h-[80vh] overflow-y-auto text-gray-500 dark:text-gray-300">
                                                        <form class="p-4 md:p-5" method="POST" action="/admin/dosen/edit">
                                                            <div class="grid gap-4 mb-4 grid-cols-2">
                                                                <div class="col-span-1">
                                                                    <label for="nip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP</label>
                                                                    <input type="text" name="nip" id="nip" :value="item.nip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="12345678910" required="">
                                                                </div>
                                                                <div class="col-span-1">
                                                                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                                                    <input type="text" name="password" id="password" :value="item.password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="abc123#$%" required="">
                                                                </div>
                                                                <div class="col-span-2">
                                                                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Dosen</label>
                                                                    <input type="text" name="nama" id="nama" :value="item.nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Lengkap" required="">
                                                                </div>
                                                                <div class="col-span-2">
                                                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                                    <input type="email" name="email" id="email" :value="item.email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="username@gamil.com" required="">
                                                                </div>
                                                                <div class="col-span-1">
                                                                    <label for="tglLahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                                                                    <input type="date" name="tglLahir" id="tglLahir" :value="item.tanggal_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <div class="col-span-1">
                                                                    <label for="tmptLahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
                                                                    <input type="text" name="tmptLahir" id="tmptLahir" :value="item.tempat_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="cth: Malang" required="">
                                                                </div>
                                                                <div class="col-span-2">
                                                                    <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</div>
                                                                    <div class="flex flex-row w-full justify-evenly">
                                                                        <div class="flex items-center me-4">
                                                                            <input id="laki-laki" type="radio" value="L" name="jenis_kelamin" x-bind:checked="item.jenis_kelamin === 'L' ? true : false" class="w-4 h-4 text-biru bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                                            <label for="laki-laki" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-Laki</label>
                                                                        </div>
                                                                        <div class="flex items-center me-4">
                                                                            <input id="perempuan" type="radio" value="P" name="jenis_kelamin" x-bind:checked="item.jenis_kelamin === 'P' ? true : false" class="w-4 h-4 text-biru bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                                            <label for="perempuan" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex w-full justify-end items-center">
                                                                <input value="Add" type="submit" class="text-white items-center bg-indigo-600 hover:bg-bingu_hover focus:ring-4 focus:outline-none focus:ring-indigo-900 font-medium rounded-lg text-sm px-5 py-2.5 text-end ">
                                                                </input>
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
                                <a href="#dosen" @click="prev()" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-200 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                            </li>
                            <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
                                <li>
                                    <a @click="paggination(<?= $i; ?>)" id="button-pagination" href="#dosen" class="flex items-center justify-center px-3 h-8 leading-tight border border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400  dark:hover:text-white hover:text-black"><?= $i ?></a>
                                </li>
                            <?php endfor; ?>
                            <li>
                                <a href="#dosen" @click="next()" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-200 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- Add Dosen modal -->
<div id="add-dosen-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full inset-0 max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Add New Dosen
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="add-dosen-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" method="POST" action="">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-1">
                        <label for="nip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP</label>
                        <input type="text" name="nip" id="nip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="12345678910" required="">
                    </div>
                    <div class="col-span-1">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="text" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="abc123#$%" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Dosen</label>
                        <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Lengkap" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="username@gamil.com" required="">
                    </div>
                    <div class="col-span-1">
                        <label for="tglLahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                        <input type="date" name="tglLahir" id="tglLahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="col-span-1">
                        <label for="tmptLahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
                        <input type="text" name="tmptLahir" id="tmptLahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="cth: Malang" required="">
                    </div>
                    <div class="col-span-2">
                        <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</div>
                        <div class="flex flex-row w-full justify-evenly">
                            <div class="flex items-center me-4">
                                <input id="laki-laki" type="radio" value="L" name="jenis_kelamin" class="w-4 h-4 text-biru bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="laki-laki" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-Laki</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="perempuan" type="radio" value="P" name="jenis_kelamin" class="w-4 h-4 text-biru bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="perempuan" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex w-full justify-end items-center">
                    <input value="Add" type="submit" class="text-white items-center bg-indigo-600 hover:bg-bingu_hover focus:ring-4 focus:outline-none focus:ring-indigo-900 font-medium rounded-lg text-sm px-5 py-2.5 text-end ">
                    </input>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Dosen modal -->
<div id="edit-dosen-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full inset-0 max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Edit Data Dosen
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="edit-dosen-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <div id="content-modal"></div>
        </div>
    </div>
</div>

<script>
    // edit modal
    const modal = (nip) => {
        const modal = document.querySelector('#content-modal')

        fetch(`/admin/dosen/edit/${nip}`, {
                method: 'GET'
            })
            .then(res => res.text())
            .then(res => {
                modal.innerHTML = res
            })
            .catch(err => console.log(err))

    }

    // action modal

    let buttonAction = document.querySelectorAll("i");

    document.querySelector("#dosen").addEventListener("click", (e) => {
        buttonAction.forEach(node => {
            try {
                if (node === e.target) {
                    node.nextElementSibling.classList.toggle("hidden")
                } else if (e.target !== node && !e.target.classList.contains("delete-modal") && !e.target.classList.contains("edit-modal")) {
                    node.nextElementSibling.classList.add("hidden");
                }
            } catch (error) {

            }
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
                fetch('/api/dosen/' + page)
                    .then(response => response.json())
                    .then(data => {
                        this.tableData = data.jmlDosen;
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
                fetch('/api/dosen/' + (parseInt(this.current_page) + 1))
                    .then(response => response.json())
                    .then(data => {
                        this.tableData = data.jmlDosen;
                        this.current_page = data.currentPage;
                        setActive(this.current_page);
                    });
            },
            prev() {
                if (this.current_page == 1) {
                    return;
                }
                fetch('/api/dosen/' + (parseInt(this.current_page) - 1))
                    .then(response => response.json())
                    .then(data => {
                        this.tableData = data.jmlDosen;
                        this.current_page = data.currentPage;
                        setActive(this.current_page);
                    });
            },
            async searchDosen() {
                const keyword = document.querySelector("#table-search").value;
                const formData = new FormData();
                formData.append("keyword", keyword);
                const response = await fetch('/api/admin/dosen/search', {
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