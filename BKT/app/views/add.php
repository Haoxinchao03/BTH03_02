<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Index</title>
</head>
<body>
<div class="container mt-3">
    <div class="d-flex " style="justify-content: space-between;align-items: center">
        <h4>Thêm sách</h4>
    </div>

    <div class="container">
        <a class="btn btn-primary" href="<?php echo DOMAIN."/public"?>">Trở về trang chủ</a>

        <form action="<?php echo DOMAIN."/public/index.php?action=store"?>" method="post">

            <div class="mb-3 col">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="mb-3 col">
                <label for="author" class="form-label">Author</label>
                <input type="text" id="author" name="author" class="form-control" required>
            </div>

            <div class="mb-3 col">
                <label for="publisher" class="form-label">Publisher</label>
                <input type="text" id="publisher" name="publisher" class="form-control" required>
            </div>

            <div class="mb-3 col">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" id="isbn" name="isbn" class="form-control" required>
            </div>

            <button class="btn btn-success">Create</button>
        </form>
    </div>

</div>
</body>
</html>