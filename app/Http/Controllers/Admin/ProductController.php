<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Product;

class ProductController extends Controller
{
	public function __construct(Product $product)
	{
		$this->product = $product;
	}
    public function index()
    {
    	$products = $this->product->getAll();
    	return view('admin.product.index', compact('products'));
    }
    public function getAdd()
    {
    	return view('admin.product.add');
    }
}
