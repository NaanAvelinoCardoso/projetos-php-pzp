<?php 
session_start();

if (isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
	echo "Àrea restrita...";
} else {
	header("Location: processa.php");
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
    	<?php 
  			$dateatual = date('d/m/Y');
			$datefrete = date('d/m/Y', strtotime("+10 days"));
			    			
		?>
    	
    	<div class="container">
    		<div class="row">
    			<div class="col l4 center-align right pull-l4">

    				
    			</div>
    		</div>    	
       	</div>


        
 

      <!--javascript e jquery-->
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
	  <script type="text/javascript" src="assets/jquery/jquery-3.3.1.js"></script>
    </body>
  </html>
