<?php

namespace App\Repositories\Category;

use App\Repositories\Category\CategoryContract;
use App\Category;

class EloquentCategoryRepository implements CategoryContract {

    public function create($request){
      $category = new Category;
      $this->setCategoryProperties($category, $request);
      $category->save();
      return $category;
    }

    public function edit($categoryId, $request){
      $category = Category::find($categoryId);
      $this->setCategoryProperties($category, $request);
      $category->save();
      return $category;
    }

    public function findById($categoryId){
      $category = Category::find($categoryId);
      return $category;
    }

    public function findAll(){
      $categories = Category::all();
      return $categories;
    }

    public function discard($categoryId){
      Category::destroy($categoryId);
      return true;
    }

    private function setCategoryProperties($category, $request){
      $category->name = $request->name;
    }
}
