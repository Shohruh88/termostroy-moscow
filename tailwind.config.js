/** @type {import('tailwindcss').Config} */
export default {
    mode: 'jit',
    content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
      './node_modules/preline/dist/*.js', // Preline uchun
    ],
    theme: {
      extend: {
        backgroundImage: {
          'moscow': "url('/images/moscow-city.jpg')",
          'moscow_night': "url('/images/moscow-city_night.jpg')",
        },
      },
    },
    plugins: [],
  }
  