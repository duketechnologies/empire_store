@extends('layouts.theme')
@section('title', 'О нас')

@section('content')
  <section id="about">
    <div class="main_img">
      <img src="/i/about/about_img.png" alt=""/>
    </div>
    <div class="collections">
      <div class="description">
        <h2>Внимание <br/>к деталям</h2>
        <p><span>Каждая коллекция </span>- это плод <br/>совместной работы <br/>талантливых дизайнеров и <br/>целой группы исследователей, <br/>историков и художников.</p>
        <a href="#">Новые коллекции</a>
      </div>
      <div class="horses">
        <img src="/i/horses.png" alt=""/>
      </div>
    </div>

    <div class="brand">
      <img src="/i/pony.png" alt=""/>
      <div class="info">
        <h2>Развитие бренда</h2>
        <p>В 2010 году команда Empire запустила свой первый международный проект,<br/> с целью создания уникальной коллекции в арабском стиле.<br/><br/>
          Расширив географию своего присутствия, компания стала создавать единственные<br/> 
          в своем роде коллекции сувениров для большинства стран Ближнего Востока,<br/> России, Китая и Гонконга. Среди партнеров бренда такие известные торговые марки<br/> как Reuge, Montegrappa, Alfredo Beretta, Boegli, Tardini, Zancan и многие другие.
        </p>
        <div class="brands">
          <img src="/i/about/brands/1.png" alt=""/>
          <img src="/i/about/brands/2.png" alt=""/>
          <img src="/i/about/brands/3.png" alt=""/>
        </div>
         <div class="brands">
          <img src="/i/about/brands/4.png" alt=""/>
          <img src="/i/about/brands/5.png" alt=""/>
          <img src="/i/about/brands/6.png" alt=""/>
        </div>
      </div>
    </div>

    <div class="partners">
      <a href="#" class="card card-1">
        <img src="/i/about/partnership/partners1.png" alt=""/>
        <div class="content">
          <h3>Партнерство</h3>
          <p>Узнайте больше об особых условиях<br/> для корпоративных клиентов</p>
        </div>
      </a>
      <a href="#" class="card card-2">
        <img src="/i/about/partnership/partners3.png" alt=""/>
        <div class="content">
          <h3>Посетите один из наших <br/>фирменных магазинов</h3>
          {{-- <a href="#">Адреса бутиков</a>
          <a href="#">Контакты</a> --}}
        </div>
      </a>
      <a href="#" class="card card-2">
        <img src="/i/about/partnership/partners2.png" alt=""/>
        <div class="content">
           <h3>Мы открыты <br/>к сотрудничеству</h3>
        {{-- <a href="#">Партнерство</a>
        <a href="#">Вакансии</a> --}}
        </div>
        
      </a>
    </div>
  </section>

@endsection