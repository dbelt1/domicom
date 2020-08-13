

require('./bootstrap');
import Swiper from 'swiper/bundle';
import 'swiper/swiper-bundle.css';
window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);



const app = new Vue({
    el: '#app',
    data:{
        mensaje:'prueba'
    }
});

if ( screen.width < 600) {
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: '1',
        spaceBetween: 10,
       
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

}
else if (screen.width >= 600 && screen.width < 1024) {
    const swiper = new Swiper('.swiper-container', {
            slidesPerView: '2',
            spaceBetween: 10,
           
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
}else if (screen.width >= 1024 && screen.width <= 1400) {

    const swiper = new Swiper('.swiper-container', {
        slidesPerView: '3',
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
}
  
else {
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
}

