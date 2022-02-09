import placeholder from "lodash/fp/placeholder";

window._ = require('lodash');
window.$ = window.jQuery = require('jquery');

require('remodal');
require('select2');
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
  const craftLabel = document.querySelectorAll('.product__package label')
  const another_svg = document.querySelector('.another svg')
  const another_block = document.querySelector('.another')
  const another_btn = document.querySelector('#another-btn')
  const btn = document.querySelector('#form-wrap button');
  const inputs = [...document.querySelectorAll('#form-wrap input')];
  const href = window.location.href
  const categories = document.querySelectorAll('.categories')
  const fieldsetInput = document.querySelectorAll('fieldset input')
  const fieldsetLegend = document.querySelectorAll('fieldset legend')
  const selected = document.querySelectorAll(".selected");
  const optionsContainer = document.querySelectorAll(".options-container");
  const optionsList = document.querySelectorAll(".option");
  const language = document.querySelector('.language')
  const headerPhone = document.querySelector('#header-phone')

  if (href.includes('/')) {
   const loader = () => {
    document.querySelector('.loader').style.opacity = 0
    }
    const loader_display = () => {
      document.querySelector('.loader').style.display = 'none'
    }
    setTimeout(loader, 3000)
    setTimeout(loader_display, 4000)
  }



  ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
        center: [43.237163, 76.945627],
        zoom: 14
      }, {
        searchControlProvider: 'yandex#search'
      }),

        // Создаём макет содержимого.
        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
          '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
          hintContent: 'Собственный значок метки',
          balloonContent: 'Это красивая метка'
        }, {
          // Опции.
          // Необходимо указать данный тип макета.
          iconLayout: 'default#image',
          // Своё изображение иконки метки.
          iconImageHref: './i/checkmark.svg',
          // Размеры метки.
          iconImageSize: [72, 77],
          // Смещение левого верхнего угла иконки относительно
          // её "ножки" (точки привязки).
          iconImageOffset: [-5, -38]
        }),

        myPlacemarkWithContent = new ymaps.Placemark([55.661574, 37.573856], {
          hintContent: 'Собственный значок метки с контентом',
          balloonContent: 'А эта — новогодняя',
          iconContent: '12'
        }, {
          // Опции.
          // Необходимо указать данный тип макета.
          iconLayout: 'default#imageWithContent',
          // Своё изображение иконки метки.
          iconImageHref: 'images/ball.png',
          // Размеры метки.
          iconImageSize: [48, 48],
          // Смещение левого верхнего угла иконки относительно
          // её "ножки" (точки привязки).
          iconImageOffset: [-24, -24],
          // Смещение слоя с содержимым относительно слоя с картинкой.
          iconContentOffset: [15, 15],
          // Макет содержимого.
          iconContentLayout: MyIconContentLayout
        });

    myMap.geoObjects
      .add(myPlacemark)
      .add(myPlacemarkWithContent);
  });

  language.addEventListener('click', (e) => {
    e.preventDefault();
    language.classList.toggle('active')
    language.classList.contains('active') ? headerPhone.style.opacity = 0 : headerPhone.style.opacity = 1
  })

  selected.forEach((item,index) => {
    item.addEventListener("click", () => {
      selected[index].classList.toggle('active')
      optionsContainer[index].classList.toggle("active");
    });
  })

  optionsList.forEach(item => {
    item.addEventListener("click", () => {
      selected.innerHTML = item.querySelector("label").innerHTML;
      optionsContainer.classList.remove("active");
    });
  });

  fieldsetInput.forEach((item,index) => {
    item.onchange = (e) => {
      if (e.target.value !== "") {
        fieldsetLegend[index].style.opacity = 1
      } else if (e.target.value === "") {
        fieldsetLegend[index].style.opacity = 0
      }
    }

  })

  categories.forEach((item, index) => {
    item.addEventListener('click', () => {
      categories[index].classList.toggle('active')
    })
  })

  craftLabel.forEach((item, index) => {
    item.addEventListener('click', function (e) {
      craft[index].classList.toggle('active')
    })
  })

  $('[data-faq]').on('click', function (e) {
    e.preventDefault()
    $('[data-faq]').removeClass('active')
    $(this).addClass('active')
  })

  $('[data-filter]').on('click', function (e) {
    e.preventDefault()
    $('[data-filter]').removeClass('active')
    $(this).addClass('active')
  })

  $('[data-open-block]').on('click', function (e) {
    e.preventDefault()
    const activeCls = 'is-active';

    $('[data-content]').removeClass(activeCls);
    $('[data-nav]').removeClass('active')
    $(`[data-content="${$(this).data('open-block')}"`).addClass(activeCls);
    $(this).addClass('active')
  });

  let cation = new BVSelect({
    selector: "#select-country",
    width: "100%",
    placeholder: 'Страна'
  });

  let change_location = new BVSelect({
    selector: "#select-country2",
    width: "100%",
    placeholder: 'Страна'
  });

  search.onfocus = function () {
    search_block.style.transform = "translateY(0)"
    search_block.classList.add('active')
  }
  search.onblur = function () {
    search_block.style.transform = "translateY(-34rem)"
    search_block.classList.remove('active')
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
  const openMenu = function(e) {
    menu.classList.add('active');
    document.querySelector('.menu-bg').classList.add('active')
  }

  catalog.addEventListener('click', (e) => {
    e.preventDefault()
    openMenu()
  })
  document.addEventListener('click', function(e) {
    const target = e.target;
    const its_menu = target == menu || menu.contains(target);
    const its_btnMenu = target == catalog;
    const menu_is_active = menu.classList.contains('active');

    if (!its_menu && !its_btnMenu && menu_is_active) {
      menu.classList.remove('active')
      document.querySelector('.menu-bg').classList.remove('active')
    }
  });
  close_btn ? close_btn.addEventListener('click', (e) => {
    e.preventDefault()
    menu.classList.remove("active")
  }) : null


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
