<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset("/vendor/fancybox/jquery.fancybox.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("/vendor/custom-select/itc-custom-select.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("/vendor/swiper/swiper.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("/css/style.min.css")}}">
    <title></title>
</head>

<body>
    <main>


        <header>

            <div class="inpt-search">

                <form class="header-search12">
                    <button class="header-search__btn12"></button>
                    <input class="header-search__input12" type="text" placeholder="Поиск товаров">
                    <div class="t985__close-icon t-search-widget__close-icon"> <svg role="presentation" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M0.754014 27.4806L27.0009 1.32294" stroke="black"></path> <path d="M26.9688 27.5665L0.757956 1.39984" stroke="black"></path> </svg> </div>
                </form>
            </div>
            <div class="header-title">

                <div class="header-menu__nav-list">
                    <div class="flex w-100 justify-content-sb burg">
                        <div class="header-logo-mob">

                        </div>
                        <div class="burger">
                            <input type="checkbox" id="as1">
                            <label for="as1" class="sdsdsd1">&#9587;</label>
                        </div>
                    </div>
                    <div class="dropdown header-maine-menu">
                        <button onclick="myFunction()" class="dropbtn">Каталог</button>
                        <div class="dropdown-content header-maine-menu__nav-list align-items-center">
                            <div class="header-maine-list__item"><a href="#" class="header-maine-menu-link">кровати</a></div>
                            <div class="header-maine-list__item"><a href="#" class="header-maine-menu-link">столы</a></div>
                            <div class="header-maine-list__item"><a href="#" class="header-maine-menu-link">стулья</a></div>
                            <div class="header-maine-list__item"><a href="#" class="header-maine-menu-link">кресла</a></div>
                            <div class="header-maine-list__item"><a href="#" class="header-maine-menu-link">диваны</a></div>
                            <div class="header-maine-list__item"><a href="#" class="header-maine-menu-link">мебель для хранения</a></div>
                            <div class="header-maine-list__item"><a href="#" class="header-maine-menu-link">матрасы</a></div>
                            <div class="header-maine-list__item"><a href="#" class="header-maine-menu-link">консоли</a></div>
                            <div class="header-maine-list__item"><a href="#" class="header-maine-menu-link">пуфы</a></div>
                        </div>
                    </div>
                    <div class="header-nav-list__item"><a href="promotions.html" class="header-item-link">Акции</a></div>
                    <div class="header-nav-list__item"><a href="about.html" class="header-item-link">О нас</a></div>
                    <div class="dropdown header-maine-menu header-nav-list__item">
                        <button onclick="myFunction()" class="dropbtn">Доставка и оплата</button>
                        <div class="dropdown-content header-maine-menu__nav-list align-items-center">
                            <div class="header-maine-list__item"><a href="#" class="header-maine-menu-link">Доставка по Москва и МО</a></div>
                            <div class="header-maine-list__item"><a href="#" class="header-maine-menu-link">Доставка по Регионам РФ</a></div>
                        </div>
                    </div>
                    <div class="header-nav-list__item"><a href="return.html" class="header-item-link">Возврат и обмен товара</a></div>
                    <div class="header-nav-list__item"><a href="designers.html" class="header-item-link">Дизайнерам</a></div>
                    <div class="header-nav-list__item"><a href="contacts.html" class="header-item-link">Контакты</a></div>
                    <button class="mob-button-phone" onClick='location.href="tel:+79647802164"'>Связаться с нами</button>
                    <button class="sdsdsd2 mob-button-search ">Поиск по каталогу</button>

                </div>

            </div>

            <div class="justify-content-center flex header-menu">
                <div class="burger">
                    <input type="checkbox" id="as">
                    <label for="as" class="sdsdsd">&#9776;</label>
                </div>
                <div class="header-contact">
                    <div class="zxc">

                        <div class="header-phone-block">
                            <a class=header-phone href="tel:+79647802164">+7 (964) 780-21-64</a></div>
                    </div>

                    <div class="bl w-100 flex justify-content-sb align-items-end">

                        <div>
                            <input type="button" class="header-button" value="Заказать консультацию">
                        </div>
                        <a href="index.html" class="header-logo">

                        </a>
                        <div>

                            <form class="header-search flex">
                                <input class="header-search__input" type="text" placeholder="Поиск по каталогу">
                                <button class="header-search__btn"><i class="header-fa"></i></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>



            <div class="header-maine-menu header-maine-menu-hid">
                <div class="header-maine-menu__nav-list align-items-center">
                    <div class="header-maine-list__item"><a href="#" class="header-maine-menu-link">кровати</a></div>
                    <div class="header-maine-list__item"><a href="#" class="header-maine-menu-link">столы</a></div>
                    <div class="header-maine-list__item"><a href="#" class="header-maine-menu-link">стулья</a></div>
                    <div class="header-maine-list__item"><a href="#" class="header-maine-menu-link">кресла</a></div>
                    <div class="header-maine-list__item"><a href="#" class="header-maine-menu-link">диваны</a></div>
                    <div class="header-maine-list__item"><a href="#" class="header-maine-menu-link">мебель для хранения</a></div>
                    <div class="header-maine-list__item"><a href="#" class="header-maine-menu-link">матрасы</a></div>
                    <div class="header-maine-list__item"><a href="#" class="header-maine-menu-link">консоли</a></div>
                    <div class="header-maine-list__item"><a href="#" class="header-maine-menu-link">пуфы</a></div>
                </div>
            </div>


        </header>
        <div class="main">


            <section class="swiper mySwiper">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="img-fluid-block swiper-slide">
                            <img src="{{asset("/images/img_2.png")}}" alt="slider" class="main-img-fluid">
                        </div>
                        <div class="img-fluid-block swiper-slide">
                            <img src="{{asset("/images/img_2.png")}}" alt="slider" class="main-img-fluid">
                        </div>
                        <div class="img-fluid-block swiper-slide">
                            <img src="{{asset("/images/img_2.png")}}" alt="slider" class="main-img-fluid">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>
            <section class="flex justify-content-center main-slider">
                <div class="w-100 flex flex-direction-colum align-items-center ">
                    <p class="main-name-search margin-100-0-40">Популярные категории</p>
                    <div class="w-100 height-68">
                        <form class="flex height-64 justify-content-center" style="
            position: relative;
        ">
                            <div class="block-inp main-search__inut">
                                <svg role="img" class="t838__search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 88 88"> <path fill="#b6b6b6" d="M85 31.1c-.5-8.7-4.4-16.6-10.9-22.3C67.6 3 59.3 0 50.6.6c-8.7.5-16.7 4.4-22.5 11-11.2 12.7-10.7 31.7.6 43.9l-5.3 6.1-2.5-2.2-17.8 20 9 8.1 17.8-20.2-2.1-1.8 5.3-6.1c5.8 4.2 12.6 6.3 19.3 6.3 9 0 18-3.7 24.4-10.9 5.9-6.6 8.8-15 8.2-23.7zM72.4 50.8c-9.7 10.9-26.5 11.9-37.6 2.3-10.9-9.8-11.9-26.6-2.3-37.6 4.7-5.4 11.3-8.5 18.4-8.9h1.6c6.5 0 12.7 2.4 17.6 6.8 5.3 4.7 8.5 11.1 8.9 18.2.5 7-1.9 13.8-6.6 19.2z"></path> </svg>
                                <input class="main-search__input" type="text" placeholder="Поиск по каталогу">
                            </div>
                            <button class="main-search__btn">Поиск</button>
                        </form>
                    </div>
                </div>
            </section>
            <section class="main-imgs container_main">
                <div class="main-imgs__col">
                    <div class="main-imgs__wrap wrap1">
                        <img class="main-img" src="{{asset("/images/img_3.png")}}">
                        <p class="main-name-categor">Стулья</p>
                        <button class="main-btn-name-categor">Смотреть все</button>
                    </div>
                </div>
                <div class="main-imgs__col">
                    <div class="main-imgs__wrap wrap2">
                        <img class="main-img" src="{{asset("/images/img_3.png")}}">
                        <p class="main-name-categor">Кресла</p>
                        <button class="main-btn-name-categor">Смотреть все</button>
                    </div>
                    <div class="main-imgs__wrap wrap3">
                        <img class="main-img" src="{{asset("/images/img_3.png")}}">
                        <p class="main-name-categor">Кровати</p>
                        <button class="main-btn-name-categor">Смотреть все</button>
                    </div>
                </div>
                <div class="main-imgs__col">
                    <div class="main-imgs__wrap wrap4">
                        <img class="main-img" src="{{asset("/images/img_3.png")}}">
                        <p class="main-name-categor">Диваны</p>
                        <button class="main-btn-name-categor">Смотреть все</button>
                    </div>
                </div>
            </section>
            <section class="our-mission flex justify-content-center margin-bottom-110 margin-top-175 ">
                <div class="w-100 flex align-items-center container_main align-items-start">

                    <div class="w-100 col-2 flex-direction-colum">
                        <p class="main-name-m">Наша миссия</p>
                        <p class="main-name-m2">Широкий выбор и лучшие цены</p>
                    </div>
                    <div class="w-100 col-2">
                        <p class="main-desc-m">
                            Мы – коллектив компании Dekoruna, которая помогает создать интерьер вашей мечты. Мы команда смелых и амбициозных людей, которые знают и любят свое дело.
                        </p>
                        <p class="main-desc-m">
                            Наши преимущества говорят сами за себя:
                        </p>
                        <p class="main-desc-m">
                            На наших складах – большой запас оригинальных предметов и товаров для интерьерных решений в разных дизайнах, современного света, стильного декора, созданных специально для тех, кто ценит комфорт и кого заботит уют и красота собственного дома.
                        </p>
                        <p class="main-desc-m">
                            Проверенные поставщики из России, Европы и Азиии.
                        </p>
                        <p class="main-desc-m">
                            Дизайнерские проекты «под ключ».
                        </p>
                        <p class="main-desc-m">
                            Офис в Москве и производство в Подмосковье.
                        </p>
                    </div>
                </div>
            </section>
            <section class="flex advantages-sec  margin-bottom-110">
                <div class="w-100 flex align-items-center container_main-advantages justify-content-sb">

                    <div class="advantages w-100  flex-direction-colum">
                        <p class="main-advantages-name">50+</p>
                        <p class="main-advantages-description">Товаров в каталоге на сайте</p>
                    </div>
                    <div class="advantages w-100  flex-direction-colum">
                        <p class="main-advantages-name">1000+</p>
                        <p class="main-advantages-description">Товаров на складе </p>
                    </div>
                    <div class="advantages w-100  flex-direction-colum">
                        <p class="main-advantages-name">100+</p>
                        <p class="main-advantages-description">Готовых дизайнерских решений</p>
                    </div>
                    <div class="advantages w-100  flex-direction-colum">
                        <p class="main-advantages-name">2500+</p>
                        <p class="main-advantages-description">Довольных покупателей</p>
                    </div>

                </div>
            </section>
            <section class="main-contacts">
                <div class="w-100 flex align-items-center container_main contact-colum ">

                    <div class="w-100 col-2 flex-direction-colum">
                        <p class="main-name-we">Мы в Instagram</p>
                        <div class="flex-direction-colum">
                        <p class="main-name-we2">Следите  за нашими новостями и публикациями в Instagram</p>
                        <p class="main-name-we3">@dekoruna2020</p>
                        </div>
                        <button class="main-btn1">Подписаться</button>
                    </div>
                    <div class="w-100 col-2 h-795" >
                        <img src="{{asset("/images/img_5.png")}}" class="img-fluid">
                    </div>
                </div>
            </section>
        </div>
        <footer class="footer flex">
            <div class=" cont flex container_main justify-content-sb">
                <div class="t977__col t977__col_left">
                    <img class="t977__logo t-img loaded" src="https://thumb.tildacdn.com/tild3330-6336-4430-b261-346162386164/-/format/webp/photo.png"
                            data-original="https://static.tildacdn.com/tild3330-6336-4430-b261-346162386164/photo.png" imgfield="img" alt="" role="presentation">
                    <div class="footer-mob-logo"><a href="#" class="footer-maine-menu-link">DEKORUNA</a></div>
                    <div class="t977__text" style=" margin: 30px 0;" field="text">Дизайнерская мебель <br>по выгодным ценам
                    </div>
                    <div class="t-sociallinks__item t-sociallinks__item_instagram"><a href="https://instagram.com/dekoruna2020?igshid=YmMyMTA2M2Y=" target="_blank" rel="nofollow noopener" style="width: 25px; height: 25px;"><svg class="t-sociallinks__svg" width="25px" height="25px" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM25 39.3918C25 31.4558 31.4566 25 39.3918 25H60.6082C68.5442 25 75 31.4566 75 39.3918V60.8028C75 68.738 68.5442 75.1946 60.6082 75.1946H39.3918C31.4558 75.1946 25 68.738 25 60.8028V39.3918ZM36.9883 50.0054C36.9883 42.8847 42.8438 37.0922 50.0397 37.0922C57.2356 37.0922 63.0911 42.8847 63.0911 50.0054C63.0911 57.1252 57.2356 62.9177 50.0397 62.9177C42.843 62.9177 36.9883 57.1252 36.9883 50.0054ZM41.7422 50.0054C41.7422 54.5033 45.4641 58.1638 50.0397 58.1638C54.6153 58.1638 58.3372 54.5041 58.3372 50.0054C58.3372 45.5066 54.6145 41.8469 50.0397 41.8469C45.4641 41.8469 41.7422 45.5066 41.7422 50.0054ZM63.3248 39.6355C65.0208 39.6355 66.3956 38.2606 66.3956 36.5646C66.3956 34.8687 65.0208 33.4938 63.3248 33.4938C61.6288 33.4938 60.2539 34.8687 60.2539 36.5646C60.2539 38.2606 61.6288 39.6355 63.3248 39.6355Z" fill="#ffffff"></path></svg></a></div>
                </div>
                <div class="footer-menu__nav-list align-items-center flex-direction-colum ">
                    <div class="footer-menu-list__item"><a href="#" class="footer-maine-menu-link">DEKORUNA</a></div>
                    <div class="footer-menu-list__item"><a href="#" class="footer-menu-link">О нас</a></div>
                    <div class="footer-menu-list__item"><a href="#" class="footer-menu-link">Акции</a></div>
                    <div class="footer-menu-list__item"><a href="#" class="footer-menu-link">Доставка и оплата</a></div>
                    <div class="footer-menu-list__item"><a href="#" class="footer-menu-link">Возврат и обмен товара</a></div>
                    <div class="footer-menu-list__item"><a href="#" class="footer-menu-link">Дизайнерам</a></div>
                </div>
                <div class="footer-menu__nav-list align-items-center flex-direction-colum ">
                    <div class="footer-menu-list__item"><a href="#" class="footer-maine-menu-link">КАТАЛОГ</a></div>
                    <div class="footer-menu-list__item"><a href="#" class="footer-menu-link">Все товары</a></div>
                    <div class="footer-menu-list__item"><a href="#" class="footer-menu-link">Кровати</a></div>
                    <div class="footer-menu-list__item"><a href="#" class="footer-menu-link">Столы</a></div>
                    <div class="footer-menu-list__item"><a href="#" class="footer-menu-link">Стулья</a></div>
                    <div class="footer-menu-list__item"><a href="#" class="footer-menu-link">Кресла</a></div>
                </div>
                <div class="footer-menu__nav-list align-items-center flex-direction-colum ">
                    <div class="footer-menu-list__item"><a href="#" class="footer-maine-menu-link">КАТАЛОГ</a></div>
                    <div class="footer-menu-list__item"><a href="#" class="footer-menu-link">Диваны</a></div>
                    <div class="footer-menu-list__item"><a href="#" class="footer-menu-link">Мебель для хранения</a></div>
                    <div class="footer-menu-list__item"><a href="#" class="footer-menu-link">Матрасы</a></div>
                    <div class="footer-menu-list__item"><a href="#" class="footer-menu-link">Консоли</a></div>
                    <div class="footer-menu-list__item"><a href="#" class="footer-menu-link">Пуфы</a></div>
                </div>
                <div class="footer-menu__nav-list align-items-center flex-direction-colum ">
                    <div class="footer-menu-list__item"><a href="#" class="footer-maine-menu-link">КОНТАКТЫ</a></div>
                    <div class="footer-menu-list__item">
                        <a class=footer-menu-link href="tel:+79647802164">+7 (964) 780-21-64</a></div>

                    <div class="footer-menu-list__item"><a class="footer-menu-link">dekoruna2020gmail.com</a></div>
                    <div class="footer-menu-list__item"><a href="#" class="footer-menu-link">Instagram</a></div>

                </div>
            </div>
        </footer>



    </main>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="{{asset("/vendor/custom-select/itc-custom-select.js")}}"></script>
    <script src="{{asset("/vendor/fancybox/jquery.fancybox.min.js")}}"></script>
    <script src="{{asset("/vendor/swiper/swiper.min.js")}}"></script>
    <script src="{{asset("/js/app.js")}}"></script>


</body>
</html>
