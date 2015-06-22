<?php
/*
require_once ('rail_class.php');
$rail = new rail;
$line = $rail->get_line();
$id = 2;  		//路線名
$id2 = $line[$id];

$station = $rail->get_station($id2);
$id3 = 2;  		//駅名
echo $id2 ."の". $station[$id2][$id3] ."駅です";
*/

echo "<pre>";
$a[] = 1;
$a[] = 0;
$a[] = 'ゴッド矢追';
$a['test'] = 'p';
$b['LIN_LIN'][] = $a;
$c['y'] = $b;
var_dump ($a);
var_dump ($b);
var_dump ($c);

foreach ($b as $val => $d) {
	echo $val;
	}
//var_dump ($d);
//exit;

foreach ($b as $val1 =>$d){
	echo $d[0][2];
}

?>
