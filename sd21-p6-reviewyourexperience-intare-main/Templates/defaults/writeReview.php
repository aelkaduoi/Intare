<?php
global $userId;
?>
<?php if($userId): ?>
        <div  class="row  mx-2 d-flex justify-content-center">
            <div id="writeReview" class=" collapse col-md-6 col-xl-4">
                    <form class="p-xl-4" method="post">
                        <div  class="d-flex gap-2 mb-1 fs-1 justify-content-center">
                            <?php for($i = 1; $i <= 5; $i++): ?>
                            <input style="display: none;" type="radio" name="star" value="<?= $i?>" id="<?= $i?>star">
                            <label style="cursor: pointer" onclick="clickRating(<?= $i?>)" onmouseover="enterRating(<?= $i?>)" onmouseleave="leaveRating(<?= $i?>)" for="<?= $i?>star">
                                <i id="kijken" class="writeStar bi bi-star" style="width: fit-content; color:gold;"></i>
                            </label>
                            <?php endfor;?>

                        </div>
                        <div class="mb-3">
                            <textarea id="reviewText" oninput="textCount(this)" class="form-control" id="message-1" name="review" rows="6" placeholder="Message"></textarea>
                        </div>
                        <div class=" d-flex justify-content-end">
                            <p id="textCount" class="text-white p-1 m-1 pt-0 mt-0">Nog 120 woorden over</p>
                        </div>
                        <div><button name="submit" class="btn btn-primary shadow d-block w-100" type="submit">Send </button></div>
                    </form>
                </div>
        </div>
<?php endif;?>