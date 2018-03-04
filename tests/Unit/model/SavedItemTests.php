<?php

namespace Tests\Unit\Model;

use WebReader\Model\SavedItem;

class SavedItemTests extends \PHPUnit_Framework_TestCase
{
    public function testConvertToArrayReturnsData() {
        $currentDate = date('Y-m-d H:i:s');

        $savedItem = new SavedItem();
        $savedItem->setId(1);
        $savedItem->setUrl('url');
        $savedItem->setTitle('title');
        $savedItem->setImage('image');
        $savedItem->setIsRead(true);
        $savedItem->setDateCreated($currentDate);
        $savedItem->setDateModified($currentDate);

        $result = $savedItem->convertToArray();

        $this->assertEquals(1, $result['id']);
        $this->assertEquals('url', $result['url']);
        $this->assertEquals('title', $result['title']);
        $this->assertEquals('image', $result['image']);
        $this->assertEquals(true, $result['isRead']);
        $this->assertEquals($currentDate, $result['dateCreated']);
        $this->assertEquals($currentDate, $result['dateModified']);
    }
}