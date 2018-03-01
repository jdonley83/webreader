<?php
namespace WebReader\Data;

use WebReader\Model\SavedItem as SavedItem;
use \RedBeanPHP\R as R;

class SavedItemRepo {
    public function insertSavedItem(SavedItem $savedItem) {
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