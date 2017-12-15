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
        </div>
      </div>
      <div class="content">
        <h1>Şifremi Unuttum!</h1>
        <p style="font: 150% 'Yanone Kaffeesatz', arial, sans-serif;  "> 
			Şifrenizi degiştirebilmek için kullanıcı adınızı ve gizli yanıt<br> degerinizi kullanmanız gerekmektedir.
		</p>
			<?php               
				echo '<div class="uyelik-paneli">
					<form action="" method="post">
						<table	cellpadding="3" cellspacing="3">							
							<tr>
								<td><label for="kullaniciadi">Kullanıcı Adı:</label></td>
								<td><input type="text" class="i1" name="kullanici_adi" /></td>
							</tr>
							<tr>
								<td><label for="sifre">Yeni Şifre:</label></td>
								<td><input type="password" class="i1" name="sifre" /></td>
							</tr>
							<tr><td><label for="gizli">Gizli Yanıt:*</label></td>
								<td>
									<input type="password" class="i1" name="gizli" />
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input type="submit" name="guncelle" value="Şifremi Değiştir" class="s1"/>
								</td>
							</tr>
						</table>
					</form>
				</div>';
				if(@$_POST["guncelle"])
				{
					$kadi=$_POST["kullanici_adi"];
					$sifre=$_POST["sifre"];	
					$gizli_yanit2=$_POST["gizli"];	
					$sorgu=mysql_query("SELECT * FROM uyeler WHERE user_name='$kadi'");
					while ($cek=mysql_fetch_assoc($sorgu) )
					{					
						$gizli_yanit = $cek['gizli_yanit'];
					}					
					if( empty($kadi) or empty($sifre) or empty($gizli_yanit2))
					{
						echo '<font style="color:red">Formda Boş Alanlar Mevcut.</font>';
					}
					elseif($gizli_yanit!=$gizli_yanit2)
					{
						echo '<font style="color:red">Gizli Yanıtı Yanlış Girdiniz!</font>';
					}
					else
					{	

						$sorgu2=mysql_query("update uyeler set password='$sifre' where user_name='$kadi' and gizli_yanit='$gizli_yanit2'");
				
						
						if($sorgu2)
						{
							echo '<font style="color:green">Şifreniz başarılı bir şekilde değiştirilmiştir.</font><br>
								  <font style="color:green">Giriş Yap Sayfasına Yönlendiriliyorsunuz!</font>
								  <META HTTP-EQUIV="Refresh" CONTENT="1.5;URL=giris_yap.php">';						
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
