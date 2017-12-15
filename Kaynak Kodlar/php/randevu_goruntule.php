<?php include("ayarlar.php"); session_start(); ob_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Randevu Sistemi</title>
  <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
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
		
          <h2>Hesabım</h2>
          <ul>
		    <li><a href="randevu_al.php">Randevu Al</a></li>
            <li><a href="profilimi_duzenle.php">Hesap Bilgileriniz</a></li>
            <li><a href="randevu_goruntule.php">Randevularımı Görüntüle</a></li>
            <li><a href="../index.html" onclick="return window.confirm('Hesabınızdan çıkış yapmak istediğinizden emin misiniz?');">Çıkış Yap</a></li>
          </ul>
        </div>
      </div>
      <div style="text-align: left; width: 700px; margin: 0 0 0 0; float: left; color: #000; font: 150% 'Yanone Kaffeesatz', arial, sans-serif; text-decoration: none; ">
        <h1 style="color:#EEA200;font: 220% 'Yanone Kaffeesatz', arial, sans-serif;">Randevularımı Görüntüle</h1>
		<p> Aşagıdaki tabloda sizin muayene olmak için aldığınız ravdevu takvimi bulunmaktadır.<br>Size uygun olmayan her hangi bir tarihden Randevun-Var yazısı olan gün için o günün üzerine tıklayarak randevunuzu iptal edebilirsiniz.</p>	
			<h6>&emsp;&emsp;Pazartesi&emsp;&emsp;&emsp;&emsp;Salı&emsp;&emsp;&emsp;&emsp;Çarşamba&emsp;&emsp;&emsp;Perşembe&emsp;&emsp;Cuma</h6>
			<?php 		
			$isim=$_SESSION['isim'];	
			$sorgu=mysql_query("select * from $isim where no=1"); 			 
			while($dondur = mysql_fetch_array($sorgu))
			  {
				  $pazartesi=$dondur['pazartesi'];
				  $sali=$dondur['sali'];
				  $carsamba=$dondur['carsamba'];
				  $persembe=$dondur['persembe'];
				  $cuma=$dondur['cuma'];
			  }
			?>
			<form action="" method="post">
			<table border = '3px' >
			
				<td height='60' width='120' style='text-align:center' >
					Saat :09.00-10.00
					<input type='submit' class='s1' name='pazartesi' value=<?php echo $pazartesi; ?> />																
					<br>
				</td> 
				
				<td height='60' width='120' style='text-align:center' >
					Saat :09.00-10.00	<input type='submit' class='s1' name='sali' value=<?php echo $sali; ?> />													
					<br>
				</td>
				
				</td> 
				<td height='60' width='120' style='text-align:center' >
					Saat :09.00-10.00	
					<input type='submit' class='s1' name='carsamba' value=<?php echo $carsamba; ?> />								
					<br>				
				</td> 
				
				<td height='60' width='120' style='text-align:center' >
					Saat :09.00-10.00	
					<input type='submit' class='s1' name='persembe' value=<?php echo $persembe; ?> />									
					<br>
				</td>

				<td height='60' width='120' style='text-align:center' >
					Saat :09.00-10.00	
					<input type='submit' class='s1' name='cuma' value=<?php echo $cuma; ?> />								
					<br>
				</td>
				<?php 			
				$sorgu2=mysql_query("select * from $isim where no=2"); 			 
				while($dondur2 = mysql_fetch_array($sorgu2))
				  {
					  $pazartesi2=$dondur2['pazartesi'];
					  $sali2=$dondur2['sali'];
					  $carsamba2=$dondur2['carsamba'];
					  $persembe2=$dondur2['persembe'];
					  $cuma2=$dondur2['cuma'];
				  }
				?>
					</tr>					
				<td height='60' width='120' style='text-align:center' >
					Saat :10.00-11.00	
					<input type='submit' class='s1' name='pazartesi2' value=<?php echo $pazartesi2; ?> />								
					<br>
				</td> 
				
				<td height='60' width='120' style='text-align:center' >
					Saat :10.00-11.00	
					<input type='submit' class='s1' name='sali2' value=<?php echo $sali2; ?> />						
					<br>
				</td>
				
				</td> 
				<td height='60' width='120' style='text-align:center' >
					Saat :10.00-11.00	
					<input type='submit' class='s1' name='carsamba2' value=<?php echo $carsamba2; ?> />								
					<br>				
				</td> 
				
				<td height='60' width='120' style='text-align:center' >
					Saat :10.00-11.00		
					<input type='submit' class='s1' name='persembe2' value=<?php echo $persembe2; ?> />							
					<br>
				</td>

				<td height='60' width='120' style='text-align:center' >
					Saat :10.00-11.00	
					<input type='submit' class='s1' name='cuma2' value=<?php echo $cuma2; ?> />							
					<br>
				</td>
				<?php 			
				$sorgu3=mysql_query("select * from $isim where no=3"); 			 
				while($dondur3 = mysql_fetch_array($sorgu3))
				  {
					  $pazartesi3=$dondur3['pazartesi'];
					  $sali3=$dondur3['sali'];
					  $carsamba3=$dondur3['carsamba'];
					  $persembe3=$dondur3['persembe'];
					  $cuma3=$dondur3['cuma'];
				  }
				?>
					</tr>	
					<td height='60' width='120' style='text-align:center' >
					Saat :11.00-12.00	
					<input type='submit' class='s1' name='pazartesi' value=<?php echo $pazartesi3; ?> />									
					<br>
				</td> 
				
				<td height='60' width='120' style='text-align:center' >
					Saat :11.00-12.00	
					<input type='submit' class='s1' name='sali3' value=<?php echo $sali3; ?> />									
					<br>
				</td>
				
				</td> 
				<td height='60' width='120' style='text-align:center' >
					Saat :11.00-12.00	
					<input type='submit' class='s1' name='carsamba3' value=<?php echo $carsamba3; ?> />								
					<br>				
				</td> 
				
				<td height='60' width='120' style='text-align:center' >
					Saat :11.00-12.00	
					<input type='submit' class='s1' name='persembe3' value=<?php echo $persembe3; ?> />									
					<br>
				</td>

				<td height='60' width='120' style='text-align:center' >
					Saat :11.00-12.00	
					<input type='submit' class='s1' name='cuma3' value=<?php echo $cuma3; ?> />								
					<br>
				</td>				
					</tr>	
					<td height='60' width='120' style='text-align:center' >
					Saat :12.00-13.00	<font style="color:Purple">Öğle Arası</font>												
					<br>
				</td> 
				
				<td height='60' width='120' style='text-align:center' >
					Saat :12.00-13.00	<font style="color:Purple">Öğle Arası</font>							
					<br>
				</td>
				
				</td> <td height='60' width='120' style='text-align:center' >
					Saat :12.00-13.00	<font style="color:Purple">Öğle Arası</font>									
					<br>				
				</td> 
				
				<td height='60' width='120' style='text-align:center' >
					Saat :12.00-13.00	<font style="color:Purple">Öğle Arası</font>								
					<br>
				</td>

				<td height='60' width='120' style='text-align:center' >
					Saat :12.00-13.00	<font style="color:Purple">Öğle Arası</font>							
					<br>
				</td>
				<?php 			
				$sorgu4=mysql_query("select * from $isim where no=4"); 			 
				while($dondur4 = mysql_fetch_array($sorgu4))
				  {
					  $pazartesi4=$dondur4['pazartesi'];
					  $sali4=$dondur4['sali'];
					  $carsamba4=$dondur4['carsamba'];
					  $persembe4=$dondur4['persembe'];
					  $cuma4=$dondur4['cuma'];
				  }
				?>
					</tr>	
					<td height='60' width='120' style='text-align:center' >
					Saat :13.00-14.00	
					<input type='submit' class='s1' name='pazartesi4' value=<?php echo $pazartesi4; ?> />									
					<br>
				</td> 
				
				<td height='60' width='120' style='text-align:center' >
					Saat :13.00-14.00	
					<input type='submit' class='s1' name='sali4' value=<?php echo $sali4; ?> />						
					<br>
				</td>
				
				</td> 
				<td height='60' width='120' style='text-align:center' >
					Saat :13.00-14.00	
					<input type='submit' class='s1' name='carsamba4' value=<?php echo $carsamba4; ?> />								
					<br>				
				</td> 
				
				<td height='60' width='120' style='text-align:center' >
					Saat :13.00-14.00	
					<input type='submit' class='s1' name='persembe4' value=<?php echo $persembe4; ?> />					
					<br>
				</td>

				<td height='60' width='120' style='text-align:center' >
					Saat :13.00-14.00	
					<input type='submit' class='s1' name='cuma4' value=<?php echo $cuma4; ?> />							
					<br>
				</td>
				<?php 			
				$sorgu5=mysql_query("select * from $isim where no=5"); 			 
				while($dondur5 = mysql_fetch_array($sorgu5))
				  {
					  $pazartesi5=$dondur5['pazartesi'];
					  $sali5=$dondur5['sali'];
					  $carsamba5=$dondur5['carsamba'];
					  $persembe5=$dondur5['persembe'];
					  $cuma5=$dondur5['cuma'];
				  }
				?>
					</tr>	
					<td height='60' width='120' style='text-align:center' >
					Saat :14.00-15.00	
					<input type='submit' class='s1' name='pazartesi5' value=<?php echo $pazartesi5; ?> />						
					<br>
				</td> 
				
				<td height='60' width='120' style='text-align:center' >
					Saat :14.00-15.00	
					<input type='submit' class='s1' name='sali5' value=<?php echo $sali5; ?> />						
					<br>
				</td>
				
				</td> 
				<td height='60' width='120' style='text-align:center' >
					Saat :14.00-15.00	
					<input type='submit' class='s1' name='carsamba5' value=<?php echo $carsamba5; ?> />						
					<br>				
				</td> 
				
				<td height='60' width='120' style='text-align:center' >
					Saat :14.00-15.00	
					<input type='submit' class='s1' name='persembe5' value=<?php echo $persembe5; ?> />								
					<br>
				</td>

				<td height='60' width='120' style='text-align:center' >
					Saat :14.00-15.00	
					<input type='submit' class='s1' name='cuma5' value=<?php echo $cuma5; ?> />							
					<br>
				</td>
				<?php 			
				$sorgu6=mysql_query("select * from $isim where no=6"); 			 
				while($dondur6 = mysql_fetch_array($sorgu6))
				  {
					  $pazartesi6=$dondur6['pazartesi'];
					  $sali6=$dondur6['sali'];
					  $carsamba6=$dondur6['carsamba'];
					  $persembe6=$dondur6['persembe'];
					  $cuma6=$dondur6['cuma'];
				  }
				?>
					</tr>		
					<td height='60' width='120' style='text-align:center' >
					Saat :15.00-16.00	
					<input type='submit' class='s1' name='pazartesi6' value=<?php echo $pazartesi6; ?> />								
					<br>
				</td> 
				
				<td height='60' width='120' style='text-align:center' >
					Saat :15.00-16.00	
					<input type='submit' class='s1' name='sali6' value=<?php echo $sali6; ?> />										
					<br>
				</td>
				
				</td> 
				<td height='60' width='120' style='text-align:center' >
					Saat :15.00-16.00	
					<input type='submit' class='s1' name='carsamba6' value=<?php echo $carsamba6; ?> />							
					<br>				
				</td> 
				
				<td height='60' width='120' style='text-align:center' >
					Saat :15.00-16.00	
					<input type='submit' class='s1' name='persembe6' value=<?php echo $persembe6; ?> />									
					<br>
				</td>

				<td height='60' width='120' style='text-align:center' >
					Saat :15.00-16.00	
					<input type='submit' class='s1' name='cuma6' value=<?php echo $cuma6; ?> />									
					<br>
				</td>
				<?php 			
				$sorgu7=mysql_query("select * from $isim where no=7"); 			 
				while($dondur7 = mysql_fetch_array($sorgu7))
				  {
					  $pazartesi7=$dondur7['pazartesi'];
					  $sali7=$dondur7['sali'];
					  $carsamba7=$dondur7['carsamba'];
					  $persembe7=$dondur7['persembe'];
					  $cuma7=$dondur7['cuma'];
				  }
				?>
					</tr>	
					<td height='60' width='120' style='text-align:center' >
					Saat :16.00-17.00	
					<input type='submit' class='s1' name='pazartesi7' value=<?php echo $pazartesi7; ?> />						
					<br>
				</td> 
				
				<td height='60' width='120' style='text-align:center' >
					Saat :16.00-17.00	
					<input type='submit' class='s1' name='sali7' value=<?php echo $sali7; ?> />								
					<br>
				</td>
				
				</td> 
				<td height='60' width='120' style='text-align:center' >
					Saat :16.00-17.00	
					<input type='submit' class='s1' name='carsamba7' value=<?php echo $carsamba7; ?> />								
					<br>				
				</td> 
				
				<td height='60' width='120' style='text-align:center' >
					Saat :16.00-17.00	
					<input type='submit' class='s1' name='persembe7' value=<?php echo $persembe7; ?> />								
					<br>
				</td>

				<td height='60' width='120' style='text-align:center' >
					Saat :16.00-17.00	
					<input type='submit' class='s1' name='cuma7' value=<?php echo $cuma7; ?> />								
					<br>
				</td>
				
					</tr>	
				 </table>
				</form> 
				<?php 		
				$isim=$_SESSION['isim'];	
				 if(isset($_POST['pazartesi']))
				 {	$deger="Randevun-Yok";
					$deger2=1;
					$deger3="Boş";
					$deger4=1;
					
					 $sorgu9=mysql_query("update $isim set pazartesi='$deger' where no='$deger2'");					
					 $sorgu10=mysql_query("update doktor_randevu set pazartesi='$deger3' where no='$deger4'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['pazartesi2']))
				 {	$deger="Randevun-Yok";
					$deger2=2;
					$deger3="Boş";
					$deger4=2;
					$sorgu10=mysql_query("update doktor_randevu set pazartesi='$deger3' where no='$deger4'");	
					 $sorgu9=mysql_query("update $isim set pazartesi='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['pazartesi3']))
				 {	$deger="Randevun-Yok";
					$deger2=3;
					$deger3="Boş";
					$deger4=3;
					$sorgu10=mysql_query("update doktor_randevu set pazartesi='$deger3' where no='$deger4'");	
					 $sorgu9=mysql_query("update $isim set pazartesi='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['pazartesi4']))
				 {	$deger="Randevun-Yok";
					$deger2=4;
					$deger3="Boş";
					$deger4=4;
					$sorgu10=mysql_query("update doktor_randevu set pazartesi='$deger3' where no='$deger4'");	
					 $sorgu9=mysql_query("update $isim set pazartesi='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['pazartesi5']))
				 {	$deger="Randevun-Yok";
					$deger2=5;
					$deger3="Boş";
					$deger4=5;
					$sorgu10=mysql_query("update doktor_randevu set pazartesi='$deger3' where no='$deger4'");	
					 $sorgu9=mysql_query("update $isim set pazartesi='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['pazartesi6']))
				 {	$deger="Randevun-Yok";
					$deger2=6;
					$deger3="Boş";
					$deger4=6;
					$sorgu10=mysql_query("update doktor_randevu set pazartesi='$deger3' where no='$deger4'");	
					 $sorgu9=mysql_query("update $isim set pazartesi='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['pazartesi7']))
				 {	$deger="Randevun-Yok";
					$deger2=7;
					$deger3="Boş";
					$deger4=7;
					$sorgu10=mysql_query("update doktor_randevu set pazartesi='$deger3' where no='$deger4'");	
					 $sorgu9=mysql_query("update $isim set pazartesi='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['sali']))
				 {	$deger="Randevun-Yok";
					$deger2=1;
					$deger3="Boş";
					$deger4=1;
					$sorgu10=mysql_query("update doktor_randevu set sali='$deger3' where no='$deger4'");	
					 $sorgu9=mysql_query("update $isim set sali='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['sali2']))
				 {	$deger="Randevun-Yok";
					$deger2=2;
					$deger3="Boş";
					$deger4=2;
					$sorgu10=mysql_query("update doktor_randevu set sali='$deger3' where no='$deger4'");	
					 $sorgu9=mysql_query("update $isim set sali='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['sali3']))
				 {	$deger="Randevun-Yok";
					$deger2=3;
					$deger3="Boş";
					$deger4=3;
					$sorgu10=mysql_query("update doktor_randevu set sali='$deger3' where no='$deger4'");	
					 $sorgu9=mysql_query("update $isim set sali='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['sali4']))
				 {	$deger="Randevun-Yok";
					$deger2=4;
					$deger3="Boş";
					$deger4=4;
					$sorgu10=mysql_query("update doktor_randevu set sali='$deger3' where no='$deger4'");	
					 $sorgu9=mysql_query("update $isim set sali='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['sali5']))
				 {	$deger="Randevun-Yok";
					$deger2=5;
					$deger3="Boş";
					$deger4=5;
					$sorgu10=mysql_query("update doktor_randevu set sali='$deger3' where no='$deger4'");	
					 $sorgu9=mysql_query("update $isim set sali='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['sali6']))
				 {	$deger="Randevun-Yok";
					$deger2=6;
					$deger3="Boş";
					$deger4=6;
					$sorgu10=mysql_query("update doktor_randevu set sali='$deger3' where no='$deger4'");	
					 $sorgu9=mysql_query("update $isim set sali='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['sali7']))
				 {	$deger="Randevun-Yok";
					$deger2=7;
					$deger3="Boş";
					$deger4=7;
					$sorgu10=mysql_query("update doktor_randevu set sali='$deger3' where no='$deger4'");	
					 $sorgu9=mysql_query("update $isim set sali='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['carsamba']))
				 {	$deger="Randevun-Yok";
					$deger2=1;
					$deger3="Boş";
					$deger4=1;
					$sorgu10=mysql_query("update doktor_randevu set carsamba='$deger3' where no='$deger4'");	
					 $sorgu9=mysql_query("update $isim set carsamba='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['carsamba2']))
				 {	$deger="Randevun-Yok";
					$deger2=2;
					$deger3="Boş";
					$deger4=2;
					$sorgu10=mysql_query("update doktor_randevu set carsamba='$deger3' where no='$deger4'");
					 $sorgu9=mysql_query("update $isim set carsamba='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['carsamba3']))
				 {	$deger="Randevun-Yok";
					$deger2=3;
					$deger3="Boş";
					$deger4=3;
					$sorgu10=mysql_query("update doktor_randevu set carsamba='$deger3' where no='$deger4'");
					 $sorgu9=mysql_query("update $isim set carsamba='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['carsamba4']))
				 {	$deger="Randevun-Yok";
					$deger2=4;
					$deger3="Boş";
					$deger4=4;
					$sorgu10=mysql_query("update doktor_randevu set carsamba='$deger3' where no='$deger4'");
					 $sorgu9=mysql_query("update $isim set carsamba='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['carsamba5']))
				 {	$deger="Randevun-Yok";
					$deger2=5;
					$deger3="Boş";
					$deger4=5;
					$sorgu10=mysql_query("update doktor_randevu set carsamba='$deger3' where no='$deger4'");
					 $sorgu9=mysql_query("update $isim set carsamba='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['carsamba6']))
				 {	$deger="Randevun-Yok";
					$deger2=6;
					$deger3="Boş";
					$deger4=6;
					$sorgu10=mysql_query("update doktor_randevu set carsamba='$deger3' where no='$deger4'");
					 $sorgu9=mysql_query("update $isim set carsamba='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['carsamba7']))
				 {	$deger="Randevun-Yok";
					$deger2=7;
					$deger3="Boş";
					$deger4=7;
					$sorgu10=mysql_query("update doktor_randevu set carsamba='$deger3' where no='$deger4'");
					 $sorgu9=mysql_query("update $isim set carsamba='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['persembe']))
				 {	$deger="Randevun-Yok";
					$deger2=1;
					$deger3="Boş";
					$deger4=1;
					$sorgu10=mysql_query("update doktor_randevu set persembe='$deger3' where no='$deger4'");
					 $sorgu9=mysql_query("update $isim set persembe='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['persembe2']))
				 {	$deger="Randevun-Yok";
					$deger2=2;
					$deger3="Boş";
					$deger4=2;
					$sorgu10=mysql_query("update doktor_randevu set persembe='$deger3' where no='$deger4'");
					 $sorgu9=mysql_query("update $isim set persembe='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['persembe3']))
				 {	$deger="Randevun-Yok";
					$deger2=3;
					$deger3="Boş";
					$deger4=3;
					$sorgu10=mysql_query("update doktor_randevu set persembe='$deger3' where no='$deger4'");
					 $sorgu9=mysql_query("update $isim set persembe='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['persembe4']))
				 {	$deger="Randevun-Yok";
					$deger2=4;
					$deger3="Boş";
					$deger4=4;
					$sorgu10=mysql_query("update doktor_randevu set persembe='$deger3' where no='$deger4'");
					 $sorgu9=mysql_query("update $isim set persembe='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['persembe5']))
				 {	$deger="Randevun-Yok";
					$deger2=5;
					$deger3="Boş";
					$deger4=5;
					$sorgu10=mysql_query("update doktor_randevu set persembe='$deger3' where no='$deger4'");
					 $sorgu9=mysql_query("update $isim set persembe='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['persembe6']))
				 {	$deger="Randevun-Yok";
					$deger2=6;
					$deger3="Boş";
					$deger4=6;
					$sorgu10=mysql_query("update doktor_randevu set persembe='$deger3' where no='$deger4'");
					 $sorgu9=mysql_query("update $isim set persembe='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['persembe7']))
				 {	$deger="Randevun-Yok";
					$deger2=7;
					$deger3="Boş";
					$deger4=7;
					$sorgu10=mysql_query("update doktor_randevu set persembe='$deger3' where no='$deger4'");
					 $sorgu9=mysql_query("update $isim set persembe='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['cuma']))
				 {	$deger="Randevun-Yok";
					$deger2=1;
					$deger3="Boş";
					$deger4=1;
					$sorgu10=mysql_query("update doktor_randevu set cuma='$deger3' where no='$deger4'");
					 $sorgu9=mysql_query("update $isim set cuma='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['cuma2']))
				 {	$deger="Randevun-Yok";
					$deger2=2;
					$deger3="Boş";
					$deger4=2;
					$sorgu10=mysql_query("update doktor_randevu set cuma='$deger3' where no='$deger4'");
					 $sorgu9=mysql_query("update $isim set cuma='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['cuma3']))
				 {	$deger="Randevun-Yok";
					$deger2=3;
					$deger3="Boş";
					$deger4=3;
					$sorgu10=mysql_query("update doktor_randevu set cuma='$deger3' where no='$deger4'");
					 $sorgu9=mysql_query("update $isim set cuma='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['cuma4']))
				 {	$deger="Randevun-Yok";
					$deger2=4;
					$deger3="Boş";
					$deger4=4;
					$sorgu10=mysql_query("update doktor_randevu set cuma='$deger3' where no='$deger4'");
					 $sorgu9=mysql_query("update $isim set cuma='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['cuma5']))
				 {	$deger="Randevun-Yok";
					$deger2=5;
					$deger3="Boş";
					$deger4=5;
					$sorgu10=mysql_query("update doktor_randevu set cuma='$deger3' where no='$deger4'");
					 $sorgu9=mysql_query("update $isim set cuma='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['cuma6']))
				 {	$deger="Randevun-Yok";
					$deger2=6;
					$deger3="Boş";
					$deger4=6;
					$sorgu10=mysql_query("update doktor_randevu set cuma='$deger3' where no='$deger4'");
					 $sorgu9=mysql_query("update $isim set cuma='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
				 }
				 if(isset($_POST['cuma7']))
				 {	$deger="Randevun-Yok";
					$deger2=7;
					$deger3="Boş";
					$deger4=7;
					$sorgu10=mysql_query("update doktor_randevu set cuma='$deger3' where no='$deger4'");
					 $sorgu9=mysql_query("update $isim set cuma='$deger' where no='$deger2'");					
						if($sorgu9)
						{ echo '<META HTTP-EQUIV="Refresh" CONTENT="0.1;URL=randevu_goruntule.php">';}
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