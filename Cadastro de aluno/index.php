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
			<h5 class="center-align">Formulario do nome dos alunos:</h5>
			<form method="post" action="processa.php">
				N-1 Aluno: 
				<input type="text" placeholder="Digite o nome do aluno" name="num1" riquered autofocus><br>
				N-2 Aluno:
				<input type="text" placeholder="Digite o nome do aluno" name="num2" riquered>
				N-3 Aluno:
				<input type="text" placeholder="Digite o nome do aluno" name="num3" riquered>
				N-4 Aluno:
				<input type="text" placeholder="Digite o nome do aluno" name="num4" riquered>
				N-5 Aluno:
				<input type="text" placeholder="Digite o nome do aluno" name="num5" riquered>
				<input class="btn-large" type="submit" value="Enviar">
			</form>
			
		</section>    	    	
       
        
 

      <!--javascript e jquery-->
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
	  <script type="text/javascript" src="assets/jquery/jquery-3.3.1.js"></script>
    </body>
  </html>
