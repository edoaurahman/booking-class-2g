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
</body>

</html>