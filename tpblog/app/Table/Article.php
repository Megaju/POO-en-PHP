<?php

namespace App\Table;

use App\App;

class Article {

    public static function getLast() {
        return App::getDb()->query("SELECT articles.id, articles.title, articles.content, articles.date, categories.title AS category FROM articles LEFT JOIN categories ON category_id = categories.id", __CLASS__);
    }

    // * * * fonction magique * * *
    public function __get($key) {
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    public function getUrl() {
        return 'index.php?p=single&id=' . $this->id;
    }

    public function getExcerpt() {
        $html = '<p>' . substr($this->content, 0, 120) . '...</p>';
        $html .= '<p><a href=" ' . $this->getURL() . ' ">Voir la suite</a></p>';
        return $html;
    }

}