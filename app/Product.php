<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function shortTitle()
    {
        echo substr($this->title, 0, 30) . (strlen($this->title) > 30 ? '...' : '');
    }
}
