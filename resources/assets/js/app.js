require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    data:{	
    	titulo: 'Hola mundo con Vue',

    frutas: [
    {nombre: 'Pera', cantidad:10},
    {nombre: 'Manzana', cantidad:0},
    {nombre: 'Platano', cantidad:11},
    ],
    nuevaFruta: ''
    },

    methods:{
    	agregarFruta(){
    		console.log('diste click');
    	}
    }
    
});
