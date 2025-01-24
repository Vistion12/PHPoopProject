<?php

use Vistion\Oop\Model\Category;
use Vistion\Oop\Model\Post;
use Vistion\Oop\Model\Role;


include "vendor/autoload.php";

//$category = new Category("туризм");
//
//
//$category->insert();
//
//print_r($category);
//
//die();
///**@var Category $category*/
//$category = Category::getOne(1);
//
//print_r($category->getAll());

//$post = new Post(" мой Заголовок", "мой пост");
//
//// Вставка поста в базу данных
//$post->insert();
//print_r($post);
//
//// Получение всех постов
//$allPosts = Post::getAll();
//print_r($allPosts);

 $role = new Role("Admin");
 $role->insert();
 print_r($role);
 $allRoles = Role::getAll();
 print_r($allRoles);
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
//$result = $user->query()->where('name', 'alex')->getAll();
//print_r($result);