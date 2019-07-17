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
    	<?php 
  			$dateatual = date('d/m/Y');
			$datefrete = date('d/m/Y', strtotime("+10 days"));
			    			
		?>
    	
    	<div class="container">
    		<div class="row">
    			<div class="col l4 center-align right pull-l4">
    				<h1>frete</h1><br>
    				<blockquote class="left">Estamos com frete.<span class="new badge" data-badge-caption="GRATIS"></span></blockquote><br>
    				<br><br>

    			<ul>
    				<li class="truncate card-panel">
    					<?php
    					 echo "Sua data atual/data da compra é: ".$dateatual;
    					 ?>
    				</li><br>
    				<li class="truncate card-panel">
    					<?php
    					 echo "Sua data de entrega é: ".$datefrete;
    					 ?>

    				</li>
    			</ul>
    			<p class="left">O prazo de entrega é de 10 dias.  </p>
    				
    			</div>
    		</div>    	
       	</div>


        
 

      <!--javascript e jquery-->
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
	  <script type="text/javascript" src="assets/jquery/jquery-3.3.1.js"></script>
    </body>
  </html>
