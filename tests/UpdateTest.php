<?php
use PHPUnit\Framework\TestCase;
use App\Update;

final class UpdateTest extends TestCase { 

public function testUpdateData (){
        $id="2";
        $resultado="1";

        $updater = new Update();
        $result = $updater->updateData($id, $resultado);

        $this->assertEquals(true, $result);
    }
}
?>
