<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
</head>
<style>
    body {
        height: 100vh;
    }
</style>

<body>
    <section class="flex items-center h-full p-16 dark:bg-gray-900 dark:text-gray-100">
        <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
            <div class="max-w-md text-center">
                <h2 class="mb-8 font-extrabold text-9xl dark:text-gray-600">
                    <span class="sr-only">Error</span>404
                </h2>
                <p class="mb-5 text-2xl font-semibold md:text-3xl">Halaman yang anda cari tidak ditemukan.</p>

                <a rel="noopener noreferrer" href="/" class="px-8 py-3 font-semibold rounded bg-violet-400 text-gray-900">Back to homepage</a>
            </div>
        </div>
    </section>
    <script>
        // cek dark mode atau tidak
        const isDarkMode = localStorage.getItem('theme') === 'dark' ? true : false;
        const html = document.querySelector('html');

        if (isDarkMode) {
            html.classList.add('dark');
        }
    </script>
</body>

</html>