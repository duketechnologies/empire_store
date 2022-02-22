@extends('layouts.theme')

@section('title', 'Личный кабинет')

@section('content')
  <section id="profile">
    <div class="switch">
      <div class="title">
        <h1>
          Здравствуйте, <span>Айжан Сулейманова</span>
        </h1>
        <a href="#">
          <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.70918 8.6385L2.21381 7.15L8.44886 7.15C8.6213 7.15 8.78667 7.08152 8.9086 6.95962C9.03053 6.83772 9.09903 6.67239 9.09903 6.5C9.09903 6.32761 9.03053 6.16228 8.9086 6.04038C8.78667 5.91848 8.6213 5.85 8.44886 5.85L2.21381 5.85L3.70918 4.3615C3.77012 4.30107 3.81849 4.22918 3.8515 4.14997C3.88451 4.07077 3.9015 3.98581 3.9015 3.9C3.9015 3.81419 3.88451 3.72923 3.8515 3.65003C3.81849 3.57082 3.77012 3.49893 3.70918 3.4385C3.64874 3.37758 3.57683 3.32922 3.49761 3.29622C3.41838 3.26322 3.3334 3.24623 3.24757 3.24623C3.16174 3.24623 3.07676 3.26322 2.99753 3.29622C2.9183 3.32922 2.84639 3.37758 2.78595 3.4385L0.185305 6.0385C0.126114 6.10032 0.0797147 6.17321 0.0487706 6.253C-0.0162573 6.41125 -0.0162573 6.58875 0.0487707 6.747C0.0797147 6.82679 0.126114 6.89968 0.185305 6.9615L2.78595 9.5615C2.84657 9.6221 2.91854 9.67018 2.99774 9.70298C3.07695 9.73578 3.16184 9.75266 3.24757 9.75266C3.3333 9.75266 3.41819 9.73578 3.49739 9.70298C3.5766 9.67018 3.64856 9.6221 3.70918 9.5615C3.7698 9.50089 3.81789 9.42895 3.8507 9.34976C3.8835 9.27058 3.90039 9.18571 3.90039 9.1C3.90039 9.01429 3.8835 8.92942 3.8507 8.85024C3.81789 8.77105 3.7698 8.69911 3.70918 8.6385ZM7.7987 0.65C7.7987 0.822391 7.8672 0.987721 7.98913 1.10962C8.11106 1.23152 8.27643 1.3 8.44886 1.3L11.0495 1.3C11.2219 1.3 11.3873 1.36848 11.5092 1.49038C11.6312 1.61228 11.6997 1.77761 11.6997 1.95L11.6997 11.05C11.6997 11.2224 11.6312 11.3877 11.5092 11.5096C11.3873 11.6315 11.2219 11.7 11.0495 11.7L8.44886 11.7C8.27643 11.7 8.11106 11.7685 7.98913 11.8904C7.8672 12.0123 7.7987 12.1776 7.7987 12.35C7.7987 12.5224 7.8672 12.6877 7.98913 12.8096C8.11106 12.9315 8.27643 13 8.44886 13L11.0495 13C11.5668 13 12.0629 12.7946 12.4287 12.4289C12.7945 12.0632 13 11.5672 13 11.05L13 1.95C13 1.43283 12.7945 0.936838 12.4287 0.571142C12.0629 0.205446 11.5668 4.48073e-07 11.0495 -4.8299e-07L8.44886 -3.69312e-07C8.27643 -3.61774e-07 8.11106 0.068482 7.98913 0.19038C7.8672 0.312278 7.7987 0.477609 7.7987 0.65Z" fill="#303133"/>
          </svg>
          <p>Выйти</p>
        </a>
      </div>
        <div class="type">
          <ul class="links">
            <li ><a href="#" class="active" data-nav="first" data-open-block="my-account">Мой аккаунт</a></li>
            <li ><a href="#" data-nav="second" data-open-block="my-orders">Заказы</a></li>
            <li ><a href="#" data-nav="third" data-open-block="wishlist" >Избранное</a></li>
          </ul>
          <button class="btn">Выйти</button>
        </div>
{{--      DESKTOP PROFILE BLOCKS--}}
        <div class="my-profile is-active" data-content="my-account">
            <div class="profile-info">
                <form class="form">
                    <div class="user">
                        <fieldset>
                            <legend>Имя</legend>
                            <input type="text" name="name" value="" placeholder="Имя"/>
                        </fieldset>
                        <fieldset>
                            <legend>Телефон</legend>
                            <input type="tel" name="phone" value="" placeholder="Телефон"/>
                        </fieldset>
                        <fieldset>
                            <legend>Фамилия</legend>
                            <input type="text" name="surname" value="" placeholder="Фамилия"/>
                        </fieldset>
                        <fieldset>
                            <legend>Email</legend>
                            <input type="email" name="email" value="" placeholder="Email"/>
                        </fieldset>
                    </div>
                    <div class="buttons">
                        <button type="submit" class="main-btn">Сохранить</button>
                        <a href="#" class="link-btn">Изменить пароль</a>
                    </div>
                </form>
            </div>
            <div class="profile-address">
                <h3>Мои адреса</h3>
                <div class="address">
                    <div data-remodal-target="change_location">
                        <p class="place">Работа</p>
                        <p class="location" >Российская Федерация, Новосибирская область, Бердск, дом 17</p>
                    </div>
                    <div data-remodal-target="change_location">
                        <p class="place">Дом</p>
                        <p class="location">Российская Федерация, Новосибирская область, Бердск, дом 17</p>
                    </div>
                    <div class="add" data-remodal-target="new_location">
                        <p class="new-address" data-remodal-target="new_location">Другой адрес
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12.25" cy="12.25" r="11.25" stroke="#DEDCD8"/>
                                <path d="M12.25 7.25L12.25 17.25" stroke="#939393" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.25 12.25L7.25 12.25" stroke="#939393" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="orders" data-content="my-orders">
{{--              <h3>Вы еще не оформили ни одного заказа</h3>--}}
{{--              <a href="#">Начать шопинг</a>--}}
            <div class="title">
                <p>Мои заказы (2)</p>
                <p>Товаров в заказе</p>
                <p>Сумма</p>
                <p>Доставка</p>
                <p>Статус</p>
            </div>
            <div class="product">
                <div class="product__date">
                    <img src={{ url("/i/profile/product.png") }} alt=""/>
                    <div>
                        <p class="mark">№39210</p>
                        <p class="date">24 сентября 2021</p>
                    </div>
                </div>
                <div class="product__quantity">
                    <p>4 <span>товара</span></p>
                </div>
                <div class="product__price">
                    <p>80 100	₸</p>
                </div>
                <div class="product__place">
                    <p>Стоимость доставки:<span> 6 000 ₸</span></p>
                    <p>Адрес доставки: <span> “Дом” Алматы, Жарокова, 57</span></p>
                    <p>Ожидается: <span> 4 октября 2021</span></p>
                </div>
                <div class="product__status">
                    <p class="in-process">В обработке</p>
                </div>
            </div>
            <div class="product">
                <div class="product__date">
                    <img src={{ url("/i/profile/product-2.png") }} alt=""/>
                    <div>
                        <p class="mark">№39210</p>
                        <p class="date">24 сентября 2021</p>
                    </div>
                </div>
                <div class="product__quantity">
                    <p>16<span>товара</span></p>
                </div>
                <div class="product__price">
                    <p>749 200 ₸</p>
                </div>
                <div class="product__place">
                    <p>Стоимость доставки:<span> 6 000 ₸</span></p>
                    <p>Адрес доставки: <span> “Дом” Алматы, Жарокова, 57</span></p>
                    <p>Ожидается: <span> 4 октября 2021</span></p>
                </div>
                <div class="product__status">
                    <p class="delivered"><svg viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.125 5.75L2.85809 7.04982C3.28678 7.37134 3.89272 7.29779 4.23205 6.88305L9.25 0.75" stroke="#27AE60" stroke-linecap="round"/>
                        </svg>
                         Доставлено</p>
                </div>
            </div>
            <div class="product">
                <div class="product__date">
                    <img src={{ url("/i/profile/product-3.png") }} alt=""/>
                    <div>
                        <p class="mark">№39210</p>
                        <p class="date">24 сентября 2021</p>
                    </div>
                </div>
                <div class="product__quantity">
                    <p>16<span>товара</span></p>
                </div>
                <div class="product__price">
                    <p>749 200 ₸</p>
                </div>
                <div class="product__place">
                    <p>Стоимость доставки:<span> 6 000 ₸</span></p>
                    <p>Адрес доставки: <span> “Дом” Алматы, Жарокова, 57</span></p>
                    <p>Ожидается: <span> 4 октября 2021</span></p>
                </div>
                <div class="product__status">
                    <p class="delivered"><svg viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.125 5.75L2.85809 7.04982C3.28678 7.37134 3.89272 7.29779 4.23205 6.88305L9.25 0.75" stroke="#27AE60" stroke-linecap="round"/>
                        </svg>
                        Доставлено</p>
                </div>
            </div>
        </div>
        <div class="favorites" data-content="wishlist">

          <div class="favorites__menu">
            <div class="categories active">
              <p class="pick">Катергория
                <svg  viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 8H15" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                  <path id="vertical"d="M8 15L8 1" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </p>
              <ul>
                <li><a href="#">Панно</a></li>
                <li><a href="#">Статуэтки</a></li>
                <li><a href="#">Empire gallery</a></li>
                <li><a href="#" class="all">Все</a><span>(56)</span></li>
              </ul>
            </div>
            <div class="categories">
              <p class="pick">Катергория
                <svg  viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 8H15" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                  <path id="vertical"d="M8 15L8 1" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </p>
              <ul>
                <li><a href="#">Панно</a></li>
                <li><a href="#">Статуэтки</a></li>
                <li><a href="#">Empire gallery</a></li>
                <li><a href="#" class="all">Все</a><span>(56)</span></li>
              </ul>
            </div>
          </div>
          <div class="favorites__products">
            <h3>Избранные товары <sup>(56)</sup></h3>
            <div class="grid">
              <div class="grid__blocks">
                <div class="info">
                  <p class="name">Лампа Айша биби
                    <svg viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.6908 5.6654C16.8204 5.7649 16.9179 5.89931 16.9715 6.05235C17.0128 6.20535 17.0092 6.36675 16.9611 6.51781C16.913 6.66887 16.8224 6.80338 16.6999 6.90572L13.1941 10.2523L14.043 15.0044C14.0733 15.1612 14.0574 15.3234 13.9972 15.4716C13.9371 15.6199 13.8351 15.7481 13.7034 15.841C13.5578 15.945 13.3824 16.0006 13.2026 16C13.0658 16.0004 12.9313 15.9658 12.8121 15.8996L8.48304 13.6574L4.13696 15.8912C3.99755 15.9641 3.8403 15.9972 3.68286 15.9868C3.52543 15.9765 3.37403 15.9231 3.24567 15.8327C3.11397 15.7397 3.01202 15.6115 2.95186 15.4633C2.89169 15.315 2.87583 15.1529 2.90613 14.996L3.75497 10.2439L0.249246 6.89735C0.140134 6.79003 0.0627308 6.65545 0.0253444 6.50806C-0.012042 6.36066 -0.00800058 6.20602 0.0370349 6.06071C0.0862339 5.91202 0.176735 5.7799 0.298267 5.67934C0.419799 5.57878 0.567497 5.51381 0.724599 5.4918L5.55453 4.78902L7.71908 0.471957C7.78859 0.330505 7.89711 0.211211 8.03223 0.127741C8.16734 0.0442708 8.32358 0 8.48304 0C8.6425 0 8.79874 0.0442708 8.93385 0.127741C9.06897 0.211211 9.17749 0.330505 9.247 0.471957L11.4116 4.79739L16.2415 5.4918C16.4051 5.5056 16.5612 5.5659 16.6908 5.6654Z" fill="#D7D9E0"/>
                    </svg>
                  </p>
                  <p class="price">4 350 ₸</p>
                </div>
                <div class="grid-img">
                  <img src={{ url("/i/profile/grid-1.png") }} alt=""/>
                </div>
                <div class="buttons">
                  <a href="#" class="main-btn">Купить</a>
                  <a href="#" class="primary-btn">Страница товара</a>
                </div>
              </div>
              <div class="grid__blocks">
                <div class="info">
                  <p class="name">Лампа Айша биби
                    <svg viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.6908 5.6654C16.8204 5.7649 16.9179 5.89931 16.9715 6.05235C17.0128 6.20535 17.0092 6.36675 16.9611 6.51781C16.913 6.66887 16.8224 6.80338 16.6999 6.90572L13.1941 10.2523L14.043 15.0044C14.0733 15.1612 14.0574 15.3234 13.9972 15.4716C13.9371 15.6199 13.8351 15.7481 13.7034 15.841C13.5578 15.945 13.3824 16.0006 13.2026 16C13.0658 16.0004 12.9313 15.9658 12.8121 15.8996L8.48304 13.6574L4.13696 15.8912C3.99755 15.9641 3.8403 15.9972 3.68286 15.9868C3.52543 15.9765 3.37403 15.9231 3.24567 15.8327C3.11397 15.7397 3.01202 15.6115 2.95186 15.4633C2.89169 15.315 2.87583 15.1529 2.90613 14.996L3.75497 10.2439L0.249246 6.89735C0.140134 6.79003 0.0627308 6.65545 0.0253444 6.50806C-0.012042 6.36066 -0.00800058 6.20602 0.0370349 6.06071C0.0862339 5.91202 0.176735 5.7799 0.298267 5.67934C0.419799 5.57878 0.567497 5.51381 0.724599 5.4918L5.55453 4.78902L7.71908 0.471957C7.78859 0.330505 7.89711 0.211211 8.03223 0.127741C8.16734 0.0442708 8.32358 0 8.48304 0C8.6425 0 8.79874 0.0442708 8.93385 0.127741C9.06897 0.211211 9.17749 0.330505 9.247 0.471957L11.4116 4.79739L16.2415 5.4918C16.4051 5.5056 16.5612 5.5659 16.6908 5.6654Z" fill="#D7D9E0"/>
                    </svg>
                  </p>
                  <p class="price">4 350 ₸</p>
                </div>
                <div class="grid-img">
                  <img src={{ url("/i/profile/grid-1.png") }} alt=""/>
                </div>
                <div class="buttons">
                  <a href="#" class="main-btn">Купить</a>
                  <a href="#" class="primary-btn">Страница товара</a>
                </div>
              </div>
              <div class="grid__blocks">
                <div class="info">
                  <p class="name">Лампа Айша биби
                    <svg viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.6908 5.6654C16.8204 5.7649 16.9179 5.89931 16.9715 6.05235C17.0128 6.20535 17.0092 6.36675 16.9611 6.51781C16.913 6.66887 16.8224 6.80338 16.6999 6.90572L13.1941 10.2523L14.043 15.0044C14.0733 15.1612 14.0574 15.3234 13.9972 15.4716C13.9371 15.6199 13.8351 15.7481 13.7034 15.841C13.5578 15.945 13.3824 16.0006 13.2026 16C13.0658 16.0004 12.9313 15.9658 12.8121 15.8996L8.48304 13.6574L4.13696 15.8912C3.99755 15.9641 3.8403 15.9972 3.68286 15.9868C3.52543 15.9765 3.37403 15.9231 3.24567 15.8327C3.11397 15.7397 3.01202 15.6115 2.95186 15.4633C2.89169 15.315 2.87583 15.1529 2.90613 14.996L3.75497 10.2439L0.249246 6.89735C0.140134 6.79003 0.0627308 6.65545 0.0253444 6.50806C-0.012042 6.36066 -0.00800058 6.20602 0.0370349 6.06071C0.0862339 5.91202 0.176735 5.7799 0.298267 5.67934C0.419799 5.57878 0.567497 5.51381 0.724599 5.4918L5.55453 4.78902L7.71908 0.471957C7.78859 0.330505 7.89711 0.211211 8.03223 0.127741C8.16734 0.0442708 8.32358 0 8.48304 0C8.6425 0 8.79874 0.0442708 8.93385 0.127741C9.06897 0.211211 9.17749 0.330505 9.247 0.471957L11.4116 4.79739L16.2415 5.4918C16.4051 5.5056 16.5612 5.5659 16.6908 5.6654Z" fill="#D7D9E0"/>
                    </svg>
                  </p>
                  <p class="price">4 350 ₸</p>
                </div>
                <div class="grid-img">
                  <img src={{ url("/i/profile/grid-1.png") }} alt=""/>
                </div>
                <div class="buttons">
                  <a href="#" class="main-btn">Купить</a>
                  <a href="#" class="primary-btn">Страница товара</a>
                </div>
              </div>
              <div class="grid__blocks">
                <div class="info">
                  <p class="name">Лампа Айша биби
                    <svg viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.6908 5.6654C16.8204 5.7649 16.9179 5.89931 16.9715 6.05235C17.0128 6.20535 17.0092 6.36675 16.9611 6.51781C16.913 6.66887 16.8224 6.80338 16.6999 6.90572L13.1941 10.2523L14.043 15.0044C14.0733 15.1612 14.0574 15.3234 13.9972 15.4716C13.9371 15.6199 13.8351 15.7481 13.7034 15.841C13.5578 15.945 13.3824 16.0006 13.2026 16C13.0658 16.0004 12.9313 15.9658 12.8121 15.8996L8.48304 13.6574L4.13696 15.8912C3.99755 15.9641 3.8403 15.9972 3.68286 15.9868C3.52543 15.9765 3.37403 15.9231 3.24567 15.8327C3.11397 15.7397 3.01202 15.6115 2.95186 15.4633C2.89169 15.315 2.87583 15.1529 2.90613 14.996L3.75497 10.2439L0.249246 6.89735C0.140134 6.79003 0.0627308 6.65545 0.0253444 6.50806C-0.012042 6.36066 -0.00800058 6.20602 0.0370349 6.06071C0.0862339 5.91202 0.176735 5.7799 0.298267 5.67934C0.419799 5.57878 0.567497 5.51381 0.724599 5.4918L5.55453 4.78902L7.71908 0.471957C7.78859 0.330505 7.89711 0.211211 8.03223 0.127741C8.16734 0.0442708 8.32358 0 8.48304 0C8.6425 0 8.79874 0.0442708 8.93385 0.127741C9.06897 0.211211 9.17749 0.330505 9.247 0.471957L11.4116 4.79739L16.2415 5.4918C16.4051 5.5056 16.5612 5.5659 16.6908 5.6654Z" fill="#D7D9E0"/>
                    </svg>
                  </p>
                  <p class="price">4 350 ₸</p>
                </div>
                <div class="grid-img">
                  <img src={{ url("/i/profile/grid-1.png") }} alt=""/>
                </div>
                <div class="buttons">
                  <a href="#" class="main-btn">Купить</a>
                  <a href="#" class="primary-btn">Страница товара</a>
                </div>
              </div>
              <div class="grid__blocks">
                <div class="info">
                  <p class="name">Лампа Айша биби
                    <svg viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.6908 5.6654C16.8204 5.7649 16.9179 5.89931 16.9715 6.05235C17.0128 6.20535 17.0092 6.36675 16.9611 6.51781C16.913 6.66887 16.8224 6.80338 16.6999 6.90572L13.1941 10.2523L14.043 15.0044C14.0733 15.1612 14.0574 15.3234 13.9972 15.4716C13.9371 15.6199 13.8351 15.7481 13.7034 15.841C13.5578 15.945 13.3824 16.0006 13.2026 16C13.0658 16.0004 12.9313 15.9658 12.8121 15.8996L8.48304 13.6574L4.13696 15.8912C3.99755 15.9641 3.8403 15.9972 3.68286 15.9868C3.52543 15.9765 3.37403 15.9231 3.24567 15.8327C3.11397 15.7397 3.01202 15.6115 2.95186 15.4633C2.89169 15.315 2.87583 15.1529 2.90613 14.996L3.75497 10.2439L0.249246 6.89735C0.140134 6.79003 0.0627308 6.65545 0.0253444 6.50806C-0.012042 6.36066 -0.00800058 6.20602 0.0370349 6.06071C0.0862339 5.91202 0.176735 5.7799 0.298267 5.67934C0.419799 5.57878 0.567497 5.51381 0.724599 5.4918L5.55453 4.78902L7.71908 0.471957C7.78859 0.330505 7.89711 0.211211 8.03223 0.127741C8.16734 0.0442708 8.32358 0 8.48304 0C8.6425 0 8.79874 0.0442708 8.93385 0.127741C9.06897 0.211211 9.17749 0.330505 9.247 0.471957L11.4116 4.79739L16.2415 5.4918C16.4051 5.5056 16.5612 5.5659 16.6908 5.6654Z" fill="#D7D9E0"/>
                    </svg>
                  </p>
                  <p class="price">4 350 ₸</p>
                </div>
                <div class="grid-img">
                  <img src={{ url("/i/profile/grid-1.png") }} alt=""/>
                </div>
                <div class="buttons">
                  <a href="#" class="main-btn">Купить</a>
                  <a href="#" class="primary-btn">Страница товара</a>
                </div>
              </div>
              <div class="grid__blocks">
                <div class="info">
                  <p class="name">Лампа Айша биби
                    <svg viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.6908 5.6654C16.8204 5.7649 16.9179 5.89931 16.9715 6.05235C17.0128 6.20535 17.0092 6.36675 16.9611 6.51781C16.913 6.66887 16.8224 6.80338 16.6999 6.90572L13.1941 10.2523L14.043 15.0044C14.0733 15.1612 14.0574 15.3234 13.9972 15.4716C13.9371 15.6199 13.8351 15.7481 13.7034 15.841C13.5578 15.945 13.3824 16.0006 13.2026 16C13.0658 16.0004 12.9313 15.9658 12.8121 15.8996L8.48304 13.6574L4.13696 15.8912C3.99755 15.9641 3.8403 15.9972 3.68286 15.9868C3.52543 15.9765 3.37403 15.9231 3.24567 15.8327C3.11397 15.7397 3.01202 15.6115 2.95186 15.4633C2.89169 15.315 2.87583 15.1529 2.90613 14.996L3.75497 10.2439L0.249246 6.89735C0.140134 6.79003 0.0627308 6.65545 0.0253444 6.50806C-0.012042 6.36066 -0.00800058 6.20602 0.0370349 6.06071C0.0862339 5.91202 0.176735 5.7799 0.298267 5.67934C0.419799 5.57878 0.567497 5.51381 0.724599 5.4918L5.55453 4.78902L7.71908 0.471957C7.78859 0.330505 7.89711 0.211211 8.03223 0.127741C8.16734 0.0442708 8.32358 0 8.48304 0C8.6425 0 8.79874 0.0442708 8.93385 0.127741C9.06897 0.211211 9.17749 0.330505 9.247 0.471957L11.4116 4.79739L16.2415 5.4918C16.4051 5.5056 16.5612 5.5659 16.6908 5.6654Z" fill="#D7D9E0"/>
                    </svg>
                  </p>
                  <p class="price">4 350 ₸</p>
                </div>
                <div class="grid-img">
                  <img src={{ url("/i/profile/grid-1.png") }} alt=""/>
                </div>
                <div class="buttons">
                  <a href="#" class="main-btn">Купить</a>
                  <a href="#" class="primary-btn">Страница товара</a>
                </div>
              </div>
            </div>
            <div class="route">
              <a href="#" class="toStart">
                <svg viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.81171 4.81694C8.56066 5.06102 8.15363 5.06102 7.90257 4.81694L4.5 1.50888L1.09743 4.81694C0.846375 5.06102 0.43934 5.06102 0.188289 4.81694C-0.0627632 4.57286 -0.0627631 4.17714 0.188289 3.93306L4.04543 0.183059C4.29648 -0.0610189 4.70352 -0.0610188 4.95457 0.183059L8.81171 3.93306C9.06276 4.17714 9.06276 4.57286 8.81171 4.81694Z" fill="#939393"/>
                </svg>
                Вернуться в начало</a>
              <a href="#" class="secondary-btn">Показать больше</a>
              <div class="pagination">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">
                  <svg viewBox="0 0 31 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 9.35547L30 9.35547" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21.6445 17.7109L30.0005 9.35501L21.6445 0.999073" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
{{--      DESKTOP PROFILE BLOCKS--}}
{{--      MOBILE PROFILE BLOCKS--}}
      <div class="my-profile-mobile is-active" id="open-block" data-content="my-account">
          <p class="open">Обо мне
            <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14 1L7.5 8L1 0.999999" stroke="#505154" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </p>
          <form method="POST" action="#" class="open-content">
            <input type="text" placeholder="Имя">
            <input type="text" placeholder="Фамилия">
            <input type="text" placeholder="Телефон">
            <input type="text" placeholder="mail@mail.ru">
            <button class="main-btn">Изменить пароль</button>
          </form>
      </div>
      <div class="location-mobile is-active" id="open-block" data-content="my-account">
        <p class="open">Мои адреса
          <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 1L7.5 8L1 0.999999" stroke="#505154" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </p>
        <div class="open-content">
          <div class="address-mobile" data-remodal-target="location-mobile">
            <p class="address-top">
              <svg width="9" height="11" viewBox="0 0 9 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.13084 0C1.92523 0 0.130859 1.83644 0.130859 4.09375C0.130859 5.35639 0.766045 6.88894 2.01883 8.64881C2.93562 9.93676 3.83904 10.8553 3.87705 10.8938C3.94693 10.9645 4.03886 11 4.1309 11C4.22027 11 4.3097 10.9665 4.37902 10.8994C4.41712 10.8625 5.32283 9.98114 6.24135 8.71099C7.49514 6.97717 8.13086 5.42372 8.13086 4.09373C8.13082 1.83645 6.3364 0 4.13084 0ZM4.13084 5.86108C3.05253 5.86108 2.1753 4.9791 2.1753 3.89502C2.1753 2.81094 3.05256 1.92896 4.13084 1.92896C5.20912 1.92896 6.08638 2.81094 6.08638 3.89502C6.08638 4.9791 5.2091 5.86108 4.13084 5.86108Z" fill="#505154"/>
              </svg>
              Работа
            </p>
            <p class="address-bottom">Российская Федерация,<br/> Новосибирская область,<br/> Бердск, дом 17</p>
          </div>
          <div class="address-mobile" data-remodal-target="location-mobile"">
            <p class="address-top">
              <svg width="9" height="11" viewBox="0 0 9 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.13084 0C1.92523 0 0.130859 1.83644 0.130859 4.09375C0.130859 5.35639 0.766045 6.88894 2.01883 8.64881C2.93562 9.93676 3.83904 10.8553 3.87705 10.8938C3.94693 10.9645 4.03886 11 4.1309 11C4.22027 11 4.3097 10.9665 4.37902 10.8994C4.41712 10.8625 5.32283 9.98114 6.24135 8.71099C7.49514 6.97717 8.13086 5.42372 8.13086 4.09373C8.13082 1.83645 6.3364 0 4.13084 0ZM4.13084 5.86108C3.05253 5.86108 2.1753 4.9791 2.1753 3.89502C2.1753 2.81094 3.05256 1.92896 4.13084 1.92896C5.20912 1.92896 6.08638 2.81094 6.08638 3.89502C6.08638 4.9791 5.2091 5.86108 4.13084 5.86108Z" fill="#505154"/>
              </svg>
              Дом
            </p>
            <p class="address-bottom">Российская Федерация,<br/> Новосибирская область,<br/> Бердск, дом 17</p>
        </div>
        <button class="primary-btn" data-remodal-target="location-mobile">Другой адрес
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12.25" cy="12.25" r="11.25" fill="white" stroke="#DEDCD8"/>
            <path d="M12.25 7.25L12.25 17.25" stroke="#303133" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M17.25 12.25L7.25 12.25" stroke="#303133" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </div>
      </div>
      <div class="orders-mobile" data-content="my-orders">
        <h3>Мои заказы<sup>(2)</sup></h3>
{{--        <div class="single-order">--}}
          <div class="order-product" data-remodal-target="profile-order-mobile">
            <div class="order-image">
              <img src={{ url("/i/profile/mobile.png") }} />
            </div>
            <div>
              <p class="in-process">В обработке</p>
              <p class="serial-num">№39210</p>
              <p class="order-date">24 сентября 2021</p>
              <p class="order-count">3 товара</p>
              <p class="order-price">80 100	₸</p>
            </div>
          </div>
          <div class="order-product" data-remodal-target="profile-order-mobile">
            <div class="order-image">
              <img src={{ url("/i/profile/mobile.png") }} />
            </div>
            <div>
              <p class="process-success">
                <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.125 5.75L2.85809 7.04982C3.28678 7.37134 3.89272 7.29779 4.23205 6.88305L9.25 0.75" stroke="#27AE60" stroke-linecap="round"/>
                </svg>
                Доставлено</p>
              <p class="serial-num">№39210</p>
              <p class="order-date">24 сентября 2021</p>
              <p class="order-count">3 товара</p>
              <p class="order-price">80 100	₸</p>
            </div>
          </div>
{{--        </div>--}}
      </div>
      <div class="favorites-mobile" data-content="wishlist">
        <div class="favorites-title">
          <h3>
            Избранные товары<sup>(4)</sup>
          </h3>
          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 4L17 4" stroke="#303133" stroke-width="1.3" stroke-linecap="round"/>
            <path d="M1 12L11 12" stroke="#303133" stroke-width="1.3" stroke-linecap="round"/>
            <ellipse cx="4" cy="4" rx="3" ry="3" transform="rotate(90 4 4)" stroke="#303133" stroke-width="1.3" stroke-linecap="round"/>
            <ellipse cx="14" cy="12" rx="3" ry="3" transform="rotate(90 14 12)" stroke="#303133" stroke-width="1.3" stroke-linecap="round"/>
          </svg>
        </div>
        <div class="favorites-grid">
          <div class="favorites-product">
            <div class="favorites-image">
              <img src={{ url("/i/profile/product-mob-1.png") }} />
            </div>
            <div class="product-info">
              <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.5 1L12.1265 6.26604L18 7.11567L13.75 11.2124L14.753 17L9.5 14.266L4.247 17L5.25 11.2124L1 7.11567L6.8735 6.26604L9.5 1Z" fill="#303133" stroke="#303133" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>

              <p>Бозінген</p>
              <p>4 350 ₸</p>
            </div>
          </div>
          <div class="favorites-product">
            <div class="favorites-image">
              <img src={{ url("/i/profile/product-mob-2.png") }} />
            </div>
            <div class="product-info">
              <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.5 1L12.1265 6.26604L18 7.11567L13.75 11.2124L14.753 17L9.5 14.266L4.247 17L5.25 11.2124L1 7.11567L6.8735 6.26604L9.5 1Z" fill="#303133" stroke="#303133" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>

              <p>Бозінген</p>
              <p>4 350 ₸</p>
            </div>
          </div>
          <div class="favorites-product">
            <div class="favorites-image">
              <img src={{ url("/i/profile/product-mob-1.png") }} />
            </div>
            <div class="product-info">
              <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.5 1L12.1265 6.26604L18 7.11567L13.75 11.2124L14.753 17L9.5 14.266L4.247 17L5.25 11.2124L1 7.11567L6.8735 6.26604L9.5 1Z" fill="#303133" stroke="#303133" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>

              <p>Бозінген</p>
              <p>4 350 ₸</p>
            </div>
          </div>
          <div class="favorites-product">
            <div class="favorites-image">
              <img src={{ url("/i/profile/product-mob-2.png") }} />
            </div>
            <div class="product-info">
              <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.5 1L12.1265 6.26604L18 7.11567L13.75 11.2124L14.753 17L9.5 14.266L4.247 17L5.25 11.2124L1 7.11567L6.8735 6.26604L9.5 1Z" fill="#303133" stroke="#303133" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>

              <p>Бозінген</p>
              <p>4 350 ₸</p>
            </div>
          </div>
        </div>
      </div>
      {{--      MOBILE PROFILE BLOCKS--}}
    </div>
    @include('partials.consultation')

    @include('partials.faq_block')
  </section>
@endsection
