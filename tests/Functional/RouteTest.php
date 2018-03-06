<?php

namespace Tests\Functional;

class RouteTest extends BaseTestCase
{
    protected $mockSavedItemRepo;

    public function setUp()
    {
        $this->mockSavedItemRepo = $this->getMockBuilder('\WebReader\Data\SavedItemRepo');
        $this->mockSavedItemRepo->expects(any())
            ->method('getAll')
            ->will($this->returnValue([]));

        $this->container['savedItemRepo'] = function ($c) {
            return $this->mockSavedItemRepo;
        };
    }

    public function testGetAllSavedItems()
    {
        $response = $this->runApp('GET', '/api/saved-items/all');

        $this->assertEquals(200, $response->getStatusCode());
        $data = json_decode($response->getBody(true), true);
        $this->assertEquals(2, count($data));

        $savedItem = $data[0];
        $this->assertEquals('url', $savedItem['url']);
        $this->assertEquals('image', $savedItem['image']);
        $this->assertEquals('title', $savedItem['title']);
        $this->assertEquals(true, $savedItem['isRead']);
    }
}