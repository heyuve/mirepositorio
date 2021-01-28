<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    protected $post;

    function __construct (Post $post)
    {
        $this->post = $post;

    }

    public function index() {
        return view('form');
    }

    public function store(Request $request)
    {
        $post = $this->post->updateOrCreate([
            'id' => request ('id')], [
            'title' => request ('title'),
            'content' => request('content') 
        ]);

    }


}
