<?php

namespace Src\Category\Application;

use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class UpdateCategory
{
    public function __construct(private Category $category)
    {
    }

    public function execute($id, UpdateCategoryRequest $request): void
    {
        $category = $this->category->find($id);
        $name = $request->get('name');
        $parentId = $request->get('parentId');
        if ($name) {
            $category->name = $name;
        }
        if ($parentId) {
            $category->parentId = $parentId;
        }

        $category->save();
    }
}
