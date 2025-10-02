/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php","./**/*.{php,html,js}"],
  theme: {
    extend: {
      colors: {
        primary: "#302CEB",
        secondary: "#2BC8EB",
        dark: "#113866",
        third: '#E5EEFF',
      },
    },
  },
  plugins: [],
}