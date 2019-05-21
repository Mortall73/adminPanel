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
                <span class="breadcrumb active">Чаты</span>
                <span class="breadcrumb">Всего 7 чатов </span>
            </div>
            <div class="main-content__actions">
                <a href="#" class="notifications" data-is="notify" data-notifies="/ajax/getNotify.php" data-timeout="100000"></a>
                <a href="" class="logout"></a>
                <div class="person-icon">
                    <span>АЦ</span>
                </div>
            </div>
        </div>
        <div class="chats">
            <div class="row">
                <div class="col col-12">
                    <?foreach(array(1,2,3,4) as $chat):?>
                        <a href="#" class="chat-item">
                            <div class="col col-1">
                            <span class="chat-item__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                                    <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                                    <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                </svg>
                            </span>
                            </div>
                            <div class="col col-3">
                            <span class="chat-item__name">
                                S.Shurov
                            </span>
                            </div>
                            <div class="col col-3">
                            <span class="chat-item__status">
                                Последнее сообщение от S.Shurov
                            </span>
                            </div>
                            <div class="col col-3">
                            <span class="chat-item__message">
                                I've finished it! See you so... I've finished it! See you so...
                            </span>
                            </div>
                            <div class="col col-2">
                            <span class="chat-item__time">
                               2 month later
                            </span>
                            </div>
                        </a>
                        <a href="#" class="chat-item">
                            <div class="col col-1">
                            <span class="chat-item__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase">
                                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                </svg>
                                <span class="chat-item__notify">
                                    8
                                </span>
                            </span>
                            </div>
                            <div class="col col-3">
                            <span class="chat-item__name">
                                S.Shurov
                            </span>
                            </div>
                            <div class="col col-3">
                            <span class="chat-item__status">
                                Последнее сообщение от S.Shurov
                            </span>
                            </div>
                            <div class="col col-3">
                            <span class="chat-item__message">
                                I've finished it! See you so... I've finished it! See you so...
                            </span>
                            </div>
                            <div class="col col-2">
                            <span class="chat-item__time">
                               2 month later
                            </span>
                            </div>
                        </a>
                    <?endforeach;?>
                </div>
            </div>
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