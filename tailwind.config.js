/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  important: true, // Força a especificidade dos estilos
  theme: {
    fontFamily: {
      sans: ['"Segoe UI"', 'Roboto', 'sans-serif'],
    },
    extend: {},
  },
  plugins: [],
}
