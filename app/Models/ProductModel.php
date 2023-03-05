<?php

namespace App\Models;

use System\Src\Model;

class ProductModel extends Model
{
    protected $table = 'products';

    public function insert($data)
    {
        return $this->insertFirst($data, $this->table);
    }
    public function show($id)
    {
        $sql = "SELECT * from $this->table where id = $id ";

        return $this->first($sql);
    }

    public function get($limit = 10, $offset = 0)
    {
        $sql = "SELECT $this->table.*, menus.title as title_menu 
            FROM $this->table left JOIN menus on $this->table.menu_id = menus.id 
            order by $this->table.id desc limit $limit offset $offset";
        
        return $this->query($sql);
    }

    public function countRows($isActive = null)
    {
        $sql = "SELECT id from $this->table ";

        if ($isActive != null) {
            $sql .= " where is_active = 1";
        }
        
        return $this->numRow($sql);
    }

    public function getByIsActive($limit = 12, $offset = 0, $menuId = 0)
    {
        $sql = "SELECT id, title, thumb from $this->table where is_active = 1";
        if ($menuId != 0) { $sql .= " && menu_id = $menuId "; }
        $sql .= " order by id desc limit $limit offset $offset ";

        return $this->query($sql);
    }

    public function getByIsActiveLoadMore($limit = 12, $offset = 0, $menuId = 0, $sort = 'desc')
    {
        $sql = "SELECT id, title, description , content, thumb from $this->table 
                where is_active = 1 && menu_id = $menuId ";

       
        return $this->getArrray($sql);
    }

    public function countRowsByMenuId(int $menuId)
    {
        $sql = "SELECT id from $this->table where menu_id = $menuId && is_active = 1";
        
        return $this->numRow($sql);
    }

    public function getProductById(int $id = 0)
    {
        return $this->query("SELECT id , title , thumb from $this->table");
    }

    public function getMoreProduct(int $id)
    {
        $sql = "SELECT id, title, description , content, thumb  from $this->table 
                where is_active = 1 && id != $id order by id desc limit 8 ";
                
        return $this->query($sql);
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