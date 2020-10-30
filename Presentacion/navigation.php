<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <title></title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top: -10px;">
    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
    	</button>
    	<a class="navbar-brand"></a>
    	
    	<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    	
    		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    			<li class="nav-item active">
    				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    			</li>
    			<li class="nav-item">
       				<a class="nav-link" href="#">Vulnerabilities</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#">Reports</a>
      			</li>
    		</ul>
    	
            <form class="form-inline" action="../Datos/connection.php" method="POST">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="Search"> 
                <button class="btn btn-secondary" type="submit">Search</button>
            </form>
            
    	</div>
	</nav>
	</body>
</html>

