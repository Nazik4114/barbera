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
                @foreach($masters as $master)
                    <a class="masters__slide master-item" data-open-modal>
                        <div class="master-item__img-wrap">
                            <img src="{{$master->image}}" alt="master" class="master-item__img">
                        </div>

                        <div class="master-item__info">
                            <p class="master-item__name">{{$master->name}}</p>
                            <p class="master-item__skills">{{ \App\Services\GetServices::getServices($master->services) }}</p>
                        </div>

                        <button class="master-item__btn g-btn-border"><span>записатися</span></button>
                    </a>
                @endforeach


            </div>
        </div>

    </div>

</section>
