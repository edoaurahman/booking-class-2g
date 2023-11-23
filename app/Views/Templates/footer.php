<footer class="bg-navy_blue shadow dark:bg-gray-800">
  <div class="w-full  max-w-screen-xl p-4 text-center md:text-left">
    <span class="text-sm text-white dark:text-gray-400">© 2023 <a href="#" class="hover:underline">Sholeh Project</a>. All Rights Reserved.</span>
  </div>
</footer>

<script src="assets/js/flowbite.min.js"></script>
<script>
  const loginButton = document.querySelector('#loginButton');
  const notifikasiButton = document.querySelector('#dropdownNotificationButton');
  const profil = document.querySelector('#dropdownAvatarNameButton');

  if (!sessionStorage.getItem('user')) {
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
</script>

</body>

</html>