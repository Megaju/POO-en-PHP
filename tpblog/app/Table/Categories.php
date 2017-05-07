<?php

namespace App\Table;

use App\App;

class Categories extends Table {

    protected static $table = 'categories';

    public function getUrl() {
        return 'index.php?p=category&id=' . $this->id;
    }
    
}