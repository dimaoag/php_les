<?php

// news line

/*
 * Table publication
 *  id
 *  title
 *  date                ---                                           class NewsPublication
 *  short_content       -------->  class Publication  ---->   type    class ArticlePublication
 *  preview             ---                                           class PhotoReportPublication
 *  content
 *  author_name
 *  type
 *
 *
 */

class Publication{

    public $id;
    public $title;
    public $date;
    public $short_content;
    public $content;
    public $author_name;
    public $preview;
    public $type;


    public function __construct($row)
    {
        $this->id = $row['id'];
        $this->title = $row['title'];
        $this->date = $row['date'];
        $this->short_content = $row['short_content'];
        $this->content = $row['content'];
        $this->author_name = $row['author_name'];
        $this->preview = $row['preview'];
        $this->type = $row['type'];
    }

}

class NewsPublication extends Publication{

    public function printItem(){
        echo '<br>News: ' . $this->title;
        echo '<br>Date: ' . $this->date;
        echo '<br><img src="'.$this->preview.'">';
        echo '<hr>';
    }
}

class ArticlePublication extends Publication{

    public function printItem(){
        echo '<br>Article: ' . $this->title;
        echo '<br>Author: ' . $this->author_name;
        echo '<br><img src="'.$this->preview.'">';
        echo '<hr>';
    }
}

class PhotoReportPublication extends Publication{

    public function printItem(){
        echo '<br>Photo: ' . $this->title;
        echo '<br><img src="'.$this->preview.'">';
        echo '<hr>';
    }
}


?>