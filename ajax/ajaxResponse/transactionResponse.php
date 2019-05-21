<?
if(!empty($_POST)) {
    if(!empty($_POST['TRANSACTION_ID'])) {
        echo json_encode(array(
            "success" => true,
            "ID" => $_POST['TRANSACTION_ID'],
            "title" => "Успешно",
            "msg" => 'Транзакция '.$_POST['TRANSACTION_ID'].''
        ));
    }
}

?>
