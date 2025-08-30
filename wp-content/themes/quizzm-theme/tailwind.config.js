/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.php",
    "./*.php", 
    "./**/*.html",
    "./assets/**/*.js",
    "./template-parts/**/*.php",
    "./inc/**/*.php"
  ],
  theme: {
    extend: {
      colors: {
        primary: '#3b82f6',
        secondary: '#64748b',
      }
    },
  },
  plugins: [],
}