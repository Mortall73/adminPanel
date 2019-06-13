<?
ob_start();
?>
<div class="row" data-is="package-edit-row">
    <div class="col col-12 col-md-5">
        <div class="form-block">
            <label class="form-block__select-wrap has-icon">
                <i class="icon" style="background-image: url('/static/img/icons/car_icon.png')"></i>
                <select type="text" name="" value="" class="form-block__select">
                    <option value="-1" selected disabled>Выберите службу доставки</option>
                    <option value="Перепродажа">Перепродажа</option>
                    <option value="Перепродажа 2">Перепродажа 2</option>
                </select>
                <i class="form-block__select-icon"></i>
            </label>
        </div>
    </div>
    <div class="col col-12 col-md-5">
        <div class="form-block">
            <label class="form-block__input-wrap has-icon">
                <i class="icon" style="background-image: url('/static/img/icons/hash_icon.png')"></i>
                <input class="form-block__input" type="text" name="" placeholder="Введите трек номер" value="">
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
