@extends('layouts.theme')

@section('title', 'Личный кабинет')

@section('content')
  <section id="profile">
      <div class="switch">
          <h1>Здравствуйте, <span>Айжан Сулейманова</span></h1>
          <div class="type">
              <ul class="links">
                  <li ><a href="#">Мой аккаунт</a></li>
                  <li ><a href="#">Заказы</a></li>
                  <li ><a href="#">Избранное</a></li>
              </ul>
              <button class="btn">Выйти</button>
          </div>
          <div class="my-profile">
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
                          <a href="#">Изменить пароль</a>
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
                          <p class="new-address">+ Добавить адрес</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="orders">
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
                      <img src="/i/profile/product.png" alt=""/>
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
      </div>
      <div class="consultaion">
          <div class="call">
              <h1>Нужна помощь?</h1>
              <p>Оставьте свой номер для связи с консультантом.<br/>
                  Или поищите ответ на свой вопрос в <a href="#">разделе FAQ.</a>
              </p>
              <form method="POST" action="#">
                  <input type="tel" name="phone" placeholder="Номер телефона"/>
                  <button type="submit" class="main-btn">Заказать консультацию</button>
              </form>
          </div>
      </div>
      <div class="faq">
          <div class="questions">
              <p>Faq</p>
              <svg  viewBox="0 0 61 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 18L60 18" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M43 1L60 18L43 35" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>

          </div>
          <div class="answers"></div>
          <div class="questions">
              <p>Оплата</p>
              <svg viewBox="0 0 61 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 18L60 18" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M43 1L60 18L43 35" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>

          </div>
          <div class="answers"></div>
          <div class="questions">
              <p>О доставке</p>
              <svg viewBox="0 0 61 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 18L60 18" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M43 1L60 18L43 35" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>

          </div>
          <div class="answers"></div>
      </div>
  </section>
@endsection

<script>

</script>
