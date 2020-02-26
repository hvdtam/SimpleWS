<?php
$dbLocalhost = new mysqli("localhost", "id10209423_tamk", "shinnosuke" , "id10209423_ws");

if (isset($_GET['id']) ){
    $search = $_GET['id'];
        $sql="select * from users where id like '%$search%'"; 
        $res=$dbLocalhost->query($sql);

if(isset($_GET['format']) )
    $format = $_GET['format']; //Get Format
    
    if ($format == 'json') {
	    header('Content-type: application/json; charset=utf-8');
        echo '{';
        while($row=$res->fetch_assoc()){
            echo '"id": ' .$row["id"];
            echo ', ';
            echo '"name": "'.$row["name"];
            echo '", ';
            echo '"group": "'.$row["group"];
            echo '"} ';
            }
    }

    if ($format == 'xml') {
        header('Content-type: text/xml; charset=utf-8');
        echo "<document>";
        while($row=$res->fetch_assoc()){
            echo '<id>' .$row["id"];
            echo '</id>';
            echo '<name>'.$row["name"];
            echo '</name>';
            echo '<group>'.$row["group"];
            echo '</group>';
            }
        echo "</document>";
    }
    mysqli_close($dbLocalhost); // Close Database
} 
else {
    echo "Error: " . $sql . "<br>" . $dbLocalhost->error; 
    }  
?>