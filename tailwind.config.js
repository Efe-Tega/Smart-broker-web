/** @type {import('tailwindcss').Config} */
export default {
  darkMode: "class",
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        dark: {
          "bg-primary": "#1a1b1e",
          "bg-secondary": "#2c2e33",
          "text-primary": "#e4e6ea",
          "text-secondary": "#9ca3af",
        },
      }
    },
  },
  plugins: [],
}

