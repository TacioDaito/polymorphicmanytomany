<?php

class Route 
{
    private String $url;
    private Array $argumentArray;

    public function __construct(String $url = '/', Array $argumentArray = []) {
        $this->url = $url;
        $this->argumentArray = $argumentArray;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setArgumentArray($argumentArray) {
        $this->argumentArray = $argumentArray;
    }

    public function getArgumentArray() {
        return $this->argumentArray;
    }
}