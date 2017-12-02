<?php

namespace App\Repositories\Category;

interface CategoryContract {
    public function create($request);
    public function edit($categoryId, $request);
    public function findAll();
    public function findById($categoryId);
    public function discard($categoryId);
}
