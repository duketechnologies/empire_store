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
        <select id="select-country2" name="country">
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
      <div class="buttons">
        <button class="primary-btn">Удалить адрес</button>
      </div>
    </form>
  </div>
</div>

<div class="remodal" data-remodal-id="location-mobile" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
  <button data-remodal-action="close" class="remodal-close-btn"></button>
  <div class="location-mobile">
    <h3>Новый адрес</h3>
    <form method="POST" action="#" class="location-form">
      <input type="text" placeholder="Введите название адреса" name="adress-name"/>
      <input type="text" placeholder="Область, город" name="adress-city"/>
      <input type="text" placeholder="Адрес" name="adress-location"/>
      <input type="text" placeholder="Телефон получателя" name="adress-phone"/>
      <input type="text" placeholder="Комментарий" name="adress-comment"/>
      <div class="buttons">
        <button type="submit" class="main-btn">Сохранить адрес</button>
        <button class="text-btn" data-remodal-action="close">Отменить</button>
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
          <input type="text" name="name" placeholder="Ваше имя"/>
        </fieldset>
        <fieldset>
          <legend>Номер телефона</legend>
          <input type="tel" name="phone" placeholder="Номер телефона"/>
        </fieldset>
        </div>
        <div class="location">
          <h4>Место открытия бутика</h4>
          <fieldset>
            <legend>Страна</legend>
            <input type="text" name="country" placeholder="Страна"/>
          </fieldset>
            <fieldset>
            <legend>Город</legend>
            <input type="text" name="city" placeholder="Город"/>
          </fieldset>
        </div>
        <div class="place">
          <h4>У вас имеется помещение?</h4>
          <div class="checkboxes">
            <div>
              <input type="radio" id="for1" name="res"/>
              <label for="for1">Да</label>
            </div>
            <div>
              <input type="radio" id="2" name="res"/>
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
        <li class="active">
          <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
          </svg>
          Один подарок</li>
        <li>
          <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
          </svg>
          Несколько Несколько</li>
        <li>
          <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
          </svg>
          Несколько</li>
        <li>
          <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
          </svg>
          Несколько</li>
        <li>
          <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
          </svg>
          Несколько</li>
        <li>
          <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
          </svg>
          Несколько</li>
      </ul>
      <a href="#"class="main-btn">Далее</a>
    </div>
  </div>
</div>

<div class="remodal" data-remodal-id="feedback" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
  <button data-remodal-action="close" class="remodal-close-btn"></button>
  <div class="content">
    <img src="/i/modals/feedback.png" alt=""/>
    <div class="consultaion">
      <div class="call">
        <h1>Нужна помощь?</h1>
        <p>Оставьте свой номер для связи с консультантом.<br/>
            Или поищите ответ на свой вопрос в <a href="/faq">разделе FAQ.</a>
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
  <form method="POST" action="#" class="wrapper">
    <h4>Мое местоположение</h4>
    <div class="country">
      <p>Страна</p>
      <div class="select-box">
        <div class="options-container">
          <div class="option">
            <input type="radio" class="radio" id="kz" name="category"/>
            <label for="kz"><img src="/i/icons/kz_icon.png" alt=""/>Казахстан<span></span></label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="uk" name="country" />
            <label for="uk"><img src="/i/icons/uk_icon.png" alt=""/>Украина<span></span></label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="kr" name="country" />
            <label for="kr"><img src="/i/icons/kr_icon.png" alt=""/>Киргизия<span></span></label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="kz2" name="country" />
            <label for="kz2"><img src="/i/icons/kz_icon.png" alt=""/>Казахстан<span></span></label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="ru" name="country" />
            <label for="ru"><img src="/i/icons/ru_icon.png" alt=""/>Россия<span></span></label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="kz3" name="country" />
            <label for="kz3"><img src="/i/icons/kz_icon.png" alt=""/>Казахстан<span></span></label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="ru2" name="country" />
            <label for="ru2"><img src="/i/icons/ru_icon.png" alt=""/>Россия<span></span></label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="kr2" name="country" />
            <label for="kr2"><img src="/i/icons/kr_icon.png" alt=""/>Киргизия<span></span></label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="uk2" name="country" />
            <label for="uk2"><img src="/i/icons/uk_icon.png" alt=""/>Украина<span></span></label>
          </div>
        </div>

        <div class="selected">
          Казахстан
          <svg viewBox="0 0 13 2" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1H11.5" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </div>
    </div>
    <div class="city">
      <p>Город / Населенный пункт</p>
      <div class="select-box">
        <div class="options-container" >
          <div class="option">
            <input type="radio" class="radio" id="automobiles" name="category"/>
            <label for="automobiles">Казахстан<span></span></label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="film" name="category" />
            <label for="film">Украина<span></span></label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="science" name="category" />
            <label for="science">Киргизия<span></span></label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="art" name="category" />
            <label for="art">Казахстан<span></span></label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="music" name="category" />
            <label for="music">Россия<span></span></label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="travel" name="category" />
            <label for="travel">Казахстан<span></span></label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="sports" name="category" />
            <label for="sports">Россия<span></span></label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="news" name="category" />
            <label for="news">Киргизия<span></span></label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="uk3" name="category" />
            <label for="uk3">Украина<span></span></label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="uk4" name="category" />
            <label for="uk4">Украина<span></span></label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="uk5" name="category" />
            <label for="uk5">Украина<span></span></label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="uk6" name="category" />
            <label for="uk6">Украина<span></span></label>
          </div>
        </div>

        <div class="selected">
          Казахстан
          <svg viewBox="0 0 13 2" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1H11.5" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </div>
    </div>
    <a href="#" class="main-btn">Сохранить местоположение</a>
  </form>
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
  <button data-remodal-action="close" class="remodal-close-btn"></button>
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
  <button data-remodal-action="close" class="remodal-close-btn"></button>
    <div class="wrapper">
      <h3>Введите пароль</h3>
      <p>Введите пароль от аккаунта<span>Mail@mail.kz</span></p>
      <form method="POST" action="#">
        <fieldset>
          <legend>Телефон или Email</legend>
          <input id="font" type="text" name="login-email" autocomplete="off"/>
        </fieldset>
        <fieldset>
          <input type="password" name="register_password" placeholder="Повторите пароль" autocomplete="off"/>
        </fieldset>
        <button type="submit" class="main-btn">Войти</button>
        <button type="submit" class="link-btn">Забыл пароль</button>
      </form>
    </div>
</div>

<div class="remodal" data-remodal-id="new-password" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
  <button data-remodal-action="close" class="remodal-close-btn"></button>
    <div class="recovery">
      <h3>Создайте новый пароль</h3>
      <p>Введите пароль от аккаунта<span> Mail@mail.kz</span></p>
      <form method="POST" action="#">
        <fieldset>
          <legend>Новый пароль</legend>
          <input type="password" name="password-recovery" autocomplete="off"/>
        </fieldset>
        <fieldset>
          <legend>Повторите пароль</legend>
          <input type="password" name="confirm-password-recovery"  autocomplete="off"/>
        </fieldset>
        <button type="submit" class="main-btn">Сохранить пароль и войти</button>
      </form>
    </div>
</div>

<div class="remodal" data-remodal-id="forget-password" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
  <button data-remodal-action="close" class="remodal-close-btn"></button>
  <div class="forget-password">
    <svg viewBox="0 0 34 33" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M22.2167 10.3837L27.4846 5.04861M30.4949 2L27.4846 5.04861L30.4949 2ZM16.0306 16.6486C16.8078 17.4252 17.4256 18.3498 17.8485 19.3691C18.2713 20.3885 18.4909 21.4826 18.4946 22.5882C18.4982 23.6939 18.2859 24.7894 17.8698 25.8116C17.4537 26.8339 16.842 27.7626 16.07 28.5445C15.298 29.3263 14.3809 29.9458 13.3715 30.3672C12.3622 30.7886 11.2805 31.0037 10.1887 31C9.09693 30.9962 8.01667 30.7739 7.01011 30.3456C6.00356 29.9174 5.09059 29.2917 4.32378 28.5046C2.81585 26.9234 1.98145 24.8057 2.00031 22.6075C2.01917 20.4094 2.88978 18.3066 4.42462 16.7522C5.95947 15.1978 8.03574 14.3161 10.2062 14.297C12.3768 14.2779 14.4678 15.1229 16.0291 16.6501L16.0306 16.6486ZM16.0306 16.6486L22.2167 10.3837L16.0306 16.6486ZM22.2167 10.3837L26.7321 14.9566L32 9.62153L27.4846 5.04861L22.2167 10.3837Z" stroke="#505154" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <h3>Восстановление пароля</h3>
    <p>
      Мы отправили ссылку для восстановления
      доступа на почту, указанную при регистрации
      <br/>
      <span>Mail@mail.kz</span>
    </p>
    <button class="link-btn">Мне не пришло письмо</button>
  </div>
</div>

<div class="remodal" data-remodal-id="register-email" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
  <button data-remodal-action="close" class="remodal-close-btn"></button>
  <div class="wrapper">
    <h3>Создайте пароль</h3>
    <p>Создание пароля для нового аккаунта <span>Mail@mail.kz</span></p>
    <form method="POST" action="#">
      <fieldset>
        <legend>Пароль</legend>
        <input type="password" name="register_password"/>
      </fieldset>
      <fieldset>
        <legend>Повторите пароль</legend>
        <input type="password" name="register_password" />
      </fieldset>
      <div>
        <input type="checkbox" name="personal_info" id="personal_info"/>
        <label for="personal_info">
          Соглашаюсь на обработку персональной информации в соответствии с
          <a href="/policy">Политикой конфиденциальности</a>
        </label>
      </div>
      <button type="submit" class="main-btn">Сохранить</button>
      <button type="submit" class="link-btn">У меня уже есть аккаунт</button>
    </form>
  </div>
</div>

<div class="remodal" data-remodal-id="login-phone" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
  <button data-remodal-action="close" class="remodal-close-btn"></button>
  <div class="wrapper">
    <h3>Введите пароль из смс</h3>
    <form method="POST" action="#" id="form-wrap">
      <input type="tel" id="input1" name="login-phone-sms" placeholder="-" maxlength="1"/>
      <input type="tel" id="input2" name="login-phone-sms" placeholder="-" maxlength="1"/>
      <input type="tel" id="input3" name="login-phone-sms" placeholder="-" maxlength="1"/>
      <input type="tel" id="input4" name="login-phone-sms" placeholder="-" maxlength="1"/>
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
          <div class="wrapper" style="background-image: url('/i/test.png')"></div>
        </div>
        <div class="swiper-slide">
          <div class="wrapper" style="background-image: url('/i/test2.png')"></div>
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
    <div class="swiper-scrollbar"></div>
  </div>
  <form method="POST" action="#">
    <div class="checkboxes">
      <div class="gold">
        <input type="radio" name="group2" id="color-gold">
        <label for="color-gold">Золотой</label>
      </div>
      <div>
        <input type="radio" name="group2" id="color-black">
        <label for="color-black">Черный</label>
      </div>
      <div class="grey">
        <input type="radio" name="group2" id="color-grey">
        <label for="color-grey">Серый</label>
      </div>
    </div>
  </form>
</div>

<div class="remodal" data-remodal-id="edit-order" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
  <button data-remodal-action="close" class="remodal-close-btn"></button>
  <h3>Ваш текущий заказ</h3>
  <div class="orders">
    {{--              <h3>Вы еще не оформили ни одного заказа</h3>--}}
    {{--              <a href="#">Начать шопинг</a>--}}
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
        <form method="POST" action="#">
          <input type="checkbox" name="craft-package" id="edit-craft1"/>
          <label for="edit-craft1">Крафт-пакет</label>
        </form>
      </div>
      <div class="product__status">
        <p class="in-process">10 000 000	₸</p>
      </div>
      <div class="product__delete">
        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M24 8L8 24" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M8 8L24 24" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
    <div class="product">
      <div class="product__date">
        <img src="/i/profile/product-2.png" alt=""/>
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
          <p>-</p>
          <span>1</span>
          <p>+</p>
        </div>

      </div>
      <div class="product__package">
        <form method="POST" action="#">
          <input type="checkbox" name="craft-package" id="edit-craft2"/>
          <label for="edit-craft2">Крафт-пакет</label>
        </form>
      </div>
      <div class="product__status">
        <p class="in-process">10 000 000	₸</p>
      </div>
      <div class="product__delete">
        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M24 8L8 24" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M8 8L24 24" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
    <div class="product">
      <div class="product__date">
        <img src="/i/profile/product-3.png" alt=""/>
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
          <p>-</p>
          <span>1</span>
          <p>+</p>
        </div>

      </div>
      <div class="product__package">
        <form method="POST" action="#">
          <input type="checkbox" name="craft-package" id="edit-craft3"/>
          <label for="edit-craft3">Крафт-пакет</label>
        </form>
      </div>
      <div class="product__status">
        <p class="in-process">10 000 000	₸</p>
      </div>
      <div class="product__delete">
        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M24 8L8 24" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M8 8L24 24" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
    <div class="checkout">
      <div class="consultaion">
        <h2>Нужна помощь с заказом?</h2>
        <p>Оставьте свой номер для связи с консультантом.<br/>
          Или поищите ответ на свой вопрос в <a href="/faq" class="move_to">разделе FAQ.</a></p>
        <a href="#">Заказать консультацию</a>
      </div>
      <div class="sum">
        <div class="count">
          <span>13 товаров</span>
          <p>150 000 000	₸</p>
        </div>
        <div class="delivery">
          <span>Доставка</span>
          <p>Бесплатно по Алматы</p>
        </div>
        <div class="total">
          <span>Итого</span>
          <p>150 000 000	₸</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="remodal" data-remodal-id="access-order" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
  <button data-remodal-action="close" class="remodal-close-btn"></button>
  <div class="content">
    <img src="/i/modals/access.png"/>
    <div class="question">
      <h3>
        <svg viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
        </svg>
        Ваш заказ оформлен
      </h3>
      <p>Мы скоро свяжемся с вами,<br/>
        вы всегда можете проверить статус<br/>
        заказа в <a href="/profle">личном кабинете</a></p>
      <a href="#" class="link-btn">Проверить статус заказа</a>
      <a href="# "class="main-btn">Вернуться к шоппингу</a>
    </div>
  </div>
</div>

<div class="remodal" data-remodal-id="failed-order" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
  <button data-remodal-action="close" class="remodal-close-btn"></button>
  <div class="content">
    <img src="/i/modals/failed.png"/>
    <div class="question">
      <h3>
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="12" cy="12" r="9" stroke="#EB5757"/>
          <path d="M18 18L6 6" stroke="#EB5757"/>
        </svg>
        Что-то пошло не так...
      </h3>
      <p>Мы скоро свяжемся с вами,<br/>
        вы всегда можете проверить статус заказа<br/>
        в личном кабинете</p>
      <a href="# "class="main-btn">Оформить заново</a>
    </div>
  </div>
</div>

<div class="remodal" data-remodal-id="pickup-modal" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
  <button data-remodal-action="close" class="remodal-close-btn"></button>
  <h2>Выберите бутик для самовывоза</h2>
</div>

<div class="remodal" data-remodal-id="profile-order-mobile" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
  <button data-remodal-action="close" class="remodal-close-btn"></button>
  <div class="container-custom">
    <div class="order-title">
      <h3>Заказ #39210</h3>
      <p class="process-success">
        <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.125 5.75L2.85809 7.04982C3.28678 7.37134 3.89272 7.29779 4.23205 6.88305L9.25 0.75" stroke="#27AE60" stroke-linecap="round"/>
        </svg>
        Доставлено
      </p>
    </div>
    <p class="order-data">24 сентября 2021</p>
    <div class="product">
      <div class="product-image">
        <img src={{ url("/i/profile/mobile.png") }} />
      </div>
      <div class="info">
        <p class="name">Статуэтка Күйші ару</p>
        <p class="price">4 350 ₸</p>
        <p class="count">1 шт</p>
        <div class="package">
          <input type="radio" id="profile-1"/>
          <label for="profile-1">Крафт пакет</label>
        </div>
      </div>
    </div>
    <div class="product">
      <div class="product-image">
        <img src={{ url("/i/profile/mobile.png") }} />
      </div>
      <div class="info">
        <p class="name">Статуэтка Күйші ару</p>
        <p class="price">4 350 ₸</p>
        <p class="count">1 шт</p>
      </div>
    </div>
  </div>

  <div class="details">
    <p class="details-title">Детали заказа</p>
    <div class="about">
      <p class="title">О заказе</p>
      <p class="desc">Дата создания <span>20 июня 2021</span></p>
      <p class="desc">Дата доставки <span>30 июня 2021</span></p>
    </div>
    <div class="delivery">
      <p class="title">Доставка</p>
      <p class="desc">Адрес: "Дом" Алматы, Жаракова, 57</p>
      <p class="desc">+7 (777) 674-22-11</p>
    </div>
    <div class="pay">
      <p class="title">Оплата</p>
      <p class="desc">Наличными курьеру</p>
    </div>
  </div>
  <div class="summary">
    <p>13 товаров <span>7 400 350 ₸</span></p>
    <p>Доставка <span class="green">Бесплатно по Алматы</span></p>
    <p>Итого <span>7 400 350 ₸</span></p>
    <button class="main-btn">Нужна помощь с заказом?</button>
  </div>
</div>

<div class="remodal" data-remodal-id="edit-order-mobile" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
  <button data-remodal-action="close" class="remodal-close-btn"></button>
  <p class="order-mobile-title">Мой заказ <span>6 товаров</span></p>
  <form method="POST" action="#" class="edit-order-mobile">
    <div class="mobile-product">
      <div class="product-img">
        <img src={{ url("/i/item/single-4.png") }} />
      </div>
      <div class="product-info">
        <p class="pr-name">Статуэтка Күйші ару</p>
        <p class="pr-price">4 350 ₸</p>
        <div class="mobile-quantity">
          <button type="button" class="button-quantity-mobile disabled">-</button>
          <span>1</span>
          <button type="button" class="button-quantity-mobile">+</button>
        </div>
        <div class="package">
          <input type="checkbox" id="10" />
          <label for="10" name="craft-package">Крафт-пакет</label>
        </div>
        <div class="pr-delete">
          <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 1L1 9" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M1 1L9 9" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          Удалить
        </div>
      </div>
    </div>
    <div class="mobile-product">
      <div class="product-img">
        <img src={{ url("/i/item/single-4.png") }} />
      </div>
      <div class="product-info">
        <p class="pr-name">Статуэтка Күйші ару</p>
        <p class="pr-price">4 350 ₸</p>
        <div class="mobile-quantity">
          <button type="button" class="button-quantity-mobile disabled">-</button>
          <span>1</span>
          <button type="button" class="button-quantity-mobile">+</button>
        </div>
        <div class="package">
          <input type="checkbox" id="11" />
          <label for="11" name="craft-package">Крафт-пакет</label>
        </div>
        <div class="pr-delete">
          <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 1L1 9" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M1 1L9 9" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          Удалить
        </div>
      </div>
    </div>
    <div class="mobile-product">
      <div class="product-img">
        <img src={{ url("/i/item/single-4.png") }} />
      </div>
      <div class="product-info">
        <p class="pr-name">Статуэтка Күйші ару</p>
        <p class="pr-price">4 350 ₸</p>
        <div class="mobile-quantity">
          <button type="button" class="button-quantity-mobile disabled">-</button>
          <span>1</span>
          <button type="button" class="button-quantity-mobile">+</button>
        </div>
        <div class="package">
          <input type="checkbox" id="12" />
          <label for="12" name="craft-package">Крафт-пакет</label>
        </div>
        <div class="pr-delete">
          <svg viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 1L1 9" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M1 1L9 9" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          Удалить
        </div>
      </div>
    </div>
    <div class="mobile-checkout-price">
      <div>
        <p>13 товаров </p><span>7 400 350 ₸</span>
      </div>
      <div>
        <p>Доставка  </p><span class="green">Бесплатно по Алматы</span>
      </div>
      <div>
        <p>Итого  </p><span>7 400 350 ₸</span>
      </div>
      <button class="main-btn" data-remodal-action="close">Продолжить оформление</button>
    </div>
  </form>

</div>

<div class="remodal" data-remodal-id="vacancies-mobile-modal" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
  <button data-remodal-action="close" class="remodal-close-btn"></button>
  <h2>Специализация</h2>
  <ul>
    <li class="selected">Все
      <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#303133" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </li>
    <li>Дизайн
      <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#303133" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </li>
    <li>Администрирование
      <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#303133" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </li>
    <li>Консультация
      <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#303133" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </li>
  </ul>
  <button class="main-btn">Найти вакансию</button>
</div>

<div class="remodal" data-remodal-id="address-mobile-modal" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
  <button data-remodal-action="close" class="remodal-close-btn"></button>
  <h2>Выбор города</h2>
  <ul>
    <li class="selected">
      <p>Все города</p>
      <svg class="check-city" width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#303133" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </li>
    <li>
      <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M18.9898 10.7324C18.9898 10.7324 17.5407 9.25335 17.2307 8.94992C17.0665 8.78952 16.8887 8.71332 16.7177 8.71667C16.6386 8.71919 16.5608 8.73702 16.4888 8.76913C16.4167 8.80125 16.3519 8.84702 16.298 8.9038C16.0016 9.19454 15.6133 9.17583 15.6133 8.37447C15.6133 7.83177 15.5915 7.35322 15.2713 6.8553C15.5092 6.74828 15.7373 6.6215 15.9532 6.47635C16.7619 5.93899 17.6667 4.91373 17.6572 3.3137C17.6572 1.57665 16.4083 0 14.4074 0C12.3914 0 11.6182 0.747888 11.6182 2.03313C11.6182 3.19206 12.5474 3.96868 13.3425 3.96868C14.6826 3.96868 14.9545 3.22146 14.9729 3.1847C15.0209 3.06247 15.0177 2.92652 14.9638 2.80664C14.9099 2.68676 14.8098 2.59271 14.6853 2.54509C14.4162 2.40273 14.1601 2.54843 14.002 2.88662C14.002 2.88662 13.8065 3.20743 13.4386 3.20275L13.3418 3.21344C12.9801 3.21344 12.3941 2.82714 12.3941 2.13539C12.3941 1.36545 12.9583 0.738531 14.2997 0.738531C15.8892 0.738531 16.8757 2.0338 16.8757 3.3284C16.8757 4.53946 15.9934 5.23321 15.3775 5.66563C15.1158 5.84135 14.8318 5.9829 14.5327 6.0867C13.9795 5.63689 13.4249 5.41032 12.6312 5.41032C11.225 5.41032 11.4308 6.11009 8.57207 6.11009C7.40842 6.11009 7.32326 5.42436 6.18277 5.42436C5.83258 5.42436 4.63895 5.62085 4.63895 3.18604L4.64372 2.60792H5.70313C5.70313 2.60792 6.10987 3.32506 6.72712 3.32506C7.34438 3.32506 7.64619 2.33656 7.64619 2.33656L5.88981 0.742541H4.46386V0.0387646H3.39149V1.11214C3.39149 1.11214 1.47569 2.26639 1.47569 4.4646C1.47569 6.19296 2.93707 6.99432 3.25932 7.27904C3.31315 7.32716 2.9541 8.07973 2.9541 8.07973H1.46751C0.878873 8.07973 0 9.05753 0 9.9324C0 10.578 0.117183 10.7297 0.423766 10.7297C0.738526 10.7297 0.949046 10.5987 1.07849 10.036C1.21135 9.45854 1.47501 8.92185 2.41179 8.92185C3.8759 8.92185 4.30988 9.96381 4.30988 9.96381H6.13099L7.85876 12.4862C7.85876 12.4862 6.78367 13.0035 6.78367 13.3771C6.78367 13.6037 6.85316 13.7514 6.95195 13.8456C7.08003 13.9679 7.25785 14 7.40092 14C7.71568 14 8.80848 13.2608 8.81666 12.7154C8.82211 12.3498 7.50176 9.97919 7.50176 9.97919H9.59606L11.7367 8.12584L12.5113 8.88643L11.6086 9.81143V10.6816L13.0761 11.7236V12.1353L12.1673 13.0135H11.2673C10.9791 13.0135 10.8953 13.204 10.8953 13.5368C10.8953 13.8944 10.9948 13.988 11.2264 13.988H12.4602L14.1921 12.1487V10.6362H15.509L16.6618 9.7486L17.7382 10.7324C17.7382 10.7324 17.6217 11.6868 18.1109 11.9335C18.4836 12.1213 18.9836 11.9756 18.9836 11.9756L19 11.2972L18.9898 10.7324Z" fill="#303133"/>
      </svg>
      <p>Алматы</p>
      <svg class="check-city" width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#303133" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </li>
    <li>
      <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20 0.714286C19.2786 1.52929 16.9607 2.55714 15.7143 2.85714C14.4679 3.15714 11.8843 5.14 10.7143 6.78571C10.7843 6.02571 11.2329 5.25143 11.4286 5C10.7514 5 10.3571 4.67929 10.3571 4.28571C10.3571 3.74429 10.5064 3.21429 11.0714 3.21429C11.5179 3.21429 11.9557 3.92071 11.4286 4.28571C11.9107 4.28571 12.5 4.03357 12.5 3.21429C12.5 2.395 11.9186 2.14286 11.4286 2.14286C10.9386 2.14286 10.9136 2.35143 10.7143 2.5C11.0064 1.72429 10.7093 0.534286 10 0C9.29071 0.534286 8.99357 1.72429 9.28571 2.5C9.08643 2.35143 9.06143 2.14286 8.57143 2.14286C8.08143 2.14286 7.5 2.395 7.5 3.21429C7.5 4.03357 8.08929 4.28571 8.57143 4.28571C8.04429 3.92071 8.48214 3.21429 8.92857 3.21429C9.49357 3.21429 9.64286 3.74429 9.64286 4.28571C9.64286 4.67929 9.24857 5 8.57143 5C8.76714 5.25143 9.21571 6.02571 9.28571 6.78571C8.11571 5.14 5.53214 3.15714 4.28571 2.85714C3.03929 2.55714 0.721429 1.52929 0 0.714286C0 3.88857 3.45929 5.92929 5.71429 6.42857C5.27214 6.66357 4.28571 7.59357 4.28571 8.57143C4.28571 9.54929 5.05071 10.7143 6.42857 10.7143C7.60357 10.7143 8.57143 9.88786 8.57143 8.92857C8.57143 8.53143 8.25357 7.85714 7.85714 7.85714C8.175 8.55429 7.65357 8.92857 7.14286 8.92857C6.395 8.92857 6.07143 8.52429 6.07143 7.85714C6.07143 6.87786 6.825 6.42857 7.85714 6.42857C8.73571 6.42857 9.28571 7.70714 9.28571 9.28571C9.28571 9.96857 9.03571 11.0757 7.85714 11.4286C8.58429 12.1143 9.4 13.7057 10 15C10.6 13.7057 11.4157 12.1143 12.1429 11.4286C10.9643 11.0757 10.7143 9.96857 10.7143 9.28571C10.7143 7.70714 11.2643 6.42857 12.1429 6.42857C13.175 6.42857 13.9286 6.87786 13.9286 7.85714C13.9286 8.52429 13.605 8.92857 12.8571 8.92857C12.3464 8.92857 11.825 8.55429 12.1429 7.85714C11.7464 7.85714 11.4286 8.53143 11.4286 8.92857C11.4286 9.88786 12.3964 10.7143 13.5714 10.7143C14.9493 10.7143 15.7143 9.54929 15.7143 8.57143C15.7143 7.59357 14.7279 6.66357 14.2857 6.42857C16.5407 5.92929 20 3.88857 20 0.714286Z" fill="#303133"/>
      </svg>
      <p>Нур-султан</p>
      <svg class="check-city" width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#303133" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </li>
    <li>
      <svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M11 6.31812C11 2.86555 8.72011 0.0324097 5.21053 0.0324097C3.08753 0.0324097 2.61742 1.7467 0 1.7467V2.31812C4.63158 2.31812 7.52632 3.99698 7.52632 7.54384C7.52632 7.6867 7.52168 7.82098 7.51763 7.95698C6.60695 8.21984 6.36842 8.76327 6.36842 9.46098C6.58668 9.24555 7.07532 9.13927 7.37811 9.36784C7.28432 9.84898 7.14189 10.2833 6.92768 10.6787C6.41937 10.8861 5.60942 10.5324 5.214 11.4878C5.51737 11.3541 6.13568 11.377 6.19416 11.6267C5.52605 12.2353 4.74621 12.3181 4.21416 12.3181C2.96016 12.3181 2.24632 10.6553 1.15789 10.3181C1.59674 11.2616 1.73684 12.213 1.73684 13.1753C1.73684 14.509 0.682 15.461 0 15.461C0.108842 15.853 0.388474 16.0324 0.702263 16.0324C1.694 16.0324 2.39684 15.081 2.89474 14.3181C3.33821 13.6393 4.05263 13.1753 5.21053 13.1753C5.73911 13.1753 6.25263 13.1204 6.74416 13.0124C6.84895 13.5633 6.71116 14.0821 6.36842 14.3181C7.55526 14.2038 8.10526 13.6421 8.10526 12.5296L8.09021 12.5301C9.8091 11.6353 11 9.72727 11 6.31812Z" fill="#303133"/>
      </svg>
      <p>Атырау</p>
      <svg class="check-city" width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#303133" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </li>
    <li>
      <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 12.8148V17.0648H5.46429V12.8148L2.73214 9.77911L0 12.8148ZM3.46618 12.9417C3.706 13.1396 3.85961 13.439 3.85961 13.7747C3.85961 14.0722 3.73818 14.343 3.54389 14.5391C3.34469 14.7372 3.07635 14.8502 2.79545 14.8543C2.51455 14.8583 2.24305 14.7532 2.03818 14.561C1.88076 14.4125 1.77152 14.2202 1.72462 14.009C1.67771 13.7977 1.69529 13.5773 1.77509 13.3762C1.85489 13.175 1.99323 13.0025 2.17219 12.8809C2.35116 12.7592 2.56251 12.6941 2.77889 12.694C3.04057 12.6946 3.27979 12.7875 3.46618 12.9417ZM12.75 15.2434V6.74339L10.9286 5.52911V4.01125L10.625 3.70768H9.71429L8.53339 0.0648193L7.28571 3.70768H6.375L6.07143 4.01125V5.52911L4.25 6.74339V9.77911L5.46429 10.9934V7.35053H6.67857V17.0648H13.9643V15.8505L13.3571 15.2434H12.75ZM9.10714 15.2434H7.89286V7.35053H9.10714V15.2434ZM11.5357 15.2434H10.3233L10.3214 7.35053H11.5357V15.2434ZM13.9643 8.56482V14.0291L15.1786 15.2434V17.0648H17V8.56482H13.9643Z" fill="#303133"/>
      </svg>
      <p>Актау</p>
      <svg class="check-city" width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#303133" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </li>
    <li>
      <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M16 4.57729C16 2.26281 14.9126 1.77729 14 1.77729C12.7663 1.77729 12 2.42073 12 3.45729C12 4.47761 12.6731 5.13729 13.7143 5.13729C13.8658 5.13729 14.0112 5.07829 14.1183 4.97327C14.2255 4.86825 14.2857 4.72581 14.2857 4.57729C14.2857 4.42877 14.2255 4.28633 14.1183 4.18131C14.0112 4.07629 13.8658 4.01729 13.7143 4.01729C13.24 4.01729 13.1429 3.79385 13.1429 3.45729C13.1429 3.28985 13.1429 2.89729 14 2.89729C14.2566 2.89729 14.8571 2.89729 14.8571 4.57729C14.8571 5.47217 14.8149 5.96329 14.3251 6.37657C13.8857 5.89441 13.232 5.69729 12.5714 5.69729C11.5017 5.69729 10.9269 6.18169 9.92114 6.24497C10.8543 5.25769 11.4286 4.07945 11.4286 2.89729C11.4286 1.21729 10.2857 0.09729 9.14286 0.09729C8.36572 0.09729 7.83886 0.49153 7.42857 1.21729C8.38229 1.21729 9.09543 1.50681 9.14286 2.33729C9.17486 2.89617 9.14286 3.45729 8 4.01729C7.80971 4.11081 7.62 4.22449 7.432 4.34601C7.38629 4.37625 7.34114 4.40593 7.296 4.43729C7.10767 4.56542 6.92592 4.7026 6.75143 4.84833C6.08457 5.41281 5.50114 6.11505 5.14286 6.81729C5.14286 5.97113 5.57371 4.90881 6.43314 3.91145C6.33086 3.43265 6.28571 2.90681 6.28571 2.33729C6.28571 1.91225 6.20286 1.56897 6.06971 1.30521C6.28229 0.90257 6.28571 0.49993 6.28571 0.09729C6.28571 0.09729 5.71429 0.65729 5.14286 0.65729C4 0.65729 3.42857 1.21729 3.42857 1.77729C2.28571 1.77729 2.28571 2.33729 2.28571 2.89729C4 2.89729 4.28571 3.45729 4.28571 4.01729C4.28571 4.57729 3.42857 5.69729 3.42857 6.81729C3.42857 7.87177 3.87943 8.92569 4.77943 9.56465L4 11.8573H3.42857C2.85714 11.8573 2.28571 12.4173 2.28571 12.9773H4.57143C4.57143 12.9773 5.64743 11.5694 6.37886 10.1487C6.53314 10.1655 6.69086 10.1773 6.85714 10.1773C9.14286 10.1773 10.8571 8.49729 11.4286 8.49729C11.4286 9.61729 13.1429 10.1773 13.1429 11.2973C13.1429 11.8573 12 12.9773 12 12.9773H11.4286C10.8571 12.9773 10.2857 13.5373 10.2857 14.0973H12C13.1429 13.5373 14.2857 11.8573 14.2857 11.2973C14.2857 10.8358 13.9069 10.3694 14.0903 9.59377C14.5977 9.17937 14.8571 8.68321 14.8571 7.93729C14.8571 7.75081 14.8383 7.58281 14.8114 7.42321C15.9017 6.68065 16 5.77849 16 4.57729ZM2.85714 7.93729H1.14286C1.14286 7.37729 0.571429 6.81729 0 6.81729V8.49729C1.14286 9.05729 3.42857 9.61729 4 9.61729C2.85714 9.05729 2.85714 8.49729 2.85714 7.93729ZM11.4286 10.1773L10.8571 9.61729C10.8571 9.61729 10.2857 10.1773 9.14286 10.1773V11.2973C9.14286 11.8573 8.57143 12.4173 8 12.4173C6.85714 12.4173 6.28571 12.9773 6.28571 13.5373H8.57143C8.57143 13.5373 10.2857 12.4173 10.8571 11.8573C10.8571 11.2973 10.8571 10.7373 11.4286 10.1773Z" fill="#303133"/>
      </svg>
      <p>Актобе</p>
      <svg class="check-city" width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#303133" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </li>
    <li>
      <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M19 6.91547C16.9643 6.91547 16.9643 5.55184 15.6071 5.55184C15.1321 5.55184 14.3857 6.16547 13.9786 6.57456C13.5714 5.96093 12.9607 5.55184 12.2143 5.55184C10.8571 5.55184 10.1786 6.23365 9.5 6.23365C8.75357 6.23365 7.05714 6.23365 7.53214 4.1882C7.87143 3.02911 7.125 1.80184 5.97143 1.52911C5.49643 0.574563 4.07143 0.09729 4.07143 0.09729C4.07143 0.09729 4.34286 0.983654 4.54643 1.59729C3.93571 1.80184 3.325 2.27911 2.91786 2.82456L2.30714 3.77911C2.17143 4.05184 2.17143 4.32456 2.375 4.52911C2.57857 4.73365 2.85 4.73365 3.05357 4.59729C3.39286 4.39275 3.93571 4.1882 4.75 4.1882C4.75 5.41547 4.20714 6.57456 4.07143 7.80184L1.425 8.6882C1.08571 8.82456 0.95 9.30184 1.15357 9.57456L2.10357 10.5973L2.71429 10.0518C2.64643 9.84729 2.78214 9.64275 2.98571 9.64275H4.07143L0.678571 13.0518C0 13.7337 0 15.0973 0 15.0973H0.542857C0.95 15.0973 1.35714 14.6882 1.35714 14.2791V14.0746C1.35714 13.87 1.49286 13.6655 1.62857 13.5291L5.7 10.5973C6.175 10.87 6.78571 11.0064 7.46429 11.0064C9.5 11.0064 10.8571 9.64275 11.5357 9.64275C11.5357 10.3246 12.2143 11.0064 13.5714 11.0064C14.9286 11.0064 14.9286 12.37 14.9286 13.7337C14.25 14.4155 14.25 15.0973 14.25 15.0973H14.725C15.2 15.0973 15.6071 14.6882 15.6071 14.2109V10.1882C15.6071 9.91547 15.4036 9.64274 15.0643 9.57456C14.25 9.4382 14.25 8.75638 14.25 7.66547C15.2 7.80184 15.7429 8.27911 16.2857 8.27911C17.6429 8.27911 18.3214 7.59729 19 6.91547ZM4.00357 12.8473L4.75 13.7337L5.42857 13.0518L4.68214 12.2337L4.00357 12.8473ZM11.1964 10.5973C11.1964 10.5973 10.8571 10.7337 10.45 10.9382C10.7214 11.5518 11.1286 11.9609 11.5357 12.37C10.1786 13.7337 9.5 14.4155 9.5 15.0973H10.8571V14.3473L13.5714 12.37C13.5714 12.37 13.3679 12.1655 13.1643 11.6882C11.875 11.4837 11.4 11.0746 11.1964 10.5973Z" fill="#303133"/>
      </svg>
      <p>Уральск</p>
      <svg class="check-city" width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#303133" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </li>
    <li>
      <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13.2075 7.90838C13.2218 9.2732 12.425 10.2417 11.288 10.8528C12.4623 10.9924 13.5615 11.4118 14.4093 11.8299C15.8373 10.1658 16 8.05256 16 6.74173C16 5.05409 15.886 1.7598 14.926 1.78737C14.926 3.00227 15.0279 3.68985 14.6218 3.68985C14.2638 3.68985 14.2838 3.30729 14.0667 1.94879C13.8342 0.494932 13.1897 0.638537 13.1897 0.638537C13.1897 0.638537 13.2253 1.08658 13.2253 2.16419C13.2253 3.17402 12.6507 3.68755 12.2767 2.07458C11.6964 -0.428159 10.8945 0.156599 10.8945 0.156599L10.8807 0.351327C11.0904 1.18309 12.0441 4.38777 12.0441 4.94668C12.0435 6.57975 13.1892 6.25693 13.2075 7.90838ZM12.7258 12.1292C10.8922 11.6243 10.3566 11.5617 8.45024 11.5617C8.17013 11.5617 7.94673 11.5967 7.76686 11.6524C5.294 11.5255 2.76672 10.3433 2.7925 7.91699C2.81025 6.26554 3.95589 6.58894 3.95589 4.95529C3.95589 4.39638 4.91021 1.1917 5.11929 0.359943L5.10497 0.165216C5.10497 0.165216 4.30417 -0.419543 3.72333 2.0832C3.34985 3.69617 2.77474 3.18264 2.77474 2.17281C2.77474 1.0952 2.81025 0.647153 2.81025 0.647153C2.81025 0.647153 2.16583 0.503548 1.93327 1.9574C1.71617 3.3159 1.73622 3.69904 1.3782 3.69904C0.972075 3.69904 1.07404 3.01146 1.07404 1.79599C0.113991 1.76842 0 5.06271 0 6.75035C0 8.80562 0.417586 12.7938 5.47444 13.9622C5.5363 14.03 5.62795 14.0908 5.75569 14.1425L3.99313 15.3752C3.99313 15.3752 5.11643 16.0973 7.80581 16.0973C10.4952 16.0973 11.9685 15.3712 11.9685 15.3712L10.2214 14.1368C10.5198 14.0271 10.6384 13.8726 10.6333 13.6939C12.1283 13.8645 13.0397 13.7462 13.3278 13.7462C14.0272 13.7462 14.6069 14.3706 14.6069 14.3706L14.8091 14.3689C14.9237 13.1913 14.9346 12.7369 12.7258 12.1292Z" fill="#303133"/>
      </svg>
      <p>Караганда</p>
      <svg class="check-city" width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#303133" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </li>
  </ul>
  <button class="main-btn">Найти бутики</button>
</div>
