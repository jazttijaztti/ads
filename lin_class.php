<?php

class pref {
  public function __construct(){
  }


  public function get_pref(){
	  $pref = array();
	  $pref['Tokyo'] [] = 'Nakano';
	  $pref['Tokyo'] [] = 'Toshima';
	  $pref['Tokyo'] [] = 'Shinjuku';
	  $pref['Tokyo'] [] = 'Minato';
	  $pref['Tokyo'] [] = 'Shinagawa';
	  $pref['Tokyo']['Waseda'] = 'Students';
	  $pref['Tokyo']['Sinagawa'] = 'Office';
          return $pref;
  }


  public function get_city($param){
	if($param == 'nakano'){
	  $city[] = 'cyuo';
	  $city[] = 'nakano';
	  $city[] = 'numabukuro';
	  $city[] = 'egota';
	  return $city;
	}else{
	  return false;
	}
  } 

  
  public function test($a){
    $aa =  $a['test'] . 'ついか';
    return $aa;
	}
}

?>
