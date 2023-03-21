<?php ob_start();?>
<?php
session_start(); 

if($_SESSION["login"]=="NO"){   
}else{
    header("Location:error.php");
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
   
    <title>登入失敗</title>
</head>
<body>
    登入失敗!<br>
  
    <a href="index1.php">請點這裡回到首頁</a>
    
</body>
</html>
<?php ob_flush();?>