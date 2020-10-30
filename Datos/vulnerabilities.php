<?php
class vulnerabilities
{
    private $id;
    private $web;
    
    //Constructor
    function __construct($param)
    {
        return "";
    }
    
    //Accessor functions
    function __get($id)
    {
        return $this->$id;
    }
    function __set($id, $value)
    {
        $this->$id = $value;
    }
    
    function __get($web)
    {
        return $this->$web;
    }
    function __set($web, $value)
    {
        $this->$web = $value;
    }
}