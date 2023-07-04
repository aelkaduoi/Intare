<?php

$callabse = 0;
$merken = getCategories();
$view =  6;
$userId = $_SESSION["userId"];
$colCount = colCount();

//updating car
if(isset($_POST["changeSubmit"])){
    if(!empty($_POST["carName"]) && !empty($_GET["merk"]) && !empty($_POST["carPrice"]) && !empty($_POST["carSpeed"]) && !empty($_POST["carAcc"]) && !empty($_POST["carPk"]) && !empty($_GET["id"])){
        $name = filter_input(INPUT_POST, "carName", FILTER_SANITIZE_SPECIAL_CHARS);
        $merkName = filter_input(INPUT_GET, "merk", FILTER_SANITIZE_SPECIAL_CHARS);
        $fileName = "file";


            updateCar();
            if($_FILES["file"]["name"]){
                fileUploadCar($merkName,$name,$fileName);
            }

            header("location: /admin/table/");


    }
}

if(isset($_POST["modal"])){
    $deleteName = filter_input(INPUT_GET, "carName", FILTER_SANITIZE_SPECIAL_CHARS);
    $deleteId = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
    $modal = true;
}



if(isset($_POST["deleteSubmit"])){
    $deleteId = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

    deleteCar($deleteId);
}

if(isset($_POST["addName"])){



    if(!empty($_POST["addName"]) && !empty($_POST["merkId"]) && !empty($_GET["merk"])&& !empty($_POST["addPrice"]) && !empty($_POST["addSpeed"]) && !empty($_POST["addAcc"]) && !empty($_POST["addPk"]) && $_FILES["addFile"]["name"] ){
        $name = filter_input(INPUT_POST, "addName", FILTER_SANITIZE_SPECIAL_CHARS);
        $merkId = filter_input(INPUT_POST, "merkId", FILTER_VALIDATE_INT);

        if($merkId) {
            $merkName = getMerk($merkId);


            $carName = str_replace(" ", "-", strtolower($name));
            $imgPath = "$carName/auto";
            $fileName = "addFile";

            fileUploadCar($merkName[0]->naam, $name, $fileName);
            addCar($imgPath);
        }
    }

}






if(isset($_GET["view"])){
    if(intval($_GET["view"])){
        $view = intval($_GET["view"]);
    }
}
$NumberOfPerPage = ceil($colCount/$view );







if (!isset ($_GET['page']) ) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

if($page < 1 || $page > $NumberOfPerPage){
    $page = 1;
}


$pageFirstResult = ($page-1) * $view;
include_once ('defaults/head.php');
?>
<!DOCTYPE html>
<html lang="en">





<body style="background: white;">



<?php

include_once ('defaults/header.php');
include_once ('defaults/menu.php');
?>

    <div id="wrapper">

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="">
                    <div class="card border-0 rounded-0">
                        <div class="card-header rounded-0 bg-dark py-3">
                            <p class="text-white m-0 fw-bold">Auto Informatie</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
<!----------------------------                    how many cars to view                    ---------------------->
                                    <form name="form" action="/admin/table/" id="myForm" class="dataTables_length " aria-controls="dataTable">
                                        <label class="form-label">Aantal rijen:&nbsp;
                                            <select

                                                    name="view"
                                                    onchange="form.submit();"
                                                    class="d-inline-block form-select form-select-sm">
                                                <option value="6"
                                                    <?php if($view == 6){
                                                        echo 'selected=""';
                                                    } ?> >6</option>
                                                <option value="12"
                                                        <?php if($view == 12){
                                                            echo 'selected=""';
                                                        } ?>
                                                        >12</option>
                                                <option value="24"
                                                    <?php if($view == 24){
                                                        echo 'selected=""';
                                                    } ?> >24</option>
                                                <option value="48"
                                                    <?php if($view == 48){
                                                        echo 'selected=""';
                                                    } ?> >48</option>
                                            </select>&nbsp;
                                        </label>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
<!----------------------------                    table                   ---------------------->
                            <div  class="table-responsive d-flex justify-content-center table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table  style="transition: width .35s ease !important; "  class="table my-0 overflow-hidden" id="dataTable">
                                    <thead class="text-center">
                                        <tr>


                                            <th>Afbeelding</th>
                                            <th>Naam</th>
                                            <th>Prijs</th>
                                            <th>Topsnelheid</th>
                                            <th>acceleratie</th>
                                            <th>vermogen</th>
                                            <th>Veranderen</th>
                                            <th>verwijderen</th>


                                        </tr>
                                    </thead>
                                    <tbody class="">



                                        <?php
                                            $cars = getAllCars($pageFirstResult,$view);
                                        ?>

                                        <?php foreach($cars as $car ):?>

                                        <?php  $merk = getMerk($car->merk_fk);

                                            if(isset($_REQUEST["#collapse".$car->id])){
                                            }
                                             ?>

 <!----------------------------                    showing car                 ---------------------->
                                            <tr>
                                                <td class="text-center"  >

                                                    <img id="img<?= $car->id?>" class=" me-2" width="100" height="60" src="/img/<?= $merk[0]->naam;?>/<?= $car->foto;?>.png?<?= mt_rand() ?>">
                                                </td>
                                                <td class="text-center">
                                                    <span class="text-">
                                                        <strong><?= $car->naam;?>
                                                        </strong>
                                                    </span>
                                                </td>
                                                <td class="text-center"> &euro;<?= number_format($car->prijs, 2, ',', '.');?></td>
                                                <td  class="text-center"><?= $car->top_snelheid;?> km/u</td>
                                                <td class="text-center"><?= $car->acceleratie;?> s</td>
                                                <td class="text-center"><?= $car->vermogen;?> (pk)</td>

                                                <td class="text-center">
                                                    <button id="change<?= $car->id?>" onclick="Click('change<?= $car->id?>','collapse<?= $car->id?>')" type="submit"  class="btn btn-primary btn-sm" data-bs-toggle="collapse" data-bs-target="#collapse" >Veranderen</button>
                                                </td>
                                                <td class="text-center">
                                                    <form action="/admin/table/?id=<?=$car->id?>&carName=<?= $car->naam?>" method="post" >
                                                        <button id="delete" type="submit" name="modal" class="btn btn-danger btn-sm"  >
                                                            Verwijderen
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>



<!----------------------------                    update car                 ---------------------->


                                            <tr  class="collapse  bg-dark text-white" id="collapse<?=$car->id?>"  >
                                                <form action="/<?= $_SESSION["user"]; ?>/table/?id=<?=$car->id?>&merk=<?= $merk[0]->naam?>"  method="post" enctype="multipart/form-data">
                                                <td class="text-center " >

                                                    <div  class="justify-content-center gap-2 mb-3 d-flex mt-4" >

                                                        <input onchange="viewImg(this,'img<?= $car->id ?>' )" id="file<?= $car->id ?>" class="btn btn-primary btn-sm" style="display: none;" name="file"  type="file">
                                                        <label for="file<?= $car->id ?>" class="btn btn-primary btn-sm" >
                                                            verander foto
                                                        </label>

                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <label for="name<?= $car->id?>">verander naam: </label>
                                                    <input value="<?= $car->naam ?>" id="name<?= $car->id?>" type="text" name="carName">
                                                </td>
                                                <td class="text-center">
                                                    <label for="price<?= $car->id?>">verander prijs: </label>
                                                    <input value="<?= $car->prijs ?>" id="price<?= $car->id?>" type="number" name="carPrice">
                                                </td>
                                                <td class="text-center">
                                                    <label for="speed<?= $car->id?>">verander Topsnelheid: </label>
                                                    <input value="<?= $car->top_snelheid ?>" id="speed<?= $car->id?>" type="number" name="carSpeed">
                                                </td>
                                                <td class="text-center">
                                                    <label for="acc<?= $car->id?>">verander acceleratie: </label>
                                                    <input value="<?= $car->acceleratie ?>" id="acc<?= $car->id?>" type="number" name="carAcc">
                                                </td>
                                                <td class="text-center">
                                                    <label for="pk<?= $car->id?>">verander vermogen: </label>
                                                    <input value="<?= $car->vermogen ?>" id="pk<?= $car->id?>" type="number" name="carPk">
                                                </td>
                                                <td class="text-center p-4 ">
                                                        <button id="changeButton m-4 " onclick="this.submit()" type="submit" name="changeSubmit" class="btn btn-primary btn-sm" >
                                                            Opslaan
                                                        </button>
                                                </td>
                                                    <td >
                                                    </td>
                                            </form>
                                            </tr>
                                        <?php endforeach;?>
<!----------------------------                    add car                    ---------------------->
                                        <tr  class=" collapse bg-dark text-white" id="add"  >
                                            <form action="/<?= $_SESSION["user"]; ?>/table/?merk=<?= $merk[0]->naam?>&page<?= $page?>" id="addForm" method="post" enctype="multipart/form-data">
                                                <td class="text-center bg-light" >

                                                    <img id="addImg" class=" me-2" width="100" height="60" src="">
                                                </td>
                                                <td class="text-center" >

                                                    <div  class="justify-content-center gap-2 mb-3 d-flex" >

                                                        <input onchange="viewImg(this,'addImg' )" id="file" class="btn btn-primary btn-sm" style="display: none;" name="addFile"  type="file">
                                                        <label for="file" class="btn btn-primary btn-sm" >
                                                            Foto Toevoegen
                                                        </label>


                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <label class="form-label">Auto Merk:</label>
                                                        <select
                                                                name="merkId"
                                                                class="d-inline-block form-select form-select-sm">

                                                            <?php $merken = getCategories(); ?>
                                                            <?php foreach ($merken as $merk): ?>
                                                            <option value="<?= $merk->id ?>"
                                                                ><?= $merk->naam ;?></option>
                                                            <?php endforeach; ?>

                                                        </select>

                                                </td>
                                                <td class="text-center">
                                                    <label for="addName">Naam: </label>
                                                    <input value=""   id="addName" type="text" name="addName">
                                                </td>
                                                <td class="text-center">
                                                    <label for="addPrice">Prijs: </label>
                                                    <input value="" id="addPrice" type="number" name="addPrice">
                                                </td>
                                                <td class="text-center">
                                                    <label for="addSpeed">Topsnelheid: </label>
                                                    <input value="" id="addSpeed" type="number" name="addSpeed">
                                                </td>
                                                <td class="text-center">
                                                    <label for="addAcc">Acceleratie: </label>
                                                    <input value="" id="addAcc" type="number" name="addAcc">
                                                </td>
                                                <td class="text-center">
                                                    <label for="addPk">Vermogen: </label>
                                                    <input value="" id="addPk" type="number" name="addPk">
                                                </td>

                                            </form>
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr class="text-center">
                                            <th>Afbeelding</th>
                                            <td><strong>Naam</strong></td>
                                            <td><strong>Prijs</strong></td>
                                            <td><strong>Topsnelheid</strong></td>
                                            <td><strong>Acceleratie</strong></td>
                                            <td><strong>vermogen</strong></td>
                                            <th>Veranderen</th>
                                            <th>verwijderen</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
<!----------------------------                     modal                    ---------------------->
                            <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-modal="true" role="dialog" aria-hidden="true" >
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="modalTitle">Weet u het zeker?</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div id="modalBody" class="modal-body">
                                            <?php if(isset($modal) && $modal):?>
                                            U staat op het punt op om de <?= strtolower($deleteName);?> te verwijderen. Dat betekent dat ook alle foto's en teksten van de <?= strtolower($deleteName);?> verwijderd zullen worden. Klik op verwijderen als u akkoord gaat.

                                            <?php endif;?>
                                        </div>
                                        <div class="modal-footer">

                                            <a href="/admin/table/?page=<?= $page?>">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuleren</button>
                                            </a>
                                            <form  method="post">
                                                <button data-bs-dismiss="modal" name="deleteSubmit"  type="submit" class="btn btn-danger">Verwijderen</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
 <!----------------------------                    table footer                    ---------------------->
                            <div class="row d-flex ">
                                <div class="col  ">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing <?php if(!$pageFirstResult){$pageFirstResult++;}  echo $pageFirstResult; ?> to <?php if($pageFirstResult == 1){echo $view;}else{  echo $pageFirstResult+$view;} ?> of <?= $colCount; ?></p>

                                </div>
                                <div    class="col justify-self-center text-center ">
                                    <button name="addSubmit" onclick="$('#addForm').submit()" id="saveAdd"  class="btn btn-primary collapse">Opslaan</button>
                                    <button onclick="Click('addButton','add')"   id="addButton" class="btn btn-primary ">Auto Toevoegen</button>


                                </div>

                                <div class="col">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item <?php if ($page > 1){
                                                echo "enabled";
                                            }else{
                                                echo "disabled";
                                            }

                                            ?>"><a class="page-link" aria-label="Previous" href="/admin/table/?page=<?= $page - 1?>"><span aria-hidden="true">«</span>
                                                <?php
                                                for($pages = 1; $pages<= $NumberOfPerPage; $pages++):
                                                ?>
                                            <li class="page-item <?php if($page ==  $pages){
                                                echo "active";
                                            } ?> "><a class="page-link" href ="/<?= $_SESSION["user"] ;?>/table/?page=<?= $pages?> ">  <?= $pages?> </a></li>
                                                    <?php endfor;?>


                                            <li class="page-item <?php if ($page == $NumberOfPerPage){
                                                echo "disabled";
                                            }else{
                                                echo "enabled";
                                            }

                                            ?>"><a class="page-link" aria-label="Next" href="/admin/table/?page=<?= $page + 1?> "><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            include_once ('defaults/footer.php');
            ?>

    </div>
</body>

<?php if(isset($modal) && $modal):?>
    <script>
        const myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'), {
            keyboard: false
        })
        myModal.show()
    </script>
<?php endif;?>
<script src="/js/table.js">

</script>
</html>