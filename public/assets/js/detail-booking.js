const inputTanggal = document.querySelector("#inputTanggal");
// set max 6 heri kedepan
const maxDate = new Date();
maxDate.setDate(maxDate.getDate() + 6);
inputTanggal.setAttribute("max", maxDate.toISOString().split("T")[0]);
inputTanggal.setAttribute("min", new Date().toISOString().split("T")[0]);
// set tanggal default
inputTanggal.value = new Date().toISOString().split("T")[0];

const padZero = (num) => {
  return String(num).padStart(2, "0");
};

function alert() {
  swal({
    title: "Eiits!",
    text: "Pilih Jam Terlebih Dahulu!",
    icon: "warning",
  });
}

document.addEventListener("alpine:init", () => {
  Alpine.data("detailBooking", () => ({
    id_ruang: window.location.pathname.split("/")[2],
    detailBooking: [],
    selectedHours: [],
    listJam: [
      "J001",
      "J002",
      "J003",
      "J004",
      "J005",
      "J006",
      "J007",
      "J008",
      "J009",
      "J010",
      "J011",
    ],
    id_jam_mulai: "",
    id_jam_selesai: "",
    tanggal: "",
    async init() {
      const tanggal = inputTanggal.value;
      this.tanggal = tanggal;
      const day = new Date(tanggal).toLocaleDateString("id-ID", {
        weekday: "long",
      });
      const response = await fetch("/api/status-ruang/" + this.id_ruang);
      const data = await response.json();
      this.detailBooking = data[day];
    },
    async fetchDetailBooking() {
      const tanggal = inputTanggal.value;
      this.tanggal = tanggal;
      const day = new Date(tanggal).toLocaleDateString("id-ID", {
        weekday: "long",
      });
      console.log(day);
      const response = await fetch("/api/status-ruang/" + this.id_ruang);
      const data = await response.json();
      this.detailBooking = data[day];
    },
    toggleSelectedRange(hour) {
      const currentIndex = this.selectedHours.indexOf(hour);
      const maxHour = Math.max(...this.selectedHours);

      if (
        hour < maxHour ||
        (this.selectedHours.length > 2 && currentIndex === -1)
      ) {
        return;
      }

      if (currentIndex === -1) {
        this.selectedHours.push(hour);
      } else {
        this.selectedHours.splice(currentIndex, maxHour);
      }

      if (this.selectedHours.length > 1) {
        const minHour = Math.min(...this.selectedHours);
        const maxHour = Math.max(...this.selectedHours);
        for (let i = minHour + 1; i < maxHour; i++) {
          if (!this.selectedHours.includes(i)) {
            this.selectedHours.push(i);
          }
        }
      }
      this.id_jam_mulai = this.listJam[this.selectedHours[0] - 1];
      this.id_jam_selesai = this.listJam[this.selectedHours[1] - 1];
    },
    next(e) {
      if (this.id_jam_mulai !== "" && this.id_jam_selesai !== "") {
        return true;
      } else {
        e.preventDefault();
        swal({
          title: "Warning !!!",
          text: "Pilih Jam Terlebih Dahulu!",
          icon: "warning",
        });
        return false;
      }
    },
  }));
});

document.addEventListener("DOMContentLoaded", function () {
  // Get references to the elements
  const toggleButton = document.getElementById("toggleButton");
  const tableContainer = document.getElementById("tableContainer");

  // Add click event listener to the toggle button
  toggleButton.addEventListener("click", function () {
    // Toggle the visibility of the table container
    tableContainer.classList.toggle("hidden");

    // Change the text of the toggle button based on visibility
    if (tableContainer.classList.contains("hidden")) {
      toggleButton.innerHTML =
        'Show Time Detail <i class="fa-solid fa-angles-right"></i>';
    } else {
      toggleButton.innerHTML =
        'Close Time Detail <i class="fa-solid fa-angles-right"></i>';
    }
  });
});
