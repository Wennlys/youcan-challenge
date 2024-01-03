<?php

namespace Src\Category\Application;

use App\Http\Requests\UpdateCategoryRequest;
use Src\Category\Domain\Category;
use Src\Category\Domain\CategoryRepository;

class UpdateCategory
{
    public function __construct(private CategoryRepository $categoryRepository)
    {
    }

    public function execute($id, UpdateCategoryRequest $request): bool
    {
        $category = new Category($request->get('name'));
        return $this->categoryRepository->update($id, $category);
    }
}
