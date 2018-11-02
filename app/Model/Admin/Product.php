<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Product extends Model
{
    public function getAll()
    {
    	return DB::table('product')->join('catalog', 'product.catalog_id', '=', 'catalog.catalog_id')->join('customer', 'product.customer_id', '=', 'customer.customer_id')->join('menu', 'menu.menu_id', '=', 'product.menu_id')->select('*','product.images')->get();
    	
    }
}
