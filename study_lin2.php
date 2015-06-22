<?php
require_once ('lin_class2.php');
$machi = new machi;

$gp = $machi->get_pref();
$area = 'Tokyo';
$no = '2';
$pref = $gp[$area][$no];

$gc = $machi->get_city($pref);
echo $gc[$pref][2];


