// Pemilihan hari
document.addEventListener("DOMContentLoaded", function () {
  var tanggalSekarangElement = document.getElementById("tanggalSekarang");
  var satuHariKedepanElement = document.getElementById("satuHariKedepan");
  var duaHariKedepanElement = document.getElementById("duaHariKedepan");
  var tigaHariKedepanElement = document.getElementById("tigaHariKedepan");
  var empatHariKedepanElement = document.getElementById("empatHariKedepan");
  var limaHariKedepanElement = document.getElementById("limaHariKedepan");
  var enamHariKedepanElement = document.getElementById("enamHariKedepan");
  var tujuhHariKedepanElement = document.getElementById("tujuhHariKedepan");

  // Mendapatkan tanggal saat ini
  var tanggalSekarang = new Date();
  // Info Tgl saat ini
  var informasiTanggalSekarang = getInformasiTanggal(tanggalSekarang);
  tanggalSekarangElement.innerHTML = informasiTanggalSekarang;

  // Mendapatkan 1 hari ke depan
  var satuHariKedepan = new Date();
  satuHariKedepan.setDate(satuHariKedepan.getDate() + 1);
  // Info Tgl 1+
  var informasisatuHariKedepan = getInformasiTanggal(satuHariKedepan);
  satuHariKedepanElement.innerHTML = informasisatuHariKedepan;

  // Mendapatkan 2 hari ke depan
  var duaHariKedepan = new Date();
  duaHariKedepan.setDate(duaHariKedepan.getDate() + 2);
  // Info Tgl 2+
  var informasiduaHariKedepan = getInformasiTanggal(duaHariKedepan);
  duaHariKedepanElement.innerHTML = informasiduaHariKedepan;

  // Mendapatkan 3 hari ke depan
  var tigaHariKedepan = new Date();
  tigaHariKedepan.setDate(tigaHariKedepan.getDate() + 3);
  // Info Tgl 3+
  var informasitigaHariKedepan = getInformasiTanggal(tigaHariKedepan);
  tigaHariKedepanElement.innerHTML = informasitigaHariKedepan;

  // Mendapatkan 4 hari ke depan
  var empatHariKedepan = new Date();
  empatHariKedepan.setDate(empatHariKedepan.getDate() + 4);
  // Info Tgl 4+
  var informasiempatHariKedepan = getInformasiTanggal(empatHariKedepan);
  empatHariKedepanElement.innerHTML = informasiempatHariKedepan;

  // Mendapatkan 5 hari ke depan
  var limaHariKedepan = new Date();
  limaHariKedepan.setDate(limaHariKedepan.getDate() + 5);
  // Info Tgl 5+
  var informasilimaHariKedepan = getInformasiTanggal(limaHariKedepan);
  limaHariKedepanElement.innerHTML = informasilimaHariKedepan;

  // Mendapatkan 6 hari ke depan
  var enamHariKedepan = new Date();
  enamHariKedepan.setDate(enamHariKedepan.getDate() + 6);
  // Info Tgl 6+
  var informasienamHariKedepan = getInformasiTanggal(enamHariKedepan);
  enamHariKedepanElement.innerHTML = informasienamHariKedepan;

  // Mendapatkan 7 hari ke depan
  var tujuhHariKedepan = new Date();
  tujuhHariKedepan.setDate(tujuhHariKedepan.getDate() + 7);
  // Info Tgl 7+
  var informasiTujuhHariKedepan = getInformasiTanggal(tujuhHariKedepan);
  tujuhHariKedepanElement.innerHTML = informasiTujuhHariKedepan;
});

function getInformasiTanggal(tanggal) {
  var hari = tanggal.toLocaleDateString("id-ID", { weekday: "long" });
  var tanggalStr = tanggal.getDate();
  var bulan = tanggal.toLocaleDateString("id-ID", { month: "long" });
  var tahun = tanggal.getFullYear();

  return hari + ", " + tanggalStr + " " + bulan + " " + tahun;
}

// kalimat
function transitionButton() {
  var More = document.getElementById("readMore");
  var Less = document.getElementById("readLess");
  var Icon = document.getElementById("iconMoreAndLess");
  More.classList.toggle("hidden");
  Less.classList.toggle("hidden");
  Icon.classList.toggle("rotate-180");
}
