<?php
$arr[0]=array(1,"Peter","Andersen","peter@gmail.com");
$arr[1]=array(2,"John","Miller","john@gmail.com");
$arr[2]=array(3,"Thomas","Swift","thomas@gmail.com");

 for($i=0;$i<count($arr);$i++){
    
     for($u=0;$u<count($arr[$i]);$u++){
      
         echo $arr[$i][$u];
         echo "<br>";
     }
 }

?>
