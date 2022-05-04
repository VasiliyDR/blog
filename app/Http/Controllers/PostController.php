<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
      $posts = Post::all();
      return view('posts', compact('posts'));
    }

    public function create() {
      Post::create([
        'title' => 'title of post from crud',
        'content' => 'content of post from crud',
        'image' => 'ercrud.jpg',
      ]);
      dd('created');
    }


    public function update() {
      $post = Post::find(3);
      $post->update([
        'title' => 'update',
        'content' => 'update123',
        'image' => 'update123',
        'likes' => 2250,
      ]);
      dd('updated');
    }

    public function delete() {
      // $post = Post::find(1);  <----- удаление спомощью софтделита
      // $post->delete();

      // $post = Post::withTrashed()->find(1); <--- восстановление
      // $post->restore();
      dd('delete');
    }

    public function firstOrCreate() {

      $post = Post::firstOrCreate([
        'title' => '111title of post from crud'
      ],[
        'title' => '111title of post from crud',
        'content' => 'content1111',
        'image' => 'image1111.jpg'
      ]);
      dd($post->title);
    }



    public function updateOrCreate() {
      $post = Post::updateOrCreate([
        'title' => '111title of post from crud'
      ],[
        'title' => 'createtetitle of post from crud',
        'content' => 'createcontent1111',
        'image' => 'createimage1111.jpg'
      ]);
      dd('updateOrCreate');
    }
}
