<!DOCTYPE html>

<title> Practica3 </title>
<center>
<h1> Conversion de dolares a pesos </h1>
</center>
<body>

 <?php
 $dolar=0;
 $kasacambio=15.5;
 $contador=0;
 $op=0;

 for($dolar=1; $dolar<=10; $dolar++){
  
 $op=$dolar*15.5;
 $contador++;
 
 if($dolar<=1){
  echo $dolar." Dolar = ". $op. " Pesos ";
 }
 else{
 echo $dolar." Dolares = ". $op. " Pesos";
 } 
 } 
 ?>

</body>
</html>