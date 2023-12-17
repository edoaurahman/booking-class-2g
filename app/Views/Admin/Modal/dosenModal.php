<form class="p-4 md:p-5" method="POST" action="/admin/dosen/edit">
    <div class="grid gap-4 mb-4 grid-cols-2">
        <div class="col-span-1">
            <label for="nip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP</label>
            <input type="text" name="nip" id="nip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="12345678910" required="">
        </div>
        <div class="col-span-1">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Dosen</label>
            <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Lengkap" required="">
        </div>
        <div class="col-span-1">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="text" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="abc123#$%" required="">
        </div>
        <div class="col-span-1">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="username@gamil.com" required="">
        </div>
        <div class="col-span-1">
            <label for="tglLahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
            <input type="date" name="tglLahir" id="tglLahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        </div>
        <div class="col-span-1">
            <label for="tmptLahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
            <input type="text" name="tmptLahir" id="tmptLahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="cth: Malang" required="">
        </div>
        <div class="col-span-2">
            <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</div>
            <div class="flex flex-row w-full justify-evenly">
                <div class="flex items-center me-4">
                    <input id="laki-laki" type="radio" value="L" name="jenis_kelamin" class="w-4 h-4 text-biru bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="laki-laki" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-Laki</label>
                </div>
                <div class="flex items-center me-4">
                    <input id="perempuan" type="radio" value="P" name="jenis_kelamin" class="w-4 h-4 text-biru bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="perempuan" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                </div>
            </div>
        </div>
    </div>
    <div class="flex w-full justify-end items-center">
        <input value="Add" type="submit" class="text-white items-center bg-indigo-600 hover:bg-bingu_hover focus:ring-4 focus:outline-none focus:ring-indigo-900 font-medium rounded-lg text-sm px-5 py-2.5 text-end ">
        </input>
    </div>
</form>