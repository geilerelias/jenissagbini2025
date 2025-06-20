import './bootstrap';
import '../css/app.css';



import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import vuetify from './plugins/vuetify'; // Importa el plugin de Vuetify

import { createPinia } from 'pinia'
// importing AOS css style globally
import 'aos/dist/aos.css'

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${ title } - ${ appName }`,
    resolve: (name) => resolvePageComponent(`./Pages/${ name }.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(vuetify)
            .use(createPinia())
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
