<?php include_once './components/header.php'; ?>

<main class="container">

    <h1>Créer mon compte</h1>
    <form action="./actions/create-user.php" method="post">
        <div class="form-group">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="ex: dédé94" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="ex: dédé94@mailbox.com" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
</main>

<?php include_once './components/footer.php' ?>