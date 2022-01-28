window._ = require('lodash');
window.$ = window.jQuery = require('jquery');

require('remodal');
require('select2')
import Swiper, {Navigation, Pagination, Scrollbar} from 'swiper';
import 'swiper/css/bundle';

Swiper.use([Navigation, Pagination, Scrollbar]);

import 'simplebar';
import 'simplebar/dist/simplebar.css';
// require('js-image-zoom')

import ImageZoom from 'js-image-zoom'
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
    const craftLabel = document.querySelectorAll('.product__package label')
    const another_svg = document.querySelector('.another svg')
    const another_block = document.querySelector('.another')
    const another_btn = document.querySelector('#another-btn')
    const btn = document.querySelector('#form-wrap button');
    const inputs = document.querySelectorAll('#form-wrap input');
    const href = window.location.href




    craftLabel.forEach((item, index) => {
        item.addEventListener('click', function (e) {
            craft[index].classList.toggle('active')
        })
    })

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

    const close_menu = () => {
        if(menu.classList.contains('active')){
            document.addEventListener('click', () => {
                menu.classList.remove('active')
            })
        }
    }
    catalog.addEventListener('click', (e) => {
        e.preventDefault()
        menu.classList.add("active")
        close_menu()
    })

    close_btn ? close_btn.addEventListener('click', (e) => {
        e.preventDefault()
        menu.classList.remove("active")
    }) : null


    const openMenu = function() {
        menu.classList.add('active');
    }

    another_svg ? another_svg.addEventListener('click', function (e) {
        e.preventDefault()
        another_block.classList.add('hidden')
        another_btn.classList.remove('hidden')
        setTimeout(() => {
            another_block.style.display = "none"
            another_btn.style.display = 'flex'
        }, 350)

    }) : null
    another_btn ? another_btn.addEventListener('click', function (e) {
        e.preventDefault()
        another_btn.classList.add('hidden')
        another_block.classList.remove('hidden')
        setTimeout(() => {
            another_btn.style.display = 'none'
            another_block.style.display = 'block'
        }, 350)

    }) : null

    document.querySelectorAll('.blocks input').forEach(item => {
        item.addEventListener('click', e => {
            if (item.id === 'free') {
                document.querySelector('.pickup').style.display = 'flex'
            } else {
                document.querySelector('.pickup').style.display = 'none'
            }
        })
    })

    document.querySelectorAll('.payment input').forEach(item => {
        item.addEventListener('click', e => {
            if (item.id === 'check') {
                document.querySelector('.requisites').style.display = 'block'
            } else {
                document.querySelector('.requisites').style.display = 'none'
            }
        })
    })

    document.addEventListener("DOMContentLoaded", () => {
        inputs[0].focus()
    });

    inputs.forEach((input, index) => {
        input.addEventListener("input", e => {
            if ((index+1) < inputs.length) {
                inputs[index+1].focus();
            }
            const isValid = inputs.every(el => el.value.trim());
            btn.disabled = !isValid;
            if (isValid) {
                btn.focus()
            }
        })
    })

    if (href.includes('filter')) {
        document.querySelector('.sort').addEventListener('click', () => {
            document.querySelector('.filter').classList.toggle('active')
        })
    }
});
