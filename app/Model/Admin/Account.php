<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = "account";
    protected $primarykey = "account_id";
    public $timestamp = false;

    public function getAll()
    {
    	return $this->all();
    }
}
