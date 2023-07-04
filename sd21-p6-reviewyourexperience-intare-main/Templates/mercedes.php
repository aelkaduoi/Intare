<?php
global $autoId;
global  $merkId;
$userId = $_SESSION["userId"] ?? false;

if(isset($_POST["submit"])){
    addReview($userId, $autoId);
}

$merk = getMerk($merkId)[0];
$car = getCar($autoId)[0];
if($merk->naam != "mercedes"){
    header("location: /home");
}elseif ($car->merk_fk != $merkId){
    header("location: /merk/$merkId");
}

$tekst = getTekst($autoId);

?>
<!DOCTYPE html>
<html>
<?php include_once('defaults/head.php');?>
<body style="background:black;">
<div class="">
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
    <?php $image = getImage($autoId,"banner")[0];  ?>
            background: url('/img/<?=$merk->naam;?>/<?=$image->foto;?>.png') center center ;
            background-size: cover;
            
            "
    >


        <?php
        include_once ('defaults/autoBannerTekst.php')
        ?>

    </div>

    <div class="">
        <div class="row w-100 mt-5">
            <div class="col-lg-12 col-sm-12 col-md-12 d-flex  mb-3">
                <div class="col-4 align-self-end me-3 mt-5 " style="
                 height: 20rem;
                <?php $image = getImage($autoId,"links_1")[0];  ?>
                        background: url('/img/<?=$merk->naam;?>/<?=$image->foto;?>.png') no-repeat center center;
                background-size: cover;">

                </div>
                <div class="col me-2" style=" height: 30rem;
                <?php $image = getImage($autoId,"rechts_1")[0];  ?>
                        background: url('/img/<?=$merk->naam;?>/<?=$image->foto;?>.png') no-repeat center center;
                background-size: cover">

                </div>



            </div>

            <div class="text-white my-5  justify-content-center text-center  px-5  " >
                <h1 style='font-family: system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji" !important; ' class="fw-bolder ">De <?= strtoupper($merk->naam);?>  <?php echo $car->naam;?></h1>
                <p class="text-center mx-auto fs-3 fw-lighter px-5 ">
                  <?php foreach ($tekst as $test): ?>
                        <?php if($test->naam == "titel_1"){
                            echo $test->tekst;
                        }?>
                    <?php endforeach;?>
                </p>
            </div>

            <div class="col-lg-12  col-sm-12 col-md-12 d-flex  mb-3">
                <div class="col-lg-7 col-md-10 col-sm-12 me-3  " style="
                 height: 25rem;
                <?php $image = getImage($autoId,"links_2")[0];  ?>
                        background: url('/img/<?= $merk->naam;?>/<?= $image->foto;?>.png') no-repeat center center;
                background-size: cover;">

                </div>
                <div class="col me-2" style=" height: 30rem;
                <?php $image = getImage($autoId,"rechts_2")[0];  ?>
                        background: url('/img/<?= $merk->naam;?>/<?= $image->foto;?>.png') no-repeat center center;
                background-size: cover">

                </div>
                
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

