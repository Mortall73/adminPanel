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
            <h1 class="main-content__title">Панель управления</h1>
            <div class="main-content__actions">
                <a href="#" class="notifications" data-is="notify" data-notifies="/ajax/getNotify.php" data-timeout="100000"></a>
                <a href="" class="logout"></a>
                <div class="person-icon">
                    <span>АЦ</span>
                </div>
            </div>
        </div>
        <div class="main-row">
            <div class="left">
                <div class="cards">
                    <div class="cards-row">
                        <div class="card">
                            <div class="card__header">
                                <p class="card__title">Все посылки</p>
                                <i class="card__icon" style="background-image: url('/static/img/icons/package_b.png');"></i>
                            </div>
                            <div class="card__body">
                                <div class="card__left">
                                    <p class="card__text-big">25 460<span class="postfix">$</span></p>
                                    <p class="card__text-low">сумма всех посылок</p>
                                </div>
                                <div class="card__right">
                                    <p class="card__text-big">207<span class="postfix">шт.</span></p>
                                    <p class="card__text-low">количество</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card--white">
                            <div class="card__header">
                                <p class="card__title">Лучший оператор</p>
                                <i class="card__icon" style="background-image: url('/static/img/icons/headphones_blue.png');"></i>
                            </div>
                            <div class="card__body">
                                <div class="card__left">
                                    <p class="card__text-big">Разин</p>
                                    <p class="card__text-low">Степан</p>
                                </div>
                                <div class="card__right">
                                    <p class="card__text-big">284<span class="postfix">ч.</span></p>
                                    <p class="card__text-low">среднее время</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="last-transactions" data-is="transactions">
                    <div class="last-transactions__header">
                        <p class="last-transactions__title">Последние транзакции</p>
                        <a href="#" class="last-transactions__icon" data-refresh data-url="/ajax/getTransactions.php"></a>
                    </div>
                    <form action="/ajax/ajaxResponse/transactionResponse.php" method="post" name="packages_accept" enctype="multipart/form-data">
                        <ul class="last-transactions__list" data-transactions-container>
                            <? foreach(array(1,2,3,4,5,6,7) as $transaction):{?>
                                <li class="last-transaction" data-is="transaction">
                                    <input data-id hidden type="radio" name="TRANSACTION_ID" value="<?=$transaction;?>">
                                    <div class="last-transaction-props">
                                        <span class="last-transaction__name">s_shnurov</span>
                                        <span class="last-transaction__coast">250 000 руб.</span>
                                        <span class="last-transaction__time">12.03.2019 в 22:34</span>
                                    </div>
                                    <div class="last-transaction-activities">
                                        <label class="accept">
                                            <input data-submit hidden type="radio" name="TRANSACTION_<?=$transaction?>" value="eccept">
                                            Одобрить
                                        </label>
                                        <label class="denial">
                                            <input data-submit hidden type="radio" name="TRANSACTION_<?=$transaction?>" value="denial">
                                            Отклонить
                                        </label>
                                    </div>
                                </li>
                            <?} endforeach;?>
                        </ul>
                    </form>
                </div>
                <div class="main-chart">
                    <div class="main-chart__header">
                        <p class="main-chart__title">Количество посылок</p>
                        <form action="/ajax/getChart.php" method="get" name="packages_graph" enctype="multipart/form-data" data-graph-form>
                            <div class="form-block">
                                <label class="form-block__select-wrap">
                                    <select type="text" name="PACKAGE_PERIOD" value="" class="form-block__select">
                                        <option value="4" selected>Последние 4 недели</option>
                                        <option value="2">Последние 2 недели</option>
                                    </select>
                                    <i class="form-block__select-icon"></i>
                                </label>
                            </div>
                        </form>
                    </div>
                    <div id="chart" data-url="/ajax/getChart.php" style="height: 230px; width: 100%;">
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="cards">
                    <div class="cards-row">
                        <div class="card card--light">
                            <div class="card__header">
                                <p class="card__title">Кто на сайте</p>
                                <i class="card__icon" style="background-image: url('/static/img/icons/online.png');"></i>
                            </div>
                            <div class="card__body">
                                <ul class="card__list">
                                    <li>
                                        <a href="#">Екатерина Синегина</a>
                                    </li>
                                    <li>
                                        <a href="#">Екатерина Синегина</a>
                                    </li>
                                    <li>
                                        <a href="#">Екатерина Синегина</a>
                                    </li>
                                    <li>
                                        <a href="#">Екатерина Синегина</a>
                                    </li>
                                    <li>
                                        <a href="#">Екатерина Синегина</a>
                                    </li>
                                    <li>
                                        <a href="#">Екатерина Синегина</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="last-activity">
                    <div class="last-activity__header">
                        <p class="last-activity__title">Последняя активность</p>
                        <a href="#" class="last-activity__icon"></a>
                    </div>
                    <div class="last-activity__body">
                        <a href="#" class="btn btn--light">Сегодня</a>
                        <div class="last-activity__item">
                            <p class="last-activity__item-time">20:00</p>
                            <a href="#" class="last-activity__item-link">
                                <span class="last-activity__item-icon">ЕС</span>
                                <span class="last-activity__item-name">Екатерина Синегина</span>
                                <span class="last-activity__item-notify">обнаружен CROSS IP</span>
                            </a>
                        </div>
                        <div class="last-activity__item">
                            <p class="last-activity__item-time">20:00</p>
                            <a href="#" class="last-activity__item-link">
                                <span class="last-activity__item-icon">ЕС</span>
                                <span class="last-activity__item-name">Екатерина Синегина</span>
                                <span class="last-activity__item-notify">обнаружен CROSS IP</span>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="btn btn--light">Вся активность</a>
                </div>
                <a href="#" class="add-widget">+ Добавить виджет</a>
            </div>
        </div>
    </main>
    <footer>
         <p class="footer-copyright">Alaska-Delivery © 2019. All rights reserved.</p>
    </footer>
</div>
<? if($page == 'index') :?>
    <script src="https://code.highcharts.com/highcharts.js"></script>
<?endif;?>
<?php include('./__footer.php'); ?>
