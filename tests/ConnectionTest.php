<?php
use PHPUnit\Framework\TestCase;
use App\Connection;

final class ConnectionTest extends TestCase { 

    public function testConnection(){
        $expected=mysqli_connect('localhost', 'root', "", 'kvirus');

        $connection=new Connection();
        $result=$connection->connect();

        $this-> assertEquals($result, $expected);
    }
}
?>