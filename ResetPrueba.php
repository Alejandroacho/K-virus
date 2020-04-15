<?php
    
    $connection = mysqli_connect('localhost', 'root', "", 'kvirus');
    $queryReset= "UPDATE kvirus SET score='0', available='0'";
    $reset= mysqli_query ($connection, $queryReset);
    return $reset;

?>