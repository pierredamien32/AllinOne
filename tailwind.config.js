/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      sans: ['Inter', 'sans-serif']
    },
    borderRadius: {
      'none': '0',
      'sm': '0.125rem',
      'default': '0.25rem',
      'lg': '0.5rem',
      'full': '9999px',
      '32': '32px',
      '40': '40px',
      '30': '30px',
      '20': '20px',
      '10': '10px',
    },
    extend: {
      backgroundImage: {
        'hero-pattern': "url('/public/images/image de la page d'accueil.png')",
      }
    },
  },
  plugins: [],
}
