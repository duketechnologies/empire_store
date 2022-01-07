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

<div class="remodal franchise-modal" data-remodal-id="franchise-modal" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
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