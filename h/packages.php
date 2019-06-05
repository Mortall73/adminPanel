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
            <div class="breadcrumbs">
                <span class="breadcrumb active">Посылки</span>
                <span class="breadcrumb">Всего 7 посылок </span>
            </div>
            <div class="main-content__actions">
                <a href="#" class="notifications" data-is="notify" data-notifies="/ajax/getNotify.php" data-timeout="100000"></a>
                <a href="" class="logout"></a>
                <div class="person-icon">
                    <span>АЦ</span>
                </div>
            </div>
        </div>
        <div class="packages-toolbar">
            <form action="#" method="post" data-packages-action  name="packages_actions" enctype="multipart/form-data"  class="actions">
                <label class="actions-btn add" data-submit>
                    <input style="display: none;" type="radio" name="PACKAGES_ACTION" value="success">
                    Одобрить
                </label>
                <label class="actions-btn archive" data-submit>
                    <input style="display: none;" type="radio" name="PACKAGES_ACTION" value="archive">
                    В архив
                </label>
                <label class="actions-btn delete" data-submit>
                    <input style="display: none;" type="radio" name="PACKAGES_ACTION" value="delete">
                    Удалить
                </label>
                <input type="hidden" name="PACKAGES" data-check-packages value="">
            </form>
            <div class="actions">
                <div class="search-block" data-is="packages-search">
                    <a href="#" class="search-block__open" data-open-search></a>
                    <form action="#" method="get" name="packages_search" enctype="multipart/form-data" class="search-block-inner" data-search-block>
                        <input type="text" name="q" value="" class="search-block__search">
                        <div class="form-block">
                            <label class="form-block__checkbox-wrap">
                                <input class="form-block__checkbox" type="checkbox" name="SEARCH_PACKAGES_ID" value="true">
                                <span class="checkbox-custom"></span>
                                <span class="form-block__checkbox-text">по ID</span>
                            </label>
                        </div>
                        <button type="submit" class="search-block__submit"></button>
                    </form>
                </div>
                <div class="settings">
                    <button data-dropdown="#dropdown-standard" class="settings-trigger"></button>
                    <div class="dropdown-menu dropdown-anchor-top-left dropdown-has-anchor" id="dropdown-standard">
                    	<a href="#" class="settings__link">
                            <i class="icon" style="background-image: url('/static/img/icons/archive_blue.png');"></i>
                            Архив
                        </a>
                        <a href="#" class="settings__link">
                            <i class="icon" style="background-image: url('/static/img/icons/task_icon.png');"></i>
                            Настройки задач
                        </a>
                        <a href="#" class="settings__link">
                            <i class="icon" style="background-image: url('/static/img/icons/search_blue.png');"></i>
                            Настройки Package Inspection FormНастройк
                        </a>
                        <a href="#" class="settings__link">
                            <i class="icon" style="background-image: url('/static/img/icons/cart_blue.png');"></i>
                            Настройки Delivery Track Services
                        </a>
                    </div>
                </div>
                <form action="#" name="packages_sorting" method="get" data-packages-sorting class="sorting">
                    <div class="form-block">
                        <label class="form-block__select-wrap">
                            <select type="text" name="PACKAGES_VISIBLE" value="" class="form-block__select">
                                <option value="15" selected>Показать: 15</option>
                                <option value="20">Показать: 20</option>
                                <option value="25">Показать: 25</option>
                            </select>
                            <i class="form-block__select-icon"></i>
                        </label>
                    </div>
                </form>
                <a href="/h/package_edit.php" class="btn btn-add btn-green">Создать</a>
            </div>
        </div>
        <div class="packages-table">
            <div class="packages-table__head">
                <div class="row">
                    <div class="col mw-30">
                        <div class="form-block">
                            <label class="form-block__checkbox-wrap">
                                <input class="form-block__checkbox" data-check-all type="checkbox" name="" value="" >
                                <span class="checkbox-custom"></span>
                            </label>
                        </div>
                    </div>
                    <div class="col col-1">
                        <span>ID</span>
                    </div>
                    <div class="col col-2">
                        <span>Получатель</span>
                    </div>
                    <div class="col col-2">
                        <span>Статус</span>
                    </div>
                    <div class="col col-1">
                        <span>Цена</span>
                    </div>
                    <div class="col col-2">
                        <span>Назначение</span>
                    </div>
                    <div class="col col-2">
                        <span>Трек</span>
                    </div>
                    <div class="col col-2">
                        <span>Магазин</span>
                    </div>
                </div>
            </div>
            <div class="packages-table__body">
                <?foreach(array(1,2,3,4,5) as $package):?>
                    <div class="package" data-is="package">
                        <div class="row">
                            <div class="col mw-30 package__settings">
                                <div class="form-block">
                                    <label class="form-block__checkbox-wrap">
                                        <input class="form-block__checkbox" data-package-checkbox type="checkbox" name="PACKAGE_ID_<?=$package;?>" value="<?=$package;?>" >
                                        <span class="checkbox-custom"></span>
                                    </label>
                                </div>
                                <a href="#" class="js-settngs-trigger" data-detail="/ajax/getPackageDetail.php?package_id=<?=$package;?>"></a>
                                <a href="#" class="js-option-trigger" data-options="/ajax/getPackageCommentModal.php?package_id=<?=$package;?>"></a>
                            </div>
                            <div class="col col-1 package__id">
                                <span>2951-<?=$package;?></span>
                            </div>
                            <div class="col col-2 package__person">
                                <span>John Portter</span>
                                <p class="package__person-address">
                                    United States, 90001, <br>  California, Los Angeles, Star st 21
                                </p>
                            </div>
                            <div class="col col-2 package__status">
                                <span class="package__status-label warning">Not received </span> <?/*success - class*/?>
                            </div>
                            <div class="col col-1 package__cost">
                                <span>$ 2 000</span>
                            </div>
                            <div class="col col-2 package__target">
                                <span>
                                    <i class="icon" style="background-image: url('/static/img/icons/arr_yellow.png');"></i>
                                    Пересылка
                                </span>
                            </div>
                            <div class="col col-2 package__track">
                                <a href="#">XXX100011XXXXX</a>
                            </div>
                            <div class="col col-2 package__shop">
                                <a href="#">applestore.com</a>
                            </div>
                        </div>
                        <div class="row package-labels-row">
                            <div class="package-labels">
                                <a href="/h/package_edit.php"  class="package-label package-label--btn">
                                    <span>Пересоздать лейбл 2</span>
                                </a>
                                <div class="package-label">
                                    <i class="icon" style="background-image: url('/static/img/icons/warn_red.png');"></i>
                                    <span>Пересоздать лейбл</span>
                                </div>
                                <div class="package-label">
                                    <i class="icon" style="background-image: url('/static/img/icons/check_g.png');"></i>
                                    <span>Одобрена</span>
                                </div>
                                <div class="package-label">
                                    <i class="icon" style="background-image: url('/static/img/icons/refresh.png');"></i>
                                    <span>Обновлено: 04.03.19</span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?endforeach;?>
            </div>
        </div>
    </main>
    <footer>
         <p class="footer-copyright">Alaska-Delivery © 2019. All rights reserved.</p>
    </footer>
</div>
<?php include('./__footer.php'); ?>
