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
          'moscow': "url('/images/moscow-city.webp')",
          'moscow_night': "url('/images/moscow-city_night.webp')",
          'bg-logo': "url('/images/logo-termo.png')",
           'tower_moscow': "url('/images/telegraf.jpg')"
        },
      },
    },
    plugins: [],
  }
