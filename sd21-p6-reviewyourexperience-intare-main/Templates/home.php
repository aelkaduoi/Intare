<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<body>
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
            height: 45rem;
            background: url('/img/zaak/voorkant.png') no-repeat ;
            background-size: cover;
            background-blend-mode: darken;

            "
    >
        <div class="w-100 h-100 text-white position-relative d-flex align-items-sm-center justify-content-center justify-content-lg-start " style="
            background: linear-gradient(103.22deg, #090909 50.5%, rgba(5, 5, 5, 0) 76.17%);

            ">

            <div class=" text-center  position-absolute z-index-4 mb-5 mx-auto w-50 " >

                <p class="fs-4">Vanuit onze vestiging Den Haag kunnen wij u alles bieden op het gebied van mobiliteit
                    . In
                    onze
                    showroom presenteren wij u de nieuwste modellen van Mercedes, Porsche, Audi, Ferrari en BMW.</p>
                <a href="/about" ><button type="button" class="btn text-white px-4 mt-3 py-2 rounded rounded-pill "
                                          style="background-color:
                   #9E0000;
                    ">Kom meer te weten</button></a>
            </div>

        </div>
    </div>
    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>






