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
    <title>學生登入</title>
</head>
<body>
"學生頁面"<br>
<a href="logout.php">登出</a>
</body>
</html>