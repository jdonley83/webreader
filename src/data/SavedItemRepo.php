<?php
namespace WebReader\Data;

use WebReader\Model\SavedItem as SavedItem;
use \RedBeanPHP\R as R;

class SavedItemRepo {
    public function getAll()
    {
        $data = array();

        $savedItem1 = array();
        $savedItem1['id'] = 0;
        $savedItem1['url'] = 'url';
        $savedItem1['image'] = 'image';
        $savedItem1['title'] = 'title';
        $savedItem1['isRead'] = true;
        $savedItem1['dateCreated'] = date('Y-m-d H:i:s');
        $savedItem1['dateModified'] = date('Y-m-d H:i:s');
    
        $savedItem2 = array();
        $savedItem2['id'] = 1;
        $savedItem2['url'] = 'url1';
        $savedItem2['image'] = 'image1';
        $savedItem2['title'] = 'title1';
        $savedItem2['isRead'] = false;
        $savedItem2['dateCreated'] = date('Y-m-d H:i:s');
        $savedItem2['dateModified'] = date('Y-m-d H:i:s');
    
        $data[] = $savedItem1;
        $data[] = $savedItem2;

        return $data;
    }

    public function insert(SavedItem $savedItem)
    {
        $thing = R::dispense('saveditem');
        $thing->url = $savedItem->getUrl();
        $thing->image = $savedItem->getImage();
        $thing->title = $savedItem->getTitle();
        $thing->isRead = $savedItem->getIsRead();
        $thing->dateCreated = $savedItem->getDateCreated();
        $thing->dateModified = $savedItem->getDateModified();
        $savedItem->setId(R::store($thing));

        return $savedItem;
    }
}