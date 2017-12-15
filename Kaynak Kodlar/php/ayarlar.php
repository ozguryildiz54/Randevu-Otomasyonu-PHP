<?php
if (!@$baglanti=mysql_connect("localhost","root","")){
    die("Mysql'e bağlantı kurulamadı!".mysql_error());
}
if (!@mysql_select_db("randevu_sistemi",$baglanti)){
    die("Veritabanına bağlantı kurulamadı!".mysql_error());
}    
	
mysql_query("SET NAMES 'utf8' COLLATE 'utf8_unicode_ci'");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET COLLATION_CONNECTION = 'utf8_unicode_ci'"); 
?>