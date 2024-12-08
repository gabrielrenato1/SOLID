<?php

namespace test;

use PHPUnit\Framework\TestCase;
use App\Item;

class ItemTest extends TestCase {
    
    public function testItemInitialState() {
        
        $item = new Item();

        $this->assertEquals(0.0, $item->getValue());
        $this->assertEquals("", $item->getDescription());
        
    }
    
    public function testGetSetDescription() {
    
        $description = "Bolo de cenoura";
        
        $item = new Item();
        $item->setDescription($description);
        
        $this->assertEquals($description, $item->getDescription());
        
    }

    /**
     * @dataProvider dataValues
     */
    public function testGetSetValue($value) {

        $item = new Item();
        $item->setValue($value);

        $this->assertEquals($value, $item->getValue());

    }

    public function dataValues():array {

        return [
            [100],
            [-2],
            [0],
        ];

    }
    
    public function testValidItem() {
        
        $item = new Item();
        
        $item->setValue(15.90);
        $item->setDescription("bolo de cenoura");
        $this->assertTrue($item->verifyItem());

        $item->setValue(15.90);
        $item->setDescription("");
        $this->assertNotTrue($item->verifyItem());

        $item->setValue(0.0);
        $item->setDescription("bolo de cenoura");
        $this->assertNotTrue($item->verifyItem());

        $item->setValue(0.0);
        $item->setDescription("");
        $this->assertNotTrue($item->verifyItem());
        
    }
    
    
}