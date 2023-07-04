<!DOCTYPE html>
<html>
<?php
	include_once('defaults/head.php');
?>
<body style="background:white;">
<div class=" w-100 m-0 p-0">
	<?php
		include_once ('defaults/header.php');
		include_once ('defaults/menu.php');
	?>
	<?php if(!empty($message)): ?>
		<div class="alert alert-success" role="alert">
			<?=$message?>
		</div>
	<?php endif;?>


	<div class=" w-100 ">
		<div class="row w-100 m-0">
            <div class="w-100 text-center mt-3 mb-5">
                <h1 class="fw-bold"> Wie zijn wij</h1>
            </div>


    <div class=" p-0">
        <div class=" w-100">
            <div class="col-12 row d-lg-flex ps-5 mb-3">
                <div class="col-12  col-lg-6 align-self-center me-3   mt-5 " >
                    <p class="fs-3 ">Intare is begonnen in 1919, gevestigd te Den Haag. De vier oprichters waren de
                        broers
                        Abraham, Gerard, Hendrik en Jan Boon. In een klein pand aan de Oude Vest 33 maakten zij een voorzichtige start.
                    </p>

                </div>

                <div class="col-12 d-lg-flex col-lg-5  img-fluid" style=" height: 25rem ;background: url('/img/zaak/oud.jpeg')
                no-repeat top center;
                background-size: 100% 100%">
                </div>
            </div>
        </div>
    </div>


            <div class="w-100 text-center mt-3 mb-5">
                <h2 class="fw-bold"> Meerdere vestigingen, meerdere merken</h2>
            </div>

            <div class="">
                <div class=" w-100">
                    <div class="col-12 row d-lg-flex ps-5 mb-3">
                        <div class="col-12 d-lg-flex col-lg-5 img-fluid" style=" height: 25rem ;background: url('/img/zaak/zijkant.png')
                no-repeat top center;
                background-size: 100% 100%">
                        </div>
                        <div class="col-12  col-lg-6 align-self-center    mt-5 " >
                            <p class="fs-3">
                                Met meerdere showrooms en servicecentra is Intare een middelgroot autodealerbedrijf in
                                Nederland. Bij ons bent u aan het juiste adres voor de aanschaf luxe auto’s van Mercedes,
                                Porsche, Audi, Ferrari en BMW.
                            </p>

                        </div>


                    </div>
                </div>
            </div>

            
            <div class="w-100 text-center mt-3 ">
                <h2 class="fw-bold"> Reviews</h2>
            </div>
            
            <section class="  py-5 reviewsSection  " style="height:25rem;">
                <div class="d-flex h-100">
                    <div class="col-12 withUsDiv">
                        <div class="position-relative h-100">
                            <img class="w-100 h-100  position-absolute" src="/img/zaak/voorkant.png" alt="" 
                                 style="filter: brightness(0.3)">
                            <div id="carouselExampleIndicators" class="carousel h-100 carouselReviews slide "
                                 data-bs-ride="true">
                                <div class="carousel-indicators mb-5 pb-5">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                            class="active " aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                            aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                            aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner h-75">
                                    <div class="carousel-item active h-100">
                                        <div
                                                class=" text-white d-flex flex-column align-items-center  justify-content-center w-100 h-100  ">
                                            <img class=" bg-white  p-1 bg-opacity-25 rounded-circle"
                                                 src="/img/zaak/oud.jpeg" alt="" style="width: 5rem;">
                                            <h4 class="">hello</h4>
                                            <h6 class="p-2 "> Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                        </div>
                                    </div>
                                    <div class="carousel-item h-100 ">
                                        <div
                                                class=" text-white d-flex flex-column align-items-center  justify-content-center w-100 h-100  ">
                                            <img class=" bg-white  p-1 bg-opacity-25 rounded-circle"
                                                 src="/img/zaak/oud.jpeg" alt="" style="width: 5rem;">
                                            <h4 class="">hello</h4>
                                            <h6 class=" "> Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                        </div>
                                    </div>
                                    <div class="carousel-item h-100">
                                        <div
                                                class=" text-white d-flex flex-column align-items-center  justify-content-center w-100 h-100  ">
                                            <img class=" bg-white  p-1 bg-opacity-25 rounded-circle "
                                                 src="/img/zaak/oud.jpeg" alt="" style="width: 5rem;">
                                            <h4 class="">hello</h4>
                                            <h6 class=" "> Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                        </div>
                                    </div>

                                </div>

                            
                            </div>
                        </div>
            </section>


                <div class=" w-100">
                    <div class="col-12 row d-lg-flex ps-5 mb-3">
                        <div class="col-12  col-lg-4 align-self-center me-3 pb-lg-4 text-center   mt-5 " >
                            <p class="fs-3">
                                Tinwerf 16, 2544 ED Den Haag
                            </p>
                            <p class="fs-3">
                                088 666 3600
                            </p>

                        </div>

                        <div class="col-12 d-lg-flex align-items-lg-center justify-content-center col-lg-7  img-fluid" >
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2453.9404127997245!2d4
                    .247919915900072!3d52.04439817972689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13
                    .1!3m3!1m2!1s0x47c5b1965f4ab57f%3A0x4dc09578063ad6d3!2sROC%20Mondriaan%20School%20voor%20ICT!5e0
                    !3m2!1snl!2snl!4v1669562472471!5m2!1snl!2snl" style="border:0; width:
                    100%; height:20rem;"
                        </div>
                    </div>
                </div>

<!--            <div class="col-12 d-flex mt-5  mb-3">-->

<!--                <div class="col ms-5 align-self-center me-2 mt-5 text-center" >-->
                    <p class="fs-3">
                        Tinwerf 16, 2544 ED Den Haag
                    </p>
                    <p class="fs-3">
                        088 666 3600
                    </p>
<!--                </div>-->
<!--                <div class="col-7 ms-3 me-3  ">-->
<!--                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2453.9404127997245!2d4-->
<!--                    .247919915900072!3d52.04439817972689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13-->
<!--                    .1!3m3!1m2!1s0x47c5b1965f4ab57f%3A0x4dc09578063ad6d3!2sROC%20Mondriaan%20School%20voor%20ICT!5e0-->
<!--                    !3m2!1snl!2snl!4v1669562472471!5m2!1snl!2snl" style="border:0; width:-->
<!--                    100%; height:20rem;"-->
<!--                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
<!--                </div>-->
<!--            </div>-->

		</div>

        <section id="contact" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb-4">
                        <h2 class="text-uppercase section-heading">Contact </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contactForm" name="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3"><input class="form-control" type="text" id="name" placeholder="Uw Volledige naam" name="name" required=""><small class="form-text text-danger flex-grow-1 lead"></small></div>
                                    <div class="form-group mb-3"><input class="form-control" type="email" id="email" placeholder="Uw Email" name="mail" required=""><small class="form-text text-danger lead"></small></div>
                                    <div class="form-group mb-3"><input class="form-control" type="tel" placeholder="Uw telefoonnummer" name="phone" required=""><small class="form-text text-danger lead"></small></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3"><textarea class="form-control " id="message" placeholder="Uw Bericht" name="text" required="" style="height: 9rem"></textarea><small class="form-text text-danger lead"></small></div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div><button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" name="submit" type="submit">Verstuur</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
	</div>
</div>
	
	<?php
		include_once ('defaults/footer.php');
	?>
</div>
</body>
</html>

