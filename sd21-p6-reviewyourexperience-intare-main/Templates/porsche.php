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
    $tekst = getTekst($autoId);
if($merk->naam != "porsche"){
    header("location: /home");
}elseif ($car->merk_fk != $merkId){
    header("location: /merk/$merkId");
}

	include_once('defaults/head.php');
?>

<body class="p-0 m-0" style="background:black">

    <?php
        include_once ('defaults/header.php');
        include_once ('defaults/menu.php');
    ?>
    <?php $image = getImage(intval($autoId),"banner_1")[0];
    ?>
    <?php if(!empty($message)): ?>
        <div class="alert alert-success" role="alert">
            <?=$message?>
        </div>
    <?php endif;?>
    <div class="" style="
            height: 90vh;
            background: url('/img/<?= $merk->naam;?>/<?= $image->foto;?>.png') center center;
            background-size: cover;"
    >

        <?php
        include_once('defaults/autoBannerTekst.php')
        ?>
    </div>

    <div class="">
        <div class="row w-100">

                <div class=" mt-5 pt-5  w-100" style=" width: 100vw; height: 45rem;
                <?php $image = getImage($autoId,"banner_2")[0];  ?>
                        background: url('/img/<?= $merk->naam;?>/<?= $image->foto;?>.png') center center ;
                background-size: cover;">
                    <div class="row w-100  pt-5">
                        <div class="col-12 ">
                            <div class="position-relative">
                                <p  class="text-white fs-1 w-50 fw-bolder w-xl-25 mx-auto mt-5 position-absolute" style="top: 23rem; left: 2rem;" >
                                    Perfectie is nooit het begin.
                                </p>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row    text-right text-white ">
                    <div class="row"
                </div>
            </div>
        </div>

        <div class="text-white my-5 ps-5 w-75 " >
            <h1 class="fw-bold"><?php echo $car->naam;?></h1>
            <p>   <?php foreach ($tekst as $test): ?>
                    <?php if($test->naam == "titel_1"){
                        echo $test->tekst;
                    }?>
                <?php endforeach;?></p>
        </div>


        <div class="text-center ">
            <div class="row ">
                <div class="gab-0 col-lg-6 col-md-10 col-sm-12">

                    <div class="row">
                        <?php $image = getImage($autoId,"links_1")[0];  ?>
                        <div class="col-6 p-0" ><img class="w-100"
                                                     src="/img/<?= $merk->naam;?>/<?= $image->foto;?>.png" ></div>


                        <?php $image = getImage($autoId,"links_2")[0];  ?>
                        <div class="col-6 p-0"><img class="w-100"
                                                    src="/img/<?= $merk->naam;?>/<?= $image->foto;?>.png" ></div>


                        <?php $image = getImage($autoId,"rechts_boven")[0];  ?>
                        <div class="col-12 p-0 m-0"><img class="w-100"
                                                    src="/img/<?= $merk->naam;?>/<?= $image->foto;?>.png"></div>



                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <div class="row d-flex">

                        <?php $image = getImage($autoId,"links_beneden")[0];  ?>
                        <div class="col-12 p-0 m-0 "style=" " ><img class="w-100"
                                                           src="/img/<?= $merk->naam;?>/<?= $image->foto;?>.png"></div>

                        <?php $image = getImage($autoId,"rechts_1")[0];  ?>
                        <div class="col-6 p-0 m-0"><img class="w-100"
                                                    src="/img/<?= $merk->naam;?>/<?= $image->foto;?>.png" ></div>


                        <?php $image = getImage($autoId,"rechts_2")[0];  ?>
                        <div class="col-6 p-0 m-0"><img class="w-100"
                                                    src="/img/<?= $merk->naam;?>/<?= $image->foto;?>.png" ></div>

                    </div>
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

