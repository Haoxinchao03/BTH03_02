<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <div class = "container">
        <h3 class="text-center text-uppercase text-success my-3">sach Admin</h3>
        <a href="<?php echo DOMAIN . "/public/index.php?action=create" ?>" class = 'btn btn-success'>Thêm mới</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ib</th>
                <th scope="col">tenSach</th>
                <th scope="col">namXuatBan</th>
                <th scope="col">idTacGia</th>
                
                </tr>
            </thead>
            <tbody>
                <?php  $index = 1;
                    foreach($sachs as $sach){
                ?>
                        <tr>
                        <th scope="row"><?php echo $index ?></th>
                        <td><?php echo $sach->getid();?></td>
                        <td><?php echo $sach->gettenSach();?></td>
                        <td><?php echo $sach->getnamXuatBan();?></td>
                        <td><?php echo $sach->getidTacGia();?></td>
                        <td>
                            <a href="<?= DOMAIN . '/public/index.php?action=edit&id='.$sach->getId(); ?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo DOMAIN . '/public/index.php?action=delete'?>"
                            method="post">
                            <input hidden name="id" type="text" value="<?php echo $sach->getId() ?>"/>
                            <button class="btn btn-danger" onclick="confirm('Do you want to delete')">Delete</button>
                            </form>
                        </td>
                        
                </tr>
                <?php $index++;
                    }
                ?>
                
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>