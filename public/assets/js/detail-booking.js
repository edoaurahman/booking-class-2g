const inputTanggal = document.querySelector('#inputTanggal')
let timezoneOffset = new Date().getTimezoneOffset() * 60 * 1000;

const maxDate = new Date(Date.now() - timezoneOffset)
maxDate.setDate(maxDate.getDate() + 6)
inputTanggal.setAttribute('max', maxDate.toISOString().split('T')[0])

const today = new Date(Date.now() - timezoneOffset)
inputTanggal.setAttribute('min', today.toISOString().split('T')[0])
inputTanggal.value = today.toISOString().split('T')[0]

const padZero = (num) => {
  return String(num).padStart(2, '0')
}

function alert() {
  swal({
    title: "Warning !!!",
    text: "Pilih Jam Terlebih Dahulu!",
    icon: "warning",
  });
}

document.addEventListener('alpine:init', () => {
  Alpine.data('detailBooking', () => ({
    id_ruang: window.location.pathname.split('/')[2],
    detailBooking: [],
    selectedHours: [],
    listJam: ["J001", "J002", "J003", "J004", "J005", "J006", "J007", "J008", "J009", "J010", "J011"],
    id_jam_mulai: '',
    id_jam_selesai: '',
    tanggal: '',
    async init() {
      const tanggal = inputTanggal.value
      this.tanggal = tanggal
      const day = new Date(tanggal).toLocaleDateString('id-ID', { weekday: 'long' })
      const response = await fetch('/api/status-ruang/' + this.id_ruang)
      const data = await response.json()
      this.detailBooking = data[day]
    },
    async fetchDetailBooking() {
      const tanggal = inputTanggal.value
      this.tanggal = tanggal
      const day = new Date(tanggal).toLocaleDateString('id-ID', { weekday: 'long' })
      console.log(day);
      const response = await fetch('/api/status-ruang/' + this.id_ruang)
      const data = await response.json()
      this.detailBooking = data[day]
      // clear selected hours
      this.selectedHours = []
    },
    toggleSelectedRange(hour) {
      const currentIndex = this.selectedHours.indexOf(hour);
      const maxHour = Math.max(...this.selectedHours);

      if (hour < maxHour || (this.selectedHours.length > 2 && currentIndex === -1)) {
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
      this.id_jam_mulai = this.listJam[this.selectedHours[0] - 1]
      this.id_jam_selesai = this.listJam[this.selectedHours[1] - 1]
    },
    next(e) {
      if (this.id_jam_mulai !== '' && this.id_jam_selesai !== '' && this.id_jam_mulai !== undefined && this.id_jam_selesai !== undefined) {
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
    }
  }));
})