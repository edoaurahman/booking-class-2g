<footer class="bg-navy_blue shadow dark:bg-gray-800">
  <div class="w-full  max-w-screen-xl p-4 text-center md:text-left">
    <span class="text-sm text-white dark:text-gray-400">© <?= date('Y') ?> <a href="#" class="hover:underline">Sholeh Project</a>. All Rights Reserved.</span>
  </div>
</footer>

<script src="/assets/js/flowbite.min.js"></script>
<script src="/assets/js/preline.js"></script>

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
<script src="/assets/js/darkMode.js"></script>
<script>
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

  function timeDifference(current, previous) {
    const difference = current - previous;
    const minutes = Math.floor(difference / 60000);
    const hours = Math.floor(minutes / 60);
    const days = Math.floor(hours / 24);

    if (days > 0) {
      return days + " day" + (days > 1 ? "s" : "") + (hours % 24 > 0 ? " " + (hours % 24) + " hour" + (hours % 24 > 1 ? "s" : "") : "") + " ago";
    } else if (hours > 0) {
      return hours + " hour" + (hours > 1 ? "s" : "") + (minutes % 60 > 0 ? " " + (minutes % 60) + " minute" + (minutes % 60 > 1 ? "s" : "") : "") + " ago";
    } else if (minutes > 0) {
      return minutes + " minute" + (minutes > 1 ? "s" : "") + " ago";
    } else {
      return "just now";
    }
  }

  document.addEventListener('alpine:init', () => {
    Alpine.data('notificationList', () => ({
      formatCreatedAt(created_at) {
        const currentTime = new Date();
        const previousTime = new Date(created_at.replace(/-/g, "/")); // Adjusting for timezone differences
        return timeDifference(currentTime, previousTime);
      },
    }));
  });
</script>
</body>

</html>