<?php include('./__head.php'); ?>
<?php $page = 'index'; ?>
<body>
<div style="display:none;">
    <?php include('./svgs.php'); ?>
</div>
<div class="global-page-content">
    <?php include('./__header.php'); ?>
    <main class="main-content">
        <div class="main-content__header">
            <h1 class="main-content__title">Настройки курера</h1>
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
                <a href="tab-1" class="tab-button is-active" data-tab-button>Документы верификации</a>
                <a href="tab-2" class="tab-button" data-tab-button>Биллинговые операции</a>
                <a href="tab-3" class="tab-button" data-tab-button>Вознаграждения</a>
                <a href="tab-4" class="tab-button" data-tab-button>Методы оплаты </a>
                <a href="tab-5" class="tab-button" data-tab-button>Статусы</a>
            </div>
            <div class="tabs-content">
                <div class="tab__body" data-tab-content="tab-1">
                    <form action="#" name="COURIER_DOCS" method="post">
                        <div class="table">
                            <div class="table__header space-between">
                                <span>Название</span>
                                <a href="#" class="btn btn-green btn-add">Создать</a>
                            </div>
                            <div class="row">
                                <div class="col col-9">
                                    <span>Driver Licence</span>
                                </div>
                                <div class="col col-3 text-right">
                                    <button class="btn btn-del" type="submit">Удалить</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-9">
                                    <span>Driver Licence</span>
                                </div>
                                <div class="col col-3 text-right">
                                    <button class="btn btn-del" type="submit">Удалить</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-9">
                                    <span>Driver Licence</span>
                                </div>
                                <div class="col col-3 text-right">
                                    <button class="btn btn-del" type="submit">Удалить</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab__body" data-tab-content="tab-2" style="display:none;">
                    <form action="#" name="BILLING_OPERATIONS" method="post">
                        <div class="table">
                            <div class="table__header">
                                <span>Название</span>
                            </div>
                            <div class="row">
                                <div class="col col-12">
                                    <div class="form-block mar-bottom-0">
                                        <label class="form-block__checkbox-wrap">
                                            <input class="form-block__checkbox" type="checkbox" name="BILLING_OPERATION_1" value="true">
                                            <span class="checkbox-custom"></span>
                                            <span class="form-block__checkbox-text">Driver Licence  </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-12">
                                    <div class="form-block mar-bottom-0">
                                        <label class="form-block__checkbox-wrap">
                                            <input class="form-block__checkbox" type="checkbox" name="BILLING_OPERATION_2" value="true">
                                            <span class="checkbox-custom"></span>
                                            <span class="form-block__checkbox-text">Driver Licence  </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-12">
                                    <div class="form-block mar-bottom-0">
                                        <label class="form-block__checkbox-wrap">
                                            <input class="form-block__checkbox" type="checkbox" name="BILLING_OPERATION_3" value="true">
                                            <span class="checkbox-custom"></span>
                                            <span class="form-block__checkbox-text">Driver Licence  </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-btn-wrap">
                            <button type="submit" class="btn btn-green btn-save">Сохранить</button>
                        </div>
                    </form>
                </div>
                <div class="tab__body" data-tab-content="tab-3" style="display:none;">
                    <div class="table">
                        <div class="table__header">
                            <div class="row">
                                <div class="col col-1">
                                    <span>ID</span>
                                </div>
                                <div class="col col-2">
                                    <span>Группа</span>
                                </div>
                                <div class="col col-5">
                                    <span>Тип </span>
                                </div>
                                <div class="col col-2">
                                    <span>Значение</span>
                                </div>
                                <div class="col col-2 text-center">
                                    <span>Действие</span>
                                </div>
                            </div>
                        </div>
                        <?foreach(array(1,2,3,4,5) as $item):?>
                            <div class="row">
                                <div class="col col-1">
                                    <span>6</span>
                                </div>
                                <div class="col col-2">
                                    <span>20</span>
                                </div>
                                <div class="col col-5">
                                    <span>Вознаграждение курьера за отправку посылки</span>
                                </div>
                                <div class="col col-2">
                                    <span>15</span>
                                </div>
                                <div class="col col-2">
                                    <a href="#" class="setting__action"></a>
                                </div>
                            </div>
                        <?endforeach;?>
                    </div>
                </div>

                <div class="tab__body" data-tab-content="tab-4" style="display:none;">
                    <div class="table">
                        <div class="table__header space-between">
                            <span>Название</span>
                            <a href="#" class="btn btn-green btn-add">Создать</a>
                        </div>
                        <?foreach(array(1,2,3,4,5) as $item2):?>
                            <div class="row">
                                <div class="col col-8">
                                    <span>PayPal</span>
                                </div>
                                <div class="col col-4 text-right">
                                    <a href="#" class="change-link">Изменить</a>
                                    <a href="#" class="delete-link">Удалить</a>
                                </div>
                            </div>
                        <?endforeach;?>
                    </div>
                </div>

                <div class="tab__body" data-tab-content="tab-5" style="display:none;">
                    <form action="#" name="COURIER_STATUS" method="post" data-validate>
                        <div class="table">
                            <div class="row no-bg row--align-start">
                                <div class="col col-3">
                                    <div class="form-block">
                                        <p class="form-block__title">New</p>
                                        <label class="form-block__input-wrap">
                                            <input class="form-block__input" type="text" name="COURIER_STATUS_NEW" placeholder="Введите текст" value="New"
                                                   required
                                                   data-pristine-not-empty
                                                   data-pristine-required-message="Поле обязательно для заполнения">
                                        </label>
                                    </div>
                                </div>
                                <div class="col col-3">
                                    <div class="form-block">
                                        <p class="form-block__title">Ready</p>
                                        <label class="form-block__input-wrap">
                                            <input class="form-block__input" type="text" name="COURIER_STATUS_READY" placeholder="Введите текст" value="Ready"
                                                   required
                                                   data-pristine-not-empty
                                                   data-pristine-required-message="Поле обязательно для заполнения">
                                        </label>
                                    </div>
                                </div>
                                <div class="col col-3">
                                    <div class="form-block">
                                        <p class="form-block__title">Going to die </p>
                                        <label class="form-block__input-wrap">
                                            <input class="form-block__input" type="text" name="COURIER_STATUS_TO_DIE" placeholder="Введите текст" value="Going to die "
                                                   required
                                                   data-pristine-not-empty
                                                   data-pristine-required-message="Поле обязательно для заполнения">
                                        </label>
                                    </div>
                                </div>
                                <div class="col col-3">
                                    <div class="form-block">
                                        <p class="form-block__title">Suspicious</p>
                                        <label class="form-block__input-wrap">
                                            <input class="form-block__input" type="text" name="COURIER_STATUS_SUSPIC" placeholder="Введите текст" value="Suspicious"
                                                   required
                                                   data-pristine-not-empty
                                                   data-pristine-required-message="Поле обязательно для заполнения">
                                        </label>
                                    </div>
                                </div>
                                <div class="col col-3">
                                    <div class="form-block">
                                        <p class="form-block__title">Die</p>
                                        <label class="form-block__input-wrap">
                                            <input class="form-block__input" type="text" name="COURIER_STATUS_DIE" placeholder="Введите текст" value="Die"
                                                   required
                                                   data-pristine-not-empty
                                                   data-pristine-required-message="Поле обязательно для заполнения">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-btn-wrap">
                            <button type="submit" class="btn btn-green btn-save">Сохранить</button>
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
