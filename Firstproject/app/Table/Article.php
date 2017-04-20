<?php
namespace App\Table;

class Article
{
  public function __get($gkey)
  {
    $method = 'get' . ucfirst($key);
    $this->key = $this->$method();
    return $this->key;
  }

  public function getUrl()
  {
    return '?p=article&id=' . $this->id;
  }

  public function getExcerpt()
  {
    $html = '<p>' . substr($this->content, 0, 120) . '</p>';
    $html .= '<p><a href="' . $this->getURL() . '">Voir la suite</a></p>';
    return $html;
  }
}
