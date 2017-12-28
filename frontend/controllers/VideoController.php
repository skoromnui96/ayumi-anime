<?php
namespace frontend\controllers;


use common\models\TopVideos;
use common\models\Video;
use Yii;
use yii\web\Controller;


/**
 * Site controller
 */
class VideoController extends Controller {
    public function actionIndex() {
        $data = Video::getAll(6);
        $topVideos = TopVideos::getTopVideos();
        return $this->render('index', [
            'video' => $data['video'],
            'pagination' => $data['pagination'],
            'topVideos' => $topVideos
        ]);
    }

    public function actionSingle($slug) {
        $model = Video::findModelBySlug($slug);
        $model->viewedCounter();
        $related = Video::getRelated();
        return $this->render('single', [
            'model' => $model,
            'related' => $related
        ]);
    }

    public function actionSearch() {
        $model = Video::getSearch(6);
        $topVideos = TopVideos::getTopVideos();
        $search = Yii::$app->request->get('search');
        return $this->render('search', [
            'video' => $model['video'],
            'pagination' => $model['pagination'],
            'topVideos' => $topVideos,
            'search' => $search
        ]);
    }
}