<?php
session_start(); 

if($_SESSION["login"]=="YES"){   
}else{
    header("Location:error.php");
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>校長登入</title>
</head>
<body>
"校長頁面"<br>
<a href="teacher.php">教師登入</a>
<a href="logout.php">登出</a>
</body>
</html>