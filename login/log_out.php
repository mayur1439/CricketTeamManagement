<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
      session_start();
   if(isset($_SESSION['uname'])&&isset($_SESSION['password']))
  {
     $_SESSION['log_out']="log_out";
    unset($_SESSION['uname']);
    unset($_SESSION['password']);
    header("Location: login.php");
     }
  else
 {
        //  $_SESSION['authorise']="authorise";
       //   header("Location: login.php");   
      echo"not logined";
}
?>