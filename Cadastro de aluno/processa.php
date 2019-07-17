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
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				$num3 = $_POST['num3'];
				$num4 = $_POST['num4'];
				$num5 = $_POST['num5'];
				$x = 1;
				$array = array(
					"1" => $num1,
					"2" => $num2,
					"3" => $num3,
					"4" => $num4,
					"5" => $num5
				);

				foreach ($array as $chave => $dados) {	
					
				if ($array and $dados) {
					
				
				print "<table class='striped'>";
		        print"<thead>";
		          print"<tr>";
		              print"<th>Numero:</th>";
		             print "<th>Nome:</th>";
		         print "</tr>";
		        print"</thead>";

		       print"<tbody>";
		         print "<tr>";
		          print  "<td>".$chave."</td>";
		           print "<td>".$dados."</td>";
		        print  "</tr>";
		       print "</tbody>";
		     print "</table>";

		     $x++;
		     }else{
		     	echo "<div class='card-panel amber accent-3'>Algo deu errado, Volte e confira!!</div>";
		     }
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