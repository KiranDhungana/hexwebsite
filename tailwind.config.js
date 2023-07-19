/** @type {import('tailwindcss').Config} */
module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      height: {
        'custom': '100px',
        'mapheight': '300px',
      },
      colors: {
        primary: '#2789F4',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
    
  ],
}

