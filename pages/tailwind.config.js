/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/html/**/*.{html, css}"],
  theme: {
    extend: {
      colors: {
        "uefa-blue" : "#143cdb",
      },
      backgroundImage: {
        "cristiano-small" : "url('./images/cristiano-small.jpg')",
      }
    },
  },
  plugins: [],
}

