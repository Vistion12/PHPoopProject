<?php

namespace Vistion\Oop\Model;

use Vistion\Oop\Core\Db;

class Post extends Model
{
    public int $id;
    public string $title;
    public string $text;
    protected function getTableName(): string
    {
        return 'posts';
    }


}