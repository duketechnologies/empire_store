@extends('layouts.theme')
@section('title', 'Корзина')

@section('content')
    <section id="basket">
        <h2 class="my-basket">Моя корзина<sup>(12)</sup></h2>
        <div class="orders">
            {{--              <h3>Вы еще не оформили ни одного заказа</h3>--}}
            {{--              <a href="#">Начать шопинг</a>--}}
            <div class="title">
                <p>Продукт</p>
                <p>Цвет</p>
                <p>Цена х 1</p>
                <p>Количество</p>
                <p>Сумма</p>
            </div>
            <div class="product">
                <div class="product__date">
                    <img src="/i/profile/product.png" alt=""/>
                    <div>
                        <p class="type">Статуэтка</p>
                        <p class="name">Сакские предания</p>
                        <p class="date">HRS01502S</p>
                    </div>
                </div>
                <div class="product__color">
                    <p>Золотой</p>
                </div>
                <div class="product__price">
                    <p>5 000 000	₸</p>
                </div>
                <div class="product__quantity">
                    <div class="quantity">
                        <p>-</p>
                        <span>1</span>
                        <p>+</p>
                    </div>

                </div>
                <div class="product__package">
                    <form method="POST" action="#">
                        <input type="checkbox" name="craft-package" id="craft1"/>
                        <label for="craft1">Крафт-пакет</label>
                    </form>
                </div>
                <div class="product__status">
                    <p class="in-process">10 000 000	₸</p>
                </div>
                <div class="product__delete">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 8L8 24" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 8L24 24" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="product">
                <div class="product__date">
                    <img src="/i/profile/product.png" alt=""/>
                    <div>
                        <p class="type">Статуэтка</p>
                        <p class="name">Сакские предания</p>
                        <p class="date">HRS01502S</p>
                    </div>
                </div>
                <div class="product__color">
                    <p>Золотой</p>
                </div>
                <div class="product__price">
                    <p>5 000 000	₸</p>
                </div>
                <div class="product__quantity">
                    <div class="quantity">
                        <p>-</p>
                        <span>1</span>
                        <p>+</p>
                    </div>

                </div>
                <div class="product__package">
                    <form method="POST" action="#">
                        <input type="checkbox" name="craft-package" id="craft2"/>
                        <label for="craft2">Крафт-пакет</label>
                    </form>
                </div>
                <div class="product__status">
                    <p class="in-process">10 000 000	₸</p>
                </div>
                <div class="product__delete">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 8L8 24" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 8L24 24" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="product">
                <div class="product__date">
                    <img src="/i/profile/product.png" alt=""/>
                    <div>
                        <p class="type">Статуэтка</p>
                        <p class="name">Сакские предания</p>
                        <p class="date">HRS01502S</p>
                    </div>
                </div>
                <div class="product__color">
                    <p>Золотой</p>
                </div>
                <div class="product__price">
                    <p>5 000 000	₸</p>
                </div>
                <div class="product__quantity">
                    <div class="quantity">
                        <p>-</p>
                        <span>1</span>
                        <p>+</p>
                    </div>

                </div>
                <div class="product__package">
                    <form method="POST" action="#">
                        <input type="checkbox" name="craft-package" id="craft3"/>
                        <label for="craft3">Крафт-пакет</label>
                    </form>
                </div>
                <div class="product__status">
                    <p class="in-process">10 000 000	₸</p>
                </div>
                <div class="product__delete">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 8L8 24" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 8L24 24" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="checkout">
                <div class="consultaion">
                    <h2>Нужна помощь с заказом?</h2>
                    <p>Оставьте свой номер для связи с консультантом.<br/>
                        Или поищите ответ на свой вопрос в <a href="/faq" class="move_to">разделе FAQ.</a></p>
                    <a href="#">Заказать консультацию</a>
                </div>
                <div class="sum">
                    <div class="count">
                        <span>13 товаров</span>
                        <p>150 000 000	₸</p>
                    </div>
                    <div class="delivery">
                        <span>Доставка</span>
                        <p>Бесплатно по Алматы</p>
                    </div>
                    <div class="total">
                        <span>Итого</span>
                        <p>150 000 000	₸</p>
                    </div>
                    <a href="#" class="main-btn">
                        Перейти к оформлению заказа
                        <span>
                            <svg viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 4L18 4" stroke="#212123" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.5786 0.933594L18.646 4.00099L15.5786 7.06839" stroke="#212123" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="faq">
            <div class="questions">
                <p>Faq</p>
                <svg  viewBox="0 0 61 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 18L60 18" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M43 1L60 18L43 35" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

            </div>
            <div class="answers"></div>
            <div class="questions">
                <p>Оплата</p>
                <svg viewBox="0 0 61 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 18L60 18" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M43 1L60 18L43 35" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

            </div>
            <div class="answers"></div>
            <div class="questions">
                <p>О доставке</p>
                <svg viewBox="0 0 61 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 18L60 18" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M43 1L60 18L43 35" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

            </div>
            <div class="answers"></div>
        </div>
    </section>
@endsection
