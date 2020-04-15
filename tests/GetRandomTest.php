<?php
use PHPUnit\Framework\TestCase;
use App\GetRandomData;

final class GetRandomTest extends TestCase { 

    public function testGetRandomData (){
        $reader = new GetRandomData();
        $result = $reader->getRandomFirstData();

        $this->assertIsArray($result);
    }
}
?>