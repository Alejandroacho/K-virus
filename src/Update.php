<?php
namespace App;
use App\Connection;

final class Update{

    public function updateData($id, $resultado){
        
        $connect= new Connection();
        $connection= $connect->connect();
        
        $queryUpdate="UPDATE kvirus SET available='1', score='$resultado' WHERE id='$id'";
        $update = mysqli_query($connection, $queryUpdate);    
            
        return $update;

        if(isset ($update)){
            return true;
        }
    }
}
?>