<?php
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";


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
					<?php
					try {
							$pdo = new PDO($dsn, $dbuser, $dbpass);	#Inicia a conexão com o PDO

							$email = $_POST["email"];
							$senha = $_POST["senha"];

							$sql = "INSERT INTO usuarios SET email = :email, senha = :senha";
							$sql = $pdo->prepare($sql);
							$sql->bindValue(':email', $email);
							$sql->bindValue(':senha', $senha);
							$sql->execute();

							echo "Usúario inserido com sucesso!";


					} catch (PDOException $e) {
							echo "Falhou: ".$e->getMessage();
						}

					?>
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