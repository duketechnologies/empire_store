@extends('layouts.theme')
@section('title', 'Каталог и фильтры')

@section('content')
    <section id="filters">
        <div class="type">
            <ul class="links">
                <li ><a href="#" class="active">Декор</a></li>
                <li ><a href="#">Посуда</a></li>
                <li ><a href="#">Книги</a></li>
                <li ><a href="#">Шахматы и нарды</a></li>
                <li ><a href="#">Галантерея</a></li>
                <li ><a href="#">Часы</a></li>
                <li ><a href="#">Бизнес-аксессуары</a></li>
            </ul>
        </div>

        <div class="favorites">
            <div class="favorites__menu">
                <div class="sort">
                    <div class="sort__title">Сортировать • <span>по новозине</span>
                        <div class="filter">
                            <a href="#">По новизне</a>
                            <a href="#">Цена по убыванию</a>
                            <a href="#">Цена по возрастанию</a>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="categories">
                        <p>Катергория • Все
                            <svg width="13" height="2" viewBox="0 0 13 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1H11.5" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </p>
                        <ul>
                            <li><a href="#">Панно</a></li>
                            <li><a href="#">Статуэтки</a></li>
                            <li><a href="#">Empire gallery</a></li>
                            <li><a href="#" class="all">Все</a><span>(56)</span></li>
                        </ul>
                    </div>
                    <p class="title">Материал
                        <svg  viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 8H15" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8 15L8 1" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </p>
                    <p class="title">Цвет
                        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 8H15" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8 15L8 1" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </p>
                    <p class="title">Коллекция
                        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 8H15" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8 15L8 1" stroke="#939393" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </p>
                </div>
            </div>
            <div class="favorites__products">
                <h3>Empire Декор<span>24 товара из 170</span></h3>
                <div class="breadcrumbs">
                    <a href="#">Главная</a>
                    <a href="#">Декор</a>
                </div>
                <div class="grid">
                    <div class="grid__blocks">
                        <div class="content">
                            <div class="something">
                                <p class="discount">30%</p>
                                <p class="new">Новинка</p>
                            </div>
                            <svg viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.9648 7.56543C20.8986 7.37414 20.7781 7.20612 20.618 7.08175C20.458 6.95738 20.2652 6.882 20.063 6.86475L14.0966 5.99673L11.4228 0.589946C11.3369 0.413132 11.2028 0.264014 11.0359 0.159676C10.869 0.0553385 10.676 0 10.479 0C10.2821 0 10.0891 0.0553385 9.92216 0.159676C9.75526 0.264014 9.6212 0.413132 9.53533 0.589946L6.86147 5.98627L0.895093 6.86475C0.701026 6.89226 0.518576 6.97347 0.368448 7.09917C0.218319 7.22487 0.106524 7.39003 0.045749 7.57589C-0.00988306 7.75752 -0.0148754 7.95083 0.0313078 8.13507C0.077491 8.31932 0.173106 8.48754 0.307892 8.62169L4.6385 12.8049L3.58993 18.745C3.55249 18.9411 3.57209 19.1438 3.64641 19.3291C3.72073 19.5144 3.84667 19.6746 4.00935 19.7908C4.16792 19.9039 4.35494 19.9706 4.54942 19.9836C4.7439 19.9965 4.93815 19.9551 5.11036 19.864L10.479 17.0718L15.8268 19.8745C15.9739 19.9573 16.1401 20.0005 16.3091 20C16.5312 20.0008 16.7479 19.9312 16.9278 19.8013C17.0905 19.6851 17.2164 19.5248 17.2907 19.3395C17.365 19.1542 17.3846 18.9516 17.3472 18.7555L16.2986 12.8153L20.6292 8.63215C20.7806 8.50422 20.8925 8.33609 20.9519 8.14726C21.0113 7.95844 21.0158 7.75668 20.9648 7.56543ZM14.5161 11.7486C14.3931 11.8673 14.3011 12.0141 14.2481 12.1763C14.1951 12.3386 14.1827 12.5113 14.212 12.6794L14.9669 17.0613L11.0243 14.9697C10.8726 14.8891 10.7034 14.847 10.5315 14.847C10.3596 14.847 10.1904 14.8891 10.0386 14.9697L6.09601 17.0613L6.85099 12.6794C6.88028 12.5113 6.86788 12.3386 6.81488 12.1763C6.76188 12.0141 6.66987 11.8673 6.5469 11.7486L3.40118 8.61123L7.81567 7.97329C7.98554 7.94973 8.14702 7.88497 8.28596 7.78469C8.4249 7.68441 8.53705 7.55167 8.61259 7.3981L10.479 3.41361L12.4504 7.40856C12.5259 7.56213 12.6381 7.69486 12.777 7.79514C12.9159 7.89543 13.0774 7.96019 13.2473 7.98375L17.6618 8.62169L14.5161 11.7486Z" fill="#303133"/>
                            </svg>
                            <div class="grid-img">
                                <img src="/i/filters/filter-1.png" alt=""/>
                            </div>
                        </div>
                        <div class="info">
                            <p class="name">Лампа Айша биби</p>
                            <p class="price">
                                <span class="old">4 350 ₸</span>
                                <span class="new">4000 ₸</span>
                            </p>
                        </div>
                    </div>
                    <div class="grid__blocks">
                        <div class="content">
                            <svg viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.9648 7.56543C20.8986 7.37414 20.7781 7.20612 20.618 7.08175C20.458 6.95738 20.2652 6.882 20.063 6.86475L14.0966 5.99673L11.4228 0.589946C11.3369 0.413132 11.2028 0.264014 11.0359 0.159676C10.869 0.0553385 10.676 0 10.479 0C10.2821 0 10.0891 0.0553385 9.92216 0.159676C9.75526 0.264014 9.6212 0.413132 9.53533 0.589946L6.86147 5.98627L0.895093 6.86475C0.701026 6.89226 0.518576 6.97347 0.368448 7.09917C0.218319 7.22487 0.106524 7.39003 0.045749 7.57589C-0.00988306 7.75752 -0.0148754 7.95083 0.0313078 8.13507C0.077491 8.31932 0.173106 8.48754 0.307892 8.62169L4.6385 12.8049L3.58993 18.745C3.55249 18.9411 3.57209 19.1438 3.64641 19.3291C3.72073 19.5144 3.84667 19.6746 4.00935 19.7908C4.16792 19.9039 4.35494 19.9706 4.54942 19.9836C4.7439 19.9965 4.93815 19.9551 5.11036 19.864L10.479 17.0718L15.8268 19.8745C15.9739 19.9573 16.1401 20.0005 16.3091 20C16.5312 20.0008 16.7479 19.9312 16.9278 19.8013C17.0905 19.6851 17.2164 19.5248 17.2907 19.3395C17.365 19.1542 17.3846 18.9516 17.3472 18.7555L16.2986 12.8153L20.6292 8.63215C20.7806 8.50422 20.8925 8.33609 20.9519 8.14726C21.0113 7.95844 21.0158 7.75668 20.9648 7.56543ZM14.5161 11.7486C14.3931 11.8673 14.3011 12.0141 14.2481 12.1763C14.1951 12.3386 14.1827 12.5113 14.212 12.6794L14.9669 17.0613L11.0243 14.9697C10.8726 14.8891 10.7034 14.847 10.5315 14.847C10.3596 14.847 10.1904 14.8891 10.0386 14.9697L6.09601 17.0613L6.85099 12.6794C6.88028 12.5113 6.86788 12.3386 6.81488 12.1763C6.76188 12.0141 6.66987 11.8673 6.5469 11.7486L3.40118 8.61123L7.81567 7.97329C7.98554 7.94973 8.14702 7.88497 8.28596 7.78469C8.4249 7.68441 8.53705 7.55167 8.61259 7.3981L10.479 3.41361L12.4504 7.40856C12.5259 7.56213 12.6381 7.69486 12.777 7.79514C12.9159 7.89543 13.0774 7.96019 13.2473 7.98375L17.6618 8.62169L14.5161 11.7486Z" fill="#303133"/>
                            </svg>
                            <div class="grid-img">
                                <img src="/i/filters/filter-2.png" alt=""/>
                            </div>
                        </div>
                        <div class="info">
                            <p class="name">Лампа Айша биби</p>
                            <p class="price">4 350 ₸</p>
                        </div>
                    </div>
                    <div class="grid__blocks">
                        <div class="content">
                            <svg viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.9648 7.56543C20.8986 7.37414 20.7781 7.20612 20.618 7.08175C20.458 6.95738 20.2652 6.882 20.063 6.86475L14.0966 5.99673L11.4228 0.589946C11.3369 0.413132 11.2028 0.264014 11.0359 0.159676C10.869 0.0553385 10.676 0 10.479 0C10.2821 0 10.0891 0.0553385 9.92216 0.159676C9.75526 0.264014 9.6212 0.413132 9.53533 0.589946L6.86147 5.98627L0.895093 6.86475C0.701026 6.89226 0.518576 6.97347 0.368448 7.09917C0.218319 7.22487 0.106524 7.39003 0.045749 7.57589C-0.00988306 7.75752 -0.0148754 7.95083 0.0313078 8.13507C0.077491 8.31932 0.173106 8.48754 0.307892 8.62169L4.6385 12.8049L3.58993 18.745C3.55249 18.9411 3.57209 19.1438 3.64641 19.3291C3.72073 19.5144 3.84667 19.6746 4.00935 19.7908C4.16792 19.9039 4.35494 19.9706 4.54942 19.9836C4.7439 19.9965 4.93815 19.9551 5.11036 19.864L10.479 17.0718L15.8268 19.8745C15.9739 19.9573 16.1401 20.0005 16.3091 20C16.5312 20.0008 16.7479 19.9312 16.9278 19.8013C17.0905 19.6851 17.2164 19.5248 17.2907 19.3395C17.365 19.1542 17.3846 18.9516 17.3472 18.7555L16.2986 12.8153L20.6292 8.63215C20.7806 8.50422 20.8925 8.33609 20.9519 8.14726C21.0113 7.95844 21.0158 7.75668 20.9648 7.56543ZM14.5161 11.7486C14.3931 11.8673 14.3011 12.0141 14.2481 12.1763C14.1951 12.3386 14.1827 12.5113 14.212 12.6794L14.9669 17.0613L11.0243 14.9697C10.8726 14.8891 10.7034 14.847 10.5315 14.847C10.3596 14.847 10.1904 14.8891 10.0386 14.9697L6.09601 17.0613L6.85099 12.6794C6.88028 12.5113 6.86788 12.3386 6.81488 12.1763C6.76188 12.0141 6.66987 11.8673 6.5469 11.7486L3.40118 8.61123L7.81567 7.97329C7.98554 7.94973 8.14702 7.88497 8.28596 7.78469C8.4249 7.68441 8.53705 7.55167 8.61259 7.3981L10.479 3.41361L12.4504 7.40856C12.5259 7.56213 12.6381 7.69486 12.777 7.79514C12.9159 7.89543 13.0774 7.96019 13.2473 7.98375L17.6618 8.62169L14.5161 11.7486Z" fill="#303133"/>
                            </svg>
                            <div class="grid-img">
                                <img src="/i/filters/filter-3.png" alt=""/>
                            </div>
                        </div>
                        <div class="info">
                            <p class="name">Лампа Айша биби</p>
                            <p class="price">4 350 ₸</p>
                        </div>
                    </div>
                    <div class="grid__blocks">
                        <div class="content">
                            <svg viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.9648 7.56543C20.8986 7.37414 20.7781 7.20612 20.618 7.08175C20.458 6.95738 20.2652 6.882 20.063 6.86475L14.0966 5.99673L11.4228 0.589946C11.3369 0.413132 11.2028 0.264014 11.0359 0.159676C10.869 0.0553385 10.676 0 10.479 0C10.2821 0 10.0891 0.0553385 9.92216 0.159676C9.75526 0.264014 9.6212 0.413132 9.53533 0.589946L6.86147 5.98627L0.895093 6.86475C0.701026 6.89226 0.518576 6.97347 0.368448 7.09917C0.218319 7.22487 0.106524 7.39003 0.045749 7.57589C-0.00988306 7.75752 -0.0148754 7.95083 0.0313078 8.13507C0.077491 8.31932 0.173106 8.48754 0.307892 8.62169L4.6385 12.8049L3.58993 18.745C3.55249 18.9411 3.57209 19.1438 3.64641 19.3291C3.72073 19.5144 3.84667 19.6746 4.00935 19.7908C4.16792 19.9039 4.35494 19.9706 4.54942 19.9836C4.7439 19.9965 4.93815 19.9551 5.11036 19.864L10.479 17.0718L15.8268 19.8745C15.9739 19.9573 16.1401 20.0005 16.3091 20C16.5312 20.0008 16.7479 19.9312 16.9278 19.8013C17.0905 19.6851 17.2164 19.5248 17.2907 19.3395C17.365 19.1542 17.3846 18.9516 17.3472 18.7555L16.2986 12.8153L20.6292 8.63215C20.7806 8.50422 20.8925 8.33609 20.9519 8.14726C21.0113 7.95844 21.0158 7.75668 20.9648 7.56543ZM14.5161 11.7486C14.3931 11.8673 14.3011 12.0141 14.2481 12.1763C14.1951 12.3386 14.1827 12.5113 14.212 12.6794L14.9669 17.0613L11.0243 14.9697C10.8726 14.8891 10.7034 14.847 10.5315 14.847C10.3596 14.847 10.1904 14.8891 10.0386 14.9697L6.09601 17.0613L6.85099 12.6794C6.88028 12.5113 6.86788 12.3386 6.81488 12.1763C6.76188 12.0141 6.66987 11.8673 6.5469 11.7486L3.40118 8.61123L7.81567 7.97329C7.98554 7.94973 8.14702 7.88497 8.28596 7.78469C8.4249 7.68441 8.53705 7.55167 8.61259 7.3981L10.479 3.41361L12.4504 7.40856C12.5259 7.56213 12.6381 7.69486 12.777 7.79514C12.9159 7.89543 13.0774 7.96019 13.2473 7.98375L17.6618 8.62169L14.5161 11.7486Z" fill="#303133"/>
                            </svg>
                            <div class="grid-img">
                                <img src="/i/filters/filter-3.png" alt=""/>
                            </div>
                        </div>
                        <div class="info">
                            <p class="name">Лампа Айша биби</p>
                            <p class="price">4 350 ₸</p>
                        </div>
                    </div>
                    <div class="grid__blocks">
                        <div class="content">
                            <svg viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.9648 7.56543C20.8986 7.37414 20.7781 7.20612 20.618 7.08175C20.458 6.95738 20.2652 6.882 20.063 6.86475L14.0966 5.99673L11.4228 0.589946C11.3369 0.413132 11.2028 0.264014 11.0359 0.159676C10.869 0.0553385 10.676 0 10.479 0C10.2821 0 10.0891 0.0553385 9.92216 0.159676C9.75526 0.264014 9.6212 0.413132 9.53533 0.589946L6.86147 5.98627L0.895093 6.86475C0.701026 6.89226 0.518576 6.97347 0.368448 7.09917C0.218319 7.22487 0.106524 7.39003 0.045749 7.57589C-0.00988306 7.75752 -0.0148754 7.95083 0.0313078 8.13507C0.077491 8.31932 0.173106 8.48754 0.307892 8.62169L4.6385 12.8049L3.58993 18.745C3.55249 18.9411 3.57209 19.1438 3.64641 19.3291C3.72073 19.5144 3.84667 19.6746 4.00935 19.7908C4.16792 19.9039 4.35494 19.9706 4.54942 19.9836C4.7439 19.9965 4.93815 19.9551 5.11036 19.864L10.479 17.0718L15.8268 19.8745C15.9739 19.9573 16.1401 20.0005 16.3091 20C16.5312 20.0008 16.7479 19.9312 16.9278 19.8013C17.0905 19.6851 17.2164 19.5248 17.2907 19.3395C17.365 19.1542 17.3846 18.9516 17.3472 18.7555L16.2986 12.8153L20.6292 8.63215C20.7806 8.50422 20.8925 8.33609 20.9519 8.14726C21.0113 7.95844 21.0158 7.75668 20.9648 7.56543ZM14.5161 11.7486C14.3931 11.8673 14.3011 12.0141 14.2481 12.1763C14.1951 12.3386 14.1827 12.5113 14.212 12.6794L14.9669 17.0613L11.0243 14.9697C10.8726 14.8891 10.7034 14.847 10.5315 14.847C10.3596 14.847 10.1904 14.8891 10.0386 14.9697L6.09601 17.0613L6.85099 12.6794C6.88028 12.5113 6.86788 12.3386 6.81488 12.1763C6.76188 12.0141 6.66987 11.8673 6.5469 11.7486L3.40118 8.61123L7.81567 7.97329C7.98554 7.94973 8.14702 7.88497 8.28596 7.78469C8.4249 7.68441 8.53705 7.55167 8.61259 7.3981L10.479 3.41361L12.4504 7.40856C12.5259 7.56213 12.6381 7.69486 12.777 7.79514C12.9159 7.89543 13.0774 7.96019 13.2473 7.98375L17.6618 8.62169L14.5161 11.7486Z" fill="#303133"/>
                            </svg>
                            <div class="grid-img">
                                <img src="/i/filters/filter-1.png" alt=""/>
                            </div>
                        </div>
                        <div class="info">
                            <p class="name">Лампа Айша биби</p>
                            <p class="price">4 350 ₸</p>
                        </div>
                    </div>
                    <div class="grid__blocks">
                        <div class="content">
                            <svg viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.9648 7.56543C20.8986 7.37414 20.7781 7.20612 20.618 7.08175C20.458 6.95738 20.2652 6.882 20.063 6.86475L14.0966 5.99673L11.4228 0.589946C11.3369 0.413132 11.2028 0.264014 11.0359 0.159676C10.869 0.0553385 10.676 0 10.479 0C10.2821 0 10.0891 0.0553385 9.92216 0.159676C9.75526 0.264014 9.6212 0.413132 9.53533 0.589946L6.86147 5.98627L0.895093 6.86475C0.701026 6.89226 0.518576 6.97347 0.368448 7.09917C0.218319 7.22487 0.106524 7.39003 0.045749 7.57589C-0.00988306 7.75752 -0.0148754 7.95083 0.0313078 8.13507C0.077491 8.31932 0.173106 8.48754 0.307892 8.62169L4.6385 12.8049L3.58993 18.745C3.55249 18.9411 3.57209 19.1438 3.64641 19.3291C3.72073 19.5144 3.84667 19.6746 4.00935 19.7908C4.16792 19.9039 4.35494 19.9706 4.54942 19.9836C4.7439 19.9965 4.93815 19.9551 5.11036 19.864L10.479 17.0718L15.8268 19.8745C15.9739 19.9573 16.1401 20.0005 16.3091 20C16.5312 20.0008 16.7479 19.9312 16.9278 19.8013C17.0905 19.6851 17.2164 19.5248 17.2907 19.3395C17.365 19.1542 17.3846 18.9516 17.3472 18.7555L16.2986 12.8153L20.6292 8.63215C20.7806 8.50422 20.8925 8.33609 20.9519 8.14726C21.0113 7.95844 21.0158 7.75668 20.9648 7.56543ZM14.5161 11.7486C14.3931 11.8673 14.3011 12.0141 14.2481 12.1763C14.1951 12.3386 14.1827 12.5113 14.212 12.6794L14.9669 17.0613L11.0243 14.9697C10.8726 14.8891 10.7034 14.847 10.5315 14.847C10.3596 14.847 10.1904 14.8891 10.0386 14.9697L6.09601 17.0613L6.85099 12.6794C6.88028 12.5113 6.86788 12.3386 6.81488 12.1763C6.76188 12.0141 6.66987 11.8673 6.5469 11.7486L3.40118 8.61123L7.81567 7.97329C7.98554 7.94973 8.14702 7.88497 8.28596 7.78469C8.4249 7.68441 8.53705 7.55167 8.61259 7.3981L10.479 3.41361L12.4504 7.40856C12.5259 7.56213 12.6381 7.69486 12.777 7.79514C12.9159 7.89543 13.0774 7.96019 13.2473 7.98375L17.6618 8.62169L14.5161 11.7486Z" fill="#303133"/>
                            </svg>
                            <div class="grid-img">
                                <img src="/i/filters/filter-2.png" alt=""/>
                            </div>
                        </div>
                        <div class="info">
                            <p class="name">Лампа Айша биби</p>
                            <p class="price">4 350 ₸</p>
                        </div>
                    </div>
                    <div class="grid__blocks">
                        <div class="content">
                            <svg viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.9648 7.56543C20.8986 7.37414 20.7781 7.20612 20.618 7.08175C20.458 6.95738 20.2652 6.882 20.063 6.86475L14.0966 5.99673L11.4228 0.589946C11.3369 0.413132 11.2028 0.264014 11.0359 0.159676C10.869 0.0553385 10.676 0 10.479 0C10.2821 0 10.0891 0.0553385 9.92216 0.159676C9.75526 0.264014 9.6212 0.413132 9.53533 0.589946L6.86147 5.98627L0.895093 6.86475C0.701026 6.89226 0.518576 6.97347 0.368448 7.09917C0.218319 7.22487 0.106524 7.39003 0.045749 7.57589C-0.00988306 7.75752 -0.0148754 7.95083 0.0313078 8.13507C0.077491 8.31932 0.173106 8.48754 0.307892 8.62169L4.6385 12.8049L3.58993 18.745C3.55249 18.9411 3.57209 19.1438 3.64641 19.3291C3.72073 19.5144 3.84667 19.6746 4.00935 19.7908C4.16792 19.9039 4.35494 19.9706 4.54942 19.9836C4.7439 19.9965 4.93815 19.9551 5.11036 19.864L10.479 17.0718L15.8268 19.8745C15.9739 19.9573 16.1401 20.0005 16.3091 20C16.5312 20.0008 16.7479 19.9312 16.9278 19.8013C17.0905 19.6851 17.2164 19.5248 17.2907 19.3395C17.365 19.1542 17.3846 18.9516 17.3472 18.7555L16.2986 12.8153L20.6292 8.63215C20.7806 8.50422 20.8925 8.33609 20.9519 8.14726C21.0113 7.95844 21.0158 7.75668 20.9648 7.56543ZM14.5161 11.7486C14.3931 11.8673 14.3011 12.0141 14.2481 12.1763C14.1951 12.3386 14.1827 12.5113 14.212 12.6794L14.9669 17.0613L11.0243 14.9697C10.8726 14.8891 10.7034 14.847 10.5315 14.847C10.3596 14.847 10.1904 14.8891 10.0386 14.9697L6.09601 17.0613L6.85099 12.6794C6.88028 12.5113 6.86788 12.3386 6.81488 12.1763C6.76188 12.0141 6.66987 11.8673 6.5469 11.7486L3.40118 8.61123L7.81567 7.97329C7.98554 7.94973 8.14702 7.88497 8.28596 7.78469C8.4249 7.68441 8.53705 7.55167 8.61259 7.3981L10.479 3.41361L12.4504 7.40856C12.5259 7.56213 12.6381 7.69486 12.777 7.79514C12.9159 7.89543 13.0774 7.96019 13.2473 7.98375L17.6618 8.62169L14.5161 11.7486Z" fill="#303133"/>
                            </svg>
                            <div class="grid-img">
                                <img src="/i/filters/filter-4.png" alt=""/>
                            </div>
                        </div>
                        <div class="info">
                            <p class="name">Лампа Айша биби</p>
                            <p class="price">4 350 ₸</p>
                        </div>
                    </div>
                    <div class="grid__blocks">
                        <div class="content">
                            <svg viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.9648 7.56543C20.8986 7.37414 20.7781 7.20612 20.618 7.08175C20.458 6.95738 20.2652 6.882 20.063 6.86475L14.0966 5.99673L11.4228 0.589946C11.3369 0.413132 11.2028 0.264014 11.0359 0.159676C10.869 0.0553385 10.676 0 10.479 0C10.2821 0 10.0891 0.0553385 9.92216 0.159676C9.75526 0.264014 9.6212 0.413132 9.53533 0.589946L6.86147 5.98627L0.895093 6.86475C0.701026 6.89226 0.518576 6.97347 0.368448 7.09917C0.218319 7.22487 0.106524 7.39003 0.045749 7.57589C-0.00988306 7.75752 -0.0148754 7.95083 0.0313078 8.13507C0.077491 8.31932 0.173106 8.48754 0.307892 8.62169L4.6385 12.8049L3.58993 18.745C3.55249 18.9411 3.57209 19.1438 3.64641 19.3291C3.72073 19.5144 3.84667 19.6746 4.00935 19.7908C4.16792 19.9039 4.35494 19.9706 4.54942 19.9836C4.7439 19.9965 4.93815 19.9551 5.11036 19.864L10.479 17.0718L15.8268 19.8745C15.9739 19.9573 16.1401 20.0005 16.3091 20C16.5312 20.0008 16.7479 19.9312 16.9278 19.8013C17.0905 19.6851 17.2164 19.5248 17.2907 19.3395C17.365 19.1542 17.3846 18.9516 17.3472 18.7555L16.2986 12.8153L20.6292 8.63215C20.7806 8.50422 20.8925 8.33609 20.9519 8.14726C21.0113 7.95844 21.0158 7.75668 20.9648 7.56543ZM14.5161 11.7486C14.3931 11.8673 14.3011 12.0141 14.2481 12.1763C14.1951 12.3386 14.1827 12.5113 14.212 12.6794L14.9669 17.0613L11.0243 14.9697C10.8726 14.8891 10.7034 14.847 10.5315 14.847C10.3596 14.847 10.1904 14.8891 10.0386 14.9697L6.09601 17.0613L6.85099 12.6794C6.88028 12.5113 6.86788 12.3386 6.81488 12.1763C6.76188 12.0141 6.66987 11.8673 6.5469 11.7486L3.40118 8.61123L7.81567 7.97329C7.98554 7.94973 8.14702 7.88497 8.28596 7.78469C8.4249 7.68441 8.53705 7.55167 8.61259 7.3981L10.479 3.41361L12.4504 7.40856C12.5259 7.56213 12.6381 7.69486 12.777 7.79514C12.9159 7.89543 13.0774 7.96019 13.2473 7.98375L17.6618 8.62169L14.5161 11.7486Z" fill="#303133"/>
                            </svg>
                            <div class="grid-img">
                                <img src="/i/filters/filter-5.png" alt=""/>
                            </div>
                        </div>
                        <div class="info">
                            <p class="name">Лампа Айша биби</p>
                            <p class="price">4 350 ₸</p>
                        </div>
                    </div>
                    <div class="grid__blocks">
                        <div class="content">
                            <svg viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.9648 7.56543C20.8986 7.37414 20.7781 7.20612 20.618 7.08175C20.458 6.95738 20.2652 6.882 20.063 6.86475L14.0966 5.99673L11.4228 0.589946C11.3369 0.413132 11.2028 0.264014 11.0359 0.159676C10.869 0.0553385 10.676 0 10.479 0C10.2821 0 10.0891 0.0553385 9.92216 0.159676C9.75526 0.264014 9.6212 0.413132 9.53533 0.589946L6.86147 5.98627L0.895093 6.86475C0.701026 6.89226 0.518576 6.97347 0.368448 7.09917C0.218319 7.22487 0.106524 7.39003 0.045749 7.57589C-0.00988306 7.75752 -0.0148754 7.95083 0.0313078 8.13507C0.077491 8.31932 0.173106 8.48754 0.307892 8.62169L4.6385 12.8049L3.58993 18.745C3.55249 18.9411 3.57209 19.1438 3.64641 19.3291C3.72073 19.5144 3.84667 19.6746 4.00935 19.7908C4.16792 19.9039 4.35494 19.9706 4.54942 19.9836C4.7439 19.9965 4.93815 19.9551 5.11036 19.864L10.479 17.0718L15.8268 19.8745C15.9739 19.9573 16.1401 20.0005 16.3091 20C16.5312 20.0008 16.7479 19.9312 16.9278 19.8013C17.0905 19.6851 17.2164 19.5248 17.2907 19.3395C17.365 19.1542 17.3846 18.9516 17.3472 18.7555L16.2986 12.8153L20.6292 8.63215C20.7806 8.50422 20.8925 8.33609 20.9519 8.14726C21.0113 7.95844 21.0158 7.75668 20.9648 7.56543ZM14.5161 11.7486C14.3931 11.8673 14.3011 12.0141 14.2481 12.1763C14.1951 12.3386 14.1827 12.5113 14.212 12.6794L14.9669 17.0613L11.0243 14.9697C10.8726 14.8891 10.7034 14.847 10.5315 14.847C10.3596 14.847 10.1904 14.8891 10.0386 14.9697L6.09601 17.0613L6.85099 12.6794C6.88028 12.5113 6.86788 12.3386 6.81488 12.1763C6.76188 12.0141 6.66987 11.8673 6.5469 11.7486L3.40118 8.61123L7.81567 7.97329C7.98554 7.94973 8.14702 7.88497 8.28596 7.78469C8.4249 7.68441 8.53705 7.55167 8.61259 7.3981L10.479 3.41361L12.4504 7.40856C12.5259 7.56213 12.6381 7.69486 12.777 7.79514C12.9159 7.89543 13.0774 7.96019 13.2473 7.98375L17.6618 8.62169L14.5161 11.7486Z" fill="#303133"/>
                            </svg>
                            <div class="grid-img">
                                <img src="/i/filters/filter-6.png" alt=""/>
                            </div>
                        </div>
                        <div class="info">
                            <p class="name">Лампа Айша биби</p>
                            <p class="price">4 350 ₸</p>
                        </div>
                    </div>
                </div>
                <div class="route">
                    <a href="#" class="toStart">
                        <svg viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.81171 4.81694C8.56066 5.06102 8.15363 5.06102 7.90257 4.81694L4.5 1.50888L1.09743 4.81694C0.846375 5.06102 0.43934 5.06102 0.188289 4.81694C-0.0627632 4.57286 -0.0627631 4.17714 0.188289 3.93306L4.04543 0.183059C4.29648 -0.0610189 4.70352 -0.0610188 4.95457 0.183059L8.81171 3.93306C9.06276 4.17714 9.06276 4.57286 8.81171 4.81694Z" fill="#939393"/>
                        </svg>
                        Вернуться в начало</a>
                    <a href="#" class="secondary-btn">Показать больше</a>
                    <div class="pagination">
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">
                            <svg viewBox="0 0 31 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9.35547L30 9.35547" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21.6445 17.7109L30.0005 9.35501L21.6445 0.999073" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.consultation')
        @include('partials.faq_block')
    </section>
@endsection
