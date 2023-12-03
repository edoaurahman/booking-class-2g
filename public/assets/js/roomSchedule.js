document.getElementById('ruang').addEventListener('change', function () {
  var selectedOption = this.options[this.selectedIndex];
  if (selectedOption.value) {
    window.location.href = '/roomSchedule/' + selectedOption.value;
  }
});

const date = new Date();

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

function padZero(value) {
  return value < 10 ? "0" + value : value;
}

function updateTime() {
  return `${date.getHours()} : ${padZero(date.getMinutes())}`;
}

function updateDay() {
  return `${day[date.getDay()]}, ${date.getDate()} ${month[date.getMonth()]} ${date.getFullYear()}`;
}

async function getJadwal(day) {
  const url = window.location.href;
  const id = url.substring(url.lastIndexOf('/') + 1);
  const response = await fetch('/api/jadwal/' + id + '/hari/' + day, {
    method: 'GET',
    headers: {
      'Content-Type': 'application/json',
    },
  });
  const data = await response.json();
  return data;
}

document.addEventListener('alpine:init', () => {
  Alpine.data('jadwalRuang', () => ({
    jadwalRuang: [],
    currentTime: updateTime(),
    currentDay: updateDay(),
    async init() {
      this.currentDay = updateDay();
      this.currentTime = updateTime();
      this.jadwalRuang = await getJadwal(day[date.getDay()]);
    },
    next() {
      date.setDate(date.getDate() + 1);
      this.init();
    },
    prev() {
      date.setDate(date.getDate() - 1);
      this.init();
    },
  }))
})
