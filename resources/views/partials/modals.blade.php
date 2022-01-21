<div class="remodal" data-remodal-id="mail_to" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
    <button data-remodal-action="close" class="remodal-close-btn"></button>
    <div class="content">
        <h1>Напишите нам</h1>
        <p>Обсудить условия сотрудничества</p>
        <form method="POST" action="#"">
            <textarea name="textarea" form="mail" placeholder="Текст вашего письма"></textarea>
            <input type="email" name="email" placeholder="Email"/>
            <button class="main-btn">Отправить сообщение</button>
        </form>
    </div>
</div>

<div class="remodal" data-remodal-id="new_location" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
    <button data-remodal-action="close" class="remodal-close-btn"></button>
    <div class="new_location">
        <h3>Создайте новый адрес</h3>
        <p>Вы всегда можете редактировать данные адресов</p>
        <form method="POST" action="#" class="location-form">
            <input type="text" name="place" placeholder="Введите название адреса ( Дом, Работа... )" class="place"/>
            <fieldset>
              <select id="select-country" name="country">
                <option value="kz">Республика Казахстан</option>
                <option value="l1">Lorem ipsum.</option>
                <option value="2r">Lorem.</option>
                <option value="5f">Lorem ipsum dolor.</option>
              </select>
            </fieldset>
            <fieldset>
              <legend>Область, город</legend>
              <input type="tel" name="city" value="+7 (718) 878 38 28"/>
            </fieldset>
            <fieldset>
              <legend>Адрес</legend>
              <input type="text" name="address" value="Сулейменова"/>
            </fieldset>
            <fieldset>
              <legend>Комментарий</legend>
              <textarea></textarea>
            </fieldset>
            <button type="submit" class="main-btn">Сохранить адрес</button>
            <button data-remodal-action="cancel" class="secondary-btn">Отменить</button>
        </form>
    </div>
</div>

<div class="remodal" data-remodal-id="change_location" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
    <button data-remodal-action="close" class="remodal-close-btn"></button>
    <div class="new_location">
        <h3>Адрес “Дом”</h3>
        <p>Редактирование адреса</p>
        <form method="POST" action="#" class="location-form">
            <input type="text" name="place" placeholder="Введите название адреса ( Дом, Работа... )" class="place"/>
            <fieldset>
              <select>
                <option selected>Республика Казахстан</option>
              </select>
            </fieldset>
            <fieldset>
              <legend>Область, город</legend>
              <input type="tel" name="city" value="+7 (718) 878 38 28"/>
            </fieldset>
            <fieldset>
              <legend>Адрес</legend>
              <input type="text" name="address" value="Сулейменова"/>
            </fieldset>
            <fieldset>
              <legend>Комментарий</legend>
              <textarea></textarea>
            </fieldset>
            <button type="submit" class="main-btn">Сохранить адрес</button>
            <div class="buttons">
              <button data-remodal-action="cancel" class="secondary-btn">Отменить</button>
              <button class="primary-btn">Удалить адрес</button>
            </div>
        </form>
    </div>
</div>

<div class="remodal" data-remodal-id="franchise-modal" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
    <button data-remodal-action="close" class="remodal-close-btn"></button>
    <div class="franchise">
        <h3>Заявка на франшизу Empire</h3>
        <div class="price">
          <div class="cost">
            <p>от 2 млн. 	₸<br/><span>чистой прибыли в месяц</span></p>
          </div>
          <div class="cost">
            <p>2 мес.<br/><span>срок для запуска бутика</span></p>
          </div>
          <div class="cost">
            <p>50 м<sup>2</sup><br/><span>оптимальная площадь</span></p>
          </div>
        </div>
        <form method="POST" action="#" class="franchise-form">
          <div class="wrapper">
            <div class="person">
            <h4>Контактные данные </h4>
            <fieldset>
              <legend>Ваше имя</legend>
              <input type="text" name="name"/>
            </fieldset>
              <fieldset>
              <legend>Номер телефона</legend>
              <input type="tel" name="phone"/>
            </fieldset>
          </div>
          <div class="location">
            <h4>Место открытия бутика</h4>
            <fieldset>
              <legend>Страна</legend>
              <input type="text" name="country"/>
            </fieldset>
              <fieldset>
              <legend>Город</legend>
              <input type="text" name="city"/>
            </fieldset>
          </div>
          <div class="place">
            <h4>У вас имеется помещение?</h4>
            <div class="checkboxes">
            <div>
              <input type="checkbox" id="1" />
              <label for="1">Да</label>
            </div>
            <div>
              <input type="checkbox" id="2" />
              <label for="2">Нет</label>
            </div>
            </div>
          </div>
          </div>

          <button type="submit" class="main-btn">Отправить запрос</button>
        </form>
    </div>
</div>

<div class="remodal" data-remodal-id="quiz" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
  <button data-remodal-action="close" class="remodal-close-btn"></button>
  <div class="content">
    <img src="/i/quiz/quiz 1.png"/>
    <div class="question">
      <h3>Вам нужен один уникальный подарок <br/>или же несколько одного типа?</h3>
      <ul>
        <li>Один подарок</li>
        <li>Несколько</li>
        <li>Несколько</li>
        <li>Несколько</li>
        <li>Несколько</li>
        <li>Несколько</li>
      </ul>
      <a href="#"class="main-btn">Далее</a>
    </div>
  </div>
</div>

<div class="remodal" data-remodal-id="feedback" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
  <button data-remodal-action="close" class="remodal-close-btn"></button>
  <div class="content">
      <img src="/i/popup/feedback.png" alt=""/>
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
              <a href="#" class="whatsapp-btn">
                  <svg viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0 7.84984V7.059C0.010266 7.01746 0.0180491 6.97527 0.023302 6.93268C0.102803 5.77022 0.411212 4.68208 0.978342 3.68803C2.08896 1.73692 3.69543 0.53931 5.79775 0.116796C6.06058 0.0640729 6.32856 0.0384437 6.59379 0H7.41621L7.71023 0.036613C9.18785 0.213088 10.5044 0.800361 11.6119 1.86727C13.3843 3.5716 14.1755 5.71493 13.9675 8.25295C13.8349 9.87014 13.2321 11.2918 12.2161 12.5001C11.1373 13.7815 9.80056 14.5822 8.20985 14.8836C7.94633 14.9334 7.67904 14.9616 7.41347 15H6.64793C6.44918 14.9762 6.25008 14.9572 6.05201 14.9268C5.06517 14.7845 4.11936 14.4135 3.28079 13.8397C3.24313 13.8103 3.19919 13.7913 3.15294 13.7845C3.10669 13.7777 3.05959 13.7834 3.0159 13.8009C2.21575 14.0803 1.41388 14.3527 0.612364 14.6269C0.568501 14.6419 0.523953 14.6558 0.461928 14.676C0.741553 13.7844 1.01021 12.9211 1.28435 12.0596C1.32136 11.9439 1.31691 11.8571 1.24769 11.7517C0.666113 10.8679 0.27714 9.85618 0.109314 8.79079C0.0599685 8.47885 0.0359811 8.16471 0 7.84984ZM9.26975 11.7235C9.49523 11.677 9.68919 11.6609 9.86772 11.5957C10.8591 11.2332 11.1959 10.7207 11.2251 9.74346C11.2299 9.58822 11.1778 9.48351 11.0458 9.41614C10.5239 9.1507 10.0055 8.87683 9.48152 8.61615C9.21424 8.48288 9.05763 8.53816 8.87978 8.79372C8.74271 8.9896 8.61078 9.18768 8.47063 9.37953C8.25782 9.6706 8.10705 9.70905 7.78185 9.56626C6.63388 9.06393 5.77822 8.20425 5.13604 7.08353C4.99897 6.84261 5.00514 6.75181 5.18059 6.53653C5.31218 6.3747 5.4513 6.21909 5.57638 6.05177C5.68809 5.90166 5.79329 5.73653 5.71345 5.53077C5.47049 4.90615 5.22514 4.28153 4.97155 3.6613C4.94037 3.58515 4.8619 3.49691 4.79165 3.47824C4.41813 3.38817 4.04187 3.37975 3.72113 3.64483C3.43245 3.88802 3.21418 4.21364 3.09163 4.58395C2.83531 5.32061 2.91824 6.03786 3.20163 6.74412C3.41066 7.26476 3.71564 7.72023 4.02679 8.17203C4.54618 8.93354 5.16045 9.61572 5.85258 10.1997C6.60064 10.8246 7.45459 11.2179 8.35412 11.5057C8.6615 11.6063 8.9819 11.6569 9.26975 11.7235Z" fill="white"/>
                  </svg>
                  Написать в WHATSAPP
              </a>
          </div>
      </div>
  </div>
</div>

<div class="remodal" data-remodal-id="comment" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
    <button data-remodal-action="close" class="remodal-close-btn"></button>
    <div class="content">
        <h1>Оставьте отзыв о Empire</h1>
        <p>Обсудить условия сотрудничества</p>
        <form method="POST" action="#">
            <textarea name="textarea" form="mail" placeholder="Текст вашего письма"></textarea>
            <input type="email" name="email" placeholder="Ваш Email или номер телефона"/>
            <button class="main-btn">Отправить</button>
        </form>
    </div>
</div>

{{-- Вход по EMIAL - пароль --}}
<div class="remodal" data-remodal-id="payment" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
    <button data-remodal-action="close" class="remodal-close-btn"></button>
    <div class="content">
        <h3>Купить товар в рассрочку</h3>
        <div class="info">
            <img src="/i/payment/forte.png" alt=""/>
            <p>до <b>12</b> месяцев</p>
        </div>
        <div class="info">
            <img src="/i/payment/kaspi.png" alt=""/>
            <p>до <b>24</b> месяцев</p>
        </div>
        <div class="info">
            <img src="/i/payment/alfa.png" alt=""/>
            <p>до <b>12</b> месяцев</p>
        </div>
        <a href="#" class="details">Подробнее о рассрочке</a>
    </div>
</div>
{{-- Вход по EMIAL - пароль --}}

<div class="remodal" data-remodal-id="cookie-location" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
    <button data-remodal-action="close" class="remodal-close-btn"></button>
    <div class="wrapper">
        <h4>Мое местоположение</h4>
        <p>Казахстан - Алматы</p>
        <ul>
            <li>Бесплатная доставка</li>
            <li>4 пункта самовывоза</li>
        </ul>
        <a href="#" class="link-btn" data-remodal-target="cookie-change-location">Изменить Мое местоположение</a>
        <a href="#" class="main-btn">Начать шоппинг</a>
    </div>
</div>

<div class="remodal" data-remodal-id="cookie-change-location" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
    <button data-remodal-action="close" class="remodal-close-btn"></button>
    <div class="wrapper">
        <h4>Мое местоположение</h4>
{{--        <ul class="city-list">--}}
{{--            <li class="active">Алматы</li>--}}
{{--            <li>Нур-Султан</li>--}}
{{--            <li>Атырау</li>--}}
{{--            <li>Шымкент</li>--}}
{{--            <li>Актобе</li>--}}
{{--            <li>Караганда</li>--}}
{{--            <li>Тараз</li>--}}
{{--            <li>Павлодар</li>--}}
{{--        </ul>--}}
{{--        <a href="#" class="link-btn">Другая страна</a>--}}
        <div class="country">
            <p>Страна</p>
            <div class="select" id="location-country">Казахстан</div>
            <div class="option">
                <ul>
                    <li ><img src="/i/icons/kz_icon.png" alt=""/><p class="active">Казахстан</p></li>
                    <li ><img src="/i/icons/kz_icon.png" alt=""/><p>Казахстан</p></li>
                    <li ><img src="/i/icons/kz_icon.png" alt=""/><p>Казахстан</p></li>
                    <li ><img src="/i/icons/kz_icon.png" alt=""/><p>Казахстан</p></li>
                    <li ><img src="/i/icons/kz_icon.png" alt=""/><p>Казахстан</p></li>
                    <li ><img src="/i/icons/kz_icon.png" alt=""/><p>Казахстан</p></li>
                    <li ><img src="/i/icons/kz_icon.png" alt=""/><p>Казахстан</p></li>
                    <li ><img src="/i/icons/kz_icon.png" alt=""/><p>Казахстан</p></li>
                    <li ><img src="/i/icons/kz_icon.png" alt=""/><p>Казахстан</p></li>
                    <li ><img src="/i/icons/kz_icon.png" alt=""/><p>Казахстан</p></li>
                    <li ><img src="/i/icons/kz_icon.png" alt=""/><p>Казахстан</p></li>
                    <li ><img src="/i/icons/kz_icon.png" alt=""/><p>Казахстан</p></li>
                    <li ><img src="/i/icons/kz_icon.png" alt=""/><p>Казахстан</p></li>
                </ul>
            </div>
        </div>
        <div class="city">
            <p>Город / Населенный пункт</p>
            <div class="select" id="location-city">Алматы</div>
        </div>
        <a href="#" class="main-btn">Сохранить местоположение</a>
    </div>
</div>

<div class="remodal" data-remodal-id="cookie" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
    <div class="wrapper">
        <img src="/i/icons/cookie_icon.png" alt=""/>
        <p>Мы используем файлы cookie.<br/>
            Просматривая сайт, вы соглашаетесь<br/>
            с <a href="/policy">Политикой нашего сайта.</a>
        </p>
        <a href="#" class="link-btn" data-remodal-action="close" >Принять соглашение</a>
    </div>
</div>

<div class="remodal" data-remodal-id="login" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
    <div class="wrapper">
        <h3>Для входа в аккаунт<br/>введите номер телефона или Email</h3>
        <form method="POST" action="#">
            <fieldset>
                <legend>Телефон или Email</legend>
                <input type="tel" name="login_phone" />
                <button type="submit">
                    <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 4.06641L18 4.06641" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.5781 1L18.6455 4.0674L15.5781 7.13479" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </fieldset>
        </form>
    </div>
</div>

<div class="remodal" data-remodal-id="login-email" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
{{--    <div class="wrapper">--}}
{{--        <h3>Введите пароль</h3>--}}
{{--        <p>Введите пароль от аккаунта<span>Mail@mail.kz</span></p>--}}
{{--        <form method="POST" action="#">--}}
{{--            <fieldset>--}}
{{--                <legend>Телефон или Email</legend>--}}
{{--                <input type="text" name="login-email" autocomplete="off"/>--}}
{{--            </fieldset>--}}
{{--            <fieldset>--}}
{{--                <input type="password" name="register_password" placeholder="Повторите пароль" autocomplete="off"/>--}}
{{--            </fieldset>--}}
{{--            <button type="submit" class="main-btn">Войти</button>--}}
{{--            <button type="submit" class="link-btn">Забыл пароль</button>--}}
{{--        </form>--}}
{{--    </div>--}}

{{--    <div class="forget-password">--}}
{{--        <svg viewBox="0 0 34 33" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--            <path d="M22.2167 10.3837L27.4846 5.04861M30.4949 2L27.4846 5.04861L30.4949 2ZM16.0306 16.6486C16.8078 17.4252 17.4256 18.3498 17.8485 19.3691C18.2713 20.3885 18.4909 21.4826 18.4946 22.5882C18.4982 23.6939 18.2859 24.7894 17.8698 25.8116C17.4537 26.8339 16.842 27.7626 16.07 28.5445C15.298 29.3263 14.3809 29.9458 13.3715 30.3672C12.3622 30.7886 11.2805 31.0037 10.1887 31C9.09693 30.9962 8.01667 30.7739 7.01011 30.3456C6.00356 29.9174 5.09059 29.2917 4.32378 28.5046C2.81585 26.9234 1.98145 24.8057 2.00031 22.6075C2.01917 20.4094 2.88978 18.3066 4.42462 16.7522C5.95947 15.1978 8.03574 14.3161 10.2062 14.297C12.3768 14.2779 14.4678 15.1229 16.0291 16.6501L16.0306 16.6486ZM16.0306 16.6486L22.2167 10.3837L16.0306 16.6486ZM22.2167 10.3837L26.7321 14.9566L32 9.62153L27.4846 5.04861L22.2167 10.3837Z" stroke="#505154" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--        </svg>--}}
{{--        <h3>Восстановление пароля</h3>--}}
{{--        <p>--}}
{{--            Мы отправили ссылку для восстановления--}}
{{--            доступа на почту, указанную при регистрации--}}
{{--            <br/>--}}
{{--            <span>Mail@mail.kz</span>--}}
{{--        </p>--}}
{{--        <button class="link-btn">Мне не пришло письмо</button>--}}
{{--    </div>--}}

    <div class="recovery">
        <h3>Создайте новый пароль</h3>
        <p>Введите пароль от аккаунта<span> Mail@mail.kz</span></p>
        <form method="POST" action="#">
            <fieldset>
                <legend>Новый пароль</legend>
                <input type="password" name="password-recovery" autocomplete="off"/>
            </fieldset>
            <fieldset>
                <input type="password" name="confirm-password-recovery" placeholder="Повторите пароль" autocomplete="off"/>
            </fieldset>
            <button type="submit" class="main-btn">Сохранить пароль и войти</button>
        </form>
    </div>
</div>

<div class="remodal" data-remodal-id="register-email" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
    <div class="wrapper">
        <h3>Создайте пароль</h3>
        <p>Создание пароля для нового аккаунта <span>Mail@mail.kz</span></p>
        <form method="POST" action="#">
            <fieldset>
                <legend>Пароль</legend>
                <input type="password" name="register_password"/>
            </fieldset>
            <fieldset>
                <input type="password" name="register_password" placeholder="Повторите пароль"/>
            </fieldset>
            <div>
                <input type="checkbox" name="personal_info" id="personal_info"/>
                <label for="personal_info">
                    Соглашаюсь на обработку персональной информации в соответствии с
                    <span>Политикой конфиденциальности</span>
                </label>
            </div>
            <button type="submit" class="main-btn">Сохранить</button>
            <button type="submit" class="link-btn">У меня уже есть аккаунт</button>
        </form>
    </div>
</div>

<div class="remodal" data-remodal-id="login-phone" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
    <div class="wrapper">
        <h3>Введите пароль из смс</h3>
        <form method="POST" action="#">
            <input type="tel" name="login-phone-sms" placeholder="-" maxlength="1"/>
            <input type="tel" name="login-phone-sms" placeholder="-" maxlength="1"/>
            <input type="tel" name="login-phone-sms" placeholder="-" maxlength="1"/>
            <input type="tel" name="login-phone-sms" placeholder="-" maxlength="1"/>
            <button type="submit" disabled>
                <svg viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 4.06641L18 4.06641" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.5781 1L18.6455 4.0674L15.5781 7.13479" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </form>
        <button class="link-btn">Не пришло смс?</button>
    </div>
</div>

<div class="remodal" data-remodal-id="profile-order" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
    <button data-remodal-action="close" class="remodal-close-btn"></button>
    <div class="wrapper">
        <div class="order-header">
            <h3>Заказ #46271</h3>
            <p>В обработке</p>
        </div>

        <div class="order-product">
            <div class="title">
                <p>Продукт</p>
                <p>Цвет</p>
                <p>Цена х 1</p>
                <p>Количество</p>
                <p>Сумма</p>
            </div>
            <div class="product">
                <div class="product__date">
                    <img src="/i/profile/product.png" alt=""/>
                    <div>
                        <p class="type">Статуэтка</p>
                        <p class="name">Сакские предания</p>
                        <p class="date">HRS01502S</p>
                    </div>
                </div>
                <div class="product__color">
                    <p><span class="span-1"><span class="span-2"></span></span>Золотой</p>
                </div>
                <div class="product__price">
                    <p>5 000 000	₸</p>
                </div>
                <div class="product__quantity">
                    <div class="quantity">
                        <p id="increment">-</p>
                        <span>1</span>
                        <p id="decrement">+</p>
                    </div>

                </div>
                <div class="product__package">
                    <p>
                        <svg viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.125 5.75L2.85809 7.04982C3.28678 7.37134 3.89272 7.29779 4.23205 6.88305L9.25 0.75" stroke="#939393" stroke-linecap="round"/>
                        </svg>
                        Крафт пакет
                    </p>
                </div>
                <div class="product__status">
                    <p class="in-process">10 000 000	₸</p>
                </div>
            </div>
            <div class="product">
                <div class="product__date">
                    <img src="/i/profile/product.png" alt=""/>
                    <div>
                        <p class="type">Статуэтка</p>
                        <p class="name">Сакские предания</p>
                        <p class="date">HRS01502S</p>
                    </div>
                </div>
                <div class="product__color">
                    <p><span class="span-1"><span class="span-2"></span></span>Золотой</p>
                </div>
                <div class="product__price">
                    <p>5 000 000	₸</p>
                </div>
                <div class="product__quantity">
                    <div class="quantity">
                        <p id="increment">-</p>
                        <span>1</span>
                        <p id="decrement">+</p>
                    </div>

                </div>
                <div class="product__package">
                    <p>
                        <svg viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.125 5.75L2.85809 7.04982C3.28678 7.37134 3.89272 7.29779 4.23205 6.88305L9.25 0.75" stroke="#939393" stroke-linecap="round"/>
                        </svg>
                        Крафт пакет
                    </p>
                </div>
                <div class="product__status">
                    <p class="in-process">10 000 000	₸</p>
                </div>
            </div>
            <div class="product">
                <div class="product__date">
                    <img src="/i/profile/product.png" alt=""/>
                    <div>
                        <p class="type">Статуэтка</p>
                        <p class="name">Сакские предания</p>
                        <p class="date">HRS01502S</p>
                    </div>
                </div>
                <div class="product__color">
                    <p><span class="span-1"><span class="span-2"></span></span>Золотой</p>
                </div>
                <div class="product__price">
                    <p>5 000 000	₸</p>
                </div>
                <div class="product__quantity">
                    <div class="quantity">
                        <p id="increment">-</p>
                        <span>1</span>
                        <p id="decrement">+</p>
                    </div>

                </div>
                <div class="product__package">
                    <p>
                        <svg viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.125 5.75L2.85809 7.04982C3.28678 7.37134 3.89272 7.29779 4.23205 6.88305L9.25 0.75" stroke="#939393" stroke-linecap="round"/>
                        </svg>
                        Крафт пакет
                    </p>
                </div>
                <div class="product__status">
                    <p class="in-process">10 000 000	₸</p>
                </div>
            </div>
        </div>


        <div class="order-footer">
            <div class="date">
                <p class="title">О заказе</p>
                <p class="info">Дата создания <span></span> 20 июня 2021</p>
                <p class="info">Дата создания <span></span> 30 июня 2021</p>
                <p class="info">Скидка <span class="large"></span> 10%</p>
            </div>
            <div class="payment">
                <p class="title">Оплата</p>
                <p class="info">Наличными курьеру</p>
            </div>
            <div class="delivery">
                <p class="title">Доставка</p>
                <p class="info">Адрес: “Дом” Алматы, Жарокова, 57<br/>
                    +7 (777) 674-22-11</p>
            </div>
            <div class="cost">
                <div>
                    <p class="info">13 товаров<span>150 000 000 ₸</span></p>
                    <p class="info">Доставка: 4 октября 2021<span class="green">6 000 ₸</span></p>
                    <p class="info">Итого<span>150 000 000 ₸</span></p>
                </div>
            </div>
        </div>
        <div class="buttons">
            <a href="#" class="link-btn">Получить консультацию</a>
            <a href="#" class="link-btn">Оставить отзыв</a>
        </div>
    </div>
</div>

<div class="remodal" data-remodal-id="Added-to-basket" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
    <button data-remodal-action="close" class="remodal-close-btn"></button>
    <div class="wrapper">
        <div class="head">
            <svg viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#303133" stroke-width="2" stroke-linecap="round"/>
            </svg>
            Добавлено в корзину
        </div>
        <div class="product">
            <img src="/i/modals/modal.png" alt=""/>
            <div class="product__info">
                <p class="type">Статуэтка</p>
                <p class="name">Сакские предания</p>
                <p class="price">30 000 т</p>
                <div class="quantity">
                    <div>
                        <p id="increment">-</p>
                        <span>1</span>
                        <p id="decrement">+</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="count">
            <p>1 товар</p>
            <p>Итого: 30 000 т</p>
        </div>
        <div class="buttons">
            <a href="#" class="primary-btn">Продожить шоппинг</a>
            <a href="#" class="main-btn">Оформить заказ</a>
        </div>
    </div>

</div>

<div class="remodal" data-remodal-id="Added-to-favorites" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
    <button data-remodal-action="close" class="remodal-close-btn"></button>
    <div class="wrapper">
        <div class="head">
            <svg viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#303133" stroke-width="2" stroke-linecap="round"/>
            </svg>
            Добавлено в избранное
        </div>
        <div class="product">
            <img src="/i/modals/modal.png" alt=""/>
            <div class="product__info">
                <p class="type">Статуэтка</p>
                <p class="name">Сакские предания</p>
                <p class="price">30 000 т</p>
            </div>
            <svg viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.3291 4.82274C13.287 4.7008 13.2104 4.59369 13.1086 4.51441C13.0069 4.43512 12.8843 4.38707 12.7558 4.37607L8.96242 3.82274L7.26242 0.376073C7.20783 0.263359 7.12259 0.168301 7.01648 0.101789C6.91036 0.0352766 6.78766 0 6.66242 0C6.53718 0 6.41448 0.0352766 6.30836 0.101789C6.20224 0.168301 6.11701 0.263359 6.06242 0.376073L4.36242 3.81607L0.569086 4.37607C0.445701 4.39361 0.329703 4.44538 0.234253 4.52551C0.138804 4.60564 0.0677265 4.71092 0.0290865 4.82941C-0.0062835 4.94519 -0.00945754 5.06842 0.019905 5.18587C0.0492676 5.30332 0.110058 5.41056 0.195753 5.49607L2.94909 8.16274L2.28242 11.9494C2.25862 12.0744 2.27108 12.2036 2.31833 12.3217C2.36559 12.4398 2.44566 12.542 2.54909 12.6161C2.6499 12.6881 2.7688 12.7307 2.89245 12.7389C3.0161 12.7472 3.1396 12.7208 3.24909 12.6627L6.66242 10.8827L10.0624 12.6694C10.156 12.7222 10.2617 12.7498 10.3691 12.7494C10.5103 12.7499 10.648 12.7056 10.7624 12.6227C10.8658 12.5486 10.9459 12.4465 10.9932 12.3284C11.0404 12.2102 11.0529 12.0811 11.0291 11.9561L10.3624 8.16941L13.1158 5.50274C13.212 5.42119 13.2831 5.31401 13.3209 5.19364C13.3587 5.07327 13.3615 4.94466 13.3291 4.82274ZM9.22909 7.48941C9.1509 7.56503 9.09241 7.65863 9.05871 7.76206C9.02501 7.86548 9.01713 7.97557 9.03575 8.08274L9.51575 10.8761L7.00909 9.54274C6.91263 9.49138 6.80503 9.46452 6.69575 9.46452C6.58648 9.46452 6.47887 9.49138 6.38242 9.54274L3.87575 10.8761L4.35575 8.08274C4.37438 7.97557 4.3665 7.86548 4.3328 7.76206C4.2991 7.65863 4.2406 7.56503 4.16242 7.48941L2.16242 5.48941L4.96909 5.08274C5.07709 5.06772 5.17975 5.02643 5.26809 4.96251C5.35642 4.89858 5.42773 4.81397 5.47575 4.71607L6.66242 2.17607L7.91575 4.72274C7.96378 4.82063 8.03509 4.90525 8.12342 4.96917C8.21175 5.0331 8.31442 5.07438 8.42242 5.08941L11.2291 5.49607L9.22909 7.48941Z" fill="#303133"/>
                <path d="M5 4L1.5 5.5L3.73425 8L3 12L6.5 10L10.5 12L9.5 8L12.5 5L9 4.5L6.5 1.5L5 4Z" fill="#303133"/>
            </svg>
        </div>
        <div class="buttons">
            <a href="#" class="main-btn">Избранные товары</a>
        </div>
    </div>
</div>

<div class="remodal" data-remodal-id="Zoom-popup" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
    <button data-remodal-action="close" class="remodal-close-btn"></button>

    <div class="wrapper">
        <div class="swiper-zoom">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="wrapper" style="background-image: url('/i/modals/zoom.png')"></div>
                </div>
                <div class="swiper-slide">
                    <div class="wrapper" style="background-image: url('/i/modals/zoom.png')"></div>
                </div>
                <div class="swiper-slide">
                    <div class="wrapper" style="background-image: url('/i/modals/zoom.png')"></div>
                </div>
                <div class="swiper-slide">
                    <div class="wrapper" style="background-image: url('/i/modals/zoom.png')"></div>
                </div>
            </div>

        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev">
            <svg class="zoom-prev-btn" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 1L1.18644 12.8136L13 24.6271" stroke="#939393" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <div class="swiper-button-next">
            <svg class="zoom-next-btn" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 1L1.18644 12.8136L13 24.6271" stroke="#939393" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>
</div>


