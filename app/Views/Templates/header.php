<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
</head>

<body>
    <nav class="bg-navy_blue border-gray-200 dark:bg-gray-800">
        <div class="max-w-screen-2xl flex flex-wrap items-center justify-between p-4 mx-2 md:mx-4">

            <!-- logo -->

            <a href="#" class="flex items-center space-x-3 ">
                <!-- <img src="assets/img/logo.png" class="h-8" alt="Smart Booking Logo" /> -->
                <span class="self-center text-xl font-semibold md:text-2xl whitespace-nowrap text-white">Booking Room <span class="text-blue-500">Polinema</span></span>
            </a>

            <!-- notifikasi -->

            <div class="flex items-center md:order-2 space-x-3 md:space-x-0">
                <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="relative right-0 md:right-5 inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400" type="button">
                    <svg class="w-7 h-7 md:w-9 md:h-9" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                        <path d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z" />
                    </svg>

                    <div class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 md:start-4 dark:border-gray-900"></div>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownNotification" class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" aria-labelledby="dropdownNotificationButton">
                    <div class="block px-4 py-2 font-medium text-center text-gray-600 rounded-t-lg bg-gray-50 dark:bg-gray-700 dark:text-white">
                        Notifications
                    </div>
                    <div class="divide-y divide-gray-100 dark:divide-gray-600 max-h-[500px] overflow-y-auto">
                    <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600">
                            <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11" src="assets/img/logo.png" alt="Robert image">
                            </div>
                            <div class="w-full ps-3">
                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">
                                    <span class="bg-green-500 p-0.5 rounded-md font-semibold text-gray-900 dark:text-white">Success</span><br>
                                    Your booking room on <span class="font-medium text-gray-900 dark:text-white">ruang LSI 3 </span> is success.
                                </div>
                                <div class="text-xs text-blue-600 dark:text-blue-500">3 hours ago</div>
                            </div>
                        </a>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600">
                            <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11" src="assets/img/logo.png" alt="Robert image">
                            </div>
                            <div class="w-full ps-3">
                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">
                                    <span class="bg-red-500 p-0.5 rounded-md font-semibold text-gray-900 dark:text-white">Cancelled</span><br>
                                    Your class in <span class="font-medium text-gray-900 dark:text-white">ruang LSI 3 </span> is cancelled by something.
                                </div>
                                <div class="text-xs text-blue-600 dark:text-blue-500">3 hours ago</div>
                            </div>
                        </a>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600">
                            <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11" src="assets/img/logo.png" alt="Robert image">
                            </div>
                            <div class="w-full ps-3">
                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">
                                    <span class="bg-green-500 p-0.5 rounded-md font-semibold text-gray-900 dark:text-white">Success</span><br>
                                    Your booking room on <span class="font-medium text-gray-900 dark:text-white">ruang LSI 3 </span> is success.
                                </div>
                                <div class="text-xs text-blue-600 dark:text-blue-500">3 hours ago</div>
                            </div>
                        </a>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600">
                            <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11" src="assets/img/logo.png" alt="Robert image">
                            </div>
                            <div class="w-full ps-3">
                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">
                                    <span class="bg-yellow-500 p-0.5 rounded-md font-semibold text-gray-900 dark:text-white">On Process</span><br>
                                    Your booking room on <span class="font-medium text-gray-900 dark:text-white">ruang LSI 3 </span> is on process please waiting.
                                </div>
                                <div class="text-xs text-blue-600 dark:text-blue-500">3 hours ago</div>
                            </div>
                        </a>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600">
                            <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11" src="assets/img/logo.png" alt="Robert image">
                            </div>
                            <div class="w-full ps-3">
                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">
                                    <span class="bg-green-500 p-0.5 rounded-md font-semibold text-gray-900 dark:text-white">Success</span><br>
                                    Your booking room on <span class="font-medium text-gray-900 dark:text-white">ruang LSI 3 </span> is success.
                                </div>
                                <div class="text-xs text-blue-600 dark:text-blue-500">3 hours ago</div>
                            </div>
                        </a>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600">
                            <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11" src="assets/img/logo.png" alt="Robert image">
                            </div>
                            <div class="w-full ps-3">
                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">
                                    <span class="bg-green-500 p-0.5 rounded-md font-semibold text-gray-900 dark:text-white">Success</span><br>
                                    Your booking room on <span class="font-medium text-gray-900 dark:text-white">ruang LSI 3 </span> is success.
                                </div>
                                <div class="text-xs text-blue-600 dark:text-blue-500">3 hours ago</div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- profil -->

                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center gap-4">
                    <img class="w-8 h-8 md:w-10 md:h-10 rounded-full" src="assets/img/foto-profil.png" alt="">
                    <div class="font-medium hidden text-left dark:text-white md:block">
                        <div>Maulidin Zakaria</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">2241720160</div>
                    </div>
                    <div class="w-[24px] hidden md:block">
                        <img src="assets/img/bottom-icon.png" alt="bottom-icon">
                    </div>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                        <div class="font-medium ">TI - 2G</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownAvatarNameButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                    </ul>
                    <div class="py-2">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                    </div>
                </div>

                <a href="#" class="hidden">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px:3 py:1.5 md:px-4 md:py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Log In
                        <div class="w:3 h:3 md:w-5 md:h-5 ms-2">
                            <img src="assets/img/enter.png" alt="login">
                        </div>
                    </button>
                </a>
            </div>
        </div>
    </nav>

    <script src="assets/js/flowbite.min.js"></script>