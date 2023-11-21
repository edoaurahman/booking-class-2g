/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,php}"],
  theme: {
    extend: {
      colors: {
        navy_blue: "#003B73",
        blue_grotto: "#60A3D9",
        baby_blue: "#BFD7ED",
        royal_blue: "#0074B7",
        white: "#ffff",
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
