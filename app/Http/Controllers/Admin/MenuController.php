<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Menu;

class MenuController extends Controller
{
	public function __construct(Menu $menu)
	{
		$this->menu = $menu;
	}
    public function index()
    {
    	$menus = $this->menu->getAll();
    	return view('admin.menu.index',compact('menus'));
    }
}
