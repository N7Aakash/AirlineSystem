<?php

require_once("../../includes/functions.php");


$columns = array("flight.flight_id","flight.source","flight.destination","flight.duration","flight.arrival_time","flight.capacity");
$query = "SELECT * FROM flight WHERE flight.is_deleted=0";

if(isset($_POST["search"]["value"])){
    $query .= " AND (flight.source like '%".$_POST["search"]["value"]."%' OR flight.destination like '%". $_POST['search']['value']."%')";
}
if(isset($_POST["order"])){
    $query .= " ORDER BY ".$columns[$_POST['order']['0']['column']]." ".$_POST['order']['0']['dir'];
}
else{
    $query .=" ORDER BY ".$columns[0]." ASC";
}
$query1="";
if($_POST["length"]!=-1){
    $query1 = ' LIMIT '.$_POST['start'] .','.$_POST['length'];
}

$number_filtered_row = mysqli_num_rows(mysqli_query($connection, $query));
$result = mysqli_query($connection, $query . $query1);
checkQueryResult($result);
//echo $query . $query1;

while($row = mysqli_fetch_assoc($result)){
    $sub_array = array(); 
    
    $sub_array[] = $row["flight_id"];
    $sub_array[] = $row["source"];
    $sub_array[] = $row["destination"];
    $sub_array[] = $row["duration"];
    $sub_array[] = $row["arrival_time"];
    $sub_array[] = $row["capacity"];
    $sub_array[] = "<button class='edit fa fa-pencil btn blue'  ></button>";
    $sub_array[] = "<button class='delete fa fa-trash btn red' ></button>";
    //I may have to add some columns !!!
    
    $data[] = $sub_array;
}

function get_all_data($connection){
    $query = "SELECT * FROM flight WHERE flight.is_deleted=0";
    return (mysqli_num_rows(mysqli_query($connection, $query)));
}

$output = array(
    "draw" => intval($_POST['draw']),
    "recordsTotal" => get_all_data($connection),
    "recordsFiltered" => $number_filtered_row,
    "data" => $data,
    );

//Console.log("hello");
echo json_encode($output);

?>