<?php
    global $page;
    if($page == "login"){
        global $checkLogin;
        $checkLogin();
    }
    if($page == "registreren"){
        global $register;
        $register();
    }
?>
<html lang="nl">
<?php include_once('defaults/head.php'); ?>
<style>
    body{
        background: linear-gradient(90deg, rgba(237, 117, 81, 0.9), rgba(232, 60, 126, 0.96) ,
        rgba(34, 166, 214, 0.96), rgba(56, 252, 207, 0.36));
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
        height: 100vh;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }
</style>
<body>

<?php
    include_once ('defaults/header.php');
    include_once ('defaults/menu.php');
?>
<div>
    <div  class=" login-move w-100  text-white d-flex align-items-center" style="
            /* Rectangle 24 */
                background: linear-gradient(285.52deg, #000000 50.57%, rgba(0, 0, 0, 0) 78.26%);



            ">
        <div class=" w-100  d-flex justify-content-end pe-5 pt-5 align-items-basline " style=" min-height:100vh;">
            <?php if($page == "login"): ?>
                <div  class="  me-5 border-light position-relative mt-4  rounded-1 border-3 p-3 d-flex
            justify-content-center align-items-end
" style=" width:30rem; height: 25rem">
                    <form id="transform"  class="needs-validation text-center text-dark"  style=" width:60%" method="post" novalidate>
                        <div class="form-floating mb-3 mt-3">
                            <input type="email" class="form-control <?php if(isset
                            ($mail)){ echo "is-invalid";}?>" id="email" placeholder="Enter email" name="email"
                                   value="<?php if(isset($_POST["email"])){
                                echo $_POST["email"];}?>">
                            <label for="email">Email</label>
                            <div class="invalid-feedback text-white ">
                                Het ingevoerde e-mailadres is niet gekoppeld aan een account.
                            </div>
                        </div>
    
                        <div class="form-floating mt-3 mb-3">
                            <input type="password" class="form-control <?php if(isset($password)){ echo "is-invalid";}?>" id="pwd" value="<?php if(isset($_POST["pwd"])){
                                echo $_POST["pwd"];}?>" placeholder="Enter password" name="pwd">
                            <label for="pwd" >Wachtwoord</label>
                            <div class="invalid-feedback">
                                Het wachtwoord is onjuist.
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary py-2 mt-3 mx-auto w-50">Login</button>
                        <a href="/registreren" class="nav-link active  text-muted">Registreren</a>
                    </form>
                </div>
            <?php endif;?>
            <?php if($page == "registreren"): ?>
    
                <div class="  me-5 border-light position-relative mt-4   rounded-1 border-3 p-3 d-flex
            justify-content-center align-items-end
" style=" width:30rem; height: 25rem">
                    <form class="needs-validation text-center text-dark"  style=" width:90%" method="post" novalidate>
                        
                        <div class="d-flex gap-3">
                            <div class="form-floating mb-1 mt-3">
                                <input type="text" class="form-control <?php if(isset
                                ($fname)){ echo "is-invalid";}?>" id="fname" placeholder="Enter email" name="fname"
                                       value="<?php if(isset($_POST["fname"])){
                                    echo $_POST["fname"];}?>">
                                <label for="fname">Voornaam</label>
                                <div class="invalid-feedback text-white ">
                                    U heeft niets ingevuld
                                </div>
                            </div>
    
                            <div class="form-floating mt-3 mb-1">
                                <input type="text" class="form-control <?php if(isset
                                ($lname)){ echo "is-invalid";}?>" id="lname" value="<?php if(isset($_POST["lname"])){
                                    echo $_POST["lname"];}?>" placeholder="Enter lastname" name="lname">
                                <label for="lname" >Achternaam</label>
                                <div class="invalid-feedback text-white">
                                    U heeft niets ingevuld
                                </div>
                            </div>
                        </div>
    
                        <div class="d-flex gap-3">
                            <div class="form-floating mb-1 mt-3">
                                <input type="email" class="form-control <?php if(isset
                                ($mail)){ echo "is-invalid";}?>" id="email" placeholder="Enter email" name="email"
                                       value="<?php if(isset($_POST["email"])){
                                    echo $_POST["email"];}?>">
                                <label for="email">Email</label>
                                <div class="invalid-feedback text-white ">
                                    Vul een geldige email-adres in
                                </div>
                            </div>
        
                            <div class="form-floating mt-3 mb-3">
                                <input type="password" class="form-control <?php if(isset
                                ($password)){ echo "is-invalid";}?>" id="pwd" value="<?php if(isset($_POST["pwd"])){
                                    echo $_POST["pwd"];}?>" placeholder="Enter password" name="pwd">
                                <label for="pwd" >Wachtwoord</label>
                                <div class="invalid-feedback">
                                    U heeft niets ingevuld
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary py-2 mt-3 mx-auto
                        w-50">Registreren</button>
                        <a href="/login" class="nav-link active  text-muted">login</a>
                    </form>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>
<!--end main page-->
<?php

    include_once ('defaults/footer.php');
?>
</body>
<script>

    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        let forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
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