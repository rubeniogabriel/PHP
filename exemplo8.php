<!DOCTYPE html>
<html>
<head>
<title>exemplo 8</title>
</head>
<body>
<?php
echo "<h1>Estrutura condicional(switch)</h1>";
$dia= getdate();
switch($dia["wday"]){
case 5:
echo "finalmente Sexta";
break;
case 6:
echo"super sábado";
break;
case 0;
echo"domingo sonolento";
break;
case 2;
echo"Aula de Programação";
break;
default;
echo"Estou esperando Final de Semana";
}
?>
</body>
</html>