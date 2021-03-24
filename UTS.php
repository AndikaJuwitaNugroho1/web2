<HTML> 
<HEAD> 
<TITLE> UJIAN TENGAH SEMESTER </TITLE> 
</HEAD> 
<BODY> 
<center> 
<h1> 
<?php  
echo"Data Pemantau Covid19 Wilayah DKI Jakarta";
echo " Per "; 
echo date('d-F-Y'); 
echo "<br>dan jam "; 
echo date('h:i:s a');  
$sekarang = getdate(); $bulan = $sekarang['month']; 
$hari = $sekarang ['mday']; 
$tahun = $sekarang ['year']; 
$jam = $sekarang['hours']; 
if ($jam <= 11) { 
} elseif ($jam > 11 and $jam <= 15) { 
 echo "Selamat Siang"; 
} elseif ($jam > 15 and $jam <= 18) { 
 echo "Selamat Sore"; 
} elseif ($jam > 18) { 
 echo "Selamat Malam"; 
}
?> 
</h1>  
<h1>Andika Juwita Nugroho / 171011450352<h1>
<div class="container mt-5 mx-auto">
<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
  <center>
   <h1></h1>
  </center>
    <table class="table table-bordered mt-5">
     <tr>
      <th>Positif</th>
      <th>Dirawat</th>
      <th>Sembuh</th>
      <th>Meninggal</th>
     </tr>
     <tr>
     <th>370.582</th>
     <th>3.463</th>
     <th>357.100</th>
     <th>6.160</th>
     </tr>
     </div>
</BODY> 
</HTML> 