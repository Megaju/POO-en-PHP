<?php

namespace App\Table;

use App\App;

class Article extends Table {

    public static function getLast() {
        return self::query("
          SELECT articles.id, articles.title, articles.content, articles.date, categories.title as category 
          FROM articles 
          LEFT JOIN categories 
            ON category_id = categories.id
        ");
    }

    public function getUrl() {
        return 'index.php?p=single&id=' . $this->id;
    }

    public function getExcerpt() {
        $html = '<p>' . substr($this->content, 0, 120) . '...</p>';
        $html .= '<p><a href=" ' . $this->getURL() . ' ">Voir la suite</a></p>';
        return $html;
    }

    public function lastByCategory($category_id) {
        return self::query("
          SELECT articles.id, articles.title, articles.content, articles.date, categories.title as category 
          FROM articles 
          LEFT JOIN categories 
            ON category_id = categories.id
          WHERE category_id = ?
        ", [$category_id]);
    }

}