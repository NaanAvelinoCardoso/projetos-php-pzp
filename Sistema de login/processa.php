<?php 
session_start();
if (isset($_POST['email']) && empty($_POST['email']) == false) {
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$host = "mysql:dbname=blog;host=localhost";
	$user = "root";
	$pass = "";

	try {
		$db = new PDO($host, $user, $pass);

		$sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

		if ($sql->rowCount() > 0) {
			
			$dado = $sql->fetch();

			$_SESSION['id'] = $dado['id'];

			header("Location: index.php");

		}


	} catch (PDOException $e) {
		echo "Falha: ".$e->getMessage();
	}
}


?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Importado Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Importado materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Para deixa o site mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    	
		
			
		<section class="container">
			<div class="row">
				<div class="col s12 m6 l4 offset-l4">
					<form method="POST">
							E-mail:<br>
							<input type="email" name="email"><br><br>

							Senha:<br>
							<input type="password" name="senha"><br><br>
							<input type="submit" value="Entrar" class="btn">
					</form>
				</div>
			</div>
			


			<br><br>
			<center><a href="index.php" class="btn btn-medium "><i class="material-icons left" >close</i>Voltar</a></center>
		</section>  	    	
       
        
 

      <!--javascript e jquery-->
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
	  <script type="text/javascript" src="assets/jquery/jquery-3.3.1.js"></script>
    </body>
  </html>