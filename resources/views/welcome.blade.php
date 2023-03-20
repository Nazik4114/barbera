<!DOCTYPE html>
<html lang="{{LaravelLocalization::getCurrentLocaleRegional()}}">
<head>
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Home</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/datepicker.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="page-header g-container-outer">

    <div class="page-header__inner g-container-inner">
        <a href="index.html" class="page-header__main-logo main-logo">
            <img src="img/logo.png" alt="logo" class="main-logo__img">
        </a>

        <div class="page-header__menu menu" data-menu>
            <div class="menu__top">
                <a href="index.html" class="main-logo">
                    <img src="img/logo.png" alt="logo" class="main-logo__img">
                </a>
                <button class="page-header__menu-close" data-menu-close>
                    <svg>
                        <use xlink:href="img/svg/sprite-ico.svg#close"></use>
                    </svg>
                </button>
            </div>
            <nav class="menu__inner">
                <ul class="menu__list">
                    <li class="menu__item">
                        <a href="#" class="menu__link" data-scroll-to-link="services">Послуги</a>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link" data-scroll-to-link="masters">Запис</a>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link" data-scroll-to-link="gallery">Галерея</a>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link" data-scroll-to-link="contact">Контакти</a>
                    </li>
                </ul>

                <div class="menu__social social">
                    <a href="#" class="social__item">
                        <svg>
                            <use xlink:href="img/svg/sprite-ico.svg#inst"></use>
                        </svg>
                    </a>
                    <a href="#" class="social__item">
                        <svg>
                            <use xlink:href="img/svg/sprite-ico.svg#fb"></use>
                        </svg>
                    </a>
                </div>

                <div class="menu__contact">
                    <p class="menu__contact-item">м. Луцьк, пр.Волі, 42, ТРЦ "Гранд Волинь"</p>
                    <a href="tel:+380505299331" class="menu__contact-item">+380 50 529 933</a>
                </div>
            </nav>
        </div>

        <div class="page-header__user-contact user-contact">

            <a href="tel:+380505299331" class="user-contact__tel">
                <svg>
                    <use xlink:href="img/svg/sprite-ico.svg#smartphone"></use>
                </svg>
                <span>+380 50 529 9331</span>
            </a>

            <!--<a class="user-contact__link">Залишити заявку</a>-->
        </div>

        <button class="page-header__menu-open" data-menu-open>
            <svg>
                <use xlink:href="img/svg/sprite-ico.svg#burger"></use>
            </svg>
        </button>
    </div>

</header>

<main class="page-main" data-m-parallax>
    <section class="top-screen g-container-outer">
        <div class="top-screen__inner g-container-inner">
            <h1 class="top-screen__title"><strong>Sergiy chirick</strong><br>Hair style studio</h1>
            <a href="#" class="top-screen__btn g-btn-red _shadow _pulse" data-scroll-to-link="masters">Записатися на
                стрижку</a>

            <div class="top-screen__mouse mouse _animate"></div>
        </div>
    </section>

    @include('components.services.services')
{{--   Services--}}

    <div class="page-main__general-bg">
        <section class="product">

            <img src="img/jpg/product-bg.jpg" alt="product" class="product__bg">


            <div class="product__wrapper g-container-outer">
                <div class="product__inner g-container-inner">
                    <div class="product__col">
                        <h2 class="product__title">косметика</h2>
                        <p class="product__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>

                        <img src="img/png/cosmetic.png" alt="cosmetic" class="product__image">
                    </div>
                </div>
            </div>
        </section>

        <section class="masters g-container-outer" data-scroll-to="masters">
            <div class="masters__inner g-container-inner">
                <div class="masters__inscription" data-m-parallax-item
                     data-m-move-val="10"></div>

                <div class="masters__head">
                    <h2 class="masters__title title-decor">Наші майстри</h2>
                    <div class="masters__carousel-nav carousel-nav">
                        <button class="carousel-nav__prev">
                            <svg>
                                <use xlink:href="img/svg/sprite-ico.svg#arrow"></use>
                            </svg>
                        </button>
                        <div class="carousel-nav__slash"></div>
                        <button class="carousel-nav__next">
                            <svg>
                                <use xlink:href="img/svg/sprite-ico.svg#arrow"></use>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="masters__carousel">
                    <div class="masters__list">
                        <a class="masters__slide master-item" data-open-modal>
                            <div class="master-item__img-wrap">
                                <img src="img/jpg/master-1.jpg" alt="master" class="master-item__img">
                            </div>

                            <div class="master-item__info">
                                <p class="master-item__name">Майстер Ірина</p>
                                <p class="master-item__skills">жіночі стрижки, мелірування, біозавивка</p>
                            </div>

                            <button class="master-item__btn g-btn-border"><span>записатися</span></button>
                        </a>
                        <a class="masters__slide master-item" data-open-modal>
                            <div class="master-item__img-wrap">
                                <img src="img/jpg/master-2.jpg" alt="master" class="master-item__img">
                            </div>

                            <div class="master-item__info">
                                <p class="master-item__name">Майстер Ігор</p>
                                <p class="master-item__skills">чоловічі стрижки</p>
                            </div>

                            <button class="master-item__btn g-btn-border"><span>записатися</span></button>
                        </a>
                        <a class="masters__slide master-item" data-open-modal>
                            <div class="master-item__img-wrap">
                                <img src="img/jpg/master-1.jpg" alt="master" class="master-item__img">
                            </div>

                            <div class="master-item__info">
                                <p class="master-item__name">Майстер Ірина</p>
                                <p class="master-item__skills">жіночі стрижки, мелірування, біозавивка</p>
                            </div>

                            <button class="master-item__btn g-btn-border"><span>записатися</span></button>
                        </a>
                        <a class="masters__slide master-item" data-open-modal>
                            <div class="master-item__img-wrap">
                                <img src="img/jpg/master-1.jpg" alt="master" class="master-item__img">
                            </div>

                            <div class="master-item__info">
                                <p class="master-item__name">Майстер Ірина</p>
                                <p class="master-item__skills">жіночі стрижки, мелірування, біозавивка</p>
                            </div>

                            <button class="master-item__btn g-btn-border"><span>записатися</span></button>
                        </a>
                        <a class="masters__slide master-item" data-open-modal>
                            <div class="master-item__img-wrap">
                                <img src="img/jpg/master-1.jpg" alt="master" class="master-item__img">
                            </div>

                            <div class="master-item__info">
                                <p class="master-item__name">Майстер Ірина</p>
                                <p class="master-item__skills">жіночі стрижки, мелірування, біозавивка</p>
                            </div>

                            <button class="master-item__btn g-btn-border"><span>записатися</span></button>
                        </a>
                    </div>
                </div>

            </div>

        </section>
    </div>

    <section class="gallery g-container-outer" data-scroll-to="gallery">
        <div class="gallery__inner g-container-inner">
            <div class="gallery__inscription" data-m-parallax-item
                 data-m-move-val="10"></div>

            <div class="gallery__row _mob">

                <div class="gallery__carousel _mob">
                    <div class="gallery__list">
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-1.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-1.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-1.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-2.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-2.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-2.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-3.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-3.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-3.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-4.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-4.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-4.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-5.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-5.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-5.jpg" alt="slide">
                        </div>
                    </div>
                </div>

                <div class="gallery__carousel _mod-1">
                    <div class="gallery__list">
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-1.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-1.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-1.jpg" alt="slide">
                        </div>
                    </div>
                </div>

                <div class="gallery__carousel _mod-2">
                    <div class="gallery__list">
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-2.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-2.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-2.jpg" alt="slide">
                        </div>
                    </div>
                </div>

                <div class="gallery__title-block">
                    <h2 class="gallery__title title-decor">Галерея</h2>
                    <p class="gallery__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    <div class="gallery__carousel-nav carousel-nav _mob">
                        <button class="carousel-nav__prev">
                            <svg>
                                <use xlink:href="img/svg/sprite-ico.svg#arrow"></use>
                            </svg>
                        </button>
                        <div class="carousel-nav__slash"></div>
                        <button class="carousel-nav__next">
                            <svg>
                                <use xlink:href="img/svg/sprite-ico.svg#arrow"></use>
                            </svg>
                        </button>
                    </div>

                    <div class="gallery__carousel-nav carousel-nav">
                        <button class="carousel-nav__prev">
                            <svg>
                                <use xlink:href="img/svg/sprite-ico.svg#arrow"></use>
                            </svg>
                        </button>
                        <div class="carousel-nav__slash"></div>
                        <button class="carousel-nav__next">
                            <svg>
                                <use xlink:href="img/svg/sprite-ico.svg#arrow"></use>
                            </svg>
                        </button>
                    </div>
                </div>

            </div>

            <div class="gallery__row">

                <div class="gallery__carousel _mod-3">
                    <div class="gallery__list">
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-3.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-3.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-3.jpg" alt="slide">
                        </div>
                    </div>
                </div>

                <div class="gallery__carousel _mod-1">
                    <div class="gallery__list">
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-4.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-4.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-4.jpg" alt="slide">
                        </div>
                    </div>
                </div>

                <div class="gallery__carousel _mod-4">
                    <div class="gallery__list">
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-5.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-5.jpg" alt="slide">
                        </div>
                        <div class="gallery__slide">
                            <img src="img/jpg/gallery-5.jpg" alt="slide">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="contact g-container-outer" data-scroll-to="contact">
        <div class="contact__inner g-container-inner"><h2 class="contact__title">контакти</h2>
            <div class="contact__place">
                <div class="contact__place-col contact__place-col--left">
                    <a class="contact__address">
                        <svg>
                            <use xlink:href="img/svg/sprite-ico.svg#marker"></use>
                        </svg>
                        <span>м. Луцьк, пр.Волі, 42,<br>ТРЦ "Гранд Волинь"</span>
                    </a>
                </div>

                <div class="contact__place-col contact__place-col--middle">
                    <a class="contact__btn g-btn-red _shadow _pulse-2" data-scroll-to-link="masters">Записатися на стрижку</a>
                </div>

                <div class="contact__place-col contact__place-col--right">
                    <a href="tel:+380505299331" class="contact__tel">
                        <svg>
                            <use xlink:href="img/svg/sprite-ico.svg#phone"></use>
                        </svg>
                        <span>+380 50 529 9331</span>
                    </a>
                    <a href="tel:+380505299331" class="contact__tel">
                        <svg>
                            <use xlink:href="img/svg/sprite-ico.svg#phone"></use>
                        </svg>
                        <span>+380 50 529 9331</span>
                    </a>
                </div>

                <div class="contact__place-figure"></div>

            </div>
        </div>

        <div class="contact__map" id="map" data-def-props='{"lat":50.745195,"lng":25.339599,"zoom":17}'></div>
    </section>
</main>

<footer class="page-footer g-container-outer">
    <div class="page-footer__inner g-container-inner">
        <a href="index.html" class="page-footer__main-logo main-logo">
            <img src="img/logo-2.jpg" alt="logo" class="main-logo__img">
        </a>
        <p class="page-footer__copyright">2018 Sergiy Chirik. Всі права захищені</p>

        <div class="page-footer__social social">
            <a href="#" class="social__item">
                <svg>
                    <use xlink:href="img/svg/sprite-ico.svg#inst"></use>
                </svg>
            </a>
            <a href="#" class="social__item">
                <svg>
                    <use xlink:href="img/svg/sprite-ico.svg#fb"></use>
                </svg>
            </a>
        </div>

        <div class="page-footer__dev dev">
            <p>Розроблено</p>
            <a href="#">
                <svg>
                    <use xlink:href="img/svg/sprite-ico.svg#logo-dev"></use>
                </svg>
            </a>
        </div>
    </div>
</footer>

{{--modal--}}

<script src="js/libs/jquery-3.3.1.min.js"></script>
<script src="js/libs/scroll-lock.min.js"></script>
<script src="js/libs/jquery.mask.min.js"></script>
<script src="js/libs/datepicker.min.js"></script>
<script src="js/libs/swiper.min.js"></script>
<script src="js/main.js"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdDxXaKJJOG3mqd-ZKcBtoOoXN3BfFN8c&callback=initMap"></script>
</body>
</html>

