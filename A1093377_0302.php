<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>系烤表單</title>
    
    
</head>
<body>
    
    <a name="#top"></a>
    <center> <h1>系烤表單</h1></center>

 <center><h3>一年一度令人振奮的[系烤]時間來囉!</br>
    趕緊手刀來報名啊啊</br>
    一起來玩吧!
</h3></center>
<center><h4>時間:2023/3/6</br>  
    地點:宿舍烤肉區</br> 
    價錢:有繳系會費$100/沒有繳系會費$150</br>  
</h4></center>
</br>
<hr width=80% color=E0E0E0 size=2 align=center>
<form method="post" action="A1093377_0302_result.php">
    &nbsp&nbsp請輸入你的學號 <input type="text" name="id" > <br>
    &nbsp&nbsp請輸入你的姓名 <input type="text" name="pwd"> <br>
    &nbsp&nbsp請輸入你的email <input type="text" name="email"> <br>
    <br>
    &nbsp&nbsp有沒有繳系會費:
 <input type="radio" name="cost" value="有">有 
<input type="radio" name="cost" value="沒有">沒有<br>
<br>
&nbsp&nbsp飲食習慣:
<input type="checkbox" name="vbt" value="vbt">吃素
<input type="checkbox" name="beef" id="beef">不吃牛
<input type="checkbox" name="pig" id="pig">不行豬
<input type="checkbox" name="chi" id="chi">不行雞
</br>
</br>
選擇想要參加的大賽
<select name="comp[]" >
<option value="一分鐘喝酒挑戰">一分鐘喝酒挑戰
<option value="誰烤得食材最好吃比賽">誰烤得食材最好吃比賽
<option value="都不想拉">都不想拉
<option value="都想啊">都想啊
</select>
<br>
&nbsp<p>*備註(像是:希望有什麼餘興節目)</p>
&nbsp&nbsp<textarea name="feedback" id="" cols="50" rows="10"></textarea></br>
</br>

<input type="submit" name="" id="">
<input type="reset" name="" id="">

<a href="#top">回到頁首</a>
</form>
</body>
</html>