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
			<?php
				$x = $_POST['num1'];
				$y = $_POST['num2'];
		  		$data = $_POST['num3'];

		  		$dataatual = date("d/m/Y");

		  		if ($data === $dataatual) {
		  			echo "Seu nome é: ".$x."<br>";
		  			echo "Sua idade é: ".$y."<br>";
		  			echo "Sua data é: ".$dataatual;
		  		}else {
		  			echo "Desculpe você digitou a data errada!!";
		  		}

				

    	?> 


			<br><br>
			<a href="index.php" class="btn btn-medium "><i class="material-icons left" >close</i>Voltar</a>
		</section>  	    	
       
        
 

      <!--javascript e jquery-->
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
	  <script type="text/javascript" src="assets/jquery/jquery-3.3.1.js"></script>
    </body>
  </html>