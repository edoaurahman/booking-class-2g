<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$csrf = bin2hex(random_bytes(32));
$_SESSION['csrf'] = $csrf;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="/assets/css/style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="w-full sticky top-0 z-50 bg-navy_blue border-gray-200 dark:bg-gray-800">
        <div class="flex flex-wrap items-center justify-between px-3 py-2 mx-2 md:mx-4">

            <!-- logo -->

            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="/assets/img/logo.png" class="h-8" alt="Smart Booking Logo" />
                <span class="self-center font-sans text-xl font-semibold sm:text-2xl whitespace-nowrap text-white">Booking Room <span id="text-polinema" class="text-sky-500 hidden">Polinema</span></span>
            </a>

            <!-- notifikasi -->

            <div class="flex items-center space-x-2 md:space-x-0">
                <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="relative right-0 md:right-5 inline-flex items-center text-sm font-medium text-center text-white hover:text-gray-400 focus:outline-none dark:hover:text-white dark:text-gray-400" type="button" data-dropdown-trigger="hover" data-dropdown-delay="200">
                    <i class="fa-solid fa-bell text-[25px]"></i>
                    <div class="absolute block w-3 h-3 bg-red-500 border-2 border-navy_blue rounded-full -top-0.5 start-2.5 md:start-3 dark:border-gray-900"></div>
                </button>

                <!-- Dropdown menu -->
                <div x-data="notificationList" id="dropdownNotification" class="z-20 hidden w-[85%] md:w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" aria-labelledby="dropdownNotificationButton">
                    <div class="block px-4 py-2 font-medium text-center text-gray-600 rounded-t-lg bg-gray-50 dark:bg-gray-700 dark:text-white">
                        Notifications
                    </div>
                    <div class="divide-y divide-gray-100 dark:divide-gray-600 max-h-[500px] overflow-y-auto">
                        <?php if (empty($notification)) : ?>
                            <div class="w-full h-20">
                                <div class="flex justify-center items-center h-full">
                                    <span class="text-gray-400 dark:text-gray-500">No notification</span>
                                </div>
                            </div>
                        <?php endif ?>
                        <?php foreach ($notification as $key => $item) : ?>
                            <?php extract($item); ?>
                            <div <?= $level == 'dosen' ? 'id="accordion-collapse-' . $key . '"' : 'accordion-collapse' ?> data-accordion="collapse">
                                <span <?= $level == 'dosen' ? 'aria-controls="accordion-collapse-body-' . $key . '"' : '' ?> <?= $level == 'dosen' ? 'data-accordion-target="#accordion-collapse-body-' . $key . '"' : '' ?> aria-expanded="false" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11" src="/assets/img/logo.png" alt="Robert image">
                                    </div>
                                    <div class="w-full ps-3 text-gray-500 text-sm mb-1.5 dark:text-gray-400">
                                        <?php if ($status_booking === 'success') : ?>
                                            <span class="bg-green-500 p-0.5 rounded-md font-semibold text-white">Success</span><br>
                                            Your booking room on <span class="font-medium text-gray-900 dark:text-white"><?= $nama_ruang ?> </span> is success.
                                        <?php elseif ($status_booking === 'onprocess') : ?>
                                            <span class="bg-yellow-500 p-0.5 rounded-md font-semibold text-white">On Process</span><br>
                                            Your booking room on <span class="font-medium text-gray-900 dark:text-white"><?= $nama_ruang ?> </span> is on process please waiting.
                                        <?php elseif ($status_booking === 'canceled') : ?>
                                            <span class="bg-red-500 p-0.5 rounded-md font-semibold text-white">Cancelled</span><br>
                                            Your class in <span class="font-medium text-gray-900 dark:text-white"><?= $nama_ruang ?> </span> is cancelled by something.
                                        <?php elseif ($status_booking === 'done') : ?>
                                            <span class="bg-gray-500 p-0.5 rounded-md font-semibold text-white">done</span><br>
                                            Your class in <span class="font-medium text-gray-900 dark:text-white"><?= $nama_ruang ?> </span> is done.
                                        <?php elseif ($status_booking === 'urgent') : ?>
                                            <span class="bg-red-700 p-0.5 rounded-md font-semibold text-white">urgent</span><br>
                                            Your class in <span class="font-medium text-gray-900 dark:text-white"><?= $nama_ruang ?> </span> is on process please waiting.
                                        <?php elseif ($status_booking === 'waiting_dosen_verification') : ?>
                                            <span class="bg-bingu p-0.5 rounded-md font-semibold text-white">waiting verification</span><br>
                                            Your class in <span class="font-medium text-gray-900 dark:text-white"><?= $nama_ruang ?></span> is waiting lecture verification.
                                        <?php endif ?>
                                        <div class="text-xs text-blue-600 dark:text-blue-500" x-text="formatCreatedAt('<?= $created_at ?>')"></div>
                                    </div>
                                </span>
                                <?php if ($status_booking === 'waiting_dosen_verification') : ?>
                                    <div <?= $level == 'dosen' ? 'id="accordion-collapse-body-' . $key . '"' : '' ?> class="hidden">
                                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                                            <div class="grid grid-cols-4 gap-4">
                                                <p class="mb-2 text-gray-500 dark:text-gray-300">Jam Mulai</p>
                                                <p class="mb-2 text-gray-500 dark:text-gray-300"> <?= $jam_mulai ?></p>
                                                <p class="mb-2 text-gray-500 dark:text-gray-300">Jam Selesai</p>
                                                <p class="mb-2 text-gray-500 dark:text-gray-300"><?= $jam_selesai ?></p>
                                                <p class="mb-2 text-gray-500 dark:text-gray-300">Kelas</p>
                                                <p class="mb-2 text-gray-500 dark:text-gray-300"><?= $nama_kelas ?></p>
                                                <p class="mb-2 text-gray-500 dark:text-gray-300">Dosen</p>
                                                <div class="col-span-2">
                                                    <p class="mb-2 text-gray-500 dark:text-gray-300"><?= $nama ?></p>
                                                </div>
                                            </div>
                                            <p class="mb-2 text-gray-500 dark:text-gray-400">Verification Booking</p>
                                            <div class="flex">
                                                <form action="/booking/dosen/verificaton" method="post">
                                                    <input type="hidden" name="id_booking" value="<?= $id_booking ?>">
                                                    <input type="hidden" name="status" value="onprocess">
                                                    <input type="submit" value="Proses" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"></input>
                                                </form>
                                                <form action="/booking/dosen/verificaton" method="post">
                                                    <input type="hidden" name="id_booking" value="<?= $id_booking ?>">
                                                    <input type="hidden" name="status" value="canceled">
                                                    <input type="submit" value="Tolak" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"></input>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif ?>
                                <div <?= $level == 'dosen' ? 'id="accordion-collapse-body-' . $key . '"' : '' ?> class="hidden">
                                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                                        <div class="grid grid-cols-2">
                                            <p class="mb-2 text-gray-500 dark:text-gray-300">Jam Mulai</p>
                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><?= $jam_mulai ?></p>
                                            <p class="mb-2 text-gray-500 dark:text-gray-300">Jam Selesai</p>
                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><?= $jam_selesai ?></p>
                                            <p class="mb-2 text-gray-500 dark:text-gray-300">Kelas</p>
                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><?= $nama_kelas ?></p>
                                            <p class="mb-2 text-gray-500 dark:text-gray-300">Dosen</p>
                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><?= $nama ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>

                <!-- profil -->

                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="group flex items-center gap-2 md:gap-4" data-dropdown-trigger="hover" data-dropdown-delay="200">
                    <img class="w-7 h-7 md:w-9 md:h-9 rounded-full group-hover:ring-white group-hover:ring-1" src="/assets/img/foto-profil.png" alt="">
                    <div class="font-medium hidden text-left text-white md:block" id="nama">
                        <div><?= $user->nama ?? '' ?></div>
                        <div class="text-sm text-white-400 dark:text-gray-400">
                            <?= ($level == 'mahasiswa') ? $user->nim ?? '' : ($level == 'dosen' ? $user->nip ?? '' : '') ?>
                        </div>
                    </div>
                    <div class=" w-[17px] md:w-[24px] block group-hover:rotate-180 duration-300 ease-in-out">
                        <img src="/assets/img/bottom-icon.png" alt="bottom-icon">
                    </div>
                </button>

                <!-- Dropdown menu -->

                <div id="dropdownAvatarName" class="z-10 hidden bg-white rounded-lg shadow w-44 dark:bg-gray-700">
                    <div class="divide-y divide-gray-300  dark:divide-gray-600">
                        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white md:hidden">
                            <div class="font-medium "><?= $user->nama ?? '' ?></div>
                        </div>
                        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                            <div class="font-medium "><?= $user->nama_kelas ?? 'Dosen' ?></div>
                        </div>
                        <ul class=" text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownAvatarNameButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                            </li>
                        </ul>
                    </div>

                    <!-- dark mode toggle -->

                    <div class="border-t-[1px] border-gray-300 dark:border-gray-600">
                        <form action="/signout" method="post">
                            <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white w-full text-left">Sign out</button>
                        </form>
                        <div class="pt-2 pb-5 px-3 w-full flex justify-end">
                            <button class="w-[55px] h-6 rounded-full bg-gray-400 flex items-center transition duration-300 focus:outline-none shadow dark:bg-white" id="buttonToggle">
                                <div id="switch-toggle" class="w-8 h-8 relative rounded-full transition duration-500 transform p-1 text-white flex items-center justify-center">
                                </div>
                            </button>
                        </div>
                    </div>
                </div>

                <a href="/login" class="items-center rounded-md inline-flex bg-bingu px-3 py-1.5  md:text-[19px] text-[12px] text-white shadow hover:bg-bingu_hover focus:outline-none focus:ring active:bg-bingu" id="loginButton">
                    Log In
                    <div class="hidden sm:block w:3 h:3 md:w-5 md:h-5 ms-2">
                        <img src="/assets/img/enter.png" alt="login">
                    </div>
                </a>
            </div>
        </div>
    </nav>