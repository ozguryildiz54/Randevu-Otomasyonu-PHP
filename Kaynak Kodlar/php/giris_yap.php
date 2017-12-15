<?php include"ayarlar.php"?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Randevu Sistemi</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link rel="shortcut icon" href="../images/js.ico">
  <script type="text/javascript" src="../js/modernizr-1.5.min.js"></script>
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
        <h1>Giriş Yap</h1>
        
			<?php
				echo '<div class="uyelik-paneli">
					<form action="" method="post">
						<table	cellpadding="3" cellspacing="3">
					<tr>
						<td><label for="kullanici_adi">Kullanıcı Adı:</label></td>
						<td><input type="text" class="i1" name="kullanici_adi" id="kullanici_adi"></label></td>
					</tr>
					<tr>
						<td><label for="sifre">Şifre:</label></td>
						<td><input type="password" class="i1" name="sifre" id="sifre"/></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="giris" class="s1"/></td>					
					</tr>
					<tr><td></td>
						<td>
							<a href="sifre_degistir.php" style"text-decoration:none;"><font style="color:red">Şifremi Unuttum!</font></a>
						</td>
					</tr>					
				</table>
					</form>
				</div>';
			  if(@$_POST["giris"])
				  
			  {		
					$kadi=$_POST["kullanici_adi"];
					session_start();
				    $_SESSION['isim']=$_POST["kullanici_adi"];

				  
				  $sifre=$_POST["sifre"];
				  if(empty($kadi) or empty($sifre))
				  {
					  echo '<font style="color:red">Kullanıcı adınızı ve şifrenizi girdiğinizden emin olun!</font>';
				  }
				  else
				  {
					  mysql_query("SET NAMES UTF8");
					  $sorgu4=mysql_query("INSERT INTO $kadi ('pazartesi', 'sali', 'carsamba', 'persembe', 'cuma', no) VALUES ('Bos','Bos','Bos','Bos','Bos',1)");
					  $sorgu=mysql_query("select * from uyeler where user_name='$kadi' and password='$sifre'");	
					  $say=mysql_num_rows($sorgu);
					  $cek=mysql_fetch_array($sorgu);
					  if($say>0)
					  {	 
						  
						  echo '<font style="color:green">Giriş Başarılı!<br>Hesabınıza yönlendiriliyorsunuz.</font>';
						  header("refresh:1.5;url=randevu_al.php");
					  }
					  else
					  {
						  echo '<font style="color:red">Kullanıcı adı veya şifre hatalı!</font>';	
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
