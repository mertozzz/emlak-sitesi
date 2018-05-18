<?php
require("baglan.php");

if(!$baglan){ 
	die("Bağlantı Başarısız".mysqli_connect_error());

}
else
{
	echo "Bağlantı Başarılı  <br><br>";
}

$gonderbtn=$_POST["gonderbtn"];
if(isset($gonderbtn)){
	$sehir=$_POST["ilkodu"];
	$ev=$_POST["konut"];
	$odasayi=$_POST["odasay"];
	$satilikd=$_POST["satilik"];
		$sql="SELECT banyosayisi.banyosayisi,binayasi.binayas,fiyat_tur.fiyattur_ad,ilceler.ilce_ad,iller.sehir_ad,isitmatur.isitmatur_ad,islemler.islem_ad,konut.fiyat,kredi.kredi_durum,mahalle.mahalle_ad,odasayisi.odasayi,turler.tur_ad FROM banyosayisi,binayasi,fiyat_tur,ilceler,iller,isitmatur,islemler,konut,konutozellik,kredi,mahalle,odasayisi,turler WHERE banyosayisi.banyosay_id=konutozellik.banyosay_id AND binayasi.binayas_id=konutozellik.binayas_id AND fiyat_tur.fiyattur_id=konut.fiyattur_id AND ilceler.ilce_id=konut.ilce_id AND iller.sehir_id=konut.sehir_id AND isitmatur.isitmatur_id=konutozellik.isitmatur_id AND islemler.islem_id=konut.islem_id AND kredi.kredi_id=konutozellik.kredi_id AND mahalle.mahalle_id=konut.mahalle_id AND odasayisi.odasay_id=konutozellik.odasay_id AND turler.tur_id=konut.tur_id and
		iller.sehir_id='".$sehir."' and turler.tur_id='".$ev."' and odasayisi.odasay_id='".$odasayi."' and islemler.islem_id='".$satilikd."'";
			
	
		$srg=mysqli_query($baglan,$sql) or die("MySQL error: " . mysqli_error($baglan)); 
			
		if(mysqli_num_rows($srg)>0){
				while($row=mysqli_fetch_array($srg)){ 
			
					
					echo "Banyo sayısı: ".$row["banyosayisi"]."<br>binayası: ".$row["binayas"]."<br>Şehir: ".$row["sehir_ad"]. "</br>İlçe:".$row["ilce_ad"]."<br>mahalle:".$row["mahalle_ad"]."<br>fiyat:".$row["fiyat"]."<br>Fiyat türü:".$row["fiyattur_ad"]."<br>odasayısı:".$row["odasayi"]."<br>"."<br>"."<hr>";  
				}		

		}else{
			echo "Kayıt Bulunamadı";
		} 
		
}
mysqli_close($baglan); 
?>