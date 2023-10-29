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
            primary: {
              light: "#fefcbf", // For lighter primary color
              DEFAULT: "#b7791f", // Normal primary color
              dark: "#744210", // Used for hover, active, etc.
            },
          },
        },
      },
  plugins: [require("tailgrids/plugin"), require("kutty")],
}

