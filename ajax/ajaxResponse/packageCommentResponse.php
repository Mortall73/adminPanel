<?
if (!empty($_FILES)) {

    $tempFile = $_FILES['file']['name'];

    echo json_encode(array(
        "success" => true,
        "message" => "upload",
        "img" => $tempFile
    ));

} else {
    if (!empty($_POST['action'] && $_POST['action'] == 'delete')) {
        echo json_encode(array(
            "success" => true,
            "message" => 'delete file'.$_POST["name"].''
        ));
    } else if ($_POST['action'] == 'submit'){
        echo json_encode(array(
            "success" => true,
            "title" => "Успешно!",
            "message" => "Данные сохранены"
        ));
    }
}
?>
