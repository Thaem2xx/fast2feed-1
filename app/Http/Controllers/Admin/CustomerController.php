<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Customer;

class CustomerController extends Controller
{
	public function __construct(Customer $customer)
	{
		$this->customer = $customer;
	}
    public function index()
    {
    	$customers = $this->customer->getAll();
    	return view('admin.customer.index', compact('customers'));
    }
}
