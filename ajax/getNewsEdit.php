<?php
ob_start();
?>
<div class="modal-inner">
    <p class="modal-title">Редактирование статьи</p>
    <form action="#"
          method="post"
          name="news_edit"
          enctype="application/x-www-form-urlencoded"
          data-is="ajax-submit"
    >
        <input type="hidden" name="NEWS_ID" value="<?=$_GET['newsID']?>">
        <div class="form-block">
            <p class="form-block__title">Название</p>
            <label class="form-block__input-wrap">
                <input class="form-block__input" type="text" name="NEWS_TITLE" placeholder="Название" value="Предполагаемое  название...">
            </label>
        </div>
        <div class="form-block">
            <p class="form-block__title">Картинка</p>
            <div class="dropzone" data-is="dropzone"  data-max-files="1">
                <div class="dropzone__icon"></div>
                <div class="fallback">
                    <input name="file" type="file" />
                </div>
            </div>
        </div>
        <div class="form-block">
            <p class="form-block__title">Текст</p>
            <label class="form-block__input-wrap">
                <textarea class="form-block__input" name="NEWS_TEXT" rows="8" cols="80"></textarea>
            </label>
        </div>
        <button type="submit" class="btn btn-green btn-save">Сохранить</button>
    </form>
</div>
<?
$html = ob_get_clean();

echo json_encode(array(
    "success" => true,
    "html" => $html,
    "request" => $_GET['newsID']
));
?>

