<?php

class Route 
{

    private String $url;
    private Array $argumentArray;

    public function __construct(String $url = '/', Array $argumentArray = []) {
        $this->url = $url;
        $this->argumentArray = $argumentArray;
    }
}