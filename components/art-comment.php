<?php

require 'db/comment-db.php';

//$commentsOneArticle = getCommentsOneArticle(12);
// var_dump($commentsOneArticle);

?>

<?php

$commentsOneArticle = getCommentsOneArticle($article_id);

?>

<form>
  <?php foreach ($commentsOneArticle as $commentKey => $comment): ?>
    <div>
      <ul>
        <li><?php echo $comment['comment_author']; ?></li>
        <li><?php echo $comment['published_at']; ?></li>
      </ul>
      <p><?php echo $comment['content'] ?></p>
    </div>
  <?php endforeach ?>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Write your comment :</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder='Leave a reply'></textarea>
  </div><br>
  <button type="submit" class="btn btn-primary mb-2">Comment</button>
</form>