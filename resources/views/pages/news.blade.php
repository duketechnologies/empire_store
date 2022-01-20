@extends('layouts.theme')

@section('title', 'Новости')

@section('content')
  <section id="news">
    <div class="hero">
      <a href="#" class="title">
        <p>Главная новость</p>
        <p>Читать
            <svg viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L7 6.5L1 12" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </p>
      </a>
      <img src="/i/news/news_img.png" alt=""/>
    </div>
    <div class="cards">
      <a href="/single_news" class="card">
        <img src="/i/news/card_img.png"/>
        <p class="title">Заголовок новости</p>
        <p class="info">Не забудьте указать название издания и цель использования запрошенного материала</p>
        <p class="action">Читать
            <svg viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L7 6.5L1 12" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </p>
      </a>
      <a href="/single_news" class="card">
        <img src="/i/news/card_img.png"/>
        <p class="title">Заголовок новости</p>
        <p class="info">Не забудьте указать название издания и цель использования запрошенного материала</p>
        <p class="action">Читать
            <svg viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L7 6.5L1 12" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </p>
      </a>
      <a href="/single_news" class="card">
        <img src="/i/news/card_img.png"/>
        <p class="title">Заголовок новости</p>
        <p class="info">Не забудьте указать название издания и цель использования запрошенного материала</p>
        <p class="action">Читать
            <svg viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L7 6.5L1 12" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </p>
      </a>
      <a href="/single_news" class="card">
        <img src="/i/news/card_img.png"/>
        <p class="title">Заголовок новости</p>
        <p class="info">Не забудьте указать название издания и цель использования запрошенного материала</p>
        <p class="action">Читать
            <svg viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L7 6.5L1 12" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </p>
      </a>
      <a href="/single_news" class="card">
        <img src="/i/news/card_img.png"/>
        <p class="title">Заголовок новости</p>
        <p class="info">Не забудьте указать название издания и цель использования запрошенного материала</p>
        <p class="action">Читать
            <svg viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L7 6.5L1 12" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </p>
      </a>
      <a href="/single_news" class="card">
        <img src="/i/news/card_img.png"/>
        <p class="title">Заголовок новости</p>
        <p class="info">Не забудьте указать название издания и цель использования запрошенного материала</p>
        <p class="action">Читать
            <svg viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L7 6.5L1 12" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </p>
      </a>
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
