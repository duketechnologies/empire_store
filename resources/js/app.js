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
const get = document.querySelector('#vertical')
console.log(window.location.href)

if (window.location.href.includes('faq'))
{
    faqs.forEach(faq => {
        faq.addEventListener('click', (e) => {
            faq.classList.toggle('active');
        });
    });
}
catalog ? catalog.addEventListener ('click', (e) => {
    e.preventDefault()
    menu.classList.add("active")
}) : null

close_btn ? close_btn.addEventListener('click', (e) => {
    e.preventDefault()
    menu.classList.remove("active")
}) : null
