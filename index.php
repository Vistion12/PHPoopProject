<?php


use Vistion\Oop\Core\Db;
use Vistion\Oop\Model\Category;
use Vistion\Oop\Model\Comment;
use Vistion\Oop\Model\Post;
use Vistion\Oop\Model\Role;
use Vistion\Oop\Model\User;

include "vendor/autoload.php";


$db = new Db();
$post = new Post($db);
$user = new User($db);
$role = new Role($db);
$category = new Category($db);
$comment = new Comment($db);


// Получаем и выводим пользователя с ID 5
//print_r($user->getOne(5));
//
//// Получаем и выводим все посты
//$allPosts = $post->getAll();
//print_r($allPosts);
//
//// Получаем и выводим все роли
//$allRoles = $role->getAll();
//print_r($allRoles);
//
//// Получаем и выводим все категории
//$allCategories = $category->getAll();
//print_r($allCategories);
//
//// Получаем и выводим все комментарии
//$allComments = $comment->getAll();
//print_r($allComments);


// Получаем пользователя с именем 'alex'
$result = $user->query()->where('name', 'alex')->getAll();
print_r($result);