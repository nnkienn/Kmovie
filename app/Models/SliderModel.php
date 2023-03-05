<?php

namespace App\Models;

use System\Src\Model;

class SliderModel extends Model
{
    protected $table = 'sliders';

    public function insert($data)
    {
        return $this->insertFirst($data, $this->table);
    }

    public function get()
    {
        return $this->query("SELECT * from $this->table order by sort_by desc, id desc");
    }

    public function getActive()
    {
        return $this->query("SELECT * from $this->table where is_active = 1 order by sort_by desc");
    }
    public function show($id)
    {
        $sql = "SELECT * from $this->table where id = $id ";

        return $this->first($sql);
    }

    public function update($data, $id)
    {
        return $this->updateOne($data, $id, $this->table);
    }
    public function delete($id)
    {
        return $this->query("DELETE from $this->table where id = $id");
    }
}