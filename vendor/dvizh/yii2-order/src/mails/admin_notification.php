<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use yii\widgets\DetailView;
?>
<h1><?=Yii::t('order', 'New order'); ?> #<?=$model->id;?></h1>

<!--p><?=Html::a(yii::t('order', 'View'), Url::to(['/order/order/view', 'id' => $model->id], true));?></p-->

<ul>
    <?php if($model->first_name) { ?>
        <li><?=$model->first_name;?></li>
    <?php } ?>

    <?php if($model->last_name) { ?>
        <li><?=$model->last_name;?></li>
    <?php } ?>

    <?php if($model->gender) { ?>
        <li><?=$model->gender;?></li>
    <?php } ?>

    <?php if($model->address) { ?>
        <li><?=$model->address;?></li>
    <?php } ?>

    <?php if($model->address2) { ?>
        <li><?=$model->address2;?></li>
    <?php } ?>

    <?php if($model->country) { ?>
        <li><?=$model->country;?></li>
    <?php } ?>

    <?php if($model->state) { ?>
        <li><?=$model->state;?></li>
    <?php } ?>

    <?php if($model->city) { ?>
        <li><?=$model->city;?></li>
    <?php } ?>

    <?php if($model->postal_code) { ?>
        <li><?=$model->postal_code;?></li>
    <?php } ?>

    <?php if($model->same_address) { ?>
        <li><?=$model->same_address;?></li>
    <?php } ?>

    <?php if($model->news_subscription) { ?>
        <li><?=$model->postal_code;?></li>
    <?php } ?>

    <?php if($model->phone) { ?>
        <li><?=$model->phone;?></li>
    <?php } ?>
    
     <?php if($model->email) { ?>
        <li><?=Html::a($model->email, 'mailto:'.$model->email);?></li>
    <?php } ?>
 
    <?php if($model->comment) { ?>
        <li><?=$model->comment;?></li>
    <?php } ?>

    <li><?=$model->date;?> <?=$model->time;?></li>

    <?php if($model->paymentType) { ?>
        <li><?=$model->paymentType->name;?></li>
    <?php } ?>

    <?php if($model->shipping) { ?>
        <li><?=$model->shipping->name;?></li>
    <?php } ?>

    <?php if($model->delivery_type == 'totime') { ?>
        <?=Yii::t('order', 'Delivery to time'); ?>
        <?=$model->delivery_time_date;?> <?=$model->delivery_time_hour;?>:<?=$model->delivery_time_min;?>
    <?php } ?>
        
    <?php
    if($fields = $model->fields) {
        foreach($fields as $fieldModel) {
            echo "<li>{$fieldModel->field->name}: {$fieldModel->value}</li>";
        }
    }
    ?>
</ul>

<h2><?=Yii::t('order', 'Order list'); ?></h2>

<?php if($model->elements) { ?>
    <table width="100%">
        <?php foreach($model->elements as $element) { ?>
            <tr>
                <td>
                    <?=$element->product->getCartName(); ?>
                    <?php if($element->description) { echo "({$element->description})"; } ?>
                    <?php
                    if($options = json_decode($element->options)) {
                        foreach($options as $name => $value) {
                            $return .= Html::tag('p', Html::encode($name).': '.Html::encode($value));
                        }
                    }
                    ?>
                </td>
                <td>
                    <?=$element->count;?>
                </td>
                <td>
                    <?=$element->price;?><?=Yii::$app->getModule('order')->currency;?>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php } ?>

<h3 align="right">
    <?=Yii::t('order', 'In total'); ?>:
    <?=$model->count;?>,
    <?=$model->total;?>
    <?=Yii::$app->getModule('order')->currency;?>
</h3>
