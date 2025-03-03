<?php require 'db/categories-db.php';

$categories = getCategoryNames();

?>

<form action="../archives.php" method="post">
    <div class="form-group">
        <label for="categories">Catégories</label>
        <select class="form-control" id="archives-categories" name="archives-categories">
            <option value="">Choisir une catégorie</option>
            <?php foreach ($categories as $category): ?>
                <option value="<?php echo $category['id'] ?>"><?php echo $category['label'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Valider</button>
</form>