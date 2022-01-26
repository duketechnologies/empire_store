@extends('layouts.theme')
@section('title', 'Оформление заказа')

@section('content')
    <section id="ordering">
        <h3>Оформление заказа</h3>
        <form class="content" method="POST" action="#">
            <div class="left_side">
                <div class="email">
                    <p class="title">
                        <svg viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2"
                                  stroke-linecap="round"/>
                        </svg>
                        Email
                    </p>
                    <div>
                        <p class="description">Вы совершаете заказ от лица Айгуль Сатпаева, <span>mail@mail.com</span></p>
                        <a href="#" class="link-btn">Изменить</a>
                    </div>
                </div>
                <div class="profile-info">
                    <div>
                        <p class="title">
                            <svg viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2"
                                      stroke-linecap="round"/>
                            </svg>
                            Контакты
                        </p>
                        <div class="form">
                            <div class="user">
                                <fieldset>
                                    <legend>Имя</legend>
                                    <input type="text" name="name" value="Айжан"/>
                                </fieldset>
                                <fieldset>
                                    <legend>Телефон</legend>
                                    <input type="tel" name="phone" value="+7 (718) 878 38 28"/>
                                </fieldset>
                                <fieldset>
                                    <legend>Фамилия</legend>
                                    <input type="text" name="surname" value="Сулейменова"/>
                                </fieldset>
                                <fieldset>
                                    <legend>Email</legend>
                                    <input type="email" name="email" value="Mail@mail.com"/>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="another ">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6L6 18" stroke="#303133" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6 6L18 18" stroke="#303133" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <p class="title">Получатель заказа</p>
                        <fieldset>
                            <legend>Имя получателя</legend>
                            <input type="text" name="name" value="Айжан"/>
                        </fieldset>
                        <fieldset class="last">
                            <legend>Телефон получателя</legend>
                            <input type="tel" name="phone" value="+7 (718) 878 38 28"/>
                        </fieldset>
                    </div>
                    <button id="another-btn" class="main-btn">
                        Получатель другой человек
                        <span>
                        <svg viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 4L18 4" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.5786 0.933594L18.646 4.00099L15.5786 7.06839" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    </button>
                </div>
                <div class="delivery">
                    <p class="title">
                        <svg viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        Способ доставки</p>
                    <div class="blocks">
                        <div>
                            <input type="radio" name="craft-package" id="20$"/>
                            <label for="20$"><span>CDEK - 20$</span> <br/> 5 дней</label>
                            <p class="info">Мы работаем с понедельника по пятницу, исключая выходные</p>
                        </div>
                        <div>
                            <input type="radio" name="craft-package" id="10$"/>
                            <label for="10$"><span>ПОЧТА EMS - 10$</span> <br/> 5 дней</label>
                            <p class="info">Мы работаем с понедельника по пятницу, исключая выходные</p>
                        </div>
                        <div>
                            <input type="radio" name="craft-package" id="free"/>
                            <label for="free"><span>Самовывоз</span> <br/> с 23 января</label>
                            <p class="info">Мы работаем с понедельника по пятницу, исключая выходные</p>
                        </div>
                    </div>
                </div>
                <div class="pickup">
                    <p class="title">
                        <svg viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        Информация о самовывозе
                    </p>
                    <div>
                        <p class="name">
                            <svg  viewBox="0 0 11 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.49997 0C2.46726 0 0 2.50424 0 5.58238C0 7.30416 0.87338 9.394 2.59596 11.7938C3.85655 13.5501 5.09875 14.8027 5.15102 14.8552C5.2471 14.95165.37351 15 5.50006 15C5.62294 15 5.74591 14.9544 5.84122 14.8628C5.89361 14.8125 7.13895 13.6107 8.40192 11.8786C10.1259 9.51433 11 7.39598 11 5.58236C10.9999 2.50424 8.53262 0 5.49997 0ZM5.49997 7.99238C4.0173 7.99238 2.8111 6.78968 2.8111 5.31139C2.8111 3.83309 4.01733 2.6304 5.49997 2.6304C6.98261 2.6304 8.18884 3.83309 8.18884 5.31139C8.18884 6.78968 6.98258 7.99238 5.49997 7.99238Z" fill="#212123"/>
                            </svg>
                            ТРЦ «Dostyk Plaza»
                        </p>
                        <p class="info">Самал 2-й мкр, 111, 1 этаж, бутик 127</p>
                    </div>
                    <div>
                        <p class="name">
                            <svg  viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 6.66797C0 3.35426 2.68629 0.667969 6 0.667969C7.5913 0.667969 9.11742 1.30011 10.2426 2.42533C11.3679 3.55055 12 5.07667 12 6.66797C12 9.98168 9.31371 12.668 6 12.668C2.68629 12.668 0 9.98168 0 6.66797ZM7.7999 7.87422C8.0688 7.88825 8.31411 7.72144 8.3999 7.46622C8.45005 7.31107 8.4349 7.1422 8.35794 6.99846C8.28098 6.85472 8.14883 6.74849 7.9919 6.70422L6.5999 6.24222V3.67422C6.5999 3.34285 6.33128 3.07422 5.9999 3.07422C5.66853 3.07422 5.3999 3.34285 5.3999 3.67422V6.67422C5.39924 6.93217 5.56352 7.16168 5.8079 7.24422L7.6079 7.84422C7.67033 7.8625 7.73487 7.87259 7.7999 7.87422Z" fill="#212123"/>
                            </svg>
                            С 23 января
                        </p>
                        <p class="info">Ежедневно 10:00–22:00</p>
                    </div>
                    <button class="link-btn">Выбрать другой пункт самовывоза</button>
                </div>
                <div class="order_adress">
                    <p class="title">
                        <svg viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        Адрес доставки
                    </p>
                    <div class="profile-address">
                        <div class="address">
                            <div data-remodal-target="change_location">
                                <p class="place">Работа</p>
                                <p class="location" >Российская Федерация, Новосибирская область, Бердск, дом 17</p>
                            </div>
                            <div data-remodal-target="change_location">
                                <p class="place">Дом</p>
                                <p class="location">Российская Федерация, Новосибирская область, Бердск, дом 17</p>
                            </div>
                            <div class="add" data-remodal-target="new_location">
                                <p class="new-address" data-remodal-target="new_location">Другой адрес
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12.25" cy="12.25" r="11.25" stroke="#DEDCD8"/>
                                        <path d="M12.25 7.25L12.25 17.25" stroke="#939393" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17.25 12.25L7.25 12.25" stroke="#939393" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="payment_title">
                    <svg  viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    Выберете способ оплаты
                </p>
                <div class="payment">
                    <div class="payment__method">
                        <input type="radio" name="craft-package2" id="online"/>
                        <label for="online"><span>Оплата онлайн</span></label>
                        <div class="cards">
                            <img src="/i/ordering/visa.png" alt=""/>
                            <img src="/i/ordering/mastercard.png" alt=""/>
                            <img src="/i/ordering/aexpress.png" alt=""/>
                            <img src="/i/ordering/mastercard2.png" alt=""/>
                            <img src="/i/ordering/jsb.png" alt=""/>

                        </div>
                        <a href="#" class="link-btn">О безопасной оплате</a>
                    </div>
                    <div class="payment__method">
                        <input type="radio" name="craft-package2" id="upon"/>
                        <label for="upon"><span>Оплата при получении</span></label>
                        <p>Оплата при получении заказа (копирайт изменим в процессе)</p>
                    </div>
                    <div class="payment__method">
                        <input type="radio" name="craft-package2" id="check"/>
                        <label for="check"><span>Счет на оплату</span></label>
                        <p>Для юридический лиц копирайт Инфо о том в какой срок предположительно будет выставлен счет для оплаты</p>
                    </div>
                </div>
                <div class="requisites">
                    <p class="title">
                        <svg viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 9L4.23309 11.4248C4.66178 11.7463 5.26772 11.6728 5.60705 11.2581L14 1" stroke="#27AE60" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        Реквизиты компании
                    </p>
                    <div class="grid">
                        <fieldset>
                            <legend>Контактное лицо</legend>
                            <input type="text" name="name" value="Аружан Сулейменова"/>
                        </fieldset>
                        <fieldset>
                            <legend>Телефон</legend>
                            <input type="text" name="name" value="+7 (777) 777-77-77"/>
                        </fieldset>
                        <fieldset>
                            <legend>E-Mail</legend>
                            <input type="text" name="name" value="Email@mail.com"/>
                        </fieldset>
                        <fieldset>
                            <legend>Название компании </legend>
                            <input type="text" name="name" value="ООО “Кирсанов”"/>
                        </fieldset>
                        <fieldset>
                            <legend>Юридический адрес</legend>
                            <input type="text" name="name" value="Алматы ул.Жарокова дом 56 "/>
                        </fieldset>
                        <fieldset>
                            <legend>Наименование банка</legend>
                            <input type="text" name="name" value="Сбербанк"/>
                        </fieldset>
                        <fieldset>
                            <legend>БИН</legend>
                            <input type="text" name="name" value="Айжан"/>
                        </fieldset>
                        <fieldset>
                            <legend>Расчетный счет</legend>
                            <input type="text" name="name" value="Айжан"/>
                        </fieldset>
                        <fieldset>
                            <legend>БИК</legend>
                            <input type="text" name="name" value="Айжан"/>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="right_side">
                <div class="head">
                    <a href="#" class="inside">Содержание моего заказа <span>8 товаров</span></a>
                    <button class="link-btn" data-remodal-target="edit-order">Редактировать</button>
                </div>
                <div class="sum">
                    <p class="sum__title">Стоимость заказа</p>
                    <div class="count">
                        <span>13 товаров</span>
                        <p>150 000 000	₸</p>
                    </div>
                    <div class="delivery_сost">
                        <span>Доставка</span>
                        <p>Бесплатно по Алматы</p>
                    </div>
                    <div class="total">
                        <span>Итого</span>
                        <p>150 000 000	₸</p>
                    </div>
                    <button type="submit" class="main-btn">
                        ОПЛАТИТЬ ЗАКАЗ
                        <span>
                            <svg viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 4L18 4" stroke="#212123" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.5786 0.933594L18.646 4.00099L15.5786 7.06839" stroke="#212123" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </form>

        <div class="faq">
            <a href="/faq" class="questions">
                <p>Faq</p>
                <svg  viewBox="0 0 61 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 18L60 18" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M43 1L60 18L43 35" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

            </a>
            <div class="answers"></div>
            <a href="#" class="questions">
                <p>Оплата</p>
                <svg viewBox="0 0 61 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 18L60 18" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M43 1L60 18L43 35" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

            </a>
            <div class="answers"></div>
            <a href="#" class="questions last">
                <p>О доставке</p>
                <svg viewBox="0 0 61 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 18L60 18" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M43 1L60 18L43 35" stroke="#D7D9E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <div class="answers"></div>
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
