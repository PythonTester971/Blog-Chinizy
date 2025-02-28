<?php

require 'db/comment-db.php';

$commentsOneArticle = getCommentsOneArticle($article_id);

?>

<form>
  <?php foreach ($commentsOneArticle as $uniqueComment): ?>
    <div class="form-control form-control-lg mb-3" type="text" aria-label=".form-control-lg example">
      <ul class="list-inline">
        <li class="list-inline-item"><?php echo $uniqueComment['comment_author']; ?></li>
        <li class="list-inline-item"><?php echo $uniqueComment['published_at']; ?></li>
      </ul>
      <p><?php echo $uniqueComment['content'] ?></p>
    </div>
  <?php endforeach ?>
</form>

<form action="/actions/create-comment.php" method="post">
  <div class="form-group">
    <label for="author">Votre nom :</label>
    <input type="text" class="form-control" id="author" name="author" placeholder="ex: jeanjean43">

    <br>

    <label for="message">Votre commentaire :</label>
    <textarea class="form-control mt-3" id="message" name="message" rows="3" placeholder='Commentaire'></textarea>

    <br>

    <input type="hidden" class="form-control" id="article-id" name="article-id" value="<?php echo $article_id ?>">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Comment</button>
</form>