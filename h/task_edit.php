<?php include('./__head.php'); ?>
    <body>
<div style="display:none;">
    <?php include('./svgs.php'); ?>
</div>
<div class="global-page-content">
    <?php include('./__header.php'); ?>
    <main class="main-content">
        <div class="main-content__header">
            <h1 class="main-content__title">Редактирование задачи</h1>
            <div class="main-content__actions">
                <a href="#" class="notifications" data-is="notify" data-notifies="/ajax/getNotify.php" data-timeout="100000"></a>
                <a href="" class="logout"></a>
                <div class="person-icon">
                    <span>АЦ</span>
                </div>
            </div>
        </div>
        <div class="task-edit__page">
            <div class="task-edit__actions-bar">
                <a href="#" class="btn btn-info">Выбрать пользователей</a>
                <button type="submit" class="btn btn-del revert">Удалить</button>
            </div>
            <div class="row">
                <div class="col col-8">
                    <div class="block-w">
                        <form action="#" name="TASK_FORM" method="post" class="default-form">
                            <p class="default-form__title">Задача</p>
                            <div class="row">
                                <div class="col col-6">
                                    <div class="form-block">
                                        <p class="form-block__title">Оператор</p>
                                        <label class="form-block__input-wrap">
                                            <input class="form-block__input"
                                                   type="text"
                                                   name="TASK_OPERATOR"
                                                   placeholder=""
                                                   value="John Portter">
                                        </label>
                                    </div>
                                    <div class="form-block">
                                        <p class="form-block__title">Посылка</p>
                                        <label class="form-block__input-wrap">
                                            <input class="form-block__input"
                                                   type="text"
                                                   name="TASK_PACKAGE"
                                                   placeholder=""
                                                   value="Apple iPhone XS Max 64 ГБ золотой ">
                                        </label>
                                    </div>
                                    <div class="default-form__buttons">
                                        <button type="submit" class="btn btn-green btn-save">Сохранить</button>
                                        <button type="submit" class="btn btn-cancel">Отменить</button>
                                    </div>
                                </div>
                                <div class="col col-6">
                                    <div class="form-block">
                                        <p class="form-block__title">Курьер</p>
                                        <label class="form-block__input-wrap">
                                            <input class="form-block__input"
                                                   type="text"
                                                   name="TASK_COURIER"
                                                   placeholder=""
                                                   value="Jhon">
                                        </label>
                                    </div>
                                    <div class="form-block">
                                        <p class="form-block__title">Текст</p>
                                        <label class="form-block__input-wrap">
                                            <textarea class="form-block__input"
                                                      name="TASK_TEXT"
                                                      placeholder="Введите текст..."
                                                      rows="4"
                                                      cols="80"></textarea>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="block-w">
                        <form action="#" method="post" name="TASK_COMMENT" class="default-form" data-validate>
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
                                        15:43
                                    </div>
                                </div>
                                <div class="comment-block__text">
                                    <p>
                                        Изумительный дисплей iPhone XS занимает всю переднюю панель, чт Изумительный дисплей iPhone XS занимает всю переднюю панель, чт
                                    </p>
                                </div>
                            </div>
                            <div class="comment-block">
                                <div class="comment-block__header">
                                    <div class="person-icon">
                                        <span>ЕС</span>
                                    </div>
                                    <p class="comment-block__person-name">
                                        Екатерина Синегина
                                    </p>
                                    <div class="comment-block__time">
                                        15:43
                                    </div>
                                </div>
                                <div class="comment-block__text">
                                    <p>
                                        Изумительный дисплей iPhone XS занимает всю переднюю панель
                                    </p>
                                </div>
                            </div>
                            <div class="form-block form-block--btn">
                                <label class="form-block__input-wrap">
                                    <textarea class="form-block__input"
                                              name="TASK_COMMENT_MESSAGE"
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
                </div>
                <div class="col col-4">
                   <div class="block-w">
                       <form action="#" name="TASK_DATA" class="task-data-form" method="post">
                           <div class="task-data">
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
                               <p class="task-data__item">
                                   <span class="task-data__item-name">Завершено</span>
                                   <span class="task-data__item-value">1 неделю назад </span>
                               </p>
                           </div>
                           <div class="task-data">
                               <p class="task-data__title">
                                   <span>Информация</span>
                               </p>
                               <p class="task-data__item">
                                   <span class="task-data__item-name">Оператор</span>
                                   <span class="task-data__item-value"><a href="#" class="link link-decor">coperator</a></span>
                               </p>
                               <p class="task-data__item">
                                   <span class="task-data__item-name">Курьер </span>
                                   <span class="task-data__item-value">courier</span>
                               </p>
                               <p class="task-data__item">
                                   <span class="task-data__item-name">Посылка</span>
                                   <span class="task-data__item-value">Apple iPhone gdfgdg</span>
                               </p>
                           </div>
                           <div class="task-data">
                               <p class="task-data__title">
                                   <span>Действия</span>
                               </p>
                               <p class="task-data__item">
                                   <span class="task-data__item-name">Статус</span>
                                   <span class="task-data__item-value">
                                       новое
                                   </span>
                               </p>
                               <p class="task-data__item">
                                   <span class="task-data__item-name">Курьер </span>
                                   <span class="task-data__item-value"><a href="#" class="link link-decor">coperator</a></span>
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