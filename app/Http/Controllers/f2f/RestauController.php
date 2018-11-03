<?php

namespace App\Http\Controllers\f2f;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Customer;


class RestauController extends Controller
{
	public function __construct(Customer $customer)
	{
		$this->customer = $customer;
	}
    public function index($slug, $cusId)
    {
    	$getCustomer = $this->customer->getItem($cusId);
    	return view('f2f.restau.index', compact('getCustomer'));
    }

}
