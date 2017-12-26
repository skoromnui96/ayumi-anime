<?php
namespace console\controllers;

use Yii;
use yii\web\Controller;
use console\models\SendSubscr;

class SendController extends Controller
{
    public $defaultAction = 'mail';

    public function actionMail(){
        $model = new SendSubscr();
        $model->send();
        return 0;
    }
}