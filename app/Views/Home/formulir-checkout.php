<body>
    <div class="w-full">
        ini step
    </div>
    <div class="grid grid-cols-5 grid-rows-3 px-10">
        <div class="h-auto bg-white shadow-md m-6 col-span-3 row-span-3 p-5 mx-4">
            <!-- hedaer -->
            <div class="header font-serif text-[18px] bg-navy_blue rounded-md text-white py-2 pl-4">
                Formulir peminjaman ruang
            </div>

            <form class="w-full  font-serif flex gird grid-cols-2">
                <div class="col-span-1 w-full m-3 ml-12">

                    <div class="mb-5">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" id="nama" value="Mahasiswa 1" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-5">
                        <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                        <input type="text" id="nim" value="224xxxxx01" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-5">
                        <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                        <input type="text" id="kelas" value="TI-2G" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <p class="mb-3 text-[15px]">Kepentingan</p>
                    <div class="flex flex-col   mb-5 ">
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
                <div class="col-span-1 w-full m-3 ml-12 mr-12">
                    <div class="mb-5 relative">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosen penanggungjawab</label>
                        <div class="autocomplete  text-sm font-medium text-gray-900 dark:text-white">
                            <input id="myInput" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="myCountry" placeholder="">
                        </div>
                    </div>

                    <div class="mb-5">
                        <label for="dosen-pengajar" class="text-sm mb-2 font-medium text-gray-900 dark:text-white text-[15px]">Dosen pengguna ruang saat ini</label>
                        <input type="text" id="dosen-pengajar" value="pak yoppy" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload file</label>
                    <input class=" cursor-pointer mb-5 dark:text-gray-400 focus:outline-none  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" aria-describedby="user_avatar_help" id="user_avatar" type="file">


                    <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                    <textarea id="keterangan" rows="4" class="block p-2.5 w-full  text-sm mb-5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>

                    <div class="flex justify-end w-full">
                        <button type="submit" class=" mr-0 text-white bg-bingu hover:bg-bingu_hover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full  sm:w-auto px-5 py-2.5 text-center dark:bg-bingu dark:hover:bg-bingu_hover dark:focus:ring-blue-800">Submit</button>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-span-2 bg-white shadow-md m-6 p-5 row-span-2">
            <div class="header font-serif text-[18px] bg-navy_blue rounded-md text-white py-2 pl-4">
                Formulir peminjaman ruang
            </div>
        </div>
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
            a.setAttribute("class", "autocomplete-items absolute bg-white w-full p-5 overflow-y-auto h-[100px] border rounded-lg");
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