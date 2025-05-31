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
  corePlugins: {
    preflight: false, // Desativa o reset CSS padrão do Tailwind
  },
  plugins: [],
}