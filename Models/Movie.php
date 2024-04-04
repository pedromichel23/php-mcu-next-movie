<?php

class Movie
{
    protected $name;
    public $posterImg;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getMovieName()
    {
        return $this->name;
    }

    public function setMovieName($name)
    {
        $this->name = $name;
    }
}
