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
                    <span class="breadcrumb active">Новости</span>
                    <span class="breadcrumb">Всего 7 записей </span>
                </div>
                <div class="main-content__actions">
                    <a href="#" class="notifications" data-is="notify" data-notifies="/ajax/getNotify.php" data-timeout="100000"></a>
                    <a href="" class="logout"></a>
                    <div class="person-icon">
                        <span>АЦ</span>
                    </div>
                </div>
            </div>
            <div class="news-btn-wrap">
                <a href="#" class="btn btn-m btn-green btn-add">Создать</a>
            </div>
            <div class="news-row row">
                <?php foreach(array(1,2,3,4,5,6) as $news):?>
                    <div class="col col-12 col-sm-12 col-md-4">
                        <div class="news-card" data-is="news-card">
                            <a href="#" class="news-card__img">
                                <img src="/static/img/news1.jpg" alt="">
                            </a>
                            <div class="news-card__settings">
                                <a href="#"
                                   data-is="ajax-modal"
                                   data-url="/ajax/getNewsEdit.php"
                                   data-params='{"newsID": "<?=$news?>"}'
                                   class="edit"
                                   title="редактировать"
                                >
                                    <svg width="24" height="24">
                                        <use xlink:href="#edit_icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="delete"
                                   data-delete
                                   data-url="/ajax/ajaxResponse/removeNews.php"
                                   data-params='{"newsID": "<?=$news?>"}'
                                   title="удалить"
                                >
                                    <svg width="24" height="24">
                                        <use xlink:href="#trash_icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="share" title="поделиться">
                                    <svg width="24" height="24">
                                        <use xlink:href="#link_icon"></use>
                                    </svg>
                                </a>
                            </div>
                            <div class="news-card__body">
                                <a href="$" class="news-card__title">
                                    Delivery Master Opened
                                </a>
                                <p class="news-card__text">
                                    С возможностью редактирования настройки не переходя на страницу
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>
        <footer>
            <p class="footer-copyright">Alaska-Delivery © 2019. All rights reserved.</p>
        </footer>
    </div>
    <?php include('./__footer.php'); ?>