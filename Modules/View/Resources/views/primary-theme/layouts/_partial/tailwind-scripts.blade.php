
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            screens: {
                'sm': '640px',
                'md': '768px',
                'lg': '1024px',
                'xl': '1280px',
                '2xl': '1536px',
            },
            extend: {
                colors: {
                    color: '#da373d',
                    bgColor: '#5899b7',
                    buttonBgColor: '#00ADEE',
                    titleColor: '#3B5998'
                },
                fontFamily: {
                    'roboto': ['Roboto', 'sans-serif'],
                    'lato': ['Lato', 'sans-serif'],
                },
                boxShadow: {
                    '3xl': '0_35px_60px_-15px_rgba(0,0,0,0.3)',
                },
                screens: {
                    // 'xs': '340px',
                },
            }
        }
    }
</script>
