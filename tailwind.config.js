/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      rotate: {
        '-1': '-1deg',
        '-2': '-2deg',
        '-3': '-3deg',
        '1': '1',
        '2': '2deg',
        '3': '3deg',
      },
      borderRadius: {
        'xl': '0.8rem',
        'xxl': '1rem',
      },
      height: {
        '1/2': '0.125rem',
        '2/3': '0.1875rem',
      },
      maxHeight: {
        '16': '16rem',
        '20': '20rem',
        '24': '24rem',
        '32': '32rem',
      },
      inset: {
        '1/2': '50%',
      },
      width: {
        '96': '24rem',
        '104': '26rem',
        '128': '32rem',
      },
      transitionDelay: {
        '450': '450ms',
      },
      colors: {
        'wave': {
          50: '#ff80ef',
          100: '#ff66ec',
          200: '#ff4de9',
          300: '#ff33e5',
          400: '#ff19e2',
          500: '#FF00DF',
          600: '#e600c9',
          700: '#cc00b2',
          800: '#b3009c',
          900: '#990086',
        }
      }
    }
  },
  plugins: [],
}
