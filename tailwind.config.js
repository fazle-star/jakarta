 /** @type {import('tailwindcss').Config} */
  export default {
  content: ["./src/**/*.{html,js}"
          ,'./node_modules/flowbite/**/*.js'
  ],
  theme: {
    extend: {
      textStyles: {
        'first-letter': {
          '&::first-letter': {
            fontSize: '2em',
            fontWeight: 'bold',
            // Tambahkan properti CSS lain yang diinginkan
          },
        },
      },
    },
  },
  plugins: ['flowbite/plugin'],
}
