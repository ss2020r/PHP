<?php ob_start();?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
   
    <title>錯誤</title>
</head>
<body>
    靜止進入!<br>
    網頁將在3秒後自動跳轉 <br>
  
    <a href="index.php">請點這裡回到首頁</a>
    <?php
    header("Refresh:3;url=index1.php")


?>
</body>
</html>
<?php ob_flush();?>