<?php

class Peartree
{
    public $weight;
    public $number;
    public $all;
    public function count(){
        $this->weight=rand(130,170);
        $this->number=rand(0,20);
        $this->all=($this->number*$this->weight)/1000;
    }
    function Peartrees()
    {
        $this->count();
        return $this->number;
    }
}