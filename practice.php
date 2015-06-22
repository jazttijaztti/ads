<?php
print "<pre>"; 

$pref = array();
$pref['Tokyo'] [0] = 'Nakano';
$pref['Tokyo'] [1] = 'Shinjuku';
$pref['Tokyo'] [2] = 'Toshima';
$pref['Tokyo'] [3] = 'Itabashi';
$pref['Tokyo'] [4] = 'Adachi';
$pref['Tokyo'] [5] = 'Shibuya';
$pref['Tokyo'] [6] = 'Ota';
$pref['Tokyo'] [7] = 'Minato';

$city['Nakano'][0] = 'cyuo';
$city['Nakano'][1] = 'egota';
$city['Nakano'][2] = 'nakano';
$city['Nakano'][3] = 'numabukuro';

echo ($pref['Tokyo'][0]);
echo "\n";
echo ($city['Nakano'][0]);
echo "\n";

$pref['Tokyo']['Sinagawa'] = 'Big Terminal';

echo $pref['Tokyo']['Sinagawa'];

