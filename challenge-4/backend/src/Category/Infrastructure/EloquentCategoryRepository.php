<?php

namespace Src\Category\Infrastructure;

use Src\Category\Domain\Category;
use Src\Category\Domain\CategoryRepository;
use App\Models\Category as CategoryModel;

class EloquentCategoryRepository implements CategoryRepository
{
    public function __construct(private CategoryModel $categoryModel)
    {
    }

    public function save(Category $category): bool
    {
        // TODO: Implement save() method.
    }

    public function update($id, Category $category): bool
    {
        $foundCategoryRepository = $this->categoryModel->find($id);

        return $foundCategoryRepository->updateOrFail($category->print());
    }
}
