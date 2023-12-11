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
        biru: "#0088ED",
        biru1: "#85B9E0",
        biru2: "#005B9E", //buat header form
        bingu: "#5E5CE6",
        bingu_hover: "#3E3C99",
        p10: "#cdd7e0",
        p20: "#ACBCCC",
        // darkmode
        dark_grey1: "#1C1C1E",
        dark_grey2: "#303030",
        dark_grey3: "#D5D7D9",
        dark_grey4: "#959AA1",
        dark_grey5: "#2B3643",
        dark_grey6: "#222B35",
        biruabu: "#4AA0F7",
        biruTua: "#85B9E0",
      },
      fontFamily: {
        // Menambahkan atau mengganti font family sesuai kebutuhan Anda
        sans: ["Roboto", "sans-serif"],
        serif: ["Lato", "Cambria", "Times New Roman", "Times", "serif"],
        surat: [
          "Times New Roman",
          "Monaco",
          "Courier New",
          "Courier",
          "monospace",
        ],
        // Tambahkan konfigurasi font family lainnya jika diperlukan
      },
    },
  },
  plugins: [],
};
