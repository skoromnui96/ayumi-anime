<?php
namespace frontend\controllers;

use common\models\Slider;
use common\models\Subscribe;
use common\models\TopVideos;
use common\models\Video;
use Yii;
use yii\helpers\Html;
use yii\web\Controller;
use dvizh\shop\models\Category;
use dvizh\shop\models\Product;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * @inheritdoc
     */
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

    /**
     * Displays homepage.
     *
     * @return mixed
     */

    public function actionIndex() {
        $sliders = Slider::getSlider();
        $topVideos = TopVideos::getTopVideos();
        $latest = Video::getLatestVideos();
        $popular = Video::getPopularVideos();
         return $this->render('index', [
            'sliders' => $sliders,
            'topVideos' => $topVideos,
             'latest' => $latest,
             'popular' => $popular
        ]);
    }

    /**
     * Displays info-page.
     *
     * @return mixed
     */
    public function actionInfo()
    {
        $categories = Category::find()->all();

        if($catId = yii::$app->request->get('categoryId')) {
            $category = Category::findOne($catId);
        } elseif($categories) {
            $category = current($categories);
        } else {
            $category = null;
        }

        if($category) {
            $query = Product::find()->category($category->id)->orderBy('id DESC');
        } else {
            $query = Product::find()->orderBy('id DESC');
        }

        $queryForFilter = clone $query;

        if($filter = yii::$app->request->get('filter')) {
            $query->filtered($filter);
        }

        $products = $query->limit(12)->all();

        return $this->render('info', [
            'queryForFilter' => $queryForFilter,
            'categories' => $categories,
            'products' => $products,
            'category' => $category,
        ]);
    }

    public function actionThanks()
    {
        return $this->render('thanks');
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSubscribe(){
        $model = new Subscribe();
        if ($model->load(Yii::$app->request->post()) && $model->validate()){
            $email = Html::encode($model->email);
            $model->email = $email;
            $model->addtime = (string) time();
            if ($model->save()) {
                Yii::$app->response->refresh();
                Yii::$app->getSession()->setFlash('success', 'Subscribe success');
                return $this->redirect('/site/index#s-subscribe');
            }
        } else {
            Yii::$app->response->refresh();
            Yii::$app->getSession()->setFlash('error', 'Email address already exists or has not been entered correctly');
            return $this->redirect('/site/index#s-subscribe');
        }
        exit;
    }
}
