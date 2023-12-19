<form class="p-4 md:p-5" method="POST" action="/admin/jadwal/edit">
    <input type="hidden" name="id_jadwal" value="<?= $id; ?>">
    <div class="grid gap-4 mb-4 grid-cols-2">
        <div class="col-span-1">
            <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
            <input id="kelas" list="listKelas" name="kelas" value="<?= $kelas; ?>" placeholder="cth: TI-2G" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            <datalist id="listKelas">
                <?php foreach ($listKelas as $item) : ?>
                    <option value="<?= $item['id_kelas'] ?>"><?= $item['nama_kelas'] ?></option>
                <?php endforeach ?>
            </datalist>
        </div>
        <div class="col-span-1">
            <label for="matakuliah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mata Kuliah</label>
            <input id="matakuliah" list="listMK" name="matakuliah" value="<?= $matakuliah; ?>" placeholder="cth: Dasar Pemrograman Web" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            <datalist id="listMK">
                <?php foreach ($listMK as $item) : ?>
                    <option value="<?= $item['id_matkul'] ?>"><?= $item['nama_matkul'] ?></option>
                <?php endforeach ?>
            </datalist>
        </div>
        <div class="col-span-1">
            <label for="dosen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosen</label>
            <input id="dosen" list="listDosen" name="dosen" value="<?= $dosen; ?>" placeholder="Pilih Dosen ..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            <datalist id="listDosen">
                <?php foreach ($listDosen as $item) : ?>
                    <option value="<?= $item['nip'] ?>"><?= $item['nama'] ?></option>
                <?php endforeach ?>
            </datalist>
        </div>
        <div class="col-span-1">
            <label for="ruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ruang</label>
            <input id="ruang" list="listRuang" name="ruang" value="<?= $ruang; ?>" placeholder="Pilih Ruang ..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            <datalist id="listRuang">
                <?php foreach ($listRuang as $item) : ?>
                    <option value="<?= $item['id_ruang'] ?>"><?= $item['nama_ruang'] ?></option>
                <?php endforeach ?>
            </datalist>
        </div>
        <div class="col-span-1">
            <label for="hari" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hari</label>
            <input id="hari" list="listHari" name="hari" value="<?= $hari; ?>" placeholder="Pilih Hari ..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            <datalist id="listHari">
                <?php foreach ($listHari as $item) : ?>
                    <option value="<?= $item['id_hari'] ?>"><?= $item['nama_hari'] ?></option>
                <?php endforeach ?>
            </datalist>
        </div>
        <div class="col-span-1">
            <div class="flex w-full gap-2">
                <div class="w-full">
                    <label for="jam_mulai" class="text-center block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Mulai</label>
                    <div class="relative flex items-center px-3">
                        <input type="number" id="jam_mulai" oninput="changeValueJamMulai()" value="<?= $jam_mulai; ?>" min="1" max="11" class="text-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="1" required>
                    </div>
                </div>
                <div class="w-full">
                    <label for="jam_selesai" class="text-center block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Selesai</label>
                    <div class="relative flex items-center px-3">
                        <input type="number" id="jam_selesai" oninput="changeValueJamSelesai()" value="<?= $jam_selesai; ?>" min="1" max="11" class="text-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="1" required>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" name="jam_mulai" id="id_jam_mulai" value="<?= $id_jam_mulai; ?>">
    <input type="hidden" name="jam_selesai" id="id_jam_selesai" value="<?= $id_jam_selesai; ?>">
    <div class="flex w-full justify-end items-center">
        <button type="submit" class="text-white items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-end dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Update
        </button>
    </div>
</form>