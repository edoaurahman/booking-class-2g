<footer class="bg-navy_blue shadow dark:bg-gray-800">
  <div class="w-full  max-w-screen-xl p-4 text-center md:text-left">
    <span class="text-sm text-white dark:text-gray-400">© 2023 <a href="#" class="hover:underline">Sholeh Project</a>. All Rights Reserved.</span>
  </div>
</footer>

<script src="assets/js/flowbite.min.js"></script>

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

  const darkIcon = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
</svg>`

  const lightIcon = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
</svg>`
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
      console.log("set dark mode");
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
</script>

</body>

</html>