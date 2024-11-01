<?php

namespace app\controllers;

use yii\web\Controller;

class AuthorController extends Controller
{
    public function actionIndex()
    {
        // Информация об авторе
        $authorInfo = [
            'name' => 'Иван Иванов',
            'profession' => 'Писатель',
            'description' => 'Иван Иванов — известный писатель, автор множества книг о путешествиях и приключениях.'
        ];

        // Передача данных в представление
        return $this->render('index', ['authorInfo' => $authorInfo]);
    }
}