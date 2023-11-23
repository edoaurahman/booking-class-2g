<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.min.css">
</head>
<style>
    /* =============================================================================
   HTML5 CSS Reset Minified - Eric Meyer
   ========================================================================== */

    html,
    body,
    div,
    span,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    abbr,
    address,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    samp,
    small,
    strong,
    sub,
    sup,
    var,
    b,
    i,
    dl,
    dt,
    dd,
    ol,
    ul,
    li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section,
    summary,
    time,
    mark,
    audio,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
        background: transparent
    }

    body {
        line-height: 1
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
        display: block
    }

    nav ul {
        list-style: none
    }

    blockquote,
    q {
        quotes: none
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
        content: none
    }

    a {
        margin: 0;
        padding: 0;
        font-size: 100%;
        vertical-align: baseline;
        background: transparent;
        text-decoration: none
    }

    mark {
        background-color: #ff9;
        color: #000;
        font-style: italic;
        font-weight: bold
    }

    del {
        text-decoration: line-through
    }

    abbr[title],
    dfn[title] {
        border-bottom: 1px dotted;
        cursor: help
    }

    table {
        border-collapse: collapse;
        border-spacing: 0
    }

    hr {
        display: block;
        height: 1px;
        border: 0;
        border-top: 1px solid #ccc;
        margin: 1em 0;
        padding: 0
    }

    input,
    select {
        vertical-align: middle
    }

    li {
        list-style: none
    }


    /* =============================================================================
   My CSS
   ========================================================================== */

    /* ---- base ---- */

    html,
    body {
        width: 100%;
        height: 100%;
        background: #111;
    }

    html {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    body {
        font: normal 75% Arial, Helvetica, sans-serif;
    }

    canvas {
        display: block;
        vertical-align: bottom;
    }


    /* ---- stats.js ---- */

    .count-particles {
        background: #000022;
        position: absolute;
        top: 48px;
        left: 0;
        width: 80px;
        color: #13E8E9;
        font-size: .8em;
        text-align: left;
        text-indent: 4px;
        line-height: 14px;
        padding-bottom: 2px;
        font-family: Helvetica, Arial, sans-serif;
        font-weight: bold;
    }

    .js-count-particles {
        font-size: 1.1em;
    }

    #stats,
    .count-particles {
        -webkit-user-select: none;
        margin-top: 5px;
        margin-left: 5px;
    }

    #stats {
        border-radius: 3px 3px 0 0;
        overflow: hidden;
    }

    .count-particles {
        border-radius: 0 0 3px 3px;
    }


    /* ---- particles.js container ---- */

    #particles-js {
        width: 100%;
        height: 100%;
        background-color: #161616;
        background-image: url('');
        background-size: cover;
        background-position: 50% 50%;
        background-repeat: no-repeat;
    }
</style>

<body>
    <div class="flex justify-center h-screen overflow-hidden">
        <div id="particles-js" class="blur-sm"></div>
        <img class="w-1/2 object-cover opacity-40 bg-no-repeat blur-sm" src="https://kampusimpian.com/wp-content/uploads/2020/10/Polinema.jpg" alt="" srcset="">
        <section class="z-50 absolute sm:w-screen md:w-full h-screen">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <img class="h-[175px] mx-auto" src="assets/img/logo.png" alt="">
                        <h2 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white text-center">
                            Selamat Datang Di<br>Peminjaman Ruang Polinema
                        </h2>
                        <form class="space-y-4 md:space-y-6" action="/login" method="post">
                            <div>
                                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP/NIM</label>
                                <input type="username" name="username" id="username" value="<?= $username ?? '' ?>" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIP/NIM" required>
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <div class="flex items-center">
                                    <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    <i id="toggleShowPassword" class="dark:text-white text-gray-800 bi bi-eye-slash ml-[-30px] text-lg"></i>
                                </div>
                            </div>
                            <?php
                            if (isset($error)) { ?>
                                <div class="text-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                    <?= $error ?>
                                </div>
                            <?php } else { ?>
                                <div class='p-2'></div>
                            <?php } ?>
                            <button type="submit" class="w-full text-white bg-blue-400 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        const togglePassword = document.querySelector("#toggleShowPassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function() {
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            this.classList.toggle("bi-eye");
        });
    </script>
    <script src="assets/js/particles.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>