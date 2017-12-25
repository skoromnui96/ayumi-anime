<?php

namespace backend\controllers;

use Yii;
use common\models\TopVideos;
use common\models\search\TopVideosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
/**
 * TopVideosController implements the CRUD actions for TopVideos model.
 */
class TopVideosController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['superadmin', 'admin', 'administrator'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],

        ];
    }

    /**
     * Lists all TopVideos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TopVideosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $tops = TopVideos::getTopVideos();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'tops' => $tops
        ]);
    }

    /**
     * Displays a single TopVideos model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    /**
     * Creates a new TopVideos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TopVideos();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/top-videos']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TopVideos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/top-videos']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TopVideos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TopVideos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TopVideos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TopVideos::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionAllow($id) {
        $top = TopVideos::findOne($id);
        return ($top->allow()) ? $this->redirect(['index']): '';
    }

    public function actionDisallow($id) {
        $top = TopVideos::findOne($id);
        return ($top->disallow()) ? $this->redirect(['index']): '';
    }
}
