<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{   
    private function format_date ($date) {
        $formated_date = $date->format('d-m-Y H:i:s');

        return $formated_date;
    }

    public function save(Request $request) {
        $title = htmlspecialchars($request->get('title'));
        $author = htmlspecialchars($request->get('author'));
        $content = htmlspecialchars($request->get('content'));

        $post = new Post;

        $post->title = $title;
        $post->author = $author;
        $post->content = $content;
        
        $post->save();

        return redirect('/');
    }

    public function get() {
        $posts = Post::all();
        $parsed_posts = [];
        foreach ($posts as $post) {
            $item = [
                'id' => $post->id,
                'created_at' => $post->created_at ? $this->format_date($post->created_at) : '',
                'title' => $post->title,
                'author' => $post->author,
                'content' => htmlspecialchars_decode($post->content)
            ];
            
            array_push($parsed_posts, $item);
        };

        return view('index', ['posts' => $parsed_posts]);
    }

    public function show($id) {
        $post = Post::find($id);
        
        $parsed_post = [
            'id' => $post->id,
            'created_at' => $this->format_date($post->created_at),
            'title' => $post->title,
            'author' => $post->author,
            'content' => htmlspecialchars_decode($post->content)
        ];

        return view('post-details', ['post' => $parsed_post]);
    }
}
