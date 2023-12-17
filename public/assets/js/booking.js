const searchRuang = document.getElementById("search-ruang");
// button jam mulai dan selesai
const buttonDecremment1 = document.getElementById("decrement-button-1")
const buttonIncrement1 = document.getElementById("increment-button-1")

const buttonDecremment2 = document.getElementById("decrement-button-2")
const buttonIncrement2 = document.getElementById("increment-button-2")

// button jam mulai dan selesai sidebar
const buttonDecremmentSidebar1 = document.getElementById("decrement-button-sidebar1")
const buttonIncrementSidebar1 = document.getElementById("increment-button-sidebar1")

const buttonDecremmentSidebar2 = document.getElementById("decrement-button-sidebar2")
const buttonIncrementSidebar2 = document.getElementById("increment-button-sidebar2")

const setMaxButton = document.getElementById("set-max-button")
const setMaxButtonSidebar = document.getElementById("set-max-button-sidebar")
// =========== Filter Hari ===========

var today = new Date();
var nextWeek = new Date();
nextWeek.setDate(today.getDate() + 6);

var inputTanggal = document.getElementById("tanggal");
var inputTanggalSidebar = document.getElementById("tanggal-sidebar");

// Atur atribut 'min' untuk membatasi tanggal minimum
inputTanggal.setAttribute("min", formatDate(today));

// Atur atribut 'max' untuk membatasi tanggal maksimum
inputTanggal.setAttribute("max", formatDate(nextWeek));

// Atur atribut 'min' untuk membatasi tanggal sidebar minimum
inputTanggalSidebar.setAttribute("min", formatDate(today));

// Atur atribut 'max' untuk membatasi tanggal sidebar maksimum
inputTanggalSidebar.setAttribute("max", formatDate(nextWeek));

function formatDate(date) {
  var dd = String(date.getDate()).padStart(2, "0");
  var mm = String(date.getMonth() + 1).padStart(2, "0");
  var yyyy = date.getFullYear();

  return yyyy + "-" + mm + "-" + dd;
}

// =========== Filter Jam dekstop ===========
// Mendapatkan elemen form_jam_mulai dan form_jam_selesai
const form_jam_mulai = document.getElementById("jam-mulai-input");
const form_jam_selesai = document.getElementById("jam-mulai-input2");
const form_jam_mulai_sidebar = document.getElementById("jam-mulai-input-sidebar");
const form_jam_selesai_sidebar = document.getElementById("jam-selesai-input-sidebar");

// Fungsi untuk memperbarui form2 berdasarkan form1
function updateFormJamSelesai() {
  // Mendapatkan nilai terkini dari form1 dan form2
  const value1 = parseInt(form_jam_mulai.value, 10);
  let value2 = parseInt(form_jam_selesai.value, 10);

  // Memastikan form2 bertambah 1 dari form1 jika form2 kurang dari form1
  if (value1 + 1 > value2) {
    form_jam_selesai.value = Math.min(value1 + 1, 11);
  }
  if (value2 <= value1) {
    form_jam_selesai.value = Math.min(value1 + 1, 11); // Tambahkan 1 ke form2 agar lebih besar dari form1, tapi tidak lebih dari 11
  }
}
// Fungsi untuk memperbarui form2 berdasarkan form1
function updateFormJamSelesaiSidebar() {
  // Mendapatkan nilai terkini dari form1 dan form2
  const value1 = parseInt(form_jam_mulai_sidebar.value, 10);
  let value2 = parseInt(form_jam_selesai_sidebar.value, 10);

  // Memastikan form2 bertambah 1 dari form1 jika form2 kurang dari form1
  if (value1 + 1 > value2) {
    form_jam_selesai_sidebar.value = Math.min(value1 + 1, 11);
  }
  if (value2 <= value1) {
    form_jam_selesai_sidebar.value = Math.min(value1 + 1, 11); // Tambahkan 1 ke form2 agar lebih besar dari form1, tapi tidak lebih dari 15
  }
}

// Menambahkan penangan acara untuk tombol increment pada form1
buttonIncrement1.addEventListener("click", function () {
  // Menambah satu ke nilai form1, tapi tidak lebih dari 10 (sesuai permintaan)
  form_jam_mulai.value = Math.min(parseInt(form_jam_mulai.value, 10) + 1, 10);
  updateFormJamSelesai(); // Memperbarui nilai form2 setelah form1 diperbarui
});

// Menambahkan penangan acara untuk tombol decrement pada form1
buttonDecremment1.addEventListener("click", function () {
  // Mengurangkan satu dari nilai form1, tapi tidak kurang dari 1
  form_jam_mulai.value = Math.max(parseInt(form_jam_mulai.value, 10) - 1, 1);
  updateFormJamSelesai(); // Memperbarui nilai form2 setelah form1 diperbarui
});

// Menambahkan penangan acara untuk input pada form1
form_jam_mulai.addEventListener("input", updateFormJamSelesai);

// Menambahkan penangan acara untuk tombol increment pada form2
buttonIncrement2.addEventListener("click", function () {
  let value2 = parseInt(form_jam_selesai.value, 10);

  // Menambah satu ke nilai form2, tapi tidak lebih dari 11
  form_jam_selesai.value = Math.min(value2 + 1, 11);
  updateFormJamSelesai(); // Memperbarui nilai form2 setelah form2 diperbarui
});

// Menambahkan penangan acara untuk tombol decrement pada form2
buttonDecremment2.addEventListener("click", function () {
  let value1 = parseInt(form_jam_mulai.value, 10);
  let value2 = parseInt(form_jam_selesai.value, 10);

  // Mengurangkan satu dari nilai form2, tapi tidak kurang dari atau sama dengan form1
  form_jam_selesai.value = Math.max(value2 - 1, value1 + 1);
  updateFormJamSelesai(); // Memperbarui nilai form2 setelah form2 diperbarui
});
// Menambahkan penangan acara untuk tombol "Set Max"
setMaxButton.addEventListener("click", function () {
  form_jam_mulai.value = 1;
  form_jam_selesai.value = 11;
  updateFormJamSelesai();
});


// ########
// Sidebar
// ########
// Menambahkan penangan acara untuk tombol increment sidebar pada form1
buttonIncrementSidebar1.addEventListener("click", function () {
  // Menambah satu ke nilai form1, tapi tidak lebih dari 14 (sesuai permintaan)
  form_jam_mulai_sidebar.value = Math.min(parseInt(form_jam_mulai_sidebar.value, 10) + 1, 14);
  updateFormJamSelesaiSidebar(); // Memperbarui nilai form2 setelah form1 diperbarui
});

// Menambahkan penangan acara untuk tombol decrement sidebar pada form1
buttonDecremmentSidebar1.addEventListener("click", function () {
  // Mengurangkan satu dari nilai form1, tapi tidak kurang dari 1
  form_jam_mulai_sidebar.value = Math.max(parseInt(form_jam_mulai_sidebar.value, 10) - 1, 1);
  updateFormJamSelesaiSidebar(); // Memperbarui nilai form2 setelah form1 diperbarui
});

buttonIncrementSidebar2.addEventListener("click", function () {
  let value2 = parseInt(form_jam_selesai_sidebar.value, 10);

  // Menambah satu ke nilai form2, tapi tidak lebih dari 15
  form_jam_selesai_sidebar.value = Math.min(value2 + 1, 15);
  updateFormJamSelesaiSidebar(); // Memperbarui nilai form2 setelah form2 diperbarui
});

buttonDecremmentSidebar2.addEventListener("click", function () {
  let value1 = parseInt(form_jam_mulai_sidebar.value, 10);
  let value2 = parseInt(form_jam_selesai_sidebar.value, 10);

  // Mengurangkan satu dari nilai form2, tapi tidak kurang dari atau sama dengan form1
  form_jam_selesai_sidebar.value = Math.max(value2 - 1, value1 + 1);
  updateFormJamSelesaiSidebar(); // Memperbarui nilai form2 setelah form2 diperbarui
});

setMaxButtonSidebar.addEventListener("click", function () {
  form_jam_mulai_sidebar.value = 1;
  form_jam_selesai_sidebar.value = 11;
  updateFormJamSelesaiSidebar();
});

document.addEventListener('alpine:init', () => {
  Alpine.data('listRuang', () => ({
    listRuang: [],
    isLoading: false,
    formValues: {
      tanggal: new Date().toISOString().slice(0, 10),
      jam_mulai: "",
      jam_selesai: "",
      id_lantai: "",
      search: "",
    },
    async fetchData() {
      this.isLoading = true;
      const formData = new FormData();
      formData.append('tanggal', this.formValues.tanggal);
      formData.append('jam_mulai', this.formValues.jam_mulai);
      formData.append('jam_selesai', this.formValues.jam_selesai);
      this.selectedLantai.forEach(lantai => {
        formData.append('id_lantai[]', lantai);
      });
      this.selectedJenisRuang.forEach(jenisRuang => {
        formData.append('id_jenis_ruang[]', jenisRuang);
      });
      formData.append('search', this.formValues.search);
      const response = await fetch('/api/ruang/filter', {
        method: 'POST',
        body: formData,
      });
      const data = await response.json();
      console.log(data);
      this.listRuang = data;
      this.isLoading = false;
    },
    async init() {
      await this.fetchData();
    },
    async fetchResults() {
      const idJam = [
        "J001", "J002", "J003", "J004", "J005",
        "J006", "J007", "J008", "J009", "J010", "J011"
      ];

      if (form_jam_mulai.value >= 1) {
        this.formValues.jam_mulai = idJam[form_jam_mulai.value - 1];
      }
      if (form_jam_mulai_sidebar.value >= 1) {
        this.formValues.jam_mulai = idJam[form_jam_mulai_sidebar.value - 1];
      }
      if (form_jam_selesai.value >= 1) {
        this.formValues.jam_selesai = idJam[form_jam_selesai.value - 1];
      }
      if (form_jam_selesai_sidebar.value >= 1) {
        this.formValues.jam_selesai = idJam[form_jam_selesai_sidebar.value - 1];
      }

      if (searchRuang.value != "") {
        this.formValues.search = searchRuang.value;
      } else {
        this.formValues.search = "";
      }
      await this.fetchData();
    },
    lantaiValue: ["'L001'", "'L002'", "'L003'", "'L004'"],
    lantaiOptions: ["Lantai 5", "Lantai 6", "Lantai 7", "Lantai 8"],
    selectedLantai: [],
    checkSelectedLantai(event) {
      const checkbox = event.target;
      const lantaiValue = checkbox.value;

      if (checkbox.checked) {
        this.selectedLantai.push(lantaiValue);
      } else {
        const index = this.selectedLantai.indexOf(lantaiValue);
        if (index !== -1) {
          this.selectedLantai.splice(index, 1);
        }
      }
      this.fetchResults();
    },
    jenisRuangValue: ["'JR001'", "'JR002'", "'JR003'"],
    jenisRuangOptions: ["Ruang Teori", "Ruang Praktikum", "Ruang Gabungan"],
    selectedJenisRuang: [],
    checkSelectedJenisRuang(event) {
      const checkbox = event.target;
      const jenisRuangValue = checkbox.value;

      if (checkbox.checked) {
        this.selectedJenisRuang.push(jenisRuangValue);
      } else {
        const index = this.selectedJenisRuang.indexOf(jenisRuangValue);
        if (index !== -1) {
          this.selectedJenisRuang.splice(index, 1);
        }
      }
      // console.log("this.selectedJenisRuang", this.selectedJenisRuang);
      this.fetchResults();
    },
    resetFilter() {
      this.selectedLantai = [];
      this.selectedJenisRuang = [];
      // uncheck all checkboxes
      const checkboxes = document.querySelectorAll('input[type="checkbox"]');
      checkboxes.forEach(checkbox => {
        checkbox.checked = false;
      });
      // set jam mulai and jam selesai to default
      form_jam_mulai.value = 0;
      form_jam_selesai.value = 0;
      // reset tanggal
      inputTanggal.value = formatDate(today);
      inputTanggalSidebar.value = formatDate(today);
      this.fetchResults();
    },
    shouldShowDetails(item) {
      return item.listJam.length != 0;
    },
  }));
});

