<!-- font awesome -->
<title>Admin</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="py-4 px-16 dark:bg-[#ffffff] dark:text-black" id="ruang">
    <div data-dial-init class="fixed end-6 bottom-6 group animate-bounce">
        <button type="button" onclick="printJS('printJS-form', 'html')" data-dial-toggle="speed-dial-menu-default"
            aria-controls="speed-dial-menu-default" aria-expanded="false"
            class="flex items-center justify-center text-white bg-blue-700 rounded-full w-14 h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
            <i class="fa-solid fa-print  text-xl"></i>
            <span class="sr-only">Open actions menu</span>
        </button>
    </div>
    <div class="print px-10 pt-4" id="printJS-form">
        <link rel="stylesheet" href="/assets/css/style.css">
        <div class="grid grid-cols-6 px-9 py-6 items-center">
            <div class="logo ">
                <img src="/assets/img/logopolinema.png" alt="" class="bg-cover w-[110px]">
            </div>
            <div class="col-span-5 text-center">
                <p class="text-base font-surat">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET, DAN TEKNOLOGI</p>
                <p class="text-sm font-surat font-bold">POLITEKNIK NEGERI MALANG</p>
                <p class="text-xs font-surat">Jl. Soekarno Hatta No.9 Jatimulyo, Lowokwaru, Malang, 65141 </p>
                <p class="text-xs font-surat">Telp. (0341) 404424 – 404425, Fax (0341) 404420,</p>
                <p class="text-xs font-surat">http://www.polinema.ac.id</p>
            </div>
        </div>
        <div class="border-2 border-b-black text-justify"></div>
        <div class="bodySurat text-xs mt-4 font-">
            <div class="flex justify-between">
                <div class="font-surat">
                    <p>Nomor &emsp;: <span id="nomor-report"></span>/HCK/polinema/X/
                        <?= $year ?>
                    </p>
                    <p>Hal &emsp;&emsp;&ensp;: Peminjaman Kelas</p>
                    <p>Bulan &ensp;&ensp;&ensp;:
                        <?= $month_name ?>
                    </p>
                    <p>Tahun &ensp;&ensp;&ensp;:
                        <?= $year ?>
                    </p>
                </div>
                <div class="font-surat">
                    <p><?= $date = date("d-m-Y") ?></p>
                </div>
            </div>


            <div class="relative shadow-md sm:rounded-lg mt-5">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Peminjam
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Pesan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Pakai
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Dosen Penanggung Jawab
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kelas
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ruang
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jam Mulai
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jam Selesai
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Keterangan
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($report as $key => $item): ?>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th class="px-6 py-4">
                                    <?= $key + 1 ?>
                                </th>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $item['mahasiswa'] ?? $item['dosen'] ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?= $item['tanggal_pesan'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $item['tanggal_pakai'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $item['dosen'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $item['kelas'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $item['ruang'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $item['jam_mulai'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $item['jam_selesai'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $item['keterangan'] ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="grid grid-cols-6 gap-4 text-xs font-surat mt-14">
            <div class="col-start-5 col-end-7 text-center">
                <p>Ketua Jurusan Teknologi Informasi,</p>
                <br><br><br><br>
                <p>Dr.Eng. Rosa Andrie Asmara, ST, MT.</p>
                <p>NIP. 198010102005011001</p>
            </div>

        </div>
    </div>

</div>
<link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>

<script>
    // program to generate random strings

    // declare all characters
    const characters = '0123456789';

    function generateString(length) {
        let result = ' ';
        const charactersLength = characters.length;
        for (let i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }

        return result;
    }
    document.getElementById("nomor-report").innerHTML = generateString(3);

    // console.log(generateString(3));
</script>