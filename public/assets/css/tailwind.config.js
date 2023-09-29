/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    /**
     * Menentukan file apa saja yang dapat menggunakan TailwindCSS.
     */
    "../../index.php",
    "../../../app/core/Flasher.php",
    "../../../app/views/**/*.php"
  ],
  theme: {
    container: {
      center: true
    },
    extend: {
      colors: {
        /**
         * Membuat property primary, secondary, tertiary, dan dark dengan nilai warna yang berbeda.
         */
        primary: '#f97316',
        secondary: '#64748b',
        tertiary: '#ffedd5',
        dark: '#9a3412'
      }
    },
  },
  plugins: [],
}

