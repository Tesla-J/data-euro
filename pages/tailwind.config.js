/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/html/**/*.{html, css}"],
  theme: {
    extend: {
      colors: {
        "uefa-blue" : "#143cdb",
        "tour-blue" : "#004f9e",
      },
      backgroundImage: {
        "cristiano-small" : "url('../images/cristiano-small.jpg')",
        "mbappe-large"    : "url('../images/mbappe-large.jpg')",
        "vini-medium"     : "url('../images/vini-medium.jpg')",
      }
    },
  },
  plugins: [],
}

