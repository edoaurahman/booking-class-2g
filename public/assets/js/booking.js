// =========== Filter Hari ===========

document.addEventListener("DOMContentLoaded", function () {
  var today = new Date();
  var nextWeek = new Date();
  nextWeek.setDate(today.getDate() + 6);

  var inputTanggal = document.getElementById("tanggal");

  // Atur atribut 'min' untuk membatasi tanggal minimum
  inputTanggal.setAttribute("min", formatDate(today));

  // Atur atribut 'max' untuk membatasi tanggal maksimum
  inputTanggal.setAttribute("max", formatDate(nextWeek));
});

function formatDate(date) {
  var dd = String(date.getDate()).padStart(2, "0");
  var mm = String(date.getMonth() + 1).padStart(2, "0");
  var yyyy = date.getFullYear();

  return yyyy + "-" + mm + "-" + dd;
}

// =========== Filter Jam ===========
document.addEventListener("DOMContentLoaded", function () {
  // Mendapatkan elemen form1 dan form2
  const $form1 = document.getElementById("bedrooms-input");
  const $form2 = document.getElementById("bedrooms-input2");

  // Fungsi untuk memperbarui form2 berdasarkan form1
  function updateForm2() {
    // Mendapatkan nilai terkini dari form1 dan form2
    const value1 = parseInt($form1.value, 10);
    const value2 = parseInt($form2.value, 10);

    // Memastikan form2 bertambah dua dari form1 jika form2 kurang dari form1
    if (value1 + 1 > value2) {
      $form2.value = Math.min(value1 + 1, 15);
    }
    if (value2 <= value1) {
      $form2.value = Math.min(value1 + 1, 15); // Tambahkan 2 ke form2 agar lebih besar dari form1, tapi tidak lebih dari 15
    }
  }

  // Menambahkan penangan acara untuk tombol increment pada form1
  document
    .getElementById("increment-button")
    .addEventListener("click", function () {
      // Menambah satu ke nilai form1, tapi tidak lebih dari 14 (sesuai permintaan)
      $form1.value = Math.min(parseInt($form1.value, 10) + 1, 14);
      updateForm2(); // Memperbarui nilai form2 setelah form1 diperbarui
    });

  // Menambahkan penangan acara untuk input pada form1
  $form1.addEventListener("input", updateForm2);

  // Menambahkan penangan acara untuk input pada form2
  $form2.addEventListener("input", function () {
    updateForm2(); // Memperbarui nilai form2 saat form2 diubah secara manual
  });
});

const buttonPilihJam = document.getElementById("buttonPilihJam");
const pilihJam = document.getElementById("pilihJam");

buttonPilihJam.addEventListener("click", () => {
  pilihJam.classList.toggle("hidden");
  console.log(pilihJam.classList);
});

// =========== Filter Lantai ===========
const buttonPilihLantai = document.getElementById("buttonPilihLantai");
const pilihLantai = document.getElementById("pilihLantai");

buttonPilihLantai.addEventListener("click", () => {
  pilihLantai.classList.toggle("hidden");
  console.log(pilihLantai.classList);
});

// =========== Filter Sidebar ===========
// document.addEventListener("DOMContentLoaded", function () {
//   const toggleButton = document.getElementById("buttonsidebar");
//   const sidebar = document.getElementById("drawer-navigation");
//   const overlay = document.getElementById("drawer-navigation");

//   toggleButton.addEventListener("click", function () {
//     sidebar.classList.toggle("translate-x-0");
//     overlay.classList.toggle("opacity-100");
//     console.log("masuk");
//   });

//   overlay.addEventListener("click", function () {
//     sidebar.classList.remove("translate-x-0");
//     overlay.classList.remove("opacity-100");
//     console.log("kk");
//   });
// });
