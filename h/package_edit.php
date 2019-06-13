<?php include('./__head.php'); ?>
<body>
<div style="display:none;">
    <?php include('./svgs.php'); ?>
</div>
<div class="global-page-content">
<?php include('./__header.php'); ?>
    <main class="main-content">
        <div class="main-content__header">
            <h1 class="main-content__title">Редактирование посылки</h1>
            <div class="main-content__actions">
                <a href="#" class="notifications" data-is="notify" data-notifies="/ajax/getNotify.php" data-timeout="100000"></a>
                <a href="" class="logout"></a>
                <div class="person-icon">
                    <span>АЦ</span>
                </div>
            </div>
        </div>
        <div class="tabs" data-is="tabs">
            <div class="tabs__header">
                <a href="tab-1" class="tab-button is-active" data-tab-button>Первая вкладка</a>
                <a href="tab-2" class="tab-button" data-tab-button>Вторая вкладка</a>
                <a href="tab-3" class="tab-button" data-tab-button>Третья вкладка</a>
            </div>
            <div class="tabs-content">
                <div class="tab__body" data-tab-content="tab-1">
                    <form action="#" method="post" name="package_edit" enctype="multipart/form-data">
                        <input type="hidden" name="PACKAGE_ID" value="123">
                        <div class="form-row">
                            <div class="row">
                                <div class="col col-12 col-md-3">
                                    <div class="form-block">
                                        <p class="form-block__title">Назначение</p>
                                        <label class="form-block__select-wrap">
                                            <select type="text" name="PACKAGE_TARGET" value="" class="form-block__select">
                                                <option value="-1" selected disabled>Выбеите значение</option>
                                                <option value="Перепродажа">Перепродажа</option>
                                                <option value="Перепродажа 2">Перепродажа 2</option>
                                            </select>
                                            <i class="form-block__select-icon"></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-5">
                                    <div class="form-block">
                                        <p class="form-block__title">Адрес</p>
                                        <label class="form-block__select-wrap">
                                            <select type="text" name="PACKAGE_ADDRESS" value="" class="form-block__select">
                                                <option value="-1" selected disabled>Выбеите значение</option>
                                                <option value="Перепродажа">Перепродажа</option>
                                                <option value="Перепродажа 2">Перепродажа 2</option>
                                            </select>
                                            <i class="form-block__select-icon"></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-4">
                                    <div class="form-block">
                                        <p class="form-block__title">Получатель</p>
                                        <label class="form-block__input-wrap">
                                            <input class="form-block__input" type="text" name="PACKAGE_RECIPIENT" placeholder="" value="John Portter">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row" data-package-inputs>
                            <p class="form-row__title col col-12" style="padding: 0;">Содержимое посылки</p>
                            <div class="row mobile-mb-20" data-is="package-edit-row">
                                <div class="col col-12 col-md-4">
                                    <div class="form-block">
                                        <label class="form-block__input-wrap has-icon">
                                            <i class="icon" style="background-image: url('/static/img/icons/input_flag.png')"></i>
                                            <input class="form-block__input" type="text" name="PACKAGE_INCLUDE_1" placeholder="" value="AirPods">
                                        </label>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-3">
                                    <div class="form-block">
                                        <label class="form-block__input-wrap has-icon">
                                            <i class="icon" style="background-image: url('/static/img/icons/dollar_icon.png')"></i>
                                            <input class="form-block__input" type="text" name="PACKAGE_INCLUDE_1_PRICE" placeholder="" value="2 000">
                                        </label>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-3">
                                    <div class="form-block" data-is="number-input">
                                        <label class="form-block__input-wrap has-icon">
                                            <i class="icon" style="background-image: url('/static/img/icons/pack_icon.png')"></i>
                                            <input  class="form-block__input"
                                                    data-number-input
                                                    data-min="1"
                                                    data-max="100"
                                                    data-step="1"
                                                    type="text"
                                                    name="PACKAGE_INCLUDE_1_COUNT"
                                                    placeholder=""
                                                    value="10"
                                             >
                                        </label>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-2">
                                    <button type="button" class="btn btn-del" data-delete="/ajax/deletePackageEditRow.php?PACKAGE_ID=123">Удалить</button>
                                </div>
                            </div>
                            <div class="row mobile-mb-20" data-is="package-edit-row">
                                <div class="col col-12 col-md-4">
                                    <div class="form-block">
                                        <label class="form-block__input-wrap has-icon">
                                            <i class="icon" style="background-image: url('/static/img/icons/input_flag.png')"></i>
                                            <input class="form-block__input" type="text" name="PACKAGE_INCLUDE_2" placeholder="" value="AirPods">
                                        </label>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-3">
                                    <div class="form-block">
                                        <label class="form-block__input-wrap has-icon">
                                            <i class="icon" style="background-image: url('/static/img/icons/dollar_icon.png')"></i>
                                            <input class="form-block__input" type="text" name="PACKAGE_INCLUDE_2_PRICE" placeholder="" value="2 000">
                                        </label>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-3">
                                    <div class="form-block" data-is="number-input">
                                        <label class="form-block__input-wrap has-icon">
                                            <i class="icon" style="background-image: url('/static/img/icons/pack_icon.png')"></i>
                                            <input  class="form-block__input"
                                                    data-number-input
                                                    data-min="1"
                                                    data-max="100"
                                                    data-step="1"
                                                    type="text"
                                                    name="PACKAGE_INCLUDE_2_COUNT"
                                                    placeholder=""
                                                    value="10"
                                             >
                                        </label>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-2">
                                    <button type="button" class="btn btn-del" data-delete="/ajax/deletePackageEditRow.php?PACKAGE_ID=123">Удалить</button>
                                </div>
                            </div>
                            <a href="#" class="btn btn-green btn-add" data-add-inputs="/ajax/getPackageInclude.php?PACKAGE_ID=123">Добавить</a>
                        </div>
                        <div class="form-row" data-package-inputs>
                            <p class="form-row__title col col-12" style="padding: 0;">Трек номер</p>
                            <div class="row" data-is="package-edit-row">
                                <div class="col col-12 col-md-5">
                                    <div class="form-block">
                                        <label class="form-block__select-wrap has-icon">
                                            <i class="icon" style="background-image: url('/static/img/icons/car_icon.png')"></i>
                                            <select type="text" name="PACKAGE_TRACK_1" value="" class="form-block__select">
                                                <option value="-1" selected disabled>Выберите службу доставки</option>
                                                <option value="Перепродажа">Перепродажа</option>
                                                <option value="Перепродажа 2">Перепродажа 2</option>
                                            </select>
                                            <i class="form-block__select-icon"></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-5">
                                    <div class="form-block">
                                        <label class="form-block__input-wrap has-icon">
                                            <i class="icon" style="background-image: url('/static/img/icons/hash_icon.png')"></i>
                                            <input class="form-block__input" type="text" name="PACKAGE_TRACK_1_NUMBER" placeholder="" value="СФ1532ДД-ШФЮ-41">
                                        </label>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-2 mobile-mb-20">
                                    <button type="button" class="btn btn-del" data-delete="/ajax/deletePackageEditRow.php?PACKAGE_ID=123">Удалить</button>
                                </div>
                            </div>
                            <div class="row mobile-mb-20" data-is="package-edit-row">
                                <div class="col col-12 col-md-5">
                                    <div class="form-block">
                                        <label class="form-block__select-wrap has-icon">
                                            <i class="icon" style="background-image: url('/static/img/icons/car_icon.png')"></i>
                                            <select type="text" name="PACKAGE_TRACK_2" value="" class="form-block__select">
                                                <option value="-1" selected disabled>Выберите службу доставки</option>
                                                <option value="Перепродажа">Перепродажа</option>
                                                <option value="Перепродажа 2">Перепродажа 2</option>
                                            </select>
                                            <i class="form-block__select-icon"></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-5">
                                    <div class="form-block">
                                        <label class="form-block__input-wrap has-icon">
                                            <i class="icon" style="background-image: url('/static/img/icons/hash_icon.png')"></i>
                                            <input class="form-block__input" type="text" name="PACKAGE_TRACK_2_NUMBER" placeholder="Введите трек номер" value="">
                                        </label>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-2">
                                    <button type="button" class="btn btn-del" data-delete="/ajax/deletePackageEditRow.php?PACKAGE_ID=123">Удалить</button>
                                </div>
                            </div>
                            <a href="#" class="btn btn-green btn-add" data-add-inputs="/ajax/getPackageTrack.php?PACKAGE_ID=123">Добавить</a>
                        </div>
                        <div class="form-row">
                            <div class="row">
                                <div class="col col-12 col-md-8">
                                    <div class="form-block">
                                        <p class="form-block__title">Комментарий</p>
                                        <label class="form-block__input-wrap">
                                            <textarea class="form-block__input" value="Comment..." name="PACKAGE_COMMENT" rows="6" cols="80"></textarea>
                                        </label>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-4">
                                    <div class="form-block">
                                        <p class="form-block__title">Магазин</p>
                                        <label class="form-block__input-wrap has-icon">
                                            <i class="icon" style="background-image: url('/static/img/icons/cart_icon.png')"></i>
                                            <input class="form-block__input" type="text" name="PACKAGE_SHOP" placeholder="Введите магазин" value="applestore.com">
                                        </label>
                                    </div>
                                    <div class="form-block">
                                        <label class="form-block__checkbox-wrap">
                                            <input class="form-block__checkbox" type="checkbox" name="PACKAGE_PICKUP" value="true" checked>
                                            <span class="checkbox-custom"></span>
                                            <span class="form-block__checkbox-text">Pick-up</span>
                                        </label>
                                    </div>
                                    <div class="form-block">
                                        <label class="form-block__checkbox-wrap">
                                            <input class="form-block__checkbox" type="checkbox" name="PACKAGE_SIGNATURE" value="true">
                                            <span class="checkbox-custom"></span>
                                            <span class="form-block__checkbox-text">Signature</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btns-row">
                            <button type="submit" class="btn btn-green btn-save">Сохранить</button>
                        </div>
                        <div class="btns-row">
                            <a href="" class="btn btn-warning"> Сообщите об адресе пикапа в комметарии! </a>
                            <a href="" class="btn btn-success"> Сообщите об адресе пикапа в комметарии! </a>
                            <a href="" class="btn btn-info"> Информационное сообщение от системы </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
         <p class="footer-copyright">Alaska-Delivery © 2019. All rights reserved.</p>
    </footer>
</div>
<?php include('./__footer.php'); ?>
