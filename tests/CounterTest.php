<?php
use PHPUnit\Framework\TestCase;
use App\Counter;

final class CounterTest extends TestCase { 

    public function testGetScore (){
        $reader = new Counter();
        $result = $reader->getScore();

        $this->assertIsInt($result);
    }
}
?>