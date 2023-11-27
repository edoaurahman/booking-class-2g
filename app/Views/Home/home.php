<section class="relative bg-[url(/assets/img/bg_home.webp)] bg-cover bg-center bg-no-repeat">
    <div class="absolute inset-0 bg-gradient-to-t from-white to-white-300 dark:from-dark_grey1 "></div>

    <div class="relative mx-auto max-w-screen-xl pl-10 py-20 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-1">
        <div class="max-w-[750px] w-auto ">
            <h1 class="text-[36px] dark:text-gray-100 font-extrabold font-sans md:text-[72px] -ml-[2px] leading-normal ">
                BOOKING ROOM
                <strong class="block font-extrabold text-biru md:-mt-[37px] -mt-[12px]">
                    POLINEMA
                </strong>
            </h1>

            <p class=" max-w-lg text-[17px]/relaxed md:text-[25px] leading-normal dark:text-white">
                Mewujudkan Inovasi Pendidikan yang<br>Mudah dan Efisien
            </p>
            <div class="mt-8 flex flex-wrap gap-4 text-center w-auto  ">
                <a href="/booking" class="rounded-2xl block -mt-[12px]  bg-bingu px-5 py-3  md:text-[19px] text-[12px] text-white shadow hover:bg-bingu_hover focus:outline-none focus:ring active:bg-bingu ">
                    BOOK NOW
                </a>
            </div>
        </div>
    </div>
</section>
<section id="jadwal-ruang">
    <div x-data="tableData" x-init="$nextTick(() => { paggination(1) })" class="bg-white dark:bg-dark_grey1">
        <h2 class="text-xl font-bold md:text-3xl text-center pb-3 dark:text-white p-5">
            Jadwal <span class="font-bold text-biru">Ruang</span>
        </h2>

        <div class="flex justify-center shadow-md rounded-lg">
            <div class="container overflow-x-auto">

                <table class=" md:w-[80%] w-full text-sm text-center md:m-auto text-gray-500 dark:text-gray-400 mb-6 md:mb-6 mx-3">
                    <thead class="text-xs text-gray-400 uppercase dark:text-gray-400 rounded-lg">
                        <tr>
                            <th scope="col" class="md:px-6 md:py-3 px-4 py-2 bg-white dark:bg-dark_grey1 max-w-[19%] text-gray-500">
                                Kode Ruang
                            </th>
                            <th scope="col" class="md:px-6 md:py-3 px-4 py-2  bg-white dark:bg-dark_grey1 text-gray-500">
                                Ruang
                            </th>
                            <th scope="col" class="md:px-6 md:py-3 px-4 py-2 bg-white dark:bg-dark_grey1 text-gray-500">
                                Lantai
                            </th>
                            <th scope="col" class="md:px-6 md:py-3 px-4 py-2 bg-white dark:bg-dark_grey1 max-w-[29%] text-gray-500 ">
                                Jadwal
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <template x-for="item in tableData">
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th x-text="item.nama_ruang" scope="row" class="md:px-6 md:py-3 px-4 py-2 font-medium  whitespace-nowrap bg-white dark:text-white dark:bg-dark_grey1">
                                </th>
                                <td x-text="item.deskripsi_ruang" class="md:px-6 md:py-3 px-4 py-2 bg-white dark:bg-dark_grey1 dark:text-white ">
                                </td>
                                <td x-text="item.nama_lantai" class="md:px-6 md:py-3 px-4 py-2 bg-white dark:text-white dark:bg-dark_grey1">
                                </td>
                                <td class="flex md:px-6 md:py-3 px-4 py-2 justify-center bg-white dark:bg-dark_grey1 dark:text-white">
                                    <a href="/roomSchedule/RT01" class="rounded-2xl w-max bg-bingu md:px-7 md:py-3 px-4 py-3 text-sm font-medium text-white shadow hover:bg-bingu_hover focus:outline-none focus:ring active:bg-bingu ">
                                        Lihat Jadwal
                                    </a>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>

                <div class="flex justify-center mb-3 -mt-3">
                    <nav aria-label="Page navigation example">
                        <ul class="inline-flex -space-x-px text-base h-10">
                            <li>
                                <a href="#jadwal-ruang" @click="prev()" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                            </li>
                            <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
                                <li>
                                    <a @click="paggination(<?= $i ?>)" href="#jadwal-ruang" id="button-pagination" class=" flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-bingu hover:text-white dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-bingu dark:hover:text-white"><?= $i ?></a>
                                </li>
                            <?php endfor; ?>
                            <li>
                                <a href="#jadwal-ruang" @click="next()" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>

    </div>
</section>

<script>
    const buttonPaggination = document.querySelectorAll('#button-pagination');

    function setActive(current_page) {
        buttonPaggination.forEach((button) => {

            if (button.innerText == current_page) {
                if (localStorage.getItem('theme') == 'dark') {
                    button.classList.add('dark:bg-bingu');
                    button.classList.add('dark:text-white');
                    // button.classList.remove('dark:text-gray-500');
                    // button.classList.remove('dark:bg-white');
                } else {
                    button.classList.add('bg-bingu');
                    button.classList.add('text-white');
                    button.classList.remove('text-gray-500');
                    button.classList.remove('bg-white');

                }
            } else {
                if (localStorage.getItem('theme') == 'dark') {
                    button.classList.remove('dark:bg-bingu');
                    button.classList.remove('dark:text-white');
                } else {
                    button.classList.remove('bg-bingu');
                    button.classList.remove('text-white');
                    // button.classList.add('text-gray-500');
                    // button.classList.add('bg-white');

                }
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
                        this.current_page = data.currentPage;
                        setActive(this.current_page);
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
            }
        }))
    })
</script>