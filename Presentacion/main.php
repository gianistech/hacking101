<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="mystyles.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <title>Web Vulnerabilities</title>
    </head>
    <body>
        <?php require_once 'header.php';?>
        <?php require_once 'navigation.php';?>
        
        <!--PRUEBA DE CONEXIÓN
        <?php require_once '../Datos/connection.php';
            
        $cn = new connection();
        
        $cn->conectar();
    
        ?>
        -->
        <div class="container">    
        	<div class="card-group">
  				<div class="card">
    			<img src="images/cross-site-scripting-xss.jpg" class="card-img-top" alt="...">
    		<div class="card-body">
      			<h5 class="card-title">XSS</h5>
      			<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      			<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    		</div>
  			</div>
  			<div class="card">
    			<img src="images/sqlinjection.jpg" class="card-img-top" alt="...">
    			<div class="card-body">
      				<h5 class="card-title">SQL Injection</h5>
      				<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    			</div>
  			</div>
  			<div class="card">
    			<img src="images/idor.png" class="card-img-top" alt="...">
    			<div class="card-body">
      				<h5 class="card-title">IDOR</h5>
      				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    			</div>
  			</div>
		</div>
        </div>
        
        <?php require_once 'footer.php';?>
    </body>
</html>