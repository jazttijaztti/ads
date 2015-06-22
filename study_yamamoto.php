<?php

$get_it = "tagayaaaaa";
$area = array ('1' => '2' , 'testtest' => $get_it);
$t[] = 'oo';
$t[] = $area;
$yaoi['a'] = $t;
$yaoi['b'] = $area;
$lin[] = $area;
$lin[] = $yaoi;


print "<pre>";
var_dump($lin);

var_dump ($lin['1']['b']['testtest']);
var_dump ($lin['1']['a']['0']);

