@extends('layouts.theme')

@section('title', 'Личный кабинет')

@section('content')
  <section id="profile">
      <div class="switch">
          <h1>Здравствуйте, <span>Айжан Сулейманова</span></h1>
          <div class="type">
              <ul class="links">
                  <li ><a href="#" class="active" data-nav="first" data-open-block="my-account">Мой аккаунт</a></li>
                  <li ><a href="#" data-nav="second" data-open-block="my-orders">Заказы</a></li>
                  <li ><a href="#" data-nav="third"data-open-block="wishlist" >Избранное</a></li>
              </ul>
              <button class="btn">Выйти</button>
          </div>
          <div class="my-profile is-active" data-content="my-account">
              <div class="profile-info">
                  <form class="form">
                      <div class="user">
                          <fieldset>
                              <legend>Имя</legend>
                              <input type="text" name="name" value="Айжан"/>
                          </fieldset>
                          <fieldset>
                              <legend>Телефон</legend>
                              <input type="tel" name="phone" value="+7 (718) 878 38 28"/>
                          </fieldset>
                          <fieldset>
                              <legend>Фамилия</legend>
                              <input type="text" name="surname" value="Сулейменова"/>
                          </fieldset>
                          <fieldset>
                              <legend>Email</legend>
                              <input type="email" name="email" value="Mail@mail.com"/>
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
                      <img src="/i/profile/product.png" alt=""/>
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
                      <img src="/i/profile/product-2.png" alt=""/>
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
                      <img src="/i/profile/product-3.png" alt=""/>
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
                  <div>
                      <p>Катергория
                          <svg width="13" height="2" viewBox="0 0 13 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 1H11.5" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                      </p>
                      <ul>
                          <li>Панно</li>
                          <li>Статуэтки</li>
                          <li>Empire gallery</li>
                          <li><a href="#">Все</a><span>(56)</span></li>
                      </ul>
                  </div>
                  <p class="title">Коллекция</p>
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
                              <img src="/i/profile/grid-1.png" alt=""/>
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
                              <img src="/i/profile/grid-1.png" alt=""/>
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
                              <img src="/i/profile/grid-1.png" alt=""/>
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
                              <img src="/i/profile/grid-1.png" alt=""/>
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
                              <img src="/i/profile/grid-1.png" alt=""/>
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
                              <img src="/i/profile/grid-1.png" alt=""/>
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
      </div>
      @include('partials.consultation')

      @include('partials.faq_block')
  </section>
@endsection
