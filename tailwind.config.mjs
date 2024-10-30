/** @type {import('tailwindcss').Config} */
export default {
  content: ["./src/**/*.{astro,html,js,jsx,md,mdx,ts,tsx}"],
  theme: {
    extend: {
      backgroundColor: {
        primary: "#45a342",
        banner: "#C19A6B",
        cafe: "#C19A6B",
        darker_cafe: "#A98151",
      },
      textColor: {
        primary: "#45a342",
        banner: "#C19A6B",
        cafe: "#C19A6B",
        darker_cafe: "#A98151",
      },
      backgroundImage: {
        "hero-section": "url('/src/assets/img/hero-section-home.jpg')",
        "about-hero": "url('/src/assets/img/mvlandscape.jpg')",
        "residential-hero": "url('/src/assets/img/residential-services.jpg')",
        "planting-service": "url('/src/assets/img/planting-service.jpg')",
        "grass-cutting": "url('/src/assets/img/mow-edge.jpg')",
        "planting-service-hero": "url('/src/assets/img/planting_services.jpg')",
        "tree-service-hero": "url('/src/assets/img/tree_trimming_service.jpg')",
      },
    },
  },
  plugins: [],
};
