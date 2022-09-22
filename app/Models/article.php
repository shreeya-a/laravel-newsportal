<?php
namespace App\Models;
class Article{
    public static function getAllArticles(){
        return
            [
                [
                    'title' => 'News one',
                    'desc' => 'some random news'
                ],
                [
                    'title' => 'News two',
                    'desc' => 'some random news'
                ],
            ];
    
    }
}
?>