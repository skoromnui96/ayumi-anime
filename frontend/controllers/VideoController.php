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
        $data = Video::getAll();
        $topVideos = TopVideos::getTopVideos();
        return $this->render('index', [
            'video' => $data['video'],
            'pagination' => $data['pagination'],
            'topVideos' => $topVideos
        ]);
    }

    public function actionSingle($id) {
        $model = Video::findOne($id);
        $model->viewedCounter();
        $related = Video::getRelated();
        return $this->render('single', [
            'model' => $model,
            'related' => $related
        ]);
    }
}