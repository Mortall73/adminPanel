<?php
ob_start();
?>
<div class="modal-inner">
    <p class="modal-title">Редактирование настройки </p>
    <form action="/ajax/ajaxResponse/settingEditResponse.php"
          method="post"
          name="setting_edit"
          enctype="application/x-www-form-urlencoded"
          data-is="ajax-submit"
          data-validate
    >
        <input type="hidden" name="NEWS_ID" value="<?=$_GET['newsID']?>">
        <div class="form-block">
            <p class="form-block__title">Название сайта</p>
            <label class="form-block__input-wrap">
                <input class="form-block__input" type="text" name="SETTING_TITLE" placeholder="Название" value=""
                       required
                       data-pristine-not-empty
                       data-pristine-required-message="Поле обязательно для заполнения">
            </label>
        </div>
        <div class="form-block">
            <p class="form-block__title">Название сайта</p>
            <label class="form-block__select-wrap">
                <select type="text" name="SETTING_TYPE" class="form-block__select"
                        required
                        data-pristine-required-message="Поле обязательно для заполнения"
                        data-pristine-select-required
                >
                    <option value="-1" selected disabled>Выбеите значение</option>
                    <option value="Перепродажа">Перепродажа</option>
                    <option value="Перепродажа 2">Перепродажа 2</option>
                </select>
                <i class="form-block__select-icon"></i>
            </label>
        </div>
        <div class="form-block">
            <p class="form-block__title">Название сайта</p>
            <label class="form-block__checkbox-wrap">
                <input class="form-block__checkbox" type="checkbox" name="SETTING_1" value="true" checked >
                <span class="checkbox-custom"></span>
                <span class="form-block__checkbox-text">Alaska-Delivery</span>
            </label>
        </div>
        <div class="form-block">
            <label class="form-block__checkbox-wrap">
                <input class="form-block__checkbox" type="checkbox" name="SETTING_2" value="true" >
                <span class="checkbox-custom"></span>
                <span class="form-block__checkbox-text">Alaska-Delivery</span>
            </label>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-green btn-save">Сохранить</button>
        </div>
    </form>
</div>
<?
$html = ob_get_clean();

echo json_encode(array(
    "success" => true,
    "html" => $html
));
?>

