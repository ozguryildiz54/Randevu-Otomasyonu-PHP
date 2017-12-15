<?php include("ayarlar.php"); ob_start(); ?>

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
        </div>
      </div>
      <div class="content">
        <h1>Kayıt Ol</h1>
        
			<?php
				echo '<div class="uyelik-paneli">
					<form action="" method="post">
						<table	cellpadding="3" cellspacing="3">
							<tr>
								<td>
									<label for="isim">Adınız:*</label>
								</td>
								<td>
									<input type="text" class="i1" name="isim" onkeyup="this.value=/[^A-z]+/g.harfRakam(this.value)"/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="soyad">Soyadınız:*</label>
								</td>
								<td>
									<input type="text" class="i1" name="soyad" onkeyup="this.value=/[^A-z]+/g.harfRakam(this.value)"/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="cinsiyet">Cinsiyetiniz:</label>
								</td>
								<td>
									<select name="cinsiyet" class="i1">
										
										<option>Bay</option>
										<option>Bayan</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><label for="kullaniciadi">Kullanıcı Adı:*</label></td>
								<td><input type="text" class="i1" name="kullanici_adi"/></td>
							</tr>
							<tr>
								<td><label for="sifre">Şifre:*</label></td>
								<td><input type="password" class="i1" name="sifre"/></td>
							</tr>
							<tr>
								<td><label for="sifre">Şifre Tekrar:*</label></td>
								<td><input type="password" class="i1" name="sifre2"/></td>
							</tr>
							<tr>
								<td><label for="e_posta">E-posta:</label></td>
								<td><input type="text" class="i1" name="eposta"/></td>
							</tr>
							<tr>
								<td><label for="yas">Yaşınız:</label></td>
								<td>
									<input type="text" class="i1" name="yas" onkeyup="this.value=/[^0-9]+/g.harfRakam(this.value)"/>
								</td>
							</tr>
							<tr>
								<td><label for="tel_no">Telefon No:*</label></td>
								<td>
									<input type="text" class="i1" name="tel_no" onkeyup="this.value=/[^0-9]+/g.harfRakam(this.value)"/>
								</td>
							</tr>
							<tr>
								<td><label for="sikayet">Şikayetiniz:*</label></td>
								<td>
									<textarea style="text-align: center;" required="required" rows="2" class="i1" name="sikayet"/>
									</textarea>
								</td>
							</tr>
							<tr><td><label for="gizli">Gizli Yanıt:*</label></td>
								<td>
									<input type="password" class="i1" name="gizli" />
								</td>
							</tr>
							<tr><td><font style="color:red">&emsp;Gizli &emsp;yanıt &emsp;yeni&emsp;şifre</font></a></td>
								<td>
									<font style="color:red">şifrenizi &emsp;unutursanız &emsp; alabilmek &emsp;içindir!</font></a>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input type="submit" name="kayitol" value="Kayıt Ol" class="s1"/>
									<input type="reset" name="sil" value="Temizle" class="s1"/>
								</td>
							</tr>
						</table>
					</form>
				</div>';
				if(@$_POST["kayitol"])
				{						
					$ad=$_POST["isim"];
					$soyad=$_POST["soyad"];
					$cinsiyet=$_POST["cinsiyet"];
					$kadi=$_POST["kullanici_adi"];
					$sifre=$_POST["sifre"];
					$sifre2=$_POST["sifre2"];
					$eposta=$_POST["eposta"];
					$yas=$_POST["yas"];
					$tel_no=$_POST["tel_no"];
					$sikayet=$_POST["sikayet"];
					$gizli=$_POST["gizli"];
					$sorgu=mysql_query("select * from uyeler where user_name='$kadi' ");
					$say=mysql_num_rows($sorgu);
					//session_start();
				    //$_SESSION['ad']=$_POST["ad"];
					if( empty($ad) or empty($soyad) or empty($kadi) or empty($sifre) or empty($eposta) or empty($yas) or empty($gizli) or empty($tel_no) or empty($sikayet) )
					{
						echo '<font style="color:red">Formda Boş Alanlar Mevcut.</font>';
					}
					elseif($sifre!=$sifre2)
					{
						echo '<font style="color:red">Şifreler uyuşmuyor.</font>';
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
						$sorgu2=mysql_query("insert into uyeler (ad,soyad,cinsiyet,user_name,password,eposta,yas,telefon,sikayet,gizli_yanit) values ('$ad','$soyad','$cinsiyet','$kadi','$sifre','$eposta','$yas','$tel_no','$sikayet','$gizli')");
						
						$sorgu3=mysql_query("CREATE TABLE $kadi ( pazartesi VARCHAR(20) NOT NULL , sali VARCHAR(20) NOT NULL , carsamba VARCHAR(20) NOT NULL , persembe VARCHAR(20) NOT NULL , cuma VARCHAR(20) NOT NULL ,no INT NOT NULL ) ENGINE = MyISAM;");
						
						mysql_query("SET NAMES UTF8");
						mysql_query("INSERT INTO $kadi (pazartesi, sali, carsamba, persembe, cuma, no) VALUES ('Randevun-Yok','Randevun-Yok','Randevun-Yok','Randevun-Yok','Randevun-Yok',1)");
						$sorgu5=mysql_query("INSERT INTO $kadi (pazartesi, sali, carsamba, persembe, cuma, no) VALUES ('Randevun-Yok','Randevun-Yok','Randevun-Yok','Randevun-Yok','Randevun-Yok',2)");
						$sorgu6=mysql_query("INSERT INTO $kadi (pazartesi, sali, carsamba, persembe, cuma, no) VALUES ('Randevun-Yok','Randevun-Yok','Randevun-Yok','Randevun-Yok','Randevun-Yok',3)");
						$sorgu7=mysql_query("INSERT INTO $kadi (pazartesi, sali, carsamba, persembe, cuma, no) VALUES ('Randevun-Yok','Randevun-Yok','Randevun-Yok','Randevun-Yok','Randevun-Yok',4)");
						$sorgu8=mysql_query("INSERT INTO $kadi (pazartesi, sali, carsamba, persembe, cuma, no) VALUES ('Randevun-Yok','Randevun-Yok','Randevun-Yok','Randevun-Yok','Randevun-Yok',5)");
						$sorgu9=mysql_query("INSERT INTO $kadi (pazartesi, sali, carsamba, persembe, cuma, no) VALUES ('Randevun-Yok','Randevun-Yok','Randevun-Yok','Randevun-Yok','Randevun-Yok',6)");
						$sorgu10=mysql_query("INSERT INTO $kadi (pazartesi, sali, carsamba, persembe, cuma, no) VALUES ('Randevun-Yok','Randevun-Yok','Randevun-Yok','Randevun-Yok','Randevun-Yok',7)");
						
						if($sorgu2)
						{
							echo '<font style="color:green">Kayıt İşlemi Başarılı!</font><br>
								  <font style="color:green">Giriş Yap Sayfasına Yönlendiriliyorsunuz!</font>';
							header("refresh:1.5;url=giris_yap.php");
						}
						else
						{
							echo 'Beklenmeyen bir hata oluştu ve kayıt eklenemedi.<br>Lütfen tekrar deneyin!';
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
