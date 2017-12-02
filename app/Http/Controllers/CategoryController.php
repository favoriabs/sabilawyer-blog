<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Category\CategoryContract;

class CategoryController extends Controller
{
    protected $repo;

    public function __construct(CategoryContract $categoryContract) {
        $this->middleware('auth');
        $this->repo = $categoryContract;
    }

    public function index()
    {
        $categories = $this->repo->findAll();
        return view('category.index')->with('categories', $categories);
    }

    public function create(Request $request)
    {
      $this->validate($request, [
        'name' => 'required'
      ]);
        $category = $this->repo->create($request);
        if($category){
          return back()->with('success', 'Category created successfully!!!');
        }else{
          return back()->with('error', 'Something went wrong, Pls try again');
        }
    }

    public function edit($id){
      $category = $this->repo->findById($id);
      return view('category.edit')->with('category', $category);
    }

    public function update(Request $request, $id){
        $category = $this->repo->edit($id, $request);
        if($category->id){
          return redirect()->route('manage_categories')->with('success', 'Category edited successfully!!!');
        }else{
          return back()->with('error', 'Something went wrong, Pls try again');
        }
    }

    public function delete($id)
    {
        $category = $this->repo->discard($id);
        if($category){
          return redirect()->route('manage_categories')->with('success', 'Category deleted successfully!!!');
        }else{
          return back()->with('error', 'Something went wrong, Pls try again');
        }
    }
}
