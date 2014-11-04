<?php

use yii\helpers\Html;

//use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\CDiseaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cdiseases';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php

use yii\bootstrap\Modal;

Modal::begin([
    'id' => 'zmodal',
    'header' => 'Update ข้อมูล'
]);
?>
<div id="zmodalContent"></div>
<?php
Modal::end();
?>
<?php
Modal::begin([
    'id' => 'modal',
    'header' => 'Create ข้อมูล'
]);
?>
<div id="modalContent"></div>
<?php
Modal::end();
?>



<div class="cdisease-index">

    <h1><?= Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]);      ?>

    <p>
    <?= Html::a('Create Cdisease', ['create'], ['class' => 'btn btn-success', 'id' => 'btn_add']) ?>
    </p>

    <?php

    use kartik\grid\GridView;

echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pjax' => true,
        'pjaxSettings' => [
            'neverTimeout' => true,
            'beforeGrid' => 'My fancy content before.',
            'afterGrid' => 'My fancy content after.',
        ],
        'columns' => [
            [
                'class' => '\kartik\grid\CheckboxColumn'
            ],
            ['class' => '\kartik\grid\SerialColumn'],
            'code',
            'disease',
            'icd10',
            [
                'class' => 'prawee\grid\ActionColumn',
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('update', $url, [
                                    'title' => Yii::t('yii', 'อัพเดท'),
                                    'class' => 'mPop'
                        ]);
                    }
                        ]
                    ],
                ],
            ]);
            ?>


</div>
