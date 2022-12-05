<?php  
function conectar(){
        $servername = "localhost";  
        $username = "root";  
        $password = "";  
        $database = "beemarket_db"; 

$conn = new mysqli($servername, $username, $password, $database);
if($conn->connect_error){
    $reponse['error']=true;
    $reponse['message']="Connection failed: " . $conn->connect_error;
    die(json_encode($reponse));
}

return $conn;
}
?>
