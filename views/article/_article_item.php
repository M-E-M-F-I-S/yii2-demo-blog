<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\StringHelper;

/** @var $model \app\models\Article */
?>
    <div class="article-item">
        <a href="<?= Url::to(['/article/view', 'slug' => $model->slug]) ?>">
            <h3><?= Html::encode($model->title) ?></h3>
        </a>

        <div>
            <?= StringHelper::truncateWords($model->getEncodedBody(), 50) ?>
        </div>

        <p class="text-muted text-right">
            <small>
                Created At: <b><?= Yii::$app->formatter->asRelativeTime($model->created_at) ?></b>
                By: <b><?= $model->createdBy->username; ?></b>
            </small>
        </p>
        <hr>
    </div>
<?php
