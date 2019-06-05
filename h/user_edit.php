<?php include('./__head.php'); ?>
    <body>
<div style="display:none;">
    <?php include('./svgs.php'); ?>
</div>
<div class="global-page-content">
    <?php include('./__header.php'); ?>
    <main class="main-content">
        <div class="main-content__header">
            <h1 class="main-content__title">Досье пользователя </h1>
            <div class="main-content__actions">
                <a href="#" class="notifications" data-is="notify" data-notifies="/ajax/getNotify.php" data-timeout="100000"></a>
                <a href="" class="logout"></a>
                <div class="person-icon">
                    <span>АЦ</span>
                </div>
            </div>
        </div>
        <div class="user-edit__page">
            <div class="user-edit__actions-bar text-right">
                <a href="#" class="btn btn-m btn-blue btn-blue--revert btn--icon">
                    <i class="icon">
                        <svg width="24" height="24">
                            <use xlink:href="#user_icon"></use>
                        </svg>
                    </i>
                    Персональные данные
                </a>
                <a href="#" class="btn  btn-m btn-blue btn--icon">
                    <i class="icon">
                        <svg width="24" height="24">
                            <use xlink:href="#dollar_icon"></use>
                        </svg>
                    </i>
                    Платежные данные
                </a>
                <a href="#" class="btn  btn-m btn-green btn--icon">
                    <i class="icon">
                        <svg width="24" height="24">
                            <use xlink:href="#package_icon"></use>
                        </svg>
                    </i>
                    Дополнительно
                </a>
                <a href="#" class="btn  btn-m btn-yellow btn--icon">
                    <i class="icon">
                        <svg width="24" height="24">
                            <use xlink:href="#package_icon"></use>
                        </svg>
                    </i>
                    Дополнительно
                </a>
            </div>
            <div class="row">
                <div class="col col-8">
                    <div class="block-w">
                        <div class="table">
                            <div class="table__title">
                                <span>Адреса для доставки </span>
                                <a href="#" class="change-link">Управление</a>
                            </div>
                            <div class="table__header">
                                <div class="row">
                                    <div class="col col-2">
                                        <span>Дата</span>
                                    </div>
                                    <div class="col col-2">
                                        <span>ZIP</span>
                                    </div>
                                    <div class="col col-2">
                                        <span>Страна</span>
                                    </div>
                                    <div class="col col-2">
                                        <span>Штат</span>
                                    </div>
                                    <div class="col col-2 text-center">
                                        <span>Город</span>
                                    </div>
                                    <div class="col col-2 text-center">
                                        <span>Адрес</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-2">
                                    <span>23.03.19</span>
                                </div>
                                <div class="col col-2">
                                    <span> 90001</span>
                                </div>
                                <div class="col col-2">
                                    <span>United States</span>
                                </div>
                                <div class="col col-2">
                                    <span>California</span>
                                </div>
                                <div class="col col-2 text-center">
                                    <span>Los Angeles</span>
                                </div>
                                <div class="col col-2 text-center">
                                    <span>Star st 21</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-2">
                                    <span>23.03.19</span>
                                </div>
                                <div class="col col-2">
                                    <span> 90001</span>
                                </div>
                                <div class="col col-2">
                                    <span>United States</span>
                                </div>
                                <div class="col col-2">
                                    <span>California</span>
                                </div>
                                <div class="col col-2 text-center">
                                    <span>Los Angeles</span>
                                </div>
                                <div class="col col-2 text-center">
                                    <span>Star st 21</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-w">
                        <div class="table">
                            <div class="table__title">
                                <span>Загруженные документы </span>
                            </div>
                            <div class="table__header">
                                <div class="row">
                                    <div class="col col-4">
                                        <span>Дата</span>
                                    </div>
                                    <div class="col col-4">
                                        <span>Название</span>
                                    </div>
                                    <div class="col col-4">
                                        <span>URL</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-4">
                                    <span>23.03.19</span>
                                </div>
                                <div class="col col-4">
                                    <span>firstdoc.pdf</span>
                                </div>
                                <div class="col col-4">
                                    <span><a href="#" class="link">docs/firstdoc.pdf</a></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-4">
                                    <span>23.03.19</span>
                                </div>
                                <div class="col col-4">
                                    <span>firstdoc.pdf</span>
                                </div>
                                <div class="col col-4">
                                    <span><a href="#" class="link">docs/firstdoc.pdf</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-w">
                        <form action="#" method="post" name="USER_COMMENT" class="default-form" data-validate>
                            <p class="default-form__title">Комментарии</p>
                            <div class="comment-block">
                                <div class="comment-block__header">
                                    <div class="person-icon">
                                        <span>ЕС</span>
                                    </div>
                                    <p class="comment-block__person-name">
                                        Екатерина Синегина
                                    </p>
                                    <div class="comment-block__time">
                                        04:20
                                    </div>
                                </div>
                                <div class="comment-block__text">
                                    <p>
                                        Изумительный дисплей iPhone XS занимает всю переднюю панель, чт Изумительный дисплей iPhone XS занимает всю переднюю панель, чт
                                    </p>
                                </div>
                            </div>
                            <div class="form-block form-block--btn">
                                <label class="form-block__input-wrap">
                                    <textarea class="form-block__input"
                                              name="USER_COMMENT_MESSAGE"
                                              placeholder="Введите текст..."
                                              rows="1"
                                              cols="80"
                                              required
                                              data-pristine-not-empty
                                              data-pristine-required-message="Поле обязательно для заполнения"
                                    ></textarea>
                                </label>
                                <button type="submit" class="btn--submit" title="Отправить"></button>
                            </div>
                        </form>
                    </div>
                    <div class="block-w">
                        <div class="table">
                            <div class="table__title">
                                <span>История входов </span>
                                <a href="#" class="change-link">Управление</a>
                            </div>
                            <div class="table__header">
                                <div class="row">
                                    <div class="col col-2">
                                        <span>Дата</span>
                                    </div>
                                    <div class="col col-2">
                                        <span>IP</span>
                                    </div>
                                    <div class="col col-2">
                                        <span>Страна</span>
                                    </div>
                                    <div class="col col-3">
                                        <span>User Agent</span>
                                    </div>
                                    <div class="col col-1 text-center">
                                        <span>Язык</span>
                                    </div>
                                    <div class="col col-2 text-center">
                                        <span>Часовой пояс</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-2">
                                    <span>23.03.19 в 15:19 </span>
                                </div>
                                <div class="col col-2">
                                    <span> 128.73.91.58   </span>
                                </div>
                                <div class="col col-2">
                                    <span><img src="/static/img/icons/usa.png" class="center-img" alt=""></span>
                                </div>
                                <div class="col col-3 text-overflow">
                                    <span>Mozilla/5.0 (Windows NT 10.0..</span>
                                </div>
                                <div class="col col-1 text-center">
                                    <span>ru_RU</span>
                                </div>
                                <div class="col col-2 text-center">
                                    <span>0 GMT</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-4">
                    <div class="block-w">
                        <form action="#" name="USER_DATA" class="task-data-form" method="post">
                            <div class="form-block user-edit-unlock">
                                <label class="form-block__checkbox-wrap">
                                    <input class="form-block__checkbox"
                                           type="checkbox" name="USER_UNLOCK" value="true">
                                    <span class="checkbox-custom"></span>
                                    <span class="form-block__checkbox-text">Разблокировать</span>
                                </label>
                            </div>
                            <div class="task-data task-data--v2">
                                <p class="task-data__title">
                                    <span>Мета</span>
                                </p>
                                <p class="task-data__item">
                                    <span class="task-data__item-name">Создано</span>
                                    <span class="task-data__item-value">1 неделю назад </span>
                                </p>
                                <p class="task-data__item">
                                    <span class="task-data__item-name">Обновлено</span>
                                    <span class="task-data__item-value">1 неделю назад </span>
                                </p>
                            </div>
                            <div class="task-data task-data--v2">
                                <p class="task-data__title">
                                    <span>Персональные данные</span>
                                </p>
                                <p class="task-data__item">
                                    <span class="task-data__item-name">Логин</span>
                                    <span class="task-data__item-value">
                                        courier
                                    </span>
                                </p>
                                <p class="task-data__item">
                                    <span class="task-data__item-name">Пароль </span>
                                    <span class="task-data__item-value">courier</span>
                                </p>
                                <p class="task-data__item">
                                    <span class="task-data__item-name">Полное имя</span>
                                    <span class="task-data__item-value">Vladislav Konuhov </span>
                                </p>
                                <p class="task-data__item">
                                    <span class="task-data__item-name">Верификация</span>
                                    <span class="task-data__item-value">Да</span>
                                </p>
                                <p class="task-data__item">
                                    <span class="task-data__item-name">Статус</span>
                                    <span class="task-data__item-value">Suspicious</span>
                                </p>
                                <p class="task-data__item">
                                    <span class="task-data__item-name">Баланс</span>
                                    <span class="task-data__item-value">165</span>
                                </p>
                            </div>
                            <div class="task-data task-data--v2">
                                <p class="task-data__title">
                                    <span>Последний вход</span>
                                </p>
                                <p class="task-data__item">
                                    <span class="task-data__item-name">Дата</span>
                                    <span class="task-data__item-value">
                                        28-02-2019 в 13:06
                                    </span>
                                </p>
                                <p class="task-data__item">
                                    <span class="task-data__item-name">IP </span>
                                    <span class="task-data__item-value">91.205.168.44 </span>
                                </p>
                                <p class="task-data__item">
                                    <span class="task-data__item-name">Страна </span>
                                    <span class="task-data__item-value">
                                        <img src="/static/img/icons/usa.png" alt="">
                                    </span>
                                </p>
                                <p class="task-data__item">
                                    <span class="task-data__item-name">Язык </span>
                                    <span class="task-data__item-value">
                                        ru_RU
                                    </span>
                                </p>
                                <p class="task-data__item">
                                    <span class="task-data__item-name">Часовой пояс </span>
                                    <span class="task-data__item-value">
                                        0 GMT 
                                    </span>
                                </p>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-green btn-save">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p class="footer-copyright">Alaska-Delivery © 2019. All rights reserved.</p>
    </footer>
</div>
<?php include('./__footer.php'); ?>