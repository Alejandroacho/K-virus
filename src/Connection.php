<?php
namespace App;

class Connection{

    public function connect(){
        
        $connection = mysqli_connect('localhost', 'root', "", 'kvirus');
        
        if (isset($connection)){
            return $connection;
        }
    }
}
?>