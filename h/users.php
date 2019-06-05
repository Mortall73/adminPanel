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
        <div class="users-actions-bar packages-toolbar">
            <div class="search-block" data-is="packages-search">
                <a href="#" class="search-block__open" data-open-search=""></a>
                <form action="#" method="get" name="users_search" enctype="multipart/form-data" class="search-block-inner" data-search-block>
                    <input type="text" name="q" value="" class="search-block__search">
                    <button type="submit" class="search-block__submit"></button>
                </form>
            </div>
            <a href="#" class="btn btn-green btn-add">Создать</a>
        </div>
        <div class="settings-table">
            <div class="settings-table__head">
                <div class="settings-table__head-col col-3">
                    Логин
                </div>
                <div class="settings-table__head-col col-3">
                    Имя
                </div>
                <div class="settings-table__head-col col-3">
                    Роль
                </div>
                <div class="settings-table__head-col col-3">
                    Действия
                </div>
            </div>
            <?foreach(array(1,2,3,4,5,6,7,8,9) as $item):?>
                <div class="setting user">
                    <div class="setting__item col-3">
                        <span>admin3</span>
                    </div>
                    <div class="setting__item col-3">
                        <span>N/A</span>
                    </div>
                    <div class="setting__item col-3">
                        <span>Admin</span>
                    </div>
                    <div class="setting__item col-3">
                        <a href="#" class="setting__action"></a>
                        <a href="#" class="setting__action user-docs">
                            <i class="icon">
                                <svg>
                                    <use xlink:href="#user_icon"></use>
                                </svg>
                            </i>
                            Досье
                        </a>
                    </div>
                </div>
            <?endforeach;?>
        </div>
        <ul class="paginate">
            <li class="paginate__item active">
                <a href="#" class="paginate__item-link">1</a>
            </li>
            <li class="paginate__item">
                <a href="#" class="paginate__item-link">2</a>
            </li>
            <li class="paginate__item">
                <a href="#" class="paginate__item-link">3</a>
            </li>
            <li class="paginate__item">
                <a href="#" class="paginate__item-link">4</a>
            </li>
            <li class="paginate__item">
                <a href="#" class="paginate__item-link">5</a>
            </li>
            <li class="paginate__item">
                <a href="#" class="paginate__item-link">15</a>
            </li>
        </ul>
    </main>
    <footer>
        <p class="footer-copyright">Alaska-Delivery © 2019. All rights reserved.</p>
    </footer>
</div>
<?php include('./__footer.php'); ?>