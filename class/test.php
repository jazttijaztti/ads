<?php
class test {

    public function testtest($name , $aaa){
        $res = array_search($name , $aaa);
        
        if ($res !== false) {
            $ret = $aaa[$res] . 'はいます';
        } else{
            $ret = $name."はいません";
        }

        return $ret;
    }


}



?>
