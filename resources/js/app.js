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
  const burger = document.querySelector('.burger')
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
  // const categoriesBlock = document.querySelectorAll('.categories ul')
  const fieldsetInput = document.querySelectorAll('fieldset input')
  const fieldsetLegend = document.querySelectorAll('fieldset legend')
  const selected = document.querySelectorAll(".selected");
  const optionsContainer = document.querySelectorAll(".options-container");
  const optionsList = document.querySelectorAll(".option");
  const language = document.querySelector('.language')
  const headerPhone = document.querySelector('#header-phone')
  // Mobile
  const filter_sort_open = document.querySelector('.filter-header')
  const filter_sort_close = document.querySelector('.menu-header')
  const filter_sort_menu = document.querySelector('.filter-mobile-menu')
  const faqs_mobile = document.querySelectorAll('.filter-mobile-items')
  const activeTrigger = document.querySelectorAll('#menu-trigger')
  const activeContent = document.querySelectorAll('.filter-mobile-items .answers')
  const another_btn_mobile = document.querySelector('#another-mobile-btn')
  const another_block_mobile = document.querySelector('#another-btn-block')
  const another_btn_delete = document.querySelector('#another-btn-delete')
  const positionBlock = document.querySelector('#position-block')
  const positionGrid = document.querySelector('#position-grid')
  const icons = document.querySelectorAll('.icons')
  const filterProducts = document.querySelector('.filter-products')
  const openBtn = document.querySelectorAll('#open-block .open')
  const openBlock = document.querySelectorAll('#open-block .open-content')
  const filterBlock = document.querySelector('#filter-block')
  const myElement = document.querySelector('#filter-string')
  const search_mobile_open = document.querySelector('.search-icon')
  const search_mobile_close = document.querySelector('.search-close-btn')

  // mobile burger click
  const menu_mobile = document.querySelector('.menu-mobile')
  const menu_mobile_close = document.querySelectorAll('#anti-burger')
  const menu_mobile_bg = document.querySelector('.menu-mobile-bg')
  burger.addEventListener('click', () => {
    menu_mobile.classList.add('active')
    menu_mobile_bg.classList.add('active')
  })
  document.addEventListener('click', function(e) {
    const target_mobile = e.target;
    const its_menu_mobile = target_mobile == menu_mobile || menu_mobile.contains(target_mobile);
    const its_btnMenu_mobile = target_mobile == burger;
    const menu_mobile_is_active = menu_mobile.classList.contains('active');

    if (!its_menu_mobile && !its_btnMenu_mobile && menu_mobile_is_active ) {
      menu_mobile.classList.remove('active')
      menu_mobile_bg.classList.remove('active')
    }
  });
  menu_mobile_close ? menu_mobile_close.forEach(item => {
    item.addEventListener('click', () => {
      menu_mobile.classList.remove('active')
      menu_mobile_bg.classList.remove('active')
    })
  }) : null
  // mobile burger click

  // переход на другие ссылки внутри мобильного меню
  const main_items = document.querySelectorAll('#main-items li')
  const mainBlock = document.querySelector('.menu-mobile--main')
  const referenceBlock = document.querySelector('.menu-mobile--references')
  const back_to_main_button = document.querySelector('.menu-back-button')
  main_items.forEach((item,index) => {
    item.addEventListener('click', () => {
      mainBlock.classList.remove('active')
      referenceBlock.classList.add('active')
    })
  })
  back_to_main_button.addEventListener('click', () => {
    referenceBlock.classList.remove('active')
    mainBlock.classList.add('active')
  })
  // переход на другие ссылки внутри мобильного меню

  // filter mobile sort menu , страница "каталог и фильтры
  if (href.includes('/filters')) {
    filter_sort_open.addEventListener('click', () => {
    filter_sort_menu.classList.add('active')
    })
    filter_sort_close.addEventListener('click', () => {
    filter_sort_menu.classList.remove('active')
    })
  }

  // filter mobile sort menu , страница "каталог и фильтры

  // const myString = document.querySelector('#filter-string').innerHTML

  // Mobile open search block , header
  search_mobile_open.addEventListener('click', () => {
    search_mobile_open.classList.add('active')
    search_block.style.transform = "translateY(-.5rem)"
  })
  search_mobile_close.addEventListener('click', () => {
    search_mobile_open.classList.remove('active')
    search_block.style.transform = "translateY(-34rem)"
  })
  // Mobile open search block

  // MOBILE OPEN BLOCK FUNCTION , page "ordering", "profile"
  openBtn.forEach((item, index) => {
    item.addEventListener('click', () => {
      item.classList.toggle('opened')
      openBlock[index].classList.toggle('opened')
    })
  })
  // MOBILE OPEN BLOCK FUNCTION , page "ordering", "profile"

  // FAQS mobile
  faqs_mobile.forEach(faq => {
    faq.addEventListener('click', () => {
      faq.classList.toggle('active');
    });
  });
  // FAQS mobile

  // Mobile filter page , handleChange display: flex to grid
  if ( href.includes('/filters')) {
    positionGrid.addEventListener('click', () => {
      positionBlock.classList.remove('active')
      positionGrid.classList.add('active')
      filterProducts.classList.add('grid')
    })
    positionBlock.addEventListener('click', () => {
      positionGrid.classList.remove('active')
      positionBlock.classList.add('active')
      filterProducts.classList.remove('grid')
    })
    // FILTER PAGE

    // FILTER PAGE
  }
  // Mobile filter page , handleChange display: flex to grid

  // HOME ANIMATION
  const loader = () => {
    document.querySelector('.loader').style.opacity = 0
    }
  const loader_display = () => {
    document.querySelector('.loader').style.display = 'none'
  }
  setTimeout(loader, 3000)
  setTimeout(loader_display, 4000)
  // HOME ANIMATION

  // ADDRESS PAGE MAP , нужно доделать
  if (href.includes('/address')) {
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
  }
  // ADDRESS PAGE MAP , нужно доделать

  // Появление выбора языка , десктоп хедер
  language.addEventListener('click', (e) => {
    e.preventDefault();
    language.classList.toggle('active')
    language.classList.contains('active') ? headerPhone.style.opacity = 0 : headerPhone.style.opacity = 1
  })
  // Появление выбора языка , десктоп хедер

  // Mobile filter page, клик на элемент в блоке фильтра , рядом появляется свг чекмарка и выделяется текст бордер боттомом
  selected.forEach((item,index) => {
    item.addEventListener("click", () => {
      selected[index].classList.toggle('active')
      optionsContainer[index].classList.toggle("active");
    });
  })
  // Mobile filter page, клик на элемент в блоке фильтра , рядом появляется свг чекмарка и выделяется текст бордер боттомом

  // Модалка локация куки 2 , кастомный селект
  optionsList.forEach(item => {
    item.addEventListener("click", () => {
      selected.innerHTML = item.querySelector("label").innerHTML;
      optionsContainer.classList.remove("active");
    });
  });
  // Модалка локация куки 2

  // Появление legend если input не пустой
  fieldsetInput.forEach((item,index) => {
    item.onchange = (e) => {
      if (e.target.value !== "") {
        fieldsetLegend[index].style.opacity = 1
      } else if (e.target.value === "") {
        fieldsetLegend[index].style.opacity = 0
      }
    }
  })

  // Открывает сортировка товаров , страница "каталог и фильтры"
  if (href.includes('/filters')) {
    const sortClose = document.querySelector('.sort__title')
    const sortBlock = document.querySelector('#filter-block')

    sortClose.addEventListener('click', () => {
      sortBlock.classList.toggle('active')
    })
  }
  // Открывает сортировка товаров , страница "каталог и фильтры"

  // Открывает подменюшки предметов , страница "каталог и фильтры"
  const pick = document.querySelectorAll('.pick')

  // categories.forEach((item, index) => {
  //   item.addEventListener('click', () => {
  //     categories[index].classList.add('active')
  //     console.log(1)
  //   })
  // });

  pick.forEach((item,index) => {
    item.addEventListener('click', () => {
      categories[index].classList.toggle('active')
    })
  })

  // Выделение блока другим цветом при активном "крафт-пакета" на странице "корзина"
  craftLabel.forEach((item, index) => {
    item.addEventListener('click', function (e) {
      craft[index].classList.toggle('active')
    })
  })
  // Выделение блока другим цветом при активном "крафт-пакета" на странице "корзина"

  // Активный элемент в меню , страница "faq"
  $('[data-faq]').on('click', function (e) {
    e.preventDefault()
    $('[data-faq]').removeClass('active')
    $(this).addClass('active')
  })
  // Активный элемент в меню , страница "faq"

  $('[data-filter]').on('click', function (e) {
    e.preventDefault()
    $('[data-filter]').removeClass('active')
    $(this).addClass('active')
  })

  // Смена контента при клике , страница "Личный кабинет"
  $('[data-open-block]').on('click', function (e) {
    e.preventDefault()
    const activeCls = 'is-active';

    $('[data-content]').removeClass(activeCls);
    $('[data-nav]').removeClass('active')
    $(`[data-content="${$(this).data('open-block')}"`).addClass(activeCls);
    $(this).addClass('active')
  });

  // Кастомные селекторы , в модалке "франшизы"
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
  // Кастомные селекторы , в модалке "франшизы"

  // появление блока с поиском , главная страница
  search.onfocus = function () {
    search_block.style.transform = "translateY(0)"
    search_block.classList.add('active')
  }
  search.onblur = function () {
    search_block.style.transform = "translateY(-34rem)"
    search_block.classList.remove('active')
  }


  // появление блока с поиском , главная страница

  const swiper = new Swiper('.swiper-box', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 8,
    autoplay: {
      delay: 3000,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: ".swiper-pagination2",
    },
    breakpoints: {
      1200: {
        centeredSlides: true,

      }
    }
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
    pagination: {
      el: ".swiper-pagination",
    }
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
    pagination: {
      el: ".swiper-pagination5",
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
  // mobile swipers
  const swiperTired = new Swiper('.swiper-tired', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 8,
    autoplay: {
      delay: 3000,
    },
    pagination: {
      el: ".swiper-pagination3",
    },
    breakpoints: {
      1200: {
        centeredSlides: true,

      }
    }
  });
  const swiperPreorder = new Swiper('.swiper-preorder', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 8,
    autoplay: {
      delay: 3000,
    },
    pagination: {
      el: ".swiper-pagination4",
    },
    breakpoints: {
      1200: {
        centeredSlides: true,

      }
    }
  });
  // mobile swipers

  // страница faq
  if (href.includes('faq') || href.includes('franchise') || href.includes('vacancies')) {
    faqs.forEach(faq => {
      faq.addEventListener('click', () => {
        faq.classList.toggle('active');
      });
    });
  }
  // страница faq

  // открывающийся элемент , "карточка товара"
  if (window.location.href.includes('item')) {
    in_stock.addEventListener('click', () => {
      in_stock.classList.toggle('active')
    })
  }

  // Меню при клике на каталог
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


    if (!its_menu && !its_btnMenu && menu_is_active ) {
      menu.classList.remove('active')
      document.querySelector('.menu-bg').classList.remove('active')
    }
  });
  close_btn ? close_btn.addEventListener('click', (e) => {
    e.preventDefault()
    menu.classList.remove("active")
  }) : null
  // Меню при клике на каталог

  // "Другой получатель" , страница "оформление заказа"
  if (href.includes('/ordering')) {
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

    // Тоже самое ток мобильная
    another_btn_mobile.addEventListener('click', (e) => {
      e.preventDefault()
      another_btn_mobile.classList.add('hidden')
      another_block_mobile.classList.add('show')
    })

    another_btn_delete.addEventListener('click', (e) => {
      e.preventDefault()
      another_block_mobile.classList.remove('show')
      another_btn_mobile.classList.remove('hidden')
    })
    // "Другой получатель" , страница "оформление заказа"
  }


  // Появление блоков при выборе соответствующего radio инпута , "оформление заказа"
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
  // Появление блоков при выборе соответствующего radio инпута , "оформление заказа"

  // Переход на следующий инпут при заполнений первого , модалка "код с телефона"
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
  // Переход на следующий инпут при заполнений первого , модалка "код с телефона"

  // открытие блоков при клике , мобильная сортировка , страница "каталог и фильтры"

  // MOBILE FILTER MENU
  if ( href.includes('/filters')) {
    activeTrigger.forEach((item,index) => {
      item.addEventListener('click', () => {
        item.classList.toggle('active')
        activeContent[index].classList.toggle('active')
      })
    })
    // const filterString = (myString) => {
    //   if (myString.length > 22) {
    //     return myString.substring(0, 22) + '...'
    //   }
    // }
    // myElement.innerHTML = filterString(myString)

  }
  // MOBILE FILTER MENU
});
