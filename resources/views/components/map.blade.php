<section class="contact g-container-outer" data-scroll-to="contact">
    <div class="contact__inner g-container-inner"><h2 class="contact__title">контакти</h2>
        <div class="contact__place">
            <div class="contact__place-col contact__place-col--left">
                <a class="contact__address">
                    <svg>
                        <use xlink:href="img/svg/sprite-ico.svg#marker"></use>
                    </svg>
                    <span>{{$company->address}}</span>
                </a>
            </div>

            <div class="contact__place-col contact__place-col--middle">
                <a class="contact__btn g-btn-red _shadow _pulse-2" data-scroll-to-link="masters">Записатися на стрижку</a>
            </div>

            <div class="contact__place-col contact__place-col--right">
                <a href="tel:{{$company->phone}}" class="contact__tel">
                    <svg>
                        <use xlink:href="img/svg/sprite-ico.svg#phone"></use>
                    </svg>
                    <span>{{$company->phone}}</span>
                </a>
            </div>

            <div class="contact__place-figure"></div>

        </div>
    </div>

    <div class="contact__map" id="map" data-def-props='{"lat":{{$company->lat}},"lng":{{$company->lng}},"zoom":17}'></div>
</section>
