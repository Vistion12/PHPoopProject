<?php

namespace Vistion\Oop\Model;

use Vistion\Oop\Core\Db;

class User extends Model
{
    public int $id;
    public static $name;
    protected function getTableName(): string
    {
        return 'users';
    }

}