@extends('layouts.theme')
@section('title', 'Контакты')

@section('content')
  <section id="contacts">
  <div class="contact-card_list">
    <article class="contact-card_list-item">
      <div class="contact-card_list-info">
        <h1>Общие контакты</h1>
        <p>
          Бизнес-центр «Нурлы Тау»,<br/>
          пр. Аль-Фараби 5, корпус 2А, офис 702
        </p>
        <div class="contact-card_list-contacts">
          <a href="">8 (800) 555-35-35</a>
          <a href="">shop@empire.kz</a>
        </div>
        <div>
          <a href="" class="contact-card_list-action">Адреса бутиков</a>
        </div>
      </div>
      <div class="contact-card_list-image">
          <img src={{ url("/i/contacts/vector.png") }} alt="" />
      </div>
    </article>
    <article class="contact-card_list-item">
      <div class="contact-card_list-info">
        <h1>Общие контакты</h1>
        <p>
          Бизнес-центр «Нурлы Тау»,<br/>
          пр. Аль-Фараби 5, корпус 2А, офис 702
        </p>
        <div class="contact-card_list-contacts">
          <a href="">8 (800) 555-35-35</a>
          <a href="">shop@empire.kz</a>
        </div>
        <div>
          <a href="" class="contact-card_list-action">Адреса бутиков</a>
        </div>
      </div>
      <div class="contact-card_list-image">
        <img src={{ url("/i/contacts/vector.png") }} alt="" />
      </div>
    </article>
    <article class="contact-card_list-item">
      <div class="contact-card_list-info">
        <h1>Общие контакты</h1>
        <p>
          Бизнес-центр «Нурлы Тау»,<br/>
          пр. Аль-Фараби 5, корпус 2А, офис 702
        </p>
        <div class="contact-card_list-contacts">
          <a href="">8 (800) 555-35-35</a>
          <a href="">shop@empire.kz</a>
        </div>
        <div>
          <a href="" class="contact-card_list-action">Адреса бутиков</a>
        </div>
      </div>
      <div class="contact-card_list-image">
          <img src={{ url("/i/contacts/vector.png") }} alt="" />
      </div>
    </article>
    <article class="contact-card_list-item">
      <div class="contact-card_list-info">
        <h1>Общие контакты</h1>
        <p>
          Бизнес-центр «Нурлы Тау»,<br/>
          пр. Аль-Фараби 5, корпус 2А, офис 702
        </p>
        <div class="contact-card_list-contacts">
          <a href="">8 (800) 555-35-35</a>
          <a href="">shop@empire.kz</a>
        </div>
        <div>
          <a href="" class="contact-card_list-action">Адреса бутиков</a>
        </div>
      </div>
      <div class="contact-card_list-image">
          <img src={{ url("/i/contacts/vector.png") }} alt="" />
      </div>
       </article>
       </div>
      @include('partials.consultation')
  </section>

@endsection
