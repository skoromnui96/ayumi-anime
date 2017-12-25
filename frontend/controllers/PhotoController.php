<?php
namespace frontend\controllers;

use common\models\Photo;
use common\models\PhotoCategory;
use Yii;
use yii\web\Controller;

/**
 * News controller
 */

class PhotoController extends Controller {
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
        $data = Photo::getAll();
        $categories = PhotoCategory::getAll();
        return $this->render('index', [
            'photos' => $data['photos'],
            'pagination' => $data['pagination'],
            'categories' => $categories,
        ]);
    }

    public function actionCategory($id)
    {
        $data = PhotoCategory::getArticlesByCategory($id);
        $categories = PhotoCategory::getAll();

        return $this->render('category', [
            'photos' => $data['photos'],
            'pagination' => $data['pagination'],
            'categories' => $categories
        ]);
    }
}