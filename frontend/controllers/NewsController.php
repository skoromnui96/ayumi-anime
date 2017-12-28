<?php
namespace frontend\controllers;

use common\models\News;
use yii\web\Controller;

/**
 * News controller
 */

class NewsController extends Controller {
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex() {
        $data = News::getAll();
        $stories = News::getStories();
        return $this->render('index', [
            'news' => $data['news'],
            'pagination' => $data['pagination'],
            'stories' => $stories
        ]);
    }

    public function actionSingle($slug) {
        $news = News::findModelBySlug($slug);
        $posts = News::getPosts();
        $news->viewedCounter();
        return $this->render('single', [
            'news' => $news,
            'posts' => $posts
        ]);
    }
}