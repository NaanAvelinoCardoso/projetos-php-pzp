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
            <h5>Sistema de atualizar banco de daos </h5>
            <form method="post" action="processa.php">
              <input type="text" name="email" placeholder="Digite um email" autofocus>
              <input type="text" name="senha" placeholder="Digite uma senha"><br><br><br>
              Escolha o id, o id escolhido sera o id atualizado:
              <input type="number" name="id" placeholder="Digite um id" >
              <input type="submit" value="UPDATE" class="btn btn-large">
            </form>
    				
    			</div>
    		</div>    	
       	</div>


        
 

      <!--javascript e jquery-->
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
	  <script type="text/javascript" src="assets/jquery/jquery-3.3.1.js"></script>
    </body>
  </html>
