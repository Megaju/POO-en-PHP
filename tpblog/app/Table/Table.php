<?php

namespace App\Table;

use App\App;

class Table {

    protected static $table;

    private static function getTable() {
        if (static::$table === null) {
            $class_name = explode('\\', get_called_class());
            static::$table = strtolower(end($class_name)) . 's';
            static::$table = $class_name;
        }
        return static::$table;
    }

    public static function all()
    {
        return App::getDb()->query("
          SELECT * 
          FROM " . static::getTable() . "
        ", get_called_class());
    }

    public function __get($key) {
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    public static function query($stat, $attr = null, $one = false) {
        if ($attr) {
            return App::getDb()->prepare($stat, $attr, get_called_class(), $one);
        } else {
            return App::getDb()->query($stat, get_called_class(), $one);
        }
    }

    public static function find($id) {
        return App::getDb()->prepare("
          SELECT * 
          FROM " . static::getTable() . "
          WHERE id = ?
        ", [$id], get_called_class(), true);
    }

}