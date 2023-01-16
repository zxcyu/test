<?php

class Appletree
{   public $apple;
    public $weight;
    public $number;
    public $all;
    public function count(){
        $this->weight=rand(150,180);
        $this->number=rand(40,50);
        $this->all=($this->number*$this->weight)/1000;
    }
    public function Appletrees()
    {
        $this->count();
        return $this->number;
    }
}