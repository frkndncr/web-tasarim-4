<?php 
$ad = $_GET["ad"];
$soyad = $_GET["soyad"];
$mesaj = $_GET["mesaj"];
date_default_timezone_set("Europe/Istanbul");
$date = date("d.m.y H:i:s");
error_reporting(0);
//BİLGİLER DOLDURULMUŞSA ÇEKER
if ($ad & $soyad & $mesaj) {
	$b3zkurt = fopen("b3zkurtiletti.php", "a");
	fwrite($b3zkurt, "<style>
		body{
			color:yellow;text-shadow:0px 0px 10px red;
			font-family:fantasy;
			font-weight:bold;
		}</style>");
fwrite($b3zkurt, "---İletişime Geçenler--- <br><br>");
fwrite($b3zkurt, "Ad: ". $ad ."<br>");
fwrite($b3zkurt, "Soyad: ".$soyad."<br>");
fwrite($b3zkurt, "Mesaj: ". nl2br($mesaj) . "<br>");
fwrite($b3zkurt, "Tarih/Zaman: ".$date. "<br><br>");

//KULLANICI YANSITMA
print("<span style='color:green;margin-top:120px;'>Bilgileriniz eksiksiz şekilde iletilmiştir.</span>");

//print("<br><br><br>"."Ad: ".$ad."<br> Soyad: ".$soyad."<br> Mesaj: ".nl2br($mesaj));

} else{
	echo "<br><br>
	<span style='color:red;margin-top:120px;'>Lütfen bilgileri eksiksiz girin... !</span>";
}

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>İletişim</title>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width,maximum-scale=1">
 	<style type="text/css">
 		body{
 			background-color: #eee;
 			color: black;
 			font-family: fantasy;
 			font-weight: bold;
 			font-style: normal;
 			font-language-override: "TRK";
 			font-size: 30px;
 			display: flex;
 			justify-content: center;
 		}
 	</style>
 </head>
 <body>
<meta http-equiv="refresh" content="3;URL=#">
 </body>
 </html>