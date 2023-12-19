<form class="p-4 md:p-5" method="POST" action="/admin/ruang/edit">
    <div class="grid gap-4 mb-4 grid-cols-2">
        <input type="hidden" name="id_ruang" value="<?= $id; ?>">
        <div class="col-span-1">
            <label for="kode_ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Ruang</label>
            <input type="text" name="kode_ruang" id="kode_ruang" value="<?= $kode_ruang; ?>"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="RT_05" required="">
        </div>
        <div class="col-span-1">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Ruang</label>
            <input type="text" name="nama" id="nama" value="<?= $nama; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ruang Teori_05" required="">
        </div>
        <div class="col-span-1">
            <label for="jenis_ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Ruang</label>
            <select name="jenis_ruang" id="jenis_ruang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <option >Select Ruang</option>
                <option <?= ($jenis_ruang === 'Ruang Teori') ? 'selected' : '' ?> value="JR001">Ruang Teori</option>
                <option <?= ($jenis_ruang === 'Ruang Praktikum') ? 'selected' : '' ?> value="JR002">Ruang Praktikum</option>
                <option <?= ($jenis_ruang === 'Ruang Gabungan') ? 'selected' : '' ?> value="JR003">Ruang Gabungan</option>
            </select>
        </div>
        <div class="col-span-1">
            <label for="lantai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lantai</label>
            <select id="lantai" name="lantai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <option >Select Lantai</option>
                <option <?= ($lantai === 'Lantai 5') ? 'selected' : '' ?> value="L001">Lantai 5</option>
                <option <?= ($lantai === 'Lantai 6') ? 'selected' : '' ?> value="L002">Lantai 6</option>
                <option <?= ($lantai === 'Lantai 7') ? 'selected' : '' ?> value="L003">Lantai 7</option>
                <option <?= ($lantai === 'Lantai 8') ? 'selected' : '' ?> value="L004">Lantai 8</option>
            </select>
        </div>
        <div class="col-span-2">
            <label for="deskripsi_ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Ruang</label>
            <textarea id="deskripsi_ruang" name="deskripsi_ruang" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="deskripsi ruang"></textarea>
        </div>
        <div class="col-span-2">
            <label for="gambar_ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar Ruangan</label>
            <input type="file" name="gambar_ruang" id="gambar_ruang" class=" text-white">
        </div>
    </div>
    <div class="flex w-full justify-end items-center">
        <button type="submit" class="text-white items-center bg-indigo-600 hover:bg-bingu_hover focus:ring-4 focus:outline-none focus:ring-indigo-900 font-medium rounded-lg text-sm px-5 py-2.5 text-end ">
            Update
        </button>
    </div>
</form>