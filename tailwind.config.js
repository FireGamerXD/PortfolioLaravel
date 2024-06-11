/** @type {import('tailwindcss').Config} */
export default {
  content: [ "./resources/**/*.blade.php", "./resources/**/*.js", "./resources/**/*.vue", ],
  theme: {
    extend: {
      colors: {
        "primary-color": "var(--primary-color)",
        "secondary-color": "var(--secondary-color)"
      },
    },
  },
  plugins: [],
}

