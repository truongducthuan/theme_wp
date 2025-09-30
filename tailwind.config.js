/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php","./**/*.{php,html,js}"],
  theme: {
    extend: {
      backgroundImage: {
        'hero-pattern': "url('/img/hero-pattern.svg')",
      },
      colors: {
        primary: "#302CEB",
        secondary: "#2BC8EB",
        dark: "#113866",
      },
    },
  },
  plugins: [],
}