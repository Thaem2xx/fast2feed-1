<?php

namespace App\Http\Controllers\f2f;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Customer;

class IndexController extends Controller
{
	public function __construct(Customer $customer)
	{
		$this->customer = $customer;
	}
    public function index()
    {
    	$customers = $this->customer->getAll();
    	return view('f2f.index.index', compact('customers'));
    }
    

}
