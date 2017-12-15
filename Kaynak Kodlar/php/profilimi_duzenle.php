<?php include("ayarlar.php");
ob_start(); 
session_start();
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Randevu Sistemi</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link rel="shortcut icon" href="../images/js.ico">
  <script type="text/javascript" src="../js/modernizr-1.5.min.js"></script>
  <script type="text/javascript">
	RegExp.prototype.harfRakam=function(str)
	{	return  (this.test(str)) ? str.replace(this,"") : str ;	}
  </script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <h1><a href="index.html">Baş Hekim Özgür YILDIZ</a></h1>
          <h2>Web siteme hoş geldiniz! Ofisimde muayene olmak için kayıt olup randevu alınız.</h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="../index.html">Anasayfa</a></li>
          <li><a href="doktor.php">Doktorunuzu Tanıyın</a></li>
          <li><a href="muayene_incele.php">Muayenemi İnceleyin</a></li>
          <li><a href="iletisim.php">İletişim</a></li>
          <li><a href="giris_yap.php">Üye Girişi</a></li>
          <li><a href="kayit_ol.php">Kayıt Ol</a></li>
        </ul>
      </nav>	
    </header>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <h2>Hesabım</h2>
          <ul>		  
            <li><a href="randevu_al.php">Randevu Al</a></li>
            <li><a href="profilimi_duzenle.php">Hesap Bilgileriniz</a></li>
            <li><a href="randevu_goruntule.php">Randevularımı Görüntüle</a></li>
            <li><a href="../index.html" onclick="return window.confirm('Hesabınızdan çıkış yapmak istediğinizden emin misiniz?');">Çıkış Yap</a></li>
          </ul>
        </div>
      </div>
      <div class="content">
        <h1>Hesap Bilgileriniz</h1>
        <p style="font: 150% 'Yanone Kaffeesatz', arial, sans-serif;  "> 
			Kayıt esnasında tanımladıgınız kullanıcı bilgileriniz aşagıda ki gibidir.<br>İstediginiz gibi degişiklik yapabilirsiniz.
		</p>
			<?php
				$isim=$_SESSION['isim'];
               $sorgu=mysql_query("SELECT * FROM uyeler WHERE user_name='$isim'");
				while ($cek=mysql_fetch_assoc($sorgu) )
				{
					
				$ad    = $cek['ad'];
				$soyad   = $cek['soyad'];
				$cinsiyet   = $cek['cinsiyet'];
				if($cinsiyet=="Bay")
				{
					$secim="selected";
					$secim2="";
				}
				if($cinsiyet=="Bayan")
				{
					$secim2="selected";
					$secim="";
				}
				$password   = $cek['password'];
				$eposta   = $cek['eposta'];
				$yas   = $cek['yas'];
				$telefon   = $cek['telefon'];
				$sikayet   = $cek['sikayet'];
				$gizli_yanit = $cek['gizli_yanit'];
				}
				echo '<div class="uyelik-paneli">
					<form action="" method="post">
						<table	cellpadding="3" cellspacing="3">
							<tr>
								<td>
									<label for="isim">Adınız:</label>
								</td>
								<td>
									<input type="text" class="i1" name="isim" value="'.$ad.'" onkeyup="this.value=/[^A-z]+/g.harfRakam(this.value)"/>
								</td>	
							</tr>
							<tr>	
								<td>
									<label for="soyad">Soyadınız:</label>
								</td>
								<td>
									<input type="text" class="i1" name="soyad" value="'.$soyad.'" onkeyup="this.value=/[^A-z]+/g.harfRakam(this.value)"/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="cinsiyet">Cinsiyetiniz:</label>
								</td>
								<td>
									<input type="text" class="i1" name="cinsiyet" value="'.$cinsiyet.'" onkeyup="this.value=/[^A-z]+/g.harfRakam(this.value)"/>
								</td>
							</tr>
							<tr>
								<td><label for="kullaniciadi">Kullanıcı Adı:</label></td>
								<td><input type="text" class="i1" name="kullanici_adi" value="'.$isim.'"/></td>
							</tr>
							<tr>
								<td><label for="sifre">Şifre:</label></td>
								<td><input type="text" class="i1" name="sifre" value="'.$password.'"/></td>
							</tr>
							<tr>
								<td><label for="e_posta">E-posta:</label></td>
								<td><input type="text" class="i1" name="eposta" value="'.$eposta.'"/></td>
							</tr>
							<tr>
								<td><label for="yas">Yaşınız:</label></td>
								<td>
									<input type="text" value="'.$yas.'" class="i1" name="yas" onkeyup="this.value=/[^0-9]+/g.harfRakam(this.value)"/>
								</td>
							</tr>
							<tr>
								<td><label for="tel_no">Telefon No:</label></td>
								<td>
									<input type="text" value="'.$telefon.'" class="i1" name="tel_no" onkeyup="this.value=/[^0-9]+/g.harfRakam(this.value)"/>
								</td>
							</tr>
							<tr>
								<td><label for="sikayet">Şikayetiniz:</label></td>
								<td>
									<textarea style="text-align:left;" rows="8" class="i1" name="sikayet"/>
									'.$sikayet.'
									</textarea>
								</td>
							</tr>
							<tr><td><label for="gizli">Gizli Yanıt:*</label></td>
								<td>
									<input type="text" class="i1" name="gizli" value='.$gizli_yanit.' />
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input type="submit" name="guncelle" value="Bilgilerimi Güncelle" class="s1"/>
								</td>
							</tr>
						</table>
					</form>
				</div>';
				if(@$_POST["guncelle"])
				{
					$ad=$_POST["isim"];
					$soyad=$_POST["soyad"];
					$cinsiyet=$_POST["cinsiyet"];
					$kadi=$_POST["kullanici_adi"];
					$sifre=$_POST["sifre"];					
					$eposta=$_POST["eposta"];
					$yas=$_POST["yas"];
					$tel_no=$_POST["tel_no"];
					$sikayet=$_POST["sikayet"];
					$gizli=$_POST["gizli"];
					$say=0;
					if($isim!=$kadi)
					{
						$sorgu=mysql_query("select * from uyeler where user_name='$kadi' ");
					$say=mysql_num_rows($sorgu);
					}
					if( empty($ad) or empty($soyad) or empty($kadi) or empty($sifre) or empty($gizli) or empty($eposta) or empty($yas) or empty($tel_no) or empty($sikayet) or empty($cinsiyet) )
					{
						echo '<font style="color:red">Formda Boş Alanlar Mevcut.</font>';
					}
					elseif(!filter_var($eposta,FILTER_VALIDATE_EMAIL))
					{
						echo '<font style="color:red">E-posta adresi hatalı.</font>';
					}
					elseif($say>0)
					{
						echo '<font style="color:red">
								Aynı isimde kullanıcı adı mevcut!<br>
								Lütfen farklı bir kullanıcı adı deneyin.
							  </font>';
					}
					else
					{	

						$sorgu2=mysql_query("update uyeler set ad='$ad',soyad='$soyad',cinsiyet='$cinsiyet',user_name='$kadi',password='$sifre',eposta='$eposta',yas='$yas',telefon='$tel_no',sikayet='$sikayet',gizli_yanit='$gizli' where user_name='$isim'");
				
						
						if($sorgu2)
						{
							echo '<font style="color:green">Güncelleme İşlemi Başarılı!</font><br>
								  <font style="color:green">Bir Önceki Sayfaya Yönlendiriliyorsunuz!</font>
								  <META HTTP-EQUIV="Refresh" CONTENT="1.5;URL=randevu_al.php">';			  							
							//header("refresh:1.5;url=randevu_al.php"); meta etiketiyle aynı işi görür.
						}
						else
						{
							echo '<font style="color:red">Beklenmeyen bir hata oluştu ve güncelleme gercekleşmedi.<br>Lütfen tekrar deneyin!</font>';
						}
					}
				}
		    ?>
      </div>
    </div>
    <footer>
      <p>Kişisel blogum için tıklayın : <a class="boya" href="http://www.yldzozgur.wordpress.com">yldzozgur.wordpress.com</a></p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="../js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="../js/image_fade.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
