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
    	
    	<div class="container">
    		<div class="row">
    			<div class="col l4 center-align right pull-l4">
    				
    	<form method="post" action="processa.php">
    		<input type="text" name="num1" placeholder="Digite seu nome..." autofocus><br>
    		<input type="number" name="num2" placeholder="Digite sua idade...">
    		<input type="text" name="num3" max="27999919" placeholder="Digite a data que esta se cadastrando...">
    		<input type="submit" value="Enviar" class="btn waves-effect ">
    	</form> 	
    			</div>
    		</div>    	
       	</div>


        
 

      <!--javascript e jquery-->
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
	  <script type="text/javascript" src="assets/jquery/jquery-3.3.1.js"></script>
    </body>
  </html>
