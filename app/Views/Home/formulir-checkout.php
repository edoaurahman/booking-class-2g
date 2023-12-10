<body class="bg-white  dark:bg-dark_grey1">

    <div>
        <div class="w-auto">
            <ol class="hidden sm:flex items-center w-full  font-medium text-center text-white  dark:text-gray-400 sm:text-base bg-biru2 py-16 px-28 ">
                <li class="flex md:w-full items-center  text-white dark:text sm:after:content-[''] after:w-full  after:border-b after:border-white after:border-2 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-white text-2xl font-sans font-semibold">
                    <div class="flex flex-none justify-end items-center w-36">
                        <i class="fa-solid  fa-circle-check mr-3"></i>
                        <p>Ruang </p>
                    </div>
                </li>
                <li class="flex md:w-full items-center text-white dark:text sm:after:content-[''] after:w-full  after:border-b after:border-white after:border-2 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-white text-2xl font-sans font-bold">
                    <div class="flex flex-none w-36  items-center">
                        <i class="fa-solid fa-circle-check ml-3 mr-3"></i>
                        <p>Waktu</p>
                    </div>
                </li>
                <li class="flex md:w-full items-center text-white dark:text sm:after:content-[''] after:w-full  after:border-b after:border-biru after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-biru text-2xl font-sans font-bold">
                    <div class="flex flex-none items-center">
                        <i class="fa-solid fa-circle-check mr-3"></i>
                        <p>Isi Formulir</p>
                    </div>

                <li class="flex items-center mr-10">
                    <div class="flex flex-none items-center text-biru">
                        <i class="fa-solid fa-clipboard-check mr-3"></i>
                        <p>Konfirmasi</p>
                    </div>
                </li>
            </ol>

            <!-- mobile  -->
            <ol class="sm:hidden  flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500   shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-800  dark:border-gray-700 sm:p-4 sm:space-x-4 rtl:space-x-reverse">
                <li class="flex items-center text-blue-600  ">
                    <i class="fa-solid fa-circle-check  "></i>
                    <div class="ml-2 mr-2">Ruang</div>
                    <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                    </svg>
                </li>

                <li class="flex items-center text-blue-600 px-2 ">
                    <i class="fa-solid fa-circle-check mr-1 "></i>
                    <div class="ml-2 mr-2">Waktu</div>
                    <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                    </svg>
                </li>

                <li class="flex items-center text-blue-600 ">
                    <i class="fa-solid fa-circle-check mr-2 "></i>
                    <div class=" ">Isi Formulir</div>
                </li>
                <svg class="w-3 h-3 ms-2 mr-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                </svg>

                <li class="flex items-center ">
                    <span class="flex items-center justify-center ml-2 w-4 h-4 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                        4
                    </span>
                    Review
                </li>
            </ol>
        </div>
        <div class="md:grid md:grid-cols-5  md:grid-rows-3 md:px-10">
            <div class="h-auto rounded-md bg-white dark:bg-dark_grey6 shadow-md m-6 col-span-3 row-span-3 p-5 mx-4">
                <!-- hedaer -->
                <div class="header font-serif mb-6 text-2xl bg-biru2 md:text-left text-center rounded-md text-white py-2 md:pl-4">
                    Formulir Peminjaman Ruang
                </div>

                <form class="w-full  font-serif  grid md:grid-cols-2 grid-cols-1">
                    <div class=" md:col-span-1 w-full m-3 md:ml-12 ">

                        <div class="mb-5 hidden md:block">
                            <label for="nama" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" id="nama" value="<?= $user->nama ?>" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-5 hidden md:block">
                            <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                            <input type="text" id="nim" value="<?= $user->nim ?>" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-5 hidden md:block">
                            <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                            <input type="text" id="kelas" value="<?= $user->nama_kelas ?>" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <p class="md:mb-3 text-[15px] text-gray-900 dark:text-white">Kepentingan</p>
                        <div class="flex flex-col  md:mb-5 ">
                            <div class="items-center flex mb-3">
                                <input id="mendadak" type="radio" value="" name="kepentingan" class="w-4  h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="mendadak" class="items-center ms-2 text-sm font-medium text-gray-900 dark:text-gray-300 mr-5">Mendadak</label>
                            </div>
                            <div class="items-center flex">
                                <input checked id="tidak-mendadak" type="radio" value="" name="kepentingan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="tidak-mendadak" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tidak Mendadak</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 w-full m-3 md:ml-12 md:mr-12 sm:pr-24">
                        <div class="mb-5 relative">
                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosen penanggungjawab</label>
                            <div class="autocomplete  text-sm font-medium text-gray-900 dark:text-white pr-6">
                                <input id="myInput" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="dosen" placeholder="">
                            </div>
                        </div>

                        <div class="mb-5 -mt-1 pr-6">
                            <label for="dosen-pengajar" class="text-sm  font-medium text-gray-900 dark:text-white text-[15px]">Dosen pengguna ruang saat ini</label>
                            <input type="text" id="dosen-pengajar" value="pak yoppy" disabled class="bg-gray-50 border mt-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="pr-6">

                            <label class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload file</label>
                            <input class=" cursor-pointer mb-5  dark:text-gray-400 focus:outline-none  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                            <label for="keterangan" class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                            <textarea id="keterangan" rows="4" class="block p-2.5 w-full  text-sm mb-5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                        </div>

                        <div class="flex justify-end w-full mt-7 pr-6">
                            <button type="submit" class=" mr-0 texy- text-white bg-bingu hover:bg-bingu_hover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm  sm:w-auto px-5 py-2.5  dark:bg-bingu dark:hover:bg-bingu_hover dark:focus:ring-blue-800">
                                Selanjutnya
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="hidden md:block col-span-2 rounded-md bg-white dark:bg-dark_grey6 shadow-md m-6 p-5 row-span-2 font-serif">
                <div class="header p-5  text-2xl bg-biru2 rounded-md text-white py-2 pl-4">
                    Preview
                </div>
                <div class="text-sm text-gray-900 dark:text-white p-4">
                    <div class="font-bold text-lg mb-2">Ruang Teori 1</div>
                    <span class="">Denah ruang: </span>
                    <div class="w-full justify-center flex">
                        <img src="/assets/img/lantai/Lantai6.png" class="w-[400px] h-auto mb-6" alt="">
                    </div>
                    <div class="text-base mb-2  font-semibold text-gray-900 dark:text-white">
                        Jam ke <br>
                        <p class="-my-0.5 font-thin">1,2,4</p>
                    </div>
                    <div class="text-base font-semibold text-gray-900 dark:text-white">
                        Tanggal <br>
                        <p class="-my-0.5 font-thin">30 Desember 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- mobile -->
    <div class="md:hidden fixed z-50 -right-[560px] left-[800px]  top-[120px] h-auto rounded-sm dark:bg-dark_grey6 bg-gray-100 p-4 transition-all ease-in-out duration-1000 text-white " id="filter">
        <div class="block col-span-2 bg-gray-100 dark:bg-dark_grey6 row-span-2 font-serif">
            <div class="header p-5  text-[22px] bg-biru2 rounded-md text-white py-2 pl-4">
                Preview
            </div>
            <div class="text-sm text-gray-900 dark:text-white p-4">
                <div class="font-bold mb-2">Ruang Teori 1</div>
                <span class="">Denah ruang: </span>
                <div class="w-full justify-center flex">
                    <img src="/assets/img/lantai/Lantai6.png" class="w-[400px] h-auto mb-6" alt="">
                </div>
                <div class="text-sm mb-2 font-semibold text-gray-900 dark:text-white">
                    Jam ke <br>
                    <p class="-my-1 font-thin">1,2,4</p>
                </div>
                <div class="text-sm font-semibold text-gray-900 dark:text-white">
                    Tanggal <br>
                    <p class="-my-1 font-thin">30 Desember 2023</p>
                </div>
            </div>
        </div>
    </div>


    <div class="sm:hidden block fixed z-50 right-0 top-[45%] w-10 h-10 p-2 bg-biru text-center rounded-l-md cursor-pointer" id="buttonFilter">
        <i class="fa-solid fa-eye " style="color: #ffffff; " id="imgButtonFilter"></i>
    </div>
</body>
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

    autocomplete(document.getElementById("myInput"), dosen);
</script>

<script>
    // filter


    const filter = document.querySelector("#filter");
    const buttonFilter = document.querySelector("#buttonFilter");
    const imgButtonFilter = document.querySelector("#imgButtonFilter");

    buttonFilter.addEventListener("click", () => {
        buttonFilter.classList.add("hidden")
        filter.classList.remove("-right-[560px]");
        filter.classList.remove("left-[800px]");
        filter.classList.add("left-[150px]");
        filter.classList.add("right-0");
    })
    window.addEventListener("click", (e) => {
        if (e.target !== filter && e.target !== buttonFilter && e.target !== imgButtonFilter) {

            filter.classList.add("-right-[560px]");
            filter.classList.add("left-[800px]");
            filter.classList.remove("left-[150px]");
            filter.classList.remove("right-0");
            buttonFilter.classList.remove("hidden")
        }
    })
</script>