
<h1>LIST OF CARS FROM THE DATABASE</h1>
<h1> CARS LIST WITH IMAGES</h1>
<div class="row">
<h1>CARS LIST WITH IMAGES</h1><br>
<?php foreach ($carList as $cars){?>
    <div class="col-lg-12">
        <div class="card">
          <img style="width:400px" class="card-img-top" src="<?= \Yii::$app->request->baseUrl.'/'.$cars['Image'] ?>" alt="Card image">
          <div class="card-body">
            <h4 class="card-title"><?= $cars['Model']?></h4>
            <p class="card-text">This car is owned by: <?= $cars['Owner']?>.</p>
            <a href="#" class="btn btn-primary">See car Detail</a>
          </div>
        </div>
    </div>
    <?php };?>
    <br>
    <br>
</div>
