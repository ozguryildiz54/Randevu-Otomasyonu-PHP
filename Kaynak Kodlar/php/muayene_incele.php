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
    <div>
      <div style="color:#EEA200;font: 150% 'Yanone Kaffeesatz', arial, sans-serif;"><br><br>
        <h1 style="color:#EEA200;font: 220% 'Yanone Kaffeesatz', arial, sans-serif;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Muayenemden Karaler</h1>
					<form action="" method="post">
						<table	cellpadding="3" cellspacing="3">
					<tr>
						<td><img src="../images/1.jpg" style="width:500px; height:400px;" ></td>								
						<td><img src="../images/2.jpg" style="width:500px; height:400px;"></td>						
					</tr>
					<tr>
						<td><img src="../images/3.jpg" style="width:500px; height:400px;"></td>						
						<td><img src="../images/4.jpg" style="width:500px; height:400px;"></td>		
					</tr>								
				</table>
					</form>
			  
      </div>
    </div><br><br>
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
