<?php
use PHPUnit\Framework\TestCase;
use App\Reset;

final class ResetTest extends TestCase { 
    
    public function testReset(){
        $reseter = new Reset();
        $result = $reseter->resetData();

        $this->assertEquals(true, $result);
    }
}
?>