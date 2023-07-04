<?php
    global $car;
    global $merk;
?>

<div class="text-white mt-5 ps-5" style="position: relative; ">
    <h1>Ontdek de <?php echo $car->naam;?> in detail</h1>
    <p>De highlights kent u al. hier vindt u meer details over de afzonderlijke hoodstukken.</p>
</div>
<div class="card p-3 w-80 " style="margin: auto; width: 80%; box-shadow: white: 10px; ">
    <div class="row g-0">
        <div class="col-md-3">
            <div class="card-body">
                <h2 class="fw-bold"><?php echo $car->naam;?></h2>
                <p class="text-danger"> Nieuw</p>
                <p class="card-text">Vanaf €<?php echo number_format($car->prijs, 2, ',', '.') ;?></p>
                <p class="card-text">(consumentadviesprijs)</p>
                <div class="text-danger w-29 "> <hr  ="hr" ></div>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="card-body">
                <h3 class="fw-bold mt-3  "> <?php echo $car->vermogen;?> </h3>
                <div class="float-end m-n1 pe-n3 pe-5 w-80 " <p class="font-weight-light">Vermogen (pk) </p> </div>
            <div class=" w-30 "> <hr  ="hr" ></div>
            <h3 class="fw-bold "> <?php echo $car->acceleratie;?> s </h3>
            <div class="float-end  m-n2 pe-5 " <p class="font-weight-light">0 - 100 km/u</p> </div>
        <div class=" w-30 "> <hr  ="hr" ></div>
        <h3 class="fw-bold "> <?php echo $car->top_snelheid;?> km/h </h3>
        <div class="float-end m-n2 pe-5 " <p class="font-weight-light">Topsnelheid</p>  </div>
</div>
</div>
<div class=" col-lg-3 col-md-8 ">
    <img src="/img/<?php echo $merk->naam;?>/<?php echo $car->foto;?>.png" class="card-img-bottom" alt="...">
</div>
<div class="col-md-5  ">
    <button type="button" class="btn btn-light border"
    <i class="mt-2">
        <svg width="14" height="15" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.0607 13.0607C13.6464 12.4749 13.6464 11.5251 13.0607 10.9393L3.51472 1.3934C2.92893 0.807612 1.97918 0.807612 1.3934 1.3934C0.807612 1.97918 0.807612 2.92893 1.3934 3.51472L9.87868 12L1.3934 20.4853C0.807612 21.0711 0.807612 22.0208 1.3934 22.6066C1.97918 23.1924 2.92893 23.1924 3.51472 22.6066L13.0607 13.0607ZM10 13.5H12V10.5H10V13.5Z" fill="#FF0000"/>
        </svg>
    </i>Technishe gegevens</button>
    <button type="button" class="btn btn-light border" <i class="mt-2">
        <svg width="14" height="15" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.0607 13.0607C13.6464 12.4749 13.6464 11.5251 13.0607 10.9393L3.51472 1.3934C2.92893 0.807612 1.97918 0.807612 1.3934 1.3934C0.807612 1.97918 0.807612 2.92893 1.3934 3.51472L9.87868 12L1.3934 20.4853C0.807612 21.0711 0.807612 22.0208 1.3934 22.6066C1.97918 23.1924 2.92893 23.1924 3.51472 22.6066L13.0607 13.0607ZM10 13.5H12V10.5H10V13.5Z" fill="#FF0000"/>
        </svg>
    </i>Configureren</button>
    <button onclick="closeWriteReview(); rotateIcon('reviewsButton') " data-bs-toggle="collapse" aria-controls="reviews"  data-bs-target="#reviews" aria-expanded="false" type="button" class="btn border btn-light" <i class="mt-2">
        <svg id="reviewsButton" width="14" height="15" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.0607 13.0607C13.6464 12.4749 13.6464 11.5251 13.0607 10.9393L3.51472 1.3934C2.92893 0.807612 1.97918 0.807612 1.3934 1.3934C0.807612 1.97918 0.807612 2.92893 1.3934 3.51472L9.87868 12L1.3934 20.4853C0.807612 21.0711 0.807612 22.0208 1.3934 22.6066C1.97918 23.1924 2.92893 23.1924 3.51472 22.6066L13.0607 13.0607ZM10 13.5H12V10.5H10V13.5Z" fill="#FF0000"/>
        </svg>
    </i>reviews</button>
    <button onclick="closeReview(); rotateIcon('writeReviewButton') " data-bs-toggle="collapse" aria-controls="writeReview"  data-bs-target="#writeReview" aria-expanded="false"  type="button" class="btn border btn-light" <i class="mt-2">
        <svg id="writeReviewButton" width="14" height="15" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.0607 13.0607C13.6464 12.4749 13.6464 11.5251 13.0607 10.9393L3.51472 1.3934C2.92893 0.807612 1.97918 0.807612 1.3934 1.3934C0.807612 1.97918 0.807612 2.92893 1.3934 3.51472L9.87868 12L1.3934 20.4853C0.807612 21.0711 0.807612 22.0208 1.3934 22.6066C1.97918 23.1924 2.92893 23.1924 3.51472 22.6066L13.0607 13.0607ZM10 13.5H12V10.5H10V13.5Z" fill="#FF0000"/>
        </svg>
    </i>review schrijven</button>

</div>
