/** @type {import('tailwindcss').Config} */
export default {
  content: ["./src/**/*.{astro,html,js,jsx,md,mdx,ts,tsx}"],
  theme: {
    extend: {
      backgroundColor: {
        primary: "#45a342",
      },
      backgroundImage: {
        "hero-section": "url('src/assets/img/hero-section-home.jpg')",
      },
    },
  },
  plugins: [],
};
