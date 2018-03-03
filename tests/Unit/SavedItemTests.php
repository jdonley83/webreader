<?php

namespace Tests\Unit\Model;

use WebReader\SavedItem as SavedItem;

class SavedItemTests extends \PHPUnit_Framework_TestCase
{
    private $currentDate;

    protected function setUp() {
        $currentDate = date('Y-m-d H:i:s');
    }

    public function testConvertToArrayReturnsData() {
        $savedItem = new SavedItem();
        $savedItem->setId(1);
        $savedItem->setUrl('url');
        $savedItem->setTitle('title');
        $savedItem->setImage('image');
        $savedItem->setIsRead(true);
        $savedItem->setDateCreated($this->$currentDate);
        $savedItem->setDateModified($this->$currentDate);

        $result = $savedItem->convertToArray();

        $this->assertEquals(1, $result['id']);
        $this->assertEquals('url', $result['url']);
        $this->assertEquals('title', $result['title']);
        $this->assertEquals('image', $result['image']);
        $this->assertEquals(true, $result['isRead']);
        $this->assertEquals($this->$currentDate, $result['dateCreated']);
        $this->assertEquals($this->$currentDate, $result['dateModified']);
    }
}