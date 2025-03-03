<?php include_once './components/header.php';

require './db/categories-db.php';

$categories = getCategoryNames();

?>

<main class="container">

    <h1>Formulaire de création d'article</h1>
    <form action="actions/create-article.php" method="post">
        <div class="form-group mb-3">
            <label for="write-title">Titre de l'article</label>
            <input type="text" class="form-control" id="write-title" name='write-title' placeholder="Ecrivez votre titre">
        </div>
        <div class="form-group mb-3">
            <label for="write-author">Auteur de l'article</label>
            <input type="text" class="form-control" id="write-author" name='write-author' placeholder="Ecrivez votre pseudo">
        </div>
        <div class="form-group mb-3">
            <label for="choose-category">Catégorie de l'article</label>
            <select class="form-control" id="choose-category" name="choose-category" required>
                <option value="">--Choisir une catégorie--</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?php echo $category['id'] ?>"><?php echo $category['label'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="write-content">Contenu de l'article</label>
            <textarea class="form-control" id="write-content" name="write-content" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Poster l'article</button>
    </form>
</main>
<?php include_once './components/footer.php' ?>