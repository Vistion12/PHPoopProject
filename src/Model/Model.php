<?php

namespace Vistion\Oop\Model;

use Vistion\Oop\Core\Db;
use Vistion\Oop\interfaces\IModel;

//TODO реализовать  метод конструктор запросов, что бы было $user->query()-> where('name','alex')

abstract class Model implements  IModel
{

    protected DB $db;
    protected string $tableName = '';
    protected string $whereClause = '';
    abstract protected function getTableName(): string;

    public function __construct(Db $db)
    {
        $this->db=$db;
    }

    public function getOne(int $id)
    {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE id=$id" . PHP_EOL;
        return $this->db->queryOne($sql);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM {$this->tableName} {$this->whereClause}";
        return $this->db->queryAll($sql) . PHP_EOL;
    }

    public function query()
    {
        return $this;
    }
    public function where(string $column, string $value)
    {

        $this->whereClause = "WHERE {$column} = '{$value}'";
        return $this;
    }
}