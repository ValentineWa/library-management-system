<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Student', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'studentId',
            'studentName',
            'studentNo',
            'idNo',
            'gender',
            //'phoneNo',
            //'dateofJoin',
            //'userId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
  <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
        	<div style="padding-top: 20px;">
        	   <button type="button" class="btn btn-block btn-success btn-lg" style="width: 180px;"><i class="fa fa-plus" aria-hidden="true"></i></button>
            </div>
            <div style="text-align: center;">
                 <h2 class="box-title"><strong>STUDENTS</strong></h2>
            </div>
              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 300px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
               <th>Student ID</th>
                  <th>Student Name</th>
                  <th>Course</th>
                  <th>Date</th>
                   <th>Status</th>
                </tr>
                <tr>
                  <td>SPN12300D</td>
                  <td>John Doe</td>
                  <td>Economics</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-success">Absent</span></td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>











      
