<?php
namespace App;
use App\Connection;

final class GetRandomData{

    public function getRandomFirstData(){
        $connect= new Connection();
        $connection= $connect->connect();

        $queryRandomData= "SELECT * FROM kvirus WHERE available='0'";

        $result= mysqli_query ($connection, $queryRandomData);

        $arrayPorSalir = array ();
        while ($row = mysqli_fetch_array($result)){
                $arrayPorSalir[] = array (
                   "ID" => $row['id'],
                   "Name" => $row['name'], 
                   "Text" => $row['text'], 
                   "Type" => $row['type'], 
                   "Available" => $row['available'],
                   "Score"=> $row['score'],
                   "Image"=> $row{'image'}, 
            ); 
        }
        shuffle($arrayPorSalir);
        $id = ($arrayPorSalir[0]['ID']);
        $name = ($arrayPorSalir[0]['Name']);
        $type = ($arrayPorSalir[0]['Type']);

        $arrayRandom=array (1=>$id, 2=>$name, 3=>$type);

        return $arrayRandom;
    }
}
?>