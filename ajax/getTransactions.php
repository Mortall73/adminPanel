<?php
ob_start();
?>
<li class="last-transaction" data-is="transaction">
    <input data-id hidden type="radio" name="TRANSACTION_ID" value="124">
    <div class="last-transaction-props">
        <span class="last-transaction__name">s_shnurov</span>
        <span class="last-transaction__coast">250 000 руб.</span>
        <span class="last-transaction__time">12.03.2019 в 22:34</span>
    </div>
    <div class="last-transaction-activities">
        <label class="accept">
            <input data-submit hidden type="radio" name="TRANSACTION_8" value="eccept">
            Одобрить
        </label>
        <label class="denial">
            <input data-submit hidden type="radio" name="TRANSACTION_8" value="denial">
            Отклонить
        </label>
    </div>
</li>
<li class="last-transaction" data-is="transaction">
    <input data-id hidden type="radio" name="TRANSACTION_ID" value="9">
    <div class="last-transaction-props">
        <span class="last-transaction__name">s_shnurov</span>
        <span class="last-transaction__coast">250 000 руб.</span>
        <span class="last-transaction__time">12.03.2019 в 22:34</span>
    </div>
    <div class="last-transaction-activities">
        <label class="accept">
            <input data-submit hidden type="radio" name="TRANSACTION_9" value="eccept">
            Одобрить
        </label>
        <label class="denial">
            <input data-submit hidden type="radio" name="TRANSACTION_9" value="denial">
            Отклонить
        </label>
    </div>
</li>
<?
$html = ob_get_clean();
echo $data = json_encode(array(
    'success' => true,
    'html' => $html,
    "title" => "Успешно!"
));
?>
