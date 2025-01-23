<?php

namespace Vistion\Oop\Model;

class Category extends Model
{
    public int $id;
    public static $categoryName;

    protected function getTableName(): string
    {
        return 'categorys';
    }
}