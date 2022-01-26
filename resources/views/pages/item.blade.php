@extends('layouts.theme')
@section('title', 'Изделие')

@section('content')
    <section id="item">
        <div class="content">
            <div class="thumbnails">
                <img src="/i/item/item-1.png" alt=""/>
                <img src="/i/item/item-1.png" alt=""/>
                <img src="/i/item/item-3.png" alt=""/>
            </div>

            <div class="wrapper">
                <div class="swiper-product">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div id="img-container">
                                <div class="large-img" data-remodal-target="Zoom-popup" style="background-image: url('/i/item/item-large.png')"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div id="img-container">
                                <div class="large-img" data-remodal-target="Zoom-popup" style="background-image: url('/i/item/item-large.png')"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div id="img-container">
                                <div class="large-img" data-remodal-target="Zoom-popup" style="background-image: url('/i/item/item-large.png')"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div id="img-container">
                                <div class="large-img" data-remodal-target="Zoom-popup" style="background-image: url('/i/item/item-large.png')"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev">
                    <svg class="large-prev-btn" width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.8135 1L0.999917 12.8136L12.8135 24.6271" stroke="#939393" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="swiper-button-next">
                    <svg class="large-next-btn" width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.8135 1L0.999917 12.8136L12.8135 24.6271" stroke="#939393" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>


{{--            <div class="large-img" style="background-image: url('/i/item/item-large.png')"></div>--}}



            <div class="offer">
                <div class="offer__description">
                    <p class="event">Новинка</p>
                    <p class="name">Статуэтка “Күйші ару”</p>
                    <p class="price">4 350 ₸</p>
                    <ul>
                        <li>Металл с покрытием серебряного цвета</li>
                        <li>Цветная эмаль</li>
                        <li>Хрустальное стекло</li>
                    </ul>
                    <form method="POST" action="#">
                        <div class="checkboxes">
                            <div>
                                <input type="checkbox" name="gold" id="gold">
                                <label for="gold">Золотой</label>
                            </div>
                            <div>
                                <input type="checkbox" name="black" id="black">
                                <label for="black">Черный</label>
                            </div>
                            <div>
                                <input type="checkbox" name="grey" id="grey">
                                <label for="grey">Серый</label>
                            </div>
                        </div>

                        <div class="buttons">
                            <div>
                                <button class="favorites">
                                    <svg viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.9765 4.91753C13.9324 4.79319 13.8521 4.68398 13.7454 4.60314C13.6387 4.5223 13.5101 4.4733 13.3753 4.46208L9.39775 3.89788L7.61518 0.383465C7.55793 0.268536 7.46856 0.171609 7.35729 0.10379C7.24602 0.03597 7.11735 0 6.98603 0C6.85471 0 6.72605 0.03597 6.61478 0.10379C6.5035 0.171609 6.41413 0.268536 6.35689 0.383465L4.57432 3.89108L0.596729 4.46208C0.46735 4.47997 0.345717 4.53276 0.245632 4.61446C0.145546 4.69617 0.0710161 4.80352 0.0304993 4.92433C-0.00658871 5.04239 -0.00991692 5.16804 0.0208719 5.2878C0.0516606 5.40756 0.115404 5.5169 0.205261 5.6041L3.09233 8.32318L2.39328 12.1843C2.36833 12.3117 2.38139 12.4434 2.43094 12.5639C2.48049 12.6843 2.56445 12.7885 2.6729 12.864C2.77861 12.9375 2.90329 12.9809 3.03295 12.9893C3.1626 12.9977 3.2921 12.9708 3.4069 12.9116L6.98603 11.0966L10.5512 12.9184C10.6493 12.9722 10.7601 13.0004 10.8727 13C11.0208 13.0005 11.1652 12.9553 11.2852 12.8708C11.3936 12.7953 11.4776 12.6911 11.5271 12.5707C11.5767 12.4502 11.5898 12.3185 11.5648 12.1911L10.8658 8.32998L13.7528 5.6109C13.8538 5.52775 13.9283 5.41846 13.9679 5.29572C14.0075 5.17299 14.0105 5.04184 13.9765 4.91753ZM9.67737 7.63661C9.59539 7.71372 9.53405 7.80916 9.49872 7.91462C9.46338 8.02007 9.45512 8.13233 9.47464 8.24161L9.97796 11.0898L7.34954 9.7303C7.2484 9.67793 7.13557 9.65054 7.02098 9.65054C6.9064 9.65054 6.79357 9.67793 6.69243 9.7303L4.06401 11.0898L4.56732 8.24161C4.58685 8.13233 4.57859 8.02007 4.54325 7.91462C4.50792 7.80916 4.44658 7.71372 4.3646 7.63661L2.26745 5.5973L5.21045 5.18264C5.32369 5.16732 5.43135 5.12523 5.52397 5.06005C5.6166 4.99486 5.69137 4.90858 5.74173 4.80877L6.98603 2.21884L8.30024 4.81557C8.3506 4.91538 8.42537 5.00166 8.518 5.06684C8.61062 5.13203 8.71828 5.17412 8.83152 5.18944L11.7745 5.6041L9.67737 7.63661Z" fill="white"/>
                                    </svg>
                                </button>
                                <button class="main-btn">Добавить в корзину</button>
                            </div>
                            <button class="primary-btn">Купить в рассрочку</button>
                        </div>
                    </form>
                </div>
                <div class="offer__delivery">
                    <p><b>Доставка: 7 000 ₸ </b></p>
                    <p>До Петропавловска за <b>18 дней</b></p>
                </div>
                <p class="serial-number">арт. E0738828</p>
            </div>
            <div class="item-breadcrumbs">
                <a href="#">Главная</a>
                <a href="#">Декор</a>
                <a href="#">Ваза Тұлпар</a>
            </div>
        </div>
        <div class="info">
{{--            <div class="links">--}}
{{--                <a href="/">Главная </a> •--}}
{{--                <a href="/">Декор</a> •--}}
{{--                <a href="/">Ваза Тұлпар</a>--}}
{{--            </div>--}}
            <p class="description">Изящная и грациозная статуэтка девушки в национальном костюме отличается стилем,
                в котором традиции и классика сочетаются с современным дизайном, искусно сливаясь в единое целое.
                Плавность линий, формы непревзойденной красоты и тончайшая проработка каждого элемента позволят
                сделать серию статуэток идеальным украшением любого интерьера.</p>
            <div class="size">
                <p>
                    <svg  viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.55 2.7C8.66935 2.7 8.78381 2.65259 8.8682 2.5682C8.95259 2.48381 9 2.36935 9 2.25V0.45C8.99929 0.391195 8.98706 0.3331 8.964 0.279C8.91834 0.169043 8.83096 0.0816637 8.721 0.036C8.6669 0.0129415 8.6088 0.000710994 8.55 0H6.75C6.63065 0 6.51619 0.0474106 6.4318 0.131802C6.34741 0.216193 6.3 0.330653 6.3 0.45C6.3 0.569347 6.34741 0.683807 6.4318 0.768198C6.51619 0.852589 6.63065 0.9 6.75 0.9H7.4655L4.5 3.8655L1.5345 0.9H2.25C2.36935 0.9 2.48381 0.852589 2.5682 0.768198C2.65259 0.683807 2.7 0.569347 2.7 0.45C2.7 0.330653 2.65259 0.216193 2.5682 0.131802C2.48381 0.0474106 2.36935 0 2.25 0H0.45C0.391195 0.000710994 0.3331 0.0129415 0.279 0.036C0.169043 0.0816637 0.0816637 0.169043 0.036 0.279C0.0129415 0.3331 0.000710994 0.391195 0 0.45V2.25C0 2.36935 0.0474106 2.48381 0.131802 2.5682C0.216193 2.65259 0.330653 2.7 0.45 2.7C0.569347 2.7 0.683807 2.65259 0.768198 2.5682C0.852589 2.48381 0.9 2.36935 0.9 2.25V1.5345L3.8655 4.5L0.9 7.4655V6.75C0.9 6.63065 0.852589 6.51619 0.768198 6.4318C0.683807 6.34741 0.569347 6.3 0.45 6.3C0.330653 6.3 0.216193 6.34741 0.131802 6.4318C0.0474106 6.51619 0 6.63065 0 6.75V8.55C0.000710994 8.6088 0.0129415 8.6669 0.036 8.721C0.0816637 8.83096 0.169043 8.91834 0.279 8.964C0.3331 8.98706 0.391195 8.99929 0.45 9H2.25C2.36935 9 2.48381 8.95259 2.5682 8.8682C2.65259 8.78381 2.7 8.66935 2.7 8.55C2.7 8.43065 2.65259 8.31619 2.5682 8.2318C2.48381 8.14741 2.36935 8.1 2.25 8.1H1.5345L4.5 5.1345L7.4655 8.1H6.75C6.63065 8.1 6.51619 8.14741 6.4318 8.2318C6.34741 8.31619 6.3 8.43065 6.3 8.55C6.3 8.66935 6.34741 8.78381 6.4318 8.8682C6.51619 8.95259 6.63065 9 6.75 9H8.55C8.6088 8.99929 8.6669 8.98706 8.721 8.964C8.83096 8.91834 8.91834 8.83096 8.964 8.721C8.98706 8.6669 8.99929 8.6088 9 8.55V6.75C9 6.63065 8.95259 6.51619 8.8682 6.4318C8.78381 6.34741 8.66935 6.3 8.55 6.3C8.43065 6.3 8.31619 6.34741 8.2318 6.4318C8.14741 6.51619 8.1 6.63065 8.1 6.75V7.4655L5.1345 4.5L8.1 1.5345V2.25C8.1 2.36935 8.14741 2.48381 8.2318 2.5682C8.31619 2.65259 8.43065 2.7 8.55 2.7Z" fill="#505154"/>
                    </svg>
                    Размеры
                </p>
                <p>250х250 мм. 11.5 кг</p>
            </div>
            <div class="material">
                <p>
                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.3597 2.92599C9.91405 2.09244 9.26338 1.38637 8.46918 0.87449C7.75045 0.411763 6.93379 0.123158 6.08409 0.0316042C5.23439 -0.0599496 4.37506 0.0480711 3.57438 0.347084C2.7737 0.646096 2.05374 1.12786 1.47169 1.7541C0.889633 2.38034 0.461536 3.1338 0.221407 3.95461C-0.0187225 4.77542 -0.0642662 5.64096 0.088394 6.48247C0.241054 7.32398 0.587711 8.11827 1.10082 8.80222C1.61393 9.48618 2.27936 10.0409 3.04423 10.4225C3.8091 10.804 4.65234 11.0017 5.50695 11H5.66633C6.60009 10.9724 7.51143 10.7071 8.31425 10.2291C9.11708 9.75106 9.7849 9.07613 10.2546 8.26803C10.7244 7.45994 10.9805 6.54535 10.9989 5.61064C11.0173 4.67593 10.7973 3.75196 10.3597 2.92599ZM4.95737 9.86149C3.90116 9.72073 2.93197 9.2009 2.23001 8.39865C1.52805 7.59641 1.14109 6.56634 1.14109 5.49999C1.14109 4.43364 1.52805 3.40357 2.23001 2.60132C2.93197 1.79908 3.90116 1.27925 4.95737 1.13849V9.86149ZM6.05653 1.13849C6.53165 1.19931 6.99378 1.33676 7.42498 1.54549L6.05653 3.91599V1.13849ZM6.05653 6.08849L8.34827 2.14499C8.68617 2.43536 8.97884 2.7746 9.21661 3.15149L6.05653 8.62949V6.08849ZM6.68855 9.70749L9.76069 4.39999C9.85359 4.75933 9.90158 5.12882 9.90358 5.49999C9.9029 6.46029 9.58831 7.394 9.00782 8.15865C8.42733 8.92331 7.61281 9.47691 6.68855 9.73499V9.70749Z" fill="#505154"/>
                    </svg>
                    Материал
                </p>
                <ul>
                    <li>Металл с покрытием серебряного цвета</li>
                    <li>Цветная эмаль</li>
                    <li>Хрустальное стекло</li>
                </ul>
            </div>
            <div class="existence">
                <div class="questions">
                    <p>
                        <svg viewBox="0 0 9 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.0215 0C1.80403 0 0 1.83644 0 4.09375C0 5.35639 0.638603 6.88894 1.89813 8.64881C2.81985 9.93676 3.72813 10.8553 3.76635 10.8938C3.8366 10.9645 3.92903 11 4.02156 11C4.11141 11 4.20132 10.9665 4.27102 10.8994C4.30932 10.8625 5.2199 9.98114 6.14336 8.71099C7.4039 6.97717 8.04304 5.42372 8.04304 4.09373C8.04299 1.83645 6.23893 0 4.0215 0ZM4.0215 5.86108C2.93739 5.86108 2.05544 4.9791 2.05544 3.89502C2.05544 2.81094 2.93741 1.92896 4.0215 1.92896C5.10558 1.92896 5.98756 2.81094 5.98756 3.89502C5.98756 4.9791 5.10556 5.86108 4.0215 5.86108Z" fill="#505154"/>
                        </svg>
                        Наличие по городам</p>
                    <svg class="rotate" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 8H15" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path id="vertical" d="M8 15L8 1" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="answers">
                    <ul id="item-location">
                        <li>Алматы<span>Нет в наличии</span></li>
                        <li>Атырау<span>Нет в наличии</span></li>
                        <li>Нур-Султан<span>Доставка 7 000 ₸</span></li>
                        <li>Актау<span>Нет в наличии</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="similar">

            <h3>Похожие товары</h3>

            <div class="wrapper">
                <div class="swiper-item">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="single">
                                <div class="single-image">
                                    <img src="/i/item/single-1.png" alt=""/>
                                </div>
                                <p>Картина «Сакские предания»</p>
                                <div class="single-breadcrumbs">
                                    <a href="#">Полистоун</a>
                                    <a href="#">Ручная роспись</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single">
                                <div class="single-image">
                                    <img src="/i/item/single-2.png" alt=""/>
                                </div>
                                <p>Картина «Сакские предания»</p>
                                <div class="single-breadcrumbs">
                                    <a href="#">Полистоун</a>
                                    <a href="#">Ручная роспись</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single">
                                <div class="single-image">
                                    <img src="/i/item/single-3.png" alt=""/>
                                </div>
                                <p>Картина «Сакские предания»</p>
                                <div class="single-breadcrumbs">
                                    <a href="#">Полистоун</a>
                                    <a href="#">Ручная роспись</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single">
                                <div class="single-image">
                                    <img src="/i/item/single-4.png" alt=""/>
                                </div>
                                <p>Картина «Сакские предания»</p>
                                <div class="single-breadcrumbs">
                                    <a href="#">Полистоун</a>
                                    <a href="#">Ручная роспись</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single">
                                <div class="single-image">
                                    <img src="/i/item/single-1.png" alt=""/>
                                </div>
                                <p>Картина «Сакские предания»</p>
                                <div class="single-breadcrumbs">
                                    <a href="#">Полистоун</a>
                                    <a href="#">Ручная роспись</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single">
                                <div class="single-image">
                                    <img src="/i/item/single-1.png" alt=""/>
                                </div>
                                <p>Картина «Сакские предания»</p>
                                <div class="single-breadcrumbs">
                                    <a href="#">Полистоун</a>
                                    <a href="#">Ручная роспись</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single">
                                <div class="single-image">
                                    <img src="/i/item/single-1.png" alt=""/>
                                </div>
                                <p>Картина «Сакские предания»</p>
                                <div class="single-breadcrumbs">
                                    <a href="#">Полистоун</a>
                                    <a href="#">Ручная роспись</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single">
                                <div class="single-image">
                                    <img src="/i/item/single-1.png" alt=""/>
                                </div>
                                <p>Картина «Сакские предания»</p>
                                <div class="single-breadcrumbs">
                                    <a href="#">Полистоун</a>
                                    <a href="#">Ручная роспись</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev">
                    <svg class="similar-prev-btn" width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.8135 1L0.999917 12.8136L12.8135 24.6271" stroke="#939393" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="swiper-button-next">
                    <svg class="similar-next-btn" width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.8135 1L0.999917 12.8136L12.8135 24.6271" stroke="#939393" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>

{{--            <div class="single">--}}
{{--                <div class="single-image">--}}
{{--                    <img src="/i/item/single-1.png" alt=""/>--}}
{{--                </div>--}}
{{--                <p>Картина «Сакские предания»</p>--}}
{{--                <div class="single-breadcrumbs">--}}
{{--                    <a href="#">Полистоун</a>--}}
{{--                    <a href="#">Ручная роспись</a>--}}
{{--                </div>--}}
{{--            </div>--}}

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
        <div class="faq">
            <a href="/faq" class="questions">
                <p>Faq</p>
                <svg  viewBox="0 0 61 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 18L60 18" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M43 1L60 18L43 35" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

            </a>
            <a href="#" class="questions">
                <p>Оплата</p>
                <svg viewBox="0 0 61 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 18L60 18" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M43 1L60 18L43 35" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

            </a>
            <a href="#" class="questions">
                <p>О доставке</p>
                <svg viewBox="0 0 61 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 18L60 18" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M43 1L60 18L43 35" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </section>
@endsection
