<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ingresar</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/hover-min.css" media="all">

    <script type="text/javascript" src="js/materialize.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/general.css">
</head>

<body class=" light-blue">
  <div class="row centrar ">
    <form class="col s12 " action="#" method="POST">
      <div class="row ">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="frmuser" class="validate">
          <label for="icon_prefix">Usuario</label>
        </div>
       </div>
        <div class="row ">
	        <div class="input-field col s6">
	          <i class="material-icons prefix">lock</i>
	          <input id="icon_telephone" type="password" name="frmpass" class="validate">
	          <label for="icon_telephone">Clave</label>
	        </div>
        </div>
        <div class="row ">
        	<div class="input-field col s6">
				  <button class="btn waves-effect waves-light" type="submit" name="btnlog">Entrar
				    <i class="material-icons right">send</i>
				  </button>
        	</div>
        </div>

    </form>
  </div>
<?php
if(isset($_POST['btnlog']))
{
	$user = $clave = "";

	if(!empty($_POST['frmuser']))
		$user = $_POST['frmuser'];
	if(!empty($_POST['frmpass']))
		$clave = $_POST['frmpass'];

	if($user != "" && $clave != ""){
		include('fun/conexion.php');
		 $Cmdsql = "Call Selectlogin('$user','$clave')";
	     // mysqli_stmt_execute($call);
	     $Val = mysqli_query($con,$Cmdsql);
	     if($Val){
	     	if(mysqli_num_rows($Val) > 0){
	     		/*login creado */
	     		$row = mysqli_fetch_assoc($Val);
	     		$_SESSION['IDU'] = $row['ID'];
	     		$_SESSION['Permiso'] = $row['Permiso'];
	     		header("Location: index.php");
	     	}
	     	else
	     		{ 
	     			echo "No login";
	     		}
	     	
	     }
	     else{
	     	echo "Error";
	     }

	}
	else
	{
		echo "Campos vacios";
	}
}
?>
</body>
</html>