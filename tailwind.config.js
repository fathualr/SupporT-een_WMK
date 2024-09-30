/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    "node_modules/preline/dist/*.js"
  ],
  theme: {
    extend: {
      colors: {
        "color-1": "#F8F9FA",
        "color-2": "#E9ECEF",
        "color-3": "#DEE2E6",
        "color-4": "#CED4DA",
        "color-5": "#ADB5BD",
        "color-6": "#6C757D",
        "color-7": "#495057",
        "color-8": "#343A40",
        "color-9": "#212529",
      },
      backgroundImage: {
        "brain-pattern": "url('/public/images/brain-pattern.png')",
      },
      boxShadow: {
        'custom-1': '0 0 4px rgba(0, 0, 0, 0.25)',  // Bayangan ringan
      },
    },
  },
  plugins: [
    require(
      'daisyui',
      'flowbite/plugin',
      'preline/plugin'),
  ],
}

