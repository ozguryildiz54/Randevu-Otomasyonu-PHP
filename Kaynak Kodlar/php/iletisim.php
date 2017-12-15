<?php include"ayarlar.php"?>
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
		<h1 style="color:#EEA200;font: 220% 'Yanone Kaffeesatz', arial, sans-serif;">&emsp;&emsp;&emsp;&emsp;Bana Ulaşın</h1>
		<?php
				echo '<div style="background-color:#e1e1e1; 
	padding:50px 50px 50px 50px; 
	border:solid 1px #d4d4d4; 
	border-radius:2px; 
	width:260px;
	color: #000;
    font: 150% Yanone Kaffeesatz, arial, sans-serif;">
					<form action="" method="post">
						<table	cellpadding="3" cellspacing="3">
					<tr>
						<td><label for="isim">İsim</label></td>
						<td><input type="text" class="i1" name="ad" onkeyup="this.value=/[^A-z]+/g.harfRakam(this.value)"></label></td>						
					</tr>
					<tr>
						<td><label for="soyisim">Soyisim:</label></td>
						<td><input type="text" class="i1" name="soyad" onkeyup="this.value=/[^A-z]+/g.harfRakam(this.value)"/></td>
					</tr>
					<tr>
						<td><label for="mail">Mail:</label></td>
						<td><input type="text" class="i1" name="mail" id="sifre"/></td>
					</tr>	
					<tr>
						<td><label for="tel">Telefon:</label></td>
						<td><input type="text" class="i1" name="tel" onkeyup="this.value=/[^0-9]+/g.harfRakam(this.value)"/></td>
					</tr>					
					<tr>
						<td><label for="mesaj">Mesajınız:</label></td>
						<td><textarea style="text-align: center;" rows="2" class="i1" name="mesaj"/>
									</textarea></td>
					</tr>					
					<tr>
						<td></td>
						<td><input type="submit" name="giris" class="s1"/></td>	<tr></tr>												
					</tr>
					
					
				</table>					
					</form>							
				</div> 	
					
				';
			  if(@$_POST["giris"])
				  
			  {		
					$ad=$_POST["ad"];
					$soyad=$_POST["soyad"];
					$mail=$_POST["mail"];
					$mesaj=$_POST["mesaj"];
					$tel=$_POST["tel"];
				  if(empty($ad) or empty($soyad) or empty($mail) or empty($mesaj) or empty($tel))
				  {
					  echo '<font style="color:red">Formda eksik alan var.</font>';
				  }
				  elseif(!filter_var($mail,FILTER_VALIDATE_EMAIL))
					{
						echo '<font style="color:red">E-posta adresi hatalı.</font>';
					}
				  else
				  {				 		  
						  echo '<font style="color:green">Mesajınız Başarılı Bir Şekilde Gönderildi.</font>';
				  }
			  }
				  
		    ?>
        </div>
      </div>
        <h1 style="color:#EEA200;font: 220% 'Yanone Kaffeesatz', arial, sans-serif;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Muayene Adresim</h1>
        
			<div style="padding:6px 500px 150px 380px;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3067.4747955047837!2d37.01526331511331!3d39.75144697944801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407eab27367b2a11%3A0x5409baf20935c310!2s%C3%96zel+Sivas+T%C4%B1p+Merkezi!5e0!3m2!1str!2str!4v1483202351554" width="400" height="355" frameborder="0" style="border:0" allowfullscreen></iframe>
			
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
