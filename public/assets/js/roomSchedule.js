document.getElementById('ruang').addEventListener('change', function () {
  var selectedOption = this.options[this.selectedIndex];
  if (selectedOption.value) {
    window.location.href = '/roomSchedule/' + selectedOption.value;
  }
});

const date = new Date();
const scheduleTime = document.querySelector(".schedule-clock");
const scheduleDay = document.querySelector(".schedule-day");
const scheduleTableBody = document.querySelector(".schedule-table-body");
const currentSchedule_el = document.querySelector(".current-schedule");
let counter = 0;

document.addEventListener("DOMContentLoaded", () => {
  const day = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
  const month = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "Mei",
    "Jun",
    "Jul",
    "Ags",
    "Sep",
    "Okt",
    "Nov",
    "Des",
  ];

  // Fungsi untuk mengupdate tampilan waktu
  function updateTime() {
    scheduleTime.textContent = `${date.getHours()} : ${date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes()
      }`;
  }

  // Fungsi untuk mengupdate tampilan hari dan tanggal
  function updateDay() {
    scheduleDay.innerHTML = `
    <div class="h-full flex justify-between text-white z-[9999] top-0 items-center">
      <button class="schedule-prev-button w-[4rem] h-[4rem] bg-transparent">
        <img src="/assets/img/arahTriangle.svg" width='10px' alt="" class="w-full h-full rotate-180 schedule-prev-button">
      </button>
    <h1 class="text-4xl">${day[date.getDay()]}, ${date.getDate()} ${month[date.getMonth()]} ${date.getFullYear()}</h1>
      <button class="schedule-next-button w-[4rem] h-[4rem] bg-transparent">
          <img src="/assets/img/arahTriangle.svg" alt="" class="w-full h-full schedule-next-button">
      </button>
    </div>`;
  }

  // Memanggil fungsi untuk inisialisasi tampilan awal
  updateTime();
  updateDay();

  document.addEventListener("click", (e) => {
    if (e.target.classList.contains("schedule-next-button")) {
      update_display();
    } else if (e.target.classList.contains("schedule-prev-button")) {
      counter--;
      date.setDate(date.getDate() - 1); // Mengurangi satu hari pada tanggal
      updateTime();
      updateDay();
      // updateSchedule();
    }
    // get id ruang from url
    const url = window.location.href;
    const id = url.substring(url.lastIndexOf('/') + 1);
    fetch('/api/jadwal/' + id + '/hari/' + day[date.getDay()], {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json',
      },
    })
      .then((res) => res.json())
      .then((data) => {
        let html = '';
        let no = 1;
        data.forEach((jadwal) => {
          html += `
            <tr>
              <td class="px-1 py-4">
                ${no++}
              </td>
              <td class="px-6 py-4">
                ${jadwal.jam_mulai} - ${jadwal.jam_selesai}
              </td>
              <td class="px-6 py-4">
                ${jadwal.nama}
              </td>
              <td class="px-6 py-4">
                ${jadwal.nama_matkul}
              </td>
            </tr>
            `;
        });
        scheduleTableBody.innerHTML = html;
      })
      .catch((err) => {
        console.log(err);
      })
  });

  function update_display() {
    if (counter >= 7) {
      counter = 0;
    } else {
      counter++;
    }
    date.setDate(date.getDate() + 1); // Menambahkan satu hari pada tanggal
    updateTime();
    updateDay();
  }
});
