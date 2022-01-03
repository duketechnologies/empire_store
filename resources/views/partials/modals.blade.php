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
