<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Lương Minh Hoàng</title>
</head>

<body>

<div class="container">
    <h1 class='text-center m-3 text-primary'>
        Bảng thông tin sách
    </h1>
    <div class="row">
        <div class="col-12">
            <table class="table-success table table-striped">
                <thead>
                <tr>
                    <th>Tên sách</th>
                    <th>Giá</th>
                    <th>Tác giả</th>
                    <th>Loại sách</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $info_books = select_book();
                foreach ($info_books as $row):
                    ?>
                    <tr>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['price'] ?></td>
                        <td><?= $row['author'] ?></td>
                        <td><?= $row['category'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

</body>

</html>