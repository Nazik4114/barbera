
<div class="modal">
    <button class="modal__btn-close" data-close-modal>
        <svg>
            <use xlink:href="img/svg/sprite-ico.svg#close"></use>
        </svg>
    </button>

    <div class="modal__scroll" data-scroll-lock-scrollable>
        <div class="modal__content">
            <div class="modal__master-modal master-modal">
                <div class="master-modal__img-wrap">
                    <img src="img/jpg/master-1.jpg" alt="master" class="master-modal__img">
                </div>

                <div class="master-modal__info">
                    <p class="master-modal__name">Майстер Ірина</p>
                    <p class="master-modal__skills">жіночі стрижки, мелірування, біозавивка</p>
                </div>
            </div>

            <form class="modal__form form">
                <div class="form__inner">
                    <h2 class="form__title">Запис до майстра</h2>

                    <div class="form__row">
                        <div class="form__col-wrap">
                            <div class="form__col">
                                <label for="name" class="form__label">Ім‘я:</label>
                                <div class="form__input-wrap">
                                    <svg class="form__input-image">
                                        <use xlink:href="img/svg/sprite-ico.svg#user"></use>
                                    </svg>
                                    <input type="text" name="name" id="name" class="form__input" placeholder="Іванов Іван">
                                </div>
                            </div>
                            <div class="form__col">
                                <label for="tel" class="form__label">Номер телефона: </label>
                                <div class="form__input-wrap">
                                    <svg class="form__input-image">
                                        <use xlink:href="img/svg/sprite-ico.svg#phone"></use>
                                    </svg>
                                    <input type="tel" name="tel" id="tel" class="form__input" data-mask="+38 (___) - ___-__-__">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form__row">
                        <h3 class="form__row-title">Оберіть послугу</h3>
                        <div class="form__radio-container">
                            <div class="form__radio-wrap">
                                <label class="form__radio">Чоловіча стрижка
                                    <input type="radio" name="radio" value="radio-1">
                                    <span class="form__radio-btn"></span>
                                </label>
                            </div>
                            <div class="form__radio-wrap">

                                <label class="form__radio">Мелірування, колорування, біозавивка
                                    <input type="radio" name="radio" value="radio-2">
                                    <span class="form__radio-btn"></span>
                                </label>
                            </div>
                            <div class="form__radio-wrap">
                                <label class="form__radio">Жіноча стрижка
                                    <input type="radio" checked="checked" name="radio" value="radio-3">
                                    <span class="form__radio-btn"></span>
                                </label>
                            </div>
                            <div class="form__radio-wrap">
                                <label class="form__radio">Маникюр, педикюр
                                    <input type="radio" name="radio" value="radio-4">
                                    <span class="form__radio-btn"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form__row">
                        <h3 class="form__row-title">Оберіть дату та час</h3>

                        <div class="form__col-wrap">
                            <div class="form__col">
                                <div class="form__input-wrap" data-datepicker>
                                    <input type="text" name="date" class="form__input _large" value="Дата" readonly
                                           data-datepicker-input>
                                    <div class="form__input-btn">
                                        <svg>
                                            <use xlink:href="img/svg/sprite-ico.svg#calendar"></use>
                                        </svg>
                                    </div>
                                    <div class="form__datepicker-container" data-datepicker-container></div>
                                </div>
                            </div>
                            <div class="form__col">
                                <div class="form__input-wrap" data-timepicker>
                                    <input type="text" name="time" class="form__input _large" value="Час" readonly
                                           data-timepicker-input>
                                    <div class="form__input-btn">
                                        <svg>
                                            <use xlink:href="img/svg/sprite-ico.svg#time"></use>
                                        </svg>
                                    </div>

                                    <div class="form__timepicker timepicker" data-timepicker-list>
                                        <label class="timepicker__radio">
                                            <input type="radio" name="timepicker" value="10:00-11:00">
                                            <span>10:00 - 11:00</span>
                                        </label>
                                        <label class="timepicker__radio">
                                            <input type="radio" name="timepicker" value="11:00-12:00">
                                            <span>11:00 - 12:00</span>
                                        </label>
                                        <label class="timepicker__radio">
                                            <input type="radio" name="timepicker" value="12:00-13:00" disabled>
                                            <span>12:00 - 13:00</span>
                                        </label>
                                        <label class="timepicker__radio">
                                            <input type="radio" name="timepicker" value="13:00-14:00" disabled>
                                            <span>13:00 - 14:00</span>
                                        </label>
                                        <label class="timepicker__radio">
                                            <input type="radio" name="timepicker" value="14:00-15:00">
                                            <span>14:00 - 15:00</span>
                                        </label>
                                        <label class="timepicker__radio">
                                            <input type="radio" name="timepicker" value="15:00-16:00">
                                            <span>15:00 - 16:00</span>
                                        </label>
                                        <label class="timepicker__radio">
                                            <input type="radio" name="timepicker" value="16:00-17:00">
                                            <span>16:00 - 17:00</span>
                                        </label>
                                        <label class="timepicker__radio">
                                            <input type="radio" name="timepicker" value="17:00-18:00" disabled>
                                            <span>17:00 - 18:00</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form__row">
                        <button type="submit" class="form__submit g-btn-red">Записатися на стрижку</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

</div>
