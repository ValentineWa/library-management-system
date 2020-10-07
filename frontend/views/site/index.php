<?php

/* @var $this yii\web\View */
use yii\bootstrap\Modal;
use frontend\models\Book;
use frontend\models\Borrowedbook;
use frontend\models\Student;



$this->title = 'Valentine LMS';
$totalBooks = Book::find()->asArray()->all();
$totalBorrows = Borrowedbook::find()->asArray()->all();
$totalStudents = Student::find()->asArray()->all();


?>
<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">TOTAL BOOKS</span>
              <span class="info-box-number"><?= count($totalBooks) ?><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">BORROWED BOOKS</span>
              <span class="info-box-number"><?= count($totalBorrows)?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">OVERDUE BOOKS</span>
              <span class="info-box-number">20</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">STUDENTS</span>
              <span class="info-box-number"><?= count($totalStudents)?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
         </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
               
            <?php if(Yii::$app->user->can('librarian')){?>
        	<div style="padding-top: 20px;">
        	   <button type="button" class="btn btn-block btn-success btn-lg assignbook " style="width: 180px;"><i class="fa fa-plus" aria-hidden="true"></i> Assign Book</button> <!-- this class is used to bind with the custom.js -->
            </div>
               <?php }?>
            <?php if(Yii::$app->user->can('student')){?>
            	<div style="padding-top: 20px;">
        	  ii </div>
            <?php }?>
            <div style="text-align: center;">
          
                 <h2 class="box-title"><strong>BOOK ASSIGNMENTS</strong></h2>
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
                  <th>Student Name</th>
                  <th>Book Name</th>
                  <th>Date Taken</th>
                  <th>Return Date</th>
                  <th>Return Book</th>
                  <th>Status</th>
                </tr>
                <tr>
                  <td>John Doe</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td>11-7-2014</td>
                  <td><span class="btn btn-danger returnbook">Return</span></td>
                  <td><span class="label label-success">Approved</span></td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
       
       
      

<?php
        Modal::begin([
            'header'=>'<h4>Assign A Book</h4>',
            'id'=>'assignbook',
            'size'=>'modal-lg'
            ]);
        echo "<div id='assignbookContent'></div>";
        Modal::end();
      ?>
   <?php
        Modal::begin([
            'header'=>'<h4>Return Book </h4>',
            'id'=>'assignbook',
            'size'=>'modal-lg'
            ]);
        echo "<div id='assignbookContent'></div>";
        Modal::end();
      ?>





      
          
