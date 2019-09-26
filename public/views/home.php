<?php
$characters = Character::getAllCharacters();

// foreach (glob("./class/*.php") as $file) {
//     require $file;
// }
?>

<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <?php foreach ($characters as $key => $value) : ?>

            <div class="" style="max-height: 90vh; max-width: 45vh">
                <div class="card-content align-center shadow-2dp card text-white bg-dark mb-3">
                    <div class="center-text card-header"> <?= $value->name; ?>
                        <div>
                        </div>
                    </div>
                    <div class="card-body">
                        <img class="img-home" src="<?= $value->img?>" alt="Card image <?= ++$key ?>" height="300px" width="auto">
                        <h4 class="card-title"></h4>
                        <p class="card-text"><?= $value->weapon ?></p>
                    </div>
                    <div class="card-footer text-muted ">
                        <h5 class="mb-2 text-white"><?= $value->gender ?> </h5>
                        <h6 class="mb-2 text-white"> <?= $value->role ?> - <?= $value->race ?></h6>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <div class="col-3"></div>
</div>
<?php require_once 'public/layouts/footer.php';
