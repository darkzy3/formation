<?php
//start session for import board value
session_start();
// var_dump($_SESSION["students"]);



?>

<table >
  <tr>  
    <?php
        foreach ($_SESSION["students"] as $key => $value) {
        
      ?>
    <!-- result in board-->
    <td>
        <?php echo "|| $key => $value "; ?>
    </td>

  </tr>
 <?php } ?>
</table>


