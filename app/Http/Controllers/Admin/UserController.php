<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Account;

class UserController extends Controller
{
	public function __construct(Account $account)
	{
		$this->account = $account;
	}
    public function index()
    {
    	$accounts = $this->account->getAll();
    	return view('admin.user.index', compact('accounts'));
    }
    public function getAdd()
    {
    	return view('admin.user.add');
    }
}



