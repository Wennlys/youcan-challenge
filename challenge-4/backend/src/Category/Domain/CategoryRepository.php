<?php

namespace Src\Category\Domain;

interface CategoryRepository
{
    public function save(Category $category): bool;
    public function update($id, Category $category): bool;
}
