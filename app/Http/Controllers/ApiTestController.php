<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class ApiTestController extends Controller
{
    public function index()
    {
        // Тестовые данные пользователей
        $users = [
            new User(['id' => 1, 'name' => 'Иван Иванов', 'email' => 'ivan@example.com']),
            new User(['id' => 2, 'name' => 'Пётр Петров', 'email' => 'petr@example.com']),
        ];

        // Тестовые данные постов
        $posts = [
            new Post(['id' => 1, 'user_id' => 1, 'title' => 'Первый пост', 'content' => 'Содержимое первого поста']),
            new Post(['id' => 2, 'user_id' => 2, 'title' => 'Второй пост', 'content' => 'Содержимое второго поста']),
        ];

        // Тестовые данные комментариев
        $comments = [
            new Comment(['id' => 1, 'post_id' => 1, 'user_id' => 2, 'content' => 'Отличный пост!']),
            new Comment(['id' => 2, 'post_id' => 2, 'user_id' => 1, 'content' => 'Спасибо за информацию']),
        ];

        return response()->json([
            'users' => $users,
            'posts' => $posts,
            'comments' => $comments,
        ]);
    }
}
