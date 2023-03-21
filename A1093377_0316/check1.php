<?php
session_start(); 
?>
<?php
$stID="student0";
$stPWD="1234";

$thID="teacher8";
$thPWD="5678";

$prID="principal5";
$prPWD="9876";


$id=$_POST["id"];
$pwd=$_POST["pwd"];

if(($stID==$id)&&($stPWD==$pwd)){
    $_SESSION["login"]="YES";
   header("Location:student.php");
}elseif(($thID==$id)&&($thPWD==$pwd)){
    $_SESSION["login"]="YES";
   header("Location:teacher.php");
}elseif(($prID==$id)&&($prPWD==$pwd)){
    $_SESSION["login"]="YES";
   header("Location:principal.php");
}else{
    $_SESSION["login"]="NO";
    header("Location:fail.php");
}

?>