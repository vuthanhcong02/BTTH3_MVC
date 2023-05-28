<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <div class="container mt-5 p-3">
    <form action="index.php?controller=article&action=update" method="post">
      <div class="mb-3">
        <label for="" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo $article['title']?> ">
        <input type="hidden" class="form-control" name="id" value="<?php echo $article['id']?> ">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Summary</label>
        <input type="text" class="form-control" name="summary" value="<?php echo $article['summary']?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="">Category</label>
        <select class="form-select" aria-label="Default select example" name="category_id" value="<?php echo $article['category_id']?>">
          <option selected>Open this select menu</option>
          <?php foreach ($categories as $category) {?>
            <?php if ($category['id'] == $article['category_id']) {
                echo '<option value="'. $category['id'].'" selected>'. $category['name'].'</option>';
             }else{
                echo '<option value="'. $category['id'].'">'. $category['name'].'</option>';

             } ?>
          <?php } ?>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Add</button>
    </form>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>