<!DOCTYPE html>
<html>
<head>
  <title>Reportar</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8/">
   <link rel="stylesheet" type="text/css" href="estilo_reporte.css">
</head>

<body>


<h1>Llena los datos para completar tu reporte</h1>
<form action="/action_page.php">

  <m>�Que quieres reportar?</m><br>
  <input type="radio" name="rep" value="usuario" checked> Este usuario<br>
  <input type="radio" name="rep" value="personaje" checked> Este personaje<br>
  <br>

  <m>�En qu� infringe las normas?</m><br>
  <input type="radio" name="reporte" value="Desnudos" checked> Contenido Sexual<br>
  <input type="radio" name="reporte" value="Violencia"> Violencia o Maltrato<br>
  <input type="radio" name="reporte" value="Spam"> Spam<br>
  <input type="radio" name="reporte" value="Otro"> Otro<br> 

<br>
Comentarios:<br>
  <input type="text" name="comentario">
  <br> 
  
  <br>
  <input type="submit" value="Enviar">

</form> 
<br>
<l>Tu reporte se enviar� a un administrador para su revisi�n. <br>
	<l>Gracias por tus comentarios


</body>
</html>