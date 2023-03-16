<?php

namespace App\Models;

use System\Src\Model;

class SearchModel extends Model
{
    protected $table = 'products';

    public function search($keyword)
{
    $sql = "SELECT * FROM {$this->table} WHERE title LIKE '%$keyword%'";
    return $this->getArrray($sql);
}
}
