<?php
/**
 * Created by PhpStorm.
 * User=> Andrew
 * Date=> 18.06.2019
 * Time=> 20=>20
 */


$groups = include __DIR__ . '/data.php';

foreach ($groups as &$group) {
    unset($group['users']);
}

echo json_encode($groups);