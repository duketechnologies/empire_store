
window._ = require('lodash');
window.$ = window.jQuery = require('jquery');

require('bootstrap');
require('remodal');
require('./faq.js');


$(document).ready(function (){

    console.log('ready...');

});

const faqs = document.querySelectorAll('.faq')
const menu = document.querySelector('.menu')
const catalog = document.querySelector('#catalog')
const close_btn = document.querySelector('#close-menu')
const in_stock = document.querySelector('.existence')

import Swiper, {Navigation, Autoplay} from 'swiper';

Swiper.use([Navigation, Autoplay]);

const swiper = new Swiper('.swiper-box', {
    // Optional parameters
    loop: true,
    slidesPerView: 1,
    autoplay: {
        delay: 3000,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

})
const swiperProduct = new Swiper('.swiper-product', {
    // Optional parameters
    loop: true,
    slidesPerView: 1,
    autoplay: {
        delay: 3000,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

})

const swiperItem = new Swiper('.swiper-item', {
    // Optional parameters
    loop: true,
    slidesPerView: 4,
    spaceBetween: 16,
    autoplay: {
        delay: 3000,
    },
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

})

if (window.location.href.includes('faq'))
{
    faqs.forEach(faq => {
        faq.addEventListener('click', (e) => {
            faq.classList.toggle('active');
        });
    });
}

if (window.location.href.includes('item'))
{
    in_stock.addEventListener('click', () => {
        in_stock.classList.toggle('active')
    })
}

catalog ? catalog.addEventListener ('click', (e) => {
    e.preventDefault()
    menu.classList.add("active")
}) : null

close_btn ? close_btn.addEventListener('click', (e) => {
    e.preventDefault()
    menu.classList.remove("active")
}) : null
