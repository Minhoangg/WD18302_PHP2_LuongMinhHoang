<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container m-auto bg-info">
        <h1 class='fw-bold text-center'>
            Tìm thông tin sách theo tên
        </h1>
        <div class="container  p-2">
            <h3>
                Giá:
                <?php if (!empty($info_book['price']) ? $info_book['price'] : "")
                    echo $info_book['price'];
                ?>
            </h3>
            <h3>
                Tác giả:
                <?php if (!empty($info_book['author']) ? $info_book['author'] : "")
                    echo $info_book['author'];
                ?>
            </h3>
        </div>
        <form action="" method="post">
            <label for="book">Nhập tên sách</label>
            <input class="form-control mb-2" type="text" name="name_book">
            <button class="btn btn-success " type="submit">Tìm</button>
        </form>
    </div>



  
</body>

</html>