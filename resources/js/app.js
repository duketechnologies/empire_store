window._ = require('lodash');
window.$ = window.jQuery = require('jquery');

require('remodal');
require('select2')
import Swiper, {Navigation, Pagination, Scrollbar} from 'swiper';
import 'swiper/css/bundle';

Swiper.use([Navigation, Pagination, Scrollbar]);

import 'simplebar';
import 'simplebar/dist/simplebar.css';

$(document).ready(function () {

    console.log('ready...');


    const faqs = document.querySelectorAll('.faq')
    const menu = document.querySelector('.menu')
    const catalog = document.querySelector('#catalog')
    const close_btn = document.querySelector('#close-menu')
    const in_stock = document.querySelector('.existence')
    const search = document.querySelector('#search')
    const search_block = document.querySelector('.search-block')
    const craft = document.querySelectorAll('.product__package')
    const craftInput = document.querySelectorAll('.product__package input')
    const craftLabel = document.querySelectorAll('.product__package label')

    craftLabel.forEach((item, index) => {
        item.addEventListener('click', function (e) {
            craft[index].classList.toggle('active')
        })
    })

        console.log(craft)


        $('[data-open-block]').on('click', function () {
            const activeCls = 'is-active';

            $('[data-content]').removeClass(activeCls);
            $('[data-nav]').removeClass('active')
            $(`[data-content="${$(this).data('open-block')}"`).addClass(activeCls);
        });


        $('#select-country').select2({
            maximumSelectionSize: 1
        }).on('select2-opening', function (e) {
            if ($(this).select2('val').length > 0) {
                e.preventDefault();
            }
        });

        search.onfocus = function () {
            search_block.style.transform = "translateY(0)"
        }
        search.onblur = function () {
            search_block.style.transform = "translateY(-34rem)"
        }
        const swiper = new Swiper('.swiper-box', {
            loop: true,
            slidesPerView: 1,
            autoplay: {
                delay: 3000,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });

        const swiperHero = new Swiper('.swiper-hero', {
            loop: true,
            slidesPerView: 1,
            autoplay: {
                delay: 3000,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });

        const swiperProduct = new Swiper('.swiper-product', {
            loop: true,
            slidesPerView: 1,
            autoplay: {
                delay: 3000,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });

        const swiperItem = new Swiper('.swiper-item', {
            loop: true,
            slidesPerView: 4,
            spaceBetween: 16,
            autoplay: {
                delay: 3000,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        })
        const swiperZoom = new Swiper('.swiper-zoom', {
            // loop: true,
            slidesPerView: 1,
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
            autoplay: {
                delay: 3000,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        })
        const href = window.location.href;
        if (href.includes('faq') || href.includes('franchise') || href.includes('vacancies')) {
            faqs.forEach(faq => {
                faq.addEventListener('click', () => {
                    faq.classList.toggle('active');
                });
            });
        }

        if (window.location.href.includes('item')) {
            in_stock.addEventListener('click', () => {
                in_stock.classList.toggle('active')
            })
        }

        catalog ? catalog.addEventListener('click', (e) => {
            e.preventDefault()
            menu.classList.add("active")
        }) : null

        close_btn ? close_btn.addEventListener('click', (e) => {
            e.preventDefault()
            menu.classList.remove("active")
        }) : null

// const open = menu.classList.contains('active')
//
// if ( open ) {
// document.addEventListener('click', () => {
//         // menu.style.transform = 'translateX(-29rem)'
//     alert()
// })
//
// }

// let options = {
//     width: 400, // required
//     height: 500,
//     zoomWidth: 500,
//     offset: {vertical:0 , horizontal: 10},
//     scale: 1.5,
//     // more options here
// };
// new ImageZoom(document.getElementById("img-container"), options);
    });
