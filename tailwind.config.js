/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue", // Jika pakai Vue
    "./node_modules/flowbite/**/*.js"
    // Pastikan path ke file pagination dan view storage cache ada di sini jika perlu:
    // "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    // "./storage/framework/views/*.php",
  ],
  theme: {
    extend: {
      // Definisikan font kustom di sini
      fontFamily: {
        sans: [
            'Instrument Sans', // Nama font Anda
            'ui-sans-serif',
            'system-ui',
            'sans-serif',
            '"Apple Color Emoji"',
            '"Segoe UI Emoji"',
            '"Segoe UI Symbol"',
            '"Noto Color Emoji"'
        ],
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}