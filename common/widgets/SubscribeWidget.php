<?php
namespace common\widgets;
use Yii;
use yii\base\Widget;
use common\models\Subscribe;

class SubscribeWidget extends Widget {
    public $subscribe;
    public function init() {
        $this->subscribe = new Subscribe();
    }
    public function run() {
        return $this->render('subscribe',[
            'model' => $this->subscribe,
        ]);
    }
}