module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        'main-pink': '#ed1757',
        'brand-blue': '#1a23f0',
        'brand-purple': '#af3cf6',
        'main-white': '#fff',
        'main-black': '#000',
        'main-gray': '#272727',
        'comp-white': '#f8f8f8',
        'comp-gray': '#666',
      },
    },
    fontFamily: {
      'sans': ['Archivo', 'sans-serif']
    },
    fontSize: {
      'h1': '66px',
      'h2': '48px',
      'h3': '26px',
      'h4': '22px',
      '18': '18px',
      '16': '16px',
      '14': '14px',
      '12': '12px',
    },
    lineHeight: {
        'h1': '76px',
        'h2': '50px',
        'h3': '26px',
        'h4': '24px',
        'p': '28.8px',
    },
  },
  corePlugins: {
    aspectRatio: false,
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
    // ...
  ],
};
