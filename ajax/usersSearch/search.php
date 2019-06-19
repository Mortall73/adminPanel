<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 18.06.2019
 * Time: 20:20
 */


$groups = include('./data.php');

$search = (string) isset($_GET['query']) ? $_GET['query'] : null;
$search = strtolower($search);
$result = [];

foreach ($groups as $group) {
    $logins = array_column($group['users'], 'login');
    foreach ($logins as $key => $login) {
        if (stripos(strtolower($login), $search) !== false) {
            $result[] = &$group['users'][$key];
        }
    }
}

echo json_encode($result);

