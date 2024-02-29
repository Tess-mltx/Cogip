/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}", "./View/**/*.php"],
  theme: {
    extend: {
      colors: {
        'primary-color-orange': '#FE6402'
      },
      // spacing: {
      //   '543': '543px',
      //   '1193': '1193px',
      // },
      // fontFamily: {
      //   'sans': ['"Poppins"', ...defaultTheme.fontFamily.sans],
      // }
    },
  },
  plugins: [],
}