<div class="p-4  ml-[77px] lg:ml-64 bg-white dark:bg-[#171622]" id="ruang">
    <div class="p-4 mt-14">
        <div class="pb-4 bg-white dark:bg-gray-900 flex justify-between">

            <!-- Searching -->
            <div>
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
            <a class="px-4 py-2 bg-blue-600 rounded-lg cursor-pointer shadow-md text-white hover:scale-105" data-modal-target="add-ruang-modal" data-modal-toggle="add-ruang-modal">
                Add Ruang
            </a>
        </div>

        <!-- table -->
        <div class="shadow-md overflow-x-auto sm:rounded-lg">
            <table class="w-[800px] lg:w-full text-sm text-left text-gray-500 dark:text-gray-400 table-fixed relative" id="table">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="w-[5%] px-4 py-3">
                            No
                        </th>
                        <th scope="col" class="w-[30%] px-6 py-3">
                            Nama Ruang
                        </th>
                        <th scope="col" class="w-[25%] px-6 py-3">
                            Deskripsi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Ruang
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Lantai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-4 py-3">
                            1
                        </td>
                        <th class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                            <div class="flex items-center gap-3 justify-start">
                                <img src="/assets/img/contoh-ruang-kelas.jpg" alt="contoh-ruang" class="h-[70px] rounded-md">
                                <div class="flex flex-col">
                                    <div class="text-sm font-normal text-slate-400">RT-05</div>
                                    <div class="text-md font-medium">Ruang Teori 05</div>
                                </div>
                            </div>
                        </th>
                        <td class="px-6 py-4 deskripsi">
                            Proyektor, AC, Kursi-meja-50, Papan Tulis, Dan lain sebagainya
                        </td>
                        <td class="px-6 py-4">
                            Ruang Teori
                        </td>
                        <td class="px-6 py-4">
                            Lantai 5
                        </td>
                        <td class="px-6 py-4 relative">
                            <i class="fa-solid fa-ellipsis fa-lg cursor-pointer" style="color: #ffffff;"></i>

                            <div id="action-modal-1" aria-labelledby="button-action-1" class="hidden absolute -left-[80px] top-[45px] text-left w-[100px] bg-gray-600 gap text-slate-300 font-medium text-md rounded-md overflow-hidden">
                                <div class="py-2 px-4 hover:bg-gray-400 hover:text-white edit-modal">Edit</div>
                                <div class="py-2 px-4 hover:bg-gray-400 hover:text-white delete-modal">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-4 py-3">
                            1
                        </td>
                        <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex items-center gap-3 justify-start">
                                <img src="/assets/img/contoh-ruang-kelas.jpg" alt="contoh-ruang" class="h-[70px] rounded-md">
                                <div class="flex flex-col">
                                    <div class="text-sm font-normal text-slate-400">RT-05</div>
                                    <div class="text-md font-medium">Ruang Teori 05</div>
                                </div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            Proyektor, AC, Kursi-meja-50, Papan Tulis, Dan lain sebagainya
                        </td>
                        <td class="px-6 py-4">
                            Ruang Teori
                        </td>
                        <td class="px-6 py-4">
                            Lantai 5
                        </td>
                        <td class="px-6 py-4 relative">
                            <i class="fa-solid fa-ellipsis fa-lg cursor-pointer" style="color: #ffffff;"></i>

                            <div id="action-modal-1" aria-labelledby="button-action-1" class="hidden absolute -left-[80px] top-[45px] text-left w-[100px] bg-gray-600 gap text-slate-300 font-medium text-md rounded-md overflow-hidden">
                                <div class="py-2 px-4 hover:bg-gray-400 hover:text-white edit-modal">Edit</div>
                                <div class="py-2 px-4 hover:bg-gray-400 hover:text-white delete-modal">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-4 py-3">
                            1
                        </td>
                        <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex items-center gap-3 justify-start">
                                <img src="/assets/img/contoh-ruang-kelas.jpg" alt="contoh-ruang" class="h-[70px] rounded-md">
                                <div class="flex flex-col">
                                    <div class="text-sm font-normal text-slate-400">RT-05</div>
                                    <div class="text-md font-medium">Ruang Teori 05</div>
                                </div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            Proyektor, AC, Kursi-meja-50, Papan Tulis, Dan lain sebagainya
                        </td>
                        <td class="px-6 py-4">
                            Ruang Teori
                        </td>
                        <td class="px-6 py-4">
                            Lantai 5
                        </td>
                        <td class="px-6 py-4 relative">
                            <i class="fa-solid fa-ellipsis fa-lg cursor-pointer" style="color: #ffffff;"></i>

                            <div id="action-modal-1" aria-labelledby="button-action-1" class="hidden absolute -left-[80px] top-[45px] text-left w-[100px] bg-gray-600 gap text-slate-300 font-medium text-md rounded-md overflow-hidden">
                                <div class="py-2 px-4 hover:bg-gray-400 hover:text-white edit-modal">Edit</div>
                                <div class="py-2 px-4 hover:bg-gray-400 hover:text-white delete-modal">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-4 py-3">
                            1
                        </td>
                        <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex items-center gap-3 justify-start">
                                <img src="/assets/img/contoh-ruang-kelas.jpg" alt="contoh-ruang" class="h-[70px] rounded-md">
                                <div class="flex flex-col">
                                    <div class="text-sm font-normal text-slate-400">RT-05</div>
                                    <div class="text-md font-medium">Ruang Teori 05</div>
                                </div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            Proyektor, AC, Kursi-meja-50, Papan Tulis, Dan lain sebagainya
                        </td>
                        <td class="px-6 py-4">
                            Ruang Teori
                        </td>
                        <td class="px-6 py-4">
                            Lantai 5
                        </td>
                        <td class="px-6 py-4 relative">
                            <i class="fa-solid fa-ellipsis fa-lg cursor-pointer" style="color: #ffffff;"></i>

                            <div id="action-modal-1" aria-labelledby="button-action-1" class="hidden absolute -left-[80px] top-[45px] text-left w-[100px] bg-gray-600 gap text-slate-300 font-medium text-md rounded-md overflow-hidden">
                                <div class="py-2 px-4 hover:bg-gray-400 hover:text-white edit-modal">Edit</div>
                                <div class="py-2 px-4 hover:bg-gray-400 hover:text-white delete-modal">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-4 py-3">
                            1
                        </td>
                        <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex items-center gap-3 justify-start">
                                <img src="/assets/img/contoh-ruang-kelas.jpg" alt="contoh-ruang" class="h-[70px] rounded-md">
                                <div class="flex flex-col">
                                    <div class="text-sm font-normal text-slate-400">RT-05</div>
                                    <div class="text-md font-medium">Ruang Teori 05</div>
                                </div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            Proyektor, AC, Kursi-meja-50, Papan Tulis, Dan lain sebagainya
                        </td>
                        <td class="px-6 py-4">
                            Ruang Teori
                        </td>
                        <td class="px-6 py-4">
                            Lantai 5
                        </td>
                        <td class="px-6 py-4 relative">
                            <i class="fa-solid fa-ellipsis fa-lg cursor-pointer" style="color: #ffffff;"></i>

                            <div id="action-modal-1" aria-labelledby="button-action-1" class="hidden absolute -left-[80px] top-[45px] text-left w-[100px] bg-gray-600 gap text-slate-300 font-medium text-md rounded-md overflow-hidden">
                                <div class="py-2 px-4 hover:bg-gray-400 hover:text-white edit-modal">Edit</div>
                                <div class="py-2 px-4 hover:bg-gray-400 hover:text-white delete-modal">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-4 py-3">
                            1
                        </td>
                        <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex items-center gap-3 justify-start">
                                <img src="/assets/img/contoh-ruang-kelas.jpg" alt="contoh-ruang" class="h-[70px] rounded-md">
                                <div class="flex flex-col">
                                    <div class="text-sm font-normal text-slate-400">RT-05</div>
                                    <div class="text-md font-medium">Ruang Teori 05</div>
                                </div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            Proyektor, AC, Kursi-meja-50, Papan Tulis, Dan lain sebagainya
                        </td>
                        <td class="px-6 py-4">
                            Ruang Teori
                        </td>
                        <td class="px-6 py-4">
                            Lantai 5
                        </td>
                        <td class="px-6 py-4 relative">
                            <i class="fa-solid fa-ellipsis fa-lg cursor-pointer" style="color: #ffffff;"></i>

                            <div id="action-modal-1" aria-labelledby="button-action-1" class="hidden absolute -left-[80px] top-[45px] text-left w-[100px] bg-gray-600 gap text-slate-300 font-medium text-md rounded-md overflow-hidden">
                                <div class="py-2 px-4 hover:bg-gray-400 hover:text-white edit-modal">Edit</div>
                                <div class="py-2 px-4 hover:bg-gray-400 hover:text-white delete-modal">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-4 py-3">
                            1
                        </td>
                        <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex items-center gap-3 justify-start">
                                <img src="/assets/img/contoh-ruang-kelas.jpg" alt="contoh-ruang" class="h-[70px] rounded-md">
                                <div class="flex flex-col">
                                    <div class="text-sm font-normal text-slate-400">RT-05</div>
                                    <div class="text-md font-medium">Ruang Teori 05</div>
                                </div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            Proyektor, AC, Kursi-meja-50, Papan Tulis, Dan lain sebagainya
                        </td>
                        <td class="px-6 py-4">
                            Ruang Teori
                        </td>
                        <td class="px-6 py-4">
                            Lantai 5
                        </td>
                        <td class="px-6 py-4 relative">
                            <i class="fa-solid fa-ellipsis fa-lg cursor-pointer" style="color: #ffffff;"></i>

                            <div id="action-modal-1" aria-labelledby="button-action-1" class="hidden absolute -left-[80px] top-[45px] text-left w-[100px] bg-gray-600 gap text-slate-300 font-medium text-md rounded-md overflow-hidden">
                                <div class="py-2 px-4 hover:bg-gray-400 hover:text-white edit-modal">Edit</div>
                                <div class="py-2 px-4 hover:bg-gray-400 hover:text-white delete-modal">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-4 py-3">
                            1
                        </td>
                        <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex items-center gap-3 justify-start">
                                <img src="/assets/img/contoh-ruang-kelas.jpg" alt="contoh-ruang" class="h-[70px] rounded-md">
                                <div class="flex flex-col">
                                    <div class="text-sm font-normal text-slate-400">RT-05</div>
                                    <div class="text-md font-medium">Ruang Teori 05</div>
                                </div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            Proyektor, AC, Kursi-meja-50, Papan Tulis, Dan lain sebagainya
                        </td>
                        <td class="px-6 py-4">
                            Ruang Teori
                        </td>
                        <td class="px-6 py-4">
                            Lantai 5
                        </td>
                        <td class="px-6 py-4 relative">
                            <i class="fa-solid fa-ellipsis fa-lg cursor-pointer" style="color: #ffffff;"></i>

                            <div id="action-modal-1" aria-labelledby="button-action-1" class="hidden absolute -left-[80px] top-[45px] text-left w-[100px] bg-gray-600 gap text-slate-300 font-medium text-md rounded-md overflow-hidden">
                                <div class="py-2 px-4 hover:bg-gray-400 hover:text-white edit-modal">Edit</div>
                                <div class="py-2 px-4 hover:bg-gray-400 hover:text-white delete-modal">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-4 py-3">
                            1
                        </td>
                        <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex items-center gap-3 justify-start">
                                <img src="/assets/img/contoh-ruang-kelas.jpg" alt="contoh-ruang" class="h-[70px] rounded-md">
                                <div class="flex flex-col">
                                    <div class="text-sm font-normal text-slate-400">RT-05</div>
                                    <div class="text-md font-medium">Ruang Teori 05</div>
                                </div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            Proyektor, AC, Kursi-meja-50, Papan Tulis, Dan lain sebagainya
                        </td>
                        <td class="px-6 py-4">
                            Ruang Teori
                        </td>
                        <td class="px-6 py-4">
                            Lantai 5
                        </td>
                        <td class="px-6 py-4 relative">
                            <i class="fa-solid fa-ellipsis fa-lg cursor-pointer" style="color: #ffffff;"></i>

                            <div id="action-modal-1" aria-labelledby="button-action-1" class="hidden absolute -left-[80px] top-[45px] text-left w-[100px] bg-gray-600 gap text-slate-300 font-medium text-md rounded-md overflow-hidden">
                                <div class="py-2 px-4 hover:bg-gray-400 hover:text-white edit-modal">Edit</div>
                                <div class="py-2 px-4 hover:bg-gray-400 hover:text-white delete-modal">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-4 py-3">
                            1
                        </td>
                        <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex items-center gap-3 justify-start">
                                <img src="/assets/img/contoh-ruang-kelas.jpg" alt="contoh-ruang" class="h-[70px] rounded-md">
                                <div class="flex flex-col">
                                    <div class="text-sm font-normal text-slate-400">RT-05</div>
                                    <div class="text-md font-medium">Ruang Teori 05</div>
                                </div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            Proyektor, AC, Kursi-meja-50, Papan Tulis, Dan lain sebagainya
                        </td>
                        <td class="px-6 py-4">
                            Ruang Teori
                        </td>
                        <td class="px-6 py-4">
                            Lantai 5
                        </td>
                        <td class="px-6 py-4 relative">
                            <i class="fa-solid fa-ellipsis fa-lg cursor-pointer" style="color: #ffffff;"></i>

                            <div id="action-modal-1" aria-labelledby="button-action-1" class="hidden absolute -left-[80px] top-[45px] text-left w-[100px] bg-gray-600 gap text-slate-300 font-medium text-md rounded-md overflow-hidden">
                                <div class="py-2 px-4 hover:bg-gray-400 hover:text-white edit-modal">Edit</div>
                                <div class="py-2 px-4 hover:bg-gray-400 hover:text-white delete-modal">Delete</div>
                            </div>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
        <nav class="w-full flex items-center justify-center pt-4" aria-label="Table navigation">
            <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- Filter -->
<div class="fixed z-50 -right-[320px] top-[120px] min-h-[450px] bg-gray-700 w-80 p-4 transition-all duration-1000 text-white" id="filter">
    <div class="flex flex-col bg-gray-800 h-full w-full ">
        <div class="flex justify-between items-center p-4 border-b border-white">
            <div class="text-md font-semibold">Filters</div>
            <div class="cursor-pointer" id="exitFilter">
                <i class="fa-solid fa-xmark" style="color: #ffffff;"></i>
            </div>
        </div>
        <form action="" class="divide-y divide-dashed w-full px-4">
            <div class="flex w-full flex-col justify-start gap-2 items-center p-4">
                <div class="">Jenis Ruang</div>
                <div class="w-full">
                    <input id="jenis-ruang-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-200 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="jenis-ruang-1" class="text-sm font-normal text-gray-900 dark:text-gray-300">Ruang Teori</label>
                </div>
                <div class="w-full">
                    <input id="jenis-ruang-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="jenis-ruang-2" class="text-sm font-normal text-gray-900 dark:text-gray-300">Ruang Praktikum</label>
                </div>
                <div class="w-full">
                    <input checked id="jenis-ruang-3" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="jenis-ruang-3" class="text-sm font-normal text-gray-900 dark:text-gray-300">Ruang Gabungan</label>
                </div>
            </div>
            <div class="flex w-full flex-col justify-start gap-2 items-center p-4">
                <div class="">Tipe Lantai</div>
                <div class="w-full">
                    <input id="jenis-ruang-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-200 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="jenis-ruang-1" class="text-sm font-normal text-gray-900 dark:text-gray-300">Lantai 5</label>
                </div>
                <div class="w-full">
                    <input id="jenis-ruang-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="jenis-ruang-2" class="text-sm font-normal text-gray-900 dark:text-gray-300">Lantai 6</label>
                </div>
                <div class="w-full">
                    <input checked id="jenis-ruang-3" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="jenis-ruang-3" class="text-sm font-normal text-gray-900 dark:text-gray-300">Lantai 7</label>
                </div>
                <div class="w-full">
                    <input id="jenis-ruang-3" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="jenis-ruang-3" class="text-sm font-normal text-gray-900 dark:text-gray-300">Lantai 8</label>
                </div>
            </div>

            <div class="w-full flex justify-end items-center py-2 px-4">
                <input type="submit" value="Apply" class="py-2 px-4 bg-blue-600 text-white text-sm font-medium rounded-lg hover:scale-105">
            </div>
        </form>
    </div>
</div>

<div class="fixed z-50 right-0 top-[45%] w-10 h-10 p-2 bg-biru text-center rounded-l-md">
    <div id="buttonFilter" class="cursor-pointer">
        <i class="fa-solid fa-filter fa-flip" style="color: #ffffff;"></i>
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
            <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-1">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Ruang</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="RT_05" required="">
                    </div>
                    <div class="col-span-1">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Ruang</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ruang Teori_05" required="">
                    </div>
                    <div class="col-span-1">
                        <label for="jenis-ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Ruang</label>
                        <select id="jenis-ruang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select Ruang</option>
                            <option value="ruang-teori">Ruang Teori</option>
                            <option value="ruang-praktikum">Ruang Praktikum</option>
                            <option value="ruang-gabungan">Ruang Gabungan</option>
                        </select>
                    </div>
                    <div class="col-span-1">
                        <label for="lantai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lantai</label>
                        <select id="lantai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select Lantai</option>
                            <option value="lantai-5">Lantai 5</option>
                            <option value="lantai-6">Lantai 6</option>
                            <option value="lantai-7">Lantai 7</option>
                            <option value="lantai-8">Lantai 8</option>
                        </select>
                    </div>
                    <div class="col-span-2">
                        <label for="deskripsi ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Ruang</label>
                        <textarea id="deskripsi ruang" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="deskripsi ruang"></textarea>
                    </div>
                    <div class="col-span-2">
                        <label for="gambar-ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar Ruangan</label>
                        <input type="file" name="gambar-ruang" id="gambar-ruang" class=" text-white">
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
    // action modal

    const buttonAction = document.querySelectorAll("i");

    document.querySelector("#ruang").addEventListener("click", (e) => {
        buttonAction.forEach(node => {
            if (node === e.target) {
                node.nextElementSibling.classList.toggle("hidden")
            } else if (e.target !== node && !e.target.classList.contains("delete-modal") && !e.target.classList.contains("edit-modal")) {
                node.nextElementSibling.classList.add("hidden");
            }
        });
    });

    // filter

    const exitFilter = document.querySelector("#exitFilter");
    const filter = document.querySelector("#filter");
    const buttonFilter = document.querySelector("#buttonFilter");

    exitFilter.addEventListener("click", () => {
        filter.classList.add("-right-[320px]");
        filter.classList.remove("right-0");
        buttonFilter.parentElement.classList.remove("hidden")
    })

    buttonFilter.addEventListener("click", () => {
        buttonFilter.parentElement.classList.add("hidden")
        filter.classList.remove("-right-[320px]");
        filter.classList.add("right-0");
    })


    // view more fitur (not yet)

    // const deskripsiRuang = document.querySelectorAll(".deskripsi");

    // deskripsiRuang.forEach(dr => {
    //     console.log(dr.innerText.length);
    // })
</script>
</body>

</html>