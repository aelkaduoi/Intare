<?php
    
    $melding = "";
    
    
    global $params;
    if(isset($_REQUEST["terug"])){
        header("location: http://healthone.localhost/fietsen");
    }

    if(isset($_POST["submit"])){
        
        if(!empty($_POST["merk"]) & !empty($_POST["type"]) & !empty($_POST["prijs"]) & !empty($_POST["voorraad"]) ){
    
            if( isset($_POST["artikel"]) ){
                if(!empty($_POST["artikel"])){
                    $id = filter_input(INPUT_POST, "artikel", FILTER_VALIDATE_INT);
                }
            }
            
            
            
            
            $merk = filter_input(INPUT_POST, "merk", FILTER_SANITIZE_STRING);
            $type = filter_input(INPUT_POST, "type", FILTER_SANITIZE_STRING);
            $prijs = filter_input(INPUT_POST, "prijs", FILTER_VALIDATE_FLOAT);
            $voorraad = filter_input(INPUT_POST, "voorraad", FILTER_VALIDATE_INT);
    
    
           
            
            if(!$prijs){
                $prijsCor = false;
                $prijsVal = "Vul een correcte prijs in";
            }else{
                $prijsCor = true;
                echo "prijs ";
            }
    
            if(!$voorraad){
                $voorraadCor = false;
                $voorraadVal = "Vul een correcte voorraad in";
            }else{
                $voorraadCor = true;
                echo "voorraad ";
            }
    
    
            if(isset($id)){
                if(!$id){
                    $idCor = false;
                    $idVal = "Vul een correcte artikelnummer in";
                }else{
                    $idCor = true;
                    echo " id ";
                }
                if( $voorraadCor & $prijsCor & $idCor){
                    global $update;
                    $update($id,$merk,$type,$prijs,$voorraad );
                    header("location: http://healthone.localhost/fietsen");
        
        
                }
            }
            
           
            
            if ( $params[1] == "insert" & $voorraadCor & $prijsCor){
                echo "insert";
                global  $insert;
                $insert($merk,$type,  $voorraad);
                header("location: http://healthone.localhost/fietsen");
                
            }
            
            
            
            
                
           
            
        }else{
            $melding = " <br> u heeft niet alles ingevuld";
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	
	<style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
	</style>
</head>
<?php
	include_once('defaults/head.php');
?>

<body>

<div class="container">
	<?php
		include_once('defaults/header.php');
		include_once('defaults/menu.php');
	?>
    
    
    <form  method="post" class="w-50 mx-auto needs-validation text-center" novalidate>
       
        <?php
            global $fiets;
            if($params[1] !== "insert"){
                echo '<div class="mb-3 text-start  ">
                    <label for="artikel" class="form-label">Artikelnummer</label>
                    <input type="number" name="artikel" class="form-control ';
                if(isset($idVal)){ echo "is-invalid";}
                echo ' "
                    id="artikel" aria-describedby="artikel" value="'. $fiets["id"].'">
                    <div class="invalid-feedback">';
                if(isset($idVal)){ echo $idVal;} else{ echo "vul een juiste artikkelnummer";}
                echo " </div> </div>";
            }
        ?>
        
        
        
        <div class="mb-3 text-start ">
            <label for="merk" class="form-label">Merk</label>
            <input type="text" name="merk" class="form-control <?php  if(isset($merkVal)){ echo "is-invalid";}?>"
                   id="merk" aria-describedby="merk" value="<?php
                if($params[1] == "insert" ){
                    if(isset($_POST["merk"])){
                        echo $_POST["merk"];
                    }
                }else{
                    echo $fiets["merk"];
                }
            ?>">
            <div class="invalid-feedback">
                <?php  if(isset($merkVal)){ echo "$merkVal";}else{ echo "u heeft niets ingevuld";}?>
            </div>
        </div>
        
        <div class="mb-3 text-start  ">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" class="form-control <?php  if(isset($typeVal)){ echo "is-invalid";}?>"
                   id="type" aria-describedby="type" value="<?php
                if($params[1] == "insert" ){
                    if(isset($_POST["type"])){
                        echo $_POST["type"];
                    }
                }else{
                    echo $fiets["type"];
                }
            ?>">
            <div class="invalid-feedback">
                <?php  if(isset($typeVal)){ echo "$typeVal";}else{ echo "u heeft niets ingevuld";}?>
            </div>
        </div>
        <div class="mb-3 text-start  ">
            <label for="prijs" class="form-label">Prijs</label>
            <input type="number" step="any" name="prijs" class="form-control <?php  if(isset($prijsVal)){ echo "is-invalid";}?>"
                   id="prijs" aria-describedby="prijs" value="<?php
                if($params[1] == "insert" ){
                    if(isset($_POST["prijs"])){
                        echo $_POST["prijs"];
                    }
                }else{
                    echo $fiets["prijs"];
                }
            ?>">
            <div class="invalid-feedback">
                <?php  if(isset($prijsVal)){ echo "$prijsVal";}else{ echo "Vul een juiste prijs in";}?>
            </div>
        </div>
        <div class="mb-3 text-start  ">
            <label for="voorraad" class="form-label">Voorraad</label>
            <input type="number" name="voorraad" class="form-control <?php  if(isset($voorraadVal)){ echo "is-invalid";}?>"
                   id="voorraad" aria-describedby="voorraad" value="<?php
                        if($params[1] == "insert" ){
                            if(isset($_POST["voorraad"])){
                                echo $_POST["voorraad"];
                            }
                        }else{
                            echo $fiets["voorraad"];
                        }
                    ?>">
            <div class="invalid-feedback">
                <?php  if(isset($voorraadVal)){ echo "$voorraadVal";}else{ echo "Vul een juiste voorraad in";}?>
            </div>
        </div>
        <button type="submit" name="terug" class="btn  btn-primary">Terug</button>
        <button type="submit" name="submit" class="btn  btn-primary">Submit</button>
        
        <?php
            echo $melding;
    
        ?>
        
    </form>
    
    <div class="text-center ms-4 w-50">

    
    </div>
    
	<hr>
	<?php
		include_once('defaults/footer.php');
	
	?>
</div>

</body>

<script>
    (() => {
        'use strict'
        
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')
        
        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
</html>