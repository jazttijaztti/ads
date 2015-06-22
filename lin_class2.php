<?php

class machi {

    public function __construct() {

    }

    public function get_pref(){
	$pref = array();
	$pref['Tokyo'][] = 'Shinjuku';
	$pref['Tokyo'][] = 'Shibuya';
	$pref['Tokyo'][] = 'Nakano';
	$pref['Tokyo'][] = 'Minato';
	return $pref;
    }

    public function get_city($param){
	if($param == 'Nakano'){
	$city = array();
	$city['Nakano'][] = 'Chuo';
	$city['Nakano'][] = 'Nakano';
	$city['Nakano'][] = 'Numabukuro';
	$city['Nakano'][] = 'Egota';
	return $city;
      }else{
	if($param == 'Shinjuku'){
        $city = array();
        $city['Shinjuku'][] = 'Nishi-Shinjuku';
        $city['Shinjuku'][] = 'Kita-Shinjuku';
        $city['Shinjuku'][] = 'Waseda';
        $city['Shinjuku'][] = 'Higashi-Shinjyku';
	return $city;
      }else{
	return false;
      }
    }
  }
}
