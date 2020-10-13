<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use frontend\models\Book;
use frontend\models\BorrowedBook;


/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List Books';
$this->params['breadcrumbs'][] = $this->title;
?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


<div class="box box-info">
            <div class="box-header with-border">
            
            <?php if(Yii::$app->user->can('librarian')){ ?>
          			<?= Html::a('Create Book', ['create'], ['class' => 'btn btn-success']) ?>
          	<?php }?>
           <?php if(Yii::$app->user->can('student')){ ?>
                  <button val="<?= Yii::$app->request->baseUrl;?>/bb/create" type="button" class="btn btn-block btn-success btn-lg borrowbook" style="width: 300px;"><i class="fa fa-plus" aria-hidden="true"></i> Borrow a Book</button>
           <?php }?>
          
          
          
              <div style="text-align: center;">
                  <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
              </div>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <?php if(Yii::$app->user->can('librarian')){ ?>
            <div class="box-body">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
            
                        'bookId',
                        'bookName',
                        'referenceNo',
                        'publisher',
                        [
                            'label'=>'status',
                            'format' => 'raw',
                            'value' => function ($dataProvider) {
                                $bookStatus = Book::find()->where(['bookId'=>$dataProvider->bookId])->One();
                                if($bookStatus->status == 0){
                                    $button = 'btn btn-info';
                                    $status = 'Available';
                                }elseif ($bookStatus->status == 1){
                                    $button = 'btn btn-success';
                                    $status = 'Issued';
                                }elseif ($bookStatus->status == 2){
                                    $button = 'btn btn-warning';
                                    $status = 'Pending';
                                }
                                return '<span class="'.$button.'">'.$status.'</span>';
                            },
                            
                        ],
            
                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
            </div>
            <?php }?>
            <?php if(Yii::$app->user->can('student')){ ?>
            <div class="box-body">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
            
                        'bookId',
                        'bookName',
                        'referenceNo',
                        'publisher',
                        [
                            'label'=>'status',
                            'format' => 'raw',
                            'value' => function ($dataProvider) {
                                $bookStatus = Book::find()->where(['bookId'=>$dataProvider->bookId])->One();
                                if($bookStatus->status == 0){
                                    $button = 'btn btn-info';
                                    $status = 'Available';
                                }elseif ($bookStatus->status == 1){
                                    $button = 'btn btn-success';
                                    $status = 'Issued';
                                }elseif ($bookStatus->status == 2){
                                    $button = 'btn btn-warning';
                                    $status = 'Pending';
                                }
                                return '<span class="'.$button.'">'.$status.'</span>';
                            },
                            
                        ],
            
                       
                    ],
                ]); ?>
            </div>
            <?php }?>
            <!-- /.box-body -->
          </div>
          
      <?php
        Modal::begin([
            'header'=>'<h4>Assighn A Book</h4>',
            'id'=>'assignbook',
            'size'=>'modal-lg'
            ]);

        echo "<div id='assignbookContent'></div>";
        Modal::end();
      ?>

