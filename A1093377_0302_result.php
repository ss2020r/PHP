<meta charset="UTF-8">
<?php
if(isset($_POST["id"])){

$id=$_POST["id"];
$pwd=$_POST["pwd"]; 
$email=$_POST["email"]; 
$cost=$_POST["cost"]; 
$feedback=$_POST["feedback"]; 


echo "你的ID是:".$id."</br>";
echo "你的密碼是:".$pwd."</br>";
echo "你的密碼是:".$email."</br>";
echo "有沒有繳系會費:".$cost."</br>";






echo "你的飲食習慣是:";
if(isset($_POST["vbt"])){
    $vbt=$_POST["vbt"];
    echo "吃素";
}
if(isset($_POST["beef"])){
    $beef=$_POST["beef"];
    echo "不吃牛";
}
if(isset($_POST["pig"])){
    $pig=$_POST["pig"];
    echo "不吃豬";
}
if(isset($_POST["chi"])){
    $chi=$_POST["chi"];
    echo "不吃雞";
}

echo "<br>";

$comp=$_POST["comp"]; 

echo "你想要參加的大賽是:";
foreach($comp as $value){
    echo $value."";
}

echo "<br>";
echo "*備註(像是:希望有什麼餘興節目):".$feedback."</br>";

}

else{

    echo"你的資料錯誤";


}




?>