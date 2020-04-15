<?php
namespace App;
use App\Connection;

final class Counter{

    public function getScore(){    
        $connect= new Connection();
        $connection= $connect->connect();

        $queryResultado= "SELECT * FROM kvirus WHERE available='1' ";
        $resultado= mysqli_query ($connection, $queryResultado);

        $arrayScore = array ();
        while ($row = mysqli_fetch_array($resultado)){
                $arrayResultado[] = array (
                    "ID" => $row['id'],
                    "Name" => $row['name'], 
                    "Text" => $row['text'], 
                    "Type" => $row['type'], 
                    "Available" => $row['available'],
                    "Score"=> $row['score'],
                    "Image"=> $row{'image'}, 
                ); 
        }
        
        $contador= count($arrayScore);
        return $contador;
    }
}
?>