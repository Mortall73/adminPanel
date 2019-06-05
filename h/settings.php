<?php include('./__head.php'); ?>
<body>
<div style="display:none;">
    <?php include('./svgs.php'); ?>
</div>
    <div class="global-page-content">
        <?php include('./__header.php'); ?>
        <main class="main-content">
            <div class="main-content__header">
                <h1 class="main-content__title">Настройки</h1>
                <div class="main-content__actions">
                    <a href="#" class="notifications" data-is="notify" data-notifies="/ajax/getNotify.php" data-timeout="100000"></a>
                    <a href="" class="logout"></a>
                    <div class="person-icon">
                        <span>АЦ</span>
                    </div>
                </div>
            </div>
            <div class="settings-table">
                <div class="settings-table__head">
                    <div class="settings-table__head-col col-1">
                        ID
                    </div>
                    <div class="settings-table__head-col col-2">
                        Группа
                    </div>
                    <div class="settings-table__head-col col-3">
                        Тип                                                                                
                    </div>
                    <div class="settings-table__head-col col-4">
                        Значение
                    </div>
                    <div class="settings-table__head-col col-5">
                        Действие
                    </div>   
                </div>
                <?foreach(array(1,2,3,4,5,6,7,8,9) as $item):?>
                    <div class="setting">
                        <div class="setting__item col-1">
                            <span><?=$item;?></span>
                        </div>
                        <div class="setting__item col-2">
                            <span>10</span>
                        </div>
                        <div class="setting__item col-3">
                            <span>Максимальный размер файлов для загрузки в КБ	</span>
                        </div>
                        <div class="setting__item col-4">
                            <span>NPU8FxYStrXPFdg5H4rmFbZnMvYadYPznzZZH9exb2K7k</span>
                        </div>
                        <div class="setting__item col-5">
                            <a href="#" class="setting__action" data-is="ajax-modal" data-url="/ajax/getSettingEdit.php"></a>
                        </div>
                    </div>
                <?endforeach;?>
            </div>
        </main>
        <footer>
            <p class="footer-copyright">Alaska-Delivery © 2019. All rights reserved.</p>
        </footer>
    </div>
    <?php include('./__footer.php'); ?>