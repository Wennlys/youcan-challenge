<?php

namespace Src\Category\Domain;

class ProductCategories
{
    public function __construct(
        private array $categories = []
    ) {
    }
}
