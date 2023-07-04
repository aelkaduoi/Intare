
<html >
	<?php

    $userId = $_SESSION["userId"];
    
    if(isset($_POST["fileSubmit"])) {
        fileUploadProfile($userId);

    }

    if(isset($_POST["userInfoSubmit"])){
        updateUserInfo($userId);
    }

    if(isset($_POST['adressInfoSubmit'])){
        updateAdressInfo($userId);
    }



try {
$user = getUser(intval($userId))[0];
} catch (\PDOException $e) {
    echo ($e->getMessage()); } include_once('defaults/head.php'); ?>

	<body id="" class="bg-dark">
		<?php include_once('defaults/menu.php'); ?>

		<div class="d-flex flex-column" id="content-wrapper">
			<div id="content">
				<div class="container-fluid">
					<div class="row mt-4 mb-3">
						<div class="col-lg-3">
							<div class="card-body text-center"
								><img
                                        id="img"
									class="rounded-circle mb-3 mt-4"
									src="<?php
									 if ($user->foto){
                                         echo "/img/user/".$user->foto.".png?".mt_rand();
                                     }else{
                                         echo "/img/user/standaard.jpeg";
                                     }
									 ?>"
									width="160"
									height="160"
								/>
								<form  method="post" class="justify-content-center gap-2 mb-3 d-flex" enctype="multipart/form-data">

                                    <input onchange="viewImg(this)" id="file" class="btn btn-primary btn-sm" style="display: none;" name="file"  type="file">
									<label for="file" class="btn btn-primary btn-sm" >
                                        verander foto
                                    </label>
                                    <button type="submit" name="fileSubmit" class="btn btn-primary btn-sm" >
                                        Opslaan
                                    </button>

								</form>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="row mb-3 d-none">
								<div class="col">
									<div class="card text-white bg-primary shadow"> </div>
								</div>
								<div class="col"> </div>
                            </div>
							<div class="row">
								<div class="col">
									<div class="card shadow mb-3">
										<div class="card-header py-3">
											<p class="text-primary m-0 fw-bold">User Settings</p>
										</div>
										<div class="card-body">
											<form method="post">
												<div class="row">
													<div class="col">
														<div class="mb-3">
															<label class="form-label" for="email">
																<strong> Email </strong>
															</label>
															<input
																class="form-control"
																type="email"
																id="email"
																value="<?= $user->email?>"
																name="email"
															/>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col">
														<div class="mb-3">
															<label class="form-label" for="first_name">
																<strong> Voornaam </strong>
															</label>
															<input
																class="form-control"
																type="text"
																id="first_name"
																value="<?= $user->voornaam?>"
																name="fname"
															/>
														</div>
													</div>
													<div class="col">
														<div class="mb-3">
															<label class="form-label" for="last_name">
																<strong> Achternaam </strong>
															</label>
															<input
																class="form-control"
																type="text"
																id="last_name"
																value="<?= $user->achternaam;?>"
																name="lname"
														/></div>
													</div>
												</div>
                                                <div class="row">
													<div class="col">
														<div class="mb-3">
															<label class="form-label" for="pwd">
																<strong> Huidige Wachtwoord </strong>
															</label>
															<input
																class="form-control"
																type="password"
																id="pwd"
																name="pwd"
															/>
														</div>
													</div>
													<div class="col">
														<div class="mb-3">
															<label class="form-label" for="newPwd">
																<strong> Nieuwe Wachtwoord </strong>
															</label>
															<input
																class="form-control"
																type="password"
																id="newPwd"
																name="newPwd"
														/></div>
													</div>
												</div>
												<div class="mb-3">
													<button
														class="btn btn-primary btn-sm"
														name="userInfoSubmit"
														type="submit"
													>
														Opslaan
													</button>
												</div>
											</form>
										</div>
									</div>
									<div class="card shadow">
										<div class="card-header py-3">
											<p class="text-primary m-0 fw-bold">Contact Settings</p>
										</div>
										<div class="card-body">
											<form method="post">
                                                <div class="row w-50">
                                                    <div class=" col mb-3">
                                                        <label class="form-label" for="woonplaats">
                                                            <strong> Woonplaats </strong>
                                                        </label>
                                                        <input
                                                                class="form-control"
                                                                type="text"
                                                                id="woonplaats"
                                                                value="<?= $user->woonplaats?>"
                                                                name="woonplaats"
                                                        /></div>

                                                    <div class=" col-3 mb-3">
                                                        <label class="form-label" for="huisnummer">
                                                            <strong> Huisnummer </strong>
                                                        </label>
                                                        <input
                                                                class="form-control"
                                                                type="text"
                                                                id="huisnummer"
                                                                value="<?= $user->huisnummer?>"
                                                                name="huisnummer"
                                                        /></div>
                                                </div>
												<div class="row w-50">
													<div class="col-3">
														<div class="mb-3"
															><label class="form-label" for="postcode"
																><strong>Postcode</strong></label
															><input
																class="form-control"
																type="text"
																id="postcode"
                                                                value="<?= $user->postcode?>"
																name="postcode"
														/></div>
													</div>
													<div class="col">
														<div class="mb-3"
															><label class="form-label" for="city"
																><strong>Stad</strong></label
															><input
																class="form-control"
																type="text"
																id="city"
                                                                value="<?= $user->stad?>"
																name="stad"
														/></div>
													</div>
												</div>
												<div class="mb-3">
													<button name="adressInfoSubmit" class="btn btn-primary btn-sm" type="submit">
														Opslaan
													</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mt-5 "><?php include_once('defaults/footer.php'); ?></div>
		</div>
	</body>
    <script>
        function viewImg(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $("#img").attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</html>

