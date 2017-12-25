<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>
<?php if(Yii::$app->session->hasFlash('orderError')) { ?>
    <?php
    $errors = Yii::$app->session->getFlash('orderError');
    $orderModel->addErrors(unserialize($errors));
    ?>
<?php } ?>

<div class="sidebar">

    <div class="tabs">
        <ul class="tabs-caption ordering-steps">
            <li id="tabs-caption-item-1" class="is-open"><h3>Categories</h3></li>
            <li id="tabs-caption-item-2"><h3>Payment</h3></li>
        </ul>
        <div class="tabs-content is-open">
<div class="dvizh_order_form">
    <?php $form = ActiveForm::begin(['action' => Url::toRoute(['/order/order/create']),
        'options' => [
            'class' => 'ordering-form'
        ]
    ]); ?>
    <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />

    <div class="cat-content">
        <h4 class="cat-name">Contact info</h4>
        <div class="filter">
            <input type="checkbox" id="s-1"><label for="s-1">Sing me up to email news...</label>
        </div>
        <?= $form->field($orderModel, 'email')->textInput(['placeholder' => 'E-mail'])->label(false) ?>
    </div>
    <div class="cat-content">
        <h4 class="cat-name">Billing adress</h4>
        <div class="filter">
            <input type="checkbox" id="s-2"><label for="s-2">My shopping adress is the same</label>
        </div>
        <div class="dropdown-wrapper">
            <?= $form->field($orderModel, 'gender')->dropDownList(['Mrs' => 'Mrs','Ms' => 'Ms'],['prompt' => 'Gender'])->label(false) ?>
        </div>
        <?= $form->field($orderModel, 'first_name')->textInput(['placeholder' => 'First name', 'class' => 'first-name'])->label(false) ?>
        <?= $form->field($orderModel, 'last_name')->textInput(['placeholder' => 'Last name'])->label(false) ?>
        <div class="dropdown-wrapper">
            <?= $form->field($orderModel, 'country')->dropDownList(['USA' => 'USA', 'China' => 'CHINA', 'Japan' => 'JAPAN'],['prompt' => 'Select country'])->label(false) ?>
        </div>
        <?= $form->field($orderModel, 'address')->textInput(['placeholder' => 'Address line 1', 'class' => 'first-name'])->label(false) ?>
        <?= $form->field($orderModel, 'address2')->textInput(['placeholder' => 'Address line 2 (optional)'])->label(false) ?>
        <div class="dropdown-wrapper">
            <?= $form->field($orderModel, 'state')->dropDownList(['Nevada' => 'Nevada', 'California' => 'California'],['prompt' => 'Select state'])->label(false) ?>
        </div>
        <?= $form->field($orderModel, 'city')->textInput(['placeholder' => 'City', 'class' => 'first-name'])->label(false) ?>
        <?= $form->field($orderModel, 'postal_code')->textInput(['placeholder' => 'Postal code'])->label(false) ?>
        <?= $form->field($orderModel, 'phone')->textInput(['placeholder' => 'Phone - (202) 555 - 0123'])->label(false) ?>
    </div>
    <div class="cat-content">
        <h4 class="cat-name">Select delivery method</h4>
        <?php if($shippingTypes) { ?>
            <div class="col-md-6 order-widget-shipping-type">
                <?= $form->field($orderModel, 'shipping_type_id')->dropDownList($shippingTypes) ?>
                <script>
                    shippintTypeCost = [];
                    <?php foreach($shippingTypesList as $sht) { ?>
                    shippintTypeCost[<?=$sht->id;?>] = <?=(int)$sht->cost;?>;
                    <?php } ?>
                </script>
            </div>
        <?php } ?>
        <?php if($paymentTypes) { ?>
            <div class="col-md-6">
                <?= $form->field($orderModel, 'payment_type_id')->dropDownList($paymentTypes) ?>
            </div>
        <?php } ?>
    </div>
    <div class="submit">
        <?= Html::submitButton(Yii::t('order', 'Continue to rewiew and pay <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>'), ['class' => 'button colored']) ?>
    </div>


    <?php ActiveForm::end(); ?>
</div>

        </div>
        <div class="tabs-content">
            <form method="" class="ordering-form">
                <div class="cat-content">
                    <h4 class="cat-name">Billing adress <a href="#order-edit-modal" data-fancybox="modal-1" class="edit">Edit</a></h4>
                    <ul>
                        <li>Mr. Nick Baturin</li>
                        <li>Shishkina st. 34B</li>
                        <li>Odessa, AZ 987654</li>
                        <li>United States</li>
                        <li>(063) 1652165</li>
                    </ul>
                </div>
                <div class="cat-content">
                    <h4 class="cat-name">Shipping adress <a href="#order-edit-modal" data-fancybox="modal-2" class="edit">Edit</a></h4>
                    <ul>
                        <li>Mr. Nick Baturin</li>
                        <li>Shishkina st. 34B</li>
                        <li>Odessa, AZ 987654</li>
                        <li>United States</li>
                        <li>(063) 1652165</li>
                    </ul>
                </div>
                <div class="cat-content">
                    <h4 class="cat-name">Delivery method <a href="#order-edit-modal" data-fancybox="modal-3" class="edit">Edit</a></h4>
                    <ul>
                        <li>Standard Ground</li>
                    </ul>
                </div>
                <div class="cat-content">
                    <h4 class="cat-name">Payment details</h4>
                    <h5>Card number</h5>
                    <p>16-20 digits, with or without spaces</p>
                    <input type="text" placeholder="XXXX-XXXX-XXXX-XXXX">
                    <h5>Exp. date</h5>
                    <div class="input-group exp-date">
                        <p>YY-MM</p>
                        <input type="text" placeholder="XX-XX">
                    </div>
                    <h5>Security code</h5>
                    <div class="input-group exp-date">
                        <p>3-digits, located on the back your card</p>
                        <input type="text" placeholder="XX-XX">
                    </div>
                </div>
                <div class="submit">
                    <a href="#" id="next-tab" class="button colored">Place order and pay <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                </div>
            </form>
        </div>
    </div>









