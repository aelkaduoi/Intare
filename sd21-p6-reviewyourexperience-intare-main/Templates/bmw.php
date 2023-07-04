<!DOCTYPE html>
<html>
<?php
global $autoId;
global  $merkId;
$userId = $_SESSION["userId"] ?? false;

if(isset($_POST["submit"])){
    addReview($userId, $autoId);
}
$merk = getMerk($merkId)[0];
$car = getCar($autoId)[0];
if($merk->naam != "bmw"){
    header("location: /home");
}elseif ($car->merk_fk != $merkId){
    header("location: /merk/$merkId");
}

$tekst = getTekst($autoId);
include_once('defaults/head.php');

?>
<body style="background:black;">

<?php
include_once ('defaults/header.php');
include_once ('defaults/menu.php');
?>
<?php if(!empty($message)): ?>
    <div class="alert alert-success" role="alert">
        <?=$message?>
    </div>
<?php endif;?>
<div class="" style="
        height: 90vh;
<?php $image = getImage($autoId,"banner_1")[0];  ?>
        background: url('/img/<?= $merk->naam;?>/<?= $image->foto;?>.png') no-repeat top center ;
            background-size: cover;
            "
>

    <div id="test" style="width: 100%!important;">

    </div>
    <?php
    include_once('defaults/autoBannerTekst.php')
    ?>
</div>


<div class="row ">

    <div class="col-12 mb-3 mt-5 pt-5 ">
        <div class="col-12" style=" height: 70vh; width:100%;
        <?php $image = getImage($autoId,"banner_2")[0];  ?>
                background: url('/img/<?= $merk->naam;?>/<?= $image->foto;?>.png') no-repeat  center ;
                 center center no-repeat;
                background-size: cover;">
        </div>
    </div>
</div>

<div class="text-white my-5 ps-5  text-center" >
    <h1 class="fw-bold h-1">De <?= strtoupper($merk->naam);?>  <?php echo $car->naam;?></h1>
    <p class="w-75 mx-auto">
       <?php foreach ($tekst as $test): ?>
            <?php if($test->naam == "titel_1"){
                echo $test->tekst;
            }?>
        <?php endforeach;?>   </p>
</div>

<div class=" d-flex row flex-md-row-reverse ">

    <div style="width: 60rem; height: 30rem;
    <?php $image = getImage($autoId,"rechts")[0];  ?>
            background: url('/img/<?= $merk->naam;?>/<?= $image->foto;?>.png') no-repeat  center;
    background-size: cover;">

    </div>
    <div style="height: 30rem;"  class="col d-flex justify-content-center text-white align-items-center p-5">
        <p class="fs-4 fw-lighter m-5" >
        <?php foreach ($tekst as $test): ?>
            <?php if($test->naam == "titel_2"){
                echo $test->tekst;
            }?>
        <?php endforeach;?>          </p>
    </div>

</div>

<div class="  row mt-5">

    <div style="width: 60rem; height: 30rem;
    <?php $image = getImage($autoId,"links")[0];  ?>
            background: url('/img/<?= $merk->naam;?>/<?= $image->foto;?>.png') no-repeat  center ;
            background-size: cover;">

    </div>
    <div style="height: 30rem;"  class="col d-flex justify-content-center text-white align-items-center p-5">
        <p class="fs-4 fw-lighter m-5" >
        <?php foreach ($tekst as $test): ?>
            <?php if($test->naam == "titel_3"){
                echo $test->tekst;
            }?>
        <?php endforeach;?>          </p>
    </div>


</div>

<?php
include_once ('defaults/autoCard.php');
?>

</div>
</div>

<div class=" mt-4  mb-5 ">
    <?php include_once ('defaults/reviews.php'); ?>

    <?php include_once ('defaults/writeReview.php'); ?>
</div>
<?php
include_once ('defaults/footer.php');
?>
</div>
</body>
<script src="/js/table.js"></script>
<html

