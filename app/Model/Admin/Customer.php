<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    protected $table = "customer";
    protected $primarykey = "customer_id";
    public $timestamp = false;

    public function getAll()
    {
    	return DB::table('customer')->join('account', 'account.account_id', '=', 'customer.account_id')->get();
    	
    }
}
