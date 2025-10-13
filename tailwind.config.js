/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php","./**/*.{php,html,js}"],
  theme: {
    extend: {
      colors: {
        primary: "#B5E5FC",
        secondary: "#00C0E8",
        third: '#3b82f6',
        fourth: '#EEF9FF'
      },
    },
  },
  plugins: [],
}