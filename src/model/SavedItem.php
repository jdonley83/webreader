<?php

namespace WebReader\Model;

class SavedItem {
    protected $id;
    protected $url;
    protected $image;
    protected $title;
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
        $this->dateModified = $dateCreated;
    }
}