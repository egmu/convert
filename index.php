<!DOCTYPE html>  
 <html>   
 <head>   
  <title>Membuat Convert Sederhana</title>   
 </head>   
 <body>   
 <?php  

 $angka = isset($_GET['angka']) ? $_GET['angka'] : "0";   
 if ($angka)   
 {   
     $no = number_format($angka, 0, ',','.') ."</br>";   
     $terbilang = ucwords(''.Terbilang($angka).'');   
 }   
 ?>  

 <hr>  

 <form action="" method="get">   
  <div style="overflow-x:auto; background-color: red">
 <table width="100%" border="0">  
  
  <tr>  
   <td width="100">Angka</td>  
   <td><input type="number" name="angka" required></td>  
  </tr>  
 
  <tr>  
   <td width="100"></td>  
   <td><input type="submit" value="Buat"></td>  
  </tr>  
 </table>  
 </form>  
   
 <?php if (!empty($angka)) { ?>  
 <table width="800" border="0" cellpadding="4" cellspacing="0" style="border: 1px solid #000;background-color: white">  
 
 <tr>  
   <td valign="top" ><h3> Terbilang </h3></td>  
   <td valign="top" ><h3> : <?php echo $terbilang;?></h3></td>  
 </tr>  

 <tr>  
   <td valign="bottom"> <h3>Angka : <?php echo $no;?> </h3> </td>  
   
 </tr>  
 </table>  
</div>
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