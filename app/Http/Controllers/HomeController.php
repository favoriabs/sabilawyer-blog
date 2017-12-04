<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Post\PostContract;
use App\Repositories\Category\CategoryContract;

class HomeController extends Controller
{
    protected $repo;

    public function __construct(PostContract $postContract, CategoryContract $categoryContract) {
      $this->repo = $postContract;
      $this->categoryRepo = $categoryContract;
    }

    public function index(){
      $posts = $this->repo->findAll();
      $categories = $this->categoryRepo->findAll();
      return view('layouts.home')->with('posts', $posts)->with('categories', $categories);
    }

    public function aboutPage(){
      $posts = $this->repo->findAll();
      $categories = $this->categoryRepo->findAll();
      return view('about')->with('posts', $posts)->with('categories', $categories);
    }

    public function contactPage(){
      $posts = $this->repo->findAll();
      $categories = $this->categoryRepo->findAll();
      return view('contact')->with('posts', $posts)->with('categories', $categories);
    }

    public function viewPost($slug){
      $post = $this->repo->findPostBySlug($slug);
      $categories = $this->categoryRepo->findAll();
      $posts = $this->repo->findAll();
      return view('post.show')->with('post', $post)->with('categories', $categories)->with('posts', $posts);
    }

    public function viewPostsInCategory($categoryId){
      $posts = $this->repo->viewPostsInCategory($categoryId);
      $categories = $this->categoryRepo->findAll();
      $category = $this->categoryRepo->findById($categoryId);
      return view('category.post')->with('posts', $posts)->with('categories', $categories)->with('category', $category);
    }
}
