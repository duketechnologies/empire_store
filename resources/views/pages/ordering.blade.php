@extends('layouts.theme')
@section('title', 'Оформление заказа')

@section('content')
  <section id="ordering">
    <h3>Оформление заказа</h3>
    <form class="content" method="POST" action="#">
      <div class="left_side">
        <div class="email">
          <p class="title">
            <svg viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
            </svg>
            Email
          </p>
          <div>
            <p class="description">Вы совершаете заказ от лица Айгуль Сатпаева, <span>mail@mail.com</span></p>
            <a href="#" class="link-btn">Изменить</a>
          </div>
        </div>
        <div class="profile-info">
          <div>
            <p class="title">
              <svg viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
              </svg>
              Контакты
            </p>
            <div class="form">
              <div class="user">
                <fieldset>
                  <legend>Имя</legend>
                  <input type="text" name="name" placeholder="Имя"/>
                </fieldset>
                <fieldset>
                  <legend>Телефон</legend>
                  <input type="tel" name="phone" placeholder="Телефон"/>
                </fieldset>
                <fieldset>
                  <legend>Фамилия</legend>
                  <input type="text" name="surname" placeholder="Фамилия"/>
                </fieldset>
                <fieldset>
                  <legend>Email</legend>
                  <input type="email" name="email" placeholder="Email"/>
                </fieldset>
              </div>
            </div>
          </div>
          <div class="another ">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 6L6 18" stroke="#303133" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6 6L18 18" stroke="#303133" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p class="title">Получатель заказа</p>
            <fieldset>
              <legend>Имя получателя</legend>
              <input type="text" name="name" placeholder="Имя получателя"/>
            </fieldset>
            <fieldset class="last">
              <legend>Телефон получателя</legend>
              <input type="tel" name="phone" placeholder="Телефон получателя"/>
            </fieldset>
          </div>
          <button id="another-btn" class="main-btn">
            Получатель другой человек
            <span>
            <svg viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 4L18 4" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M15.5786 0.933594L18.646 4.00099L15.5786 7.06839" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
          </button>
        </div>
        <div class="delivery">
          <p class="title">
            <svg viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
            </svg>
            Способ доставки</p>
          <div class="blocks">
            <div>
              <input type="radio" name="craft-package" id="20$"/>
              <label for="20$"><span>CDEK - 20$</span> <br/> 5 дней</label>
              <p class="info">Мы работаем с понедельника по пятницу, исключая выходные</p>
            </div>
            <div>
              <input type="radio" name="craft-package" id="10$"/>
              <label for="10$"><span>ПОЧТА EMS - 10$</span> <br/> 5 дней</label>
              <p class="info">Мы работаем с понедельника по пятницу, исключая выходные</p>
            </div>
            <div>
              <input type="radio" name="craft-package" id="free"/>
              <label for="free"><span>Самовывоз</span> <br/> с 23 января</label>
              <p class="info">Мы работаем с понедельника по пятницу, исключая выходные</p>
            </div>
          </div>
        </div>
        <div class="pickup">
          <p class="title">
            <svg viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
            </svg>
            Информация о самовывозе
          </p>
          <div>
            <p class="name">
              <svg  viewBox="0 0 11 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.49997 0C2.46726 0 0 2.50424 0 5.58238C0 7.30416 0.87338 9.394 2.59596 11.7938C3.85655 13.5501 5.09875 14.8027 5.15102 14.8552C5.2471 14.95165.37351 15 5.50006 15C5.62294 15 5.74591 14.9544 5.84122 14.8628C5.89361 14.8125 7.13895 13.6107 8.40192 11.8786C10.1259 9.51433 11 7.39598 11 5.58236C10.9999 2.50424 8.53262 0 5.49997 0ZM5.49997 7.99238C4.0173 7.99238 2.8111 6.78968 2.8111 5.31139C2.8111 3.83309 4.01733 2.6304 5.49997 2.6304C6.98261 2.6304 8.18884 3.83309 8.18884 5.31139C8.18884 6.78968 6.98258 7.99238 5.49997 7.99238Z" fill="#212123"/>
              </svg>
              ТРЦ «Dostyk Plaza»
            </p>
            <p class="info">Самал 2-й мкр, 111, 1 этаж, бутик 127</p>
          </div>
          <div>
            <p class="name">
              <svg  viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 6.66797C0 3.35426 2.68629 0.667969 6 0.667969C7.5913 0.667969 9.11742 1.30011 10.2426 2.42533C11.3679 3.55055 12 5.07667 12 6.66797C12 9.98168 9.31371 12.668 6 12.668C2.68629 12.668 0 9.98168 0 6.66797ZM7.7999 7.87422C8.0688 7.88825 8.31411 7.72144 8.3999 7.46622C8.45005 7.31107 8.4349 7.1422 8.35794 6.99846C8.28098 6.85472 8.14883 6.74849 7.9919 6.70422L6.5999 6.24222V3.67422C6.5999 3.34285 6.33128 3.07422 5.9999 3.07422C5.66853 3.07422 5.3999 3.34285 5.3999 3.67422V6.67422C5.39924 6.93217 5.56352 7.16168 5.8079 7.24422L7.6079 7.84422C7.67033 7.8625 7.73487 7.87259 7.7999 7.87422Z" fill="#212123"/>
              </svg>
              С 23 января
            </p>
            <p class="info">Ежедневно 10:00–22:00</p>
          </div>
          <button class="link-btn" data-remodal-target="pickup-modal">Выбрать другой пункт самовывоза</button>
        </div>
        <div class="order_adress">
          <p class="title">
            <svg viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
            </svg>
            Адрес доставки
          </p>
          <div class="profile-address">
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
        <p class="payment_title">
          <svg  viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
          </svg>
          Выберете способ оплаты
        </p>
        <div class="payment">
          <div class="payment__method">
            <input type="radio" name="craft-package2" id="online"/>
            <label for="online"><span>Оплата онлайн</span></label>
            <div class="cards">
              <img src={{ url("/i/ordering/visa.png") }} alt=""/>
              <img src={{ url("/i/ordering/mastercard.png") }} alt=""/>
              <img src={{ url("/i/ordering/aexpress.png") }} alt=""/>
              <img src={{ url("/i/ordering/mastercard2.png") }} alt=""/>
              <img src={{ url("/i/ordering/jsb.png") }} alt=""/>
            </div>
            <a href="#" class="link-btn">О безопасной оплате</a>
          </div>
          <div class="payment__method">
            <input type="radio" name="craft-package2" id="upon"/>
            <label for="upon"><span>Оплата при получении</span></label>
            <p>Оплата при получении заказа (копирайт изменим в процессе)</p>
          </div>
          <div class="payment__method">
            <input type="radio" name="craft-package2" id="check"/>
            <label for="check"><span>Счет на оплату</span></label>
            <p>Для юридический лиц копирайт Инфо о том в какой срок предположительно будет выставлен счет для оплаты</p>
          </div>
        </div>
        <div class="requisites">
          <p class="title">
            <svg viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
            </svg>
            Реквизиты компании
          </p>
          <div class="grid">
            <fieldset>
              <legend>Контактное лицо</legend>
              <input type="text" name="name" placeholder="Контактное лицо"/>
            </fieldset>
            <fieldset>
              <legend>Телефон</legend>
              <input type="text" name="name" placeholder="Телефон"/>
            </fieldset>
            <fieldset>
              <legend>E-Mail</legend>
              <input type="text" name="name" placeholder="E-Mail"/>
            </fieldset>
            <fieldset>
              <legend>Название компании</legend>
              <input type="text" name="name" placeholder="Название компании"/>
            </fieldset>
            <fieldset>
              <legend>Юридический адрес</legend>
              <input type="text" name="name" placeholder="Юридический адрес"/>
            </fieldset>
            <fieldset>
              <legend>Наименование банка</legend>
              <input type="text" name="name" placeholder="Наименование банка"/>
            </fieldset>
            <fieldset>
              <legend>БИН</legend>
              <input type="text" name="name" placeholder="БИН"/>
            </fieldset>
            <fieldset>
              <legend>Расчетный счет</legend>
              <input type="text" name="name" placeholder="Расчетный счет"/>
            </fieldset>
            <fieldset>
              <legend>БИК</legend>
              <input type="text" name="name" placeholder="БИК"/>
            </fieldset>
          </div>
        </div>
      </div>
      <div class="right_side">
        <div class="head">
          <a href="#" class="inside">Содержание моего заказа <span>8 товаров</span></a>
          <button class="link-btn" data-remodal-target="edit-order">Редактировать</button>
        </div>
        <div class="sum">
          <p class="sum__title">Стоимость заказа</p>
          <div class="count">
            <span>13 товаров</span>
            <p>150 000 000	₸</p>
          </div>
          <div class="delivery_сost">
            <span>Доставка</span>
            <p class="green" >Бесплатно по Алматы</p>
          </div>
          <div class="total">
            <span>Итого</span>
            <p>150 000 000	₸</p>
          </div>
          <button type="submit" class="main-btn">
            Оплатить заказ
            <span>
              <svg viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 4L18 4" stroke="#212123" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15.5786 0.933594L18.646 4.00099L15.5786 7.06839" stroke="#212123" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
          </button>
        </div>
      </div>
    </form>
{{--    MOBILE ORDER--}}
    <h4 data-remodal-target="edit-order-mobile">
      Содержимое моего заказа
      <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 3C1 2.05719 1 1.58579 1.29289 1.29289C1.58579 1 2.05719 1 3 1H13.9296C14.4536 1 14.7156 1 14.9367 1.11833C15.1578 1.23665 15.3031 1.45463 15.5937 1.8906L18.2604 5.8906C18.6189 6.42835 18.7981 6.69722 18.7981 7C18.7981 7.30278 18.6189 7.57165 18.2604 8.1094L15.5937 12.1094C15.3031 12.5454 15.1578 12.7633 14.9367 12.8817C14.7156 13 14.4536 13 13.9296 13H3C2.05719 13 1.58579 13 1.29289 12.7071C1 12.4142 1 11.9428 1 11V3Z" stroke="#303133" stroke-width="1.2"/>
        <circle cx="13" cy="7" r="1" stroke="#303133" stroke-width="1.2"/>
      </svg>
    </h4>
    <form method="POST" action="#" class="content-mobile">
      <div class="email-mobile" id="open-block">
        <p class="open">
          <span>
            <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
            </svg>
            Email
          </span>
          <svg class="upper" width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 8L7.5 0.999999L1 8" stroke="#505154" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </p>
        <div class="open-content">
          <p>Вы совершаете заказ от лица<br/>
            Айгуль Сатпаева, <span>mail@mail.com</span>
          </p>
          <button class="link-btn">Изменить</button>
        </div>
      </div>
      <div class="contacts-mobile" id="open-block">
        <p class="open">
          <span>
            <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
            </svg>
            Контакты
          </span>
          <svg class="upper" width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 8L7.5 0.999999L1 8" stroke="#505154" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </p>
        <div class="open-content">
          <input type="text" placeholder="Имя"/>
          <input type="text" placeholder="Фамилия"/>
          <input type="text" placeholder="Телефон"/>
          <input type="text" placeholder="Email"/>
          <button class="another-btn" id="another-mobile-btn">
            Получатель другой человек
            <svg width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="17" cy="11" r="11" fill="#212123"/>
              <path d="M1 11L18 11" stroke="#F5F4F1" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M15.5781 7.93359L18.6455 11.001L15.5781 14.0684" stroke="#F5F4F1" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
          <div class="another-person" id="another-btn-block">
            <span>
            <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
            </svg>
            Получатель заказа
          </span>
            <input type="text" placeholder="Имя получателя"/>
            <input type="text" placeholder="Телефон получателя"/>
            <button class="link-btn" id="another-btn-delete">Удалить получателя</button>
          </div>
        </div>
      </div>
      <div class="delivery-mobile" id="open-block">
        <p class="open">
          <span>
            <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
            </svg>
            Способ доставки
          </span>
          <svg class="upper" width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 8L7.5 0.999999L1 8" stroke="#505154" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </p>
        <div class="open-content">
          <div>
            <input type="radio" name="craft-package" id="20$-mobile"/>
            <label for="20$-mobile"><span>CDEK - 20$</span> <br/> 5 дней</label>
            <p class="info">Мы работаем с понедельника<br/> по пятницу, исключая выходные</p>
          </div>
          <div>
            <input type="radio" name="craft-package" id="10$-mobile"/>
            <label for="10$-mobile"><span>ПОЧТА EMS - 10$</span> <br/> 3 недели</label>
            <p class="info">Мы работаем с понедельника<br/> по пятницу, исключая выходные</p>
          </div>
          <div>
            <input type="radio" name="craft-package" id="self-mobile"/>
            <label for="self-mobile"><span>САМОВЫВОЗ</span></label>
            <p class="info">Мы работаем с понедельника<br/> по пятницу, исключая выходные</p>
          </div>
        </div>
      </div>
      <div class="my-address-mobile" id="open-block">
        <p class="open">
          <span>
            <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
            </svg>
            Адрес доставки
          </span>
          <svg class="upper" width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 8L7.5 0.999999L1 8" stroke="#505154" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
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
          <div class="address-mobile" data-remodal-target="location-mobile">
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
      <div class="payment-mobile"id="open-block">
        <p class="open">
          <span>
            <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
            </svg>
            Способ оплаты
          </span>
          <svg class="upper" width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 8L7.5 0.999999L1 8" stroke="#505154" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </p>
        <div class="open-content">
          <div>
            <input type="radio" name="craft-package3" id="online-mobile"/>
            <label for="online-mobile"><span>ОПЛАТА ОНЛАЙН</span></label>
            <div class="cards">
              <img src={{ url("/i/ordering/visa.png") }} alt=""/>
              <img src={{ url("/i/ordering/mastercard.png") }} alt=""/>
              <img src={{ url("/i/ordering/aexpress.png") }} alt=""/>
              <img src={{ url("/i/ordering/mastercard2.png") }} alt=""/>
              <img src={{ url("/i/ordering/jsb.png") }} alt=""/>
            </div>
          </div>
          <div>
            <input type="radio" name="craft-package3" id="offline1"/>
            <label for="offline1"><span>ОПЛАТА ПРИ ПОЛУЧЕНИИ</span></label>
            <p class="info">Оплата при получении заказа (копирайт изменим в процессе)</p>
          </div>
          <div>
            <input type="radio" name="craft-package3" id="toCart"/>
            <label for="toCart"><span>СЧЕТ НА ОПЛАТУ</span></label>
            <p class="info">Для юридический лиц копирайт Инфо о том в какой срок предположительно будет выставлен счет для оплаты</p>
          </div>
        </div>
      </div>
      <div class="summary">
        <p>13 товаров <span>7 400 350 ₸</span></p>
        <p>Доставка <span class="green">Бесплатно по Алматы</span></p>
        <p>Итого <span>7 400 350 ₸</span></p>
        <button class="main-btn">Оплатить заказ</button>
      </div>
    </form>
{{--    MOBILE ORDER--}}
    @include('partials.faq_block')
    @include('partials.consultation')
  </section>
@endsection
