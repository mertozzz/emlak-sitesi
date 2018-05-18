<?php
include "baglan.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>&quot;Konut Destek Sistemi&quot;</title>
		<meta name="description"  content="Konut Bilgi Sistemi 2018">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="Keywords" content="Ev,Konut,satılık ev,2018,ev fiyatları,konut fiyatları"/>
		<meta name="googlebot" content="noarchive"/>
		<meta name="Revisit-After" content="1 days"/>
		<meta name="robots" content="index,follow"/>
		<meta name="copyright" content=" 2018 © Copyright | www.konutdesteksistemi.com" />﻿
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="kdss.css">
	
	
	</head>
	<body>
	<h2 class="w3-center">Projeler</h2>
	<h2 class="konutvitrini">Konut Vitrini</h2>
	<h2 class="konutarama">Konut Arama</h2>

<div class="w3-content w3-display-container">
  <img class="mySlides" src="mahall.jpg" >
  <img class="mySlides" src="konut2.jpg" >
  <img class="mySlides" src="konut3.jpg" >
  <img class="mySlides" src="konut4.jpg" >

  <button class="slide" onclick="plusDivs(-1)">&#10094;</button>
  <button class="slide2" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

	<form class="form1" action="veri.php" method="post">
	<label>Konum</label>
<select name="ilkodu" id="ilkodu">
	<option value="0" selected>İl Seçiniz</option>
	<?php
		$sql= mysqli_query($baglan,"select sehir_id,sehir_ad from iller");
		while($tumu = mysqli_fetch_array($sql)){
			echo '<option value="'.$tumu["sehir_id"].'">'.$tumu["sehir_ad"].'</option>';
		}
	?>
</select>
<br>

<label>Konut</label>
<select name="konut" id="konut ">
	<option value="0" selected>Konut Seçiniz</option>
	<?php
		$sql= mysqli_query($baglan,"select tur_id,tur_ad from turler");
		while($tumu = mysqli_fetch_array($sql)){
			echo '<option value="'.$tumu["tur_id"].'">'.$tumu["tur_ad"].'</option>';
		}
	?>
</select>
<br>

<label>oda sayısı</label>
<select name="odasay" id="odasay ">
	<option value="0" selected>Oda Sayısı Seçiniz</option>
	<?php
		$sql= mysqli_query($baglan,"select odasay_id,odasayi from odasayisi");
		while($tumu = mysqli_fetch_array($sql)){
			echo '<option value="'.$tumu["odasay_id"].'">'.$tumu["odasayi"].'</option>';
		}
	?>
</select>
<br>

<label>Satılık</label>
<select name="satilik" id="satilik ">
	<option value="0" selected>Satılık</option>
	<?php
		$sql= mysqli_query($baglan,"select islem_id,islem_ad from islemler");
		while($tumu = mysqli_fetch_array($sql)){
			echo '<option value="'.$tumu["islem_id"].'">'.$tumu["islem_ad"].'</option>';
		}
	?>
</select>

<br>
<input class="btn btn-lg btn-primary btn-block" type="submit" name="gonderbtn" value="Ara">
<br>
</form>

	
	<ul class="ul1">
			<li><a href="#models">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ANASAYFA&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
			<li><a href="#price">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspKURUMSAL&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
			<li><a href="#maitrus world">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPROJELER&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
			<li><a href="#offices">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHİZMETLER&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
		
		</ul>
	   <img  class="logo"src="IMG-20170408-WA0005.jpg" alt="logo" style= width="150" height="300">
	   
	   <h1 style="color:white;" > YAŞAM MİMARINIZ... </h1>
	   
	 <pre class="p1" style="color:white;">
	 <br>
	 <br>
	 <br>
	 <br>
	 NEF BASIN EKSPRES
	 Hem İstanbul’un merkezinde, önünde yer alan metro 
	 durağı ile her yere kolayca ulaşabileceğiniz bir 
	 yerdesiniz; hem de dilediğiniz an şehrin 
	 kalabalığını, sesini ve stresini kapınızın dışında
	 bırakabileceğiniz bambaşka bir dünyada. 
	 Nef Basınekspres’e hoş geldiniz. 
	
	   
	  </pre>
	  <img class="nef" src="nef.jpg"></img>
	   
	  <pre class="p2"style="color:white;">
	  
	  
	  <br>
	  <br>
	  <br>
	  AĞAOĞLU ÇEKMEKÖY PARK
	  Keyifli bir tatil dönüşü ya da stresli bir iş gününün 
	  sonunda kaliteli yaşamstandartları ile donatılmış; 
	  ulaşım kolaylığı ile, spordan sanata, alışveriş 
	  caddesinden çocuk oyun alanlarına bisiklet ve koşu
	  parkurundan yüzme havuzuna kadar en ince ayrıntısı
	  düşünülerek tasarlanan Ağaoğlu Çekmeköy Park'da 
	  "insanın evi gibisi yok"cümlesi vazgeçilmeziniz olacak.
	
	   
	  </pre>
	  <img class="aga" src="aga.jpg" ></img>
	  <pre class="p3" style="color:white;"> 
	  <br>
	  <br>
	  <br>
	  <br>
	  
	  MAHALL BOMONTİ İZMİR
	  Mahall Bomonti ile yanıbaşınızda uzanan yemyeşil bir
	  doğa, her anınıza eşlik edecek bir deniz manzarası, 
	  tarihi modern hayatın içinde sunan bir yaşam. 
	  Hayatınızda olmasını istediğiniz her şey, 
	  Mahall Bomonti İzmir’de bir araya geliyor.
	  
	  
	  
	  
	
	  </pre>
	  <img class="mahall" src="mahall.jpg"></img>
	  <form class="form2" action="grafik.php" method="POST">
	  <button type="submit" name="grafik" class="btn btn-lg btn-danger btn-block">Oda Sayısına Göre Grafiği Göster</button>
	  </form>
	  <form class="form3" action="grafik1.php" method="POST">
	  <button type="submit" name="grafik" class="btn btn-lg btn-danger btn-block">Konut Türüne Göre Grafiği Göster</button>
	  </form>

    

	</body>







</html>