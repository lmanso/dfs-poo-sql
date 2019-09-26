<fieldset>
    <input type="hidden" class="btn" name="bookid" value="">
    <div class="form-group">
        <label for="">Titre</label>
        <input type="input" class="form-control" name="name" aria-describedby="Donnez un titre à votre article" placeholder="Titre de votre article">
    </div>
    <div class="form-group">
        <label for="genres">Modifier le genre du livre :</label>
        <select class="form-control" name="genre">
            <?php foreach ($genres as $key => $value) : ?>
                <option value="<?= ++$key ?>"><?= $value["name"] ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="form-group">
        <label for="grades">Modifier le grade :</label>
        <select class="form-control" name="grade">
            <?php foreach ($grades as $key => $value) : ?>
                <option value="<?= ++$key ?>"><?= $value["name"] ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="form-group">
        <label for="author">Modifier l'auteur :</label>
        <select class="form-control" name="author">
            <?php foreach ($authors as $key => $value) : ?>
                <option value="<?= ++$key ?>"><?= $value["name"] ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleTextarea">Modifier le résumé :</label>
        <textarea class="form-control" name="summary" rows="3" placeholder="Ecrivez le contenu de votre article"></textarea>
    </div>
    <div class="form-group">
        <label for="">Modifier l'image (via url)</label>
        <input type="input" class="form-control" name="image" aria-describedby="l'image illustrera votre article" placeholder="">
    </div>
</fieldset>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-success">Valider</button>
</div>
</form>