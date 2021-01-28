/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('alpinejs');

// Extra JS
require('./extras/modern');
require('./extras/forms/form-wizard');
require('./extras/forms/summernote');
require('./extras/table-data');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i)

files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Toast Configuration
// window.toastTimeout = 7200;
window.toastTimeout = 34948300;

window.Emitter = new Vue();

window.toastSuccess = (title, body, visible) => {
    window.Emitter.$emit('toast-success', title, body, visible);
};

window.toastError = (title, body, visible) => {
    window.Emitter.$emit('toast-error', title, body, visible);
};

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
