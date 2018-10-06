<?php
$Per = $ID = "1";
if(!isset($_SESSION)){
  session_start();
  $Per = $_SESSION['Permiso'];
  $ID = $_SESSION['IDU'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Convocatoria</title>
	    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/hover-min.css" media="all">
</head>
<body>
<div class="row">
	<div class="input-field col s6">
		<i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="frmuser" class="validate">
          <label for="icon_prefix">Nombre</label>
	</div>
	<div class="input-field col s6">
		<i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="frmuser" class="validate">
          <label for="icon_prefix">Name</label>
	</div>
</div>
<div class="row">
	<div class="input-field col s6">
		<i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="frmuser" class="validate">
          <label for="icon_prefix">Descripcion</label>
	</div>
	<div class="input-field col s6">
		<i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="frmuser" class="validate">
          <label for="icon_prefix">Description</label>
	</div>
</div>
<div class="row">
	<div class="input-field col s6">
		<i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="frmuser" class="validate">
          <label for="icon_prefix">Descripcion</label>
	</div>
	<div class="input-field col s6">
		<i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="frmuser" class="validate">
          <label for="icon_prefix">Description</label>
	</div>
</div>
<div class="row">
	<div class="input-field col s12">
		<i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="frmuser" class="validate">
          <label for="icon_prefix">Documento pdf</label>
	</div>
</div>
<div class="row">
	<div class="input-field col s12">
		<i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="frmuser" class="validate">
          <label for="icon_prefix">Image</label>
	</div>
</div>
<div class="row">
	<div class="input-field col s6">
		<i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="date" name="frmuser" class="validate">
          <label for="icon_prefix">Fecha de inicio</label>
	</div>
	<div class="input-field col s6">
		<i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="date" name="frmuser" class="validate">
          <label for="icon_prefix">Fecha fin</label>
	</div>
</div>

</body>
</html>