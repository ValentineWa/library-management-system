<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;


/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;

?>
<?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<div class="box box-info">
            <div class="box-header with-border">      
          <?php if(Yii::$app->user->can('librarian')){ ?>
          			<?= Html::a('Create Book', ['create'], ['class' => 'btn btn-success']) ?>
          	<?php }?>
           <?php if(Yii::$app->user->can('student')){ ?>
                  <button val="<?= Yii::$app->request->baseUrl;?>/borrowedbook/create" type="button" class="btn btn-block btn-success btn-lg requestbook" style="width: 300px;"><i class="fa fa-plus" aria-hidden="true"></i> Borrow Book</button>
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
                        'status',
                            
                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
            </div>
            
            <!-- /.box-body -->
          </div>
             <?php
        Modal::begin([
            'header'=>'<h4>Request book</h4>',
            'id'=>'requestbook',
            'size'=>'modal-md'
            ]);
        echo "<div id='requestbookContent'></div>";
        Modal::end();
      ?>
  
