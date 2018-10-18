<?php

require_once("../../includes/functions.php");

if(isset($_POST["add_flight"])){
    
$flight_source = $_POST["flight_source"];
$flight_destination = $_POST["flight_destination"];
$flight_duration = $_POST["flight_duration"];
$flight_arrival = $_POST["flight_arrival"];
$flight_capacity = $_POST["flight_capacity"];
    
$query = "INSERT INTO flight(source,destination,duration,arrival_time,capacity) VALUES('$flight_source','$flight_destination','$flight_duration','$flight_arrival','$flight_capacity')";

$result = mysqli_query($connection,$query);
checkQueryResult($result);
}

redirect("../addflight.php");


?>