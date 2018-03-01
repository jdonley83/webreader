<?php

namespace WebReader\Model;

class SavedItem {
    protected $id;
    protected $url;
    protected $image;
    protected $title;
    protected $isRead;
    protected $dateCreated;
    protected $dateModified;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getIsRead() {
        return $this->isRead;
    }

    public function setIsRead($isRead) {
        $this->isRead = $isRead;
    }

    public function getDateCreated() {
        return $this->dateCreated;
    }

    public function setDateCreated($dateCreated) {
        $this->dateCreated = $dateCreated;
    }

    public function getDateModified() {
        return $this->dateModified;
    }

    public function setDateModified($dateModified) {
        $this->dateModified = $dateModified;
    }

    public function convertToArray() {
        $data = array();

        $data['id'] = $this->id;
        $data['url'] = $this->url;
        $data['image'] = $this->image;
        $data['title'] = $this->title;
        $data['isRead'] = $this->isRead;
        $data['dateCreated'] = $this->dateCreated;
        $data['dateModified'] = $this->dateModified;

        return $data;
    }
}