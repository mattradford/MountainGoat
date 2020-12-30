module.exports = {
  // important: "html",
  theme: {
    container: {
      center: true,
    },
    extend: {
      typography: {
        default: {
          css: {
            color: "#333",
          },
        },
      },
    },
    editorColorPalette: {
      primary: "blue",
      secondary: "#ccc",
    },
    editorFontSizes: {
      small: "0.875rem",
      medium: "1rem",
    },
  },
  variants: {},
  plugins: [
    require("@tailwindcss/typography"),
    require("@mattrad/tailwindcss-wordpress"),
    ({ addComponents, theme }) => {
      addComponents({
        ".content > :not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.wp-block-separator):not(.woocommerce)": {
          "@apply mx-auto": {},
          "@screen sm": {
            maxWidth: theme("screens.sm"),
          },
        },
        ".content > .wp-block-button": {
          "@apply mx-auto": {},
          "@screen sm": {
            maxWidth: theme("screens.sm"),
          },
        },
      });
    },
  ],
};
