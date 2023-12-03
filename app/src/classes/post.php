<?php

class post
{
    public $postContent;
    public $postID;

    function __construct($content, $id){
        $this -> postContent = $content;
        $this -> postID = $id;
    }

    function render(){
        $content = "
            <div>
            
            </div>
        ";


        echo($content);
    }
}