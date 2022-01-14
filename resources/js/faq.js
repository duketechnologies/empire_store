const faqs = document.querySelectorAll('.faq')
const menu = document.querySelector('.menu')
const catalog = document.querySelector('#catalog')
const close_btn = document.querySelector('#close-menu')

catalog.addEventListener('click', () => {
    menu.classList.add("active")
})
close_btn.addEventListener('click', (e) => {
    menu.classList.remove("active")
})

faqs.forEach(faq => {
    faq.addEventListener('click', () => {
        faq.classList.toggle('active');

    });
});


