<?php

namespace App\Repositories\Post;

use App\Repositories\Post\PostContract;
use App\Post;

class EloquentPostRepository implements PostContract {
  public function create($request){
    $post = new Post;
    $this->setPostProperties($post, $request);
    $post->save();
    return $post;
  }

  public function edit($postId, $request){
    $post = Post::find($postId);
    $this->setPostProperties($post, $request);
    $post->save();
    return $post;
  }

  public function findById($postId){
    $post = Post::find($postId);
    return $post;
  }

  public function findAll(){
    $posts = Post::with('category')->orderBy('created_at', 'desc')->paginate(20);
    return $posts;
  }

  public function discard($postId){
    Post::destroy($postId);
    return true;
  }

  public function findPostBySlug($slug){
    $post = Post::with('category')->where('slug', $slug)->first();
    return $post;
  }

  public function viewPostsInCategory($categoryId){
    $posts = Post::with('category')->where('category_id', $categoryId)->orderBy('created_at', 'desc')->paginate(20)();
    return $posts;
  }

  private function setPostProperties($post, $request){
    $post->title = $request->title;
    $post->content = $request->content;
    $post->category_id = $request->category;
    $post->slug = str_slug($request->title);
    $post->user_id = \Auth::id();

    if($request->post_picture == null){

    }else{
      $destination = 'uploads/images';
      $extension = $request->file('post_picture')->getClientOriginalExtension();
      $fileName = rand(1111111, 9999999).'.'.$extension;
      $request->file('post_picture')->move($destination, $fileName);
      $post->post_picture = '/'.$destination.'/'.$fileName;
    }

  }
}
