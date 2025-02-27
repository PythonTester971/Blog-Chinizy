
<?php include_once 'components/header.php'?>

<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Article title</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="What it's about">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Article category</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Article content</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Article image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>

<?php include_once 'components/footer.php'?>