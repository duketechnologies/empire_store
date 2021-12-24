@extends('layouts.theme')
@section('title', 'FAQ')

@section('content')
    <section id="faq">
        <div class="container">
            <h1>FAQ</h1>
            <div class="type">
                <ul class="links">
                    <li><a href="#">Все вопросы </a></li>
                    <li><a href="#">Изделия</a></li>
                    <li><a href="#">Заказы</a></li>
                    <li><a href="#">Юридическим лицам</a></li>
                </ul>
                <input type="text" name="search" placeholder="Поиск"/>
            </div>
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
        <div class="consultaion">
            <div class="call">
                <h1>Не нашли ответ на вопрос?</h1>
                <p>Наш консультант свяжется с вами</p>
                <form method="POST" action="#">
                    <input type="tel" name="phone" placeholder="Номер телефона"/>
                    <button type="submit" class="main-btn">Заказать консультацию</button>
                </form>
            </div>
        </div>
    </section>
@endsection
