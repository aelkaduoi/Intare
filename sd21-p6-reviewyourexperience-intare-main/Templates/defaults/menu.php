<?php
$merken = getCategories();

if(isset($_SESSION["userId"])) {
    $user = getUser(intval($_SESSION["userId"]))[0];
}

?>

<div class="sticky-top">
    <nav class="navbar  navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-3"
               href="/home">
                <svg width="147"
                     height="39"
                     viewBox="0 0 147 39"
                     fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.102475 38.5976V11.8929H8.45417V38.5976H0.102475ZM4.28686 8.78082C3.11409 8.78082 2.10643 8.38674 1.26386 7.59858C0.421285 6.79883 0 5.83681 0 4.71252C0 3.59982 0.421285 2.64939 1.26386 1.86123C2.10643 1.06148 3.11409 0.661604 4.28686 0.661604C5.47101 0.661604 6.47868 1.06148 7.30986 1.86123C8.15243 2.64939 8.57372 3.59982 8.57372 4.71252C8.57372 5.83681 8.15243 6.79883 7.30986 7.59858C6.47868 8.38674 5.47101 8.78082 4.28686 8.78082Z"
                          fill="black"/>
                    <path d="M22.1217 23.3676V38.5976H13.77V11.8929H21.7118V16.7957H22.0022C22.5829 15.1614 23.5735 13.8807 24.9739 12.9534C26.3744 12.0146 28.0425 11.5452 29.9781 11.5452C31.8227 11.5452 33.4224 11.9682 34.7774 12.8143C36.1437 13.6489 37.2026 14.8195 37.9541 16.3263C38.7169 17.8215 39.0927 19.5717 39.0813 21.5768V38.5976H30.7296V23.2459C30.741 21.7623 30.371 20.6032 29.6195 19.7687C28.8794 18.9342 27.8489 18.5169 26.5281 18.5169C25.6514 18.5169 24.8772 18.714 24.2054 19.108C23.545 19.4905 23.0326 20.0411 22.6683 20.7597C22.3153 21.4783 22.1331 22.3476 22.1217 23.3676Z"
                          fill="black"/>
                    <path d="M59.0596 11.8929V18.1518H42.5099V11.8929H59.0596ZM45.977 5.49489H54.3287V30.2003C54.3287 30.7218 54.4084 31.1449 54.5678 31.4694C54.7386 31.7824 54.9834 32.0084 55.3022 32.1475C55.621 32.275 56.0024 32.3387 56.4465 32.3387C56.7653 32.3387 57.1012 32.3097 57.4542 32.2518C59.7935 33.0802 72.1422 3.17363 72.1422 0L140.595 4.63123L74.7639 7.27764C74.7639 6.61604 66.9428 37.0498 57.847 38.6498C57.1297 38.8237 56.27 38.9338 55.268 38.9801C53.3096 39.0729 51.6302 38.841 50.2297 38.2847C48.8406 37.7168 47.776 36.8359 47.0359 35.642C46.3072 34.4482 45.9542 32.9472 45.977 31.1391V5.49489Z"
                          fill="black"/>
                    <path d="M82.6203 38.5281C80.9465 38.5281 79.4606 38.2441 78.1626 37.6762C76.876 37.0967 75.8569 36.2274 75.1054 35.0683C74.3653 33.8977 73.9953 32.4314 73.9953 30.6697C73.9953 29.1861 74.2515 27.9343 74.7639 26.9143C75.2762 25.8943 75.9822 25.0656 76.8817 24.4281C77.7812 23.7906 78.8173 23.3096 79.9901 22.9851C81.1628 22.649 82.4153 22.423 83.7475 22.3071C85.2391 22.168 86.4403 22.0231 87.3512 21.8724C88.2621 21.7101 88.9224 21.4841 89.3323 21.1944C89.7536 20.893 89.9643 20.4699 89.9643 19.9252V19.8383C89.9643 18.9458 89.6626 18.2561 89.0591 17.7693C88.4556 17.2825 87.6415 17.0391 86.6168 17.0391C85.5123 17.0391 84.6242 17.2825 83.9524 17.7693C83.2806 18.2561 82.8537 18.9284 82.6715 19.7861L74.9688 19.5079C75.1965 17.8852 75.7829 16.4364 76.728 15.1614C77.6844 13.8749 78.9938 12.8665 80.6562 12.1363C82.3299 11.3945 84.3396 11.0236 86.6851 11.0236C88.3588 11.0236 89.9017 11.2264 91.3135 11.6321C92.7254 12.0262 93.9551 12.6057 95.0026 13.3707C96.0501 14.1241 96.8586 15.0513 97.4279 16.1524C98.0085 17.2536 98.2989 18.5111 98.2989 19.9252V38.0761H90.4425V34.3555H90.2375C89.7707 35.2595 89.1729 36.0245 88.4442 36.6504C87.7269 37.2763 86.8787 37.7457 85.8994 38.0587C84.9316 38.3716 83.8386 38.5281 82.6203 38.5281ZM85.1992 32.9646C86.0987 32.9646 86.9071 32.7792 87.6244 32.4083C88.3531 32.0374 88.9338 31.5274 89.3665 30.8783C89.7992 30.2176 90.0155 29.4527 90.0155 28.5834V26.045C89.7764 26.1725 89.4861 26.2884 89.1445 26.3927C88.8143 26.4971 88.4499 26.5956 88.0514 26.6883C87.6529 26.781 87.243 26.8622 86.8217 26.9317C86.4004 27.0012 85.9962 27.065 85.6091 27.1229C84.8235 27.2504 84.1517 27.4475 83.5938 27.7141C83.0472 27.9806 82.6259 28.3284 82.3299 28.7572C82.0453 29.1745 81.9029 29.6729 81.9029 30.2524C81.9029 31.1333 82.2104 31.8055 82.8252 32.2692C83.4514 32.7328 84.2428 32.9646 85.1992 32.9646Z"
                          fill="black"/>
                    <path d="M103.406 38.0761V11.3713H111.518V16.2394H111.791C112.27 14.4776 113.05 13.1679 114.131 12.3102C115.213 11.4409 116.471 11.0062 117.906 11.0062C118.293 11.0062 118.691 11.0352 119.101 11.0931C119.511 11.1395 119.893 11.2148 120.246 11.3192V18.7082C119.847 18.5691 119.323 18.459 118.674 18.3778C118.037 18.2967 117.467 18.2561 116.966 18.2561C115.976 18.2561 115.082 18.4822 114.285 18.9342C113.499 19.3746 112.879 19.9947 112.423 20.7945C111.979 21.5826 111.757 22.5099 111.757 23.5762V38.0761H103.406Z"
                          fill="black"/>
                    <path d="M134.549 38.5803C131.805 38.5803 129.437 38.0297 127.444 36.9286C125.463 35.8159 123.937 34.2338 122.867 32.1822C121.808 30.1191 121.279 27.6677 121.279 24.828C121.279 22.0694 121.814 19.6586 122.884 17.5955C123.955 15.5208 125.463 13.9097 127.41 12.7622C129.357 11.6031 131.652 11.0236 134.293 11.0236C136.16 11.0236 137.868 11.3192 139.417 11.9103C140.965 12.5014 142.303 13.3765 143.43 14.5356C144.558 15.6946 145.434 17.1261 146.061 18.8299C146.687 20.5221 147 22.4635 147 24.6541V26.7752H124.199V21.8376H139.229C139.218 20.9336 139.007 20.128 138.597 19.421C138.187 18.714 137.624 18.1634 136.906 17.7693C136.2 17.3637 135.386 17.1608 134.464 17.1608C133.53 17.1608 132.693 17.3753 131.953 17.8041C131.213 18.2214 130.627 18.7951 130.194 19.5253C129.761 20.2439 129.534 21.0611 129.511 21.9767V27.0012C129.511 28.0908 129.722 29.047 130.143 29.8699C130.564 30.6813 131.162 31.3129 131.936 31.765C132.71 32.217 133.633 32.443 134.703 32.443C135.443 32.443 136.115 32.3387 136.718 32.1301C137.322 31.9215 137.84 31.6143 138.273 31.2086C138.705 30.803 139.03 30.3046 139.246 29.7134L146.915 29.9395C146.596 31.6896 145.896 33.2138 144.814 34.512C143.744 35.7985 142.337 36.8011 140.595 37.5197C138.853 38.2267 136.838 38.5803 134.549 38.5803Z"
                          fill="black"/>
                </svg>
            </a>
            <button class="navbar-toggler "
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class=" navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse w-100 me-3 pe-5 flex-lg-row-reverse "
                 id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active  text-dark fw-bold"
                           aria-current="page"
                           href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  text-dark fw-bold"
                           aria-current="page"
                           href="/about">Over ons</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  text-dark fw-bold"
                           aria-current="page"
                           href="/about/#contact">contact</a>
                    </li>
                    <li class="nav-item">

                        <?php
                        if (isset($_SESSION["login"])) { ?>
                            <?php if ($_SESSION["login"]): ?>
                                <div class="nav-item dropdown no-arrow">
                                    <a class="dropdown-toggle nav-link" aria-expanded="false"data-bs-toggle="dropdown" href="#">
                                        <span class="text-black fw-bold"><?php if (isset($_SESSION["fname"])) {
                                                echo ucfirst($_SESSION["fname"]) . " " . ucfirst($_SESSION["lname"]);
                                            } ?>
                                        </span>
                                        <img class="border rounded rounded-circle img-profile"
                                             src="<?php
                                             if ($user->foto){
                                                 echo "/img/user/".$user->foto.".png?".mt_rand();
                                             }else{
                                                 echo "/img/user/standaard.jpeg";
                                             }
                                             ?>" style="width: 2rem; height: 2rem;">
                                    </a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                        <a class="dropdown-item" href="/<?php echo $_SESSION["user"]; ?>/profiel">
                                            <i class="fas fa-user fa-sm fa-fw me-2 text-gray-400">

                                            </i>&nbsp;
                                            Profiel
                                        </a>
                                        <?php if(isset($_SESSION["user"])): ?>
                                            <?php if($_SESSION["user"] == "admin"): ?>
                                        <a class="dropdown-item" href="/<?php echo $_SESSION["user"]; ?>/table">
                                            <i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;
                                            Producten
                                        </a>
                                        <?php endif;?>
                                        <?php endif;?>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/logout">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;
                                            Logout
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($_SESSION["login"] == false): ?>
                                <a class="nav-link active  text-dark fw-bold"
                                   aria-current="page"
                                   href="/login">login</a>
                            <?php endif; ?>
                        <?php } else {
                            echo '<a class="nav-link active  text-dark fw-bold"
                                           aria-current="page"
                                           href="/login">login</a>';
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <div class="navbar navbar-expand-lg border-bottom "
         style="background: black;
            box-sizing: border-box;  border-image:
                linear-gradient(
                to right,
                 rgba(158, 0, 0)  ,
            rgba(158, 0, 0,10%) ) 10 1%
    ">

        <div class="collapse navbar-collapse ms-3"
             id="navbarNav">
            <!--            collapse navbar-collapse-->
            <ul class="navbar-nav">
                <?php
                foreach ($merken as $merken): ?>
                    <li class="nav-item">
                        <a class="nav-link active  text-light fw-bold "
                           href="/merk/<?=
                            $merken->id; ?>">
                            <?php if ($merken->naam == "bmw") {
                                echo strtoupper($merken->naam);
                            } else {
                                echo ucfirst($merken->naam);
                            } ?></a>
                    </li>

                <?php
                endforeach; ?>
            </ul>
        </div>


    </div>


</div>