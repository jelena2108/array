<?php
$arr[0]=array(1,"Peter","Andersen","peter@gmail.com");
$arr[1]=array(2,"John","Miller","john@gmail.com");
$arr[2]=array(3,"Thomas","Swift","thomas@gmail.com");
$arr[3]=array(4,"Ema","Cruise","ema@gmail.com");

  
?>
<html>
    <head></head>
    <body>
        <table style="border:1px solid black;width:400px">
            
    <?php

    for($i=0;$i<count($arr);$i++){
    ?>
        <tr>
    <?php 
       for($u=0;$u<count($arr[$i]);$u++){
    ?>
         <td style="border:1px solid black">
    <?php echo $arr[$i][$u];
    ?> 
         </td>
    <?php  
     } 
    ?>
         </tr>
   <?php 
     
    }
       ?>
        </table>
    </body>
</html>
