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
            <h2>".$this->postID."</h2>
            <p>".$this ->postContent."</p>
            </div>
        ";


        echo($content);
    }
}