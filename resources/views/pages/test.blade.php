@extends('layouts.theme')

@section('title', 'Тест')

@section('content')
    <section id="test">
        <div class="links">
            <h2 class="title">Статичные страницы</h2>
            <a href="/faq" target="_blank">FAQ</a>
            <a href="/partnership" target="_blank">ПАРТНЕРСТВО</a>
            <a href="/vacancies" target="_blank">ВАКАНСИИ</a>
            <a href="/address" target="_blank">АДРЕСА БУТИКОВ</a>
            <a href="/contacts" target="_blank">КОНТАКТЫ</a>
            <a href="/about" target="_blank">О КОМПАНИИ</a>
            <a href="/policy" target="_blank">Политика сайта</a>
            <a href="/franchise" target="_blank">ФРАНШИЗА</a>
            <a href="/news" target="_blank">НОВОСТИ</a>
            <a href="/single_news" target="_blank">НОВОСТИ (СТРАНИЦА НОВОСТИ)</a>
        </div>

        <div class="links">
            <h2 class="title" >Остальные страницы</h2>
            <a href="/" target="_blank">Главная</a>
            <a href="/filters" target="_blank">КАТАЛОГ И ФИЛЬТРЫ</a>
            <a href="/item" target="_blank">КАРТОЧКА ТОВАРА</a>
            <a href="/basket" target="_blank">КОРЗИНА</a>
            <a href="/profile" target="_blank">ЛИЧНЫЙ КАБИНЕТ</a>
            <a href="/ordering" target="_blank">ОФОРМЛЕНИЕ ЗАКАЗА</a>
        </div>

        <div class="links">
            <h2 class="title">Попапы</h2>
            <a href="#" data-remodal-target="cookie">Локации куки - 1</a>
            <a href="#" data-remodal-target="cookie-change-location">Локации куки - 2</a>
            <a href="#" data-remodal-target="cookie-location">Локации куки - 3</a>
            <a href="#" data-remodal-target="login">Авторизация : вход по тел. или почта</a>
            <a href="#" data-remodal-target="login-email">Авторизация : забыли пароль </a>
            <a href="#" data-remodal-target="login-phone">Авторизация : Смс с телефона </a>
            <a href="#" data-remodal-target="register-email">Авторизация : Регистрация по почте</a>
            <a href="#" data-remodal-target="Added-to-basket">Карточка товара: Добавлено в корзину</a>
            <a href="#" data-remodal-target="Added-to-favorites">Карточка товара: Добавлено в избранное</a>
            <a href="#" data-remodal-target="Zoom-popup">Карточка товара: Попап при нажатии на картинку</a>
            <a href="#" data-remodal-target="change_location">Личный кабинет : Изменить адрес </a>
            <a href="#" data-remodal-target="new_location">Личный кабинет : Добавить адрес </a>
            <a href="#" data-remodal-target="profile-order">Личный кабинет : ЛК открытый заказ </a>
            <a href="#" data-remodal-target="feedback">Обратная связь</a>
            <a href="#" data-remodal-target="comment">Оставить отзыв</a>
            <a href="#" data-remodal-target="payment">Купить в рассрочку</a>
            <a href="#" data-remodal-target="franchise-modal">Франшиза: Заявка</a>
            <a href="#" data-remodal-target="mail_to">Партнерства: Заявка</a>
            <a href="#" data-remodal-target="quiz">Квиз <span>Нету логики</span></a>
            <a href="#" data-remodal-target="edit-order">Оформление заказа: текущий заказ</a>
            <a href="#" data-remodal-target="access-order">Оформление заказа: Успешное оформление</a>
            <a href="#" data-remodal-target="failed-order">Оформление заказа: Ошибка в оформлении</a>
        </div>
    </section>
@endsection
