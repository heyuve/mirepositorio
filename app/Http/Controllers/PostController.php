<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\view;

class PostController extends Controller
{
    protected $post;

    function __construct (Post $post)
    {
        $this->post = $post;

    }

    public function index() {

        $view = View::make('usuarios')
        ->with('posts' , $this->post->get());

        return $view;
    }

    public function store(Request $request)
    {
        $post = $this->post->updateOrCreate([
            'id' => request ('id')], [
            'title' => request ('title'),
            'content' => request('content') 
        ]); 

        $view = View::make('usuarios')
        ->with('post' , $post)
        ->with('posts' , $this->post->get())
        ->renderSections();

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form']
        ]);

    }


}
