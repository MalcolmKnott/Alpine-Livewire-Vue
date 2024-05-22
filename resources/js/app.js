import './bootstrap';

import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';

const app = createApp({});

app.component('example-component', ExampleComponent);

app.mount('#app');


import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';

// import focus from '@alpinejs/focus'
// Alpine.plugin(focus)

// import intersect from '@alpinejs/intersect'
// Alpine.plugin(intersect)

// import collapse from '@alpinejs/collapse'
// Alpine.plugin(collapse)

window.Alpine = Alpine

Livewire.start()
