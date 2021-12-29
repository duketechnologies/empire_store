@extends('layouts.theme')
@section('title', 'Контакты')

@section('content')
  <section id="contacts">
    <div class="blocks">
      <div class="info">

      </div>
      <div class="info">
        
      </div>
      <div class="info">
        
      </div>
      <div class="info">
        
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