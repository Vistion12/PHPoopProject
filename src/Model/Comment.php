<?php

namespace Vistion\Oop\Model;

class Comment extends Model
{
    public int $id;
    public static $comentTitle;

    protected function getTableName(): string
    {
        return 'comments';
    }
}