
<?php
$N1=$_POST["N1"];
$N2=$_POST["N2"];
$radio=$_POST["radio"];
// pruebas
	if (is_numeric($N1) &&	is_numeric($N2) )
     switch($radio)
	  {
		case "Sumar": { $result=$N1+$N2;
			           echo("$N1 + $N2  = $result");
					  break; } 
		case "Restar":	{ $result=$N1 - $N2;
			           echo("$N1 - $N2  = $result");
					  break; } 
		case "Multiplicar":	{ $result=$N1*$N2;
			           echo("$N1 x $N2  = $result");
					  break; } 
				
		case "Dividir":	{ if ($N2!=0) {
			                $result=$N1/$N2;
			                echo("$N1 / $N2  = $result");}
						  else echo("DIVISIÓN POR CERO");
					  break; } 

	} /* Fin del switch. */
	
	else {echo ("Error: No se ha introducido alguno de los números<br>");
	      //header("Location:calculadora.html"); 
           
           }

echo("<a href='calculadora.html'>Volver a la Calculadora</a>");	
?>