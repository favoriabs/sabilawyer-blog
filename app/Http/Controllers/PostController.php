<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Post\PostContract;
use App\Repositories\Category\CategoryContract;

class PostController extends Controller
{
    protected $repo;

    public function __construct(PostContract $postContract, CategoryContract $categoryContract) {
      $this->middleware('auth');
      $this->repo = $postContract;
      $this->categoryRepo = $categoryContract;
    }

    public function index()
    {
        //
    }

    public function create()
    {
      $categories = $this->categoryRepo->findAll();
      $posts = $this->repo->findAll();
      return view('post.create')->with('categories', $categories)->with('posts', $posts);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
          'post_picture' => 'size:1024',
          'post_picture' => 'mimes:jpeg,bmp,png,gif'
        ]);

        $post = $this->repo->create($request);
        if($post){
          return redirect()->route('index_page')->with('success', 'Post Created successfully!!!');
        }else{
          return back()->withInput('error', 'There was an error, Please try again!!!');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
      $posts = $this->repo->findAll();
      $post = $this->repo->findById($id);
      $categories = $this->categoryRepo->findAll();
      return view('post.edit')->with('post', $post)->with('categories', $categories)->with('posts', $posts);
    }

    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'post_picture' => 'size:1024',
        'post_picture' => 'mimes:jpeg,bmp,png,gif'
      ]);

      $post = $this->repo->edit($id, $request);
      if($post->id){
        return back()->with('success', 'Post Edited successfully!!!');
      }else{
        return back()->withInput('error', 'There was an error, Please try again!!!');
      }
    }

    public function delete($id)
    {
      $post = $this->repo->discard($id);
      if($post){
        return redirect()->route('index_page')->with('success', 'Post deleted successfully!!!');
      }else{
        return back()->with('error', 'Something went wrong, Pls try again');
      }
    }
}
