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
    <title>教師登入</title>
</head>
<body>
"教師頁面"<br>
<a href="student.php">學生登入</a>
<a href="logout.php">登出</a>
</body>
</html>