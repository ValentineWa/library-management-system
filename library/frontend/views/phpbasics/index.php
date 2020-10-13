<?php
/* @var $this yii\web\View */

$helloworld ='Hello World';
$cars = array('Erick'=>'Tesla','Beverly'=>'Bentley','Onyango'=>'Audi','Ken Nyaga'=>'Jeep','Warui'=>'Probox','James'=>'NZE');

$carList = [
	[
		'Model'=>'Tesla',
		'Owner'=>'Erick',
		'Image'=>'theme/assets/carimages/tesla.jpg'
		],
	[
		'Model'=>'Bentley',
		'Owner'=>'Beverly',
		'Image'=>'theme/assets/carimages/bentley.jpg'
		 ],
	[
		 'Model'=>'Audi',
		'Owner'=>'Onyango',
		'Image'=>'theme/assets/carimages/audi.jpg'
		 ],
	 [
		 'Model'=>'Jeep',
		'Owner'=>'Ken',
		'Image'=>'theme/assets/carimages/jeep.jpg'
		],
	[
	     'Model'=>'Probox',
		'Owner'=>'Warui',
		'Image'=>'theme/assets/carimages/probox.jpg'
		],
];
?>
<h1>PHP BASICS</h1>
<?php 
echo $helloworld?>

<?php 
foreach ($cars as $key=>$value) {
    echo $key.' Owns a: '.$value.',<br>';

}
?>
<h1> CARS TO WORK</h1>
<?php 
foreach ($carList as $cars){
    echo $cars['Model'].' is owned by'.$cars['Owner'].'this is the image link'.$cars['Image'].'<br>';
}
?>

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

