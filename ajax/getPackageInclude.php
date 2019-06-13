<?
ob_start();
?>
<div class="row" data-is="package-edit-row">
    <div class="col col-12 col-md-4">
        <div class="form-block">
            <label class="form-block__input-wrap has-icon">
                <i class="icon" style="background-image: url('/static/img/icons/input_flag.png')"></i>
                <input class="form-block__input" type="text" name="" placeholder="Введите значение" value="">
            </label>
        </div>
    </div>
    <div class="col col-12 col-md-3">
        <div class="form-block">
            <label class="form-block__input-wrap has-icon">
                <i class="icon" style="background-image: url('/static/img/icons/dollar_icon.png')"></i>
                <input class="form-block__input" type="text" name="" placeholder="Введите значение" value="">
            </label>
        </div>
    </div>
    <div class="col col-12 col-md-3">
        <div class="form-block" data-is="number-input">
            <label class="form-block__input-wrap has-icon">
                <i class="icon" style="background-image: url('/static/img/icons/pack_icon.png')"></i>
                <input  class="form-block__input"
                        data-number-input
                        data-min="1"
                        data-max="100"
                        data-step="1"
                        type="text"
                        name=""
                        placeholder=""
                        value=""
                 >
            </label>
        </div>
    </div>
    <div class="col col-12 col-md-2 mobile-mb-20">
        <button type="button" class="btn btn-del" data-delete="/ajax/deletePackageEditRow.php?PACKAGE_ID=123">Удалить</button>
    </div>
</div>
<?
$html = ob_get_clean();
echo $data = json_encode(array(
	'success' => true,
	'html' => $html
));
?>
