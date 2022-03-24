<!DOCTYPE html>  
 <html>   
 <head>   
  <title>Membuat Convert Sederhana</title>   
 </head>   
 <body>   
 <?php  

 $nominal = isset($_GET['nominal']) ? $_GET['nominal'] : "0";   
 if ($nominal)   
 {   
     $uang = number_format($nominal, 0, ',','.') ."</br>";   
     $terbilang = ucwords(''.Terbilang($nominal).'');   
 }   
 ?>  

 <hr>  

 <form action="" method="get">   
 <table width="100%" border="0">  
  
  <tr>  
   <td width="100">Angka</td>  
   <td><input type="text" name="nominal" required></td>  
  </tr>  
 
  <tr>  
   <td width="100"></td>  
   <td><input type="submit" value="Buat"></td>  
  </tr>  
 </table>  
 </form>  
   
 <?php if (!empty($nominal)) { ?>  
 <table width="800" border="0" cellpadding="4" cellspacing="0" style="border: 1px solid #000;">  
 
 <tr>  
   <td valign="top" > Sejumlah </td>  
   <td valign="top" > : <?php echo $terbilang;?></td>  
 </tr>  

 <tr>  
   <td valign="bottom"> <h3><?php echo $uang;?> </h3> </td>  
   
 </tr>  
 </table>  
  <?php } ?> 
 <style>  
 a { text-decoration: none; color: #0903E8; font-family: verdana; }  
 a:hover { color: #FA3C3C; }  
 </style>  
 

 </body>   
 </html>   
 <?php  
 //thanks to miswanphp10.blogspot.co.id   
 function Terbilang($x)   
 {   
  $bilangan = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");   
  if ($x < 12)   
  return " " . $bilangan[$x];   
  elseif ($x < 20)   
   return Terbilang($x - 10) . "belas";   
  elseif ($x < 100)   
   return Terbilang($x / 10) . " Puluh" . Terbilang($x % 10);   
  elseif ($x < 200)   
   return " seratus" . Terbilang($x - 100);   
  elseif ($x < 1000)   
   return Terbilang($x / 100) . " Ratus" . Terbilang($x % 100);   
  elseif ($x < 2000)   
   return " seribu" . Terbilang($x - 1000);   
  elseif ($x < 1000000)   
   return Terbilang($x / 1000) . " Ribu" . Terbilang($x % 1000);   
  elseif ($x < 1000000000)   
   return Terbilang($x / 1000000) . " Juta" . Terbilang($x % 1000000);
   elseif ($x < 1000000000000)   
   return Terbilang($x / 1000000000) . " Milyar " . Terbilang($x % 1000000000);
   elseif ($x < 1000000000000000)   
   return Terbilang($x / 1000000000000) . " Triliun " . Terbilang($x % 1000000000000);
    

 }   
 ?>   