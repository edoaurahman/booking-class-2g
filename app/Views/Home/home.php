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
<section id="jadwal-ruang" class="relative overflow-auto bg-white dark:bg-dark_grey1 pt-20">
    <div x-data="tableData" x-init="$nextTick(() => { paggination(1) })">
        <h2 class="text-2xl font-bold md:text-4xl text-center pb-3 dark:text-white">
            Jadwal <span class="font-bold text-biru">Ruang</span>
        </h2>



        <div class="flex justify-center shadow-md rounded-lg">

            <div class="container h-screen overflow-x-auto px-10">
                <table class="md:w-[80%] w-full text-sm text-center md:m-auto text-gray-500 dark:text-gray-400 mb-6 md:mb-6 mx-3">
                    <thead class="text-xs text-gray-400 uppercase dark:text-gray-400 rounded-lg">
                        <tr>
                            <th scope="col" class="md:px-6 md:py-3 px-4 py-2 bg-white dark:bg-dark_grey1 max-w-[19%] text-gray-500">
                                Kode Ruang
                            </th>
                            <th scope="col" class="md:px-6 md:py-3 px-10 py-2  bg-white dark:bg-dark_grey1 text-gray-500">
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
                                    <a x-bind:href="'/roomSchedule/' + item.id_ruang" class="rounded-2xl w-max bg-bingu md:px-7 md:py-3 px-4 py-3 text-sm font-medium text-white shadow hover:bg-bingu_hover focus:outline-none focus:ring active:bg-bingu ">
                                        Lihat Jadwal
                                    </a>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>
                <div x-show="isLoading" class="flex container items-center justify-center w-full h-20 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                    <div role="status">
                        <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                        </svg>
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <div class="flex justify-center mb-3 mt-3">
                    <nav aria-label="Page navigation example">
                        <ul class="inline-flex -space-x-px text-base h-10">
                            <li>
                                <a href="#jadwal-ruang" @click="prev()" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                            </li>
                            <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
                                <li>
                                    <a @click="paggination(<?= $i ?>)" href="#jadwal-ruang" id="button-pagination" class=" flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-bingu hover:text-white dark:bg-bingu dark:border-gray-700 dark:text-gray-400 dark:hover:bg-bingu dark:hover:text-white"><?= $i ?></a>
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
                button.classList.add('dark:bg-bingu');
                button.classList.add('dark:text-white');
                button.classList.remove('dark:bg-gray-800');
                button.classList.add('bg-bingu');
                button.classList.add('text-white');
                button.classList.remove('bg-white');
            } else {
                button.classList.add('dark:bg-gray-800');
                button.classList.remove('dark:bg-bingu');
                button.classList.remove('dark:text-white');
                button.classList.remove('bg-bingu');
                button.classList.remove('text-white');
            }
        });
    }
    document.addEventListener('alpine:init', () => {
        Alpine.data('tableData', () => ({
            tableData: null,
            current_page: 1,
            isLoading: true,
            paggination(page = '1') {
                fetch('/api/ruang/' + page)
                    .then(response => response.json())
                    .then(data => {
                        this.tableData = data.ruangan;
                        this.current_page = data.currentPage;
                        setActive(this.current_page);
                    }).then(() => {
                        this.isLoading = false;
                    });
            },
            next() {
                if (this.current_page == <?= $totalPage ?>) {
                    return;
                }
                isLoading = true;
                fetch('/api/ruang/' + (parseInt(this.current_page) + 1))
                    .then(response => response.json())
                    .then(data => {
                        this.tableData = data.ruangan;
                        this.current_page = data.currentPage;
                        setActive(this.current_page);
                    }).then(() => {
                        this.isLoading = false;
                    });
            },
            prev() {
                if (this.current_page == 1) {
                    return;
                }
                isLoading = true;
                fetch('/api/ruang/' + (parseInt(this.current_page) - 1))
                    .then(response => response.json())
                    .then(data => {
                        this.tableData = data.ruangan;
                        this.current_page = data.currentPage;
                        setActive(this.current_page);
                    }).then(() => {
                        this.isLoading = false;
                    });
            }
        }))
    })
</script>