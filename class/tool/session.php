<?php 
  
class post_ses {
  // セッションスタート
  public function post_session(){
   
    //何もなければセッションに
    if(!isset($_POST['no']) || !$_POST['no']){
      $_SESSION['no'] = '';
    }
    //$_SESSION['animal']を初期化
    $_SESSION['no'] = array();
     
    //チェックボックスにチェックされていればtrue
    foreach($_POST['no'] as $value){
      $_SESSION['no'][$value] = "true";
    }
  }
}

?>