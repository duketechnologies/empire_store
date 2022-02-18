@extends('layouts.theme')
@section('title', 'Партнерство')

@section('content')
    <section id="partnership">
        <div class="info">
            <svg id="display" viewBox="0 0 53 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.4988 5.92861C26.8086 2.34357 29.3978 0.738466 32.5378 0.694414C33.7075 0.678394 34.9549 0.841776 36.1214 0.960316C37.5633 1.10769 38.9612 0.897863 40.1997 0.321983C40.2342 1.33918 40.006 2.32436 38.9364 2.75607C38.3423 3.00036 37.7915 2.99714 37.1534 2.99714C37.7571 3.75083 38.2639 4.53654 38.7891 5.3503C39.978 7.19568 41.3887 9.55767 43.9466 9.04827C45.5975 8.71988 46.2764 6.94578 45.7544 5.46243C45.2508 4.03594 43.9434 3.79165 42.8834 4.23938C41.5224 4.81526 42.1572 6.57016 42.624 7.50246C41.4383 7.23975 40.7442 6.19771 40.5376 4.9995C40.1965 2.99714 41.6913 1.06684 43.712 1.06684C44.5999 1.09488 45.0315 1.42329 45.7416 1.9335C45.8945 0.963551 46.3829 0.149778 47.3524 1.90735e-06C47.1771 1.30154 47.2612 2.42126 47.4902 3.69796C47.7303 5.05557 47.5334 5.99428 47.0298 7.20531C46.495 8.24734 45.8417 8.93855 44.9754 9.68343C45.8601 9.59212 46.6551 9.34864 47.4333 8.93215C47.5054 8.8913 47.5774 8.85446 47.6495 8.81682C48.6158 8.14723 49.1098 7.31822 49.1098 6.14163C49.5974 6.65744 49.9288 7.09558 49.9761 7.82444C50.0137 8.44117 49.8007 8.90092 49.5541 9.45758C50.1074 9.31101 50.667 9.15481 51.233 9.311C51.9776 9.51764 52.4972 9.93332 53 10.4996C52.494 11.0691 51.9808 11.4855 51.233 11.6914C50.667 11.8484 50.1074 11.6914 49.5541 11.5416C49.8007 12.1015 50.0137 12.5588 49.9761 13.1779C49.9288 13.9068 49.5974 14.3449 49.1098 14.8615C49.1098 13.6849 48.6158 12.856 47.6495 12.1864C47.5774 12.1487 47.5054 12.1079 47.4333 12.0702C46.6551 11.6545 45.8601 11.4103 44.9754 11.3198C45.8417 12.0639 46.495 12.7558 47.0298 13.7971C47.5334 15.0081 47.7303 15.9468 47.4902 17.3044C47.2612 18.5811 47.1771 19.6985 47.3524 21C46.3829 20.8526 45.8945 20.0389 45.7416 19.0689C45.0315 19.5759 44.5999 19.9043 43.712 19.9355C41.6913 19.9355 40.1965 18.0053 40.5376 16.0029C40.7442 14.8047 41.4383 13.7626 42.624 13.4999C42.1572 14.4322 41.5224 16.1847 42.8834 16.7638C43.9434 17.2107 45.2508 16.9664 45.7544 15.5368C46.2764 14.0574 45.5975 12.2833 43.9466 11.9549C41.3887 11.4447 39.978 13.8067 38.7891 15.6529C38.2639 16.4658 37.7571 17.2516 37.1534 18.0053C37.7915 18.0053 38.3423 18.0021 38.9364 18.2464C40.006 18.6781 40.2342 19.664 40.1997 20.6804C38.9612 20.1045 37.5633 19.8955 36.1214 20.0421C34.9549 20.1614 33.7075 20.324 32.5378 20.308C29.3978 20.2647 26.8086 18.6596 26.4988 15.0738C26.1922 18.6596 23.603 20.2647 20.463 20.308C19.2933 20.324 18.0451 20.1614 16.8754 20.0421C15.4367 19.8955 14.0388 20.1045 12.801 20.6804C12.7666 19.664 12.9948 18.6781 14.0644 18.2464C14.6585 18.0021 15.2053 18.0053 15.8434 18.0053C15.2397 17.2516 14.7361 16.4658 14.2109 15.6529C13.0196 13.8067 11.6089 11.4447 9.05418 11.9549C7.3993 12.2833 6.72117 14.0574 7.24317 15.5368C7.74676 16.9664 9.05738 17.2107 10.1174 16.7638C11.4776 16.1847 10.8428 14.4322 10.3736 13.4999C11.5625 13.7626 12.2566 14.8047 12.46 16.0029C12.8011 18.0053 11.3087 19.9355 9.28555 19.9355C8.39766 19.9043 7.96534 19.5759 7.256 19.0689C7.10228 20.0389 6.6179 20.8526 5.64835 21C5.82048 19.6985 5.73562 18.5811 5.51065 17.3044C5.26646 15.9468 5.46341 15.0081 5.9702 13.7971C6.50501 12.7558 7.15591 12.0639 8.02538 11.3198C7.13669 11.4103 6.34569 11.6545 5.56669 12.0702C5.49463 12.1079 5.42338 12.1487 5.35133 12.1864C4.38178 12.856 3.891 13.6849 3.891 14.8615C3.39942 14.3449 3.07117 13.9068 3.02473 13.1779C2.9871 12.5588 3.19927 12.1015 3.44666 11.5416C2.89023 11.6914 2.333 11.8484 1.76376 11.6914C1.01999 11.4855 0.503588 11.0691 0 10.4996C0.503588 9.93332 1.01999 9.51764 1.76376 9.311C2.333 9.15481 2.89023 9.31101 3.44666 9.45758C3.19927 8.90092 2.9871 8.44117 3.02473 7.82444C3.07117 7.09558 3.39942 6.65744 3.891 6.14163C3.891 7.31822 4.38178 8.14723 5.35133 8.81682C5.42338 8.85446 5.49463 8.8913 5.56669 8.93215C6.34569 9.34864 7.13669 9.59212 8.02538 9.68343C7.15591 8.93855 6.50501 8.24734 5.9702 7.20531C5.46341 5.99428 5.26646 5.05557 5.51065 3.69796C5.73562 2.42126 5.82048 1.30154 5.64835 1.90735e-06C6.6179 0.149778 7.10228 0.963551 7.256 1.9335C7.96534 1.42329 8.39766 1.09488 9.28555 1.06684C11.3087 1.06684 12.8011 2.99714 12.46 4.9995C12.2566 6.19771 11.5625 7.23975 10.3736 7.50246C10.8428 6.57016 11.4776 4.81526 10.1174 4.23938C9.05738 3.79165 7.74676 4.03594 7.24317 5.46243C6.72117 6.94578 7.3993 8.71988 9.05418 9.04827C11.6089 9.55767 13.0196 7.19568 14.2109 5.3503C14.7361 4.53654 15.2397 3.75083 15.8434 2.99714C15.2053 2.99714 14.6585 3.00036 14.0644 2.75607C12.9948 2.32436 12.7666 1.33918 12.801 0.321983C14.0388 0.897863 15.4367 1.10769 16.8754 0.960316C18.0451 0.841776 19.2933 0.678394 20.463 0.694414C23.603 0.738466 26.1922 2.34357 26.4988 5.92861ZM26.4988 13.9573C26.6301 12.8776 27.1961 12.1047 28.1152 11.4383C28.8814 10.8817 29.6604 10.6902 30.5459 10.4996C29.6604 10.3122 28.8814 10.1216 28.1152 9.56411C27.1961 8.89772 26.6301 8.12478 26.4988 7.0459C26.3675 8.12478 25.8047 8.89772 24.8848 9.56411C24.1154 10.1216 23.3372 10.3122 22.4549 10.4996C23.3372 10.6902 24.1154 10.8817 24.8848 11.4383C25.8047 12.1047 26.3675 12.8776 26.4988 13.9573ZM9.03815 10.4996C10.1486 10.0615 11.2967 9.74271 12.2814 9.03868C13.5232 8.02469 14.2518 6.80162 15.1525 5.47205C15.8314 4.46446 16.4663 3.6451 17.4791 2.92185C18.5455 2.27468 19.9434 1.61391 21.2227 1.84859C21.9793 1.98956 22.6518 2.17455 23.346 2.58063C24.0777 3.01314 24.8663 3.76042 25.1161 4.5862C25.5701 6.07916 25.4196 7.16444 24.4412 8.29057C23.5085 9.36705 21.7952 9.64898 20.7288 8.55088C19.7216 7.51206 20.1219 4.60865 21.9793 5.21256C22.6646 5.43443 23.318 5.83811 23.318 6.66068C24.0001 6.36353 24.1466 5.22455 23.6182 4.48288C21.7231 1.82373 17.5575 3.93263 18.4366 6.97382C18.7304 7.98462 19.3341 8.81041 19.9778 9.63298C19.021 9.34224 18.1332 8.93533 17.1356 8.86645C15.5368 8.75672 14.0764 9.67061 12.741 10.4531H12.5785L12.6602 10.4996L12.5785 10.55H12.741C14.0764 11.3318 15.5368 12.2457 17.1356 12.1359C18.1332 12.0671 19.021 11.6577 19.9778 11.3694C19.3341 12.192 18.7304 13.0186 18.4366 14.0286C17.5575 17.0698 21.7231 19.1754 23.6182 16.5195C24.1466 15.7778 24.0001 14.6357 23.318 14.3417C23.318 15.1643 22.6646 15.568 21.9793 15.7906C20.1219 16.3946 19.7216 13.4911 20.7288 12.4523C21.7952 11.3542 23.5085 11.6353 24.4412 12.7086C25.4196 13.8379 25.5701 14.924 25.1161 16.4162C24.8663 17.242 24.0777 17.99 23.346 18.4186C22.6518 18.8286 21.9793 19.0129 21.2227 19.1538C19.9434 19.3885 18.5455 18.7285 17.4791 18.0805C16.4663 17.3581 15.8314 16.5379 15.1525 15.5303C14.2518 14.2008 13.5232 12.9777 12.2814 11.9637C11.2967 11.2597 10.1486 10.9409 9.03815 10.5028V10.4996ZM43.9618 10.4996C42.849 10.0615 41.7041 9.74271 40.7193 9.03868C39.4776 8.02469 38.749 6.80162 37.8483 5.47205C37.1694 4.46446 36.5313 3.6451 35.5209 2.92185C34.4513 2.27468 33.0534 1.61391 31.7781 1.84859C31.0175 1.98956 30.3458 2.17455 29.6508 2.58063C28.9223 3.01314 28.1345 3.76042 27.8807 4.5862C27.4307 6.07916 27.5804 7.16444 28.5564 8.29057C29.4883 9.36705 31.2056 9.64898 32.272 8.55088C33.276 7.51206 32.8757 4.60865 31.0207 5.21256C30.3329 5.43443 29.6796 5.83811 29.6796 6.66068C29.0007 6.36353 28.8534 5.22455 29.3818 4.48288C31.2777 1.82373 35.4433 3.93263 34.561 6.97382C34.2704 7.98462 33.6667 8.81041 33.0222 9.63298C33.9798 9.34224 34.8676 8.93533 35.8652 8.86645C37.4632 8.75672 38.9236 9.67061 40.259 10.4531H40.4223L40.3407 10.4996L40.4223 10.55H40.259C38.9204 11.3318 37.46 12.2457 35.8652 12.1359C34.8676 12.0671 33.9798 11.6577 33.0222 11.3694C33.6667 12.192 34.2704 13.0186 34.561 14.0286C35.4433 17.0698 31.2777 19.1754 29.3818 16.5195C28.8534 15.7778 29.0007 14.6357 29.6796 14.3417C29.6796 15.1643 30.3329 15.568 31.0207 15.7906C32.8757 16.3946 33.276 13.4911 32.272 12.4523C31.2056 11.3542 29.4883 11.6353 28.5564 12.7086C27.5804 13.8379 27.4307 14.924 27.8807 16.4162C28.1345 17.242 28.9223 17.99 29.6508 18.4186C30.3458 18.8286 31.0175 19.0129 31.7781 19.1538C33.0534 19.3885 34.4513 18.7285 35.5209 18.0805C36.5313 17.3581 37.1694 16.5379 37.8483 15.5303C38.749 14.2008 39.4776 12.9777 40.7193 11.9637C41.7041 11.2597 42.849 10.9409 43.9618 10.5028V10.4996Z" fill="#DEDCD8"/>
            </svg>
            <h1>Партнерство</h1>
            <p>Компания Empire всегда открыта к партнерству и творческой <br/>коллаборации с художниками и дизайнерами</p>
            <a href="#" data-remodal-target="mail_to" class="route">Напишите нам
                <svg viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 6.83333L6.83333 1" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1 1H6.83333V6.83333" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <a href="/vacancies" class="route">вакансии EMPIRE
                <svg viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 6.83333L6.83333 1" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1 1H6.83333V6.83333" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
        <div class="details">
            <h1>Дизайнер интерьера</h1>
            <p>Приглашаем к взаимовыгодному сотрудничеству креативных <br/>дизайнеров и декораторов, дизайн-бюро и интерьерные студии.<br/><br/>
                Мы готовы стать с вами одной командой, работать вместе<br/>
                и создавать прекрасные интерьеры для любых помещений –<br/>
                от квартиры и офиса, до отеля и ресторана.
            </p>
            <a href="#" class="route">Узнать больше
                <svg viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 6.83333L6.83333 1" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1 1H6.83333V6.83333" stroke="#939393" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
        <div class="cooperation">
            <h2>Обсудить условия сотрудничества</h2>
            <div class="contacts">
                <a href="#">+7 777 218 92 91</a>
                <a href="#">Email@empire.kz</a>
            </div>
            <div class="buttons">
                <a data-remodal-target="mail_to" class="primary-btn">Написать письмо</a>
                <a class="main-btn">Свяжитесь со мной</a>
            </div>
        </div>
    </section>
@endsection
