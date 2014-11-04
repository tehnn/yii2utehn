<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';

use miloschuman\highcharts\Highcharts;
?>
<div class="site-index">


    <div class="body-content">


        <?php
        echo Highcharts::widget([
            'scripts' => [
                'highcharts-more',
                'modules/exporting',
                'themes/grid'
            ],
            'options' => [
                'chart' => ['type' => 'column'],
                'title' => ['text' => ''],
                'credits' => ['enabled' => false],
                'xAxis' => [
                    'categories' => ['เมือง', 'นครไทย', 'ชาติตระการ']
                ],
                'yAxis' => [
                    'title' => ['text' => 'แห่ง']
                ],
                'series' => [
                    ['name' => 'ทันเวลา', 'data' => [1, 0, 4]],
                    ['name' => 'ไม่ทันเวลา', 'data' => [5, 7, 3]]
                ]
            ]
        ]);
        ?>

    </div>
</div>
