<?php

abstract class condition{
    static string       $condition = "Unreadable";
    static string       $frontPage = "Hard";

    function __construct(string $condition, string $frontPage){
        $this -> condition = $condition;
        $this -> frontPage = $frontPage;
    }


    //repara libro
    public abstract function repair();

    //modifica libro
    public abstract function modify();


}








?>