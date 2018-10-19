<?php

require_once("../../includes/functions.php");

if(isset($_GET['q'])){
    $variable = $_GET['q'];

$variable = str_replace(".'","",$variable);
$variable = str_replace("'.","",$variable);


$query = "UPDATE users set is_verified=1 WHERE user_id=$variable";
$result  = mysqli_query($connection,$query);
checkQueryResult($result);
    
header("location: ../../index.php");
}

?>