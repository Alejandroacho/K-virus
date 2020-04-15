<?php
namespace App;
use App\Connection;

final class Reset{

    public function resetData(){
        $connect= new Connection();
        $connection= $connect->connect();

        $queryReset= "UPDATE kvirus SET score='0', available='0'";
        $reset= mysqli_query ($connection, $queryReset);

        return $reset;

        if(isset ($reset)){
            return true;
        }        
    }
}
?>