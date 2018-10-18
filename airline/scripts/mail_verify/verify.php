<?php

echo "hello we have sent you a verification mail. Please click on the link to verify your email";
if(isset($_GET['q'])){
    $variable = $_GET['q'];
    echo $_GET["q"];
}
?>