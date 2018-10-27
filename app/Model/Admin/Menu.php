<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";
    protected $primarykey = "menu_id";
    public $timestamp = false;

    public function getAll()
    {
    	return $this->all();
    }
}
