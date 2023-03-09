/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php", "./**/*.js", "./**/*.html"],
  theme: {
    extend: {},
  },
  plugins: [require('prettier-plugin-tailwindcss')],
};
