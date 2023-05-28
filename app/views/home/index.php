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
        <button type="button" class="btn btn-primary mt-5 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add
        </button>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="text-center">STT</th>
                    <th scope="col" class="text-center">Title</th>
                    <th scope="col" class="text-center">Summary</th>
                    <th scope="col" class="text-center">Category</th>
                    <th scope="col" colspan="2" class="text-center">Handle</th>
                </tr>
            </thead>
            <tbody>
                <?php $count =1;?>
                <?php foreach ($articles as $article) { ?>
                    <tr>
                        <th scope="row" class="text-center"><?php echo $count ?></th>
                        <td><?php echo $article->getTitle() ?></td>
                        <td><?php echo $article->getSummary() ?></td>
                        <td class="text-center"><?php echo $article->getCategory_name()?></td>
                        <td class="text-center">
                            <a class="btn btn-warning text-center"href="index.php?controller=article&action=edit&id=<?php echo $article->getId()?>">Edit</a>
                            <a class="btn btn-danger text-center" href="index.php?controller=article&action=del&id=<?php echo $article->getId()?>"
                            onclick="return confirm('Are you sure want to delete?')"
                            >Del</a>
                        </td>
                    </tr>
                <?php $count++;} ?>
            </tbody>
        </table>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Article Information</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="index.php?controller=article&action=add" method="post">
                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Summary</label>
                                <input type="text" class="form-control" name="summary">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Category</label>
                                <select class="form-select" aria-label="Default select example" name="category_id">
                                    <option selected>Open this select menu</option>
                                    <?php foreach($categories as $category){?>
                                    <option value="<?php echo $category->getId()?>"><?php echo $category->getName()?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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