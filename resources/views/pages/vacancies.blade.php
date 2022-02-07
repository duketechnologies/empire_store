@extends('layouts.theme')
@section('title', 'Вакансии')

@section('content')
  <section id="vacancies">
    <div class="main-img"></div>
    <div class="description">
      <div class="info">
        <h3>Вакансии Empire</h3>
        <p>Наш бренд растет и развивается, а вместе с ним и наша команда. Отправьте свое резюме, чтобы пополнить ряды специалистов Empire</p>
        <a href="#" class="main-btn">ОТПРАВИТЬ РЕЗЮМЕ</a>
      </div>
      <div class="actual">
        <p>Актуальные Вакансии:<p>
        <div class="list">
          <ul>
            <li>Дизайн</li>
            <li>Менеджмент</li>
            <li>Администрирование</li>
            <li>Консультация</li>
          </ul>
          <ul>
            <li>Маркетинг</li>
            <li>Реклама</li>
            <li>Безопасность</li>
            <li>Страхование</li>
          </ul>
        </div>
      </div>
    </div>
      <h2 class="title">40 актуальных вакансий:</h2>
      <div class="faq">
        <div class="questions">
          <p>Копирайтер / Графический дизайнер</p>
          <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M33.9426 22.6262L11.3152 22.6262" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
            <path id="vertical"  d="M22.6289 11.3152L22.6289 33.9426" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="answers">
            <p>Due to Covid-19, many of our shipping carriers are experiencing delays in delivering orders. Please expect that after your order has shipped,
                it might experience carrier delays and may take longer than usual to receive.<br/><br/>
                The health and safety of our customers and teams is our #1 priority and we appreciate your p
                atience and understanding as we work to ship your order. If anything about your experience is not
                what you expected, please let us know at 1-888-494-3837
            </p>
            <div class="buttons">
                <a href="#" class="main-btn">Отправить резюме</a>
                <a href="tel:+77772189291" class="link-btn">+7 777 218 92 91</a>
            </div>
        </div>
      </div>
      <div class="faq">
          <div class="questions">
              <p>Фотограф-дизайнер</p>
              <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M33.9426 22.6262L11.3152 22.6262" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
                  <path id="vertical" d="M22.6289 11.3152L22.6289 33.9426" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
          </div>
          <div class="answers">
              <p>Due to Covid-19, many of our shipping carriers are experiencing delays in delivering orders. Please expect that after your order has shipped,
                  it might experience carrier delays and may take longer than usual to receive.<br/><br/>
                  The health and safety of our customers and teams is our #1 priority and we appreciate your p
                  atience and understanding as we work to ship your order. If anything about your experience is not
                  what you expected, please let us know at 1-888-494-3837
              </p>
              <div class="buttons">
                  <a href="#" class="main-btn">Отправить резюме</a>
                  <a href="tel:+77772189291" class="link-btn">+7 777 218 92 91</a>
              </div>
          </div>
      </div>
      <div class="faq">
          <div class="questions">
              <p>Дизайнер/визуализатор интерьера</p>
              <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M33.9426 22.6262L11.3152 22.6262" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
                  <path id="vertical" d="M22.6289 11.3152L22.6289 33.9426" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
          </div>
          <div class="answers">
              <p>Due to Covid-19, many of our shipping carriers are experiencing delays in delivering orders. Please expect that after your order has shipped,
                  it might experience carrier delays and may take longer than usual to receive.<br/><br/>
                  The health and safety of our customers and teams is our #1 priority and we appreciate your p
                  atience and understanding as we work to ship your order. If anything about your experience is not
                  what you expected, please let us know at 1-888-494-3837
              </p>
              <div class="buttons">
                  <a href="#" class="main-btn">Отправить резюме</a>
                  <a href="tel:+77772189291" class="link-btn">+7 777 218 92 91</a>
              </div>
          </div>
      </div>
      <div class="faq">
          <div class="questions">
              <p>SMM-дизайнер / графический-дизайнер</p>
              <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M33.9426 22.6262L11.3152 22.6262" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
                  <path id="vertical"  d="M22.6289 11.3152L22.6289 33.9426" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
          </div>
          <div class="answers">
              <p>Due to Covid-19, many of our shipping carriers are experiencing delays in delivering orders. Please expect that after your order has shipped,
                  it might experience carrier delays and may take longer than usual to receive.<br/><br/>
                  The health and safety of our customers and teams is our #1 priority and we appreciate your p
                  atience and understanding as we work to ship your order. If anything about your experience is not
                  what you expected, please let us know at 1-888-494-3837
              </p>
              <div class="buttons">
                  <a href="#" class="main-btn">Отправить резюме</a>
                  <a href="tel:+77772189291" class="link-btn">+7 777 218 92 91</a>
              </div>
          </div>
      </div>
      <div class="top"></div>
    </div>
      @include('partials.consultation')
  </section>
@endsection
