@extends('layouts.theme')

@section('title', 'Личный кабинет')

@section('content')
  <section id="profile">
      <h1>Здравствуйте, <span>Айжан Сулейманова</span></h1>
      <div class="type">
        <ul class="links">
          <li><a href="#">Мой аккаунт</a></li>
          <li><a href="#">Заказы</a></li>
          <li><a href="#">Избранное</a></li>
        </ul>
        <button class="btn">Выйти</button>
      </div>
      <div class="content">
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
            <div>
              <p class="place">Работа</p>
              <p class="location">Российская Федерация, Новосибирская область, Бердск, дом 17</p>
            </div>
            <div>
              <p class="place">Дом</p>
              <p class="location">Российская Федерация, Новосибирская область, Бердск, дом 17</p>
            </div>
            <div class="add" data-remodal-target="new_location">
              <p class="new-address">+ Добавить адрес</p>
            </div>
          </div>
        </div>
      </div>
  </section>
@endsection