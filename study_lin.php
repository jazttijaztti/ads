<?php

//echo "<pre>";
$a[] = 1;
$a[] = 0;
$a[] = 'ゴッド矢追';
$a['test'] = 'p';
$b['LIN_LIN'][] = $a;
$c['y'] = $b;
//var_dump ($a);
//var_dump ($b);
//var_dump ($c);

foreach ($b as $val => $d) {
        echo $val .'<br>';
        }
//var_dump ($d);
//exit;

foreach ($b as $val1 =>$d){
        echo $d[0][2] .'<br>';
}



require_once ('rail_class.php');
$rail = new rail;
$line = $rail->get_line();
$id = 2;                //路線名
$id2 = $line[$id];

$station = $rail->get_station($id2);
$id3 = 2;               //駅名
echo $id2 ."の". $station[$id2][$id3] ."駅です".'<br>';







/*
require_once('lin_class.php');

print "<pre>";

//配列として扱う宣言
$pref = array();

$pref['Tokyo'] [] = 'Nakano';
$pref['Tokyo'] [] = 'Toshima';
$pref['Tokyo'] [] = 'Shinjuku';
$pref['Tokyo'] [] = 'Minato';
$pref['Tokyo'] [] = 'Shinagawa';

var_dump($pref);

//[]の中に入ってるのがkey
//''の中に入ってるのがvalue

$city[] = 'cyuo';
$city[] = 'nakano';
$city[] = 'numabukuro';
$city[] = 'egota';

var_dump($city);

//連想配列
$pref['Tokyo']['Waseda'] = 'Students';
$pref['Tokyo']['Sinagawa'] = 'Office';

var_dump($pref);

$area = array();
$area = 'test';
var_dump($area);


$area = array ('pref'=>'都道府県','test'=>'Tagaya');
var_dump($area);


$area = array ('pref'=>$pref,'test'=>'Tagaya');
var_dump($area);

var_dump($area['pref']['Tokyo'][1]);

$city = ($area['pref']['Tokyo'][1]);
var_dump($city);

$pref = new pref;

$tagaya = $pref->test($area);

$a = 'nakano';
$nn = $pref->get_city($a);
$iii = $nn[0];
$oio = $nn[1];
echo $oio;
echo $iii;
*/

?>