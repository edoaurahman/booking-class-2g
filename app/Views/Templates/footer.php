<footer class="bg-navy_blue shadow dark:bg-gray-800">
  <div class="w-full  max-w-screen-xl p-4 text-center md:text-left">
    <span class="text-sm text-white dark:text-gray-400">© 2023 <a href="#" class="hover:underline">Sholeh Project</a>. All Rights Reserved.</span>
  </div>
</footer>

<script src="/assets/js/flowbite.min.js"></script>

<script>
  // show login button 

  const loginButton = document.querySelector('#loginButton');
  const notifikasiButton = document.querySelector('#dropdownNotificationButton');
  const profil = document.querySelector('#dropdownAvatarNameButton');
  const user = "<?= $_SESSION['user'] ?? "" ?>";
  const level = "<?= $_SESSION['level'] ?? "" ?>";
  const text_polinema = document.querySelector('#text-polinema');

  if (user == "") {
    loginButton.classList.add("block");
    loginButton.classList.remove("hidden");

    notifikasiButton.classList.add("hidden");
    notifikasiButton.classList.remove("block");

    profil.classList.add("hidden");
    profil.classList.remove("block");
  } else {
    loginButton.classList.remove("block");
    loginButton.classList.add("hidden");

    notifikasiButton.classList.remove("hidden");
    notifikasiButton.classList.add("block");

    profil.classList.remove("hidden");
    profil.classList.add("block");
  }

  if (window.innerWidth < 768) {
    text_polinema.classList.add("hidden");
  } else {
    text_polinema.classList.remove("hidden");
  }
</script>

<script>
  // fitur toggle dark mode

  const switchToggle = document.querySelector('#switch-toggle');
  const buttonToggle = document.querySelector('#buttonToggle');

  const userTheme = localStorage.getItem("theme");
  const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

  const darkIcon = `<i class="fa-regular fa-moon text-[20px]"></i>`

  const lightIcon = `<i class="fa-regular fa-sun text-[20px]"></i>`
  const setIcon = () => {
    if (userTheme === "dark" || (!userTheme && systemTheme)) {
      switchToggle.classList.add('bg-gray-500', 'translate-x-full');
      switchToggle.innerHTML = darkIcon;
    } else {
      switchToggle.classList.add('bg-yellow-500', '-translate-x-2');
      switchToggle.innerHTML = lightIcon;
    }
  }

  setIcon();

  const themeCheck = () => {
    if (userTheme === "dark" || (!userTheme && systemTheme)) {
      document.documentElement.classList.add("dark");
    }
  };

  const themeSwitch = () => {
    if (document.documentElement.classList.contains("dark")) {
      document.documentElement.classList.remove("dark");
      localStorage.setItem("theme", "light");
      iconToggle(lightIcon);
      return;
    }

    document.documentElement.classList.add("dark");
    localStorage.setItem("theme", "dark");
    iconToggle(darkIcon);
  }

  buttonToggle.addEventListener("click", () => {
    themeSwitch();
  })

  const iconToggle = (icon) => {
    switchToggle.classList.toggle('bg-yellow-500');
    switchToggle.classList.toggle('-translate-x-2');
    switchToggle.classList.toggle('bg-gray-500');
    switchToggle.classList.toggle('translate-x-full');

    setTimeout(() => {
      switchToggle.innerHTML = icon
    }, 250);
  }

  themeCheck();

  // shorted Name
  // const nama = document.getElementById('nama');

  // function shortenName(nama, maxLength) {
  //   if (nama.length > maxLength) {
  //     return nama.substring(0, maxLength) + '...';
  //   } else {
  //     return nama;
  //   }
  // }

  // nama.innerText = shortenName(nama.innerText.toString(), 10);
</script>

<script>
  const schedule = [
    {
      day: 'Sunday',
      schedule: [
        {
          id: 1,
          time: '07.00 - 07.50',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 2,
          time: '07.50 - 08.40',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 3,
          time: '08.40 - 09.30',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 4,
          time: '09.30 - 10.20',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 5,
          time: '10.20 - 11.10',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 6,
          time: '11.10 - 12.00',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 7,
          time: '12.00 - 12.50',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 8,
          time: '12.50 - 13.40',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 9,
          time: '13.40 - 14.30',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 10,
          time: '14.30 - 15.20',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 11,
          time: '15.20 - 16.10',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
      ]
    },
    {
      day: 'Monday',
      schedule: [
        {
          id: 1,
          time: '07.00 - 07.50',
          user: 'TI-2G',
          activity: 'Kuliah Database',
        },
        {
          id: 2,
          time: '07.50 - 08.40',
          user: 'TI-2G',
          activity: 'Kuliah Database',
        },
        {
          id: 3,
          time: '08.40 - 09.30',
          user: 'TI-2G',
          activity: 'Kuliah Database',
        },
        {
          id: 4,
          time: '09.30 - 10.20',
          user: 'TI-2G',
          activity: 'Kuliah Database',
        },
        {
          id: 5,
          time: '10.20 - 11.10',
          user: 'TI-2G',
          activity: 'Kuliah Database',
        },
        {
          id: 6,
          time: '11.10 - 12.00',
          user: 'TI-2G',
          activity: 'Kuliah Database',
        },
        {
          id: 7,
          time: '12.00 - 12.50',
          user: 'TI-2G',
          activity: 'Kuliah Database',
        },
        {
          id: 8,
          time: '12.50 - 13.40',
          user: 'TI-2G',
          activity: 'Kuliah Database',
        },
        {
          id: 9,
          time: '13.40 - 14.30',
          user: 'TI-2G',
          activity: 'Kuliah Database',
        },
        {
          id: 10,
          time: '14.30 - 15.20',
          user: 'TI-2G',
          activity: 'Kuliah Database',
        },
        {
          id: 11,
          time: '15.20 - 16.10',
          user: 'TI-2G',
          activity: 'Kuliah Database',
        },
      ]
    },
    {
      day: 'Tuesday',
      schedule: [
        {
          id: 1,
          time: '07.00 - 07.50',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 2,
          time: '07.50 - 08.40',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 3,
          time: '08.40 - 09.30',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 4,
          time: '09.30 - 10.20',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 5,
          time: '10.20 - 11.10',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 6,
          time: '11.10 - 12.00',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 7,
          time: '12.00 - 12.50',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 8,
          time: '12.50 - 13.40',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 9,
          time: '13.40 - 14.30',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 10,
          time: '14.30 - 15.20',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 11,
          time: '15.20 - 16.10',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
      ]
    },
    {
      day: 'Wednesday',
      schedule: [
        {
          id: 1,
          time: '07.00 - 07.50',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 2,
          time: '07.50 - 08.40',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 3,
          time: '08.40 - 09.30',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 4,
          time: '09.30 - 10.20',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 5,
          time: '10.20 - 11.10',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 6,
          time: '11.10 - 12.00',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 7,
          time: '12.00 - 12.50',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 8,
          time: '12.50 - 13.40',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 9,
          time: '13.40 - 14.30',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 10,
          time: '14.30 - 15.20',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 11,
          time: '15.20 - 16.10',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
      ]
    },
    {
      day: 'Thursday',
      schedule: [
        {
          id: 1,
          time: '07.00 - 07.50',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 2,
          time: '07.50 - 08.40',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 3,
          time: '08.40 - 09.30',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 4,
          time: '09.30 - 10.20',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 5,
          time: '10.20 - 11.10',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 6,
          time: '11.10 - 12.00',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 7,
          time: '12.00 - 12.50',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 8,
          time: '12.50 - 13.40',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 9,
          time: '13.40 - 14.30',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 10,
          time: '14.30 - 15.20',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 11,
          time: '15.20 - 16.10',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
      ]
    },
    {
      day: 'Friday',
      schedule: [
        {
          id: 1,
          time: '07.00 - 07.50',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 2,
          time: '07.50 - 08.40',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 3,
          time: '08.40 - 09.30',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 4,
          time: '09.30 - 10.20',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 5,
          time: '10.20 - 11.10',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 6,
          time: '11.10 - 12.00',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 7,
          time: '12.00 - 12.50',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 8,
          time: '12.50 - 13.40',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 9,
          time: '13.40 - 14.30',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 10,
          time: '14.30 - 15.20',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 11,
          time: '15.20 - 16.10',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
      ]
    },
    {
      day: 'Saturday',
      schedule: [
        {
          id: 1,
          time: '07.00 - 07.50',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 2,
          time: '07.50 - 08.40',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 3,
          time: '08.40 - 09.30',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 4,
          time: '09.30 - 10.20',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 5,
          time: '10.20 - 11.10',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 6,
          time: '11.10 - 12.00',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 7,
          time: '12.00 - 12.50',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 8,
          time: '12.50 - 13.40',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 9,
          time: '13.40 - 14.30',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 10,
          time: '14.30 - 15.20',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
        {
          id: 11,
          time: '15.20 - 16.10',
          user: 'TI-2G',
          activity: 'Kuliah OOP',
        },
      ]
    },
  ]


  const date = new Date();
  const scheduleTime = document.querySelector('.schedule-clock');
  const scheduleDay = document.querySelector('.schedule-day');
  const scheduleTableBody = document.querySelector('.schedule-table-body');
  const currentSchedule_el = document.querySelector('.current-schedule');
  let counter = 0;

document.addEventListener('DOMContentLoaded', () => {
  const day = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
  const month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
  const time = `${date.getHours()}.${date.getMinutes() < 10 ? '0' + date.getMinutes() : date.getMinutes()}`;

    // Fungsi untuk mengupdate tampilan waktu
    function updateTime() {
        scheduleTime.textContent = `${date.getHours()} : ${date.getMinutes() < 10 ? '0' + date.getMinutes() : date.getMinutes()}`;
    }

    // Fungsi untuk mengupdate tampilan hari dan tanggal
    function updateDay() {
        scheduleDay.innerHTML = `
            <h1 class="text-4xl">${day[date.getDay()]}, ${date.getDate()} ${month[date.getMonth()]} ${date.getFullYear()}</h1>
            <div class="w-[50%] h-full absolute flex justify-between text-white z-[9999] top-0 items-center">
                <button class="schedule-prev-button w-[4rem] h-[4rem] bg-transparent">
                    <img src="/assets/img/arahTriangle.svg" alt="" class="w-full h-full rotate-180 schedule-prev-button">
                </button>
                <button class="schedule-next-button w-[4rem] h-[4rem] bg-transparent">
                    <img src="/assets/img/arahTriangle.svg" alt="" class="w-full h-full schedule-next-button">
                </button>
            </div>`;
    }

    // Memanggil fungsi untuk inisialisasi tampilan awal
    updateTime();
  updateDay();
  updateSchedule();


    document.addEventListener('click', (e) => {
      if (e.target.classList.contains('schedule-next-button')) {
        update_display();
      } else if (e.target.classList.contains('schedule-prev-button')) {
        counter--;
        date.setDate(date.getDate() - 1); // Mengurangi satu hari pada tanggal
        updateTime();
        updateDay();
        updateSchedule();
      }
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
      updateSchedule();
    }

    function updateSchedule() {
    scheduleTableBody.innerHTML = ''; // Bersihkan isi tabel
    const currentSchedule = schedule[(date.getDay())];
    const currentHour = date.getHours();
    const currentMinute = `${date.getMinutes() < 10 ? '0' + date.getMinutes() : date.getMinutes()}`;
    
    currentSchedule.schedule.forEach(scedule => {
      const row = document.createElement('tr');
      row.innerHTML = `
        <td class="px-6 py-4">
          ${scedule.id}
        </td>
        <td class="px-6 py-4">
          ${scedule.time}
        </td>
        <td class="px-6 py-4">
          ${scedule.user}
        </td>
        <td class="px-6 py-4">
          ${scedule.activity}
        </td>
      `;
      scheduleTableBody.appendChild(row);

    })
  }
  });

  
</script>

</body>

</html>