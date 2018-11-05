<?php

namespace App\Http\Controllers\f2f;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Customer;
use App\Model\Admin\Cat;

class IndexController extends Controller
{
	public function __construct(Customer $customer, Cat $cat)
	{
		$this->customer = $customer;
		$this->cat = $cat;

	}
    public function index()
    {
    	$customers = $this->customer->getAll();
    	$cats = $this->cat->getAll();

    	return view('f2f.index.index', compact('customers', 'cats'));
    }
    

}
