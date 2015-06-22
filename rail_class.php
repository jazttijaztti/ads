<?php
class rail{

    public function __construct(){
    }

    public function get_line(){
	$line = array(); 
	$line[0] = '山手線';
	$line[1] = '西武新宿線';
	$line[2] = '丸ノ内線';
	return $line;
    }
    public function get_station($param){
	//$name = '山手線';
       if($param == '山手線'){
	$station = array();
	$station['山手線'][] = '新宿';
	$station['山手線'][] = '新大久保';
	$station['山手線'][] = '高田馬場';
	$station['山手線'][] = '目白';
	$station['山手線'][] = '池袋';
	return $station;
       }else{
	//西武新宿線
       if($param == '西武新宿線'){
	$station = array();
	$station['西武新宿線'][] = '西武新宿';
	$station['西武新宿線'][] = '高田馬場';
	$station['西武新宿線'][] = '下落合';
	$station['西武新宿線'][] = '中井';
	$station['西武新宿線'][] = '新井薬師前';
	return $station;
	}else{
	//丸ノ内線 
       if($param == '丸ノ内線'){
	$station = array();
	$station['丸ノ内線'][] = '新宿';
	$station['丸ノ内線'][] = '西新宿';
	$station['丸ノ内線'][] = '中野坂上';
	$station['丸ノ内線'][] = '新中野';
	$station['丸ノ内線'][] = '東高円寺';
	return $station;
      }else{
	return false;
    } 
    }
    }
  }
}
?>
