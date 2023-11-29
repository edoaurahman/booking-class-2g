/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,php}"],
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        // light mode
        navy_blue: "#003B73",
        blue_grotto: "#60A3D9",
        baby_blue: "#BFD7ED",
        royal_blue: "#0074B7",
        white: "#ffff",
        biru: "#0088ED",
        bingu: "#5E5CE6",
        bingu_hover: "#3E3C99",
        p10: "#cdd7e0",
        p20: "#ACBCCC",
        // darkmode
        dark_grey1: "#1C1C1E",
        dark_grey2: "#303030",
        biruabu: "#4AA0F7",
      },
      fontFamily: {
        // Menambahkan atau mengganti font family sesuai kebutuhan Anda
        sans: ["Roboto", "sans-serif"],
        serif: ["Lato", "Cambria", "Times New Roman", "Times", "serif"],
        mono: ["Menlo", "Monaco", "Courier New", "Courier", "monospace"],
        // Tambahkan konfigurasi font family lainnya jika diperlukan
      },
    },
  },
  plugins: [],
};
