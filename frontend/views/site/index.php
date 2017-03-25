<?php

/* @var $this yii\web\View */

use common\models\dialog\GeneralDialog;
use nullref\dialog\widgets\Dialog as DialogWidget;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h2>Yii2 Advanced Sandbox</h2>
    </div>

    <div class="body-content">

        <div class="row">
            <?php if (!Yii::$app->user->isGuest): ?>
                <div class="col-lg-4">
                    <h2><?= Yii::t('app','General Chat') ?></h2>

                    <?= DialogWidget::widget([
                        'dialog' => GeneralDialog::getDialog(),
                        'user' => Yii::$app->user->getIdentity(),
                        'canWrite' => true,
                        'canDelete' => true,
                    ]) ?>
                </div>
            <?php endif ?>
        </div>

    </div>
</div>
