<?php

namespace Src\Category\Domain;

class Category
{
    public function __construct(private int $id, private string $name)
    {
    }
}
