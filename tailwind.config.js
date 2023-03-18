/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php", "./**/*.js", "./**/*.html"],
  theme: {
    extend: {
      colors:{
        
      }
    },
  },
  plugins: [require('prettier-plugin-tailwindcss')],
};
