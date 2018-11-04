<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Menu extends Model
{
    protected $table = "menu";
    protected $primarykey = "menu_id";
    public $timestamps = false;

    public function getAll()
    {
    	return $this->all();
    }
    public function getItem($cusId)
    {
    	return DB::table('menu')->select('menu.menu_name')->join('customer', 'menu.customer_id', '=', 'customer.customer_id')->where('menu.customer_id', $cusId)->get();
    }
}
