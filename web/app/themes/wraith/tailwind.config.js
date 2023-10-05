const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  safelist: [
    'btn-toolbar',
    'text-gray-400',
    'nav-primary',
    'nav-backdrop',
    {
      pattern: /^py-/,
      pattern: /^px-/,
      pattern: /^pt-/,
      pattern: /^pb-/,
      pattern: /^pl-/,
      pattern: /^pr-/,
      pattern: /^my-/,
      pattern: /^mx-/,
      pattern: /^mt-/,
      pattern: /^mb-/,
      pattern: /^ml-/,
      pattern: /^mr-/,
    },
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#AC885E',
        'primary-light': '#1C93FF',
        'primary-dark': '#0076D0',

        'secondary': '#002F67',
        'secondary-light': '#C3A342',
        'secondary-dark': '#B8B8B8',

        'tertiary': '#3F7E57',
        'tertiary-light': '#a4df92',
        'tertiary-dark': '#C9DEBF',
      },

      container: {
        // center: true,
        padding: 0,
        // default breakpoints but with 40px removed
        screens: {
          sm: '640px',
          md: '768px',
          lg: '1024px',
          xl: '1280px',
          '2xl': '1392px',
          
        },
      },

      fontFamily: {
        'sans': ['Myriad Pro', ...defaultTheme.fontFamily.sans],
        'serif': ['Oswald', ...defaultTheme.fontFamily.sans],
      },
      aspectRatio: {
        '21/9': '21 / 9',
        '16/9': '16 / 9',
        '3/2': '3 / 2',
        '2/3': '2 / 3',
        '4/3': '4 / 3',
        '3/4': '3 / 4',
        '7/10': '7 /10',
      },
    },
  },
  plugins: [
    require('tailwind-children'),
  ],
};
