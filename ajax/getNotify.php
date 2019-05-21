<?
ob_start();
?>
<a href="#" class="notification">
    <div class="icon" style="background-image: url('/static/img/icons/mail_white.png');"></div>
    <p class="notification__title">Новое сообщение</p>
    <p class="notification__sub">5 минут назад</p>
</a>
<?
$html = ob_get_clean();
echo json_encode(array(
    "success" => true,
    "hasNotify" => true,
    "html" => $html
));
?>
