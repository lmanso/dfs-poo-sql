<?php
$characters = Character::getAllCharacters();
$races = Character::getAllRaces();
$roles = Character::getAllRoles();
?>

<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ($characters as $key => $value) :
                    // var_dump($characters);
                    // // die;
                    ?>
                    <div class="swiper-slide">
                        <div class="" style="max-height: 90vh; max-width: 45vh">
                            <div class="card-content align-center shadow-2dp card text-white bg-dark mb-3">
                                <a href="/deleteCharacter?<?= $value->id ?>">
                                    <button id="<?= $value->id ?>" type="button" class="btn btn-danger shadow-2dp">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </a>
                                <button type="button" data-target="#update" data-toggle="modal" data-character_id="<?php echo $value->id ?>" class="my-4 center-text btn btn-font-size btn-info shadow-2dp">
                                    <i class="far fa-edit"></i>
                                </button>
                                <div class="card-body">
                                    <img class="img-home" src="<?= $value->img ?>" alt="Card image <?= ++$key ?>" height="300px" width="auto">
                                    <h4 class="card-title"></h4>
                                    <p class="card-text"><?= $value->weapon ?></p>
                                </div>
                                <div class="card-footer">
                                    <h5 class="mb-2 text-white"><?= $value->gender ?> </h5>
                                    <h6 class="mb-2 text-white"> <?= $value->role ?> - <?= $value->race ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="col-3">
            <button type="button" class="btn btn-primary btn-font-size btn-on-profile"><i class="fas fa-user-plus fa-lg"></i></button>
        </div>
    </div>
    <!-- Modal -->
    <form action="/insertCharacters" method="post">
        <fieldset>
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" class="form-control" name="name" aria-describedby="Donnez un nom a votre personnage" placeholder="Donnez un nom a votre personnage">
            </div>
            <div class="form-group">
                <label for="races">Sélectionner une race :</label>
                <select class="form-control" name="race">
                    <?php foreach ($races as $key => $value) : ?>
                        <option value="<?= ++$key ?>"><?= $value->name ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label for="roles">Sélectionner un role :</label>
                <select class="form-control" name="role">
                    <?php foreach ($roles as $key => $value) : ?>
                        <option value="<?= ++$key ?>"><?= $value->name ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label for="roles">Sélectionner un genre :</label>
                <select class="form-control" name="gender">
                    <option value="1">Femme</option>
                    <option value="2">Homme</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Point de vie :</label>
                <input type="number" name="health" min="10" max="100">
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Mana :</label>
                <input type="number" name="mana" min="10" max="100">
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Force :</label>
                <input type="number" name="strenght" min="10" max="100">
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Puissance :</label>
                <input type="number" name="power" min="10" max="100">
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Energie :</label>
                <input type="number" name="energy" min="10" max="100">
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Vitesse :</label>
                <input type="number" name="speed" min="10" max="100">
            </div>
            <div class="form-group">
                <label for="">Arme :</label>
                <input type="text" class="form-control" name="weapon" aria-describedby="Donnez une arme a votre personnage" placeholder="Donnez une arme a votre personnage">
            </div>
            <div class="form-group">
                <label for="">Image (via url)</label>
                <input type="input" class="form-control" name="image" aria-describedby="l'image illustrera votre article" placeholder="">
            </div>
        </fieldset>
        <div class="form-footer">
            <button type="submit" class="btn btn-success">Valider</button>
        </div>
</div>

</form>
<?php include_once("public/views/modal_form_update.php") ?>
</div>