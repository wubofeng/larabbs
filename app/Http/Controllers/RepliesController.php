<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Topic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReplyRequest;

class RepliesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function store(ReplyRequest $request, Reply $reply)
	{
	    $reply->topic_id = $request->topic_id;
        $reply->content = $request->cont;
        $reply->user_id = \Auth::id();
        $reply->save();

		return redirect()->to($reply->topic->link())->with('message', '回复成功');
	}

	public function destroy(Reply $reply)
	{
		$this->authorize('destroy', $reply);
		$reply->delete();

		return redirect()->to($reply->topic->link())->with('message', '删除成功');
	}
}