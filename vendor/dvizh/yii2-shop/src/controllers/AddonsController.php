<?php
namespace dvizh\shop\controllers;

use dvizh\shop\models\AddOns;
use dvizh\shop\models\addons\AddOnsSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use dvizh\shop\models\Price;

class AddonsController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => $this->module->adminRoles,
                    ]
                ]
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                    'edittable' => ['post'],
                ],
            ],
        ];
    }

    public function actionCreate()
    {
        $model = new AddOns;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //nothing
        }

        $this->redirect(Yii::$app->request->referrer);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['update', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        $this->redirect(Yii::$app->request->referrer);
    }

    public function actionEditField()
    {
        $name = Yii::$app->request->post('name');
        $value = Yii::$app->request->post('value');
        $pk = unserialize(base64_decode(Yii::$app->request->post('pk')));
        $model = new AddOns;
        $model::editField($pk, $name, $value);
    }

    protected function findModel($id)
    {
        $model = new AddOns;

        if (($model = $model::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionAddToCart($id)
    {
        //Любая модель
        $model = $this->findModel($id);
        //Кладем ее в корзину (в количестве 1, без опций)
        $cartElement = yii::$app->cart->put($model, 1, []);
    }
}



