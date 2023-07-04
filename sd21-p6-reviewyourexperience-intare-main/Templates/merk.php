<!DOCTYPE html>
<html>
<?php
    global $merkId;
    $merk = getMerk($merkId)[0];
    $car =  getCars($merkId);

if(!$merk){
    header("location: /home");
    echo "hello";
}elseif (!$car){
    header("location: /home");
    echo "hello";
}
	include_once('defaults/head.php');

?>
<body >
<div class=" p"  style=" overflow-x: hidden">
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
            background: url('/img/<?= $merk->foto;?>.png') center center;
            background-size: cover;
            
            "
	>


<?php
include_once ('defaults/merkBannerTekst.php')
?>
	</div>
    <div class="pt-3">
        <div class="w-100 text-center mb-5">
            <h1 style='font-family: system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji" !important; '  class="fw-bold"> Onze <?php if($merk->naam == "bmw"){
                    echo strtoupper($merk->naam);
                }else{ echo ucfirst($merk->naam);}?> modellen</h1>
        </div>
        <div  id="cars" class="mx-5 d-flex justify-content-center  mb-5">
            
            
            <div id="auto" class="row  mx-auto  justify-content-center ms-md-5 px-md-5">
                
                <?php foreach($car as $car):  ?>
                <div  class="col-sm-8 col-md-6 col-lg-4 mx-auto">
                    <div class=" " style="width: 18rem; border-top:0; border-left:0; border-right:0;"><?php $checkCar = checkImage($car->id) ?>
                        <a <?php if($checkCar){echo "href='../".$merk->naam."/".$merk->id."/". $car->id."'";}  ?> class="nav-link text-center " >
            
                            <div class="card-body text-center pb-1">
                                <h5 class="card-title text-black fw-bolder fs-4"><?= $car->naam;?></h5>
                                <p class="text-muted mb-0">&euro;<?= number_format($car->prijs, 2, ',', '.');?></p>
                            </div>
                            <img src="/img/<?= $merk->naam ?>/<?= $car->foto;?>.png" class="card-img-bottom" alt="...">
                            <h5 class="card-title text-black fw-bolder fs-5 py-1" style="color: #9E0000
                            !important">bekijken <svg width="14" height="14" viewBox="0 0 14 24" fill="none"
                                                      xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.0607 13.0607C13.6464 12.4749 13.6464 11.5251 13.0607 10.9393L3.51472 1.3934C2.92893 0.807612 1.97918 0.807612 1.3934 1.3934C0.807612 1.97918 0.807612 2.92893 1.3934 3.51472L9.87868 12L1.3934 20.4853C0.807612 21.0711 0.807612 22.0208 1.3934 22.6066C1.97918 23.1924 2.92893 23.1924 3.51472 22.6066L13.0607 13.0607ZM10 13.5H12V10.5H10V13.5Z" fill="#9E0000"/>
                                </svg></h5>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>

    
                
            </div>
            
            
        </div>
    </div>
	<?php
		include_once ('defaults/footer.php');
	?>
</div>
</body>
</html>


