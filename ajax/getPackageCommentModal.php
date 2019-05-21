<?php
ob_start();
?>

<div class="modal-inner">
    <form action="/ajax/ajaxResponse/packageCommentResponse.php" class="js-form-file"
        method="post"
        name="package"
        enctype="application/x-www-form-urlencoded"
        data-is="ajax-submit"
    >
        <div class="form-block">
            <p class="modal__subtitle">Добавить фото</p>
            <div class="dropzone" id="package-img-load" data-max-files="1">
                <div class="dropzone__icon"></div>
                <div class="form-block"></div>
                <div class="fallback">
                    <input name="file" type="file" />
                </div>
            </div>
        </div>
        <div class="form-block">
            <p class="modal__subtitle">Добавить комментарий </p>
            <label class="form-block__input-wrap">
                <textarea class="form-block__input" value="" name="package_comment" rows="6" cols="80"></textarea>
            </label>
        </div>
        <button type="submit" class="btn btn-green btn-save" name="button">Сохранить</button>
    </form>

</div>

<?php
$html = ob_get_clean();
echo $data = json_encode(array(
	'success' => true,
	'html' => $html
));
?>
