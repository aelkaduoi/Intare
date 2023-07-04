<?php

global $autoId;
global  $merkId;
global $page;

$view =  3;
$colCount = ColCountReview($autoId);
$NumberOfPerPage = ceil($colCount/$view );

if (isset ($_POST['page']) ) {
    $page = $_POST['page'];
} else {
    $page = 1;
}

if($page < 1 || $page > $NumberOfPerPage){
    $page = 1;
}


$pageFirstResult = ($page-1) * $view;



$reviews = getAllReviews($pageFirstResult,$view,$autoId)

?>



<?php if($reviews):?>
<section id="reviews" class="px-5 collapse  multi-collapse  reviewsSection  " style="width 100%;" >

    <div class="d-flex " style="">
        <div class="col-12 withUsDiv ">
            <div class="position-relative ">
                <div id="carouselReview" class="carousel  carouselReviews slide "
                     data-bs-ride="true">
                    <div class="carousel-indicators ">
                        <?php
                        for($pages = 0; $pages < $NumberOfPerPage; $pages++):
                        ?>
                        <button id="button<?php echo  $pages + 1?>" name="test"  type="button" data-bs-target="#carouselReview" data-bs-slide-to="<?= $pages?>"
                                class=" <?php if($pages === 0){echo "active";} ?>"  aria-label="Slide <?=  $pages?>"></button>

                        <?php endfor;?>
                    </div>
                    <div class="carousel-inner">

                        <?php
                        for($pages = 1; $pages<= $NumberOfPerPage; $pages++):
                        ?>
                            <?php
                            $pageFirstResult = ($pages-1) * $view;
                            $reviews = getAllReviews($pageFirstResult,$view,$autoId)
                            ?>
                        <div class="carousel-item mb-5   <?php if($pages === 1){echo "active";} ?> "style=" width: 100%">
                            <div class="w-100  align-items-center pb-3 text-white px-4 row row-cols-1 row-cols-sm-2 row-cols-lg-3 d-sm-flex justify-content-sm-center">
                                <?php foreach($reviews as $review):?>
                                    <?php $user = getUser($review->user_id)[0];?>
                                <div class="col-4 p-3 ">
                                    <div class="h-100 w-100 d-flex flex-column align-items-center align-items-center">
                                        <p class="bg-dark text-center w-75 text-break border rounded border-dark p-4"><?=$review->review?></p>
                                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="<?php
                                            if ($user->foto){
                                                echo "/img/user/".$user->foto.".png?".mt_rand();
                                            }else{
                                                echo "/img/user/standaard.jpeg";
                                            }
                                            ?>">
                                            <div>
                                                <p class="fw-bold text-primary mb-0"><?=ucfirst($user->voornaam)?> <?=ucfirst($user->achternaam)?></p>

                                                <?php for($number = 0 ; $number < 5; $number++):?>

                                                <i class="bi bi-star<?php if ($number < $review->stars){echo "-fill";} ?>" style="width: fit-content; color:gold;"></i>
                                                <?php endfor;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach;?>

                        </div>


                    </div>
                        <?php endfor;?>


                </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselReview" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselReview" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
            </div>

</section>
<?php endif;?>

