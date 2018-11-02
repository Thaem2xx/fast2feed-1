<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table="catalog";
    protected $primaryKey = "catalog_id";
    public $timestamps = false;

    public function getAll()
    {
    	return $this->all();
    }
    public function addItem($arItem)
    {
    	 return $this->insert([
            'catalog_name' => $arItem['catalog_name'],
            'status' => "1"
        ]);
    }
    public function getItem($cid)
    {
        return $this->FindOrFail($cid);
    }
    public function editItem($cid, $arItem)
    {
        return $this->where('catalog_id', $cid)->update($arItem);
    }
}
