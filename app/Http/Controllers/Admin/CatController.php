<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Cat;

class CatController extends Controller
{
	public function __construct(Cat $cat)
	{
		$this->cat = $cat;
	}
    public function index()
    {
    	$cats = $this->cat->getAll();
    	return view('admin.cat.index',compact('cats'));
    }
}
