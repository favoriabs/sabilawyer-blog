<?php

namespace App\Repositories\Post;

interface PostContract {
  public function create($request);
  public function edit($postId, $request);
  public function findAll();
  public function findById($postId);
  public function discard($postId);
  public function findPostBySlug($slug);
  public function viewPostsInCategory($categoryId);
  public function searchPost($request);
}
