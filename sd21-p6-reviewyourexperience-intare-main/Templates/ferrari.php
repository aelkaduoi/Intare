<!DOCTYPE html>
<html>
<?php
    global $autoId;
    $car = getCar($autoId);
    $tekst = getTekst($autoId);
    include_once('defaults/head.php');
?>
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
            height: 45em;

            <?php $image = getImage($autoId,"banner_1");  ?>
            background: url('data:image/png;charset=utf8;base64,<?php echo base64_encode($image[0]->foto);?>') center center ;
            background-size: cover;
            "
    >
        
        <div id="test" style="width: 100%!important;">
        
        </div>
        <div class="position-relative w-100 pt-5 ">
            <div class="position-absolute text-center d-flex justify-content-center align-items-baseline pt-5 mt-5"
                 style="
                height:45rem;
                ">
                <div class="row w-100 pt-3">
                    <div class="col-12 ">
                        <p class="text-white fs-4 w-50 fw-bolder w-xl-25 mx-auto mt-5" >
                            Vraag een offerte, proefrit of showroom afspraak aan.
                            Via de onderstaande knop komt u op het contactformulier terecht waar u uw contactgegevens kunt achterlaten.Na het invullen wordt er zo snel mogelijk contact met u opgenomen.
                        </p>
                    </div>
                    <a href="/contact" ><button type="button" class="btn mb-5 text-white px-4 mt-3 py-2 rounded
                    rounded-pill "
                                                style="background-color:
                   #9E0000;
                    ">Contact opnemen</button></a>
                    <svg width="26" height="35" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.5858 32.4142C14.3668 33.1953 15.6332 33.1953 16.4142 32.4142L29.1421 19.6863C29.9232 18.9052 29.9232 17.6389 29.1421 16.8579C28.3611 16.0768 27.0948 16.0768 26.3137 16.8579L15 28.1716L3.68629 16.8579C2.90524 16.0768 1.63891 16.0768 0.857863 16.8579C0.076814 17.6389 0.076814 18.9052 0.857863 19.6863L13.5858 32.4142ZM13 -6.6507e-06L13 31H17V-6.6507e-06L13 -6.6507e-06Z" fill="#FF0000"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    
    <div class="">
        <div class="row w-100">
            <div class="col-12">
                <div class="row ms-1   text-center text-white ">
                    <div class="col-4  border-start border-3 py-5" style="border-radius: 2rem 0 0 2rem  ;
                    border-color: #9E0000 !important;"><h5>424-527</h5><p>kilometer puur elektrische actieradius (WLTP)[1]  320    </p>
                    </div>
                    <div class="col-4  border-start border-3 py-5" style="border-radius: 2rem 0 0 2rem  ;
                    border-color: #9E0000 !important;">
                        <h5>0</h5><p>gram CO2 -emissie</p>
                    </div>
                    <div class="col-4  border-start border-3 py-5 " style="border-radius: 2rem 0 0 2rem ;
                    border-color: #9E0000 !important;"><h5>32</h5>
                        <p>minuten oplaadtijd bij sneloplaadpunten*</p>
                    </div>
                    <a href="/contact" ><button type="button" class="btn mb-5 text-white px-4 mt-4 py-2 rounded
                    rounded-pill "
                                                style="background-color:
                   #9E0000;
                    ">Contact opnemen</button></a>
                </div>
            </div>
            <div class="col-12 ">
                <?php $image = getImage($autoId,"banner_2");  ?>
                <div class="" style="height: 50rem;background: url('data:image/png;charset=utf8;base64,<?php echo base64_encode($image[0]->foto);?>')  ;
                background-size: cover;">
                </div>
            </div>
            <div class="col-12">
                <div class="row    text-right text-white ">
                    <div class="row" tex
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<div class="text-white text-center mx-5 p-5">
    <div class="row">
        <div class="col"><h2>V8</h2><br> <div class="text-white-50"><strong> ENGINE</strong> </div> </div>
        <div class="col"><h2>2.5 sec</h2><br> <div class="text-white-50"><strong> 0-100KM </strong> </div></div>
        <div class="col"><h2>162 kW</h2><br> <div class="text-white-50"><strong> EDRIVE POWER</strong> </div></div>
        <div class="col"><h2>1000 cv</h2><br> <div class="text-white-50"><strong> MAXIMUM POWER</strong> </div></div>
    </div>
</div>


<div class="text-white my-5 ps-5" style="position: relative">
    <h1>SF90 SPIDER: AN OPEN-AIR SUPERCAR</h1>
    <p>As the Prancing Horse’s first production plug-in hybrid spider, the SF90 Spider sets new <br> performance and innovation benchmarks not only for the marque’s range, but for the entire sports  car sector. <br> The new convertible has the same extreme supercar specification and record-breaking performance as the SF90.</p>
</div>

<div class="container-fluid bg-dark bg-gradient p-2 text-white bg-opacity-75 text-center ">
    <div class="row">
        <div class="col">
            <?php $image = getImage($autoId,"banner_3");  ?>
            <img src="data:image/png;charset=utf8;base64,<?php echo base64_encode($image[0]->foto);?>">
        </div>
        <div class="col mt-5">
            <?php $image = getImage($autoId,"naam");  ?>
            <img src="data:image/png;charset=utf8;base64,<?php echo base64_encode($image[0]->foto);?>">  <div class="col"> <br> <br>
                <h2>BEYOND IMAGINATION </h2>
                <div class="col">
                    <button type="button" class="btn btn-outline-light rounded-circle "><i class="bi bi-caret-right"></i></button>
                    <p>reviews</p>
                </div>
            
            </div>
        </div>
    
    </div>
</div>
</div>
<?php
include_once ('defaults/autoCard.php');
?>

</div>
</div>


<?php
    include_once ('defaults/footer.php');
?>
</div>
</body>
<html

