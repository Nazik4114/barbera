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
                    <p class="menu__contact-item">{{$company->address}}</p>
                    <a href="tel:{{$company->phone}}" class="menu__contact-item">{{$company->phone}}</a>
                </div>
            </nav>
        </div>

        <div class="page-header__user-contact user-contact">

            <a href="tel:+380505299331" class="user-contact__tel">
                <svg>
                    <use xlink:href="img/svg/sprite-ico.svg#smartphone"></use>
                </svg>
                <span>{{$company->phone}}</span>
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
