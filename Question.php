<?php 
class Question {
    public $id;
    public $content;
    public $author;

    public function __construct($id, $content, Author $auth)
    {
        $this->author = $auth;
        $this->id = $id;
        $this->content = $content;
    }
}