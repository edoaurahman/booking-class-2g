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

// =========== Filter Jam dekstop ===========
document.addEventListener("DOMContentLoaded", function () {
  // Mendapatkan elemen form1 dan form2
  const $form1 = document.getElementById("bedrooms-input");
  const $form2 = document.getElementById("bedrooms-input2");

  // Fungsi untuk memperbarui form2 berdasarkan form1
  function updateForm2() {
    // Mendapatkan nilai terkini dari form1 dan form2
    const value1 = parseInt($form1.value, 10);
    let value2 = parseInt($form2.value, 10);

    // Memastikan form2 bertambah 1 dari form1 jika form2 kurang dari form1
    if (value1 + 1 > value2) {
      $form2.value = Math.min(value1 + 1, 15);
    }
    if (value2 <= value1) {
      $form2.value = Math.min(value1 + 1, 15); // Tambahkan 1 ke form2 agar lebih besar dari form1, tapi tidak lebih dari 15
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

  // Menambahkan penangan acara untuk tombol decrement pada form1
  document
    .getElementById("decrement-button")
    .addEventListener("click", function () {
      // Mengurangkan satu dari nilai form1, tapi tidak kurang dari 1
      $form1.value = Math.max(parseInt($form1.value, 10) - 1, 1);
      updateForm2(); // Memperbarui nilai form2 setelah form1 diperbarui
    });

  // Menambahkan penangan acara untuk input pada form1
  $form1.addEventListener("input", updateForm2);

  // Menambahkan penangan acara untuk tombol increment pada form2
  document
    .getElementById("increment-button2")
    .addEventListener("click", function () {
      let value2 = parseInt($form2.value, 10);

      // Menambah satu ke nilai form2, tapi tidak lebih dari 15
      $form2.value = Math.min(value2 + 1, 15);
      updateForm2(); // Memperbarui nilai form2 setelah form2 diperbarui
    });

  // Menambahkan penangan acara untuk tombol decrement pada form2
  document
    .getElementById("decrement-button2")
    .addEventListener("click", function () {
      let value1 = parseInt($form1.value, 10);
      let value2 = parseInt($form2.value, 10);

      // Mengurangkan satu dari nilai form2, tapi tidak kurang dari atau sama dengan form1
      $form2.value = Math.max(value2 - 1, value1 + 1);
      updateForm2(); // Memperbarui nilai form2 setelah form2 diperbarui
    });
  // Menambahkan penangan acara untuk tombol "Set Max"
  document
    .getElementById("set-max-button")
    .addEventListener("click", function () {
      $form2.value = 15;
      updateForm2();
    });
});

const buttonPilihJam = document.getElementById("buttonPilihJam");
const pilihJam = document.getElementById("pilihJam");

buttonPilihJam.addEventListener("click", () => {
  pilihJam.classList.toggle("hidden");
  console.log(pilihJam.classList);
});

// =========== Filter Lantai dekstop ===========
const buttonPilihLantai = document.getElementById("buttonPilihLantai");
const pilihLantai = document.getElementById("pilihLantai");

buttonPilihLantai.addEventListener("click", () => {
  pilihLantai.classList.toggle("hidden");
  console.log(pilihLantai.classList);
});

// =========== Filter Jam Mobile ===========

const buttonPilihJamSidebar = document.getElementById("buttonPilihJamSidebar");
const pilihJamSidebar = document.getElementById("pilihJamSidebar");

buttonPilihJamSidebar.addEventListener("click", () => {
  pilihJamSidebar.classList.toggle("hidden");
  console.log(pilihJamSidebar.classList);
});

// =========== Filter Lantai Mobile ===========
const buttonPilihLantaiSidebar = document.getElementById(
  "buttonPilihLantaiSidebar"
);
const pilihLantaiSidebar = document.getElementById("pilihLantaiSidebar");

buttonPilihLantaiSidebar.addEventListener("click", () => {
  pilihLantaiSidebar.classList.toggle("hidden");
  console.log(pilihLantaiSidebar.classList);
});
