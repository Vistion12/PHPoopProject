<?php

namespace Vistion\Oop\Model;

class Role extends Model
{
    public int $id;
    public static $roleName;
    protected function getTableName(): string
    {
        return 'roles';
    }

}