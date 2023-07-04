<?php
$merken = getCategories();
?>

<footer class="container-fluid py-4 border-top " style="background: black; box-sizing: border-box;  border-image:
    linear-gradient(
    to right,
     rgba(158, 0, 0)  ,
rgba(158, 0, 0,10%) ) 10 1%">
    
    <div class="row mx-auto d-flex justify-content-center  ">
        
            <div class="col-2 text-white me-5">
                <p class="p-0 m-0 text-white"><strong> Intare merken</strong></p>
                <ul id="footerUl" class="p-0" style="
                    list-style: none;
                ">
                    <?php foreach ($merken as $merk): ?>
                    <li class="nav-item d-flex" >
                        <i class="mt-2">
                            <svg width="14" height="19" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.0607 13.0607C13.6464 12.4749 13.6464 11.5251 13.0607 10.9393L3.51472 1.3934C2.92893 0.807612 1.97918 0.807612 1.3934 1.3934C0.807612 1.97918 0.807612 2.92893 1.3934 3.51472L9.87868 12L1.3934 20.4853C0.807612 21.0711 0.807612 22.0208 1.3934 22.6066C1.97918 23.1924 2.92893 23.1924 3.51472 22.6066L13.0607 13.0607ZM10 13.5H12V10.5H10V13.5Z" fill="#FF0000"/>
                            </svg>
                        </i>
                        
                        <a class="nav-link active  text-light " href="/merk/<?= $merk->id ?>">
                            <?php if ($merk->naam == "bmw") {
                                echo strtoupper($merk->naam);
                            } else {
                                echo ucfirst($merk->naam);
                            } ?></a>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
            <div class="col-3 text-white">
                <p class="p-0 m-2"><strong>Over intare</strong></p>
                <ul id="footerUl" class="p-0" style="
                    list-style: none;
                ">
                    <li class="nav-item d-flex" >
                        <i class="mt-2">
                            <svg width="14" height="19" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.0607 13.0607C13.6464 12.4749 13.6464 11.5251 13.0607 10.9393L3.51472 1.3934C2.92893 0.807612 1.97918 0.807612 1.3934 1.3934C0.807612 1.97918 0.807612 2.92893 1.3934 3.51472L9.87868 12L1.3934 20.4853C0.807612 21.0711 0.807612 22.0208 1.3934 22.6066C1.97918 23.1924 2.92893 23.1924 3.51472 22.6066L13.0607 13.0607ZM10 13.5H12V10.5H10V13.5Z" fill="#FF0000"/>
                            </svg>
                        </i>
            
                        <a class="nav-link active  text-light " href="/about/">Wie is Intare</a>
                    </li>
                    <li class="nav-item d-flex">
                        <i class="mt-2">
                            <svg width="14" height="19" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.0607 13.0607C13.6464 12.4749 13.6464 11.5251 13.0607 10.9393L3.51472 1.3934C2.92893 0.807612 1.97918 0.807612 1.3934 1.3934C0.807612 1.97918 0.807612 2.92893 1.3934 3.51472L9.87868 12L1.3934 20.4853C0.807612 21.0711 0.807612 22.0208 1.3934 22.6066C1.97918 23.1924 2.92893 23.1924 3.51472 22.6066L13.0607 13.0607ZM10 13.5H12V10.5H10V13.5Z" fill="#FF0000"/>
                            </svg>
                        </i>
                        <a class="nav-link active  text-light" >Veel gestelde vragen</a>
                    </li>
                    <li class="nav-item d-flex">
                        <i class="mt-2">
                            <svg width="14" height="19" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.0607 13.0607C13.6464 12.4749 13.6464 11.5251 13.0607 10.9393L3.51472 1.3934C2.92893 0.807612 1.97918 0.807612 1.3934 1.3934C0.807612 1.97918 0.807612 2.92893 1.3934 3.51472L9.87868 12L1.3934 20.4853C0.807612 21.0711 0.807612 22.0208 1.3934 22.6066C1.97918 23.1924 2.92893 23.1924 3.51472 22.6066L13.0607 13.0607ZM10 13.5H12V10.5H10V13.5Z" fill="#FF0000"/>
                            </svg>
                        </i>
                        <a class="nav-link active  text-light " >Privacy- en cookie beleid</a>
                    </li>
                    <li class="nav-item d-flex">
                        <i class="mt-2">
                            <svg width="14" height="19" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.0607 13.0607C13.6464 12.4749 13.6464 11.5251 13.0607 10.9393L3.51472 1.3934C2.92893 0.807612 1.97918 0.807612 1.3934 1.3934C0.807612 1.97918 0.807612 2.92893 1.3934 3.51472L9.87868 12L1.3934 20.4853C0.807612 21.0711 0.807612 22.0208 1.3934 22.6066C1.97918 23.1924 2.92893 23.1924 3.51472 22.6066L13.0607 13.0607ZM10 13.5H12V10.5H10V13.5Z" fill="#FF0000"/>
                            </svg>
                        </i>
                        <a class="nav-link active  text-light " >Privacy</a>
                    </li>
                </ul>
            </div>
            <div class="col-2 text-white">
                <p class="p-0 m-0"><strong>Contact</strong></p>
                <ul id="footerUl" class="p-0" style="
                    list-style: none;
                ">
                    <li class="nav-item d-flex" >
                        <i class="mt-2">
                            <svg width="14" height="19" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.0607 13.0607C13.6464 12.4749 13.6464 11.5251 13.0607 10.9393L3.51472 1.3934C2.92893 0.807612 1.97918 0.807612 1.3934 1.3934C0.807612 1.97918 0.807612 2.92893 1.3934 3.51472L9.87868 12L1.3934 20.4853C0.807612 21.0711 0.807612 22.0208 1.3934 22.6066C1.97918 23.1924 2.92893 23.1924 3.51472 22.6066L13.0607 13.0607ZM10 13.5H12V10.5H10V13.5Z" fill="#FF0000"/>
                            </svg>
                        </i>
            
                        <a class="nav-link active  text-light " href="/about/#contact">Direct contact</a>
                    </li>
                    <li class="nav-item d-flex">
                        <i class="mt-2">
                            <svg width="14" height="19" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.0607 13.0607C13.6464 12.4749 13.6464 11.5251 13.0607 10.9393L3.51472 1.3934C2.92893 0.807612 1.97918 0.807612 1.3934 1.3934C0.807612 1.97918 0.807612 2.92893 1.3934 3.51472L9.87868 12L1.3934 20.4853C0.807612 21.0711 0.807612 22.0208 1.3934 22.6066C1.97918 23.1924 2.92893 23.1924 3.51472 22.6066L13.0607 13.0607ZM10 13.5H12V10.5H10V13.5Z" fill="#FF0000"/>
                            </svg>
                        </i>
                        <a class="nav-link active  text-light" >Klachten melden</a>
                    </li>
                    <li class="nav-item d-flex">
                        <i class="mt-2">
                            <svg width="14" height="19" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.0607 13.0607C13.6464 12.4749 13.6464 11.5251 13.0607 10.9393L3.51472 1.3934C2.92893 0.807612 1.97918 0.807612 1.3934 1.3934C0.807612 1.97918 0.807612 2.92893 1.3934 3.51472L9.87868 12L1.3934 20.4853C0.807612 21.0711 0.807612 22.0208 1.3934 22.6066C1.97918 23.1924 2.92893 23.1924 3.51472 22.6066L13.0607 13.0607ZM10 13.5H12V10.5H10V13.5Z" fill="#FF0000"/>
                            </svg>
                        </i>
                        <a class="nav-link active  text-light ">Werken bij intare</a>
                    </li>
                </ul>
            </div>
    </div>
</footer>

<div class="bg-light text-center d-flex justify-content-center  ">
    <span><a class="nav-link m-0 px-0 active text-dark fw-bold  " href="https://github.com/aelkaduoi">Amine El Kaduoi </a></span>
    <p class="nav-link m-0 px-0 active text-dark fw-bold  " > &nbsp;&&nbsp;</p>
    <a class="nav-link m-0 px-0 active text-dark fw-bold  " href="https://github.com/h-uwimana"> Hussein Uwimana</a>
</div>



