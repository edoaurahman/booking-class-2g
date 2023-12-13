<div class="bg-gray-100 dark:bg-dark_grey1 min-h-[100vh] w-full">
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
                        <input type="text" name="kelas" id="kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="TI-2G" required="">
                    </div>
                    <div class="col-span-1">
                        <label for="matkul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mata Kuliah</label>
                        <input type="text" name="matkul" id="matkul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ruang Teori_05" required="">
                    </div>
                    <div class="col-span-1">
                        <label for="dosen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosen</label>
                        <select id="jenis-ruang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select Ruang</option>
                            <option value="ruang-teori">Ruang Teori</option>
                            <option value="ruang-praktikum">Ruang Praktikum</option>
                            <option value="ruang-gabungan">Ruang Gabungan</option>
                        </select>
                    </div>
                    <div class="col-span-1">
                        <label for="ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ruang</label>
                        <select id="lantai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select Lantai</option>
                            <option value="lantai-5">Lantai 5</option>
                            <option value="lantai-6">Lantai 6</option>
                            <option value="lantai-7">Lantai 7</option>
                            <option value="lantai-8">Lantai 8</option>
                        </select>
                    </div>
                    <div class="col-span-1">
                        <label for="hari" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hari</label>
                        <select id="lantai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select Lantai</option>
                            <option value="lantai-5">Lantai 5</option>
                            <option value="lantai-6">Lantai 6</option>
                            <option value="lantai-7">Lantai 7</option>
                            <option value="lantai-8">Lantai 8</option>
                        </select>
                    </div>
                    <div class="col-span-1">
                        <div class="flex w-full gap-2">
                            <div class="w-full">
                                <label for="jam_mulai" class="text-center block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Mulai</label>
                                <div class="relative flex items-center px-3">
                                    <input type="text" id="jam_mulai" data-input-counter aria-describedby="helper-text-explanation" class="text-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="1" required>
                                </div>
                            </div>
                            <div class="w-full">
                                <label for="jam_selesai" class="text-center block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Selesai</label>
                                <div class="relative flex items-center px-3">
                                    <input type="text" id="jam_selesai" class="text-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="1" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex w-full justify-end items-center">
                    <button type="submit" class="text-white items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-end dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Add
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) {
                return false;
            }
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items absolute bg-white w-full p-5 overflow-y-auto h-[100px] border rounded-lg dark:bg-dark_grey5");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function(e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }
            }
        });

        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }

        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }

        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function(e) {
            closeAllLists(e.target);
        });
    }

    var dosen = ["pak yoppy", "pak bagas", "pak afif", "pak hasyim", "pak unggul", "pak ade", "bu retno", "pak anisa", "pak dodit"];

    // var dosenPJ = [
    //     {
    //         id: '2837298791',
    //         nama: 'Pak Yo'
    //     }
    // ]

    autocomplete(document.getElementById("dosenPJ"), dosen);
    autocomplete(document.getElementById("dosen"), dosen);
    autocomplete(document.getElementById("ruang"), dosen);
    autocomplete(document.getElementById("mahasiswa"), dosen);
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