/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        "black": "rgb(14, 16, 17)",
        "font": "rgb(255, 255, 255, 0.3)",
        "jako": "rgb(255, 255, 255, 0.8)",
        "shadowed": "rgb(222, 222, 222)",
        "basic": "rgb(222, 222, 222, 0.76)",
        "border": "rgba(255, 255, 255, 0.04)",
        "gna": "#282627",
        "accent": "#FFA500"
      },
      fontFamily: {
        "jakarta": ["Plus Jakarta Sans, sans-serif"],
        "hanken-grotesk": ["Hanken Grotesk", "sans-serif"],
      },
      boxShadow: {
        '3xl': 'rgba(0, 0, 0, 0.04) 0px 0px 51px 51px;',
        'hover': 'rgba(0, 0, 0, 0.12) 0px 50px 70px 40px;',
        'card': 'rgba(0, 0, 0, 0.04) 0px 3px 5px;'
      },
      fontSize: {
        "2xs": ".655rem",
      },
      borderRadius: {
        'lg2': "1.5rem",

      }
      
    },
  },
  plugins: [],
}

