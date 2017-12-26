<?php
namespace frontend\controllers;

use common\models\Page;
use yii\web\Controller;

/**
 * News controller
 */

class PageController extends Controller {
    public function actionIndex($id) {
        $page = Page::findOne($id);
        return $this->render('index', [
            'page' => $page
        ]);
    }
}