<div class="remodal" data-remodal-id="mail_to" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
    <button data-remodal-action="close" class="remodal-close-btn"></button>
    <div class="content">
        <h1>Напишите нам</h1>
        <p>Обсудить условия сотрудничества</p>
        <form method="POST" action="#" id="mail">
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
        <form method="POST" action="#" id="mail">
            <textarea name="textarea" form="mail" placeholder="Текст вашего письма"></textarea>
            <input type="email" name="email" placeholder="Ваш Email или номер телефона"/>
            <button class="main-btn">Отправить</button>
        </form>
    </div>
</div>

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

<div class="remodal" data-remodal-id="menu" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
    <button data-remodal-action="close" class="remodal-close-btn"></button>
    <div>ok</div>
</div>

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
        <a href="#" class="link-btn">Принять соглашение</a>
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
        <p>Введите пароль от аккаунта<span>Mail@mail.kz</span></p>
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

    </div>
</div>
