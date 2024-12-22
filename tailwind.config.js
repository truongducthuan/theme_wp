/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php","./**/*.{php,html,js}"],
  theme: {
    extend: {
      backgroundImage: {
        'hero-pattern': "url('/img/hero-pattern.svg')",
      }
    },
  },
  plugins: [],
}