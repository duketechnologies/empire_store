@extends('layouts.theme')

@section('title', 'Новости')

@section('content')
  <section id="news">
    <div class="hero">
      <a href="#" class="title">
        <p>Главная новость</p>
        <p>Читать</p>
      </a>
      <img src="/i/news/news_img.png" alt=""/>
    </div>
    <div class="cards">
      <a href="#" class="card">
        <img src="/i/news/card_img.png"/>
        <p class="title">Заголовок новости</p>
        <p class="info">Не забудьте указать название издания и цель использования запрошенного материала</p>
        <p class="action">Читать</p>
      </a>
      <a href="#" class="card">
        <img src="/i/news/card_img.png"/>
        <p class="title">Заголовок новости</p>
        <p class="info">Не забудьте указать название издания и цель использования запрошенного материала</p>
        <p class="action">Читать</p>
      </a>
      <a href="#" class="card">
        <img src="/i/news/card_img.png"/>
        <p class="title">Заголовок новости</p>
        <p class="info">Не забудьте указать название издания и цель использования запрошенного материала</p>
        <p class="action">Читать</p>
      </a>
      <a href="#" class="card">
        <img src="/i/news/card_img.png"/>
        <p class="title">Заголовок новости</p>
        <p class="info">Не забудьте указать название издания и цель использования запрошенного материала</p>
        <p class="action">Читать</p>
      </a>
      <a href="#" class="card">
        <img src="/i/news/card_img.png"/>
        <p class="title">Заголовок новости</p>
        <p class="info">Не забудьте указать название издания и цель использования запрошенного материала</p>
        <p class="action">Читать</p>
      </a>
      <a href="#" class="card">
        <img src="/i/news/card_img.png"/>
        <p class="title">Заголовок новости</p>
        <p class="info">Не забудьте указать название издания и цель использования запрошенного материала</p>
        <p class="action">Читать</p>
      </a>
    </div>
    <div class="route">
      <a href="#" class="toStart">Вернуться в начало</a>
      <a href="#" class="secondary-btn">Показать больше</a>
      <div class="pagination">
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>5</span>
        <span>
          <svg viewBox="0 0 31 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 9.35547L30 9.35547" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M21.6445 17.7109L30.0005 9.35501L21.6445 0.999073" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </span>
      </div>
    </div>
    <div class="consultaion">
      <div class="call">
        <h1>Нужна помощь ?</h1>
        <p>Оставьте свой номер для связи с консультантом.<br/>Или поищите ответ на свой вопрос в <a href="#">разделе FAQ.</a></p>
        <form method="POST" action="#">
          <input type="tel" name="phone" placeholder="Номер телефона"/>
          <button type="submit" class="main-btn">Заказать консультацию</button>
        </form>
      </div>
    </div>
  </section>
@endsection