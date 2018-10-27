<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table="catalog";
    protected $primaryKey = "catalog_id";
    public $timestamp = false;

    public function getAll()
    {
    	return $this->all();
    }
}
