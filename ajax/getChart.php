<?php
if (!empty($_GET)) {
    if($_GET['packages_period'] == 2) {
        $data = file_get_contents('./chart2.json');
        echo $data;
    }
    if($_GET['packages_period'] == 4) {
        $data = file_get_contents('./chart.json');
        echo $data;
    }
} else {
    $data = file_get_contents('./chart.json');

    echo $data;
}
