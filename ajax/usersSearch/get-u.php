<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 18.06.2019
 * Time: 20:20
 */


$groups = include __DIR__ . '/data.php';

$group_id = (int) isset($_GET['group']) ? $_GET['group'] : 0;

foreach ($groups as &$group) {
    if ($group['id'] == $group_id) {

        $group['users'] = array_slice($group['users'], 0, 2);
        echo json_encode($group);
        return;
    }
}

