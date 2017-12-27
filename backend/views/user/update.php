<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $roles yii\rbac\Role[] */

$this->title = 'Edit user' . ' ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label'=>'Edit'];
?>
<div class="user-update">

    <?php echo $this->render('_form', [
        'model' => $model,
        'profile' => $profile,
        'roles' => $roles
    ]) ?>

</div>
