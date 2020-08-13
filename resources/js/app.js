

require('./bootstrap');


window.Vue = require('vue');



import Swiper from 'swiper/bundle';

import 'swiper/swiper-bundle.css';




Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
    data:{
        mensaje: 'Hola desde vue'
    }
});
const swiper = new Swiper('.swiper-container', {
    slidesPerView: '5',
    spaceBetween: 10,
    centeredSlides: true,
    freeMode: true,
    loop: true,
    autoplay:{
        el:10000
},
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }, 
});
