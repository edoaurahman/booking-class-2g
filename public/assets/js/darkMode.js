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