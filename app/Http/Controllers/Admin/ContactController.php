<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Contact;

class ContactController extends Controller
{
	public function __construct(Contact $contact)
	{
		$this->contact = $contact;
	}
    public function index()
    {
    	$contacts = $this->contact->getAll();
    	return view('admin.contact.index', compact('contacts'));
    }
}
