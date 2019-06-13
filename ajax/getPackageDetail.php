<?
ob_start();
?>
<div class="modal-inner">
    <div class="modal-block">
        <div class="breadcrumbs">
            <span class="breadcrumb active">Посылка</span>
            <span class="breadcrumb">Стоимость заказов в посылке <span class="cs-blue">200$</span></span>
        </div>
        <form class="" action="#" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col col-12 col-md-2">
                    <div class="form-block">
                        <p class="form-block__title">Создано</p>
                        <label class="form-block__input-wrap">
                            <input class="form-block__input" type="text" name="PACKAGE_EDIT" placeholder="" value="14.02.2019">
                        </label>
                    </div>
                </div>
                <div class="col col-12 col-md-2">
                    <div class="form-block">
                        <p class="form-block__title">Обновлено</p>
                        <label class="form-block__input-wrap">
                            <input class="form-block__input" type="text" name="PACKAGE_REFERSH" placeholder="" value="14.04.2019">
                        </label>
                    </div>
                </div>
                <div class="col col-12 col-md-2">
                    <div class="form-block">
                        <p class="form-block__title">Страна</p>
                        <label class="form-block__input-wrap">
                            <input class="form-block__input" type="text" name="PACKAGE_COUNTRY" placeholder="" value="United States ">
                        </label>
                    </div>
                </div>
                <div class="col col-12 col-md-2">
                    <div class="form-block">
                        <p class="form-block__title">Штат</p>
                        <label class="form-block__input-wrap">
                            <input class="form-block__input" type="text" name="PACKAGE_PLACE" placeholder="" value="California">
                        </label>
                    </div>
                </div>
                <div class="col col-12 col-md-2">
                    <div class="form-block">
                        <p class="form-block__title">Город</p>
                        <label class="form-block__input-wrap">
                            <input class="form-block__input" type="text" name="PACKAGE_CITY" placeholder="" value="Los Angeles ">
                        </label>
                    </div>
                </div>
                <div class="col col-12 col-md-2">
                    <div class="form-block">
                        <p class="form-block__title">Адрес</p>
                        <label class="form-block__input-wrap">
                            <input class="form-block__input" type="text" name="PACKAGE_ADDRESS" placeholder="" value="Star st 21 ">
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-12 col-md-2">
                    <div class="form-block">
                        <p class="form-block__title">Индекс</p>
                        <label class="form-block__input-wrap">
                            <input class="form-block__input" type="text" name="PACKAGE_INDEX" placeholder="" value="9001">
                        </label>
                    </div>
                </div>
                <div class="col col-12 col-md-5">
                    <div class="form-block">
                        <p class="form-block__title">Комментарий стафера</p>
                        <label class="form-block__input-wrap">
                            <input class="form-block__input" type="text" name="PACKAGE_STAFER" placeholder="Текст комментария стафера " value="">
                        </label>
                    </div>
                </div>
                <div class="col col-12 col-md-5">
                    <div class="form-block">
                        <p class="form-block__title">Комментарий для курьера</p>
                        <label class="form-block__input-wrap">
                            <input class="form-block__input" type="text" name="PACKAGE_COURIER_COMMENT" placeholder="Текст комментария для курьера" value="">
                            <button type="submit" class="send"></button>
                        </label>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="modal-block">
        <div class="breadcrumbs">
            <span class="breadcrumb active">Содержимое посылки </span>
            <span class="breadcrumb">Всего 3 </span>
        </div>
        <div class="table-wrap" data-simplebar>
            <div class="table-inner">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Количество</th>
                        <th>Сумма</th>
                    </tr>
                    <?foreach(array(1,2,3) as $i):?>
                        <tr>
                            <td>19</td>
                            <td>AirPods</td>
                            <td>2</td>
                            <td>100</td>
                        </tr>
                    <?endforeach;?>
                </table>
            </div>
        </div>
    </div>
    <div class="modal-block">
        <div class="breadcrumbs">
            <span class="breadcrumb active">Задания</span>
            <span class="breadcrumb">Всего 3 </span>
        </div>
        <div class="table-wrap" data-simplebar>
            <div class="table-inner">
                <table>
                    <tr>
                        <th>Название</th>
                        <th>Комментарий</th>
                        <th>Завершено</th>
                        <th>Действия</th>
                    </tr>
                    <?foreach(array(1,2,3) as $i):?>
                        <tr>
                            <td>Сфотографировать посылку</td>
                            <td><a href="#" class="link">link</a></td>
                            <td>2</td>
                            <td><a href="#" class="link link-decor">выполнение</a></td>
                        </tr>
                    <?endforeach;?>
                </table>
            </div>
        </div>
    </div>
</div>
<?
$html = ob_get_clean();
echo $data = json_encode(array(
	'success' => true,
	'html' => $html
));
?>
