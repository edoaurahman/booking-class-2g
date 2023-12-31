<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <nav class="fixed top-0 z-50 w-full bg-navy_blue border-biru1 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end gap-5">
                    <button id="buttonSidebar" type="button" class="inline-flex items-center p-2 text-sm text-white dark:text-gray-400 rounded-lg lg:hidden hover:bg-[#012e59] dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                        </svg>
                    </button>
                    <a href="/" class="flex ms-2 md:me-24 gap-4">
                        <img src="/assets/img/logo.png" class="h-8" alt="Smart Booking Logo" />
                        <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-white">Booking Room <span class="text-sky-500">Polinema</span></span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <button type="button" class="group flex text-s rounded-full gap-2 items-center " aria-expanded="false" data-dropdown-toggle="dropdown-user" data-dropdown-trigger="hover">
                            <img class="w-8 h-8 rounded-full group-hover:ring-white group-hover:ring-1" src="/assets/img/foto-profil.png" alt="user photo">
                            <div class="font-medium hidden text-center mr-3 text-white md:block">
                                <?= $nama; ?>
                            </div>
                            <svg class="w-3 h-3 transition-all duration-500 text-white group-hover:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    <?= $nama; ?>
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    <?= $email; ?>
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="/admin" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <div class="border-t-[1px] border-gray-300 dark:border-gray-600">
                                        <form action="/admin/signout" method="post">
                                            <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white w-full text-left">Sign out</button>
                                        </form>
                                        <div class="pt-2 pb-5 px-3 w-full flex justify-end">
                                            <button class="w-[55px] h-6 rounded-full bg-gray-400 flex items-center transition duration-300 focus:outline-none shadow dark:bg-white" id="buttonToggle">
                                                <div id="switch-toggle" class="w-8 h-8 relative rounded-full transition duration-500 transform p-1 text-white flex items-center justify-center">
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <?php
    $path = $_SERVER['PATH_INFO'];
    ?>

    <aside x-data="total_booking" id="sidebar" class="fixed top-0 left-0 z-40 w-[77px] lg:w-64 h-screen pt-20 -translate-x-full bg-navy_blue border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700 duration-1000 transition-all" aria-label="Sidebar">
        <div class="h-full px-3 pb-4 ">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="/admin" class="flex justify-center items-center p-2 text-white rounded-lg dark:text-white hover:bg-[#012e59] dark:hover:bg-gray-700 group <?= $path == '/admin' ? 'dark:bg-gray-700 bg-[#012e59]' : ''; ?>">
                        <svg class="w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap hidden lg:block" id="dashboardSidebar">Dashboard</span>
                    </a>
                </li>
                <li class="relative">
                    <button id="bookingButton" type="button" class="group flex justify-center items-center w-full p-2 text-base text-white transition duration-75 rounded-lg group hover:bg-[#012e59] dark:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700 focus:bg-[#012e59]" aria-controls="dropdown-booking-sidebar" data-collapse-toggle="dropdown-booking-sidebar">
                        <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18" id="bookingSvg">
                            <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" id="bookingPath" />
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap hidden lg:block" id="bookingSidebar">Booking</span>

                        <span id="total_booking" class="absolute lg:static text-xs text-center lg:text-sm w-4 h-4 lg:w-5 lg:h-5 me-3 -right-2 top-1 bg-bingu rounded-full" x-show="total_booking != 0" x-text="total_booking"></span>
                        <svg id="iconRotate" class="w-3 h-3 transition-all duration-500 hidden lg:block <?= ($path == '/admin/urgent-booking' || $path == '/admin/nonurgent-booking') ? 'rotate-180' : ''; ?>" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-booking-sidebar" class="lg:py-2 lg:space-y-2 <?= ($path == '/admin/urgent-booking' || $path == '/admin/nonurgent-booking') ? '' : 'hidden'; ?>">
                        <li>
                            <a href="/admin/urgent-booking" id="urgentSidebar" class="hidden lg:flex items-center justify-between w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-[#012e59] dark:text-white dark:hover:bg-gray-700 <?= $path == '/admin/urgent-booking' ? 'dark:bg-gray-700 bg-[#012e59]' : ''; ?>">
                                Urgent
                                <span id="total_booking" class="absolute lg:static text-center text-xs lg:text-sm w-4 h-4 lg:w-5 lg:h-5 me-3 -right-2 top-1 bg-bingu rounded-full" x-show="urgent != 0" x-text="urgent"></span>
                            </a>

                        </li>
                        <li>
                            <a href="/admin/nonurgent-booking" id="nonUrgentSidebar" class="hidden lg:flex items-center w-full justify-between p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-[#012e59] dark:text-white dark:hover:bg-gray-700 <?= $path == '/admin/nonurgent-booking' ? 'dark:bg-gray-700 bg-[#012e59]' : ''; ?>">
                                Non Urgent
                                <span id="total_booking" class="absolute lg:static text-center text-xs lg:text-sm w-4 h-4 lg:w-5 lg:h-5 me-3 -right-2 top-1 bg-bingu rounded-full" x-show="nonurgent != 0" x-text="nonurgent"></span>
                            </a>
                        </li>
                    </ul>
                    <ul id="dropdown-booking-sidebar-tablet" class="hidden top-[0px] -right-[120px] absolute z-[999] bg-[#00487E] dark:bg-gray-600 text-white flex-col justify-center items-center rounded-md overflow-hidden">
                        <a href="/admin/urgent-booking" class="flex items-center w-full p-2 text-white transition duration-75  group hover:bg-[#003B67] dark:text-white dark:hover:bg-gray-700 <?= $path == '/admin/urgent' ? 'dark:bg-gray-700 bg-[#012e59]' : ''; ?>">Urgent</a>
                        <a href="/admin/nonurgent-booking" class="flex items-center w-full p-2 text-white transition duration-75  group hover:bg-[#003B67] dark:text-white dark:hover:bg-gray-700 <?= $path == '/admin/nonurgent' ? 'dark:bg-gray-700 bg-[#012e59]' : ''; ?>">Non Urgent</a>
                    </ul>
                </li>
                <li>
                    <a href="/admin/ruang" class="flex justify-center items-center p-2 py-4 lg:py-2 text-white rounded-lg dark:text-white hover:bg-[#012e59] dark:hover:bg-gray-700 group <?= $path == '/admin/ruang' ? 'dark:bg-gray-700 bg-[#012e59]' : ''; ?>">
                        <i class="fa-solid fa-door-open fa-lg dark:text-gray-400 group-hover:text-white"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap hidden lg:block" id="ruangSidebar">Ruang</span>
                    </a>
                </li>
                <li class="relative">
                    <button id="usersButton" type="button" class="group flex justify-center items-center w-full p-2 text-base text-white transition duration-75 rounded-lg group hover:bg-[#012e59] dark:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700 focus:bg-[#012e59]" aria-controls="dropdown-users-sidebar" data-collapse-toggle="dropdown-users-sidebar">
                        <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-white dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21" id="usersSvg">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" id="usersPath" />
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap hidden lg:block" id="usersSidebar">Users</span>
                        <svg id="iconRotate" class=" w-3 h-3 transition-all duration-500 hidden lg:block  <?= ($path == '/admin/dosen' || $path == '/admin/mahasiswa') ? 'rotate-180' : ''; ?>" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-users-sidebar" class="lg:py-2 lg:space-y-2 <?= ($path == '/admin/dosen' || $path == '/admin/mahasiswa') ? '' : 'hidden'; ?>">
                        <li>
                            <a href="/admin/dosen" id="dosenSidebar" class="hidden lg:flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-[#012e59] dark:text-white dark:hover:bg-gray-700 <?= $path == '/admin/dosen' ? 'dark:bg-gray-700 bg-[#012e59]' : ''; ?>">Dosen</a>
                        </li>
                        <li>
                            <a href="/admin/mahasiswa" id="mahasiswaSidebar" class="hidden lg:flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-[#012e59] dark:text-white dark:hover:bg-gray-700 <?= $path == '/admin/mahasiswa' ? 'dark:bg-gray-700 bg-[#012e59]' : ''; ?>">Mahasiswa</a>
                        </li>
                    </ul>
                    <ul id="dropdown-users-sidebar-tablet" class="hidden top-[0px] -right-[110px] absolute z-[999] bg-[#00487E] dark:bg-gray-600 text-white flex-col justify-center items-center rounded-md overflow-hidden">
                        <a href="/admin/dosen" class="flex items-center w-full p-2 text-white transition duration-75  group hover:bg-[#003B67] dark:text-white dark:hover:bg-gray-700 <?= $path == '/admin/dosen' ? 'dark:bg-gray-700 bg-[#012e59]' : ''; ?>">Dosen</a>
                        <a href="/admin/mahasiswa" class="flex items-center w-full p-2 text-white transition duration-75  group hover:bg-[#003B67] dark:text-white dark:hover:bg-gray-700 <?= $path == '/admin/mahasiswa' ? 'dark:bg-gray-700 bg-[#012e59]' : ''; ?>">Mahasiswa</a>
                    </ul>
                </li>
                <li>
                    <a href="/admin/jadwal" class="flex justify-center items-center p-2 py-4 lg:py-2 text-white rounded-lg dark:text-white hover:bg-[#012e59] dark:hover:bg-gray-700 group <?= $path == '/admin/jadwal' ? 'dark:bg-gray-700 bg-[#012e59]' : ''; ?>">
                        <i class="fa-solid fa-calendar-days fa-lg dark:text-gray-400 group-hover:text-white"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap hidden lg:block" id="jadwalSidebar">Jadwal</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/report" class="flex justify-center items-center p-2 py-4 lg:py-2 text-white rounded-lg  hover:bg-[#012e59] dark:hover:bg-gray-700 group <?= $path == '/admin/report' ? 'dark:bg-gray-700 bg-[#012e59]' : ''; ?>">
                        <i class="fa-solid fa-clipboard-list fa-lg dark:text-gray-400 group-hover:text-white"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap hidden lg:block" id="reportsSidebar">Reports</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/qrcode" class="flex justify-center items-center p-2 py-4 lg:py-2 text-white rounded-lg  hover:bg-[#012e59] dark:hover:bg-gray-700 group <?= $path == '/admin/qrcode' ? 'dark:bg-gray-700 bg-[#012e59]' : ''; ?>">
                        <i class="fa-solid fa-qrcode fa-lg text-gray-400 dark:text-gray-600 "></i>
                        <span class="flex-1 ms-3 whitespace-nowrap hidden lg:block text-gray-400 dark:text-gray-600" id="qrcodeSidebar">QR Code</span>
                    </a>
                </li>
                <li>
                    <form action="/signout" method="post">
                        <button type="submit" class="flex w-full justify-center items-center p-2 text-white rounded-lg  hover:bg-[#012e59] dark:hover:bg-gray-700 group ">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-200 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap hidden lg:flex" id="signoutSidebar">Sign Out</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </aside>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('total_booking', () => ({
                total_booking: 0,
                urgent: 0,
                nonurgent: 0,
                init() {
                    const fetchTotalBooking = () => {
                        fetch('/api/admin/booking/total-onprocess')
                            .then(response => response.json())
                            .then(data => {
                                this.total_booking = data.total_booking;
                                this.urgent = data.urgent;
                                this.nonurgent = data.nonurgent;
                                // console.log(this.total_booking);
                                // console.log(this.urgentnon);
                                // console.log(this.nonurgent);
                                // console.log(data);
                            });
                    };

                    fetchTotalBooking(); // Initial fetch

                    setInterval(fetchTotalBooking, 2000); // Fetch every 2000 milliseconds
                },
            }));
        });



        const usersButton = document.querySelector("#usersButton");
        const bookingButton = document.querySelector("#bookingButton");
        const iconRotate = document.querySelectorAll("#iconRotate");

        let miniSidebar = "on";

        const usersSvg = document.querySelector("#usersSvg");
        const bookingSvg = document.querySelector("#bookingSvg");
        const usersPath = document.querySelector("#usersPath");
        const bookingPath = document.querySelector("#bookingPath");
        const usersTablet = document.querySelector("#dropdown-users-sidebar-tablet")
        const bookingTablet = document.querySelector("#dropdown-booking-sidebar-tablet")
        const usersLaptop = document.querySelector("#dropdown-users-sidebar")
        const bookingLaptop = document.querySelector("#dropdown-booking-sidebar")

        // sidebarTablet bagian user dan booking

        window.addEventListener("click", (e) => {
            if (window.innerWidth <= 1024) {
                if ((e.target === usersButton || e.target === usersSvg || e.target === usersPath) && miniSidebar === "on") {
                    usersTablet.classList.toggle("hidden");
                } else if (e.target !== usersButton && e.target !== usersTablet && e.target !== usersSvg && e.target !== usersPath) {
                    usersTablet.classList.add("hidden");
                }
            }
        })

        window.addEventListener("click", (e) => {
            if (window.innerWidth <= 1024) {
                if ((e.target === bookingButton || e.target === bookingSvg || e.target === bookingPath) && miniSidebar === "on") {
                    bookingTablet.classList.toggle("hidden");
                } else if (e.target !== bookingButton && e.target !== bookingTablet && e.target !== bookingSvg && e.target !== bookingPath) {
                    bookingTablet.classList.add("hidden");
                }
            }
        })

        window.addEventListener("resize", (e) => {
            if (window.innerWidth >= 1024 && !(usersTablet.classList.contains("hidden"))) {
                usersTablet.classList.add("hidden");
            } else if (window.innerWidth >= 1024 && !(bookingTablet.classList.contains("hidden"))) {
                bookingTablet.classList.add("hidden");
            }
        })

        // icon arrow rotate sidebar

        usersButton.addEventListener("click", (e) => {
            iconRotate[1].classList.toggle("rotate-180");
        });

        bookingButton.addEventListener("click", (e) => {
            iconRotate[0].classList.toggle("rotate-180");
        });

        // sidebar tablet button (show all)
        const buttonSidebar = document.querySelector("#buttonSidebar");
        const dashboardSidebar = document.querySelector("#dashboardSidebar");
        const bookingSidebar = document.querySelector("#bookingSidebar");
        const urgentSidebar = document.querySelector("#urgentSidebar");
        const nonUrgentSidebar = document.querySelector("#nonUrgentSidebar");
        const ruangSidebar = document.querySelector("#ruangSidebar");
        const usersSidebar = document.querySelector("#usersSidebar");
        const dosenSidebar = document.querySelector("#dosenSidebar");
        const mahasiswaSidebar = document.querySelector("#mahasiswaSidebar");
        const jadwalSidebar = document.querySelector("#jadwalSidebar");
        const reportsSidebar = document.querySelector("#reportsSidebar");
        const qrcodeSidebar = document.querySelector("#qrcodeSidebar");
        const signoutSidebar = document.querySelector("#signoutSidebar");
        const sidebar = document.querySelector("#sidebar");

        const total_booking = document.querySelector("#total_booking");

        buttonSidebar.addEventListener("click", () => {
            dashboardSidebar.classList.toggle("hidden");
            bookingSidebar.classList.toggle("hidden");
            ruangSidebar.classList.toggle("hidden");
            usersSidebar.classList.toggle("hidden");
            jadwalSidebar.classList.toggle("hidden");
            reportsSidebar.classList.toggle("hidden");
            qrcodeSidebar.classList.toggle("hidden");
            signoutSidebar.classList.toggle("hidden");
            signoutSidebar.classList.toggle("flex");

            sidebar.classList.toggle("w-[77px]");
            sidebar.classList.toggle("w-64");

            ruangSidebar.parentElement.classList.toggle("py-4");
            ruangSidebar.parentElement.classList.toggle("py-2");
            jadwalSidebar.parentElement.classList.toggle("py-4");
            jadwalSidebar.parentElement.classList.toggle("py-2");
            reportsSidebar.parentElement.classList.toggle("py-4");
            reportsSidebar.parentElement.classList.toggle("py-2");
            qrcodeSidebar.parentElement.classList.toggle("py-4");
            qrcodeSidebar.parentElement.classList.toggle("py-2");

            usersLaptop.classList.toggle("py-2");
            usersLaptop.classList.toggle("space-y-2");
            mahasiswaSidebar.classList.toggle("hidden");
            mahasiswaSidebar.classList.toggle("flex");
            dosenSidebar.classList.toggle("hidden");
            dosenSidebar.classList.toggle("flex");
            iconRotate[1].classList.toggle("hidden");

            bookingLaptop.classList.toggle("py-2");
            bookingLaptop.classList.toggle("space-y-2");
            urgentSidebar.classList.toggle("hidden");
            urgentSidebar.classList.toggle("flex");
            nonUrgentSidebar.classList.toggle("hidden");
            nonUrgentSidebar.classList.toggle("flex");
            iconRotate[0].classList.toggle("hidden");

            total_booking.classList.toggle("absolute");

            miniSidebar = (miniSidebar === "on") ? "off" : "on";
        })
    </script>
    <script src="/assets/js/flowbite.min.js"></script>
    <script src="/assets/js/darkMode.js"></script>