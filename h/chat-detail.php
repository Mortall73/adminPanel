<?php include('./__head.php'); ?>
    <body>
<div style="display:none;">
    <?php include('./svgs.php'); ?>
</div>
<div class="global-page-content">
    <?php include('./__header.php'); ?>
    <main class="main-content">
        <div class="main-content__header">
            <div class="breadcrumbs">
                <span class="breadcrumb active">Чат Менеджеры</span>
                <span class="breadcrumb">Всего 250 собщений</span>
            </div>
            <div class="main-content__actions">
                <a href="#" class="notifications" data-is="notify" data-notifies="/ajax/getNotify.php" data-timeout="100000"></a>
                <a href="" class="logout"></a>
                <div class="person-icon">
                    <span>АЦ</span>
                </div>
            </div>
        </div>
        <div class="chat-detail">
            <form action="/ajax/chat.php"
                  name="CHAT_FORM"
                  method="post"
                  class="chat chat-dialog-form"
                  data-is="chat"
                  data-interval="10000"
            >
                <div class="chat-dialog-wrap" data-simplebar>
                    <div class="chat-dialog" data-chat-dialog>
                        <div class="chat-message">
                            <div class="chat-message__header">
                                <div class="person-icon">
                                    <span>ЕС</span>
                                </div>
                                <p class="chat-message__person-name">
                                    Екатерина Синегина
                                </p>
                                <div class="chat-message__time">
                                    15:43
                                </div>
                            </div>
                            <div class="chat-message__text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                </p>
                            </div>
                        </div>
                        <div class="chat-message chat-message--self">
                            <div class="chat-message__header">
                                <div class="person-icon">
                                    <span>WQ</span>
                                </div>
                                <p class="chat-message__person-name">
                                    Вы
                                </p>
                                <div class="chat-message__time">
                                    15:47
                                </div>
                            </div>
                            <div class="chat-message__text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                </p>
                            </div>
                        </div>
                        <div class="chat-message">
                            <div class="chat-message__header">
                                <div class="person-icon">
                                    <span>ЕС</span>
                                </div>
                                <p class="chat-message__person-name">
                                    Екатерина Синегина
                                </p>
                                <div class="chat-message__time">
                                    15:43
                                </div>
                            </div>
                            <div class="chat-message__text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                </p>
                            </div>
                            <div class="chat-message__files">
                                <a href="#" download="#" class="chat-message__file">first_file.txt</a>
                                <a href="#" download="#" class="chat-message__file">first_file.txt</a>
                                <a href="#" download="#" class="chat-message__file">first_file.txt</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chat-actions">
                    <div class="person-icon">
                        <span>WQ</span>
                    </div>
                    <div class="form-block">
                        <label class="form-block__input-wrap">
                            <textarea class="form-block__input"
                                      name="CHAT_MESSAGE"
                                      placeholder="Введите текст сообщения..."
                                      rows="1"
                                      required
                                      data-pristine-required-message="Поле обязательно для заполнения"
                                      cols="80"></textarea>
                        </label>
                    </div>
                    <div class="chat__file" title="Прикрепить файл">
                        <input type="file" name="CHAT_FILES" class="chat__file-input">
                    </div>
                    <button type="submit" class="chat__submit" title="Отправить"></button>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <p class="footer-copyright">Alaska-Delivery © 2019. All rights reserved.</p>
    </footer>
</div>
<?php include('./__footer.php'); ?>