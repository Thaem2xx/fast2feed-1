<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Comment;


class CommentController extends Controller
{
	public function __construct(Comment $comment)
	{
		$this->comment = $comment;
	}
    public function index()
    {
    	$comments = $this->comment->getAll();
    	return view('admin.comment.index', compact('comments'));
    }
}
