<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                        </svg>
                    </button>
                    <a href="https://flowbite.com" class="flex ms-2 md:me-24">
                        <!-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" /> -->
                        <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Booking Room <span class="text-sky-500">Polinema</span></span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <button type="button" class="group flex text-sm bg-white dark:bg-gray-800 rounded-full gap-2 items-center " aria-expanded="false" data-dropdown-toggle="dropdown-user" data-dropdown-trigger="hover">
                            <img class="w-8 h-8 rounded-full group-hover:ring-black dark:group-hover:ring-white group-hover:ring-1" src="/assets/img/foto-profil.png" alt="user photo">
                            <div class="font-medium hidden text-center text-black dark:text-white md:block">
                                Username
                            </div>
                            <div class=" w-[17px] md:w-[24px] block group-hover:rotate-180 duration-300 ease-in-out">
                                <img src="/assets/img/bottom-icon.png" alt="bottom-icon">
                            </div>
                        </button>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    Neil Sims
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    neil.sims@flowbite.com
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                                </li>
                                <li>
                                    <form action="/signout" method="post">
                                        <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</button>
                                    </form>
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

    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-[77px] lg:w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="/admin" class="flex justify-center items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group <?= $path == '/admin' ? 'dark:bg-gray-700 bg-gray-100' : ''; ?>">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap hidden lg:block">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/booking" class="flex justify-center items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group <?= $path == '/admin/booking' ? 'dark:bg-gray-700 bg-gray-100' : ''; ?>">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap hidden lg:block">Booking</span>
                        <span class="items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300 hidden lg:inline-flex">3</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/ruang" class="flex justify-center items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group <?= $path == '/admin/ruang' ? 'dark:bg-gray-700 bg-gray-100' : ''; ?>">
                        <img src="/assets/img/room.png" alt="rooms" class="flex-shrink-0 w-5 h-5 transition duration-75 group-hover:text-gray-900 dark:group-hover:brightness-200">
                        <span class="flex-1 ms-3 whitespace-nowrap hidden lg:block">Ruang</span>
                    </a>
                </li>
                <li>
                    <button id="usersButton" type="button" class="group flex justify-center items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700 focus:bg-gray-100" aria-controls="dropdown-users-sidebar" data-collapse-toggle="dropdown-users-sidebar">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21" id="usersSvg">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" id="usersPath" />
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap hidden lg:block">Users</span>
                        <svg id="iconRotate" class="w-3 h-3 transition-all duration-500 hidden lg:block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-users-sidebar" class="hidden lg:py-2 lg:space-y-2">
                        <li>
                            <a href="/admin/dosen" class="hidden lg:flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 <?= $path == '/admin/dosen' ? 'dark:bg-gray-700 bg-gray-100' : ''; ?>">Dosen</a>
                        </li>
                        <li>
                            <a href="/admin/mahasiswa" class="hidden lg:flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 <?= $path == '/admin/mahasiswa' ? 'dark:bg-gray-700 bg-gray-100' : ''; ?>">Mahasiswa</a>
                        </li>
                    </ul>
                    <ul id="dropdown-users-sidebar-tablet" class="hidden top-[220px] -right-[100px] absolute z-[999999] bg-gray-600 text-white flex flex-col justify-center items-center rounded-md overflow-hidden">
                        <a href="/admin/dosen" class="flex items-center w-full p-2 text-gray-900 transition duration-75  group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 <?= $path == '/admin/dosen' ? 'dark:bg-gray-700 bg-gray-100' : ''; ?>">Dosen</a>
                        <a href="/admin/mahasiswa" class="flex items-center w-full p-2 text-gray-900 transition duration-75  group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 <?= $path == '/admin/mahasiswa' ? 'dark:bg-gray-700 bg-gray-100' : ''; ?>">Mahasiswa</a>
                    </ul>
                </li>
                <li>
                    <a href="/admin/jadwal" class="flex justify-center items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group <?= $path == '/admin/jadwal' ? 'dark:bg-gray-700 bg-gray-100' : ''; ?>">
                        <img src="/assets/img/jadwal.png" alt="jadwal" class="flex-shrink-0 w-5 h-5 transition duration-75 group-hover:text-gray-900 dark:group-hover:brightness-200">
                        <span class="flex-1 ms-3 whitespace-nowrap hidden lg:block">Jadwal</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/report" class="flex justify-center items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group <?= $path == '/admin/reports' ? 'dark:bg-gray-700 bg-gray-100' : ''; ?>">
                        <img src="/assets/img/history.png" alt="report" class="flex-shrink-0 w-5 h-5 transition duration-75 group-hover:text-gray-900 dark:group-hover:brightness-200">
                        <span class="flex-1 ms-3 whitespace-nowrap hidden lg:block">Reports</span>
                    </a>
                </li>
                <li>
                    <form action="/signout" method="post">
                        <button type="submit" class="flex justify-center items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group ">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap hidden lg:block">Sign Out</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </aside>

    <script>
        const usersButton = document.querySelector("#usersButton");
        const iconRotate = document.querySelector("#iconRotate");

        usersButton.addEventListener("click", () => {
            iconRotate.classList.toggle("rotate-180");
        });

        const usersSvg = document.querySelector("#usersSvg");
        const usersPath = document.querySelector("#usersPath");
        const sidebarTablet = document.querySelector("#dropdown-users-sidebar-tablet")
        // sidebarTablet
        window.addEventListener("click", (e) => {
            if (window.innerWidth <= 1024) {
                if (e.target === usersButton || e.target === usersSvg || e.target === usersPath) {
                    sidebarTablet.classList.toggle("hidden");
                    console.log("tes");
                } else if (e.target !== usersButton && e.target !== sidebarTablet && e.target !== usersSvg && e.target !== usersPath) {
                    sidebarTablet.classList.add("hidden");
                }
            }
        })
    </script>
    <script src="/assets/js/flowbite.min.js"></script>