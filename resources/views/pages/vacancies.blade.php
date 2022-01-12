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
            <li>Дизайн</li>
            <li>Менеджмент</li>
            <li>Администрирование</li>
            <li>Консультация</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="faq">
        <div class="questions">
          <p>Как узнать есть ли изделие в бутике?</p>
          <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M33.9426 22.6262L11.3152 22.6262" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M22.6289 11.3152L22.6289 33.9426" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="answers">
        </div>
        <div class="questions">
          <p>Сколько коллекций выходит каждый год?</p>
          <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M33.9426 22.6262L11.3152 22.6262" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M22.6289 11.3152L22.6289 33.9426" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="answers">
        </div>
        <div class="questions">
          <p>Где производят изделия Empire?</p>
          <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M33.9426 22.6262L11.3152 22.6262" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M22.6289 11.3152L22.6289 33.9426" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="answers">
        </div>
        <div class="questions">
          <p>Сколько коллекций выходит каждый год?</p>
          <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M33.9426 22.6262L11.3152 22.6262" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M22.6289 11.3152L22.6289 33.9426" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="answers">
        </div>
        <div class="questions">
          <p>Где производят изделия Empire?</p>
          <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M33.9426 22.6262L11.3152 22.6262" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M22.6289 11.3152L22.6289 33.9426" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="answers">
        </div>
        <div class="questions">
          <p>Где производят изделия Empire?</p>
          <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M33.9426 22.6262L11.3152 22.6262" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M22.6289 11.3152L22.6289 33.9426" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="answers">
        </div>
        <div class="questions">
          <p>Сколько коллекций выходит каждый год?</p>
          <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M33.9426 22.6262L11.3152 22.6262" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M22.6289 11.3152L22.6289 33.9426" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="answers">
        </div>
        <div class="questions">
          <p>Где производят изделия Empire?</p>
          <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M33.9426 22.6262L11.3152 22.6262" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M22.6289 11.3152L22.6289 33.9426" stroke="#505154" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="answers">
        </div>
      </div>
    </div>
    </div>
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
          </div>
      </div>
  </section>
@endsection
