/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#FF6363',
        'secondary': {
          100: '#E2E2D5',
          200: '#888883',
        },
      },
      fontFamily: {
        'body': ['Nunito'],
      },
      fontSize: {
        'xxs': '10px',
      }
    },
  },
  plugins: [],
}
