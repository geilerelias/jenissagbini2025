// Vuetify
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

// Translations provided by Vuetify
import { es } from 'vuetify/locale'

//icons
import '@mdi/font/css/materialdesignicons.css' // Ensure you are using css-loader


const vuetify = createVuetify({
    locale: {
        locale: 'es',
        messages: { es }, // Usa el locale español incluido por Vuetify
    },
    components,
    directives,
    icons: {
        defaultSet: 'mdi', // This is already the default value - only for display purposes
    },
    theme: {
        defaultTheme: 'light',
        themes: {
            light: {
                colors: {
                    primary: '#272727',
                    secondary: '#9e9e9e',
                    accent: '#212121',
                    error: '#f44336',
                    warning: '#ff9800',
                    info: '#1e88e5',
                    success: '#4caf50',
                },
                variables: {
                    fontFamily: 'Poppins, sans-serif',
                },
            },
            dark: {
                colors: {
                    primary: '#272727',
                    secondary: '#9e9e9e',
                    accent: '#212121',
                    error: '#f44336',
                    warning: '#ff9800',
                    info: '#1e88e5',
                    success: '#4caf50',
                }
            },

        },
        typography: {
            fontFamily: 'Montserrat, sans-serif', // Configura Montserrat como fuente predeterminada
        },
    },
});

export default vuetify;







