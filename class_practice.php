<?php

class practice {

  public function __construct(){

  }
  public function get_pref(){
	$pref = array();
	$pref['Tokyo'] [] = 'Nakano';
	$pref['Tokyo'] [] = 'Shinjuku';
	$pref['Tokyo'] [] = 'Toshima';
	$pref['Tokyo'] [] = 'Itabashi';
	$pref['Tokyo'] [] = 'Adachi';
	$pref['Tokyo'] [] = 'Shibuya';
	$pref['Tokyo'] [] = 'Ota';
	$pref['Tokyo'] [] = 'Minato';
	return $pref;
  }
	
  public function get_city(){
      if($param == nakano){
	$city = array();
	$city[] = 'cyuo';
	$city[] = 'egota';
	$city[] = 'nakano';
	$city[] = 'numabukuro';
   	return $city;
      }else{
	return false;
      }	
 }
}



?>
