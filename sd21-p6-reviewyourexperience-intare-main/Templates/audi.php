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

if($merk->naam != "audi"){
    header("location: /home");
}elseif ($car->merk_fk != $merkId){
    header("location: /merk/$merkId");
}
include_once('defaults/head.php');
?>
<body class="" style="background:black;">
<?php
include_once('defaults/header.php');
include_once('defaults/menu.php');
?>
<div class="" style="overflow-x: hidden;">

    <?php if (!empty($message)): ?>
        <div class="alert alert-success" role="alert">
            <?= $message ?>
        </div>
    <?php endif; ?>

    <div class="" style="

            height: 90vh;
    <?php $image = getImage($autoId,"banner_1");  ?>
                background: url('/img/<?= $merk->naam;?>/<?= $image[0]->foto;?>.png')no-repeat center center;
            background-size: cover;

            "
    >

        <div id="test" style="width: 100%!important;">

        </div>
        <?php
        include_once ('defaults/autoBannerTekst.php')
        ?>
    </div>

<?php
include_once('defaults/autoBannerTekst.php')
?>

    <div class="">
        <div class="row ">
            <div class="col-12 mt-5 pt-5 mb-3">
                <div class="col-12 pt-5 ps-5" style=" height: 50rem;
                <?php $image = getImage($autoId,"banner_2");  ?>
                        background: url('/img/<?= $merk->naam;?>/<?= $image[0]->foto;?>.png')no-repeat  ;
                background-size: cover ;">
                   
                    <div class="bg-light p-4  ms-5 mt-5" style="
                    width: 45vw; height: fit-content;">
                        <h1>
                            <?php foreach ($tekst as $test): ?>
                                <?php if($test->naam == "titel_1"){
                                    echo $test->tekst;
                                }?>
                            <?php endforeach;?>
                        </h1>
                        <p class="mt-4">
                            <?php foreach ($tekst as $test): ?>
                                <?php if($test->naam == "tekst_1"){
                                    echo $test->tekst;
                                }?>
                            <?php endforeach;?>
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-12 text-white px-5 ">
                <div class="p-4 mx-5 text-center my-3 pe-5 me-5">
                    <h1 class="fw-bold">
                        <?php foreach ($tekst as $test): ?>
                            <?php if($test->naam == "titel_2"){
                                echo $test->tekst;
                            }?>
                        <?php endforeach;?>
                    </h1>
                    <h5 class="fw-lighter">
                        <?php foreach ($tekst as $test): ?>
                            <?php if($test->naam == "tekst_2"){
                                echo $test->tekst;
                            }?>
                        <?php endforeach;?>
                    </h5>
                </div>
            </div>
            <div class="col-12 d-flex mb-1">
                <div id="carouselExampleIndicators" class="carousel d-flex slide" data-bs-ride="true">

                    <div class="carousel-indicators">
                        <p data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                           aria-current="true" aria-label="Slide 1"> hello</p>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                    </div>
                    

                    
                    <div class="carousel-inner " style="width: 100vw !important;">
                        <div class="carousel-item d-flex active w-100">
                            <?php $image = getImage($autoId,"carousel_1");  ?>
                            <img src="/img/<?= $merk->naam;?>/<?= $image[0]->foto;?>.png" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <?php $image = getImage($autoId,"carousel_2");  ?>
                            <img src="/img/<?= $merk->naam;?>/<?= $image[0]->foto;?>.png" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <?php $image = getImage($autoId,"carousel_3");  ?>
                            <img src="/img/<?= $merk->naam;?>/<?= $image[0]->foto;?>.png" class="d-block w-100">
                        </div>
                    </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                </div>
            </div>
            <?php
            include_once('defaults/autoCard.php');
            ?>


    </div>

    </div>
    <div class=" mt-4  mb-5 ">
        <?php include_once ('defaults/reviews.php'); ?>

        <?php include_once ('defaults/writeReview.php'); ?>
    </div>

    <?php
        include_once('defaults/footer.php');
    ?>
</div>
</body>
<script>
    let vw = document.documentElement.clientWidth;
    let card = document.getElementById("card");
</script>
<script src="/js/table.js"></script>
<html

