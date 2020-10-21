<?php
//Instantiates the mysqli_class and creates a connection to host localhost
$connection = new mysqli("127.0.0.1", "root", "mysqladmin", "dbwebphp"); 

if(mysqli_connect_errno()){
    echo "Error: The connection can't realize";
    exit;
}

echo "The connecion is: OK";

//Get the query from the textbox named Search
if(isset($_POST['Search'])){
    $term = trim($_POST['Search']);
}; 

if(!$term)
{
    echo "<p>The textbox can't be blank<br/</p>";
    exit;
}

//Database query
$query = "SELECT * FROM tb_vulnerabilities WHERE WEB LIKE '%". $term ."%'";

if($result = $connection->query($query)){
    
        while($record = $result->fetch_assoc()){ //Get the result in an array
            //printf("%s (%s)\n", $record["ID"], $record["WEB"]); //Show the result
            $web = $record['WEB']; //Save the result in another variable
            
            switch($web){ //Compare the result
                case "IDOR":
                    header("Location: IDOR.php"); //Redirect to the page if exists
                    break;
                case "XSS":
                    header("Location: XSS.php");
                    break;
                case "SQLI":
                    header("Location: SQLi.php");
                    break; 
                
                default:
                    echo "Page in construction\n";
                    break;
            }
                
        }
        $connection->free();
    }
    
//Get the query from the textbox named Insert
$data_to_insert = $connection->escape_string($_REQUEST['Insert']);
//INSERT DATA
$insert = "INSERT INTO tb_vulnerabilities (WEB) VALUES('". $data_to_insert . "')";

if($result = $connection->query($insert) == TRUE){
    echo "SE HA INSERTADO EL DATO CON EXITO";
}else{
    echo "Error:" . $data_to_insert . "<br>" . $connection->error;
}
    

mysqli_close($connection);
            